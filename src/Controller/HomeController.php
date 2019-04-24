<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;

use App\Services\Mailer;

use App\Form\ContactType;

class HomeController extends AbstractController
{
  public function index(Request $request, Mailer $mailer)

  {

   $form = $this->createForm(ContactType::class);        
   $form->handleRequest($request);
   if ($form->isSubmitted() && $form->isValid()) {

    $nom = $form->get("nom")->getData();
    $email = $form->get("email")->getData();
    $sujet = $form->get("sujet")->getData();
    $message = $form->get("message")->getData();

    $bodyMail = $mailer->createBodyMail('home/contact-mail.html.twig', [
      'nom' => $nom, 'email' => $email, 'sujet' => $sujet, 'message' => $message, 
    ]);
    $mailer->sendMessage('ter.fds.2019@gmail.com', 'ter.fds.2019@gmail.com', 'Nouveau message reçu', $bodyMail);
    $request->getSession()->getFlashBag()->add('success', "Votre message a bien été envoyé ! Nous vous répondrons par mail sous peu.");
    return $this->redirectToRoute("index");
  }

    return $this->render('home/index.html.twig', array(
      'form' => $form->createView()));
  }

}