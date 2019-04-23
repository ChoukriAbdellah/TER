<?php

namespace App\Repository;

use App\Entity\MenuiseriesInt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MenuiseriesInt|null find($id, $lockMode = null, $lockVersion = null)
 * @method MenuiseriesInt|null findOneBy(array $criteria, array $orderBy = null)
 * @method MenuiseriesInt[]    findAll()
 * @method MenuiseriesInt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MenuiseriesIntRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MenuiseriesInt::class);
    }

    // /**
    //  * @return MenuiseriesInt[] Returns an array of MenuiseriesInt objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MenuiseriesInt
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
