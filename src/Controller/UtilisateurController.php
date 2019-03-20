<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateurController extends AbstractController
{
    /**
     * @Route("/Utilisateur", name="Utilisateur")
     */
    public function index()
    {
        return $this->render('Utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }



    public function estimation(Environment $twig)
    {
      $content = $twig->render('Estimation/estimation.html.twig');
  
      return new Response($content);
    }


    public function registerUser()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $u = new Utilisateur();
        $u->setName('Anas');
        $u->setMail('test@hotmail.com');
        $u->setMotdepasse('test');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($u);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$u->getId());
    }
    
}
