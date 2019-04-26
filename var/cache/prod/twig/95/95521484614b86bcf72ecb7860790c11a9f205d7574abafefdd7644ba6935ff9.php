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

/* resetting/request.html.twig */
class __TwigTemplate_9cefe9bd9af19167934e32a2fae8a1fb2e466ff299b86e4a1d4b4b7c84a049bf extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "resetting/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        // line 5
        echo "
  Mot de passe oublié - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
    }

    // line 10
    public function block_menu($context, array $blocks = [])
    {
        // line 11
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
        <a class=\"navbar-brand smothscroll\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><b>Estimation.com</b></a>
      </div>
      <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
          <li class=\"active\"><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#desc\">Description</a></li>
          <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#showcase\">Photos</a></li>
          <li><a href=\"#contact\" class=\"smothscroll\">Contact</a></li>
          <li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\">Connexion</a></li>
          <li><a href=\"#inscription\" class=\"smothscroll\">Inscription</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

";
    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        // line 40
        echo "
  <section id=\"inscription\" name=\"inscription\">
    <!-- INTRO WRAP -->
        <div class=\"row centered\">
          <h1>Mot de passe oublié</h1>
          <br>
          <br>
          <div class=\"wrapper fadeInDown zero-raduis\">
            <div id=\"formContent\">
              <!-- Tabs Titles -->
    
              <!-- Icon -->
              <div class=\"fadeIn first\">
                <!-- <img src=\"http://danielzawadzki.com/codepen/01/icon.svg\" id=\"icon\" alt=\"User Icon\" /> -->
                <h5 class=\"my-5\">Renseignez votre adresse mail pour récupérer votre mot de passe </h5>
              </div>
    
              <!-- Login Form -->


              <!-- <form>
\t\t\t\t<input type=\"text\" id=\"name\" class=\"fadeIn second zero-raduis\" name=\"name\" placeholder=\"Nom\">
\t\t\t\t
                <input type=\"email\" id=\"email\" class=\"fadeIn second zero-raduis\" name=\"email\" placeholder=\"Adresse e-mail\">
                <input type=\"text\" id=\"password\" class=\"fadeIn third zero-raduis\" name=\"login\" placeholder=\"Mot de passe\">
\t\t\t\t
                  <div id=\"formFooter\">
                </div>
                <input type=\"submit\" class=\"fadeIn fourth zero-raduis\" value=\"S'inscrire\">

                              </form>
              <h2>Déjà inscrit ?</h2>
              <form action=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\">
\t\t\t\t        <input type=\"submit\" class=\"fadeIn fourth zero-raduis pc\" value=\"Connectez-vous\">
\t\t\t        </form>
              </form> -->

              ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", []), 'row', ["attr" => ["class" => "fadeIn second zero-raduis", "placeholder" => "Adresse e-mail"]]);
        echo "  
            
                <input type=\"submit\" class=\"fadeIn fourth zero-raduis pc\" value=\"S'inscrire\">
                 ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

              
    
            </div>
      </div>
        </div>
        <br>
        <hr>




";
    }

    public function getTemplateName()
    {
        return "resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 81,  156 => 78,  152 => 77,  144 => 72,  110 => 40,  107 => 39,  94 => 29,  89 => 27,  85 => 26,  81 => 25,  74 => 21,  62 => 11,  59 => 10,  52 => 6,  49 => 5,  46 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "resetting/request.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/resetting/request.html.twig");
    }
}
