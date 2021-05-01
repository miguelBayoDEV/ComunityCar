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

/* main/mostrarUsuarios.html.twig */
class __TwigTemplate_528464a34766fadedf0b5d65f8c8e75a764721ba34ba8f0b246e7a7c6d664205 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/mostrarUsuarios.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/mostrarUsuarios.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/mostrarUsuarios.html.twig", 1);
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

        echo "Exportar usuarios";
        
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
        echo "    <h1>Usuarios:</h1>
    <ol>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 9
            echo "            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 9), "root@gmail.com"))) {
                // line 10
                echo "                <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 10), "html", null, true);
                echo "</li>
            ";
            }
            // line 12
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </ol>
    <button class=\"btn btn-primary\" onClick=\"exportarCorreos();\">Exportar correos</button>
    <h1>Mensajes reportados:</h1>
    <ol>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mensajesReportados"]) || array_key_exists("mensajesReportados", $context) ? $context["mensajesReportados"] : (function () { throw new RuntimeError('Variable "mensajesReportados" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mensajeReportado"]) {
            // line 18
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mensajeReportado"], "texto", [], "any", false, false, false, 18), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mensajeReportado"], "fechaEnvio", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensajeReportado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ol>
    <button class=\"btn btn-primary\" onClick=\"exportarMensajesReportados();\">Exportar mensajes reportados</button>

    <h1>Vehículos reportados:</h1>
    <ol>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehiculosReportados"]) || array_key_exists("vehiculosReportados", $context) ? $context["vehiculosReportados"] : (function () { throw new RuntimeError('Variable "vehiculosReportados" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehiculoReportado"]) {
            // line 26
            echo "            <li>Marca: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculoReportado"], "marca", [], "any", false, false, false, 26), "html", null, true);
            echo " - Modelo: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculoReportado"], "modelo", [], "any", false, false, false, 26), "html", null, true);
            echo " - Propietario: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehiculoReportado"], "propietario", [], "any", false, false, false, 26), "email", [], "any", false, false, false, 26), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehiculoReportado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </ol>
    <button class=\"btn btn-primary\" onClick=\"exportarVehiculosReportados();\">Exportar vehiculos reportados</button>

    <script>
        function exportarCorreos() {

            function fail(data) {
                alert(\"Exportar correos fallido.\");
            }

            \$.ajax({
                type: \"GET\",
                url: \"/exportarUsuarios\",
                success: function(data)  { 
                    var blob = new Blob([data]); 
                    var link = document.createElement('a'); 
                    link.href = window.URL.createObjectURL(blob); 
                    link.download = \"correos.csv\"; 
                    link.click(); 
                },
                error: fail
            });
        }

        function exportarMensajesReportados() {

            function fail(data) {
                alert(\"Exportar correos fallido.\");
            }

            \$.ajax({
                type: \"GET\",
                url: \"/exportarMensajesReportados\",
                success: function(data)  { 
                    var blob = new Blob([data]); 
                    var link = document.createElement('a'); 
                    link.href = window.URL.createObjectURL(blob); 
                    link.download = \"correos.csv\"; 
                    link.click(); 
                },
                error: fail
            });
        }

        function exportarVehiculosReportados() {

            function fail(data) {
                alert(\"Exportar correos fallido.\");
            }

            \$.ajax({
                type: \"GET\",
                url: \"/exportarVehiculosReportados\",
                success: function(data)  { 
                    var blob = new Blob([data]); 
                    var link = document.createElement('a'); 
                    link.href = window.URL.createObjectURL(blob); 
                    link.download = \"correos.csv\"; 
                    link.click(); 
                },
                error: fail
            });
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/mostrarUsuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 28,  143 => 26,  139 => 25,  132 => 20,  121 => 18,  117 => 17,  111 => 13,  105 => 12,  99 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Exportar usuarios{% endblock %}

{% block body %}
    <h1>Usuarios:</h1>
    <ol>
        {% for user in users %}
            {% if user.email != \"root@gmail.com\" %}
                <li>{{ user.email }}</li>
            {% endif %}
        {% endfor %}
    </ol>
    <button class=\"btn btn-primary\" onClick=\"exportarCorreos();\">Exportar correos</button>
    <h1>Mensajes reportados:</h1>
    <ol>
        {% for mensajeReportado in mensajesReportados %}
            <li>{{ mensajeReportado.texto }} - {{ mensajeReportado.fechaEnvio|date(\"Y-m-d\") }}</li>
        {% endfor %}
    </ol>
    <button class=\"btn btn-primary\" onClick=\"exportarMensajesReportados();\">Exportar mensajes reportados</button>

    <h1>Vehículos reportados:</h1>
    <ol>
        {% for vehiculoReportado in vehiculosReportados %}
            <li>Marca: {{ vehiculoReportado.marca }} - Modelo: {{ vehiculoReportado.modelo }} - Propietario: {{ vehiculoReportado.propietario.email }}</li>
        {% endfor %}
    </ol>
    <button class=\"btn btn-primary\" onClick=\"exportarVehiculosReportados();\">Exportar vehiculos reportados</button>

    <script>
        function exportarCorreos() {

            function fail(data) {
                alert(\"Exportar correos fallido.\");
            }

            \$.ajax({
                type: \"GET\",
                url: \"/exportarUsuarios\",
                success: function(data)  { 
                    var blob = new Blob([data]); 
                    var link = document.createElement('a'); 
                    link.href = window.URL.createObjectURL(blob); 
                    link.download = \"correos.csv\"; 
                    link.click(); 
                },
                error: fail
            });
        }

        function exportarMensajesReportados() {

            function fail(data) {
                alert(\"Exportar correos fallido.\");
            }

            \$.ajax({
                type: \"GET\",
                url: \"/exportarMensajesReportados\",
                success: function(data)  { 
                    var blob = new Blob([data]); 
                    var link = document.createElement('a'); 
                    link.href = window.URL.createObjectURL(blob); 
                    link.download = \"correos.csv\"; 
                    link.click(); 
                },
                error: fail
            });
        }

        function exportarVehiculosReportados() {

            function fail(data) {
                alert(\"Exportar correos fallido.\");
            }

            \$.ajax({
                type: \"GET\",
                url: \"/exportarVehiculosReportados\",
                success: function(data)  { 
                    var blob = new Blob([data]); 
                    var link = document.createElement('a'); 
                    link.href = window.URL.createObjectURL(blob); 
                    link.download = \"correos.csv\"; 
                    link.click(); 
                },
                error: fail
            });
        }
    </script>
{% endblock %}", "main/mostrarUsuarios.html.twig", "/home/bayo/proyectos/ComunityCar/templates/main/mostrarUsuarios.html.twig");
    }
}
