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

/* mwangeji/sidebar.html.twig */
class __TwigTemplate_cc17475dbc51d975ccc33dcb52080df3c1312a7a84bf63543cf48b3aeb88008d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mwangeji/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mwangeji/sidebar.html.twig"));

        // line 1
        $this->loadTemplate("mwangeji/navbar.html.twig", "mwangeji/sidebar.html.twig", 1)->display($context);
        // line 2
        echo "<!-- Page Content -->
<div id=\"page-content-wrapper\" class=\"background-admin\">

    <nav class=\"navbar navbar-expand-lg navbar-light bg-admin border-bottom\">
        <button class=\"btn btn-light\" id=\"menu-toggle\">Toggle Menu</button>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto mt-2 mt-lg-0\">
                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Link</a>
                </li>
            </ul>
        </div>
    </nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "mwangeji/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'mwangeji/navbar.html.twig' %}
<!-- Page Content -->
<div id=\"page-content-wrapper\" class=\"background-admin\">

    <nav class=\"navbar navbar-expand-lg navbar-light bg-admin border-bottom\">
        <button class=\"btn btn-light\" id=\"menu-toggle\">Toggle Menu</button>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto mt-2 mt-lg-0\">
                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Link</a>
                </li>
            </ul>
        </div>
    </nav>", "mwangeji/sidebar.html.twig", "/home/jessy/Documents/mwangeji/templates/mwangeji/sidebar.html.twig");
    }
}
