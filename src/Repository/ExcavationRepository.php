<?php

namespace App\Repository;

use App\Entity\Excavation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Excavation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Excavation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Excavation[]    findAll()
 * @method Excavation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExcavationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Excavation::class);
    }

    // /**
    //  * @return Excavation[] Returns an array of Excavation objects
    //  *
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
    public function findOneBySomeField($value): ?Excavation
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
