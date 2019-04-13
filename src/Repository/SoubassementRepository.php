<?php

namespace App\Repository;

use App\Entity\Soubassement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Soubassement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Soubassement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Soubassement[]    findAll()
 * @method Soubassement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SoubassementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Soubassement::class);
    }

    // /**
    //  * @return Soubassement[] Returns an array of Soubassement objects
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
    public function findOneBySomeField($value): ?Soubassement
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
