<?php

namespace App\Repository;

use App\Entity\Prix;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Prix|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prix|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prix[]    findAll()
 * @method Prix[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrixRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Prix::class);
    }

    // /**
    //  * @return Prix[] Returns an array of Prix objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function findPrixByNom($value)
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'select montant from prix where nom = :nom';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['nom' => $value]);
        $tab = $stmt->fetch();
        $prix = $tab['montant'];
    
        // returns an array of arrays (i.e. a raw data set)
        return $prix;
    }
    
}
