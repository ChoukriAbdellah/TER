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
use App\Repository\UserRepository;
use App\Repository\SecondOeuvreRepository;

use App\Entity\Ventilation;
use App\Form\VentilationType;
use App\Entity\Cloison;
use App\Form\CloisonType;

use App\Entity\EvacuationFumees;
use App\Form\EvacuationFumeesType;

use App\Entity\MenuiseriesInt;
use App\Form\MenuiseriesIntType;

use App\Entity\Climatisation;
use App\Form\ClimatisationType;
use App\Entity\Domotique;
use App\Form\DomotiqueType;

use App\Entity\Enduit;
use App\Form\EnduitType;
use App\Entity\Isolation;
use App\Form\IsolationType;
use App\Entity\Revetement;
use App\Form\RevetementType;

use App\Entity\Electricite;
use App\Form\ElectriciteType;
use App\Entity\Escaliers;
use App\Form\EscaliersType;
use App\Entity\Plomberie;
use App\Form\PlomberieType;

class SecondOeuvreController extends AbstractController
{   

 public function cloison($id, Request $request)
  {
    
            // création du formulaire
            $e = new cloison();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(CloisonType::class, $e);        
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
                $prix = 0;

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("cloisonsAmovibles") * $e->getCloisonsAmovibles();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("cloisonsSeches") * $e->getCloisonsSeches();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("cloisonsPiecesHumides") * $e->getCloisonsPiecesHumides();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("cloisonsVerre") * $e->getCloisonsVerre();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("cloisonsJaponaises") * $e->getCloisonsJaponaises();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("claustraInterieur") * $e->getClaustraInterieur();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("cloisonsVitreesStyleAtelier") * $e->getCloisonsVitreesStyleAtelier();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("cloisonsVegetales") * $e->getCloisonsVegetales();

                $e->setPrix($prix);
                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $secondOeuvre->setIdCloisons($e->getId());
                $em->persist($secondOeuvre);
                $em->flush();

                $request->getSession()->getFlashBag()->add('success', "Vous avez terminé le formulaire des cloisons avec succès !");
     
                return $this->redirectToRoute('second-oeuvre', array('id' => $id));
            }
     
            return $this->render(
              'project/cloison.html.twig', array('form' => $form->createView(), 'id' => $id));
			
  }   
  
  public function evacuation($id, Request $request)
  {
    
            // création du formulaire
            $e = new EvacuationFumees();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(EvacuationFumeesType::class, $e);        
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
                $prix = 0;

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom($e->getMaterieauUtilise());

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom($e->getForme());

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom($e->getTypeCheminee());

                $e->setPrix($prix);
                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $secondOeuvre->setIdEvacuation($e->getId());
                $em->persist($secondOeuvre);
                $em->flush();

                $request->getSession()->getFlashBag()->add('success', "Vous avez terminé le formulaire de l'évacuation des fumées avec succès !");
     
                return $this->redirectToRoute('second-oeuvre', array('id' => $id));
            }
     
            return $this->render(
              'project/evacuation-fumees.html.twig', array('form' => $form->createView(), 'id' => $id));
			
  }
  
  public function menuiseriesInt($id, Request $request)
  {
    
            // création du formulaire
            $e = new MenuiseriesInt();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(MenuiseriesIntType::class, $e);        
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
                $prix = 0;

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("portesPleines") * $e->getPortesPleines();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("portesVitrees") * $e->getPortesVitrees();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("portesBattantes") * $e->getPortesBattantes();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("portesCoulissantes") * $e->getPortesCoulissantes();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("portesPlacardPliantes") * $e->getPortesPlacardPliantes();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("portesPlacardBattantes") * $e->getPortesPlacardBattantes();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("portesPlacardCoulissantes") * $e->getPortesPlacardCoulissantes();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom($e->getMaterieauRampes()) * $e->getTailleRampes();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom($e->getMaterieauBalustrades()) * $e->getTailleBalustrades();

                $e->setPrix($prix);
                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $secondOeuvre->setIdMenuiseriesInt($e->getId());
                $em->persist($secondOeuvre);
                $em->flush();

                $request->getSession()->getFlashBag()->add('success', "Vous avez terminé le formulaire des menuiseries intérieures avec succès !");
     
                return $this->redirectToRoute('second-oeuvre', array('id' => $id));
            }
     
            return $this->render(
              'project/menuiseries-int.html.twig', array('form' => $form->createView(), 'id' => $id));
			
  }
  
  public function escaliers($id, Request $request)
    {
        // création du formulaire
        $e = new Escaliers();
        // instancie le formulaire avec les contraintes par défaut
        $form = $this->createForm(EscaliersType::class, $e);
        $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
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
                
                $request->getSession()->getFlashBag()->add('success', "Vous avez terminé le formulaire des escaliers avec succès !");

				return $this->redirectToRoute('second-oeuvre', array('id' => $id));
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

            $request->getSession()->getFlashBag()->add('success', "Vous avez terminé le formulaire de la plomberie avec succès !");

            return $this->redirectToRoute('second-oeuvre', array('id' => $id));
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

            $request->getSession()->getFlashBag()->add('success', "Vous avez terminé le formulaire de l'électricité avec succès !");

            return $this->redirectToRoute('second-oeuvre', array('id' => $id));
        }

        return $this->render(
            'project/electricite.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    
	
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

                $request->getSession()->getFlashBag()->add('success', "Vous avez terminé le formulaire de la ventilation avec succès !");
     
                return $this->redirectToRoute('second-oeuvre', array('id' => $id));
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
                $prixClimatisation = 0;
                  $prixClimatisation = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom($e->getTypeClimatisation());
                
                
               
                $finalePrice = $prixClimatisation;
                // Enregistre l'étude de sol en base
                $e->setPrix($finalePrice);
                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $secondOeuvre->setIdClimatisation($e->getId());
                $em->persist($secondOeuvre);
                $em->flush();

                $request->getSession()->getFlashBag()->add('success', "Vous avez terminé le formulaire de la climatisation avec succès !");
     
                return $this->redirectToRoute('second-oeuvre', array('id' => $id));
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

                $request->getSession()->getFlashBag()->add('success', "Vous avez terminé le formulaire de la domotique avec succès !");
     
                return $this->redirectToRoute('second-oeuvre', array('id' => $id));
            }
     
            return $this->render(
              'project/domotique.html.twig', array('form' => $form->createView(), 'id' => $id));
			
  }
  public function enduit ($id, Request $request)
  {
    
            // création du formulaire
            $e = new Enduit();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(EnduitType::class, $e);        
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
                
                
                $nbc = $e->getNbCouches();
                $s= $e->getSurface();
                $prix=$this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("enduit_metre");
                
                $prix= $prix *$s *$nbc ;
                // Enregistre l'étude de sol en base
                $e->setPrix($prix);
                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $secondOeuvre->setIdEnduitFacade($e->getId());
                $em->persist($secondOeuvre);
                $em->flush();

                $request->getSession()->getFlashBag()->add('success', "Vous avez terminé le formulaire de l'enduit de façade avec succès !");
     
                return $this->redirectToRoute('second-oeuvre', array('id' => $id));
            }
     
            return $this->render(
              'project/enduit.html.twig', array('form' => $form->createView(), 'id' => $id));
			
  }
  public function isolation ($id, Request $request){
    
            // création du formulaire
            $e = new Isolation();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(IsolationType::class, $e);        
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
                
                
                $s_t = $e->getSurfaceThermique();
                $s_p = $e->getSurfacePhonique();
                $p_t=$this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("isolation_t");
                $p_p=$this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("isolation_p");
                
                $prix= ($s_t * $p_t) +( $s_p * $p_p) ;
                // Enregistre l'étude de sol en base
                $e->setPrix($prix);
                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $secondOeuvre->setIdIsolation($e->getId());
                $em->persist($secondOeuvre);
                $em->flush();

                $request->getSession()->getFlashBag()->add('success', "Vous avez terminé le formulaire de l'isolation avec succès !");
     
                return $this->redirectToRoute('second-oeuvre', array('id' => $id));
            }
     
            return $this->render(
              'project/isolation.html.twig', array('form' => $form->createView(), 'id' => $id));
			
  }
  public function revetement ($id, Request $request){
    
    // création du formulaire
    $e = new Revetement();
    // instancie le formulaire avec les contraintes par défaut
    $form = $this->createForm(RevetementType::class, $e);        
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
        
        
        $s_c = $e->getSurfRevetClassique();
        $s_m = $e->getSurfRevetMotif();
        $p_c=$this->getDoctrine()
        ->getRepository(Prix::class)
        ->findPrixByNom("revet_clas");
        $p_m=$this->getDoctrine()
        ->getRepository(Prix::class)
        ->findPrixByNom("revet_motif");
        
        $prix= ($s_c * $p_c) +( $s_m * $p_m) ;
        // Enregistre l'étude de sol en base
        $e->setPrix($prix);
        $em->persist($e);
        $em->flush();

        // Met à jour le projet avec l'id de l'étude de sol créée

        $secondOeuvre->setIdRevetement($e->getId());
        $em->persist($secondOeuvre);
        $em->flush();

        $request->getSession()->getFlashBag()->add('success', "Vous avez terminé le formulaire du revêtement avec succès !");

        return $this->redirectToRoute('second-oeuvre', array('id' => $id));
    }

    return $this->render(
      'project/revetement.html.twig', array('form' => $form->createView(), 'id' => $id));
    
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
      $climatisation = null;
    }
    $idDomotique= $secondOeuvre->getIdDomotique();
    if($idDomotique != NULL){
      $domotique = $this->getDoctrine()->getRepository(Domotique::class)->find($idDomotique);
    }
    else{
      $domotique = null;
    }
	
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

    $idCloisons = $secondOeuvre->getIdCloisons();
    if($idCloisons != NULL){
        $cloisons = $this->getDoctrine()->getRepository(Cloison::class)->find($idCloisons);
    }
    else{
        $cloisons = null;
    }

    $idEvacuation = $secondOeuvre->getIdEvacuation();
    if($idEvacuation != NULL){
        $evacuation = $this->getDoctrine()->getRepository(EvacuationFumees::class)->find($idEvacuation);
    }
    else{
        $evacuation = null;
    }

    $idMenuiseriesInt = $secondOeuvre->getIdMenuiseriesInt();
    if($idMenuiseriesInt != NULL){
        $menuiseriesInt = $this->getDoctrine()->getRepository(MenuiseriesInt::class)->find($idMenuiseriesInt);
    }
    else{
        $menuiseriesInt = null;
    }
    $idEnduit = $secondOeuvre->getIdEnduitFacade();
    if($idEnduit != NULL){
        $enduit = $this->getDoctrine()->getRepository(Enduit::class)->find($idEnduit);
    }
    else{
        $enduit = null;
    }
    $idIsolation = $secondOeuvre->getIdIsolation();
    if($idIsolation != NULL){
        $isolation = $this->getDoctrine()->getRepository(isolation::class)->find($idIsolation);
    }
    else{
        $isolation = null;
    }
    $idRevetement = $secondOeuvre->getIdRevetement();
    if($idRevetement != NULL){
        $revetement = $this->getDoctrine()->getRepository(Revetement::class)->find($idRevetement);
    }
    else{
        $revetement = null;
    }



    $nbform = $this->getDoctrine()
    ->getRepository(SecondOeuvre::class)->findNbFormulairesByGrosOeuvre($idSo);

    return $this->render(
        'project/second-oeuvre-view.html.twig', ['projet' => $projet, 'nbform' => $nbform,
        'ventilation' => $ventilation, 'climatisation' => $climatisation, 'domotique' => $domotique,
		'escaliers' => $escaliers, 'plomberie' => $plomberie, 'electricite' => $electricite, 'cloisons' => $cloisons, 'evacuation' => $evacuation, 'menuiseriesInt' => $menuiseriesInt,'enduit'=> $enduit , 'isolation' => $isolation, 'revetement'=>$revetement
        ]);
        
    }

}


    
