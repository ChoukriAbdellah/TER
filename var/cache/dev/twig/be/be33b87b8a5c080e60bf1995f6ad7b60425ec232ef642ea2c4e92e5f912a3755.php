<?php

/* utilisateur/login.html.twig */
class __TwigTemplate_16fa14b135bd169bdfa2510bedd43cfaafa1dd1d5875480855741f21985b34d1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "utilisateur/login.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/login.html.twig"));

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
  Connexion - ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
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
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_login");
        echo "\" method=\"post\">
              <label for=\"username\">Username:</label>
              <input type=\"text\" class=\"fadeIn second zero-raduis\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" />
              <label for=\"password\">Password:</label>
              <input type=\"password\" class=\"fadeIn third zero-raduis\" id=\"password\" name=\"_password\" />
                              <div id=\"formFooter\">
              </div>

              <input type=\"hidden\" name=\"_csrf_token\"
                  value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

              <input type=\"submit\" class=\"fadeIn fourth zero-raduis\" value=\"Se connecter\">
              
              </form>
              <h2>Vous n'avez pas encore de compte ?</h2>
              <form action=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_signup");
        echo "\">
\t\t\t\t        <input type=\"submit\" class=\"fadeIn fourth zero-raduis pc\" value=\"Inscrivez-vous\">
\t\t\t        </form>
              ";
        // line 51
        echo "
              
          </form>
              
    
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
        return "utilisateur/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 51,  123 => 43,  114 => 37,  104 => 30,  99 => 28,  79 => 10,  70 => 9,  57 => 5,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title %}

  Connexion - {{ parent() }}

{% endblock %}

{% block body %}

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
              <form action=\"{{ path('site_login') }}\" method=\"post\">
              <label for=\"username\">Username:</label>
              <input type=\"text\" class=\"fadeIn second zero-raduis\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
              <label for=\"password\">Password:</label>
              <input type=\"password\" class=\"fadeIn third zero-raduis\" id=\"password\" name=\"_password\" />
                              <div id=\"formFooter\">
              </div>

              <input type=\"hidden\" name=\"_csrf_token\"
                  value=\"{{ csrf_token('authenticate') }}\">

              <input type=\"submit\" class=\"fadeIn fourth zero-raduis\" value=\"Se connecter\">
              
              </form>
              <h2>Vous n'avez pas encore de compte ?</h2>
              <form action=\"{{ path('site_signup') }}\">
\t\t\t\t        <input type=\"submit\" class=\"fadeIn fourth zero-raduis pc\" value=\"Inscrivez-vous\">
\t\t\t        </form>
              {#
              If you want to control the URL the user
              is redirected to on success (more details below)
              <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
              #}

              
          </form>
              
    
            </div>
      </div>
        </div>
        <br>
        <hr>

        


{% endblock %}", "utilisateur/login.html.twig", "/opt/lampp/htdocs/Symfony/templates/utilisateur/login.html.twig");
    }
}
