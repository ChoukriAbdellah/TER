<?php

namespace App\Repository;

use App\Entity\PreparationEtAcces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PreparationEtAcces|null find($id, $lockMode = null, $lockVersion = null)
 * @method PreparationEtAcces|null findOneBy(array $criteria, array $orderBy = null)
 * @method PreparationEtAcces[]    findAll()
 * @method PreparationEtAcces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PreparationEtAccesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PreparationEtAcces::class);
    }

    // /**
    //  * @return PreparationEtAcces[] Returns an array of PreparationEtAcces objects
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
    public function findOneBySomeField($value): ?PreparationEtAcces
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
