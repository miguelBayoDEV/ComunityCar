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
        echo "
<div class=\"d-flex align-items-start\">
  <div class=\"nav flex-column nav-pills me-3\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
    <button class=\"nav-link active\" id=\"v-pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-home\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">Home</button>
    <button class=\"nav-link\" id=\"v-pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Profile</button>
    <button class=\"nav-link\" id=\"v-pills-messages-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-messages\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">Messages</button>
    <button class=\"nav-link\" id=\"v-pills-settings-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-settings\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Settings</button>
  </div>
  <div class=\"tab-content\" id=\"v-pills-tabContent\">
    <div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">...</div>
    <div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\">...</div>
    <div class=\"tab-pane fade\" id=\"v-pills-messages\" role=\"tabpanel\" aria-labelledby=\"v-pills-messages-tab\">...</div>
    <div class=\"tab-pane fade\" id=\"v-pills-settings\" role=\"tabpanel\" aria-labelledby=\"v-pills-settings-tab\">...</div>
  </div>
</div>


    <h1>Usuarios:</h1>
    <ol>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 26), "root@gmail.com"))) {
                // line 27
                echo "                <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 27), "html", null, true);
                echo "</li>
            ";
            }
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ol>
    <button class=\"btn btn-primary\" onClick=\"exportarCorreos();\">Exportar correos</button>
    <h1>Mensajes reportados:</h1>
    <ol>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mensajesReportados"]) || array_key_exists("mensajesReportados", $context) ? $context["mensajesReportados"] : (function () { throw new RuntimeError('Variable "mensajesReportados" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mensajeReportado"]) {
            // line 35
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mensajeReportado"], "texto", [], "any", false, false, false, 35), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mensajeReportado"], "fechaEnvio", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensajeReportado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </ol>
    <button class=\"btn btn-primary\" onClick=\"exportarMensajesReportados();\">Exportar mensajes reportados</button>

    <h1>Vehículos reportados:</h1>
    <ol>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehiculosReportados"]) || array_key_exists("vehiculosReportados", $context) ? $context["vehiculosReportados"] : (function () { throw new RuntimeError('Variable "vehiculosReportados" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehiculoReportado"]) {
            // line 43
            echo "            <li>Marca: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculoReportado"], "marca", [], "any", false, false, false, 43), "html", null, true);
            echo " - Modelo: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculoReportado"], "modelo", [], "any", false, false, false, 43), "html", null, true);
            echo " - Propietario: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehiculoReportado"], "propietario", [], "any", false, false, false, 43), "email", [], "any", false, false, false, 43), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehiculoReportado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
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
        return array (  173 => 45,  160 => 43,  156 => 42,  149 => 37,  138 => 35,  134 => 34,  128 => 30,  122 => 29,  116 => 27,  113 => 26,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Exportar usuarios{% endblock %}

{% block body %}

<div class=\"d-flex align-items-start\">
  <div class=\"nav flex-column nav-pills me-3\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
    <button class=\"nav-link active\" id=\"v-pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-home\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">Home</button>
    <button class=\"nav-link\" id=\"v-pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Profile</button>
    <button class=\"nav-link\" id=\"v-pills-messages-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-messages\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">Messages</button>
    <button class=\"nav-link\" id=\"v-pills-settings-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-settings\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Settings</button>
  </div>
  <div class=\"tab-content\" id=\"v-pills-tabContent\">
    <div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">...</div>
    <div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\">...</div>
    <div class=\"tab-pane fade\" id=\"v-pills-messages\" role=\"tabpanel\" aria-labelledby=\"v-pills-messages-tab\">...</div>
    <div class=\"tab-pane fade\" id=\"v-pills-settings\" role=\"tabpanel\" aria-labelledby=\"v-pills-settings-tab\">...</div>
  </div>
</div>


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
