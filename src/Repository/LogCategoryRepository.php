<?php

namespace App\Repository;

use registration\src\Entity\LogCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<registration\src\Entity\LogCategory>
 *
 * @method LogCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method LogCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method LogCategory[]    findAll()
 * @method LogCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LogCategory::class);
    }

    public function save(LogCategory $entity, $flush=true): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(LogCategory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
