<?php

namespace App\Repository;

use App\Entity\Fondation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Fondation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fondation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fondation[]    findAll()
 * @method Fondation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FondationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Fondation::class);
    }

    // /**
    //  * @return Fondation[] Returns an array of Fondation objects
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
    public function findOneBySomeField($value): ?Fondation
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
