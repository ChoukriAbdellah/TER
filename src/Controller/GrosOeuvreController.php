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
use App\Form\MenuiserieType;
use App\Form\ToitureType;
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
use App\Entity\Menuiserie;
use App\Entity\Toiture;

use App\Entity\Prix;

use App\Repository\ProjetRepository;
use App\Repository\GrosOeuvreRepository;

class GrosOeuvreController extends AbstractController
{
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
                $prix = 0;
                $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom($e->getTypeSol());
                
                $e->setPrix($prix);
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
     
                return $this->redirectToRoute('gros-oeuvre', array('id' => $id));
            }


     
            return $this->render(
              'project/etude-sol.html.twig', array('form' => $form->createView(), 'id' => $id));
  }
 
 
 public function toiture($id, Request $request)
  {
            // création du formulaire
            $e = new Toiture();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(ToitureType::class, $e);        
            $form->handleRequest($request);
			        $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);
                $idGo = $projet->getIdGrosOeuvre();
                $grosOeuvre = $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)
                ->find($idGo);
			          $idCharpente = $grosOeuvre->getIdCharpente();
			            if($idCharpente == NULL){
                // création du formulaire
                  $e = new Charpente();
                  // instancie le formulaire avec les contraintes par défaut
                  $form = $this->createForm(CharpenteType::class, $e);        
                  $form->handleRequest($request);
                return $this->redirectToRoute(
                    'charpente', ['id'=>$id]);
                   }
                  
                  if ($form->isSubmitted() && $form->isValid()) {  
                        $em = $this->getDoctrine()->getManager();
                        /* le prix */
                        $prix=0;
                        
                        if($e->getTypeToit()== 'MODERNE'){
                          $prix=$this->getDoctrine()
                          ->getRepository(Prix::class)
                          ->findPrixByNom("tuile_moderne");
                        }
                        if($e->getTypeToit()== 'CLASSIQUE'){
                          $prix=$this->getDoctrine()
                          ->getRepository(Prix::class)
                          ->findPrixByNom("tuile_classique");
                        }
                        $p_deg=0;
                        if($e->getrenforcement() == 'true'){
                        $p_deg=$this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("tuile_degre");
                        }
                        $renf=$this->getDoctrine()
                        ->getRepository(Prix::class)
                        ->findPrixByNom("tuile_renforcement");
                        $a=$e->getdegPente();
                        $prix=$prix+$renf+($a*$p_deg);
                       
                        // Enregistre l'étude de sol en base
                        $e->setPrix($prix);
                        $em->persist($e);
                        $em->flush();
                      // Met à jour le projet avec l'id de l'étude de sol créée
                      
                
                        $grosOeuvre->setIdToiture($e->getId());
                        $em->persist($grosOeuvre);
                        $em->flush();
     
                return $this->redirectToRoute('gros-oeuvre', array('id' => $id));
                      
		}
            return $this->render(
              'project/toiture.html.twig', array('form' => $form->createView(), 'id' => $id));
			
  
  }
  
  
  public function menuiserie($id, Request $request)
  {
            // création du formulaire
            $elem = new Menuiserie();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(MenuiserieType::class, $elem);        
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();

                // Enregistre l'étude de sol en base
               
                        
                        
                  $p_br=$this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("materiau_bois_rouge");
                  $p_bh=$this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("materiau_bois_hetre");
                  $p_a=$this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("materiau_aluminium");
                  $p_br= $p_br * $elem->getDimensionsBoisRouge();
                  $p_bh=$p_bh * $elem->getDimensionsBoisHetre();
                  $p_a=$p_a *$elem->getDimensionsAluminium();

                  $prix=$p_br + $p_bh +$p_a;
                        
                        /****** */
                        $elem->setPrix($prix);
                $em->persist($elem);
                $em->flush();

               // Met à jour le projet avec l'id de l'étude de sol créée

                $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idGo = $projet->getIdGrosOeuvre();

                $grosOeuvre = $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)
                ->find($idGo);
                
                $grosOeuvre->setIdMenuiseriesExt($elem->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('gros-oeuvre', array('id' => $id));
            }


     
            return $this->render(
              'project/menuiserie.html.twig', array('form' => $form->createView(), 'id' => $id));
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
                /*$p_a=$this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("materiau_aluminium");
                  $p_br= $p_br * $elem->getDimensionBoisRouge();*/
                // Enregistre l'étude de sol en base
                $p_tcharp =$this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom($e->getTypeCharpente());
                $p_fcharp =$this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom($e->getFormeCharpente());
                 $prix= $p_tcharp * $e->getNbMC() + $p_fcharp ;



                $e->setPrix($prix);
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
     
                return $this->redirectToRoute('gros-oeuvre', array('id' => $id));
            }
     
            return $this->render(
              'project/charpente.html.twig', array('form' => $form->createView(), 'id' => $id));
            }

  public function PreparationEtAcces($id, Request $request)
  {
	  
	  
	  
            // création du formulaire
            $e = new PreparationEtAcces();
            // instancie le formulaire avec les contraintes par défaut
			$projet = $this->getDoctrine()
				->getRepository(Projet::class)
				->find($id);
		
			$idGo = $projet->getIdGrosOeuvre();
			$grosOeuvre = $this->getDoctrine()
				->getRepository(GrosOeuvre::class)
				->find($idGo);

	$idEtudeSol = $grosOeuvre->getIdEtudeSol();
    if($idEtudeSol == NULL){
		 // création du formulaire
            $e = new EtudeSol();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(EtudeSolType::class, $e);        
            $form->handleRequest($request);
	  return $this->redirectToRoute(
              'etude-sol', ['id'=>$id]);
    }
    else{
      
       
            $form = $this->createForm(PreparationEtAccesType::class, $e);        
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();

                // Enregistre l'étude de sol en base

                
                // Met à jour le projet avec l'id de l'étude de sol créée

                $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                
               

                $prixPins = 0;
                $prixSapins=0;
                $prixBouleaux=0;
                $prixChenes=0;
                $prixErables=0;
                $prixFrenes=0;
                $prixNoyers=0;
                $prixAutres=0;
                $prixPositionTerrain=0;
                $FinalPrice=0;
                if($e->getNbPins() !=0 ){
                  $numberPins=$e->getNbPins();
                  $prixPins = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("terrain_couper_pin");
                  $taillePins = $e->getTaillePins();
                  $prixPins= $numberPins * $taillePins ;
                }
                if($e->getNbSapins() !=0 ){
                  $numberSapins=$e->getNbSapins();
                  $prixPins = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("terrain_couper_sapin");
                  $tailleSapins = $e->getTailleSapins();
                  $prixSapins= $numberSapins * $tailleSapins ;
                }
                if($e->getNbBouleaux() !=0 ){
                  $numberBouleaux=$e->getNbBouleaux();
                  $prixBouleaux = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("terrain_couper_bouleaux");
                  $tailleBouleaux = $e->getTailleBouleaux();
                  $prixBouleaux= $numberBouleaux * $tailleBouleaux ;
                }
                if($e->getNbChenes() !=0 ){
                  $numberChenes=$e->getNbChenes();
                  $prixChenes = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("terrain_couper_chene");
                  $tailleChenes = $e->getTailleChenes();
                  $prixChenes= $numberChenes * $tailleChenes ;
                }
                if($e->getNbErables() !=0 ){
                  $numberErables=$e->getNbErables();
                  $prixErables = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("terrain_couper_erable");
                  $tailleErables = $e->getTailleErables();
                  $prixErables= $numberErables * $tailleErables ;
                }
                if($e->getNbFrenes() !=0 ){
                  $numberFrenes=$e->getNbFrenes();
                  $prixFrenes= $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("terrain_couper_frene");
                  $tailleFrenes= $e->getTailleFrenes();
                  $prixErables= $numberFrenes* $tailleFrenes;
                }
                if($e->getNbNoyers() !=0 ){
                  $numberNoyers=$e->getNbNoyers();
                  $prixNoyers= $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("terrain_couper_noyer");
                  $tailleNoyers= $e->getTailleNoyers();
                  $prixErables= $numberNoyers* $tailleNoyers;
                }
                if($e->getNbAutres() !=0 ){
                  $numberAutres=$e->getNbAutres();
                  $prixAutres= $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("terrain_couper_noyer");
                  $tailleAutres= $e->getTailleAutres();
                  $prixAutres= $numberAutres* $tailleAutres;
                }
              
                  $prixPositionTerrain = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom($e->getPositionTerrain());
                  $prixAcces = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("terrain_acces");
                  $prixEmblai = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("terrain_emblai");

               
              $etudeSol = $this->getDoctrine()->getRepository(etudeSol::class)->find($idEtudeSol);
              $typeSol = $etudeSol->getPrix();
            
          
                $finalPrice=  2*$typeSol + 2.5*$prixPositionTerrain  +
                            $prixEmblai+
                            $prixAcces+
                            $prixPins +
                            $prixSapins+
                            $prixBouleaux+
                            $prixChenes+
                            $prixErables+ 
                            $prixFrenes+
                            $prixNoyers;
                            
                $e->setPrix($finalPrice);
                $em->persist($e);
                $em->flush();

                
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
     

                return $this->redirectToRoute('gros-oeuvre', array('id' => $id));
            }
	
            return $this->render(
              'project/prep-terrain.html.twig', array('form' => $form->createView(), 'id' => $id));
	}
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
                $prix = 0;
                if($e->getMaterielUtilise() == 'tractopelle'){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("tractopelle");
                }

                if($e->getMaterielUtilise() == 'camion_benne'){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("camion_benne");
                }

                if($e->getMaterielUtilise() == 'betonniere'){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("betonniere");
                }

               
  
                $e->setPrix($prix);
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
     
                return $this->redirectToRoute('gros-oeuvre', array('id' => $id));
            }
            
             $projet = $this->getDoctrine()
            ->getRepository(Projet::class)
            ->find($id);
                
            $idGo = $projet->getIdGrosOeuvre();
                
            $grosOeuvre = $this->getDoctrine()
            ->getRepository(GrosOeuvre::class)
            ->find($idGo);
                
            

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
                $prixPoutre=0;
                $prixMur=0;
                $prixFenetre=0;
                $prixLinteau=0;
                $finalPrice = 0;
                if($e->getLongueurPoutre() < 2){
                  $prixPoutre= $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("poutreCategorieA");
                }
                else{
                  $prixPoutre= $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("poutreCategorieB");
                }
                $prixPoutre= $prixPoutre * $e->getNbPoutres();

                if($e->getTypeMateriauxMur() == 'mur_agglo'){
                  $prixMur  = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("mur_agglo");
                }

                if($e->getTypeMateriauxMur() == 'mur_brique'){
                  $prixMur = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("mur_brique");
                }
                if($e->getTypeMateriauxMur() == 'mur_bloc_pense'){
                  $prixMur = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("mur_bloc_pense");
                }

                if($e->getTypeMateriauxMur() == 'mur_stuporeux'){
                  $prixMur = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("mur_stuporeux");
                }
                if($e->getTypeMateriauxMur() == 'mur_bois'){
                  $prixMur = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("mur_bois");
                }
                $prixMur= $prixMur+ $e->getHauteurMur()*$prixMur;

                if($e->getTypeFenetre() == 'fenetre_fixe'){
                  $prixFenetre = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("fenetre_fixe");
                }

                if($e->getTypeFenetre() == 'fenetre_soufflet'){
                  $prixFenetre = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("fenetre_soufflet");
                }
                if($e->getTypeFenetre() == 'fenetre_battante'){
                  $prixFenetre = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("fenetre_battante");
                }
                $prixLinteau=$this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("linteau");
                $prixLinteau= $prixLinteau *  $e->getNombreFenetre();
              
               $prixFenetre= $prixFenetre* $e->getNombreFenetre();
                
               
               $finalPrice= $prixPoutre+
                $prixMur+
                $prixFenetre+
                $prixLinteau;

                $e->setPrix($finalPrice);
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
     
                return $this->redirectToRoute('gros-oeuvre', array('id' => $id));
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
			  $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idGo = $projet->getIdGrosOeuvre();

                $grosOeuvre = $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)
                ->find($idGo);
				$idEtudeSol = $grosOeuvre->getIdEtudeSol();
			if($idEtudeSol == NULL){
				 // création du formulaire
					$e = new EtudeSol();
					// instancie le formulaire avec les contraintes par défaut
					$form = $this->createForm(EtudeSolType::class, $e);        
					$form->handleRequest($request);
			  return $this->redirectToRoute(
					  'etude-sol', ['id'=>$id]);
			}
			else{
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();

                // Enregistre l'étude de sol en base
                $prix = 0;
                if($e->getTypeTerrassement() == 'FILANTE'){
                  $prix += $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("type_terrassement_semelle_filante");
                }

                if($e->getTypeTerrassement() == 'LONGRINES'){
                  $prix += $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("type_terrassement_longrines");
                }

                $prixMurs = ($e->getMursPeripherique() * $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("mur_peripherique")) + ($e->getMursRefont() * $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("mur_refont"));

                $prixProfondeur = ( $e->getProfondeurFouille() * $this->getDoctrine()
                  	->getRepository(Prix::class)
                  	->findPrixByNom("profondeur_fouille")) 
                	+ ( $e->getLargeurFouille() * $this->getDoctrine()
                 	->getRepository(Prix::class)
                 	 ->findPrixByNom("largeur_fouille"));

                $prix += $prixMurs + $prixProfondeur;
                $e->setPrix($prix);
                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

              
                $grosOeuvre->setIdExcavation($e->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('gros-oeuvre', array('id' => $id));
            }
     
            return $this->render(
              'project/excavation.html.twig', array('form' => $form->createView(), 'id' => $id));
			}
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

                


                // Met à jour le projet avec l'id de l'étude de sol créée

                $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idGo = $projet->getIdGrosOeuvre();
                                $grosOeuvre = $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)
                ->find($idGo);

                $prix = 0;
                if($e->getPompeRelevage() == true){
                  $prix += $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("pompe_relevage");
                }

                if($e->getFosseSeptique() == true){
                  $prix += $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("fosse_septique");
                }

                if($e->getMicroStation() == true){
                  $prix += $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("micro_station");
                }

                if($e->getEtudeHydrogeologique() == true){
                  $prix += $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("etude_hydro");
                }


                $prix+= $e->getDistanceEauPotable() * $this->getDoctrine()
                  	->getRepository(Prix::class)
                  	->findPrixByNom("reseau_eau");

                $prix+= $e->getDistanceElectricite() * $this->getDoctrine()
                  	->getRepository(Prix::class)
                  	->findPrixByNom("reseau_electricite");

                $prix+= $e->getDistanceTelephonique() * $this->getDoctrine()
                  	->getRepository(Prix::class)
                  	->findPrixByNom("reseau_telephonique");

                $e->setPrix($prix);
                $em->persist($e);
                $em->flush();

                $grosOeuvre->setIdVrd($e->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('gros-oeuvre', array('id' => $id));
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
			
			$projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idGo = $projet->getIdGrosOeuvre();

                $grosOeuvre = $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)
                ->find($idGo);
				
			$idExcavation = $grosOeuvre->getIdExcavation();
			if($idExcavation == NULL){
				 // création du formulaire
					$e = new Excavation();
					// instancie le formulaire avec les contraintes par défaut
					$form = $this->createForm(ExcavationType::class, $e);        
					$form->handleRequest($request);
			  return $this->redirectToRoute(
					  'excavation', ['id'=>$id]);
			}
			else{
				
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();
                $prix = 0;

                // Enregistre l'étude de sol en base

                if($e->getSismicite()){
                  $prix+=100;
                }

                $idEtudeSol = $grosOeuvre->getIdEtudeSol();
                $etudeSol = $this->getDoctrine()
                ->getRepository(EtudeSol::class)
                ->find($idEtudeSol);

                if($etudeSol->getTypeSol() == 'ARGILEUX'){
                  $typeFeraillage = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("feraillage_sol_argileux");
                }

                if($etudeSol->getTypeSol() == 'CALCAIRE'){
                  $typeFeraillage = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("feraillage_sol_calcaire");
                }

                if($etudeSol->getTypeSol() == 'HUMIFERE'){
                  $typeFeraillage = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("feraillage_sol_humifere");
                }

                if($etudeSol->getTypeSol() == 'LIMONEUX'){
                  $typeFeraillage = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("feraillage_sol_limoneux");
                }

                if($etudeSol->getTypeSol() == 'SABLEUX'){
                  $typeFeraillage = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("feraillage_sol_sableux");
                }

                $excavation = $this->getDoctrine()
                ->getRepository(Excavation::class)
                ->find($idExcavation);

                $mursLineaires = $excavation->getMursPeripherique() + $excavation->getMursRefont();

                $quantiteFeraillage = $mursLineaires * (3 / 5);

                $prix = $typeFeraillage * $quantiteFeraillage;

                $e->setprix($prix);
                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                

                $grosOeuvre->setIdFondations($e->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('gros-oeuvre', array('id' => $id));
            }
     
            return $this->render(
              'project/fondation.html.twig', array('form' => $form->createView(), 'id' => $id));
			}
  }
  
    public function plancher($id, Request $request)
  {
            // création du formulaire
            $e = new Plancher();
            // instancie le formulaire avec les contraintes par défaut
            $form = $this->createForm(PlancherType::class, $e);        
            $form->handleRequest($request);
			
			$projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                $idGo = $projet->getIdGrosOeuvre();

                $grosOeuvre = $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)
                ->find($idGo);
				
			$idExcavation = $grosOeuvre->getIdExcavation();
			if($idExcavation == NULL){
				 // création du formulaire
					$e = new Excavation();
					// instancie le formulaire avec les contraintes par défaut
					$form = $this->createForm(ExcavationType::class, $e);        
					$form->handleRequest($request);
			  return $this->redirectToRoute(
					  'excavation', ['id'=>$id]);
			}
			else{
            if ($form->isSubmitted() && $form->isValid()) {  
                $em = $this->getDoctrine()->getManager();

                // Enregistre l'étude de sol en base
                $prix = 0;

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("plancher_VS") * $e->getPlancherVs();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("plancher_etage") * $e->getPlancherEtage();

                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("plancher_tt") * $e->getPlancherTerrasse();


                // Prix des poutrelles
                $excavation = $this->getDoctrine()
                ->getRepository(Excavation::class)
                ->find($idExcavation);
                $nombrePoutrelles = $excavation->getMursRefont();
                $prix += $nombrePoutrelles * $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("poutrelle");


                // Prix des entrevous
                $prix += $this->getDoctrine()
                ->getRepository(Prix::class)
                ->findPrixByNom("entrevous") * $e->getLongueurEntrevous();

                $e->setPrix($prix);
                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $grosOeuvre->setIdPlancher($e->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
            }
     
            return $this->render(
              'project/plancher.html.twig', array('form' => $form->createView(), 'id' => $id));
			}
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
	
	$idToiture = $grosOeuvre->getIdToiture();
    if($idToiture != NULL){
      $toiture = $this->getDoctrine()->getRepository(Toiture::class)->find($idToiture);
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
      $menuiserie = $this->getDoctrine()->getRepository(Menuiserie::class)->find($idMenuiserie);
    }

    else{
      $menuiserie = null;
    }

    $nbform = $this->getDoctrine()
        ->getRepository(GrosOeuvre::class)->findNbFormulairesByGrosOeuvre($idGo);

    return $this->render(
        'project/gros-oeuvre-view.html.twig',
        ['projet'  => $projet, 'nbform' => $nbform, 'etudeSol' => $etudeSol, 'charpente' => $charpente, 'prepTerrain' => $prepTerrain, 'soubassement' => $soubassement,
        'elevation' => $elevation, 'excavation' => $excavation, 'vrd' => $vrd, 'fondations' => $fondations, 'plancher' => $plancher, 'toiture' => $toiture, 'menuiserie' => $menuiserie]
    );
    }


}
