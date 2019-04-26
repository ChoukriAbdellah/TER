<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_ea1ec392fa1b6dd4e71c64bb7ee7097de8795f4495d972d04dd321edca2d45c7 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("layout.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        // line 4
        echo "
  Accueil - ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
    }

    // line 9
    public function block_menu($context, array $blocks = [])
    {
        // line 10
        echo "
  <!-- Fixed navbar -->
  <div id=\"navigation\" class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand smothscroll\" href=\"#home\" class=\"smothscroll\"><b>Estimation.com</b></a>
      </div>
      <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
          <li class=\"active\"><a href=\"#home\" class=\"smothscroll\">Accueil</a></li>
          <li><a class=\"smothscroll\" href=\"#desc\">Description</a></li>
          <li><a class=\"smothscroll\" href=\"#showcase\">Photos</a></li>
          <li><a href=\"#contact\" class=\"smothscroll\">Contact</a></li>
          ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 29
            echo "          <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">Mon espace membre (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), "username", []), "html", null, true);
            echo ")</a></li>

          <li><a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Deconnexion</a></li>
          ";
        } else {
            // line 33
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            echo "\">Connexion</a></li>
            <li><a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            echo "\">Inscription</a></li>
          ";
        }
        // line 36
        echo "          
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  ";
    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        // line 46
        echo "
 <section id=\"home\" name=\"home\">
    <div id=\"headerwrap\">
      <div class=\"container\">
        <div class=\"row centered\">
          <div class=\"col-lg-12\">
            <h1>Estimez votre <b>construction</b></h1>
            <h3>Découvrez dès maintenant notre applicaton web.</h3>
            <br>
          </div>

          <div class=\"col-lg-2\">
            <h5>Facile à prendre en main</h5>
            <p>Grâce à son interface moderne et intuitive</p>
            <img class=\"hidden-xs hidden-sm hidden-md\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/arrow1.png"), "html", null, true);
        echo "\">
          </div>
          <div class=\"col-lg-8\">
            <img class=\"img-responsive\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/app-bg.png"), "html", null, true);
        echo "\" alt=\"\">
          </div>
          <div class=\"col-lg-2\">
            <br>
            <img class=\"hidden-xs hidden-sm hidden-md\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/arrow2.png"), "html", null, true);
        echo "\">
            <h5>Sauvegardez vos données</h5>
            <p>Avec une inscription rapide</p>
          </div>
        </div>
      </div>
      <!--/ .container -->
    </div>
    <!--/ #headerwrap -->
  </section>


  <section id=\"desc\" name=\"desc\">
    <!-- INTRO WRAP -->
    <div id=\"intro\">
      <div class=\"container\">
        <div class=\"row centered\">
          <h1>En résumé</h1>
          <br>
          <br>
          <div class=\"col-lg-4\">
            <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/intro01.png"), "html", null, true);
        echo "\" alt=\"\">
            <h3>Echange</h3>
            <p>Discutez avec d'autres propriétaires si vous avez besoin de conseils.</p>
          </div>

          <div class=\"col-lg-4\">
            <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/intro02.png"), "html", null, true);
        echo "\" alt=\"\">
            <h3>Date</h3>
            <p>Obtenez une fourchette d'estimation de la construction de votre maison.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/intro03.png"), "html", null, true);
        echo "\" alt=\"\">
            <h3>Précision</h3>
            <p>Nos estimations sont basées sur les données de plusieurs milliers de chantiers.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/intro04.png"), "html", null, true);
        echo "\" alt=\"\">
            <h3>Localisation</h3>
            <p>Obtenez une estimation ajustée par rapport au lieu de votre chantier.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/intro05.png"), "html", null, true);
        echo "\" alt=\"\">
            <h3>Professionnalisme</h3>
            <p>Nos estimations sont soutenues par toutes les branches des métiers de la construction immobilière.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/intro06.png"), "html", null, true);
        echo "\" alt=\"\">
            <h3>Classé n°1</h3>
            <p>En moyenne, les estimations faites sur notre site sont plus précises et moins chères qu'ailleurs.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/intro07.png"), "html", null, true);
        echo "\" alt=\"\">
            <h3>Gratuit</h3>
            <p>Vous n'avez rien à débourser pour profiter de notre service d'estimation.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/intro08.png"), "html", null, true);
        echo "\" alt=\"\">
            <h3>Instantané</h3>
            <p>Recevez directement votre résultat après avoir rempli notre formulaire.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/intro09.png"), "html", null, true);
        echo "\" alt=\"\">
            <h3>Sans engagement</h3>
            <p>L'estimation de votre chantier ne vous engage en rien.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"\" alt=\"\">
            <h3></h3>
            <p></p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/intro10.png"), "html", null, true);
        echo "\" alt=\"\">
            <h3>Portable</h3>
            <p>Gardez un oeil sur votre projet où que vous soyez grâce à notre application web adaptée pour tout appareil.</p>
          </div>
        </div>
        <br>
        <hr>
      </div>
      <!--/ .container -->
    </div>
    <!--/ #introwrap -->

    <!-- FEATURES WRAP -->
    <div id=\"features\">
      <div class=\"container\">
        <div class=\"row\">
          <h1 class=\"centered\">Inscrivez-vous dès maintenant !</h1>
          <br>
          <br>
          <div class=\"col-lg-6 centered\">
            <img class=\"centered\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/arrow1.png"), "html", null, true);
        echo "\" alt=\"\">
          </div>

          <div class=\"col-lg-6\">
            <br>
            <!-- ACCORDION -->
            <div class=\"accordion ac\" id=\"accordion2\">
              <div class=\"accordion-group\">
                <div class=\"accordion-heading\">
                  <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseOne\">
                    Simple et immédiat
  \t\t                        </a>
                </div>
                <!-- /accordion-heading -->
                <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                  <div class=\"accordion-inner\">
                    <p>Notre formulaire d'inscription a été pensé pour ne retenir que les informations les plus importantes vous concernant.</p>
                  </div>
                  <!-- /accordion-inner -->
                </div>
                <!-- /collapse -->
              </div>
              <!-- /accordion-group -->
              <br>
            
              <div class=\"accordion-group\">
                <div class=\"accordion-heading\">
                  <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseTwo\">Informations générales</a>
                </div>
                <div id=\"collapseTwo\" class=\"accordion-body collapse\">
                  <div class=\"accordion-inner\">
                    <p>
                      Les informations recueillies font l’objet d’un traitement informatique destinées à Estimation.com, ses partenaires et leurs sous-traitants afin de nous permettre de répondre à vos demandes, de gérer votre compte utilisateur et de vous proposer les meilleurs services d'estimation.
                      <br>Conformément à la loi du 6 janvier 1978 dite « Informatique et Libertés » modifiée, vous bénéficiez d'un droit d'accès et de rectification aux informations vous concernant que vous pouvez exercer conformément aux modalités décrites dans notre politique de confidentialité, dont nous vous invitons à prendre connaissance. Vous pouvez également, pour des motifs légitimes, vous opposer au traitement des données vous concernant.</p>
                  </div>
                  <!-- /accordion-inner -->
                </div>
                <!-- /collapse -->
              </div>
              <!-- /accordion-group -->
              <br>


              <br>
            </div>
            <!-- Accordion -->
            <form action=\"";
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">
\t\t\t\t      <input type=\"submit\" class=\"fadeIn fourth zero-raduis pc\" value=\"Je m'inscris\">
\t\t\t      </form>
              
          </div>

          
        </div>
              
        
      </div>
      <!--/ .container -->

    </div>
    <!--/ #features -->

  </section>

  <section id=\"showcase\" name=\"showcase\">
    <div id=\"showcase\">
      <div class=\"container\">
        <div class=\"row\">
          <h1 class=\"centered\">Nos clients satisfaits</h1>
          <br>
          <div class=\"col-lg-8 col-lg-offset-2\">
            <div id=\"carousel-example-generic\" class=\"carousel slide\">
              <!-- Indicators -->
              <ol class=\"carousel-indicators\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"4\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"5\"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class=\"carousel-inner\">
                <div class=\"item active\">
                  <img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/item-01.png "), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"item\">
                  <img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/item-02.png "), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"item\">
                  <img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/item-03.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"item\">
                  <img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/item-04.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"item\">
                  <img src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/item-05.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"item\">
                  <img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/item-06.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
      </div>
      <!-- /container -->
    </div>
  </section>

    <section id=\"contact\" name=\"contact\">
    <div id=\"footerwrap\">
      <div class=\"container\">
        <div class=\"col-lg-5\">
          <h3>Adresse</h3>
          <p>
            Faculté des Sciences de Montpellier,<br/> Place E. Bataillon,<br/> 34095<br/>
            <br/> Montpellier, France
          </p>
        </div>

        <div class=\"col-lg-7\">
          <h3>Envoyez-nous un message</h3>

          <br>

\t\t\t\t\t\t\t\t\t";
        // line 289
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                              <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom", "required minlength" => "4"]]);
        echo "
                              </div>
                              <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Votre adresse e-mail"]]);
        echo "
                              </div>
                              <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 297
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sujet", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Sujet", "required minlength" => "6"]]);
        echo "
                              </div>
                              <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", []), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Ecrivez votre message"]]);
        echo "
                              </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   ";
        // line 302
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
         <!--  <form role=\"form\" action=\"\" method=\"POST\">

            <div class=\"form-group\">
              <label for=\"contact-name\">Votre nom</label><br>
              <input type=\"name\" name=\"name\" class=\"form-control\" id=\"contact-name\" placeholder=\"Votre nom\" data-rule=\"minlen:4\" data-msg=\"Veuillez entrer au moins 4 caractères\">
              <div class=\"validate\"></div>
            </div>
            <div class=\"form-group\">
              <label for=\"contact-email\">Votre adresse e-mail</label>
              <input type=\"email\" name=\"email\" class=\"form-control\" id=\"contact-email\" placeholder=\"Votre adresse e-mail\" data-rule=\"email\" data-msg=\"L'adresse e-mail n'est pas valide\">
              <div class=\"validate\"></div>
            </div>
            <div class=\"form-group\">
              <label for=\"contact-subject\">Sujet</label> <br/>
              <input type=\"text\" name=\"subject\" class=\"form-control\" id=\"contact-subject\" placeholder=\"Sujet\" data-rule=\"minlen:4\" data-msg=\"Veuillez entrer au moins 8 caractères\">
              <div class=\"validate\"></div>
            </div>

            <div class=\"form-group\">
              <label for=\"contact-message\">Votre Message</label>
              <textarea class=\"form-control\" name=\"message\" id=\"contact-message\" placeholder=\"Ecrivez votre message\" rows=\"5\" data-rule=\"required\" data-msg=\"Ecrivez un message\"></textarea>
              <div class=\"validate\"></div>
            </div>

            <div class=\"form-send\">
              <button type=\"submit\" class=\"btn btn-large\">Envoyer</button>
              </div>

            

          </form>  -->

        </div>
      </div>
    </div>
  </section>


";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 302,  452 => 300,  446 => 297,  440 => 294,  434 => 291,  429 => 289,  396 => 259,  390 => 256,  384 => 253,  378 => 250,  372 => 247,  366 => 244,  324 => 205,  275 => 159,  252 => 139,  239 => 129,  231 => 124,  223 => 119,  215 => 114,  207 => 109,  199 => 104,  191 => 99,  183 => 94,  174 => 88,  150 => 67,  143 => 63,  137 => 60,  121 => 46,  118 => 45,  107 => 36,  102 => 34,  97 => 33,  92 => 31,  84 => 29,  82 => 28,  62 => 10,  59 => 9,  52 => 5,  49 => 4,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/home/index.html.twig");
    }
}
