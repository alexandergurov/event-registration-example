<?php

namespace App\EventListener;

use registration\src\Exception\LogException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Event\LoginFailureEvent;
use Symfony\Component\Validator\Exception\ValidationFailedException;

#[AsEventListener(event: ExceptionEvent::class, method: 'onKernelException', priority: 2)]
#[AsEventListener(event: LoginFailureEvent::class, method: 'onLoginFailureEvent', priority: 2)]
class ExceptionListener
{
    private array $mapExceptions;

    public function __construct(
        private LoggerInterface $logger
    ) {
        $this->mapExceptions = [
            LogException::class => [$this, 'badRequestHandler'],
            AccessDeniedException::class => [$this, 'accessDeniedHandler'],
            NotFoundHttpException::class => [$this, 'notFoundHandler'],
            BadRequestHttpException::class => [$this, 'badRequestHandler'],
            HttpException::class => [$this, 'httpExceptionHandler'],
        ];
    }

    public function onLoginFailureEvent(LoginFailureEvent $event): void
    {
        $exception = $event->getException();
        $response = $this->response(
            code: Response::HTTP_UNAUTHORIZED,
            cause: $exception->getMessage(),
            statusCode: Response::HTTP_UNAUTHORIZED
        );
        $event->setResponse($response);
    }

    public function onKernelException(ExceptionEvent $event): void
    {
        $env = $event->getRequest()->server->get('APP_ENV');
        $exception = $event->getThrowable();

        foreach ($this->mapExceptions as $instance => $handler)
        {
            if ($exception instanceof $instance) {
                $response = call_user_func_array($handler, [$event, $exception]);

                if ($response instanceof Response) {
                    $event->setResponse($response);
                    return;
                }
            }
        }

        $response = $this->response(
            code: Response::HTTP_INTERNAL_SERVER_ERROR,
            cause: $env == 'dev'
                ? [get_class($exception), $exception->getMessage(), $exception->getTrace()]
                : 'INTERNAL_SERVER_ERROR',
            statusCode: Response::HTTP_INTERNAL_SERVER_ERROR
        );
        $this->logger->error(implode("\n", [get_class($exception), $exception->getMessage()]));
        $event->setResponse($response);
    }

    public function httpExceptionHandler(ExceptionEvent $event, $exception): ?Response
    {
        $prevException = $exception?->getPrevious();
        $statusCode = $exception->getStatusCode();

        if ($prevException instanceof ValidationFailedException) {
            $message = $exception->getMessage();
            $fieldValidationErrors = [];
            foreach ($prevException->getViolations() as $violation) {
                if ($violation->getPropertyPath() && ($violation->getPropertyPath() !== 'data')) {
                    if (str_starts_with($violation->getMessage(), 'This value')) {
                        $fieldValidationErrors[] = $violation->getPropertyPath();
                    } else {
                        $message = "{$violation->getMessage()}";
                    }
                }
            }
            if (!empty($fieldValidationErrors)) {
                $message = "Некорректные значения для полей [" . implode(",", $fieldValidationErrors ) . "]";
            }

            return $this->response(
                code: 1001,
                cause: $message,
                statusCode: Response::HTTP_BAD_REQUEST
            );
        }

        if ($statusCode >= 400 && $statusCode != 500) {
            return $this->response(
                code: $statusCode,
                cause: $exception->getMessage(),
                statusCode: $statusCode
            );
        }

        return null;
    }

    public function notFoundHandler(ExceptionEvent $event, $exception): ?Response
    {
        if (preg_match('/"(App\\\Entity\\\[^"]+)" object not found by "([^"]+EntityValueResolver)"/i', $exception->getMessage(), $m)) {
            $entityClass = $m[1];
            $text = match($entityClass) {
                default => 'Запись не найдена'
            };
            return $this->response(
                code: 1001,
                cause: $text,
                statusCode: Response::HTTP_BAD_REQUEST
            );
        }

        return $this->response(
            code: Response::HTTP_NOT_FOUND,
            cause: $exception->getMessage(),
            statusCode: Response::HTTP_NOT_FOUND
        );
    }

    public function badRequestHandler(ExceptionEvent $event, $exception): ?Response
    {
        return $this->response(
            code: $exception->getCode() ?: Response::HTTP_BAD_REQUEST,
            cause: $exception->getMessage(),
            statusCode: Response::HTTP_BAD_REQUEST
        );
    }

    public function accessDeniedHandler(ExceptionEvent $event, AccessDeniedException $exception): ?Response
    {
        $error = [
            'errorCode' => $exception->getCode(),
            'errorCause' => 'Доступ запрещен.',
        ];
        return new JsonResponse(['errors' => [$error]], Response::HTTP_FORBIDDEN);
    }

    public function response($code, $cause, $statusCode): ?Response
    {
        return new JsonResponse([
            'errors' => [
                [
                    'errorCode' => $code,
                    'errorCause' => $cause
                ]
            ]
        ], $statusCode);
    }
}