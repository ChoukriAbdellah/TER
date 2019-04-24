<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;

use App\Form\ProjetType;

use App\Entity\Projet;

use App\Entity\GrosOeuvre;
use App\Entity\SecondOeuvre;
<<<<<<< HEAD
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
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Prix;
=======
>>>>>>> b34e2a4f66f178e2d3b4e5304cd49a9e3700af3a

use App\Repository\ProjetRepository;
use App\Repository\UserRepository;
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
  
<<<<<<< HEAD
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
                $finalPrice = 0;
                if($e->getTractopelle() != null){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("tractopelle");
                  $finalPrice+=$prix;
                }

                if($e->getCamionBenne() !=NULL){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("camion_benne");
                  $finalPrice+=$prix;
                }

                if($e->getBetonniere() !=NULL){
                  $prix = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom("betonniere");
                  $finalPrice+=$prix;
                }
                $prixType = $this->getDoctrine()
                  ->getRepository(Prix::class)
                  ->findPrixByNom($e->getMaterielUtilise());
                  $finalPrice+=$prixType;

               
                
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
     
                return $this->redirectToRoute('my-project', array('id' => $id));
            }
     
            return $this->render(
              'project/elevation.html.twig', array('form' => $form->createView(), 'id' => $id));
  } 

=======
                  // on enregistre go et so dans la BDD pr qu'ils aient une ID
>>>>>>> b34e2a4f66f178e2d3b4e5304cd49a9e3700af3a
  
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
<<<<<<< HEAD
   
   

}
=======

}
>>>>>>> b34e2a4f66f178e2d3b4e5304cd49a9e3700af3a
