<?php

namespace App\Repository;

use App\Entity\Enduit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Enduit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enduit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enduit[]    findAll()
 * @method Enduit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnduitRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Enduit::class);
    }

    // /**
    //  * @return Enduit[] Returns an array of Enduit objects
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
    public function findOneBySomeField($value): ?Enduit
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
