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

/* apprenant/show.html.twig */
class __TwigTemplate_8d6b8b87c7b23a3847dc05b3447576761ab155dda73972536bf74fd3d8c59728 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apprenant/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apprenant/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "apprenant/show.html.twig", 1);
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

        echo "Apprenant";
        
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
        echo "<div class=\"text-center\">
<div class=\"jumbotron\">
    <h1>Bienvenue dans notre environnement de manipulation d'apprenants</h1>
     <p>Cette page nous permet d'afficher les infos d'un apprenant</p>
</div>
 

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 33, $this->source); })()), "adresse", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Niveau</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 37, $this->source); })()), "niveau", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Attentes</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 41, $this->source); })()), "attentes", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <button class=\"btn btn-warning\"> <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apprenant_index");
        echo "\" style=\"color:#fff;text-decoration:none\">Voir la liste</a></button>
    <br>
<br>
    <button class=\"btn btn-success\"> <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apprenant_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["apprenant"]) || array_key_exists("apprenant", $context) ? $context["apprenant"] : (function () { throw new RuntimeError('Variable "apprenant" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
        echo "\" style=\"color:#fff;text-decoration:none\">Editer</a></button>
<br><br>
    ";
        // line 51
        echo twig_include($this->env, $context, "apprenant/_delete_form.html.twig");
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "apprenant/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 51,  157 => 49,  151 => 46,  143 => 41,  136 => 37,  129 => 33,  122 => 29,  115 => 25,  108 => 21,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Apprenant{% endblock %}

{% block body %}
<div class=\"text-center\">
<div class=\"jumbotron\">
    <h1>Bienvenue dans notre environnement de manipulation d'apprenants</h1>
     <p>Cette page nous permet d'afficher les infos d'un apprenant</p>
</div>
 

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ apprenant.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ apprenant.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ apprenant.prenom }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ apprenant.email }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ apprenant.adresse }}</td>
            </tr>
            <tr>
                <th>Niveau</th>
                <td>{{ apprenant.niveau }}</td>
            </tr>
            <tr>
                <th>Attentes</th>
                <td>{{ apprenant.attentes }}</td>
            </tr>
        </tbody>
    </table>

    <button class=\"btn btn-warning\"> <a href=\"{{ path('apprenant_index') }}\" style=\"color:#fff;text-decoration:none\">Voir la liste</a></button>
    <br>
<br>
    <button class=\"btn btn-success\"> <a href=\"{{ path('apprenant_edit', {'id': apprenant.id}) }}\" style=\"color:#fff;text-decoration:none\">Editer</a></button>
<br><br>
    {{ include('apprenant/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "apprenant/show.html.twig", "C:\\Users\\JUnior\\Desktop\\Atelier7_Simplon-ONFP\\templates\\apprenant\\show.html.twig");
    }
}
