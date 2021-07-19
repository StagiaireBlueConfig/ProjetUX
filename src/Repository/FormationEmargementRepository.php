<?php

namespace App\Repository;

use App\Entity\FormationEmargement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FormationEmargement|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormationEmargement|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormationEmargement[]    findAll()
 * @method FormationEmargement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormationEmargementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormationEmargement::class);
    }

    // /**
    //  * @return FormationEmargement[] Returns an array of FormationEmargement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FormationEmargement
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
