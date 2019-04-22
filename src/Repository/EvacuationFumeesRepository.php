<?php

namespace App\Repository;

use App\Entity\EvacuationFumees;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EvacuationFumees|null find($id, $lockMode = null, $lockVersion = null)
 * @method EvacuationFumees|null findOneBy(array $criteria, array $orderBy = null)
 * @method EvacuationFumees[]    findAll()
 * @method EvacuationFumees[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvacuationFumeesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EvacuationFumees::class);
    }

    // /**
    //  * @return EvacuationFumees[] Returns an array of EvacuationFumees objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EvacuationFumees
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
