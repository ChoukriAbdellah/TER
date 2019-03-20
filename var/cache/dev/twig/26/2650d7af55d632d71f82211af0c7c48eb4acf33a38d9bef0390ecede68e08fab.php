<?php

/* A/index.html.twig */
class __TwigTemplate_fe1c6a1a5d67a59ae3161eb5ab297a69910ae2c9cf5d62ef72c9156caddfbaa8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "A/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "A/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "A/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
  Accueil - ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
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
            <h5>Précision garantie</h5>
            <p>Texte à insérer plus tard...</p>
            <img class=\"hidden-xs hidden-sm hidden-md\" src=\"/Symfony/resources/img/arrow1.png\">
          </div>
          <div class=\"col-lg-8\">
            <img class=\"img-responsive\" src=\"/Symfony/resources/img/app-bg.png\" alt=\"\">
          </div>
          <div class=\"col-lg-2\">
            <br>
            <img class=\"hidden-xs hidden-sm hidden-md\" src=\"/Symfony/resources/img/arrow2.png\">
            <h5>Pratique et efficace</h5>
            <p>Texte à insérer plus tard...</p>
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
            <img src=\"/Symfony/resources/img/intro01.png\" alt=\"\">
            <h3>Echange</h3>
            <p>Discutez avec d'autres propriétaires si vous avez besoin de conseils.</p>
          </div>

          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro02.png\" alt=\"\">
            <h3>Date</h3>
            <p>Obtenez une fourchette d'estimation de la construction de votre maison.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro03.png\" alt=\"\">
            <h3>Précision</h3>
            <p>Nos estimations sont basées sur les données de plusieurs milliers de chantiers.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro04.png\" alt=\"\">
            <h3>Localisation</h3>
            <p>Obtenez une estimation ajustée par rapport au lieu de votre chantier.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro05.png\" alt=\"\">
            <h3>Professionnalisme</h3>
            <p>Nos estimations sont soutenues par toutes les branches des métiers de la construction immobilière.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro06.png\" alt=\"\">
            <h3>Classé n°1</h3>
            <p>En moyenne, les estimations faites sur notre site sont plus précises et moins chères qu'ailleurs.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro07.png\" alt=\"\">
            <h3>Gratuit</h3>
            <p>Vous n'avez rien à débourser pour profiter de notre service d'estimation.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro08.png\" alt=\"\">
            <h3>Instantané</h3>
            <p>Recevez directement votre résultat après avoir rempli notre formulaire.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro09.png\" alt=\"\">
            <h3>Sans engagement</h3>
            <p>L'estimation de votre chantier ne vous engage en rien.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"\" alt=\"\">
            <h3></h3>
            <p></p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro10.png\" alt=\"\">
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
            <img class=\"centered\" src=\"/Symfony/resources/img/arrow1.png\" alt=\"\">
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
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_signup");
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
                  <img src=\"/Symfony/resources/img/item-01.png\" alt=\"\">
                </div>
                <div class=\"item\">
                  <img src=\"/Symfony/resources/img/item-02.png\" alt=\"\">
                </div>
                <div class=\"item\">
                  <img src=\"/Symfony/resources/img/item-03.png\" alt=\"\">
                </div>
                <div class=\"item\">
                  <img src=\"/Symfony/resources/img/item-04.png\" alt=\"\">
                </div>
                <div class=\"item\">
                  <img src=\"/Symfony/resources/img/item-05.png\" alt=\"\">
                </div>
                <div class=\"item\">
                  <img src=\"/Symfony/resources/img/item-06.png\" alt=\"\">
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


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "A/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 170,  79 => 11,  70 => 10,  57 => 5,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title %}

  Accueil - {{ parent() }}

{% endblock %}


{% block body %}

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
            <h5>Précision garantie</h5>
            <p>Texte à insérer plus tard...</p>
            <img class=\"hidden-xs hidden-sm hidden-md\" src=\"/Symfony/resources/img/arrow1.png\">
          </div>
          <div class=\"col-lg-8\">
            <img class=\"img-responsive\" src=\"/Symfony/resources/img/app-bg.png\" alt=\"\">
          </div>
          <div class=\"col-lg-2\">
            <br>
            <img class=\"hidden-xs hidden-sm hidden-md\" src=\"/Symfony/resources/img/arrow2.png\">
            <h5>Pratique et efficace</h5>
            <p>Texte à insérer plus tard...</p>
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
            <img src=\"/Symfony/resources/img/intro01.png\" alt=\"\">
            <h3>Echange</h3>
            <p>Discutez avec d'autres propriétaires si vous avez besoin de conseils.</p>
          </div>

          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro02.png\" alt=\"\">
            <h3>Date</h3>
            <p>Obtenez une fourchette d'estimation de la construction de votre maison.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro03.png\" alt=\"\">
            <h3>Précision</h3>
            <p>Nos estimations sont basées sur les données de plusieurs milliers de chantiers.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro04.png\" alt=\"\">
            <h3>Localisation</h3>
            <p>Obtenez une estimation ajustée par rapport au lieu de votre chantier.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro05.png\" alt=\"\">
            <h3>Professionnalisme</h3>
            <p>Nos estimations sont soutenues par toutes les branches des métiers de la construction immobilière.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro06.png\" alt=\"\">
            <h3>Classé n°1</h3>
            <p>En moyenne, les estimations faites sur notre site sont plus précises et moins chères qu'ailleurs.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro07.png\" alt=\"\">
            <h3>Gratuit</h3>
            <p>Vous n'avez rien à débourser pour profiter de notre service d'estimation.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro08.png\" alt=\"\">
            <h3>Instantané</h3>
            <p>Recevez directement votre résultat après avoir rempli notre formulaire.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro09.png\" alt=\"\">
            <h3>Sans engagement</h3>
            <p>L'estimation de votre chantier ne vous engage en rien.</p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"\" alt=\"\">
            <h3></h3>
            <p></p>
          </div>
          <div class=\"col-lg-4\">
            <img src=\"/Symfony/resources/img/intro10.png\" alt=\"\">
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
            <img class=\"centered\" src=\"/Symfony/resources/img/arrow1.png\" alt=\"\">
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
            <form action=\"{{ path('site_signup') }}\">
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
                  <img src=\"/Symfony/resources/img/item-01.png\" alt=\"\">
                </div>
                <div class=\"item\">
                  <img src=\"/Symfony/resources/img/item-02.png\" alt=\"\">
                </div>
                <div class=\"item\">
                  <img src=\"/Symfony/resources/img/item-03.png\" alt=\"\">
                </div>
                <div class=\"item\">
                  <img src=\"/Symfony/resources/img/item-04.png\" alt=\"\">
                </div>
                <div class=\"item\">
                  <img src=\"/Symfony/resources/img/item-05.png\" alt=\"\">
                </div>
                <div class=\"item\">
                  <img src=\"/Symfony/resources/img/item-06.png\" alt=\"\">
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


{% endblock %}", "A/index.html.twig", "/opt/lampp/htdocs/Symfony/templates/A/index.html.twig");
    }
}
