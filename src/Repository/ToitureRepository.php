<?php

namespace App\Repository;

use App\Entity\Toiture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Toiture|null find($id, $lockMode = null, $lockVersion = null)
 * @method Toiture|null findOneBy(array $criteria, array $orderBy = null)
 * @method Toiture[]    findAll()
 * @method Toiture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ToitureRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Toiture::class);
    }

    // /**
    //  * @return Toiture[] Returns an array of Toiture objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Toiture
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
