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
use App\Entity\Cloison;
use App\Form\CloisonsType;
use App\Entity\Climatisation;
use App\Form\ClimatisationType;
use App\Entity\Domotique;
use App\Form\DomotiqueType;

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
            $form = $this->createForm(cloisonsType::class, $e);        
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
                $prixCloison;
                $prixTotal;
                if($e->getTypeCloisons() == 'cloison_platre'){
                  $prixCloison  = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("cloison_platre");
                }

                if($e->getTypeCloisons() == 'cloison_alveolaire'){
                  $prixCloison = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("cloison_alveolaire");
                }
                if($e->getTypeCloisons() == 'cloison_beton'){
                  $prixCloison = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("cloison_beton");
                }
                if($e->getTypeCloisons() == 'cloison_bois'){
                  $prixCloison = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("cloison_bois");
                }
                //10euros le mètre carré 
                $prixTotal = $e->getSurfaceTotale();
                // Enregistre l'étude de sol en base
                $finalePrice=$prixCloison + $prixTotal;
                $e->setPrix($finalePrice);
                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $secondOeuvre->setIdCloisons($e->getId());
                $em->persist($secondOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('second-oeuvre', array('id' => $id));
            }
     
            return $this->render(
              'project/cloison.html.twig', array('form' => $form->createView(), 'id' => $id));
			
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
     
                return $this->redirectToRoute('second-oeuvre', array('id' => $id));
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


    $nbform = $this->getDoctrine()
    ->getRepository(SecondOeuvre::class)->findNbFormulairesByGrosOeuvre($idSo);

    return $this->render(
        'project/second-oeuvre-view.html.twig', ['projet' => $projet, 'nbform' => $nbform,
        'ventilation' => $ventilation, 'climatisation' => $climatisation, 'domotique' => $domotique,
		'escaliers' => $escaliers, 'plomberie' => $plomberie, 'electricite' => $electricite, 'cloisons' => $cloisons
        ]);
        
    }

}


    
