<?php

namespace App\Repository;

use App\Entity\Revetement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Revetement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Revetement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Revetement[]    findAll()
 * @method Revetement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RevetementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Revetement::class);
    }

    // /**
    //  * @return Revetement[] Returns an array of Revetement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Revetement
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
