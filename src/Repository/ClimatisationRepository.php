<?php

namespace App\Repository;

use App\Entity\Climatisation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Climatisation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Climatisation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Climatisation[]    findAll()
 * @method Climatisation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClimatisationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Climatisation::class);
    }

    // /**
    //  * @return Climatisation[] Returns an array of Climatisation objects
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
    public function findOneBySomeField($value): ?Climatisation
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
