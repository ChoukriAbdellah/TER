<?php

/* registration/register.html.twig */
class __TwigTemplate_b0ae4d8ff80f2c9336dd55851fdb56979abd1a745277c4f46118dfa8e1eb38ad extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "registration/register.html.twig", 1);
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

    // line 4
    public function block_title($context, array $blocks = [])
    {
        // line 5
        echo "
  Inscription - ";
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), "username", []), "html", null, true);
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
    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", []), 'row', ["attr" => ["class" => "fadeIn second zero-raduis", "placeholder" => "Identifiant"]]);
        echo "  
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", []), 'row', ["attr" => ["class" => "fadeIn second zero-raduis", "placeholder" => "Adresse e-mail"]]);
        echo "  
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", []), "first", []), 'row', ["attr" => ["class" => "fadeIn third zero-raduis", "placeholder" => "Mot de passe"]]);
        echo "  
                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", []), "second", []), 'row', ["attr" => ["class" => "fadeIn third zero-raduis", "placeholder" => "Confirmer le mot de passe"]]);
        echo "  
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", []), 'row');
        echo "
            
                <input type=\"submit\" class=\"fadeIn fourth zero-raduis pc\" value=\"S'inscrire\">
                 ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        return array (  178 => 78,  171 => 74,  165 => 71,  161 => 70,  157 => 69,  153 => 68,  149 => 67,  145 => 66,  124 => 47,  121 => 46,  110 => 37,  105 => 35,  100 => 34,  95 => 32,  87 => 30,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  69 => 25,  62 => 21,  50 => 11,  47 => 10,  40 => 6,  37 => 5,  34 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "registration/register.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/registration/register.html.twig");
    }
}
