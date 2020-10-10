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

/* /mwangeji/patient.html.twig */
class __TwigTemplate_7a4d9104055374a843ef44e74c099cc1d09731159a7094322a376c74597e8375 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/mwangeji/patient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/mwangeji/patient.html.twig"));

        // line 1
        $this->loadTemplate("mwangeji/sidebar.html.twig", "/mwangeji/patient.html.twig", 1)->display($context);
        // line 2
        echo "<title> ";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 2, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "    <div class=\"container-fluid\">
        <div class=\"card-body\">
            <form action=\"\" method=\"post\">
                <h4 class=\"heading-small text-lg-center mb-4\"><i class=\"ni ni-briefcase-24 text-muted\">  Enregistrement du patient</i></h4>
                <div class=\"pl-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir le nom</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: kapend\" name=\"nom\">
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir le post-nom</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: a ileng\" name=\"post\">
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir le prénom</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: Hervé\" name=\"prenom\">
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir le lieu de naissance</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex:Kolwezi\" name=\"lieu\">
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir la date de naissance</label>
                                <input type=\"date\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: 07/10/1997\" name=\"date\">
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"select-genre\">Sexe</label>
                                <select id=\"select-genre\" class=\"form-control\" name=\"genre\">
                                    <option value=\"Masculin\">Masculin</option>
                                    <option value=\"Féminin\">Féminin</option>
                                    <option value=\"Other...\">Autre...</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr class=\"my-1\" />
                    <div class=\"row\">
                        <div class=\"col-lg-2\"></div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-fiche\">Saisir le numéro de la fiche</label>
                                <input type=\"text\" id=\"input-fiche\" class=\"form-control\" placeholder=\"ex: 07/4516/2020\" name=\"fiche\">
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"select-type\">Type de Patient</label>
                                <select id=\"select-type\" class=\"form-control\" name=\"type\">
                                    <option value=\"1\" data-toggle=\"collapse\" href=\"#collapseAbonne\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseAbonne\">Abonné</option>
                                    <option value=\"2\" data-toggle=\"collapse\" href=\"#collapsePrive\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapsePrive\">Privé</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse\" id=\"collapsePrive\">
                        <hr class=\"my-1\" />
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\" for=\"input-adresseprive\">Saisir l'adresse du patient</label>
                                    <input type=\"text\" id=\"input-adresseprive\" class=\"form-control\" placeholder=\"ex: 07/4516/2020\" name=\"adresseprive\">
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\" for=\"input-desc\">Saisir la description</label>
                                    <textarea rows=\"1\" class=\"form-control\" placeholder=\"un mot sur le patient\" name=\"descr\"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse\" id=\"collapseAbonne\">
                        <hr class=\"my-1\" />
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\" for=\"input-adresseabonne\">Saisir l'adresse du patient</label>
                                    <input type=\"text\" id=\"input-adresseabonne\" class=\"form-control\" placeholder=\"ex: 07/4516/2020\" name=\"adresseabone\">
                                </div>
                            </div>
                        </div>
                        <hr class=\"my-1\" />
                        <div class=\"row\">
                            <div class=\"col-lg-3\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\" for=\"input-entreprise\">Saisir le nom de l'entreprise</label>
                                    <input type=\"text\" id=\"input-entreprise\" class=\"form-control\" placeholder=\"ex: SNEL\" name=\"entreprise\">
                                </div>
                            </div>
                            <div class=\"col-lg-3\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\" for=\"input-bon\">Bon Numéro</label>
                                    <input type=\"text\" id=\"input-bon\" class=\"form-control\" placeholder=\"ex: 12/SNEL/Med\" name=\"bon\">
                                </div>
                            </div>
                            <div class=\"col-lg-3\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\" for=\"input-agent\">Saisir le nom de l'agent</label>
                                    <input type=\"text\" id=\"input-agent\" class=\"form-control\" placeholder=\"ex: Hervé Kapend\" name=\"agent\">
                                </div>
                            </div>
                            <div class=\"col-lg-3\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\" for=\"input-matricule\">Saisir le matricule de l'agent</label>
                                    <input type=\"text\" id=\"input-matricule\" class=\"form-control\" placeholder=\"ex: H01232\" name=\"matricule\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-4\"></div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <div class=\"text-center\">
                                    <button type=\"submit\" class=\"btn btn-outline-primary\"><i class=\"fa fa-save text-white\"></i>  Enregistrer</button>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4\"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/mwangeji/patient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 4,  81 => 3,  62 => 2,  52 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'mwangeji/sidebar.html.twig' %}
<title> {% block title %}{{ page_name }}{% endblock %}</title>
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"card-body\">
            <form action=\"\" method=\"post\">
                <h4 class=\"heading-small text-lg-center mb-4\"><i class=\"ni ni-briefcase-24 text-muted\">  Enregistrement du patient</i></h4>
                <div class=\"pl-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir le nom</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: kapend\" name=\"nom\">
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir le post-nom</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: a ileng\" name=\"post\">
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir le prénom</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: Hervé\" name=\"prenom\">
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir le lieu de naissance</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex:Kolwezi\" name=\"lieu\">
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir la date de naissance</label>
                                <input type=\"date\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: 07/10/1997\" name=\"date\">
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"select-genre\">Sexe</label>
                                <select id=\"select-genre\" class=\"form-control\" name=\"genre\">
                                    <option value=\"Masculin\">Masculin</option>
                                    <option value=\"Féminin\">Féminin</option>
                                    <option value=\"Other...\">Autre...</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr class=\"my-1\" />
                    <div class=\"row\">
                        <div class=\"col-lg-2\"></div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-fiche\">Saisir le numéro de la fiche</label>
                                <input type=\"text\" id=\"input-fiche\" class=\"form-control\" placeholder=\"ex: 07/4516/2020\" name=\"fiche\">
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"select-type\">Type de Patient</label>
                                <select id=\"select-type\" class=\"form-control\" name=\"type\">
                                    <option value=\"1\" data-toggle=\"collapse\" href=\"#collapseAbonne\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseAbonne\">Abonné</option>
                                    <option value=\"2\" data-toggle=\"collapse\" href=\"#collapsePrive\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapsePrive\">Privé</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse\" id=\"collapsePrive\">
                        <hr class=\"my-1\" />
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\" for=\"input-adresseprive\">Saisir l'adresse du patient</label>
                                    <input type=\"text\" id=\"input-adresseprive\" class=\"form-control\" placeholder=\"ex: 07/4516/2020\" name=\"adresseprive\">
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\" for=\"input-desc\">Saisir la description</label>
                                    <textarea rows=\"1\" class=\"form-control\" placeholder=\"un mot sur le patient\" name=\"descr\"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse\" id=\"collapseAbonne\">
                        <hr class=\"my-1\" />
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\" for=\"input-adresseabonne\">Saisir l'adresse du patient</label>
                                    <input type=\"text\" id=\"input-adresseabonne\" class=\"form-control\" placeholder=\"ex: 07/4516/2020\" name=\"adresseabone\">
                                </div>
                            </div>
                        </div>
                        <hr class=\"my-1\" />
                        <div class=\"row\">
                            <div class=\"col-lg-3\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\" for=\"input-entreprise\">Saisir le nom de l'entreprise</label>
                                    <input type=\"text\" id=\"input-entreprise\" class=\"form-control\" placeholder=\"ex: SNEL\" name=\"entreprise\">
                                </div>
                            </div>
                            <div class=\"col-lg-3\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\" for=\"input-bon\">Bon Numéro</label>
                                    <input type=\"text\" id=\"input-bon\" class=\"form-control\" placeholder=\"ex: 12/SNEL/Med\" name=\"bon\">
                                </div>
                            </div>
                            <div class=\"col-lg-3\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\" for=\"input-agent\">Saisir le nom de l'agent</label>
                                    <input type=\"text\" id=\"input-agent\" class=\"form-control\" placeholder=\"ex: Hervé Kapend\" name=\"agent\">
                                </div>
                            </div>
                            <div class=\"col-lg-3\">
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\" for=\"input-matricule\">Saisir le matricule de l'agent</label>
                                    <input type=\"text\" id=\"input-matricule\" class=\"form-control\" placeholder=\"ex: H01232\" name=\"matricule\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-4\"></div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <div class=\"text-center\">
                                    <button type=\"submit\" class=\"btn btn-outline-primary\"><i class=\"fa fa-save text-white\"></i>  Enregistrer</button>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4\"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %}
", "/mwangeji/patient.html.twig", "/home/hkap/Bureau/mwangeji/templates/mwangeji/patient.html.twig");
    }
}
