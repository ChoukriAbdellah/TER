<?php

namespace App\Repository;

use App\Entity\Electricite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Electricite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Electricite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Electricite[]    findAll()
 * @method Electricite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ElectriciteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Electricite::class);
    }

    // /**
    //  * @return Electricite[] Returns an array of Electricite objects
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
    public function findOneBySomeField($value): ?Electricite
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
