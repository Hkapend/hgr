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

/* /mwangeji/categorie.html.twig */
class __TwigTemplate_8dbe71e26fbaaf758bc60c289736c4b3ed059a9bb7d98c76c5d40de803bc3cea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/mwangeji/categorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/mwangeji/categorie.html.twig"));

        // line 1
        $this->loadTemplate("mwangeji/sidebar.html.twig", "/mwangeji/categorie.html.twig", 1)->display($context);
        // line 2
        echo "
<title> ";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container-fluid\">
        <div class=\"card-body\">
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
            <div class=\"pl-lg-4\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 12, $this->source); })()), "categorie", [], "any", false, false, false, 12), 'row', ["attr" => ["placeholder" => "ex: Categorie"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 17, $this->source); })()), "active", [], "any", false, false, false, 17), 'row', ["attr" => ["placeholder" => "ex: 1"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <div class=\"text-center\">
                                <button type=\"submit\" class=\"btn btn-outline-primary\"><i class=\"fa fa-save text-white\"></i>  Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
        </div>
        <div class=\"col-10\">
            <div class=\"shadow\">
                <div class=\"card-header bg-transparent border-0\">
                    <h3 class=\"text-dark mb-0\">Liste des Catégories</h3>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table align-items-center table-white table-flush\">
                        <thead class=\"thead-dark\">
                        <tr>
                            <th scope=\"col\" class=\"sort\" data-sort=\"\">Catégories</th>
                            <th scope=\"col\" class=\"sort\" data-sort=\"\">Visibilité</th>
                        </tr>
                        </thead>
                        <tbody class=\"list\">
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["_Affichage"]) || array_key_exists("_Affichage", $context) ? $context["_Affichage"] : (function () { throw new RuntimeError('Variable "_Affichage" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["affiche"]) {
            // line 46
            echo "                            <tr>
                                <th scope=\"row\">
                                    ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiche"], "categorie", [], "any", false, false, false, 48), "html", null, true);
            echo "
                                </th>
                                <th class=\"budget\">
                                   ";
            // line 51
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["affiche"], "active", [], "any", false, false, false, 51), "1"))) {
                // line 52
                echo "                                       <p>Actif</p>
                                   ";
            }
            // line 54
            echo "                                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["affiche"], "active", [], "any", false, false, false, 54), "0"))) {
                // line 55
                echo "                                        <p>Inactif</p>
                                    ";
            }
            // line 57
            echo "                                </th>
                                <th class=\"bg-default shadow\">
                                    <button type=\"submit\" class=\"btn btn-warning\"><i class=\"fa fa-edit text-white\"></i></button>
                                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash text-white\"></i></button>
                                </th>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"card-footer py-4 card bg-default shadow\">
                    <nav aria-label=\"...\">
                        <ul class=\"pagination justify-content-end mb-0\">
                            <li class=\"page-item disabled\">
                                <a class=\"page-link\" href=\"#\" tabindex=\"-1\">
                                    <i class=\"fas fa-angle-left\"></i>
                                    <span class=\"sr-only\">Previous</span>
                                </a>
                            </li>
                            <li class=\"page-item active\">
                                <a class=\"page-link\" href=\"#\">1</a>
                            </li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\">2 <span class=\"sr-only\">(current)</span></a>
                            </li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\">
                                    <i class=\"fas fa-angle-right\"></i>
                                    <span class=\"sr-only\">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/mwangeji/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 64,  174 => 57,  170 => 55,  167 => 54,  163 => 52,  161 => 51,  155 => 48,  151 => 46,  147 => 45,  128 => 29,  113 => 17,  105 => 12,  97 => 7,  93 => 5,  83 => 4,  64 => 3,  54 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'mwangeji/sidebar.html.twig' %}

<title> {% block title %}{{ page_name }}{% endblock %}</title>
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"card-body\">
            {{ form_start(formulaire) }}
            <div class=\"pl-lg-4\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            {{ form_row(formulaire.categorie, {'attr':{'placeholder':\"ex: Categorie\"}}) }}
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            {{ form_row(formulaire.active, {'attr':{'placeholder':\"ex: 1\"}}) }}
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <div class=\"text-center\">
                                <button type=\"submit\" class=\"btn btn-outline-primary\"><i class=\"fa fa-save text-white\"></i>  Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{ form_end(formulaire) }}
        </div>
        <div class=\"col-10\">
            <div class=\"shadow\">
                <div class=\"card-header bg-transparent border-0\">
                    <h3 class=\"text-dark mb-0\">Liste des Catégories</h3>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table align-items-center table-white table-flush\">
                        <thead class=\"thead-dark\">
                        <tr>
                            <th scope=\"col\" class=\"sort\" data-sort=\"\">Catégories</th>
                            <th scope=\"col\" class=\"sort\" data-sort=\"\">Visibilité</th>
                        </tr>
                        </thead>
                        <tbody class=\"list\">
                        {% for affiche in _Affichage %}
                            <tr>
                                <th scope=\"row\">
                                    {{affiche.categorie}}
                                </th>
                                <th class=\"budget\">
                                   {% if affiche.active == \"1\" %}
                                       <p>Actif</p>
                                   {% endif %}
                                    {% if affiche.active == \"0\" %}
                                        <p>Inactif</p>
                                    {% endif %}
                                </th>
                                <th class=\"bg-default shadow\">
                                    <button type=\"submit\" class=\"btn btn-warning\"><i class=\"fa fa-edit text-white\"></i></button>
                                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash text-white\"></i></button>
                                </th>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
                <div class=\"card-footer py-4 card bg-default shadow\">
                    <nav aria-label=\"...\">
                        <ul class=\"pagination justify-content-end mb-0\">
                            <li class=\"page-item disabled\">
                                <a class=\"page-link\" href=\"#\" tabindex=\"-1\">
                                    <i class=\"fas fa-angle-left\"></i>
                                    <span class=\"sr-only\">Previous</span>
                                </a>
                            </li>
                            <li class=\"page-item active\">
                                <a class=\"page-link\" href=\"#\">1</a>
                            </li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\">2 <span class=\"sr-only\">(current)</span></a>
                            </li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\">
                                    <i class=\"fas fa-angle-right\"></i>
                                    <span class=\"sr-only\">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "/mwangeji/categorie.html.twig", "/home/hkap/Bureau/mwangeji/templates/mwangeji/categorie.html.twig");
    }
}
