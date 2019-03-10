<?php
// src/Controller/AdvertController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class AController
{
  public function index(Environment $twig)
  {
    $content = $twig->render('A/index.html.twig');

    return new Response($content);
  }
}