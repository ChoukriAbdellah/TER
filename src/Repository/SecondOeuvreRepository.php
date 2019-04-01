<?php

namespace App\Repository;

use App\Entity\SecondOeuvre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SecondOeuvre|null find($id, $lockMode = null, $lockVersion = null)
 * @method SecondOeuvre|null findOneBy(array $criteria, array $orderBy = null)
 * @method SecondOeuvre[]    findAll()
 * @method SecondOeuvre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SecondOeuvreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SecondOeuvre::class);
    }

    // /**
    //  * @return SecondOeuvre[] Returns an array of SecondOeuvre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SecondOeuvre
    {
        return $this->createQueryBuilder('s')
            ->from('DeliveryMethods','m')
            ->leftJoin('m.countries','c')
            ->having('COUNT(c.id) = 0')
            ->groupBy('m.id');
        ;
    }
    $qb->select('m')

    */
}
