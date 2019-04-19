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

class DashboardController extends AbstractController
{
  public function index(Environment $twig)
  {

    $content = $twig->render('dashboard/index.html.twig');

    return new Response($content);
  }

}