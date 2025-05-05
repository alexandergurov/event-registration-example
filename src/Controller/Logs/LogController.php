<?php

namespace App\Controller\Logs;

use microservices\eventuse registration\src\Entity\Log;
use registration\src\Exception\LogException;
use registration\src\Filter\LogQueryFilter;
use registration\src\Messenger\Message\LogRegistrationMessage;
use registration\src\Model\LogQueryDTO;
use registration\src\Model\LogRequestDTO;
use registration\src\Service\LogManager;
use registration\src\Service\LogObjectManager;
use registration\src\Service\UserProfile;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\MapQueryString;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Attributes as OA;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\HttpFoundation\Response;

class LogController extends BaseController
{
    private LoggerInterface $logger;
    public function __construct(
        protected LogManager             $logManager,
        protected LogObjectManager       $logObjectManager,
        protected UserProfile            $userProfile,
        private readonly LoggerInterface $messageRegistrationLogger,
    )
    {
        $this->logger = $this->messageRegistrationLogger;
    }

    /**
     * @param registration\src\Model\LogQueryDTO $dto
     * @return JsonResponse
     * @throws ExceptionInterface
     */

    #[OA\Response(
        response: 200,
        description: 'Возвращает историю поиска',
        content: new OA\JsonContent(ref: '#/components/schemas/EventSearchList')
    )]
    #[OA\Response(
        response: 400,
        description: 'Ошибка',
        content: new OA\JsonContent(ref: '#/components/schemas/Errors')
    )]
    #[OA\QueryParameter(name: 'user', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(name: 'subsystemCode', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(name: 'logCategory', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(name: 'logObject', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(
        name: 'sort',
        description: "Возможные значения:
                     \n - createdAt  (Дата и время регистрации)
                     Для указания обратного порядка сортировки (DESC), перед названием поля надо поставить знак '-'",
        schema: new OA\Schema(type: 'string')
    )]
    #[Route('internal/searchContent', name: 'app_search_content', methods: ['GET'])]
    public function searchContentList(
        #[MapQueryString] LogQueryDTO $dto = new LogQueryDTO()
    ): JsonResponse
    {
        $filter = new LogQueryFilter($dto);
        $result = $this->logManager->getList($filter->getCriteria(), $dto->page, $dto->pageSize, 'e_search_list', $dto->getSort());
        if (empty($result['data'])) {
            throw new NotFoundHttpException('Запись не найдена.');
        }
        return $this->responseList($result);
    }

    /**
     * @param registration\src\Model\LogQueryDTO $dto
     * @return JsonResponse
     * @throws ExceptionInterface
     */

    #[OA\Response(
        response: 200,
        description: 'Возвращает список событий',
        content: new OA\JsonContent(ref: '#/components/schemas/EventInternalList')
    )]
    #[OA\Response(
        response: 400,
        description: 'Ошибка',
        content: new OA\JsonContent(ref: '#/components/schemas/Errors')
    )]
    #[OA\QueryParameter(name: 'user', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(name: 'subsystemCode', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(name: 'logCategory', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(name: 'logObject', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(name: 'createdAtFrom', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(name: 'createdAtTo', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(name: 'itemsNotReturned', schema: new OA\Schema(type: 'bool'))]
    #[OA\QueryParameter(
        name: 'digitalAssistant',
        description: "Возможные значения: 
                        \n - teacher 
                        \n - parent",
        schema: new OA\Schema(type: 'string')
    )]
    #[OA\QueryParameter(
        name: 'sort',
        description: "Возможные значения:
                     \n - createdAt  (Дата и время регистрации)
                     Для указания обратного порядка сортировки (DESC), перед названием поля надо поставить знак '-'",
        schema: new OA\Schema(type: 'string')
    )]
    #[Route('internal/events', name: 'app_internal_search_content', methods: ['GET'])]
    public function searchEventList(
        #[MapQueryString] LogQueryDTO $dto = new LogQueryDTO()
    ): JsonResponse
    {
        $filter = new LogQueryFilter($dto);
        $criteria = $filter->getCriteria();
        $result = $this->logManager->getList($criteria, $dto->page, $dto->pageSize, 'e_internal_list', $dto->getSort());
        if (empty($result['data'])) {
            throw new NotFoundHttpException('Запись не найдена.');
        }
        if (isset($criteria['itemsNotReturned']) && $criteria['itemsNotReturned']) {
            $result['data'] = [];
        }
        return $this->responseList($result);
    }

    /**
     * @param registration\src\Model\LogQueryDTO $dto
     * @return JsonResponse
     * @throws ExceptionInterface
     */

    #[OA\Response(
        response: 200,
        description: 'Возвращает список типов объектов',
        content: new OA\JsonContent(ref: '#/components/schemas/LogObjectList')
    )]
    #[OA\Response(
        response: 400,
        description: 'Ошибка',
        content: new OA\JsonContent(ref: '#/components/schemas/Errors')
    )]
    #[OA\QueryParameter(name: 'sort', schema: new OA\Schema(type: 'string'))]
    #[Route('admin/logObjects', name: 'app_log_objects', methods: ['GET'])]
    public function logObjectList(
        #[MapQueryString] LogQueryDTO $dto = new LogQueryDTO()
    ): JsonResponse
    {
        $result = $this->logObjectManager->getList($dto->page, $dto->pageSize, 'log_object_list', $dto->getSort());
        if (empty($result['data'])) {
            throw new NotFoundHttpException('Запись не найдена.');
        }
        return $this->responseList($result);
    }

    /**
     * @param registration\src\Model\LogQueryDTO $dto
     * @return JsonResponse
     * @throws ExceptionInterface
     */

    #[OA\Response(
        response: 200,
        description: 'Возвращает список событий',
        content: new OA\JsonContent(ref: '#/components/schemas/EventList')
    )]
    #[OA\Response(
        response: 400,
        description: 'Ошибка',
        content: new OA\JsonContent(ref: '#/components/schemas/Errors')
    )]
    #[OA\QueryParameter(name: 'user', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(name: 'subsystemCode', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(name: 'logCategory', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(name: 'logObject', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(
        name: 'sort',
        description: "Возможные значения:
                     \n - createdAt  (Дата и время регистрации)
                     Для указания обратного порядка сортировки (DESC), перед названием поля надо поставить знак '-'",
        schema: new OA\Schema(type: 'string')
    )]
    #[OA\QueryParameter(name: 'createdAtFrom', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(name: 'createdAtTo', schema: new OA\Schema(type: 'string'))]
    #[OA\QueryParameter(
        name: 'digitalAssistant',
        description: "Возможные значения: 
                        \n - teacher 
                        \n - parent",
        schema: new OA\Schema(type: 'string')
    )]
    #[Route('admin/events', name: 'app_events', methods: ['GET'])]
    public function list(
        #[MapQueryString] LogQueryDTO $dto = new LogQueryDTO()
    ): JsonResponse
    {
        $filter = new LogQueryFilter($dto);
        $result = $this->logManager->getList($filter->getCriteria(), $dto->page, $dto->pageSize, 'e_list', $dto->getSort());

        return $this->responseList($result);
    }

    /**
     * @param registration\src\Entity\Log $entity
     * @param registration\src\Service\LogManager $manager
     * @return JsonResponse
     * @throws ExceptionInterface
     */
    #[OA\Response(
        response: 200,
        description: 'Событие',
        content: new OA\JsonContent(ref: "#/components/schemas/EventDetail")
    )]
    #[OA\Response(
        response: 400,
        description: 'Ошибка',
        content: new OA\JsonContent(ref: '#/components/schemas/Errors')
    )]
    #[Route('admin/events/{id}', name: 'app_event', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function detail(Log $entity, LogManager $manager): JsonResponse
    {
        $result = $manager->detail($entity, ['e_detail']);
        return $this->responseDetail($result);
    }

    /**
     * @throws registration\src\Exception\LogException
     */
    #[OA\Response(
        response: 202,
        description: 'Возвращает 202',
    )]
    #[OA\Response(
        response: 400,
        description: 'Ошибка',
        content: new OA\JsonContent(ref: '#/components/schemas/Errors')
    )]
    #[OA\RequestBody(content: new OA\JsonContent(ref: "#/components/schemas/EventRequestDTO_create"))]
    #[Route('/events', name: 'app_event_create', methods: ['POST'])]
    public function create(
        Request $request,
        #[MapRequestPayload(validationGroups: 'create')] LogRequestDTO $dto,
        MessageBusInterface $bus,
    ): Response
    {
        $apiToken = $request->headers->get('x-auth-token');
        if ($apiToken && $apiToken === $this->getParameter('app.api_token')) {
            $message = new LogRegistrationMessage($dto->data);
            if (!$this->userProfile->getUser()) {
                $message->setUserId('0');
                $message->setRoleCode('anonymous');
                $message->setUsername('anonymous');
            } else {
                $message->setUsername($this->userProfile->getUsername());
                $message->setUserId($this->userProfile->getCurrentUserID());
                $message->setRoleCode(implode(",", $this->userProfile->getUserRole()));
            }

            $logType = $this->logManager->resolveLogTypeFromRequest($dto->data->logCategory, $dto->data->logObject, $dto->data->httpStatus);
            $message->setLogTypeId($logType->getId());
            try {
                $debugMessage = sprintf(
                    'Message category %s, message object %s.',
                    $logType->getLogCategory()->getTitle(),
                    $logType->getLogObject()->getTitle()
                );
                $this->logger->info($debugMessage);
                $this->logger->info(json_encode($message));

                $bus->dispatch(new Envelope($message));
                if ($this->logManager->checkTypeOfCategory($message->logTypeId, 'view')) {
                    $bus->dispatch(
                        new Envelope($this->logManager->createViewMessage($message))
                    );
                }

            } catch (\Exception $e) {
                $this->logger->error($e->getMessage());
            }

            $response = new Response();
            $response->setStatusCode(202);
            return $response;
        } else {
            throw new AccessDeniedHttpException('Доступ запрещен.');
        }

    }
}
