<?php

/* layout.html.twig */
class __TwigTemplate_04577dea511508bd62abdcf6ab801866fab668cb7a885ab56651b87cd4cfac09 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"\" name=\"keywords\">
  <meta content=\"\" name=\"description\">

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
</head>


<body data-spy=\"scroll\" data-offset=\"0\" data-target=\"#navigation\">

    ";
        // line 40
        $this->displayBlock('menu', $context, $blocks);
        // line 68
        echo "
    ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "

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
          <form class=\"contact-form php-mail-form\" role=\"form\" action=\"\" method=\"POST\">

            <div class=\"form-group\">
              <label for=\"contact-name\">Votre nom</label>
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

            <div class=\"loading\"><br>Votre message est en cours d'envoi.</div>
            <div class=\"error-message\"></div>
            <div class=\"sent-message\">Votre message a bien été envoyé, merci !</div>

            <div class=\"form-send\">
              <button type=\"submit\" class=\"btn btn-large\">Envoyer</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </section>

  <div id=\"copyrights\">
    <div class=\"container\">
      <p>
        &copy; Copyrights <strong>Estimation.com</strong>. All Rights Reserved 
      </p>
      <div class=\"credits\">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/pratt-app-landing-page-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Pratt template by <a href=\"https://templatemag.com/\">TemplateMag</a>
      </div>
    </div>
  </div>

   ";
        // line 145
        $this->displayBlock('javascripts', $context, $blocks);
        // line 157
        echo "
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Estimation.com";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "
  <!-- Favicons -->
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- =======================================================
    Template Name: Pratt
    Template URL: https://templatemag.com/pratt-app-landing-page-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 41
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
        <a class=\"navbar-brand smothscroll\" href=\"#home\"><b>Estimation.com</b></a>
      </div>
      <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
          <li class=\"active\"><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_index");
        echo "#home\">Accueil</a></li>
          <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_index");
        echo "#desc\">Description</a></li>
          <li><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_index");
        echo "#showcase\">Photos</a></li>
          <li><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_login");
        echo "\" class=\"smothscroll\">Connexion</a></li>
          <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_signup");
        echo "\">Inscription</a></li>
          <li><a href=\"#contact\" class=\"smothscroll\">Contact</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 70
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 146
        echo "
  <!-- JavaScript Libraries -->
  <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/lib/php-mail-form/validate.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main Javascript File -->
  <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/js/main.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  336 => 154,  330 => 151,  326 => 150,  322 => 149,  318 => 148,  314 => 146,  305 => 145,  294 => 70,  285 => 69,  266 => 59,  262 => 58,  258 => 57,  254 => 56,  250 => 55,  234 => 41,  225 => 40,  205 => 24,  199 => 21,  190 => 15,  186 => 14,  182 => 12,  173 => 11,  155 => 6,  143 => 157,  141 => 145,  66 => 72,  64 => 69,  61 => 68,  59 => 40,  51 => 34,  49 => 11,  41 => 6,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <title>{% block title %}Estimation.com{% endblock %}</title>
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"\" name=\"keywords\">
  <meta content=\"\" name=\"description\">

  {% block stylesheets %}

  <!-- Favicons -->
  <link href=\"{{ asset('resources/img/favicon.png') }}\" rel=\"icon\">
  <link href=\"{{ asset('resources/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"{{ asset('resources/lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"{{ asset('resources/css/style.css') }}\" rel=\"stylesheet\">

  <!-- =======================================================
    Template Name: Pratt
    Template URL: https://templatemag.com/pratt-app-landing-page-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->

  {% endblock %}

</head>


<body data-spy=\"scroll\" data-offset=\"0\" data-target=\"#navigation\">

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
        <a class=\"navbar-brand smothscroll\" href=\"#home\"><b>Estimation.com</b></a>
      </div>
      <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
          <li class=\"active\"><a href=\"{{ path('site_index') }}#home\">Accueil</a></li>
          <li><a href=\"{{ path('site_index') }}#desc\">Description</a></li>
          <li><a href=\"{{ path('site_index') }}#showcase\">Photos</a></li>
          <li><a href=\"{{ path('site_login') }}\" class=\"smothscroll\">Connexion</a></li>
          <li><a href=\"{{ path('site_signup') }}\">Inscription</a></li>
          <li><a href=\"#contact\" class=\"smothscroll\">Contact</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

    {% endblock %}

    {% block body %}

    {% endblock %}


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
          <form class=\"contact-form php-mail-form\" role=\"form\" action=\"\" method=\"POST\">

            <div class=\"form-group\">
              <label for=\"contact-name\">Votre nom</label>
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

            <div class=\"loading\"><br>Votre message est en cours d'envoi.</div>
            <div class=\"error-message\"></div>
            <div class=\"sent-message\">Votre message a bien été envoyé, merci !</div>

            <div class=\"form-send\">
              <button type=\"submit\" class=\"btn btn-large\">Envoyer</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </section>

  <div id=\"copyrights\">
    <div class=\"container\">
      <p>
        &copy; Copyrights <strong>Estimation.com</strong>. All Rights Reserved 
      </p>
      <div class=\"credits\">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/pratt-app-landing-page-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Pratt template by <a href=\"https://templatemag.com/\">TemplateMag</a>
      </div>
    </div>
  </div>

   {% block javascripts %}

  <!-- JavaScript Libraries -->
  <script src=\"{{ asset('resources/lib/jquery/jquery.min.js') }}\"></script>
  <script src=\"{{ asset('resources/lib/bootstrap/js/bootstrap.min.js') }}\"></script>
  <script src=\"{{ asset('resources/lib/php-mail-form/validate.js') }}\"></script>
  <script src=\"{{ asset('resources/lib/easing/easing.min.js') }}\"></script>

  <!-- Template Main Javascript File -->
  <script src=\"{{ asset('resources/js/main.js') }}\"></script>

    {% endblock %}

</body>
</html>", "layout.html.twig", "/var/www/TER-master/templates/layout.html.twig");
    }
}
