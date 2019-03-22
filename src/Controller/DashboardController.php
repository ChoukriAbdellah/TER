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

  public function estimation(Environment $twig)
  {
    $content = $twig->render('dashboard/estimation.html.twig');

    return new Response($content);
  }
}