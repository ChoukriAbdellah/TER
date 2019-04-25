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

/* security/login.html.twig */
class __TwigTemplate_043dd3e6a49b346a6b9eafae8e2785ce10bf73193b72b06c025d5bd823620490 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        // line 4
        echo "
  Connexion - ";
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
        <a class=\"navbar-brand\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#home\"><b>Estimation.com</b></a>
      </div>
      <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
          <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#home\">Accueil</a></li>
          <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#desc\">Description</a></li>
          <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#showcase\">Photos</a></li>
          <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#contact\">Contact</a></li>
          ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 29
            echo "          <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">Mon profil (";
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
";
        // line 47
        if (($context["error"] ?? null)) {
            // line 48
            echo "  <section id=\"erreur_connexion\" name =\"erreur_connexion\"
    <div class=\"row centered\">";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", []), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", []), "security"), "html", null, true);
            echo "</div>
    </section>
";
        }
        // line 52
        echo "
   <section id=\"connexion\" name=\"connexion\">
    <!-- INTRO WRAP -->
        <div class=\"row centered\">
          <h1>Connexion</h1>
          <br>
          <br>
          <div class=\"wrapper fadeInDown zero-raduis\">
            <div id=\"formContent\">
              <!-- Tabs Titles -->
    
              <!-- Icon -->
              <div class=\"fadeIn first\">
                <!-- <img src=\"http://danielzawadzki.com/codepen/01/icon.svg\" id=\"icon\" alt=\"User Icon\" /> -->
                <h2 class=\"my-5\">Authentifiez-vous</h2>
              </div>
    
              <!-- Login Form -->
              <form action=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\" method=\"post\">
              <input type=\"text\" class=\"fadeIn second zero-raduis\" id=\"username\" name=\"_username\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" placeholder=\"Adresse e-mail ou login\" />
              <input type=\"password\" class=\"fadeIn third zero-raduis\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\" />
                              <div id=\"formFooter\">
              </div>

              <input type=\"hidden\" name=\"_csrf_token\"
                  value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                  <input type=\"hidden\" name=\"_target_path\" value=\"/dashboard\" />

              <input type=\"submit\" class=\"fadeIn fourth zero-raduis\" value=\"Se connecter\">
              
              </form>
              <h2>Vous n'avez pas encore de compte ?</h2>
              <form action=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">
\t\t\t\t        <input type=\"submit\" class=\"fadeIn fourth zero-raduis pc\" value=\"Inscrivez-vous\">
\t\t\t        </form>

              <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("request_resetting");
        echo "\"> <h2>Mot de passe oublié ?</h2> </a>
              <br>
              <br>
              
              ";
        // line 98
        echo "
              
          </form>
              
    
            </div>
      </div>
        </div>
        <br>
        <hr>

        


";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 98,  201 => 89,  194 => 85,  183 => 77,  174 => 71,  170 => 70,  150 => 52,  144 => 49,  141 => 48,  139 => 47,  136 => 46,  133 => 45,  122 => 36,  117 => 34,  112 => 33,  107 => 31,  99 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  74 => 20,  62 => 10,  59 => 9,  52 => 5,  49 => 4,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/security/login.html.twig");
    }
}
