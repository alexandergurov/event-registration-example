<?php


namespace App\Service;

use registration\src\Entity\FileRequest;
use registration\src\Enum\FileRequestStatus;
use registration\src\Exception\LogException;
use registration\src\Model\FileDTO;
use registration\src\Repository\FileRequestRepository;
use registration\src\Repository\LogRepository;
use microservices\eventuse Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;



class FileManager
{
    public function __construct(
        protected NormalizerInterface $normalizer,
        protected SerializerInterface $serializer,
        protected FileRequestRepository $repository,
        protected LogRepository $logRepository,
        protected UserProfile $userProfile
    )
    {
    }

    /**
     * @param $page
     * @param $pageSize
     * @param string $group
     * @param array $sort
     * @return array
     * @throws ExceptionInterface
     * @throws \Exception
     */
    public function getList($page, $pageSize, string $group = 'f_list', array $sort = []): array
    {
        $offset = ($page - 1) * $pageSize;
        $limit = $pageSize;
        $criteria['userId'] = $this->userProfile->getCurrentUserID();
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
    public function detail(FileRequest $entity, $group = 'f_detail'): array
    {
        return $this->normalizer->normalize($entity, null, ['groups' => $group]);
    }

    /**
     * @throws ExceptionInterface
     */
    public function create(FileDTO $dto, $group = 'f_created'): array|null
    {

        $entity = new FileRequest();
        $this->updateEntity($entity, $dto);
        $this->repository->save($entity);

        return $this->normalizer->normalize($entity, null, ['groups' => $group]);

    }

    public function delete(FileRequest $entity): void
    {
        $this->repository->remove($entity, true);
    }

    public function updateEntity(FileRequest $entity, FileDTO $dto): void
    {
        $entity->setUrl($dto->url);
        $entity->setQueryParams($dto->queryParams);
        $entity->setStatus(FileRequestStatus::NEW->value);
        $entity->setUserId($this->userProfile->getCurrentUserID());
    }

    /**
     * @throws registration\src\Exception\LogException
     */
    public function checkExistingRequests($queryParams): void
    {
        $existingRequests = $this->repository->findBy(array('status' => [FileRequestStatus::NEW, FileRequestStatus::PROCESSING],
            'userId' => $this->userProfile->getCurrentUserID()));
        if (!empty($existingRequests)) {
            throw new LogException("Заявка на формирование csv-файла уже создана");
        }

        $logs = $this->logRepository->findLogEntries($queryParams);
        if (empty($logs)) {
            throw new LogException("Нет записей для скачивания по вашему запросу");
        }
    }

    public function updateFileGenerationResult(FileRequest $entity, string $url, string $status): FileRequest
    {
        $entity->setUrl($url);
        $entity->setStatus($status);
        $this->repository->save($entity);
        return $entity;
    }
}