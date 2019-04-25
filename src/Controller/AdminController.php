<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Projet;
use App\Entity\SecondOeuvre;
use App\Entity\RemoveUser;
use App\Form\RemoveUserType;
use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminController extends AbstractController
{   
  public function projetAdmin( Request $request)
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
           $var=array($projets[$i]->getId(),$projets[$i]->getNom(), $user->getUserName());

            array_push($data,$var);}

		      	$newJsonString = json_encode($data);
          file_put_contents('resources/assets/js/listeProjetsAdmin.json', $newJsonString);
				
         
     
            return $this->render(
              'project/listeProjetsAdmin.html.twig',array('data' =>$data) );
			
  }

  


    public function membreAdmin( Request $request)
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
      
          $em = $this->getDoctrine()->getManager();
          $user = $this->getUser();
          $form = $this->createForm(RemoveUserType::class,$user);       
          $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {  
              $removeUserName = $form->get("userName")->getData();
              $em = $this->getDoctrine()
              ->getRepository(User::class);
              //$em->remove($em->loadUserByUsername($removeUserName));
              $entityManager->remove($em->loadUserByUsername($removeUserName));
              $entityManager->flush();
            
        }
            return $this->render(
              'project/listeMembresAdmin.html.twig',array('form' => $form->createView(), 'data'=>$data));
			
  }



}
