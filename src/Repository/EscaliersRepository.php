<?php

namespace App\Repository;

use App\Entity\Escaliers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Escaliers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Escaliers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Escaliers[]    findAll()
 * @method Escaliers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EscaliersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Escaliers::class);
    }

    // /**
    //  * @return Escaliers[] Returns an array of Escaliers objects
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
    public function findOneBySomeField($value): ?Escaliers
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
