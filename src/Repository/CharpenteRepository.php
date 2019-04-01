<?php

namespace App\Repository;

use App\Entity\Charpente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Charpente|null find($id, $lockMode = null, $lockVersion = null)
 * @method Charpente|null findOneBy(array $criteria, array $orderBy = null)
 * @method Charpente[]    findAll()
 * @method Charpente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CharpenteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Charpente::class);
    }

    // /**
    //  * @return Charpente[] Returns an array of Charpente objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Charpente
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
