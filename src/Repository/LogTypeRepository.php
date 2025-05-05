<?php

namespace App\Repository;

use registration\src\Entity\LogType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<registration\src\Entity\LogType>
 *
 * @method LogType|null find($id, $lockMode = null, $lockVersion = null)
 * @method LogType|null findOneBy(array $criteria, array $orderBy = null)
 * @method LogType[]    findAll()
 * @method LogType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LogType::class);
    }

    public function save(LogType $entity, $flush=true): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(LogType $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
