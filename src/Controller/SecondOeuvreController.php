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

use App\Entity\Ventilation;
use App\Form\VentilationType;
use App\Entity\Climatisation;
use App\Form\ClimatisationType;
use App\Entity\Domotique;
use App\Form\DomotiqueType;

class SecondOeuvreController extends AbstractController
{   
    public function ventilation($id, Request $request)
  {
    
            // création du formulaire
            $e = new ventilation();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(VentilationType::class, $e);        
            $form->handleRequest($request);
			
			$projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idSo = $projet->getIdSecondOeuvre();

                $secondOeuvre = $this->getDoctrine()
                ->getRepository(SecondOeuvre::class)
                ->find($idSo);
				
		
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();
                $finalePrice;
                $prixVentilation;
                $prixSurface1;
                $prixSurface2;
                if($e->getTypeVentilation() == 'ventilation_simple_flux'){
                  $prixVentilation  = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("ventilation_simple_flux");
                }

                if($e->getTypeVentilation() == 'ventilation_double_flux'){
                  $prixVentilation = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("ventilation_double_flux");
                }
                if($e->getTypeVentilation() == 'puits_climatique'){
                  $prixVentilation = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("puits_climatique");
                }
                //10euros le mètre carré 
                $prixSurface1 = $e->getSurfaceChambreSalon()*10;
                $prixSurface2= $e->getSurfaceCuisineWc()*10;
                // Enregistre l'étude de sol en base
                $finalePrice=$prixVentilation + $prixSurface1 + $prixSurface2;
                $e->setPrix($finalePrice);
                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $secondOeuvre->setIdVentilation($e->getId());
                $em->persist($secondOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
            }
     
            return $this->render(
              'project/ventilation.html.twig', array('form' => $form->createView(), 'id' => $id));
			
  }

  public function climatisation($id, Request $request)
  {
    
            // création du formulaire
            $e = new climatisation();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(ClimatisationType::class, $e);        
            $form->handleRequest($request);
			
			$projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idSo = $projet->getIdSecondOeuvre();

                $secondOeuvre = $this->getDoctrine()
                ->getRepository(SecondOeuvre::class)
                ->find($idSo);
				
		
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();
                $prixClimatisation;
                if($e->getTypeClimatisation() == 'Monobloc_mobile'){
                  $prixClimatisation  = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("Monobloc_mobile");
                }

                if($e->getTypeClimatisation() == 'Monobloc_fixe'){
                  $prixClimatisation = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("Monobloc_fixe");
                }
                if($e->getTypeClimatisation() == 'Monobloc_windows'){
                  $prixClimatisation = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("Monobloc_windows");
                }
                if($e->getTypeClimatisation() == 'Split_mobile'){
                  $prixClimatisation  = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("Split_mobile");
                }

                if($e->getTypeClimatisation() == 'split_mural'){
                  $prixClimatisation = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("split_mural");
                }
                if($e->getTypeClimatisation() == 'Split_console'){
                  $prixClimatisation = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("Split_console");
                }
                if($e->getTypeClimatisation() == 'Split_gainable'){
                  $prixClimatisation = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("Split_gainable");
                }
                
               
                $finalePrice = $prixClimatisation;
                // Enregistre l'étude de sol en base
                $e->setPrix($finalePrice);
                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $secondOeuvre->setIdClimatisation($e->getId());
                $em->persist($secondOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
            }
     
            return $this->render(
              'project/climatisation.html.twig', array('form' => $form->createView(), 'id' => $id));
			
  }
  public function domotique($id, Request $request)
  {
    
            // création du formulaire
            $e = new domotique();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(DomotiqueType::class, $e);        
            $form->handleRequest($request);
			
			$projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idSo = $projet->getIdSecondOeuvre();

                $secondOeuvre = $this->getDoctrine()
                ->getRepository(SecondOeuvre::class)
                ->find($idSo);
				
		
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();
                
                $finalePrice=0;
                
                if($e->getRegularisationChauffage() != NULL){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("regularisationChauffage");
                  $finalePrice+= $prix;
                }

                if($e->getEclairageAuto() != NULL){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("eclairageAuto");
                  $finalePrice+= $prix;
                }
                if($e->getOuvertureFermetureAuto() != NULL){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("ouvertureFermetureAuto");
                  $finalePrice+= $prix;
                }
                if($e->getAutonomieEau() != NULL){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("autonomieEau");
                  $finalePrice+= $prix;
                }
                if($e->getDetecteurEtAlarme() != NULL){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("detecteurEtAlarme");
                  $finalePrice+= $prix;
                }
               
                
                // Enregistre l'étude de sol en base
                $e->setPrix($finalePrice);
                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $secondOeuvre->setIdDomotique($e->getId());
                $em->persist($secondOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
            }
     
            return $this->render(
              'project/domotique.html.twig', array('form' => $form->createView(), 'id' => $id));
			
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

    $idVentilation = $secondOeuvre->getIdVentilation();
    if($idVentilation != NULL){
      $ventilation = $this->getDoctrine()->getRepository(Ventilation::class)->find($idVentilation);
    }
    else{
      $ventilation = null;
    }
    $idClimatisation = $secondOeuvre->getIdClimatisation();
    if($idClimatisation != NULL){
      $climatisation = $this->getDoctrine()->getRepository(Climatisation::class)->find($idClimatisation);
    }
    else{
      $climatisationlation = null;
    }
    $idDomotique= $secondOeuvre->getIdDomotique();
    if($idDomotique != NULL){
      $domotique = $this->getDoctrine()->getRepository(Domotique::class)->find($idDomotique);
    }
    else{
      $domotique = null;
    }


    $nbform = $this->getDoctrine()
    ->getRepository(SecondOeuvre::class)->findNbFormulairesByGrosOeuvre($idSo);

    return $this->render(
        'project/second-oeuvre-view.html.twig', ['projet' => $projet, 'nbform' => $nbform,
        'ventilation' => $ventilation, 'climatisation' => $climatisation, 'domotique' => $domotique
        ]);
        
    }

}


    
