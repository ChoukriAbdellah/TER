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


    	$form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

  		    $oldPassword = $form->get("oldPassword")->getData();

            
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
    		'form' => $form->createView(),
    	));
  }
}