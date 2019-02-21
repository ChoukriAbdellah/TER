<?php

namespace TER\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homeAction()
    {
        return $this->render('TERSiteBundle:Default:home.html.twig', array(
            'listAdverts' => array()
        ));
    }
}
