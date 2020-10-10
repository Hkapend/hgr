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

/* mwangeji/personne.html.twig */
class __TwigTemplate_3fccac25d02977ae3579ed411f57296fae49589e9e8c6f243e6e9c513375e1be extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mwangeji/personne.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mwangeji/personne.html.twig"));

        // line 1
        $this->loadTemplate("mwangeji/sidebar.html.twig", "mwangeji/personne.html.twig", 1)->display($context);
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

                <h4 class=\"heading-small text-lg-center mb-4\"><i class=\"ni ni-briefcase-24 text-muted\">  Enregistrement Personnel</i></h4>
                <div class=\"pl-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir votre nom</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: kapend\" name=\"nom\">
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir votre post-nom</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: a ileng\" name=\"post\">
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir votre prénom</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: Hervé\" name=\"prenom\">
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir votre lieu de naissance</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex:Kolwezi\" name=\"lieu\">
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir votre date de naissance</label>
                                <input type=\"date\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: 07/10/1997\" name=\"date\">
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"select-genre\">Sexe</label>
                                <select id=\"select-genre\" class=\"form-control\" name=\"genre\">
                                    <option value=\"Masculin\">Masculin</option>
                                    <option value=\"Féminin\">Féminin</option>
                                    <option value=\"Other...\">Autre...</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"select-categorie\">Categorie</label>
                                <select id=\"select-categorie\" class=\"form-control\" name=\"categorie\">
                                    ";
        // line 58
        echo "                                    <option value=\"1\">Médecin</option>
                                    <option value=\"2\">Infirmier</option>
                                    <option value=\"3\">Administrion</option>
                                    ";
        // line 62
        echo "                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse\" id=\"collapsePatient\">
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
                                    <input type=\"text\" id=\"input-adresseabonne\" class=\"form-control\" placeholder=\"ex: 07/4516/2020\" name=\"adresseabonne\">
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
    <div class=\"col-12\">
    <div class=\"shadow\">
        <div class=\"card-header bg-transparent text-lg-center border-0\">
            <h3 class=\"text-dark mb-0\">Liste des personnelles</h3>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table align-items-center table-white table-flush\">
                <thead class=\"thead-dark text-lg-center\">
                <tr>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Nom</th>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Post-nom</th>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Prénom</th>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Lieu de naissance</th>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Date de Naissance</th>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Sexe</th>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Catégorie</th>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Action</th>
                </tr>
                </thead>
                <tbody class=\"list text-center \">
                ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 177, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["affiche"]) {
            // line 178
            echo "                    <tr>
                        <th scope=\"row\">
                            ";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiche"], "nom", [], "any", false, false, false, 180), "html", null, true);
            echo "
                        </th>
                        <th scope=\"row\">
                            ";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiche"], "postNom", [], "any", false, false, false, 183), "html", null, true);
            echo "
                        </th>
                        <th scope=\"row\">
                            ";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiche"], "prenom", [], "any", false, false, false, 186), "html", null, true);
            echo "
                        </th>
                        <th scope=\"row\">
                            ";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiche"], "lieuNaissance", [], "any", false, false, false, 189), "html", null, true);
            echo "
                        </th>
                        <th scope=\"row\">
                            ";
            // line 192
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiche"], "dateNaissance", [], "any", false, false, false, 192), "d-m-Y"), "html", null, true);
            echo "
                        </th>
                        <th scope=\"row\">
                            ";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiche"], "sexe", [], "any", false, false, false, 195), "html", null, true);
            echo "
                        </th>
                        <th class=\"row\">
                            ";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["affiche"], "categorie", [], "any", false, false, false, 198), "categorie", [], "any", false, false, false, 198), "html", null, true);
            echo "
                        </th>
                        <th class=\"bg-default shadow\">
                            <button type=\"submit\" class=\"btn btn-warning\"><i class=\"fa fa-address-card text-white\"></i>  Voir plus...</button>
                        </th>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                </tbody>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mwangeji/personne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 205,  312 => 198,  306 => 195,  300 => 192,  294 => 189,  288 => 186,  282 => 183,  276 => 180,  272 => 178,  268 => 177,  151 => 62,  146 => 58,  91 => 4,  81 => 3,  62 => 2,  52 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'mwangeji/sidebar.html.twig' %}
<title> {% block title %}{{ page_name }}{% endblock %}</title>
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"card-body\">
            <form action=\"\" method=\"post\">

                <h4 class=\"heading-small text-lg-center mb-4\"><i class=\"ni ni-briefcase-24 text-muted\">  Enregistrement Personnel</i></h4>
                <div class=\"pl-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir votre nom</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: kapend\" name=\"nom\">
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir votre post-nom</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: a ileng\" name=\"post\">
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir votre prénom</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: Hervé\" name=\"prenom\">
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir votre lieu de naissance</label>
                                <input type=\"text\" id=\"input-username\" class=\"form-control\" placeholder=\"ex:Kolwezi\" name=\"lieu\">
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"input-username\">Saisir votre date de naissance</label>
                                <input type=\"date\" id=\"input-username\" class=\"form-control\" placeholder=\"ex: 07/10/1997\" name=\"date\">
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"select-genre\">Sexe</label>
                                <select id=\"select-genre\" class=\"form-control\" name=\"genre\">
                                    <option value=\"Masculin\">Masculin</option>
                                    <option value=\"Féminin\">Féminin</option>
                                    <option value=\"Other...\">Autre...</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\" for=\"select-categorie\">Categorie</label>
                                <select id=\"select-categorie\" class=\"form-control\" name=\"categorie\">
                                    {#% for affiche in categorie %#}
                                    <option value=\"1\">Médecin</option>
                                    <option value=\"2\">Infirmier</option>
                                    <option value=\"3\">Administrion</option>
                                    {#% endfor %#}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse\" id=\"collapsePatient\">
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
                                    <input type=\"text\" id=\"input-adresseabonne\" class=\"form-control\" placeholder=\"ex: 07/4516/2020\" name=\"adresseabonne\">
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
    <div class=\"col-12\">
    <div class=\"shadow\">
        <div class=\"card-header bg-transparent text-lg-center border-0\">
            <h3 class=\"text-dark mb-0\">Liste des personnelles</h3>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table align-items-center table-white table-flush\">
                <thead class=\"thead-dark text-lg-center\">
                <tr>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Nom</th>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Post-nom</th>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Prénom</th>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Lieu de naissance</th>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Date de Naissance</th>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Sexe</th>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Catégorie</th>
                    <th scope=\"col\" class=\"sort\" data-sort=\"\">Action</th>
                </tr>
                </thead>
                <tbody class=\"list text-center \">
                {% for affiche in personne %}
                    <tr>
                        <th scope=\"row\">
                            {{affiche.nom}}
                        </th>
                        <th scope=\"row\">
                            {{affiche.postNom}}
                        </th>
                        <th scope=\"row\">
                            {{affiche.prenom}}
                        </th>
                        <th scope=\"row\">
                            {{affiche.lieuNaissance}}
                        </th>
                        <th scope=\"row\">
                            {{affiche.dateNaissance|date('d-m-Y')}}
                        </th>
                        <th scope=\"row\">
                            {{affiche.sexe}}
                        </th>
                        <th class=\"row\">
                            {{ affiche.categorie.categorie }}
                        </th>
                        <th class=\"bg-default shadow\">
                            <button type=\"submit\" class=\"btn btn-warning\"><i class=\"fa fa-address-card text-white\"></i>  Voir plus...</button>
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
{% endblock %}
{#% block javascripts %}
    <script type=\"text/javascript\">
        \$(function() {
        // Remove button click
        \$(document).on(
        'click',
        '[data-role=\"dynamic-fields\"] > .form-inline [data-role=\"remove\"]',
        function(e) {
        e.preventDefault();
        \$(this).closest('.form-inline').remove();

        }
        );
        // Add button click
        \$(document).on(
        'click',
        '[data-role=\"dynamic-fields\"] > .form-inline [data-role=\"add\"]',
        function(e) {
        e.preventDefault();
        var container = \$(this).closest('[data-role=\"dynamic-fields\"]');
        new_field_group = container.children().filter('.form-inline:first-child').clone();
        new_field_group.find('input').each(function(){
        \$(this).val('');

        });
        container.append(new_field_group);

        }
        );

        })
    </script>
{% endblock %#}
", "mwangeji/personne.html.twig", "/home/hkap/Bureau/mwangeji/templates/mwangeji/personne.html.twig");
    }
}
