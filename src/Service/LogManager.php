<?php

namespace App\Service;

use microservices\eventuse registration\src\Entity\Log;
use registration\src\Entity\LogType;
use registration\src\Enum\LogTypeState;
use registration\src\Exception\LogException;
use registration\src\Messenger\Message\LogRegistrationMessage;
use registration\src\Messenger\Message\ViewLogMessage;
use registration\src\Model\LogDTO;
use registration\src\Repository\LogCategoryRepository;
use registration\src\Repository\LogObjectRepository;
use registration\src\Repository\LogRepository;
use registration\src\Repository\LogTypeRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class LogManager
{

    private const SUCCESS_HTTP_STATUSES = ['200', '201', '202', '203', '204', '205', '206', '207', '208'];
    public function __construct(
        protected NormalizerInterface   $normalizer,
        protected SerializerInterface   $serializer,
        protected LogRepository         $repository,
        protected LogTypeRepository     $logTypeRepository,
        protected LogCategoryRepository $logCategoryRepository,
        protected LogObjectRepository   $logObjectRepository,
        protected UserProfile           $userProfile,
        private readonly CacheInterface $cacheInterface,
        private readonly int            $ttl,
    )
    {
    }

    /**
     * @param array $criteria
     * @param $page
     * @param $pageSize
     * @param string $group
     * @param array $sort
     * @return array
     * @throws ExceptionInterface
     * @throws \Exception
     */
    public function getList(array $criteria, $page, $pageSize, string $group = 'e_list', array $sort = []): array
    {
        $offset = ($page - 1) * $pageSize;
        $limit = $pageSize;
        $paginator = $this->repository->getPaginator($criteria, $offset, $limit, $sort);
        $count = $paginator->count();
        if ($offset > $count) {
            throw new NotFoundHttpException();
        }

        return [
            'total' => $count,
            'page' => $page,
            'pageSize' => $pageSize,
            'data' => $this->normalizer->normalize($paginator->getIterator(), null, ['groups' => $group]),
        ];
    }

    /**
     * @throws ExceptionInterface
     */
    public function detail(Log $entity, $group = 'e_detail'): array
    {
        return $this->normalizer->normalize($entity, null, ['groups' => $group]);
    }

    /**
     * @throws ExceptionInterface
     * @throws registration\src\Exception\LogException
     */
    public function create(LogDTO $dto, $group = 'e_created'): array|null
    {
        $entity = new Log();
        $this->updateEntity($entity, $dto);
        $this->repository->save($entity);

        return $this->normalizer->normalize($entity, null, ['groups' => $group]);

    }

    public function delete(Log $entity): void
    {
        $this->repository->remove($entity, true);
    }

    /**
     * @throws registration\src\Exception\LogException
     */
    public function updateEntity(Log $entity, LogDTO $dto): void
    {
        $entity->setUserId($dto->userId);
        $entity->setRoleCode($dto->roleCode);
        $entity->setUsername($dto->username);
        $entity->setLogType($this->resolveLogType($dto->logTypeId));
        $entity->setUrl($dto->url);
        $entity->setMethodName($dto->methodName);
        $entity->setHttpStatus($dto->httpStatus);
        $entity->setObjectId($dto->objectId);
        $entity->setSearchContent($dto->searchContent);
        $entity->setData($dto->data);
        $entity->setDigitalAssistant($dto->digitalAssistant);
    }

    /**
     * @throws registration\src\Exception\LogException
     */
    public function resolveLogTypeFromRequest(string $logCategory, ?string $logObject, ?string $httpStatus): ?LogType
    {
        $logTypeEntity = [];

        if (!empty($logCategory) && !empty($logObject) && !empty($httpStatus)) {
            $cacheKeyArray = [
                $logCategory,
                str_replace('/', '.', $logObject),
                $httpStatus,
            ];

            $cacheKey = 'event_registration.' . implode('.', $cacheKeyArray);

            $logTypeEntity = $this->cacheInterface->get($cacheKey, function (ItemInterface $item) use ($logObject, $logCategory, $httpStatus): ?LogType {
                $item->expiresAfter($this->ttl);

                $logCategoryEntity = $this->logCategoryRepository->findBy(['title' => $logCategory]);
                if (empty($logCategoryEntity)) {
                    throw new LogException('Поле "Категория события" содержит недопустимое значение');
                }
                $logObjectEntity = $this->logObjectRepository->findBy(['title' => $logObject]);
                if (empty($logObjectEntity)) {
                    throw new LogException('Поле "Объект события" содержит недопустимое значение');
                }

                //TODO: Proper typeState check
                $typeState = !in_array($httpStatus, self::SUCCESS_HTTP_STATUSES) ? LogTypeState::FAILURE->value : LogTypeState::SUCCESS->value;

                return $this->logTypeRepository->findOneBy(['logCategory' => $logCategoryEntity,
                    'logObject' => $logObjectEntity, 'state' => $typeState]);
            });
        }

        if (empty($logTypeEntity)) {
            throw new LogException('Невозможно определить тип события по указанным параметрам');
        }

        return $logTypeEntity;
    }

    /**
     * @throws registration\src\Exception\LogException
     */
    protected function resolveLogType(?int $id): ?LogType
    {
        if (!empty($id)) {
            $logTypeEntity = $this->logTypeRepository->find($id);
        }

        if (empty($logTypeEntity)) {
            throw new LogException('Поле "Тип события" содержит недопустимое значение');
        }
        return $logTypeEntity;
    }

    public function checkTypeOfCategory(int $logTypeId, string $categoryTitle): bool
    {
        $logType = $this->logTypeRepository->find($logTypeId);

        return $logType->getLogCategory()->getTitle() === $categoryTitle;
    }

    public function createViewMessage(LogRegistrationMessage $logRegistrationMessage): ViewLogMessage
    {
        $logType = $this->logTypeRepository->find($logRegistrationMessage->getLogTypeId());

        return new ViewLogMessage(
            $logType->getLogObject()->getTitle(),
            $logRegistrationMessage->objectId,
            $logRegistrationMessage->getUserId(),
        );

    }

}