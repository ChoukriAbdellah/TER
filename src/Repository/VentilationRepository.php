<?php

namespace App\Repository;

use App\Entity\Ventilation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ventilation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ventilation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ventilation[]    findAll()
 * @method Ventilation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VentilationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ventilation::class);
    }

    // /**
    //  * @return Ventilation[] Returns an array of Ventilation objects
    //  */
    /*
    public function findByExampleField($value)
    {
<<<<<<< HEAD
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
=======
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
>>>>>>> b34e2a4f66f178e2d3b4e5304cd49a9e3700af3a
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ventilation
    {
<<<<<<< HEAD
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
=======
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
>>>>>>> b34e2a4f66f178e2d3b4e5304cd49a9e3700af3a
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
