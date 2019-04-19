<?php

/* resetting/request.html.twig */
class __TwigTemplate_d5f30e005c1ffae8d4d663b3f3ea19788317a300aad3cb0d08d58a6bb79a6e9e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resetting/request.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resetting/request.html.twig"));

        // line 1
        echo "    <div class=\"grid-container\">
        <div class=\"grid-x grid-padding-x\">
            <div class=\"small-12 medium-8 medium-offset-2 large-6 large-offset-3 cell\">

                <h1>Mot de passe oublié ?</h1>
                <p>Demandez à réinitialiser votre mot de passe en renseignant votre mail.</p>

                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "email", []), 'row');
        echo "
                <button class=\"button\" type=\"submit\">Envoyer</button>
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  47 => 11,  42 => 9,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <div class=\"grid-container\">
        <div class=\"grid-x grid-padding-x\">
            <div class=\"small-12 medium-8 medium-offset-2 large-6 large-offset-3 cell\">

                <h1>Mot de passe oublié ?</h1>
                <p>Demandez à réinitialiser votre mot de passe en renseignant votre mail.</p>

                {{form_start(form)}}
                {{form_row(form.email)}}
                <button class=\"button\" type=\"submit\">Envoyer</button>
                {{form_end(form)}}
            </div>
        </div>
</div>", "resetting/request.html.twig", "/opt/lampp/htdocs/Symfony/templates/resetting/request.html.twig");
    }
}
