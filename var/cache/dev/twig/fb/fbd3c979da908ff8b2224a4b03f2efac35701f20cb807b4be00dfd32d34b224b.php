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

/* rapport/show.html.twig */
class __TwigTemplate_ab14b317fd66d3512670d55111e01f97fd6740debcef5866cbf0fb4d0ae10a45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rapport/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rapport/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "rapport/show.html.twig", 1);
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

        echo "Rapport ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <h1 > ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Date de création du rapport</th>
                <td>";
        // line 12
        ((twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 12, $this->source); })()), "createdAt", [], "any", false, false, false, 12)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 12, $this->source); })()), "createdAt", [], "any", false, false, false, 12), "Y-m-d H:i"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 16, $this->source); })()), "auteur", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 20, $this->source); })()), "auteur", [], "any", false, false, false, 20), "prenom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Batiment</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 24, $this->source); })()), "batiment", [], "any", false, false, false, 24), "denomination", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etage</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 28, $this->source); })()), "etage", [], "any", false, false, false, 28), "denomination", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 32, $this->source); })()), "localisation", [], "any", false, false, false, 32), "denomination", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 36, $this->source); })()), "titre", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 40, $this->source); })()), "contenu", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rapport_index");
        echo "\">Retourner à l'index des rapports</a><br>


";
        // line 48
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "roles", [], "any", false, false, false, 48), 0, [], "array", false, false, false, 48), "ROLE_ADMIN"))) {
            // line 49
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rapport_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">Modifier le rapport</a>
";
        }
        // line 51
        echo "
";
        // line 52
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "roles", [], "any", false, false, false, 52), 0, [], "array", false, false, false, 52), "ROLE_ADMIN"))) {
            // line 53
            echo "    ";
            echo twig_include($this->env, $context, "rapport/_delete_form.html.twig");
            echo "
";
        }
        // line 55
        echo "
<section id=\"commentaires\">
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 57, $this->source); })()), "commentaires", [], "any", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 58
            echo "        <div class=\"comment\">
            <div class=\"row\">
                <div class=\"col-3\">
                    ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "auteur", [], "any", false, false, false, 61), "html", null, true);
            echo " (<small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "createdAt", [], "any", false, false, false, 61), "d/m/Y à H:i"), "html", null, true);
            echo "</small>)
                </div>
                <div class=\"col-9\">
                    ";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 64);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "</section>

    ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 71, $this->source); })()), 'form_start');
        echo "

    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 73, $this->source); })()), "titre", [], "any", false, false, false, 73), 'row', ["attr" => ["placeholder" => "Titre de votre commentaire"]]);
        echo "
    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 74, $this->source); })()), "contenu", [], "any", false, false, false, 74), 'row', ["attr" => ["placeholder" => "Votre commentaire"]]);
        echo "
    <button type=\"submit\" class=\"btn btn-success\"> Enregister votre commentaire</button>

    ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 77, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "rapport/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 77,  226 => 74,  222 => 73,  217 => 71,  213 => 69,  202 => 64,  194 => 61,  189 => 58,  185 => 57,  181 => 55,  175 => 53,  173 => 52,  170 => 51,  164 => 49,  162 => 48,  156 => 45,  148 => 40,  141 => 36,  134 => 32,  127 => 28,  120 => 24,  113 => 20,  106 => 16,  99 => 12,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Rapport {{ rapport.titre }}{% endblock %}

{% block body %}
    <h1 > {{ rapport.titre }}</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Date de création du rapport</th>
                <td>{{ rapport.createdAt ? rapport.createdAt|date('Y-m-d H:i') : '' }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ rapport.auteur.name }}</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>{{ rapport.auteur.prenom }}</td>
            </tr>
            <tr>
                <th>Batiment</th>
                <td>{{ rapport.batiment.denomination }}</td>
            </tr>
            <tr>
                <th>Etage</th>
                <td>{{ rapport.etage.denomination }}</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>{{ rapport.localisation.denomination }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ rapport.titre }}</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>{{ rapport.contenu }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('rapport_index') }}\">Retourner à l'index des rapports</a><br>


{% if app.user.roles[0]== 'ROLE_ADMIN' %}
    <a href=\"{{ path('rapport_edit', {'id': rapport.id}) }}\">Modifier le rapport</a>
{% endif %}

{% if app.user.roles[0]== 'ROLE_ADMIN' %}
    {{ include('rapport/_delete_form.html.twig') }}
{% endif %}

<section id=\"commentaires\">
    {% for commentaire in rapport.commentaires %}
        <div class=\"comment\">
            <div class=\"row\">
                <div class=\"col-3\">
                    {{commentaire.auteur}} (<small>{{ commentaire.createdAt | date('d/m/Y à H:i')}}</small>)
                </div>
                <div class=\"col-9\">
                    {{ commentaire.contenu | raw}}
                </div>
            </div>
        </div>
    {% endfor %}
</section>

    {{form_start(commentForm)}}

    {{form_row(commentForm.titre, {'attr':{'placeholder': \"Titre de votre commentaire\"}})}}
    {{form_row(commentForm.contenu, {'attr':{'placeholder': \"Votre commentaire\"}})}}
    <button type=\"submit\" class=\"btn btn-success\"> Enregister votre commentaire</button>

    {{form_end(commentForm)}}


{% endblock %}
", "rapport/show.html.twig", "/var/www/thomas/SeCrud/templates/rapport/show.html.twig");
    }
}
