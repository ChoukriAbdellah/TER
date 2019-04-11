<?php

namespace App\Repository;

use App\Entity\EtudeSol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EtudeSol|null find($id, $lockMode = null, $lockVersion = null)
 * @method EtudeSol|null findOneBy(array $criteria, array $orderBy = null)
 * @method EtudeSol[]    findAll()
 * @method EtudeSol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtudeSolRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EtudeSol::class);
    }

    // /**
    //  * @return EtudeSol[] Returns an array of EtudeSol objects
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

    public function findPrixByNom($value): ?EtudeSol
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.nom = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
}
