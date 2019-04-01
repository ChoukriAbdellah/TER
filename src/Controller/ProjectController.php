<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ProjetType;
use App\Form\EtudeSolType;
use App\Form\CharpenteType;
use App\Form\VrdType;
use App\Form\ExcavationType;
use App\Form\FondationType;
use App\Form\PlancherType;
use App\Form\PreparationEtAccesType;
use App\Form\SoubassementType;
use App\Form\ElevationType;
use App\Entity\Projet;
use App\Entity\GrosOeuvre;
use App\Entity\SecondOeuvre;
use App\Entity\EtudeSol;
use App\Entity\Charpente;
use App\Entity\Excavation;
use App\Entity\Vrd;
use App\Entity\Fondation;
use App\Entity\Plancher;
use App\Entity\PreparationEtAcces;
use App\Entity\Soubassement;
use App\Entity\Elevation;

use App\Repository\ProjetRepository;
use App\Repository\GrosOeuvreRepository;

class ProjectController extends AbstractController
{

  public function newProject(Request $request)
  {
            // création du formulaire
            $projet = new Projet();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(ProjetType::class, $projet);        
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();

                $proprio = $this->getUser();
                $idProprio = $proprio->getId();
                $projet->setIdProprio($idProprio);

                // création du gros oeuvre
                $go = new GrosOeuvre();
                // création du second oeuvre
                $so = new SecondOeuvre();

                // on enregistre go et so dans la BDD pr qu'ils aient une ID

                $em->persist($go);
                $em->flush();
                $em->persist($so);
                $em->flush();

                // On recup l'id du GO et SO

                $idGo = $go->getId();
                $idSo = $so->getId();

                // on lie les id des gros oeuvre et second oeuvre au projet qu'on a crée

                $projet->setIdGrosOeuvre($idGo);
                $projet->setIdSecondOeuvre($idSo);

                // Enregistre le projet en base

                $em->persist($projet);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
            }
     
            return $this->render(
                'project/new-project.html.twig', array('form' => $form->createView()));
  }

  public function etudeSol($id, Request $request)
  {
            // création du formulaire
            $e = new EtudeSol();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(EtudeSolType::class, $e);        
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();

                // Enregistre l'étude de sol en base

                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idGo = $projet->getIdGrosOeuvre();

                $grosOeuvre = $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)
                ->find($idGo);

                $grosOeuvre->setIdEtudeSol($e->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
            }


     
            return $this->render(
              'project/etude-sol.html.twig', array('form' => $form->createView(), 'id' => $id));
  }

  public function charpente($id, Request $request)
  {
            // création du formulaire
            $e = new Charpente();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(CharpenteType::class, $e);     
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();

                // Enregistre l'étude de sol en base

                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idGo = $projet->getIdGrosOeuvre();

                $grosOeuvre = $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)
                ->find($idGo);

                $grosOeuvre->setIdCharpente($e->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
            }
     
            return $this->render(
              'project/charpente.html.twig', array('form' => $form->createView(), 'id' => $id));
            }

  public function PreparationEtAcces($id, Request $request)
  {
            // création du formulaire
            $e = new PreparationEtAcces();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(PreparationEtAccesType::class, $e);        
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();

                // Enregistre l'étude de sol en base

                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idGo = $projet->getIdGrosOeuvre();

                $grosOeuvre = $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)
                ->find($idGo);
                $grosOeuvre->setIdPrepTerrain($e->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
            }
     
            return $this->render(
              'project/prep-terrain.html.twig', array('form' => $form->createView(), 'id' => $id));
  }
   
  public function Soubassement($id, Request $request)
  {
            // création du formulaire
            $e = new Soubassement();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(SoubassementType::class, $e);        
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();

                // Enregistre l'étude de sol en base

                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idGo = $projet->getIdGrosOeuvre();

                $grosOeuvre = $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)
                ->find($idGo);

                $grosOeuvre->setIdSoubassement($e->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
            }
            
             $projet = $this->getDoctrine()
            ->getRepository(Projet::class)
            ->find($id);
                
            $idGo = $projet->getIdGrosOeuvre();
                
            $grosOeuvre = $this->getDoctrine()
            ->getRepository(GrosOeuvre::class)
            ->find($idGo);
                
            /*$idPrepTerrain = $grosOeuvre->getIdPrepTerrain(); 
            $PrepTerrain = $this->getDoctrine()
            ->getRepository(PreparationEtAcces::class)
            ->find($idPrepTerrain);
            $positionTerrain = $PrepTerrain->getPositionTerrain();*/

            $idPrepTerrain = $grosOeuvre->getIdPrepTerrain();
            if($idPrepTerrain != NULL){
              $PrepTerrain = $this->getDoctrine()->getRepository(PreparationEtAcces::class)->find($idPrepTerrain);
              $positionTerrain = $PrepTerrain->getPositionTerrain();
            }
            else{
              $PrepTerrain = null;
              $positionTerrain = null;
            }
            
            
            return $this->render(
              'project/soubassement.html.twig', array('form' => $form->createView(), 'positionTerrain' => $positionTerrain));
              
  } 
  public function Elevation($id, Request $request)
  {
            // création du formulaire
            $e = new Elevation();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(ElevationType::class, $e);        
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();

                // Enregistre l'étude de sol en base

                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idGo = $projet->getIdGrosOeuvre();

                $grosOeuvre = $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)
                ->find($idGo);

                $grosOeuvre->setIdElevation($e->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
            }
     
            return $this->render(
              'project/elevation.html.twig', array('form' => $form->createView(), 'id' => $id));
  } 

  
  
    public function excavation($id, Request $request)
  {
            // création du formulaire
            $e = new Excavation();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(ExcavationType::class, $e);        
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();

                // Enregistre l'étude de sol en base

                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idGo = $projet->getIdGrosOeuvre();

                $grosOeuvre = $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)
                ->find($idGo);

                $grosOeuvre->setIdExcavation($e->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
            }
     
            return $this->render(
              'project/excavation.html.twig', array('form' => $form->createView(), 'id' => $id));
  }
  
    public function vrd($id, Request $request)
  {
            // création du formulaire
            $e = new Vrd();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(VrdType::class, $e);        
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();

                // Enregistre l'étude de sol en base

                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idGo = $projet->getIdGrosOeuvre();

                $grosOeuvre = $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)
                ->find($idGo);

                $grosOeuvre->setIdVrd($e->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
            }
     
            return $this->render(
              'project/vrd.html.twig', array('form' => $form->createView(), 'id' => $id));
  }
  
  public function fondation($id, Request $request)
  {
            // création du formulaire
            $e = new Fondation();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(FondationType::class, $e);        
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();

                // Enregistre l'étude de sol en base

                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idGo = $projet->getIdGrosOeuvre();

                $grosOeuvre = $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)
                ->find($idGo);

                $grosOeuvre->setIdFondations($e->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
            }
     
            return $this->render(
              'project/fondation.html.twig', array('form' => $form->createView(), 'id' => $id));
  }
  
    public function plancher($id, Request $request)
  {
            // création du formulaire
            $e = new Plancher();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(PlancherType::class, $e);        
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();

                // Enregistre l'étude de sol en base

                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idGo = $projet->getIdGrosOeuvre();

                $grosOeuvre = $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)
                ->find($idGo);

                $grosOeuvre->setIdPlancher($e->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
            }
     
            return $this->render(
              'project/plancher.html.twig', array('form' => $form->createView(), 'id' => $id));
  }
          

  public function view($id, Request $request)
    {
    $projet = $this->getDoctrine()
        ->getRepository(Projet::class)
        ->find($id);

    $idGo = $projet->getIdGrosOeuvre();
    $grosOeuvre = $this->getDoctrine()
    ->getRepository(GrosOeuvre::class)
    ->find($idGo);

    $idEtudeSol = $grosOeuvre->getIdEtudeSol();
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

    $nbform = $this->getDoctrine()
    ->getRepository(GrosOeuvre::class)->findNbFormulairesByGrosOeuvre($idGo);

    return $this->render(
        'project/view.html.twig',
        ['projet'  => $projet, 'nbform' => $nbform, 'etudeSol' => $etudeSol, 'charpente' => $charpente, 'prepTerrain' => $prepTerrain, 'soubassement' => $soubassement,
        'elevation' => $elevation, 'excavation' => $excavation, 'vrd' => $vrd, 'fondations' => $fondations, 'plancher' => $plancher]
    );
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
