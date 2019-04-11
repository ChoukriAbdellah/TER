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
     
                return $this->redirectToRoute('dashboard');
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
                $prix = 0;
                if($e->getTypeSol() == 'ARGILEUX'){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("sol_argileux");
                }

                if($e->getTypeSol() == 'CALCAIRE'){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("sol_calcaire");
                }

                if($e->getTypeSol() == 'HUMIFERE'){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("sol_humifere");
                }

                if($e->getTypeSol() == 'LIMONEUX'){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("sol_limoneux");
                }

                if($e->getTypeSol() == 'SABLEUX'){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("sol_sableux");
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

                $grosOeuvre->setIdEtudeSol($e->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
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
     
                return $this->redirectToRoute('dashboard');
                      
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
                  $p_br= $p_br * $elem->getDimensionBoisRouge();
                  $p_bh=$p_bh * $elem->getDimensionBoisHetre();
                  $p_a=$p_a *$elem->getDimensionAluminium();

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
     
                return $this->redirectToRoute('dashboard');
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

                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                $projet = $this->getDoctrine()
                ->getRepository(Projet::class)
                ->find($id);

                
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
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
                  ->findPrixByNom("type_terrassement_semelle_filante
");
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
     
                return $this->redirectToRoute('my-project', array('id' => $id));
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

                $prix = $coutFeraillage * $quantiteFerraillage;
                $e->setPrix($prix);
                $em->persist($e);
                $em->flush();

                // Met à jour le projet avec l'id de l'étude de sol créée

                
                $grosOeuvre->setIdFondations($e->getId());
                $em->persist($grosOeuvre);
                $em->flush();
     
                return $this->redirectToRoute('my-project', array('id' => $id));
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
        'project/view.html.twig',
        ['projet'  => $projet, 'nbform' => $nbform, 'etudeSol' => $etudeSol, 'charpente' => $charpente, 'prepTerrain' => $prepTerrain, 'soubassement' => $soubassement,
        'elevation' => $elevation, 'excavation' => $excavation, 'vrd' => $vrd, 'fondations' => $fondations, 'plancher' => $plancher, 'toiture' => $toiture, 'menuiserie' => $menuiserie]
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
