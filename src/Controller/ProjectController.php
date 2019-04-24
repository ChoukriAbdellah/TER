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
