<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Projet;
use App\Entity\SecondOeuvre;

use App\Entity\Prix;

use App\Repository\ProjetRepository;
use App\Repository\SecondOeuvreRepository;

class SecondOeuvreController extends AbstractController
{       



  public function view($id, Request $request)
    {
    $projet = $this->getDoctrine()
        ->getRepository(Projet::class)
        ->find($id);

    $idSo = $projet->getIdSecondOeuvre();
    $secondOeuvre = $this->getDoctrine()
    ->getRepository(SecondOeuvre::class)
    ->find($idSo);

    /*$idEtudeSol = $grosOeuvre->getIdEtudeSol();
    if($idEtudeSol != NULL){
      $etudeSol = $this->getDoctrine()->getRepository(EtudeSol::class)->find($idEtudeSol);
    }
    else{
      $etudeSol = null;
    }

    $idCharpente = $grosOeuvre->getIdCharpente();
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
        'project/second-oeuvre-view.html.twig', ['projet' => $projet, 'nbform' => $nbform]);
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
