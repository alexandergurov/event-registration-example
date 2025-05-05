<?php

namespace App\Repository;

use registration\src\Entity\Log;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<registration\src\Entity\Log>
 *
 * @method Log|null find($id, $lockMode = null, $lockVersion = null)
 * @method Log|null findOneBy(array $criteria, array $orderBy = null)
 * @method Log[]    findAll()
 * @method Log[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Log::class);
    }

    public function getPaginator(array $criteria, $offset, $limit, array $sort = []): Paginator
    {
        $queryBuilder = $this->createQueryBuilder('log')
            ->setFirstResult($offset)
            ->setMaxResults($limit);

        if (!empty($criteria['user'])) {
            $queryBuilder
                ->andWhere(
                    $queryBuilder->expr()->eq(
                        'log.userId',
                        ':userId'
                    ))->setParameter('userId', $criteria['user']);
        }

        if (!empty($criteria['digitalAssistant'])) {
            $queryBuilder
                ->andWhere(
                    $queryBuilder->expr()->eq(
                        'log.digitalAssistant',
                        ':digitalAssistant'
                    ))->setParameter('digitalAssistant', $criteria['digitalAssistant']);
        }

        if (isset($criteria['createdAtFrom'])) {
            $date = \DateTimeImmutable::createFromFormat('Y-m-d', $criteria['createdAtFrom'])
                ->format('Y-m-d 00:00:00');
            $queryBuilder
                ->andWhere($queryBuilder->expr()->andX(
                    $queryBuilder->expr()->isNotNull('log.createdAt'),
                    $queryBuilder->expr()->gte('log.createdAt', ':createdAtFrom')
                ))->setParameter('createdAtFrom', $date);
        }
        if (isset($criteria['createdAtTo'])) {
            $date = \DateTimeImmutable::createFromFormat('Y-m-d', $criteria['createdAtTo'])
                ->format('Y-m-d 23:59:59');
            $queryBuilder
                ->andWhere($queryBuilder->expr()->andX(
                    $queryBuilder->expr()->isNotNull('log.createdAt'),
                    $queryBuilder->expr()->lte('log.createdAt', ':createdAtTo')
                ))
                ->setParameter('createdAtTo', $date);
        }

        if (!empty($criteria['subsystemCode'])) {
            $queryBuilder
                ->innerJoin('log.logType', 'logType')
                ->andWhere(
                    $queryBuilder->expr()->eq(
                        'logType.subsystemCode',
                        ':subsystemCode'
                    ))->setParameter('subsystemCode', $criteria['subsystemCode']);
        }

        if (!empty($criteria['logObject'])) {
            $queryBuilder
                ->innerJoin('log.logType', 'logType_obj')
                ->innerJoin('logType_obj.logObject', 'logObject')
                ->andWhere(
                    $queryBuilder->expr()->eq(
                        'logObject.title',
                        ':objectTitle'
                    ))->setParameter('objectTitle', $criteria['logObject']);
        }

        if (!empty($criteria['logCategory'])) {
            $queryBuilder
                ->innerJoin('log.logType', 'logType_cat')
                ->innerJoin('logType_cat.logCategory', 'logCategory')
                ->andWhere(
                    $queryBuilder->expr()->eq(
                        'logCategory.title',
                        ':categoryTitle'
                    ))->setParameter('categoryTitle', $criteria['logCategory']);
        }

        foreach ($sort as $key => $order) {
            $queryBuilder->addOrderBy("log.$key", $order);
        }

        $query = $queryBuilder->getQuery();
        return new Paginator($query, fetchJoinCollection: true);
    }

    public function save(Log $entity, $flush=true): void
    {
        $this->getEntityManager()->persist($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Log $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findLogEntries(array $queryParams): array
    {
        $queryBuilder = $this->createQueryBuilder('log')
            ->select('(log.logType), logType.title, logType.description, logCategory.id, logCategory.title as log_type_title,
            log.createdAt, log.userId, log.roleCode, logType.subsystemCode, (logType.logObject), 
            logObject.title as log_object_title, logObject.id');
        $queryBuilder
            ->join('log.logType', 'logType');
        if ($queryParams['subsystemCode']) {
            $queryBuilder->andWhere($queryBuilder->expr()->eq('logType.subsystemCode', ':subsystemCode'))
                ->setParameter('subsystemCode', $queryParams['subsystemCode']);
        }
        if ($queryParams['logCategoryId']) {
            $queryBuilder
                ->join('logType.logCategory', 'logCategory')
                ->andWhere($queryBuilder->expr()->eq('logCategory.id', ':logCategoryId'))
                ->setParameter('logCategoryId', $queryParams['logCategoryId']);
        }
        if ($queryParams['logObjectId']) {
            $queryBuilder
                ->join('logType.logObject', 'logObject')
                ->andWhere($queryBuilder->expr()->eq('logObject.id', ':logObjectId'))
                ->setParameter('logObjectId', $queryParams['logObjectId']);
        }

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }

}
