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

/* mwangeji/login.html.twig */
class __TwigTemplate_6eb8dc5084b166595d2d78616471119332fa178b8ede9c7ac2576597c734676a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mwangeji/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mwangeji/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mwangeji/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\">
            <div class=\"container\">
                <div class=\"text-center mt-5\">
                    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"login-logo\" width=\"50\" height=\"50\">
                </div>
                <div class=\"text-center mb-3 mt-3\">
                    <h3>Se connecter a HGR</h3>
                </div>
                <div class=\"container login-border\">
                    <label for=\"\" class=\"mt-3\">Email</label>
                    <input type=\"text\" class=\"form-control\">
                    <label for=\"\">Mot de passe</label>
                    <input type=\"text\" class=\"form-control\">
                    <div class=\"text-primary\">
                        <a href=\"\">Mot de passe oublie?</a>
                    </div>
                    <div class=\"mt-3 mb-3\">
                        <a class=\"btn btn-primary btn-block\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient");
        echo "\">SE CONNECTER</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\"></div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mwangeji/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\">
            <div class=\"container\">
                <div class=\"text-center mt-5\">
                    <img src=\"{{ asset('/assets/img/logo.png') }}\" alt=\"\" class=\"login-logo\" width=\"50\" height=\"50\">
                </div>
                <div class=\"text-center mb-3 mt-3\">
                    <h3>Se connecter a HGR</h3>
                </div>
                <div class=\"container login-border\">
                    <label for=\"\" class=\"mt-3\">Email</label>
                    <input type=\"text\" class=\"form-control\">
                    <label for=\"\">Mot de passe</label>
                    <input type=\"text\" class=\"form-control\">
                    <div class=\"text-primary\">
                        <a href=\"\">Mot de passe oublie?</a>
                    </div>
                    <div class=\"mt-3 mb-3\">
                        <a class=\"btn btn-primary btn-block\" href=\"{{ path(\"patient\") }}\">SE CONNECTER</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\"></div>
    </div>

{% endblock %}
", "mwangeji/login.html.twig", "/home/hkap/Bureau/mwangeji/templates/mwangeji/login.html.twig");
    }
}
