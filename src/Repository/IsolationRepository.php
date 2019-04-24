<?php

namespace App\Repository;

use App\Entity\Isolation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Isolation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Isolation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Isolation[]    findAll()
 * @method Isolation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IsolationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Isolation::class);
    }

    // /**
    //  * @return Isolation[] Returns an array of Isolation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Isolation
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
