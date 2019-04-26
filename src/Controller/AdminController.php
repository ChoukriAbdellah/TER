<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use App\Entity\Projet;
use App\Entity\Prix;

use App\Entity\SecondOeuvre;

use App\Form\UserType;
use App\Form\prixType;

use App\Form\RemoveUserType;
use App\Form\RemoveProjetType;

use App\Services\Mailer;

use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;

 /**
  * Require ROLE_ADMIN for *every* controller method in this class.
  *
  * @IsGranted("ROLE_ADMIN")
  */

class AdminController extends AbstractController
{   

  public function projetAdmin(Request $request)
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
           if($user!=null){
           $var=array($projets[$i]->getId(),$projets[$i]->getNom(), $user->getUsername());

            array_push($data,$var);}
           }

            $newJsonString = json_encode($data);
            
          file_put_contents('resources/assets/js/listeProjetsAdmin.json', $newJsonString);

				  $em = $this->getDoctrine()->getManager();
          //$projet = $this->getProjet();
          $form = $this->createForm(RemoveProjetType::class);       
          $form->handleRequest($request);
          
            if ($form->isSubmitted() && $form->isValid()) {  
              $removeProjetName = $form->get("removeName")->getData();
              //$idUser=$em->loadUserByUsername($removeUserName)->getId();
              $projetRemove = $this->getDoctrine()
              ->getRepository(Projet::class)
               ->findProjetsByName($removeProjetName);
  
              if ($projetRemove != NULL){
              $em->remove($projetRemove); 
              $em->flush(); 

              $request->getSession()->getFlashBag()->add('success', "Vous avez supprimé ce projet avec succès !");
              }
              else{
                $request->getSession()->getFlashBag()->add('danger', "Ce projet n'existe pas.");
              }
              return $this->redirectToRoute('listeAdmin');

            }
         //fin
     
            return $this->render(
              'admin/listeProjetsAdmin.html.twig',array('form' => $form->createView(),'data' =>$data, 'nbProjet'=>$nbProjets) );	
  }

  public function createMember( Request $request, Mailer $mailer, UserPasswordEncoderInterface $passwordEncoder)
  {
            
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

                return $this->redirectToRoute('createMember');
            }

            return $this->render(
              'admin/create-member.html.twig',array('form' => $form->createView()));

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
          
          $newJsonString = json_encode($data);
          file_put_contents('resources/assets/js/listeMembresAdmin.json', $newJsonString);
      
          $em = $this->getDoctrine()->getManager();
          $form = $this->createForm(RemoveUserType::class);       
          $form->handleRequest($request);
          
            if ($form->isSubmitted() && $form->isValid()) {  
              
              $removeUserName = $form->get("removeName")->getData();
              //$idUser=$em->loadUserByUsername($removeUserName)->getId();
              $userRemove = $this->getDoctrine()
              ->getRepository(User::class)
               ->loadUserByUsername($removeUserName);
  
              if ($userRemove != NULL){
              $em->remove($userRemove); 
              $em->flush(); 

              $request->getSession()->getFlashBag()->add('success', "Vous avez supprimé ce membre avec succès !");
              }
              else{
                $request->getSession()->getFlashBag()->add('danger', "Cet identifiant ne correspond à aucun membre.");
              }
              return $this->redirectToRoute('listeMembreAdmin');

            }
            return $this->render(
              'admin/listeMembresAdmin.html.twig',array('form' => $form->createView(), 'data'=>$data, 'nbUsers' => $nbUsers));
			
  }

  public function tablePrix( Request $request){

    $liste=$this->getDoctrine()
    ->getRepository(Prix::class)
    ->findAll();
     return $this->render('admin/listePrix.html.twig',array('liste'=> $liste ));

  }

public function modifPrix( $id,Request $request){
    
  $old= $this->getDoctrine()
  ->getRepository(Prix::class)
  ->find($id);
  
    
    $elem = new Prix();
    // instancie le formulaire avec les contraintes par défaut
    $form = $this->createForm(prixType::class, $elem);        
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {  
        $em = $this->getDoctrine()->getManager();

          $nom= $elem->getNom();
          $montant=$elem->getMontant();
          
          //$id = $request->attributes->get('id');
          $old= $this->getDoctrine()
          ->getRepository(Prix::class)
          ->find($id);

          $old->setNom($nom);
          $old->setMontant($montant);
          $em->persist($old);
          $em->flush();

    
       return $this->redirectToRoute('listePrix');

  }
  return $this->render('admin/modifPrix.html.twig',array('form' => $form->createView(), 'old'=> $old));
}
public function suppPrix( $id,Request $request){
  $em = $this->getDoctrine()->getManager();
  
  $old= $this->getDoctrine()
  ->getRepository(Prix::class)
  ->find($id);
 


  $em->remove($old);
  $em->flush();

  return $this->redirectToRoute('listePrix');
}
public function ajoutPrix( Request $request){
    $elem = new Prix();
    // instancie le formulaire avec les contraintes par défaut
    $form = $this->createForm(prixType::class, $elem);        
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {  
        $em = $this->getDoctrine()->getManager();

          
         
          $em->persist($elem);
          $em->flush();

    
       return $this->redirectToRoute('listePrix');

  }
  return $this->render('admin/ajoutPrix.html.twig',array('form' => $form->createView()));
}
}