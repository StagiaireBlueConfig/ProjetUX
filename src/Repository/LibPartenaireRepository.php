<?php

namespace App\Repository;

use App\Entity\LibPartenaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LibPartenaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method LibPartenaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method LibPartenaire[]    findAll()
 * @method LibPartenaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LibPartenaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LibPartenaire::class);
    }

    // /**
    //  * @return LibPartenaire[] Returns an array of LibPartenaire objects
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
    public function findOneBySomeField($value): ?LibPartenaire
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
