<?php

namespace App\Repository;

use App\Entity\LibPlace;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LibPlace|null find($id, $lockMode = null, $lockVersion = null)
 * @method LibPlace|null findOneBy(array $criteria, array $orderBy = null)
 * @method LibPlace[]    findAll()
 * @method LibPlace[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LibPlaceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LibPlace::class);
    }

    // /**
    //  * @return LibPlace[] Returns an array of LibPlace objects
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
    public function findOneBySomeField($value): ?LibPlace
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
