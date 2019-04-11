<?php

namespace App\Repository;

use App\Entity\Vrd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Vrd|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vrd|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vrd[]    findAll()
 * @method Vrd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VrdRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Vrd::class);
    }

    // /**
    //  * @return Vrd[] Returns an array of Vrd objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Vrd
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
