<?php

namespace App\Repository;

use App\Entity\Cloisons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Cloisons|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cloisons|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cloisons[]    findAll()
 * @method Cloisons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CloisonsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cloisons::class);
    }

    // /**
    //  * @return Cloisons[] Returns an array of Cloisons objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cloisons
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
