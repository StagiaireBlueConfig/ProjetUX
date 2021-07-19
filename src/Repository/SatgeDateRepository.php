<?php

namespace App\Repository;

use App\Entity\SatgeDate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SatgeDate|null find($id, $lockMode = null, $lockVersion = null)
 * @method SatgeDate|null findOneBy(array $criteria, array $orderBy = null)
 * @method SatgeDate[]    findAll()
 * @method SatgeDate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SatgeDateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SatgeDate::class);
    }

    // /**
    //  * @return SatgeDate[] Returns an array of SatgeDate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SatgeDate
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
