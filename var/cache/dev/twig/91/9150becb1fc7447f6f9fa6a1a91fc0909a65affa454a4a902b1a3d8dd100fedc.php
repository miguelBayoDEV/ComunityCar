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
        echo "    <div class=\"row d-flex justify-content-center mt-5 mb-5 exportar\">
        <div class=\"col-lg-6 col-md-2 col-sm-0 col-xs-0\">
            <h3 class=\"pb-5 text-center\">Exportación de datos:</h3>
            <div class=\"d-flex align-items-start\">
                <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                    <a class=\"nav-link active\" id=\"v-pills-usuarios-tab\" data-toggle=\"pill\" href=\"#v-pills-usuarios\" role=\"tab\" aria-controls=\"v-pills-usuarios\" aria-selected=\"true\">Usuarios</a>
                    <a class=\"nav-link\" id=\"v-pills-mensajesReportados-tab\" data-toggle=\"pill\" href=\"#v-pills-mensajesReportados\" role=\"tab\" aria-controls=\"v-pills-mensajesReportados\" aria-selected=\"false\">Mensajes reportados</a>
                    <a class=\"nav-link\" id=\"v-pills-vehiculosReportados-tab\" data-toggle=\"pill\" href=\"#v-pills-vehiculosReportados\" role=\"tab\" aria-controls=\"v-pills-vehiculosReportados\" aria-selected=\"true\">Vehiculos reportados</a>
                </div>
                <div class=\"tab-content pildora-content pl-4\" id=\"v-pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"v-pills-usuarios\" role=\"tabpanel\" aria-labelledby=\"v-pills-usuarios-tab\">
                        <div class=\"usuarios pildora-border pl-1 pt-1 pr-2 text-dark d-flex justify-content-between\">
                            <ol>
                                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "                                    ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 20), "root@gmail.com"))) {
                // line 21
                echo "                                        <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 21), "html", null, true);
                echo "</li>
                                    ";
            }
            // line 23
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                            </ol>
                            <button class=\"btn btn-primary d-flex align-self-center\" onClick=\"exportarCorreos();\">Exportar correos</button>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-mensajesReportados\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesReportados-tab\">
                        <div class=\"mensajesReportados pildora-border pl-1 pt-1 pr-2 text-dark d-flex justify-content-between\">
                            <ol>
                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mensajesReportados"]) || array_key_exists("mensajesReportados", $context) ? $context["mensajesReportados"] : (function () { throw new RuntimeError('Variable "mensajesReportados" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mensajeReportado"]) {
            // line 32
            echo "                                    <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mensajeReportado"], "texto", [], "any", false, false, false, 32), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mensajeReportado"], "fechaEnvio", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensajeReportado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                            </ol>
                            <button class=\"btn btn-primary d-flex align-self-center\" onClick=\"exportarMensajesReportados();\">Exportar mensajes reportados</button>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-vehiculosReportados\" role=\"tabpanel\" aria-labelledby=\"v-pills-vehiculosReportados-tab\">
                        <div class=\"vehiculosReportados pildora-border pl-1 pt-1 pr-2 text-dark d-flex justify-content-between\">
                            <ol>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehiculosReportados"]) || array_key_exists("vehiculosReportados", $context) ? $context["vehiculosReportados"] : (function () { throw new RuntimeError('Variable "vehiculosReportados" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehiculoReportado"]) {
            // line 42
            echo "                                    <li>Marca: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculoReportado"], "marca", [], "any", false, false, false, 42), "html", null, true);
            echo " - Modelo: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculoReportado"], "modelo", [], "any", false, false, false, 42), "html", null, true);
            echo " - Propietario: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehiculoReportado"], "propietario", [], "any", false, false, false, 42), "email", [], "any", false, false, false, 42), "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehiculoReportado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                            </ol>
                            <button class=\"btn btn-primary d-flex align-self-center\" onClick=\"exportarVehiculosReportados();\">Exportar vehiculos reportados</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        return array (  172 => 44,  159 => 42,  155 => 41,  146 => 34,  135 => 32,  131 => 31,  122 => 24,  116 => 23,  110 => 21,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Exportar usuarios{% endblock %}

{% block body %}
    <div class=\"row d-flex justify-content-center mt-5 mb-5 exportar\">
        <div class=\"col-lg-6 col-md-2 col-sm-0 col-xs-0\">
            <h3 class=\"pb-5 text-center\">Exportación de datos:</h3>
            <div class=\"d-flex align-items-start\">
                <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                    <a class=\"nav-link active\" id=\"v-pills-usuarios-tab\" data-toggle=\"pill\" href=\"#v-pills-usuarios\" role=\"tab\" aria-controls=\"v-pills-usuarios\" aria-selected=\"true\">Usuarios</a>
                    <a class=\"nav-link\" id=\"v-pills-mensajesReportados-tab\" data-toggle=\"pill\" href=\"#v-pills-mensajesReportados\" role=\"tab\" aria-controls=\"v-pills-mensajesReportados\" aria-selected=\"false\">Mensajes reportados</a>
                    <a class=\"nav-link\" id=\"v-pills-vehiculosReportados-tab\" data-toggle=\"pill\" href=\"#v-pills-vehiculosReportados\" role=\"tab\" aria-controls=\"v-pills-vehiculosReportados\" aria-selected=\"true\">Vehiculos reportados</a>
                </div>
                <div class=\"tab-content pildora-content pl-4\" id=\"v-pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"v-pills-usuarios\" role=\"tabpanel\" aria-labelledby=\"v-pills-usuarios-tab\">
                        <div class=\"usuarios pildora-border pl-1 pt-1 pr-2 text-dark d-flex justify-content-between\">
                            <ol>
                                {% for user in users %}
                                    {% if user.email != \"root@gmail.com\" %}
                                        <li>{{ user.email }}</li>
                                    {% endif %}
                                {% endfor %}
                            </ol>
                            <button class=\"btn btn-primary d-flex align-self-center\" onClick=\"exportarCorreos();\">Exportar correos</button>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-mensajesReportados\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesReportados-tab\">
                        <div class=\"mensajesReportados pildora-border pl-1 pt-1 pr-2 text-dark d-flex justify-content-between\">
                            <ol>
                                {% for mensajeReportado in mensajesReportados %}
                                    <li>{{ mensajeReportado.texto }} - {{ mensajeReportado.fechaEnvio|date(\"Y-m-d\") }}</li>
                                {% endfor %}
                            </ol>
                            <button class=\"btn btn-primary d-flex align-self-center\" onClick=\"exportarMensajesReportados();\">Exportar mensajes reportados</button>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-vehiculosReportados\" role=\"tabpanel\" aria-labelledby=\"v-pills-vehiculosReportados-tab\">
                        <div class=\"vehiculosReportados pildora-border pl-1 pt-1 pr-2 text-dark d-flex justify-content-between\">
                            <ol>
                                {% for vehiculoReportado in vehiculosReportados %}
                                    <li>Marca: {{ vehiculoReportado.marca }} - Modelo: {{ vehiculoReportado.modelo }} - Propietario: {{ vehiculoReportado.propietario.email }}</li>
                                {% endfor %}
                            </ol>
                            <button class=\"btn btn-primary d-flex align-self-center\" onClick=\"exportarVehiculosReportados();\">Exportar vehiculos reportados</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
{% endblock %}", "main/mostrarUsuarios.html.twig", "/home/miguel/Escritorio/ComunityCar/templates/main/mostrarUsuarios.html.twig");
    }
}
