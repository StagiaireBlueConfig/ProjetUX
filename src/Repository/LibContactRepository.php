<?php

namespace App\Repository;

use App\Entity\LibContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LibContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method LibContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method LibContact[]    findAll()
 * @method LibContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LibContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LibContact::class);
    }

    // /**
    //  * @return LibContact[] Returns an array of LibContact objects
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
    public function findOneBySomeField($value): ?LibContact
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
