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
  
<<<<<<< HEAD
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
=======
                  $idGo = $go->getId();
                  $idSo = $so->getId();
>>>>>>> 13abe4321870dd35e39569426ee5c5a921d5223a
  
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

}