<?php

namespace App\Repository;

use registration\src\Entity\LogObject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<registration\src\Entity\LogObject>
 *
 * @method LogObject|null find($id, $lockMode = null, $lockVersion = null)
 * @method LogObject|null findOneBy(array $criteria, array $orderBy = null)
 * @method LogObject[]    findAll()
 * @method LogObject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogObjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LogObject::class);
    }

    public function getPaginator($offset, $limit, array $sort = []): Paginator
    {
        $queryBuilder = $this->createQueryBuilder('o')
            ->setFirstResult($offset)
            ->setMaxResults($limit);

        foreach ($sort as $key => $order) {
            $queryBuilder->addOrderBy("o.$key", $order);
        }

        $query = $queryBuilder->getQuery();
        return new Paginator($query, fetchJoinCollection: true);
    }

    public function save(LogObject $entity, $flush=true): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(LogObject $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
