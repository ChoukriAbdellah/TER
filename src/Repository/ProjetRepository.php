<?php

namespace App\Repository;

use App\Entity\Projet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Projet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projet[]    findAll()
 * @method Projet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjetRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Projet::class);
    }

    // /**
    //  * @return Projet[] Returns an array of Projet objects
    //  */

    public function findProjetsByIdUser($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.idProprio = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    public function findProjetsByName($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.nom = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult();
        ;
    }

    public function sumProjets()
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'select count(id) as number from projet ';
        $stmt = $conn->prepare($sql);
        $stmt->execute([]);
        $tab = $stmt->fetch();
        $nb = $tab['number'];
    
        // returns an array of arrays (i.e. a raw data set)
        return $nb;
    }

    
    /*public function sumProjets()
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'select count(id) as number from projet ';
        $stmt = $conn->prepare($sql);
        $stmt->execute([]);
        $tab = $stmt->fetch();
        $nb = $tab['number'];
    
        // returns an array of arrays (i.e. a raw data set)
        return $nb;
    }*/
}
