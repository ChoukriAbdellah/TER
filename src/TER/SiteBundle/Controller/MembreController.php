<?php

namespace TER\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MembreController extends Controller

{

    public function signupAction(Request $request){

        $session = $request->getSession();

        // Bien sûr, cette méthode devra réellement ajouter l'annonce
    
        // Mais faisons comme si c'était le cas
    
        $session->getFlashBag()->add('info', 'Inscription enregistrée');
    
        // Le « flashBag » est ce qui contient les messages flash dans la session
    
        // Il peut bien sûr contenir plusieurs messages :
    
        // $session->getFlashBag()->add('info', 'Oui oui, elle est bien enregistrée !');
    
        // Puis on redirige vers la page de visualisation de cette annonce
    
        //return $this->redirectToRoute('ter_site_homepage', array('id' => 5));
        return $this->render('TERSiteBundle:Membre:signup.html.twig');
    }

    public function loginAction(){
        return $this->render('TERSiteBundle:Membre:login.html.twig');
    }

}