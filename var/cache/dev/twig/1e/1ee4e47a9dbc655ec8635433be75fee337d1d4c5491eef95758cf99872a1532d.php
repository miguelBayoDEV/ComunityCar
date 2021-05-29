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
        echo "    <div class=\"row\">
        <div class=\"col-lg-12 col-md-0 col-sm-0 col-xs-0 mensaje\">
            <div class=\"row mt-5\">
                <div class=\"col-lg-12 col-md-0 col-sm-0 col-xs-0\">
                    <div class=\"text-center\">
                        <h2>Mensaje:</h2>
                        <p>Texto: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 12, $this->source); })()), "texto", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>

            <hr class=\"bg-dark\" />

            <div class=\"row mt-5\">
                <div class=\"col-lg-1 col-md-2 col-sm-0 col-xs-0\"></div>
                <div class=\"col-lg-10 col-md-8 col-sm-0 col-xs-0 d-flex justify-content-center\">
                    <button class=\"btn btn-info mr-3\"><a href=\"/respuesta/new/";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "html", null, true);
        echo "\"><img src=\"\" /></a></button>
                    ";
        // line 23
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 23, $this->source); })()), "reportado", [], "any", false, false, false, 23), true)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 24
            echo "                        <button class=\"btn btn-info mr-3\" onClick=\"eliminar(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 24, $this->source); })()), "vehiculoMessage", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
            echo ");\">Eliminar</button>
                    ";
        }
        // line 26
        echo "                    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 26, $this->source); })()), "oculto", [], "any", false, false, false, 26), false))) {
            // line 27
            echo "                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 27, $this->source); })()), "vehiculoMessage", [], "any", false, false, false, 27), "propietario", [], "any", false, false, false, 27), "email", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "email", [], "any", false, false, false, 27)))) {
                // line 28
                echo "                            <button class=\"btn btn-info mr-3\" onClick=\"comprar(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 28, $this->source); })()), "vehiculoMessage", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28), "html", null, true);
                echo ");\">Comprar</button>
                        ";
            }
            // line 30
            echo "                    ";
        }
        // line 31
        echo "
                    ";
        // line 32
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 32, $this->source); })()), "reportado", [], "any", false, false, false, 32), false))) {
            // line 33
            echo "                        <button class=\"btn btn-info mr-3\" onClick=\"reportar(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "html", null, true);
            echo ");\">Reportar</button>
                    ";
        }
        // line 35
        echo "                </div>
                <div class=\"col-lg-1 col-md-2 col-sm-0 col-xs-0\"></div>
            </div>

            <div class=\"row mt-5\">
                <div class=\"col-lg-6 col-md-2 col-sm-0 col-xs-0\">
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 41, $this->source); })()), "respuestas", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["respuesta"]) {
            // line 42
            echo "                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "email", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 42)))) {
                // line 43
                echo "                            <div class=\"text-left d-flex mb-3\">
                                ";
                // line 44
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["emisor"]) || array_key_exists("emisor", $context) ? $context["emisor"] : (function () { throw new RuntimeError('Variable "emisor" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 44)))) {
                    // line 45
                    echo "                                    ";
                    if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["emisor"]) || array_key_exists("emisor", $context) ? $context["emisor"] : (function () { throw new RuntimeError('Variable "emisor" does not exist.', 45, $this->source); })()), "avatar", [], "any", false, false, false, 45), null))) {
                        // line 46
                        echo "                                        <img src=\"/avatar/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["emisor"]) || array_key_exists("emisor", $context) ? $context["emisor"] : (function () { throw new RuntimeError('Variable "emisor" does not exist.', 46, $this->source); })()), "avatar", [], "any", false, false, false, 46), "html", null, true);
                        echo "\" width=\"70px\" height=\"70px\" class=\"round\" />
                                    ";
                    }
                    // line 48
                    echo "                                ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["receptor"]) || array_key_exists("receptor", $context) ? $context["receptor"] : (function () { throw new RuntimeError('Variable "receptor" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 48)))) {
                    // line 49
                    echo "                                    ";
                    if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["receptor"]) || array_key_exists("receptor", $context) ? $context["receptor"] : (function () { throw new RuntimeError('Variable "receptor" does not exist.', 49, $this->source); })()), "avatar", [], "any", false, false, false, 49), null))) {
                        // line 50
                        echo "                                        <img src=\"/avatar/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["receptor"]) || array_key_exists("receptor", $context) ? $context["receptor"] : (function () { throw new RuntimeError('Variable "receptor" does not exist.', 50, $this->source); })()), "avatar", [], "any", false, false, false, 50), "html", null, true);
                        echo "\" width=\"70px\" height=\"70px\" class=\"round\" />
                                    ";
                    }
                    // line 52
                    echo "                                ";
                }
                // line 53
                echo "                                <div class=\"d-flex flex-column border border-dark bg-white ml-2 p-2\">
                                    <div>
                                        ";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["respuesta"], "texto", [], "any", false, false, false, 55), "html", null, true);
                echo "
                                    </div>
                                    <div>
                                        ";
                // line 58
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["respuesta"], "fecha", [], "any", false, false, false, 58), "Y-m-d"), "html", null, true);
                echo "
                                        ";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 59), "html", null, true);
                echo "
                                    </div>
                                </div>
                            </div>
                        ";
            } elseif ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 63
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "email", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 63)))) {
                // line 64
                echo "                            <div class=\"text-right d-flex\">
                                ";
                // line 65
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["emisor"]) || array_key_exists("emisor", $context) ? $context["emisor"] : (function () { throw new RuntimeError('Variable "emisor" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 65)))) {
                    // line 66
                    echo "                                    ";
                    if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["emisor"]) || array_key_exists("emisor", $context) ? $context["emisor"] : (function () { throw new RuntimeError('Variable "emisor" does not exist.', 66, $this->source); })()), "avatar", [], "any", false, false, false, 66), null))) {
                        // line 67
                        echo "                                        <img src=\"/avatar/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["emisor"]) || array_key_exists("emisor", $context) ? $context["emisor"] : (function () { throw new RuntimeError('Variable "emisor" does not exist.', 67, $this->source); })()), "avatar", [], "any", false, false, false, 67), "html", null, true);
                        echo "\" width=\"70px\" height=\"70px\" class=\"round\" />
                                    ";
                    }
                    // line 69
                    echo "                                ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["emisor"]) || array_key_exists("emisor", $context) ? $context["emisor"] : (function () { throw new RuntimeError('Variable "emisor" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 69)))) {
                    // line 70
                    echo "                                    ";
                    if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["receptor"]) || array_key_exists("receptor", $context) ? $context["receptor"] : (function () { throw new RuntimeError('Variable "receptor" does not exist.', 70, $this->source); })()), "avatar", [], "any", false, false, false, 70), null))) {
                        // line 71
                        echo "                                        <img src=\"/avatar/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["receptor"]) || array_key_exists("receptor", $context) ? $context["receptor"] : (function () { throw new RuntimeError('Variable "receptor" does not exist.', 71, $this->source); })()), "avatar", [], "any", false, false, false, 71), "html", null, true);
                        echo "\" width=\"70px\" height=\"70px\" class=\"round\" />
                                    ";
                    }
                    // line 73
                    echo "                                ";
                }
                // line 74
                echo "                                <div class=\"d-flex flex-column border border-dark bg-success ml-2 p-2\">
                                    <div>
                                        ";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["respuesta"], "texto", [], "any", false, false, false, 76), "html", null, true);
                echo "
                                    </div>
                                    <div>
                                        ";
                // line 79
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["respuesta"], "fecha", [], "any", false, false, false, 79), "Y-m-d"), "html", null, true);
                echo "
                                        ";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 80), "html", null, true);
                echo "
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 85
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['respuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                </div>
            </div>
        </div>
    </div>

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
        return array (  275 => 86,  269 => 85,  261 => 80,  257 => 79,  251 => 76,  247 => 74,  244 => 73,  238 => 71,  235 => 70,  232 => 69,  226 => 67,  223 => 66,  221 => 65,  218 => 64,  216 => 63,  209 => 59,  205 => 58,  199 => 55,  195 => 53,  192 => 52,  186 => 50,  183 => 49,  180 => 48,  174 => 46,  171 => 45,  169 => 44,  166 => 43,  163 => 42,  159 => 41,  151 => 35,  145 => 33,  143 => 32,  140 => 31,  137 => 30,  129 => 28,  126 => 27,  123 => 26,  115 => 24,  113 => 23,  109 => 22,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Respuestas Correo{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-0 col-sm-0 col-xs-0 mensaje\">
            <div class=\"row mt-5\">
                <div class=\"col-lg-12 col-md-0 col-sm-0 col-xs-0\">
                    <div class=\"text-center\">
                        <h2>Mensaje:</h2>
                        <p>Texto: {{message.texto}}</p>
                    </div>
                </div>
            </div>

            <hr class=\"bg-dark\" />

            <div class=\"row mt-5\">
                <div class=\"col-lg-1 col-md-2 col-sm-0 col-xs-0\"></div>
                <div class=\"col-lg-10 col-md-8 col-sm-0 col-xs-0 d-flex justify-content-center\">
                    <button class=\"btn btn-info mr-3\"><a href=\"/respuesta/new/{{ message.id }}\"><img src=\"\" /></a></button>
                    {% if message.reportado == true and is_granted(\"ROLE_ADMIN\") %}
                        <button class=\"btn btn-info mr-3\" onClick=\"eliminar({{ message.id }}, {{message.vehiculoMessage.id}});\">Eliminar</button>
                    {% endif %}
                    {% if message.oculto == false %}
                        {% if message.vehiculoMessage.propietario.email == app.user.email %}
                            <button class=\"btn btn-info mr-3\" onClick=\"comprar({{ message.id }}, {{message.vehiculoMessage.id}});\">Comprar</button>
                        {% endif %}
                    {% endif %}

                    {% if message.reportado == false %}
                        <button class=\"btn btn-info mr-3\" onClick=\"reportar({{ message.id }});\">Reportar</button>
                    {% endif %}
                </div>
                <div class=\"col-lg-1 col-md-2 col-sm-0 col-xs-0\"></div>
            </div>

            <div class=\"row mt-5\">
                <div class=\"col-lg-6 col-md-2 col-sm-0 col-xs-0\">
                    {% for respuesta in message.respuestas %}
                        {% if app.user.email == respuesta.autor %}
                            <div class=\"text-left d-flex mb-3\">
                                {% if emisor.email == respuesta.autor %}
                                    {% if emisor.avatar != null %}
                                        <img src=\"/avatar/{{ emisor.avatar }}\" width=\"70px\" height=\"70px\" class=\"round\" />
                                    {% endif %}
                                {% elseif receptor.email == respuesta.autor %}
                                    {% if receptor.avatar != null %}
                                        <img src=\"/avatar/{{ receptor.avatar }}\" width=\"70px\" height=\"70px\" class=\"round\" />
                                    {% endif %}
                                {% endif %}
                                <div class=\"d-flex flex-column border border-dark bg-white ml-2 p-2\">
                                    <div>
                                        {{ respuesta.texto }}
                                    </div>
                                    <div>
                                        {{ respuesta.fecha|date(\"Y-m-d\") }}
                                        {{ respuesta.autor }}
                                    </div>
                                </div>
                            </div>
                        {% elseif app.user.email != respuesta.autor  %}
                            <div class=\"text-right d-flex\">
                                {% if emisor.email == respuesta.autor %}
                                    {% if emisor.avatar != null %}
                                        <img src=\"/avatar/{{ emisor.avatar }}\" width=\"70px\" height=\"70px\" class=\"round\" />
                                    {% endif %}
                                {% elseif emisor.email == respuesta.autor %}
                                    {% if receptor.avatar != null %}
                                        <img src=\"/avatar/{{ receptor.avatar }}\" width=\"70px\" height=\"70px\" class=\"round\" />
                                    {% endif %}
                                {% endif %}
                                <div class=\"d-flex flex-column border border-dark bg-success ml-2 p-2\">
                                    <div>
                                        {{ respuesta.texto }}
                                    </div>
                                    <div>
                                        {{ respuesta.fecha|date(\"Y-m-d\") }}
                                        {{ respuesta.autor }}
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>

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

{% endblock %}", "main/respuestasCorreo.html.twig", "/home/miguel/Escritorio/ComunityCar/templates/main/respuestasCorreo.html.twig");
    }
}
