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

/* registration/register.html.twig */
class __TwigTemplate_657eb0e8d3d890ca55c5bc5e42cd7b4089779e1ae8ccbb8b176c5fa69dfb59e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "
  Inscription - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

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
        <a class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#home\"><b>Estimation.com</b></a>
      </div>
      <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
          <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#home\">Accueil</a></li>
          <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#desc\">Description</a></li>
          <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#showcase\">Photos</a></li>
          <li><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "#contact\">Contact</a></li>
          ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 30
            echo "          <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">Mon profil (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", []), "username", []), "html", null, true);
            echo ")</a></li>

          <li><a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Deconnexion</a></li>
          ";
        } else {
            // line 34
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            echo "\">Connexion</a></li>
            <li><a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            echo "\">Inscription</a></li>
          ";
        }
        // line 37
        echo "          
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "
  <section id=\"inscription\" name=\"inscription\">
    <!-- INTRO WRAP -->
        <div class=\"row centered\">
          <h1>Inscription</h1>
          <br>
          <br>
          <div class=\"wrapper fadeInDown zero-raduis\">
            <div id=\"formContent\">
              <!-- Tabs Titles -->
    
              <!-- Icon -->
              <div class=\"fadeIn first\">
                <!-- <img src=\"http://danielzawadzki.com/codepen/01/icon.svg\" id=\"icon\" alt=\"User Icon\" /> -->
                <h2 class=\"my-5\">Inscrivez-vous</h2>
              </div>
    
              <!-- Register Form -->

              ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_start');
        echo "
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "username", []), 'row', ["attr" => ["class" => "fadeIn second zero-raduis", "placeholder" => "Identifiant"]]);
        echo "  
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "email", []), 'row', ["attr" => ["class" => "fadeIn second zero-raduis", "placeholder" => "Adresse e-mail"]]);
        echo "  
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "plainPassword", []), "first", []), 'row', ["attr" => ["class" => "fadeIn third zero-raduis", "placeholder" => "Mot de passe"]]);
        echo "  
                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "plainPassword", []), "second", []), 'row', ["attr" => ["class" => "fadeIn third zero-raduis", "placeholder" => "Confirmer le mot de passe"]]);
        echo "  
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "_token", []), 'row');
        echo "
            
                <input type=\"submit\" class=\"fadeIn fourth zero-raduis pc\" value=\"S'inscrire\">
                 ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_end');
        echo "

                               </form>
              <h2>Déjà inscrit ?</h2>
              <form action=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\">
\t\t\t\t        <input type=\"submit\" class=\"fadeIn fourth zero-raduis pc\" value=\"Connectez-vous\">
\t\t\t        </form>

              
    
            </div>
      </div>
        </div>
        <br>
        <hr>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 78,  225 => 74,  219 => 71,  215 => 70,  211 => 69,  207 => 68,  203 => 67,  199 => 66,  178 => 47,  169 => 46,  152 => 37,  147 => 35,  142 => 34,  137 => 32,  129 => 30,  127 => 29,  123 => 28,  119 => 27,  115 => 26,  111 => 25,  104 => 21,  92 => 11,  83 => 10,  70 => 6,  67 => 5,  58 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}


{% block title %}

  Inscription - {{ parent() }}

{% endblock %}

{% block menu %}

  <!-- Fixed navbar -->
  <div id=\"navigation\" class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"{{ path('index') }}#home\"><b>Estimation.com</b></a>
      </div>
      <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
          <li><a href=\"{{ path('index') }}#home\">Accueil</a></li>
          <li><a href=\"{{ path('index') }}#desc\">Description</a></li>
          <li><a href=\"{{ path('index') }}#showcase\">Photos</a></li>
          <li><a href=\"{{ path('index') }}#contact\">Contact</a></li>
          {% if is_granted('IS_AUTHENTICATED_FULLY') %}
          <li><a href=\"{{ path('dashboard') }}\">Mon profil ({{ app.user.username }})</a></li>

          <li><a href=\"{{ path('logout') }}\">Deconnexion</a></li>
          {% else %}
            <li><a href=\"{{ path('connexion') }}\">Connexion</a></li>
            <li><a href=\"{{ path('inscription') }}\">Inscription</a></li>
          {% endif %}
          
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  {% endblock %}

{% block body %}

  <section id=\"inscription\" name=\"inscription\">
    <!-- INTRO WRAP -->
        <div class=\"row centered\">
          <h1>Inscription</h1>
          <br>
          <br>
          <div class=\"wrapper fadeInDown zero-raduis\">
            <div id=\"formContent\">
              <!-- Tabs Titles -->
    
              <!-- Icon -->
              <div class=\"fadeIn first\">
                <!-- <img src=\"http://danielzawadzki.com/codepen/01/icon.svg\" id=\"icon\" alt=\"User Icon\" /> -->
                <h2 class=\"my-5\">Inscrivez-vous</h2>
              </div>
    
              <!-- Register Form -->

              {{ form_start(form) }}
                {{ form_row(form.username, {'attr': {'class': 'fadeIn second zero-raduis', 'placeholder' : 'Identifiant'}} ) }}  
                {{ form_row(form.email, {'attr': {'class': 'fadeIn second zero-raduis', 'placeholder' : 'Adresse e-mail'}} ) }}  
                {{ form_row(form.plainPassword.first, {'attr': {'class': 'fadeIn third zero-raduis', 'placeholder' : 'Mot de passe'}} ) }}  
                {{ form_row(form.plainPassword.second, {'attr': {'class': 'fadeIn third zero-raduis', 'placeholder' : 'Confirmer le mot de passe'}} ) }}  
                {{ form_row(form._token) }}
            
                <input type=\"submit\" class=\"fadeIn fourth zero-raduis pc\" value=\"S'inscrire\">
                 {{ form_end(form) }}

                               </form>
              <h2>Déjà inscrit ?</h2>
              <form action=\"{{ path('connexion') }}\">
\t\t\t\t        <input type=\"submit\" class=\"fadeIn fourth zero-raduis pc\" value=\"Connectez-vous\">
\t\t\t        </form>

              
    
            </div>
      </div>
        </div>
        <br>
        <hr>




{% endblock %}


", "registration/register.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/registration/register.html.twig");
    }
}
