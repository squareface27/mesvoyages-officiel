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

/* pages/voyages/voyages.html.twig */
class __TwigTemplate_8c3374c7d1d8b64fddcfcbe8af2b81191470af46dfc2e220f7555ccf7b57ff4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/voyages/voyages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/voyages/voyages.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "pages/voyages/voyages.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo "Hello VoyagesController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <table class=\"table table-striped\">
        <thread>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">Ville
                <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.findallequal", ["champ" => "ville"]);
        echo "\">
                    <div class=\"form-group mr-1 mb-2\">
                        <input type=\"text\" class=\"sm\" name=\"recherche\">
                        <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">filtrer</button>
                    </div>
                </form>
                </th>
                <th class=\"text-left align-top\" scope=\"col\">Pays
                <form class=\"form-inline mt-1\" method=\"POST\" action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.findallequal", ["champ" => "pays"]);
        echo "\">
                    <div class=\"form-group mr-1 mb-2\">
                        <input type=\"text\" class=\"sm\" name=\"recherche\">
                        <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">filtrer</button>
                    </div>
                </form>
                </th>
                <th class=\"text-end align-top\" scope=\"col\">Note
                <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "note", "ordre" => "ASC"]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "note", "ordre" => "DESC"]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                </th>
                <th class=\"text-center align-top\" scope=\"col\">Date
                <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "datecreation", "ordre" => "ASC"]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.sort", ["champ" => "datecreation", "ordre" => "DESC"]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                </th>
            </tr>
        </thread>
        <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["visites"]) || array_key_exists("visites", $context) ? $context["visites"] : (function () { throw new RuntimeError('Variable "visites" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
            // line 37
            echo "                <tr>
                    <td>
                        <h5 class=\"text-primary\">
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyages.showone", ["id" => twig_get_attribute($this->env, $this->source, $context["visite"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "ville", [], "any", false, false, false, 40), "html", null, true);
            echo "</a>
                        </h5>
                    </td>
                    <td>
                        ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "pays", [], "any", false, false, false, 44), "html", null, true);
            echo "
                    </td>
                    <td class=\"text-end\">
                        <strong>
                            ";
            // line 48
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["visite"], "note", [], "any", false, false, false, 48), 10))) {
                // line 49
                echo "                                <div class=\"text-danger\">
                                    ";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "note", [], "any", false, false, false, 50), "html", null, true);
                echo "/20
                                </div>
                            ";
            } else {
                // line 53
                echo "                                <div class=\"text-success\">
                                    ";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "note", [], "any", false, false, false, 54), "html", null, true);
                echo "/20
                                </div>
                            ";
            }
            // line 57
            echo "                        </strong>
                    </td>
                    <td class=\"text-center\">
                        ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visite"], "datecreationstring", [], "any", false, false, false, 60), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/voyages/voyages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 64,  188 => 60,  183 => 57,  177 => 54,  174 => 53,  168 => 50,  165 => 49,  163 => 48,  156 => 44,  147 => 40,  142 => 37,  138 => 36,  130 => 31,  126 => 30,  120 => 27,  116 => 26,  105 => 18,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefront.html.twig' %}

{% block title %}Hello VoyagesController!{% endblock %}

{% block body %}
    <table class=\"table table-striped\">
        <thread>
            <tr>
                <th class=\"text-left align-top\" scope=\"col\">Ville
                <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('voyages.findallequal', {champ:'ville'}) }}\">
                    <div class=\"form-group mr-1 mb-2\">
                        <input type=\"text\" class=\"sm\" name=\"recherche\">
                        <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">filtrer</button>
                    </div>
                </form>
                </th>
                <th class=\"text-left align-top\" scope=\"col\">Pays
                <form class=\"form-inline mt-1\" method=\"POST\" action=\"{{ path('voyages.findallequal', {champ:'pays'}) }}\">
                    <div class=\"form-group mr-1 mb-2\">
                        <input type=\"text\" class=\"sm\" name=\"recherche\">
                        <button type=\"submit\" class=\"btn btn-primary mb-2 btn-sm\">filtrer</button>
                    </div>
                </form>
                </th>
                <th class=\"text-end align-top\" scope=\"col\">Note
                <a href=\"{{ path('voyages.sort', {champ:'note', ordre:'ASC'}) }}\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                <a href=\"{{ path('voyages.sort', {champ:'note', ordre:'DESC'}) }}\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                </th>
                <th class=\"text-center align-top\" scope=\"col\">Date
                <a href=\"{{ path('voyages.sort', {champ:'datecreation', ordre:'ASC'}) }}\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\"><</a>
                <a href=\"{{ path('voyages.sort', {champ:'datecreation', ordre:'DESC'}) }}\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">></a>
                </th>
            </tr>
        </thread>
        <tbody>
            {% for visite in visites %}
                <tr>
                    <td>
                        <h5 class=\"text-primary\">
                        <a href=\"{{ path('voyages.showone', {id:visite.id}) }}\">{{ visite.ville}}</a>
                        </h5>
                    </td>
                    <td>
                        {{ visite.pays}}
                    </td>
                    <td class=\"text-end\">
                        <strong>
                            {% if visite.note<10 %}
                                <div class=\"text-danger\">
                                    {{ visite.note }}/20
                                </div>
                            {% else %}
                                <div class=\"text-success\">
                                    {{ visite.note }}/20
                                </div>
                            {% endif %}
                        </strong>
                    </td>
                    <td class=\"text-center\">
                        {{ visite.datecreationstring }}
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>            
{% endblock %}
", "pages/voyages/voyages.html.twig", "C:\\wamp64\\www\\mesvoyages\\templates\\pages\\voyages\\voyages.html.twig");
    }
}
