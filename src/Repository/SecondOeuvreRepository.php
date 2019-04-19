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

    public function findNbFormulairesByGrosOeuvre($id)
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'select 
        sum(case WHEN `id_enduit_facade` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_isolation` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_revetement` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_cloisons` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_evacuation` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_menuiseries_int` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_escaliers` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_plomberie` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_electricite` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_ventilation` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_climatisation` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_domotique` IS NOT NULL THEN 1 ELSE 0 END)
        AS notnulls from second_oeuvre where id = :id';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $tab = $stmt->fetch();
        $nb = $tab['notnulls'];
    
        // returns an array of arrays (i.e. a raw data set)
        return $nb;
    }
}
