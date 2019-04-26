<?php

/* security/login.html.twig */
class __TwigTemplate_737c1fcd1a431fd9428b92a63452cd116cec6d5700e4d290844e3a6c7ad11397 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "security/login.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
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
        return array (  196 => 98,  189 => 89,  182 => 85,  171 => 77,  162 => 71,  158 => 70,  138 => 52,  132 => 49,  129 => 48,  127 => 47,  124 => 46,  121 => 45,  110 => 36,  105 => 34,  100 => 33,  95 => 31,  87 => 29,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  69 => 24,  62 => 20,  50 => 10,  47 => 9,  40 => 5,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/login.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/security/login.html.twig");
    }
}
