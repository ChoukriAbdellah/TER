<?php

namespace App\Controller;

use App\Entity\Charpente;
use App\Entity\Climatisation;
use App\Entity\Cloison;
use App\Entity\Domotique;
use App\Entity\Electricite;
use App\Entity\Elevation;
use App\Entity\Enduit;
use App\Entity\Escaliers;
use App\Entity\EvacuationFumees;
use App\Entity\Excavation;
use App\Entity\Fondation;
use App\Entity\Isolation;
use App\Entity\Menuiserie;
use App\Entity\MenuiseriesInt;
use App\Entity\Plancher;
use App\Entity\Plomberie;
use App\Entity\Revetement;
use App\Entity\Soubassement;
use App\Entity\Toiture;
use App\Entity\Ventilation;
use App\Entity\Vrd;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ProjetType;
use App\Entity\Projet;
use App\Entity\GrosOeuvre;
use App\Entity\SecondOeuvre;
use App\Entity\EtudeSol;
use App\Entity\PreparationEtAcces;
use App\Repository\ProjetRepository;


use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormError;

use App\Form\ProfileType;
use App\Entity\User;
use App\Form\AccountType;


class DashboardController extends AbstractController
{
  public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder)
  {
  	    $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
    	$form = $this->createForm(AccountType::class, $user);

        $idUser = $this->getUser()->getId();
        $projets = $this->getDoctrine()
          ->getRepository(Projet::class)
          ->findProjetsByIdUser($idUser);


        $nbformRemplit=0;
        $nbformEnCours = 0;

        $data = [];
        $dataPourcentage = [];
        $i=0;
        $tabNbForm = array();
        foreach ($projets as &$projet) {
            $idSo = $projet->getIdSecondOeuvre();
            $nbformSo = $this->getDoctrine()
                ->getRepository(SecondOeuvre::class)->findNbFormulairesByGrosOeuvre($idSo);


            $idGo = $projet->getIdGrosOeuvre();
            $nbformGo= $this->getDoctrine()
                ->getRepository(GrosOeuvre::class)->findNbFormulairesByGrosOeuvre($idGo);
            $nbform= $nbformGo + $nbformSo;
            array_push($data,$nbform);
            array_push($dataPourcentage,round($nbform/23*100));
            if ($nbform == 23) {
                $nbformRemplit++;
            }
            else {
                $nbformEnCours++;
            }
            $i++;
        }


    	$form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

  		    $oldPassword = $form->get("oldPassword")->getData();
            $email = $form->get("email")->getData();
            if($email !=NULL) {
                $user->setEmail($email);
                $em->persist($user);
                $em->flush();
            }
            
            // Si l'ancien mot de passe est bon
            if ($passwordEncoder->isPasswordValid($user, $oldPassword)) {
            	//dump($request->request);die();
                $newEncodedPassword = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
                $user->setPassword($newEncodedPassword);
                
                $em->persist($user);
                $em->flush();

                //$this->addFlash('notice', 'Votre mot de passe à bien été changé !');
                $this->addFlash("success", "Votre mot de passe à bien été changé !");


                return $this->redirectToRoute('dashboard');
            } else {
            	$this->addFlash("danger", "Ancien mot de passe incorrect");
                //$form->addError(new FormError('Ancien mot de passe incorrect'));
            }
        }

    	return $this->render('dashboard/index.html.twig', array(
    		'form' => $form->createView(), 'user' => $user, 'projets' => $projets, 'nbformRemplit' => $nbformRemplit , 'nbformEnCours' => $nbformEnCours, 'data' => $data, 'i' => $i, 'dataPourcentage' => $dataPourcentage/*'nbformGrosOeuvre' => $nbformGrosOeuvre, 'nbformSecondOeuvre' => $nbformSecondOeuvre*/
    	));
  }

    public function facture(Request $request, $id)
    {
        $user = $this->getUser();
        $idUser = $user->getId();
        $projets = $this->getDoctrine()
            ->getRepository(Projet::class)
            ->findProjetsByIdUser($idUser);
        $nom= NULL;
        foreach($projets as $projet)

        {

           if($projet->getId() == $id) {
               $nom = $projet->getNom();
               $idSo = $projet->getIdSecondOeuvre();
               $idGo = $projet->getIdGrosOeuvre();

               $prixEtudeSol = 0;
               $prixPrepTerrain = 0;
               $prixExcavation = 0;
               $prixFondation = 0;
               $prixSoubassement = 0;
               $prixVrd = 0;
               $prixPlancher = 0;
               $prixElevation = 0;
               $prixCharpente = 0;
               $prixToiture = 0;
               $prixMenuiserie = 0;

               $grosOeuvre = $this->getDoctrine()
                   ->getRepository(GrosOeuvre::class)
                   ->find($idGo);

               $secondOeuvre = $this->getDoctrine()
                   ->getRepository(SecondOeuvre::class)
                   ->find($idSo);

               $idEtudeSol = $grosOeuvre->getIdEtudeSol();
               if($idEtudeSol != NULL){
                   $etudeSol = $this->getDoctrine()->getRepository(EtudeSol::class)->find($idEtudeSol);
                   $prixEtudeSol = $etudeSol->getPrix();
               }
               else{
                   $etudeSol = null;
               }

               $idPrepTerrain = $grosOeuvre->getIdPrepTerrain();
               if($idPrepTerrain != NULL){
                   $prepTerrain = $this->getDoctrine()->getRepository(PreparationEtAcces::class)->find($idPrepTerrain);
                   $prixPrepTerrain = $prepTerrain->getPrix();
               }
               else{
                   $prepTerrain = null;
               }

               $idExcavation = $grosOeuvre->getIdExcavation();
               if($idExcavation != NULL){
                   $excavation = $this->getDoctrine()->getRepository(Excavation::class)->find($idExcavation);
                   $prixExcavation = $excavation->getPrix();
               }
               else{
                   $excavation = null;
               }

               $idFondation = $grosOeuvre->getIdFondations();
               if($idFondation != NULL){
                   $fondation = $this->getDoctrine()->getRepository(Fondation::class)->find($idFondation);
                   $prixFondation = $fondation->getPrix();
               }
               else{
                   $fondation = null;
               }

               $idSoubassement = $grosOeuvre->getIdSoubassement();
               if($idSoubassement != NULL){
                   $soubassement = $this->getDoctrine()->getRepository(Soubassement::class)->find($idSoubassement);
                   $prixSoubassement = $soubassement->getPrix();
               }
               else{
                   $soubassement = null;
               }

                $idVrd = $grosOeuvre->getIdVrd();
                if($idVrd != NULL){
                    $vrd = $this->getDoctrine()->getRepository(Vrd::class)->find($idVrd);
                    $prixVrd = $vrd->getPrix();
                }
                else{
                    $vrd = null;
                }


               $idPlancher = $grosOeuvre->getIdPlancher();
               if($idPlancher != NULL){
                   $plancher = $this->getDoctrine()->getRepository(Plancher::class)->find($idPlancher);
                   $prixPlancher = $plancher->getPrix();
               }
               else{
                   $plancher = null;
               }

               $idElevation = $grosOeuvre->getIdElevation();
               if($idElevation != NULL){
                   $elevation = $this->getDoctrine()->getRepository(Elevation::class)->find($idElevation);
                   $prixElevation = $elevation->getPrix();
               }
               else{
                   $elevation = null;
               }


               $idCharpente = $grosOeuvre->getIdCharpente();
               if($idCharpente != NULL){
                   $charpente = $this->getDoctrine()->getRepository(Charpente::class)->find($idCharpente);
                   $prixCharpente = $charpente->getPrix();
               }
               else{
                   $charpente = null;
               }

               $idToiture = $grosOeuvre->getIdToiture();
               if($idToiture != NULL){
                   $toiture = $this->getDoctrine()->getRepository(Toiture::class)->find($idToiture);
                   $prixToiture = $toiture->getPrix();
               }
               else{
                   $toiture = null;
               }


               $idMenuiserie = $grosOeuvre->getIdMenuiseriesExt();
               if($idMenuiserie != NULL){
                   $menuiserie = $this->getDoctrine()->getRepository(Menuiserie::class)->find($idMenuiserie);
                   $prixMenuiserie = $menuiserie->getPrix();
               }
               else{
                   $menuiserie = null;
               }

               // Second Oeuvre
               $prixEnduit = 0;
               $prixIsolation = 0;
               $prixRevetement = 0;
               $prixCloison = 0;
               $prixEvacuation = 0;
               $prixMenuiseriesInt = 0;
               $prixEscaliers = 0;
               $prixPlomberie = 0;
               $prixElectricite = 0;
               $prixVentilation = 0;
               $prixClimatisation = 0;
               $prixDomotique = 0;

               $idEnduitFacade = $secondOeuvre->getIdEnduitFacade();
               if($idEnduitFacade != NULL){
                   $enduit = $this->getDoctrine()->getRepository(Enduit::class)->find($idEnduitFacade);
                   $prixEnduit = $enduit->getPrix();
               }
               else{
                   $enduit = null;
               }

               $idIsolation = $secondOeuvre->getIdIsolation();
               if($idIsolation != NULL){
                   $isolation = $this->getDoctrine()->getRepository(Isolation::class)->find($idIsolation);
                   $prixIsolation = $isolation->getPrix();
               }
               else{
                   $isolation = null;
               }

               $idRevetement = $secondOeuvre->getIdRevetement();
               if($idRevetement != NULL){
                   $revetement = $this->getDoctrine()->getRepository(Revetement::class)->find($idRevetement);
                   $prixRevetement = $revetement->getPrix();
               }
               else{
                   $revetement= null;
               }

               $idCloisons = $secondOeuvre->getIdCloisons();
               if($idCloisons != NULL){
                   $cloison = $this->getDoctrine()->getRepository(Cloison::class)->find($idCloisons);
                   $prixCloison = $cloison->getPrix();
               }
               else{
                   $cloison= null;
               }

               $idEvacuation = $secondOeuvre->getIdEvacuation();
               if($idEvacuation != NULL){
                   $evacuation = $this->getDoctrine()->getRepository(EvacuationFumees::class)->find($idEvacuation);
                   $prixEvacuation = $evacuation->getPrix();
               }
               else{
                   $evacuation = null;
               }

               $idMenuiseriesInt = $secondOeuvre->getIdMenuiseriesInt();
               if($idMenuiseriesInt != NULL){
                   $menuiseriesInt= $this->getDoctrine()->getRepository(MenuiseriesInt::class)->find($idMenuiseriesInt);
                   $prixMenuiseriesInt = $menuiseriesInt->getPrix();
               }
               else{
                   $menuiseriesInt = null;
               }

               $idEscaliers = $secondOeuvre->getIdEscaliers();
               if($idEscaliers != NULL){
                   $escaliers= $this->getDoctrine()->getRepository(Escaliers::class)->find($idEscaliers);
                   $prixEscaliers = $escaliers->getPrix();
               }
               else{
                   $escaliers = null;
               }

               $idPlomberie = $secondOeuvre->getIdPlomberie();
               if($idPlomberie != NULL){
                   $plomberie= $this->getDoctrine()->getRepository(Plomberie::class)->find($idPlomberie);
                   $prixPlomberie = $plomberie->getPrix();
               }
               else{
                   $plomberie = null;
               }

               $idElectricite = $secondOeuvre->getIdElectricite();
               if($idElectricite != NULL){
                   $electricite= $this->getDoctrine()->getRepository(Electricite::class)->find($idElectricite);
                   $prixElectricite = $electricite->getPrix();
               }
               else{
                   $electricite = null;
               }

               $idVentilation  = $secondOeuvre->getIdVentilation();
               if($idVentilation != NULL){
                   $ventilation= $this->getDoctrine()->getRepository(Ventilation::class)->find($idVentilation);
                   $prixVentilation = $ventilation->getPrix();
               }
               else{
                   $ventilation = null;
               }

               $idClimatisation  = $secondOeuvre->getIdClimatisation();
               if($idClimatisation != NULL){
                   $climatisation= $this->getDoctrine()->getRepository(Climatisation::class)->find($idClimatisation);
                   $prixClimatisation = $climatisation->getPrix();
               }
               else{
                   $climatisation = null;
               }

               $idDomotique = $secondOeuvre->getIdDomotique();
               if($idDomotique != NULL){
                   $domotique = $this->getDoctrine()->getRepository(Domotique::class)->find($idDomotique);
                   $prixDomotique = $domotique->getPrix();
               }
               else{
                   $domotique = null;
               }

               $prixSecondOeuvre = $prixEnduit + $prixIsolation + $prixRevetement + $prixCloison +
                   $prixEvacuation + $prixMenuiseriesInt + $prixEscaliers + $prixPlomberie +
                   $prixElectricite + $prixVentilation + $prixClimatisation + $prixDomotique;
               $prixGrosOeuvre= $prixEtudeSol+ $prixCharpente + $prixElevation + $prixExcavation +
                   $prixFondation + $prixMenuiserie + $prixPlancher + $prixPrepTerrain +
                   $prixSoubassement + $prixToiture + $prixVrd;

               $prixTotal = $prixSecondOeuvre + $prixGrosOeuvre;
               //print($prixExcavation); die();
               $tva = $prixTotal * 0.2;

           }

        }


        return $this->render('dashboard/facture.html.twig', array('nom' => $nom, 'prixEtudeSol' => $prixEtudeSol, 'prixPrepTerrain' => $prixPrepTerrain, 'prixExcavation' => $prixExcavation, 'prixFondation' => $prixFondation,
            'prixSoubassement' => $prixSoubassement, 'prixVrd' => $prixVrd, 'prixPlancher' => $prixPlancher,
            'prixElevation' => $prixElevation, 'prixCharpente' => $prixCharpente, 'prixToiture' => $prixToiture,
            'prixMenuiserie' => $prixMenuiserie, 'user' => $user, 'prixTotal' =>$prixTotal,
            'prixEnduit'=>$prixEnduit, 'prixIsolation' => $prixIsolation, 'prixRevetement' => $prixRevetement,
            'prixCloison' => $prixCloison, 'prixEvacuation' => $prixEvacuation, 'prixMenuiseriesInt' => $prixMenuiseriesInt,
            'prixEscaliers' => $prixEscaliers, 'prixPlomberie' => $prixPlomberie, 'prixElectricite' => $prixElectricite,
            'prixVentilation' => $prixVentilation, 'prixClimatisation' => $prixClimatisation, 'prixDomotique' => $prixDomotique,
            'tva' =>$tva, 'id' => $id



        ));
    }

    public function impression(Request $request, $id)
    {
        $user = $this->getUser();
        $idUser = $user->getId();
        $projets = $this->getDoctrine()
            ->getRepository(Projet::class)
            ->findProjetsByIdUser($idUser);
        $nom= NULL;
        foreach($projets as $projet)

        {

            if($projet->getId() == $id) {
                $nom = $projet->getNom();
                $idSo = $projet->getIdSecondOeuvre();
                $idGo = $projet->getIdGrosOeuvre();

                $prixEtudeSol = 0;
                $prixPrepTerrain = 0;
                $prixExcavation = 0;
                $prixFondation = 0;
                $prixSoubassement = 0;
                $prixVrd = 0;
                $prixPlancher = 0;
                $prixElevation = 0;
                $prixCharpente = 0;
                $prixToiture = 0;
                $prixMenuiserie = 0;

                $grosOeuvre = $this->getDoctrine()
                    ->getRepository(GrosOeuvre::class)
                    ->find($idGo);

                $secondOeuvre = $this->getDoctrine()
                    ->getRepository(SecondOeuvre::class)
                    ->find($idSo);

                $idEtudeSol = $grosOeuvre->getIdEtudeSol();
                if($idEtudeSol != NULL){
                    $etudeSol = $this->getDoctrine()->getRepository(EtudeSol::class)->find($idEtudeSol);
                    $prixEtudeSol = $etudeSol->getPrix();
                }
                else{
                    $etudeSol = null;
                }

                $idPrepTerrain = $grosOeuvre->getIdPrepTerrain();
                if($idPrepTerrain != NULL){
                    $prepTerrain = $this->getDoctrine()->getRepository(PreparationEtAcces::class)->find($idPrepTerrain);
                    $prixPrepTerrain = $prepTerrain->getPrix();
                }
                else{
                    $prepTerrain = null;
                }

                $idExcavation = $grosOeuvre->getIdExcavation();
                if($idExcavation != NULL){
                    $excavation = $this->getDoctrine()->getRepository(Excavation::class)->find($idExcavation);
                    $prixExcavation = $excavation->getPrix();
                }
                else{
                    $excavation = null;
                }

                $idFondation = $grosOeuvre->getIdFondations();
                if($idFondation != NULL){
                    $fondation = $this->getDoctrine()->getRepository(Fondation::class)->find($idFondation);
                    $prixFondation = $fondation->getPrix();
                }
                else{
                    $fondation = null;
                }

                $idSoubassement = $grosOeuvre->getIdSoubassement();
                if($idSoubassement != NULL){
                    $soubassement = $this->getDoctrine()->getRepository(Soubassement::class)->find($idSoubassement);
                    $prixSoubassement = $soubassement->getPrix();
                }
                else{
                    $soubassement = null;
                }

                $idVrd = $grosOeuvre->getIdVrd();
                if($idVrd != NULL){
                    $vrd = $this->getDoctrine()->getRepository(Vrd::class)->find($idVrd);
                    $prixVrd = $vrd->getPrix();
                }
                else{
                    $vrd = null;
                }


                $idPlancher = $grosOeuvre->getIdPlancher();
                if($idPlancher != NULL){
                    $plancher = $this->getDoctrine()->getRepository(Plancher::class)->find($idPlancher);
                    $prixPlancher = $plancher->getPrix();
                }
                else{
                    $plancher = null;
                }

                $idElevation = $grosOeuvre->getIdElevation();
                if($idElevation != NULL){
                    $elevation = $this->getDoctrine()->getRepository(Elevation::class)->find($idElevation);
                    $prixElevation = $elevation->getPrix();
                }
                else{
                    $elevation = null;
                }


                $idCharpente = $grosOeuvre->getIdCharpente();
                if($idCharpente != NULL){
                    $charpente = $this->getDoctrine()->getRepository(Charpente::class)->find($idCharpente);
                    $prixCharpente = $charpente->getPrix();
                }
                else{
                    $charpente = null;
                }

                $idToiture = $grosOeuvre->getIdToiture();
                if($idToiture != NULL){
                    $toiture = $this->getDoctrine()->getRepository(Toiture::class)->find($idToiture);
                    $prixToiture = $toiture->getPrix();
                }
                else{
                    $toiture = null;
                }


                $idMenuiserie = $grosOeuvre->getIdMenuiseriesExt();
                if($idMenuiserie != NULL){
                    $menuiserie = $this->getDoctrine()->getRepository(Menuiserie::class)->find($idMenuiserie);
                    $prixMenuiserie = $menuiserie->getPrix();
                }
                else{
                    $menuiserie = null;
                }

                // Second Oeuvre
                $prixEnduit = 0;
                $prixIsolation = 0;
                $prixRevetement = 0;
                $prixCloison = 0;
                $prixEvacuation = 0;
                $prixMenuiseriesInt = 0;
                $prixEscaliers = 0;
                $prixPlomberie = 0;
                $prixElectricite = 0;
                $prixVentilation = 0;
                $prixClimatisation = 0;
                $prixDomotique = 0;

                $idEnduitFacade = $secondOeuvre->getIdEnduitFacade();
                if($idEnduitFacade != NULL){
                    $enduit = $this->getDoctrine()->getRepository(Enduit::class)->find($idEnduitFacade);
                    $prixEnduit = $enduit->getPrix();
                }
                else{
                    $enduit = null;
                }

                $idIsolation = $secondOeuvre->getIdIsolation();
                if($idIsolation != NULL){
                    $isolation = $this->getDoctrine()->getRepository(Isolation::class)->find($idIsolation);
                    $prixIsolation = $isolation->getPrix();
                }
                else{
                    $isolation = null;
                }

                $idRevetement = $secondOeuvre->getIdRevetement();
                if($idRevetement != NULL){
                    $revetement = $this->getDoctrine()->getRepository(Revetement::class)->find($idRevetement);
                    $prixRevetement = $revetement->getPrix();
                }
                else{
                    $revetement= null;
                }

                $idCloisons = $secondOeuvre->getIdCloisons();
                if($idCloisons != NULL){
                    $cloison = $this->getDoctrine()->getRepository(Cloison::class)->find($idCloisons);
                    $prixCloison = $cloison->getPrix();
                }
                else{
                    $cloison= null;
                }

                $idEvacuation = $secondOeuvre->getIdEvacuation();
                if($idEvacuation != NULL){
                    $evacuation = $this->getDoctrine()->getRepository(EvacuationFumees::class)->find($idEvacuation);
                    $prixEvacuation = $evacuation->getPrix();
                }
                else{
                    $evacuation = null;
                }

                $idMenuiseriesInt = $secondOeuvre->getIdMenuiseriesInt();
                if($idMenuiseriesInt != NULL){
                    $menuiseriesInt= $this->getDoctrine()->getRepository(MenuiseriesInt::class)->find($idMenuiseriesInt);
                    $prixMenuiseriesInt = $menuiseriesInt->getPrix();
                }
                else{
                    $menuiseriesInt = null;
                }

                $idEscaliers = $secondOeuvre->getIdEscaliers();
                if($idEscaliers != NULL){
                    $escaliers= $this->getDoctrine()->getRepository(Escaliers::class)->find($idEscaliers);
                    $prixEscaliers = $escaliers->getPrix();
                }
                else{
                    $escaliers = null;
                }

                $idPlomberie = $secondOeuvre->getIdPlomberie();
                if($idPlomberie != NULL){
                    $plomberie= $this->getDoctrine()->getRepository(Plomberie::class)->find($idPlomberie);
                    $prixPlomberie = $plomberie->getPrix();
                }
                else{
                    $plomberie = null;
                }

                $idElectricite = $secondOeuvre->getIdElectricite();
                if($idElectricite != NULL){
                    $electricite= $this->getDoctrine()->getRepository(Electricite::class)->find($idElectricite);
                    $prixElectricite = $electricite->getPrix();
                }
                else{
                    $electricite = null;
                }

                $idVentilation  = $secondOeuvre->getIdVentilation();
                if($idVentilation != NULL){
                    $ventilation= $this->getDoctrine()->getRepository(Ventilation::class)->find($idVentilation);
                    $prixVentilation = $ventilation->getPrix();
                }
                else{
                    $ventilation = null;
                }

                $idClimatisation  = $secondOeuvre->getIdClimatisation();
                if($idClimatisation != NULL){
                    $climatisation= $this->getDoctrine()->getRepository(Climatisation::class)->find($idClimatisation);
                    $prixClimatisation = $climatisation->getPrix();
                }
                else{
                    $climatisation = null;
                }

                $idDomotique = $secondOeuvre->getIdDomotique();
                if($idDomotique != NULL){
                    $domotique = $this->getDoctrine()->getRepository(Domotique::class)->find($idDomotique);
                    $prixDomotique = $domotique->getPrix();
                }
                else{
                    $domotique = null;
                }

                $prixSecondOeuvre = $prixEnduit + $prixIsolation + $prixRevetement + $prixCloison +
                    $prixEvacuation + $prixMenuiseriesInt + $prixEscaliers + $prixPlomberie +
                    $prixElectricite + $prixVentilation + $prixClimatisation + $prixDomotique;
                $prixGrosOeuvre= $prixEtudeSol+ $prixCharpente + $prixElevation + $prixExcavation +
                    $prixFondation + $prixMenuiserie + $prixPlancher + $prixPrepTerrain +
                    $prixSoubassement + $prixToiture + $prixVrd;

                $prixTotal = $prixSecondOeuvre + $prixGrosOeuvre;
                //print($prixExcavation); die();
                $tva = $prixTotal * 0.2;

            }

        }


        return $this->render('dashboard/impression.html.twig', array('nom' => $nom, 'prixEtudeSol' => $prixEtudeSol, 'prixPrepTerrain' => $prixPrepTerrain, 'prixExcavation' => $prixExcavation, 'prixFondation' => $prixFondation,
            'prixSoubassement' => $prixSoubassement, 'prixVrd' => $prixVrd, 'prixPlancher' => $prixPlancher,
            'prixElevation' => $prixElevation, 'prixCharpente' => $prixCharpente, 'prixToiture' => $prixToiture,
            'prixMenuiserie' => $prixMenuiserie, 'user' => $user, 'prixTotal' =>$prixTotal,
            'prixEnduit'=>$prixEnduit, 'prixIsolation' => $prixIsolation, 'prixRevetement' => $prixRevetement,
            'prixCloison' => $prixCloison, 'prixEvacuation' => $prixEvacuation, 'prixMenuiseriesInt' => $prixMenuiseriesInt,
            'prixEscaliers' => $prixEscaliers, 'prixPlomberie' => $prixPlomberie, 'prixElectricite' => $prixElectricite,
            'prixVentilation' => $prixVentilation, 'prixClimatisation' => $prixClimatisation, 'prixDomotique' => $prixDomotique,
            'tva' =>$tva, 'id' => $id



        ));
    }

}