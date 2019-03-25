<?php

namespace App\Repository;

use App\Entity\GrosOeuvre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GrosOeuvre|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrosOeuvre|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrosOeuvre[]    findAll()
 * @method GrosOeuvre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrosOeuvreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GrosOeuvre::class);
    }

    // /**
    //  * @return GrosOeuvre[] Returns an array of GrosOeuvre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GrosOeuvre
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
