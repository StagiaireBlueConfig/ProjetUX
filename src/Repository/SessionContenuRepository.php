<?php

namespace App\Repository;

use App\Entity\SessionContenu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SessionContenu|null find($id, $lockMode = null, $lockVersion = null)
 * @method SessionContenu|null findOneBy(array $criteria, array $orderBy = null)
 * @method SessionContenu[]    findAll()
 * @method SessionContenu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SessionContenuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SessionContenu::class);
    }

    // /**
    //  * @return SessionContenu[] Returns an array of SessionContenu objects
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
    public function findOneBySomeField($value): ?SessionContenu
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
