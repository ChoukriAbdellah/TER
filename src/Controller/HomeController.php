<?php
// src/Controller/AdvertController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController
{
  public function index(Environment $twig)
  {
    $content = $twig->render('home/index.html.twig');

    return new Response($content);
  }
}