<?php

namespace App\Repository;

use App\Entity\Elevation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Elevation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Elevation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Elevation[]    findAll()
 * @method Elevation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ElevationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Elevation::class);
    }

    // /**
    //  * @return Elevation[] Returns an array of Elevation objects
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
    public function findOneBySomeField($value): ?Elevation
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
