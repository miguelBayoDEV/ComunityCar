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

/* main/respuestasCorreo.html.twig */
class __TwigTemplate_080790bb487e38962b17c78bb79987e86ae489e92dd5eda1b647b821213dd7d7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/respuestasCorreo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/respuestasCorreo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/respuestasCorreo.html.twig", 1);
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

        echo "Respuestas Correo";
        
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 6, $this->source); })()), "respuestas", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["respuesta"]) {
            // line 7
            echo "        <div>
            ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["respuesta"], "texto", [], "any", false, false, false, 8), "html", null, true);
            echo "
            ";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["respuesta"], "fecha", [], "any", false, false, false, 9), "Y-m-d"), "html", null, true);
            echo "
            ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 10), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['respuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    <button><a href=\"/respuesta/new/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "\">Responder</a></button>
    ";
        // line 15
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 15, $this->source); })()), "reportado", [], "any", false, false, false, 15), true)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 16
            echo "        <button onClick=\"eliminar(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 16, $this->source); })()), "vehiculoMessage", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16), "html", null, true);
            echo ");\">Eliminar</button>
    ";
        }
        // line 18
        echo "    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 18, $this->source); })()), "oculto", [], "any", false, false, false, 18), false))) {
            // line 19
            echo "        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 19, $this->source); })()), "vehiculoMessage", [], "any", false, false, false, 19), "propietario", [], "any", false, false, false, 19), "email", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "email", [], "any", false, false, false, 19)))) {
                // line 20
                echo "            <button onClick=\"comprar(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 20, $this->source); })()), "vehiculoMessage", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "html", null, true);
                echo ");\">Comprar</button>
        ";
            }
            // line 22
            echo "    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 24, $this->source); })()), "reportado", [], "any", false, false, false, 24), false))) {
            // line 25
            echo "        <button onClick=\"reportar(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
            echo ");\">Reportar</button>
    ";
        }
        // line 27
        echo "
    <script>
        function reportar(message) {

            function fail(data) {
                alert(\"Error de AJAX: \" + data);
            }

            \$.ajax({
                type: \"GET\",
                url: \"/reportarMensajeVehiculo\",
                data: {'mensaje':message},
                success: function(data) {
                    if(data == \"1\") {
                        alert(\"Mensaje reportado correctamente.\");
                        window.location.reload();
                    }
                },
                error: fail
            });
        }

        function eliminar(message, vehicle) {

            var datos = {
                'mensaje':message,
                'vehiculo':vehicle
            };

            function fail(data) {
                alert(\"Error de AJAX: \" + data);
            }

            \$.ajax({
                type: \"GET\",
                url: \"/eliminarMensajeVehiculo\",
                data: datos,
                success: function(data) {
                    if(data == \"1\") {
                        alert(\"Mensaje y vehículo eliminados correctamente debido a que se ha comprobado el reporte.\");
                        window.location.reload();
                    }
                },
                error: fail
            });
        }

        function comprar(message, vehicle) {

            var datos = {
                'mensaje':message,
                'vehiculo':vehicle
            };

            function fail(data) {
                alert(\"Error de AJAX: \" + data);
            }

            \$.ajax({
                type: \"GET\",
                url: \"/comprarVehiculo\",
                data: datos,
                success: function(data) {
                    if(data == \"1\") {
                        alert(\"Vehiculo comprado correctamente y mensajes ocultados junto al buscador.\");
                        window.location.reload();
                    }
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
        return "main/respuestasCorreo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 27,  152 => 25,  150 => 24,  147 => 23,  144 => 22,  136 => 20,  133 => 19,  130 => 18,  122 => 16,  120 => 15,  116 => 14,  113 => 13,  104 => 10,  100 => 9,  96 => 8,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Respuestas Correo{% endblock %}

{% block body %}
    {% for respuesta in message.respuestas %}
        <div>
            {{ respuesta.texto }}
            {{ respuesta.fecha|date(\"Y-m-d\") }}
            {{ respuesta.autor }}
        </div>
    {% endfor %}

    <button><a href=\"/respuesta/new/{{ message.id }}\">Responder</a></button>
    {% if message.reportado == true and is_granted(\"ROLE_ADMIN\") %}
        <button onClick=\"eliminar({{ message.id }}, {{message.vehiculoMessage.id}});\">Eliminar</button>
    {% endif %}
    {% if message.oculto == false %}
        {% if message.vehiculoMessage.propietario.email == app.user.email %}
            <button onClick=\"comprar({{ message.id }}, {{message.vehiculoMessage.id}});\">Comprar</button>
        {% endif %}
    {% endif %}

    {% if message.reportado == false %}
        <button onClick=\"reportar({{ message.id }});\">Reportar</button>
    {% endif %}

    <script>
        function reportar(message) {

            function fail(data) {
                alert(\"Error de AJAX: \" + data);
            }

            \$.ajax({
                type: \"GET\",
                url: \"/reportarMensajeVehiculo\",
                data: {'mensaje':message},
                success: function(data) {
                    if(data == \"1\") {
                        alert(\"Mensaje reportado correctamente.\");
                        window.location.reload();
                    }
                },
                error: fail
            });
        }

        function eliminar(message, vehicle) {

            var datos = {
                'mensaje':message,
                'vehiculo':vehicle
            };

            function fail(data) {
                alert(\"Error de AJAX: \" + data);
            }

            \$.ajax({
                type: \"GET\",
                url: \"/eliminarMensajeVehiculo\",
                data: datos,
                success: function(data) {
                    if(data == \"1\") {
                        alert(\"Mensaje y vehículo eliminados correctamente debido a que se ha comprobado el reporte.\");
                        window.location.reload();
                    }
                },
                error: fail
            });
        }

        function comprar(message, vehicle) {

            var datos = {
                'mensaje':message,
                'vehiculo':vehicle
            };

            function fail(data) {
                alert(\"Error de AJAX: \" + data);
            }

            \$.ajax({
                type: \"GET\",
                url: \"/comprarVehiculo\",
                data: datos,
                success: function(data) {
                    if(data == \"1\") {
                        alert(\"Vehiculo comprado correctamente y mensajes ocultados junto al buscador.\");
                        window.location.reload();
                    }
                },
                error: fail
            });
        }
    </script>

{% endblock %}", "main/respuestasCorreo.html.twig", "/home/bayo/proyectos/ComunityCar/templates/main/respuestasCorreo.html.twig");
    }
}
