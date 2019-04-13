<?php

namespace App\Repository;

use App\Entity\Plancher;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Plancher|null find($id, $lockMode = null, $lockVersion = null)
 * @method Plancher|null findOneBy(array $criteria, array $orderBy = null)
 * @method Plancher[]    findAll()
 * @method Plancher[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlancherRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Plancher::class);
    }

    // /**
    //  * @return Plancher[] Returns an array of Plancher objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Plancher
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
