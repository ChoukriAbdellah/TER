<?php
// src/Controller/AdvertController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class MembreController
{
  public function login(Environment $twig)
  {
    $content = $twig->render('Membre/login.html.twig');

    return new Response($content);
  }

  public function signup(Environment $twig)
  {
    $content = $twig->render('Membre/signup.html.twig');

    return new Response($content);
  }
}