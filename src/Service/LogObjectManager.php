<?php


namespace App\Service;

use registration\src\Repository\LogObjectRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;



class LogObjectManager
{
    public function __construct(
        protected NormalizerInterface $normalizer,
        protected SerializerInterface $serializer,
        protected LogObjectRepository $repository
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
    public function getList($page, $pageSize, string $group = 'log_object_list', array $sort = []): array
    {
        $offset = ($page - 1) * $pageSize;
        $limit = $pageSize;
        $paginator = $this->repository->getPaginator($offset, $limit, $sort);
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
}