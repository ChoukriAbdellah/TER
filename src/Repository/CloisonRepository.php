<?php

namespace App\Repository;

use App\Entity\Cloison;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Cloison|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cloison|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cloison[]    findAll()
 * @method Cloison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CloisonRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cloison::class);
    }

    // /**
    //  * @return Cloison[] Returns an array of Cloison objects
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
    public function findOneBySomeField($value): ?Cloison
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
