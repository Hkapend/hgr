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

/* mwangeji/navbar.html.twig */
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mwangeji/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mwangeji/navbar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mwangeji/navbar.html.twig", 1);
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
                <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personne");
        echo "\" class=\"list-group-item list-group-item-action bg-admin\">
                    <i class=\"fa fa-address-book text-white\"></i>
                    <span class=\"nav-link-text\">Les Personnelles</span>
                </a>
            </div>
            <li class=\"nav-item dropdown\">
                <a class=\"dropdown-toggle nav-link list-group-item-action bg-admin\" href=\"#\" role=\"button\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fa fa-users-cog text-blue\">  </i>Paramètres
                </a>
                <div class=\"dropdown-menu list-group-item-action bg-admin\" aria-labelledby=\"dropdownMenuLink \">
                    <a class=\"dropdown-item list-group-item-action bg-admin\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie");
        echo "\">
                        <i class=\"fa fa-calendar-times text-white\"></i>
                        <span class=\"nav-link-text\">Paramètre catégorie</span>
                    </a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"dropdown-toggle nav-link list-group-item-action bg-admin\" href=\"#\" role=\"button\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fa fa-users-cog text-blue\">  </i>Patient
                </a>
                <div class=\"dropdown-menu list-group-item-action bg-admin\" aria-labelledby=\"dropdownMenuLink \">
                    <a class=\"dropdown-item list-group-item-action bg-admin\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient");
        echo "\">
                        <i class=\"fa fa-calendar-times text-white\"></i>
                        <span class=\"nav-link-text\">Nouveau Patient</span>
                    </a>
                    <a class=\"dropdown-item list-group-item-action bg-admin\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oldpatient");
        echo "\">
                        <i class=\"fa fa-calendar-times text-white\"></i>
                        <span class=\"nav-link-text\">Ancien Patient</span>
                    </a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"dropdown-toggle nav-link list-group-item-action bg-admin\" href=\"#\" role=\"button\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fa fa-users-cog text-blue\">  </i>Listing
                </a>
                <div class=\"dropdown-menu list-group-item-action bg-admin\" aria-labelledby=\"dropdownMenuLink \">
                    <a class=\"dropdown-item list-group-item-action bg-admin\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient");
        echo "\">
                        <i class=\"fa fa-calendar-times text-white\"></i>
                        <span class=\"nav-link-text\">Patients Abonné</span>
                    </a>
                    <a class=\"dropdown-item list-group-item-action bg-admin\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient");
        echo "\">
                        <i class=\"fa fa-calendar-times text-white\"></i>
                        <span class=\"nav-link-text\">Patients Privés</span>
                    </a>
                    <a class=\"dropdown-item list-group-item-action bg-admin\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oldpatient");
        echo "\">
                        <i class=\"fa fa-calendar-times text-white\"></i>
                        <span class=\"nav-link-text\">Personnelles</span>
                    </a>
                    <a class=\"dropdown-item list-group-item-action bg-admin\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oldpatient");
        echo "\">
                        <i class=\"fa fa-calendar-times text-white\"></i>
                        <span class=\"nav-link-text\">Bon Médical</span>
                    </a>
                </div>
            </li>
        </div>
        <!-- /#sidebar-wrapper -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mwangeji/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 56,  137 => 52,  130 => 48,  123 => 44,  109 => 33,  102 => 29,  88 => 18,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
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
                <a href=\"{{ path('personne') }}\" class=\"list-group-item list-group-item-action bg-admin\">
                    <i class=\"fa fa-address-book text-white\"></i>
                    <span class=\"nav-link-text\">Les Personnelles</span>
                </a>
            </div>
            <li class=\"nav-item dropdown\">
                <a class=\"dropdown-toggle nav-link list-group-item-action bg-admin\" href=\"#\" role=\"button\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fa fa-users-cog text-blue\">  </i>Paramètres
                </a>
                <div class=\"dropdown-menu list-group-item-action bg-admin\" aria-labelledby=\"dropdownMenuLink \">
                    <a class=\"dropdown-item list-group-item-action bg-admin\" href=\"{{ path('categorie') }}\">
                        <i class=\"fa fa-calendar-times text-white\"></i>
                        <span class=\"nav-link-text\">Paramètre catégorie</span>
                    </a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"dropdown-toggle nav-link list-group-item-action bg-admin\" href=\"#\" role=\"button\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fa fa-users-cog text-blue\">  </i>Patient
                </a>
                <div class=\"dropdown-menu list-group-item-action bg-admin\" aria-labelledby=\"dropdownMenuLink \">
                    <a class=\"dropdown-item list-group-item-action bg-admin\" href=\"{{ path('patient') }}\">
                        <i class=\"fa fa-calendar-times text-white\"></i>
                        <span class=\"nav-link-text\">Nouveau Patient</span>
                    </a>
                    <a class=\"dropdown-item list-group-item-action bg-admin\" href=\"{{ path('oldpatient') }}\">
                        <i class=\"fa fa-calendar-times text-white\"></i>
                        <span class=\"nav-link-text\">Ancien Patient</span>
                    </a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"dropdown-toggle nav-link list-group-item-action bg-admin\" href=\"#\" role=\"button\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fa fa-users-cog text-blue\">  </i>Listing
                </a>
                <div class=\"dropdown-menu list-group-item-action bg-admin\" aria-labelledby=\"dropdownMenuLink \">
                    <a class=\"dropdown-item list-group-item-action bg-admin\" href=\"{{ path('patient') }}\">
                        <i class=\"fa fa-calendar-times text-white\"></i>
                        <span class=\"nav-link-text\">Patients Abonné</span>
                    </a>
                    <a class=\"dropdown-item list-group-item-action bg-admin\" href=\"{{ path('patient') }}\">
                        <i class=\"fa fa-calendar-times text-white\"></i>
                        <span class=\"nav-link-text\">Patients Privés</span>
                    </a>
                    <a class=\"dropdown-item list-group-item-action bg-admin\" href=\"{{ path('oldpatient') }}\">
                        <i class=\"fa fa-calendar-times text-white\"></i>
                        <span class=\"nav-link-text\">Personnelles</span>
                    </a>
                    <a class=\"dropdown-item list-group-item-action bg-admin\" href=\"{{ path('oldpatient') }}\">
                        <i class=\"fa fa-calendar-times text-white\"></i>
                        <span class=\"nav-link-text\">Bon Médical</span>
                    </a>
                </div>
            </li>
        </div>
        <!-- /#sidebar-wrapper -->
{% endblock %}", "mwangeji/navbar.html.twig", "/home/hkap/Bureau/mwangeji/templates/mwangeji/navbar.html.twig");
    }
}
