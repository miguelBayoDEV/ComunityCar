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

/* main/buscador.html.twig */
class __TwigTemplate_c8ed7e16b2bd4d313e038b2dadee3883e93e07ff7ca231c192ed3aca85e749bf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/buscador.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/buscador.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/buscador.html.twig", 1);
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

        echo "Search";
        
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
        echo "    ";
        // line 7
        echo "    <form action=\"/buscador\" method=\"post\">
        <select name=\"marcas\" id=\"marcas\">
            <option value=\"\" selected>Seleccionar</option>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marcas"]) || array_key_exists("marcas", $context) ? $context["marcas"] : (function () { throw new RuntimeError('Variable "marcas" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["marca"]) {
            // line 11
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["marca"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["marca"]), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </select>
        <select name=\"modelos\" id=\"modelos\">
            <option value=\"\" selected>Seleccionar</option>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modelos"]) || array_key_exists("modelos", $context) ? $context["modelos"] : (function () { throw new RuntimeError('Variable "modelos" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["modelo"]) {
            // line 17
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["modelo"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["modelo"]), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modelo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </select>
        <input type=\"submit\" name=\"buscar\" />
    </form>

    ";
        // line 24
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 25
            echo "        ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehicle"], "eliminado", [], "any", false, false, false, 25), false)) || ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehicle"], "oculto", [], "any", false, false, false, 25), false)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehicle"], "venta", [], "any", false, false, false, 25), true))))) {
                // line 26
                echo "            <div class=\"vehicles\">
                Marca: ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "marca", [], "any", false, false, false, 27), "html", null, true);
                echo "
                Modelo: ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "modelo", [], "any", false, false, false, 28), "html", null, true);
                echo "
                ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "propietario", [], "any", false, false, false, 29), "email", [], "any", false, false, false, 29), "html", null, true);
                echo "
                ";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "fechaModificacion", [], "any", false, false, false, 30), "Y-m-d H:i:s"), "html", null, true);
                echo "
                <button><a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_new", ["receptor" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "propietario", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "emisor" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "id" => twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 31), "vehiculo" => twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">Enviar mensaje</a></button>
            </div>
        ";
            }
            // line 34
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/buscador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 34,  163 => 31,  159 => 30,  155 => 29,  151 => 28,  147 => 27,  144 => 26,  141 => 25,  136 => 24,  130 => 19,  119 => 17,  115 => 16,  110 => 13,  99 => 11,  95 => 10,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Search{% endblock %}

{% block body %}
    {# Mostrar opciones de busqueda #}
    <form action=\"/buscador\" method=\"post\">
        <select name=\"marcas\" id=\"marcas\">
            <option value=\"\" selected>Seleccionar</option>
            {% for marca in marcas %}
                <option value=\"{{ marca }}\">{{ marca|upper }}</option>
            {% endfor %}
        </select>
        <select name=\"modelos\" id=\"modelos\">
            <option value=\"\" selected>Seleccionar</option>
            {% for modelo in modelos %}
                <option value=\"{{ modelo }}\">{{ modelo|upper }}</option>
            {% endfor %}
        </select>
        <input type=\"submit\" name=\"buscar\" />
    </form>

    {# Mostrar vehículos #}
    {% for vehicle in vehicles %}
        {% if vehicle.eliminado == false or vehicle.oculto == false and vehicle.venta == true %}
            <div class=\"vehicles\">
                Marca: {{ vehicle.marca }}
                Modelo: {{ vehicle.modelo }}
                {{ vehicle.propietario.email }}
                {{ vehicle.fechaModificacion|date('Y-m-d H:i:s') }}
                <button><a href=\"{{ path('message_new', {'receptor': vehicle.propietario.id, 'emisor': user.id, 'id': vehicle.id, 'vehiculo': vehicle.id}) }}\">Enviar mensaje</a></button>
            </div>
        {% endif %}
    {% endfor %}
{% endblock %}
", "main/buscador.html.twig", "/home/bayo/proyectos/ComunityCar/templates/main/buscador.html.twig");
    }
}
