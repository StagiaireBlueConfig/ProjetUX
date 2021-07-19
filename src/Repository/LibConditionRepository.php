<?php

namespace App\Repository;

use App\Entity\LibCondition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LibCondition|null find($id, $lockMode = null, $lockVersion = null)
 * @method LibCondition|null findOneBy(array $criteria, array $orderBy = null)
 * @method LibCondition[]    findAll()
 * @method LibCondition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LibConditionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LibCondition::class);
    }

    // /**
    //  * @return LibCondition[] Returns an array of LibCondition objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LibCondition
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
