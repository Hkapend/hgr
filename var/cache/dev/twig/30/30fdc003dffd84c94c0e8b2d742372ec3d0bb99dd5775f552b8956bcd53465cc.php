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

/* /mwangeji/navbar.html.twig */
class __TwigTemplate_f59da7ddb2717ea16ec0bc8919035ab1047a0c2d8f6d2ec598e4650a73791fe3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/mwangeji/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/mwangeji/navbar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/mwangeji/navbar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"d-flex\" id=\"wrapper\">
        <!-- Sidebar -->
        <div class=\"bg-admin border-right\" id=\"sidebar-wrapper\">
            <div class=\"sidebar-heading\"> <h3 class=\"text-white\">Gestion Hopital </h3></div>
            <div class=\"list-group list-group-flush\">
                <a href=\"#\" class=\"list-group-item list-group-item-action bg-admin\"></a>
                <a href=\"#\" class=\"list-group-item list-group-item-action bg-admin\"></a>
                <a href=\"#\" class=\"list-group-item list-group-item-action bg-admin\"></a>
                <a href=\"#\" class=\"list-group-item list-group-item-action bg-admin\"></a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id=\"page-content-wrapper\">

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
            </nav>

            <div class=\"container-fluid\">
";
        // line 38
        echo "            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/mwangeji/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"d-flex\" id=\"wrapper\">
        <!-- Sidebar -->
        <div class=\"bg-admin border-right\" id=\"sidebar-wrapper\">
            <div class=\"sidebar-heading\"> <h3 class=\"text-white\">Gestion Hopital </h3></div>
            <div class=\"list-group list-group-flush\">
                <a href=\"#\" class=\"list-group-item list-group-item-action bg-admin\"></a>
                <a href=\"#\" class=\"list-group-item list-group-item-action bg-admin\"></a>
                <a href=\"#\" class=\"list-group-item list-group-item-action bg-admin\"></a>
                <a href=\"#\" class=\"list-group-item list-group-item-action bg-admin\"></a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id=\"page-content-wrapper\">

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
            </nav>

            <div class=\"container-fluid\">
{#                Insertion du contenue#}
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
{% endblock %}", "/mwangeji/navbar.html.twig", "/home/jessy/Documents/mwangeji/templates/mwangeji/navbar.html.twig");
    }
}
