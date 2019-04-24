<?php

namespace App\Repository;

use App\Entity\Domotique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Domotique|null find($id, $lockMode = null, $lockVersion = null)
 * @method Domotique|null findOneBy(array $criteria, array $orderBy = null)
 * @method Domotique[]    findAll()
 * @method Domotique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DomotiqueRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Domotique::class);
    }

    // /**
    //  * @return Domotique[] Returns an array of Domotique objects
    //  */
    /*
    public function findByExampleField($value)
    {
<<<<<<< HEAD
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
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
    public function findOneBySomeField($value): ?Domotique
    {
<<<<<<< HEAD
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
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
