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


    public function findNbFormulairesByGrosOeuvre($id)
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'select 
        sum(case WHEN `id_etude_sol` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_prep_terrain` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_excavation` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_fondations` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_soubassement` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_vrd` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_plancher` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_elevation` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_charpente` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_toiture` IS NOT NULL THEN 1 ELSE 0 END)+
        sum(case WHEN `id_menuiseries_ext` IS NOT NULL THEN 1 ELSE 0 END)
        AS notnulls from gros_oeuvre where id = :id';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $tab = $stmt->fetch();
        $nb = $tab['notnulls'];

        // returns an array of arrays (i.e. a raw data set)
        return $nb;
    }

    public function findPrixEtudeSolByGrosOeuvre($id)
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'select `prix` AS prix from etude_sol where id = :id';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $tab = $stmt->fetch();
        $prix = $tab['prix'];

        // returns an array of arrays (i.e. a raw data set)
        return $prix;
    }

   /* public function findById($value): ?Projet
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
