<?php

namespace App\Controller;

use App\Entity\Electricite;
use App\Form\ElectriciteType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Escaliers;
use App\Form\EscaliersType;
use App\Entity\Plomberie;
use App\Form\PlomberieType;

use App\Entity\Projet;
use App\Entity\SecondOeuvre;

use App\Entity\Prix;

use App\Repository\ProjetRepository;
use App\Repository\SecondOeuvreRepository;

class SecondOeuvreController extends AbstractController
{

    public function escaliers($id, Request $request)
    {
        // création du formulaire
        $e = new Escaliers();
        // instancie le formulaire avec les contraintes par défaut
        $form = $this->createForm(EscaliersType::class, $e);
        $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                // Enregistre l'étude de sol en base
                /*
                $prix = 0;

                $coutFeraillage = 0;
                if ($e->getSismicite() == true)
                    $coutFeraillage += $this->getDoctrine()->getRepository(Prix::class)->findPrixByNom("sismicite");;

                $idEtudeSol = $grosOeuvre->getIdEtudeSol();
                $etudeSol = $this->getDoctrine()
                    ->getRepository(EtudeSol::class)
                    ->find($idEtudeSol);
                $coutFeraillage += $etudeSol->getPrix();

                $quantiteFeraillage = 0;

                $idExcavation = $grosOeuvre->getIdExcavation();
                $excavation = $this->getDoctrine()
                    ->getRepository(Excavation::class)
                    ->find($idExcavation);
                // les mètres linéaires sont récupérés à partir de l'excavation
                $metresLineaires = $excavation->getMursPeripherique() + $excavation->getMursRefont();

                $quantiteFerraillage = $metresLineaires * (3 / 5);

                $prix = $coutFeraillage * $quantiteFerraillage;*/
                $prix = 0;
                if($e->getTypeEscalier() == 'DROIT'){
                    $prix += $e->getDimensions()* $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("escalier_droit");
                }

                if($e->getTypeEscalier() == 'HELIDOIDAL'){
                    $prix += $e->getDimensions()* $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("escalier_helicoidal");
                }

                if($e->getTypeEscalier() == 'TOURNANT'){
                    $prix += $e->getDimensions()* $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("escalier_tournant");
                }

                if($e->getMateriaux() == 'BOISTENDRE'){
                    $prix += $e->getDimensions()* $this->getDoctrine()
                            ->getRepository(Prix::class)
                            ->findPrixByNom("bois_tendre");
                }

                if($e->getMateriaux() == 'BOISEXOTIQUE'){
                    $prix += $e->getDimensions()* $this->getDoctrine()
                            ->getRepository(Prix::class)
                            ->findPrixByNom("bois_exotique");
                }

                if($e->getMateriaux() == 'BETON'){
                    $prix += $e->getDimensions()* $this->getDoctrine()
                            ->getRepository(Prix::class)
                            ->findPrixByNom("escalier_beton");
                }

                $e->setPrix($prix);

                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $projet = $this->getDoctrine()
                    ->getRepository(Projet::class)
                    ->find($id);

                $idSo = $projet->getIdSecondOeuvre();

                $secondOeuvre = $this->getDoctrine()
                    ->getRepository(SecondOeuvre::class)
                    ->find($idSo);


                $secondOeuvre->setIdEscaliers($e->getId());
                $em->persist($secondOeuvre);
                $em->flush();

                return $this->redirectToRoute('my-project', array('id' => $id));
            }

            return $this->render(
                'project/escaliers.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    public function plomberie($id, Request $request)
    {
        // création du formulaire
        $e = new Plomberie();
        // instancie le formulaire avec les contraintes par défaut
        $form = $this->createForm(PlomberieType::class, $e);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // Enregistre l'étude de sol en base

            $prix = 0;
            if($e->getTypeTuyau() == 'PVC'){
                $prix += $e->getNbMetreTuyau()* $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("pvc");
            }

            if($e->getTypeTuyau() == 'CUIVRE'){
                $prix += $e->getNbMetreTuyau()* $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("cuivre");
            }

            if($e->getTypeTuyau() == 'ACIER'){
                $prix += $e->getNbMetreTuyau()* $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("acier");
            }

            if($e->getTypeChauffageEau() == 'CHAUFFEEAU'){
                $prix += $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("chauffe_eau");
            }


            if($e->getTypeChauffageEau() == 'CHAUDIERE'){
                $prix += $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("chaudiere");
            }

            if($e->getTypeChauffageEau() == 'BALLONEAU'){
                $prix += $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("ballon_eau");
            }

            if($e->getTypeCompteur() == 'VITESSE'){
                $prix += $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("compteur_vitesse");
            }
            if($e->getTypeCompteur() == 'VOLUMETRIQUE'){
                $prix += $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("compteur_volumetrique");
            }

            $prix += $e->getNbBaignoire()* $this->getDoctrine()
                    ->getRepository(Prix::class)
                    ->findPrixByNom("baignoire");

            $prix += $e->getNbDouche()* $this->getDoctrine()
                    ->getRepository(Prix::class)
                    ->findPrixByNom("douche");

            $e->setPrix($prix);

            $em->persist($e);
            $em->flush();

            // Met à jour le projet avec l'id de l'étude de sol créée

            $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

            $idSo = $projet->getIdSecondOeuvre();

            $secondOeuvre = $this->getDoctrine()
                ->getRepository(SecondOeuvre::class)
                ->find($idSo);


            $secondOeuvre->setIdPlomberie($e->getId());
            $em->persist($secondOeuvre);
            $em->flush();

            return $this->redirectToRoute('my-project', array('id' => $id));
        }

        return $this->render(
            'project/plomberie.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    public function electricite($id, Request $request)
    {
        // création du formulaire
        $e = new Electricite();
        // instancie le formulaire avec les contraintes par défaut
        $form = $this->createForm(ElectriciteType::class, $e);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // Enregistre l'étude de sol en base

            $prix = 0;
            if($e->getNbChauffage() != NULL ){
                $prix += ($e->getNbChauffage()* $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("chauffage_electrique")) +
                    ($e->getNbChauffage() + $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("pose_chauffage"));
            }

            if($e->getNbInterrupteur() != NULL ){
                $prix += ($e->getNbInterrupteur()* $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("interrupteurs")) +
                    ($e->getNbInterrupteur() + $this->getDoctrine()
                            ->getRepository(Prix::class)
                            ->findPrixByNom("pose_interrupteur"));
            }

            if($e->getNbSortieLumieres() != NULL ){
                $prix += $e->getNbSortieLumieres()* $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("sortie_lumiere");
            }

            if($e->getNbPriseElectrique() != NULL ){
                $prix += ($e->getNbPriseElectrique()* $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("prise_electrique")) +
                    ($e->getNbInterrupteur() + $this->getDoctrine()
                            ->getRepository(Prix::class)
                            ->findPrixByNom("pose_prise"));
            }

            if($e->getNbVoletRoulant() != NULL ){
                $prix += $e->getNbVoletRoulant()* $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("volets_roulant");
            }

            if($e->getDimensionCable() != NULL ){
                $prix += $e->getDimensionCable()* $this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("cable_electrique");
            }
            $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("tableau_electrique");

            $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("pose_tableau_electrique");

            $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("prise_de_terre");

            $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("compteur_electrique");


            $e->setPrix($prix);

            $em->persist($e);
            $em->flush();

            // Met à jour le projet avec l'id de l'étude de sol créée

            $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

            $idSo = $projet->getIdSecondOeuvre();

            $secondOeuvre = $this->getDoctrine()
                ->getRepository(SecondOeuvre::class)
                ->find($idSo);


            $secondOeuvre->setIdElectricite($e->getId());
            $em->persist($secondOeuvre);
            $em->flush();

            return $this->redirectToRoute('my-project', array('id' => $id));
        }

        return $this->render(
            'project/electricite.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

  public function view($id, Request $request)
    {
    $projet = $this->getDoctrine()
        ->getRepository(Projet::class)
        ->find($id);

    $idSo = $projet->getIdSecondOeuvre();
    $secondOeuvre = $this->getDoctrine()
    ->getRepository(SecondOeuvre::class)
    ->find($idSo);

    $idEscaliers = $secondOeuvre->getIdEscaliers();
    if($idEscaliers != NULL){
      $escaliers = $this->getDoctrine()->getRepository(Escaliers::class)->find($idEscaliers);
    }
    else{
        $escaliers = null;
    }

    $idPlomberie = $secondOeuvre->getIdPlomberie();
    if($idPlomberie != NULL){
        $plomberie = $this->getDoctrine()->getRepository(Plomberie::class)->find($idPlomberie);
    }
    else{
        $plomberie = null;
        }

    $idElectricite = $secondOeuvre->getIdElectricite();
    if($idElectricite != NULL){
        $electricite = $this->getDoctrine()->getRepository(Electricite::class)->find($idElectricite);
    }
    else{
        $electricite = null;
    }

    /*$idCharpente = $grosOeuvre->getIdCharpente();
    if($idCharpente != NULL){
      $charpente = $this->getDoctrine()->getRepository(Charpente::class)->find($idCharpente);
    }
    else{
      $charpente = null;
    }

    $idPrepTerrain = $grosOeuvre->getIdPrepTerrain();
    if($idPrepTerrain != NULL){
      $prepTerrain = $this->getDoctrine()->getRepository(PreparationEtAcces::class)->find($idPrepTerrain);
    }
    else{
      $prepTerrain = null;
    }

    $idSoubassement = $grosOeuvre->getIdSoubassement();
    if($idSoubassement != NULL){
      $soubassement = $this->getDoctrine()->getRepository(Soubassement::class)->find($idSoubassement);
    }
    else{
      $soubassement = null;
    }

    $idElevation = $grosOeuvre->getIdElevation();
    if($idElevation != NULL){
      $elevation = $this->getDoctrine()->getRepository(Elevation::class)->find($idElevation);
    }
    else{
      $elevation = null;
    }

    $idExcavation = $grosOeuvre->getIdExcavation();
    if($idExcavation != NULL){
      $excavation = $this->getDoctrine()->getRepository(Excavation::class)->find($idExcavation);
    }
    else{
      $excavation = null;
    }

    $idVRD = $grosOeuvre->getIdVRD();
    if($idVRD != NULL){
      $vrd = $this->getDoctrine()->getRepository(Vrd::class)->find($idVRD);
    }
    else{
      $vrd = null;
    }
	
	$idToiture = $grosOeuvre->getIdToiture();
    if($idToiture != NULL){
      $toiture = $this->getDoctrine()->getRepository(Toiture::class)->find($IdToiture);
    }
    else{
      $toiture = null;
    }


    $idFondations = $grosOeuvre->getIdFondations();
    if($idFondations != NULL){
      $fondations = $this->getDoctrine()->getRepository(Fondation::class)->find($idFondations);
    }
    else{
      $fondations = null;
    }

    $idPlancher = $grosOeuvre->getIdPlancher();
    if($idPlancher != NULL){
      $plancher = $this->getDoctrine()->getRepository(Plancher::class)->find($idPlancher);
    }
    else{
      $plancher = null;
    }


    $idMenuiserie = $grosOeuvre->getIdMenuiseriesExt();
    if($idMenuiserie != NULL){
      $menuiserie = $this->getDoctrine()->getRepository(Plancher::class)->find($idMenuiserie);
    }
    else{
      $menuiserie = null;
    }*/

    $nbform = $this->getDoctrine()
    ->getRepository(SecondOeuvre::class)->findNbFormulairesByGrosOeuvre($idSo);

    return $this->render(
        'project/second-oeuvre-view.html.twig', ['projet' => $projet, 'nbform' => $nbform,
        'escaliers' => $escaliers, 'plomberie' => $plomberie, 'electricite' => $electricite ]);
        //,['projet'  => $projet, 'nbform' => $nbform, 'etudeSol' => $etudeSol, 'charpente' => $charpente, 'prepTerrain' => $prepTerrain, 'soubassement' => $soubassement,'elevation' => $elevation, 'excavation' => $excavation, 'vrd' => $vrd, 'fondations' => $fondations, 'plancher' => $plancher, 'toiture' => $toiture, 'menuiserie' => $menuiserie]);
    }

    public function menu()
    {
        $idUser = $this->getUser()->getId();
        $projets = $this->getDoctrine()
        ->getRepository(Projet::class)
        ->findProjetsByIdUser($idUser);
  
      return $this->render('project/liste-projets.html.twig', array(
        'projets' => $projets
      ));
    }


}
