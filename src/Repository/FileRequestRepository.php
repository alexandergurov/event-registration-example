<?php

namespace App\Repository;

use registration\src\Entity\FileRequest;
use registration\src\Enum\FileRequestStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<registration\src\Entity\FileRequest>
 *
 * @method FileRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method FileRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method FileRequest[]    findAll()
 * @method FileRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FileRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FileRequest::class);
    }

    public function getPaginator(array $criteria, $offset, $limit, array $sort = []): Paginator
    {
        $queryBuilder = $this->createQueryBuilder('m')
            ->setFirstResult($offset)
            ->setMaxResults($limit);

        if ($criteria['userId']) {
            $queryBuilder->andWhere($queryBuilder->expr()->eq('m.userId', ':userId'))
                ->setParameter('userId', $criteria['userId']);
        }

        foreach ($sort as $key => $order) {
            $queryBuilder->addOrderBy("m.$key", $order);
        }

        $query = $queryBuilder->getQuery();
        return new Paginator($query, fetchJoinCollection: true);
    }

    public function save(FileRequest $entity, $flush=true): void
    {
        $this->getEntityManager()->persist($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(FileRequest $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getPendingFileRequests(): array
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder('r');
        $queues = $queryBuilder->select('r')
            ->from(FileRequest::class, 'r')
            ->where('r.status = :status')
            ->setParameter('status', FileRequestStatus::NEW->value)
            ->getQuery()
            ->getResult();

        return $queues;

    }
}
