<?php

/* resetting/request.html.twig */
class __TwigTemplate_62040793d44681fb59ed3141a195710cbe6715bc6b886158b58e5ef93ce367b6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "resetting/request.html.twig", 1);
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
        return array (  150 => 81,  144 => 78,  140 => 77,  132 => 72,  98 => 40,  95 => 39,  82 => 29,  77 => 27,  73 => 26,  69 => 25,  62 => 21,  50 => 11,  47 => 10,  40 => 6,  37 => 5,  34 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "resetting/request.html.twig", "/opt/lampp/htdocs/Symfony-heroku/templates/resetting/request.html.twig");
    }
}
