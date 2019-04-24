<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use App\Entity\Projet;

use App\Entity\SecondOeuvre;

use App\Form\UserType;

use App\Services\Mailer;

use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminController extends AbstractController
{   


  public function listeProjetAdmin( Request $request)
  {
 
            $projets = $this->getDoctrine()
            ->getRepository(Projet::class)
            ->findAll();
            $nbProjets=$this->getDoctrine()
            ->getRepository(Projet::class)
            ->sumProjets();

            $data = [];
           
          
          for ($i = 0; $i < $nbProjets; $i++) {
           $user = $this->getDoctrine()
           ->getRepository(User::class)
           ->find($projets[$i]->getIdProprio());
           $var=array($projets[$i]->getId(),$projets[$i]->getNom(), $user->getUsername());

            array_push($data,$var);
        }
          $newJsonString = json_encode($data);
          file_put_contents('resources/assets/js/listeProjetsAdmin.json', $newJsonString);
     
            return $this->render(
              'admin/listeProjetsAdmin.html.twig');
			
  }


    public function listeMembreAdmin( Request $request, Mailer $mailer, UserPasswordEncoderInterface $passwordEncoder)
  {
 
            $users = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();
             $nbUsers=$this->getDoctrine()
             ->getRepository(User::class)
            ->sumUsers();

            $data = [];

            for ($i = 0; $i <$nbUsers ; $i++) {
            
              $var=array($users[$i]->getUserName(),$users[$i]->getEmail());
               array_push($data,$var);
           }
             $newJsonString = json_encode($data);
             file_put_contents('resources/assets/js/listeMembresAdmin.json', $newJsonString);

            
             // Création d'un membre ------

             $user = new User();

            $form = $this->createForm(UserType::class, $user, [
              'validation_groups' => array('User', 'registration'),
           ]);        
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {  
               
              // Encode le mot de passe
              $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
              $user->setPassword($password);
  
              // Enregistre le membre en base
              $em = $this->getDoctrine()->getManager();
              // Le rôle de ce nouveau membre est COMMERCIAL, car il a été crée par l'admin
              $user->setRoles(array('ROLE_COMMERCIAL')); 
              $em->persist($user);
              $em->flush();

              $bodyMail = $mailer->createBodyMail('admin/create-member-mail.html.twig', [
                'user' => $user
            ]);
            $mailer->sendMessage('ter.fds.2019@gmail.com', $user->getEmail(), 'Votre compte sur Estimation.com', $bodyMail);
            $request->getSession()->getFlashBag()->add('success', "Vous avez crée ce membre avec succès ! Ses identifiants lui ont été transmis par mail.");

                return $this->redirectToRoute('listeMembreAdmin');
            }
           
          

    
            return $this->render(
              'admin/listeMembresAdmin.html.twig', ['nbUsers' => $nbUsers, 'form' => $form->createView()]);
			
  }



}
