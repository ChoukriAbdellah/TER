<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class DashboardController
{
  public function index(Environment $twig)
  {
    $content = $twig->render('dashboard/index.html.twig');

    return new Response($content);
  }

  public function newProject(Environment $twig)
  {
    $content = $twig->render('dashboard/new-project.html.twig');

    return new Response($content);
  }

  public function etudeSol(Environment $twig)
  {
    $content = $twig->render('dashboard/etude-sol.html.twig');

    return new Response($content);
  }


}