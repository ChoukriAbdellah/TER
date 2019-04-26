<?php

namespace App\Repository;

use App\Entity\RemoveUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RemoveUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method RemoveUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method RemoveUser[]    findAll()
 * @method RemoveUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RemoveUserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RemoveUser::class);
    }

    // /**
    //  * @return RemoveUser[] Returns an array of RemoveUser objects
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
    public function findOneBySomeField($value): ?RemoveUser
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
