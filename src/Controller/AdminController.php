<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Projet;
use App\Entity\SecondOeuvre;

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
           $var=array($projets[$i]->getId(),$projets[$i]->getNom(), $user->getUserName());

            array_push($data,$var);
        }
          $newJsonString = json_encode($data);
          file_put_contents('resources/assets/js/listeProjetsAdmin.json', $newJsonString);
     
            return $this->render(
              'project/listeProjetsAdmin.html.twig');
			
  }


    public function listeMembreAdmin( Request $request)
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
    
            return $this->render(
              'project/listeMembresAdmin.html.twig');
			
  }



}
