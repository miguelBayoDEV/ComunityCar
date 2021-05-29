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
                    <a class=\"mr-3\" href=\"/respuesta/new/";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "html", null, true);
        echo "\"><img src=\"/comunes/icon/mensaje-de-respuesta.png\" width=\"50px\" height=\"50px\" /></a>
                    ";
        // line 23
        if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 23, $this->source); })()), "reportado", [], "any", false, false, false, 23), true)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 23, $this->source); })()), "vehiculoMessage", [], "any", false, false, false, 23), "eliminado", [], "any", false, false, false, 23), true)))) {
            // line 24
            echo "                        <img src=\"/comunes/icon/basura.png\" class=\"mr-3\" onClick=\"eliminar(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 24, $this->source); })()), "vehiculoMessage", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
            echo ");\" width=\"50px\" height=\"50px\" />
                    ";
        }
        // line 26
        echo "                    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 26, $this->source); })()), "oculto", [], "any", false, false, false, 26), false))) {
            // line 27
            echo "                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 27, $this->source); })()), "vehiculoMessage", [], "any", false, false, false, 27), "propietario", [], "any", false, false, false, 27), "email", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "email", [], "any", false, false, false, 27)))) {
                // line 28
                echo "                            <img src=\"/comunes/icon/metodo-de-pago.png\" class=\"mr-3\" onClick=\"comprar(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 28, $this->source); })()), "vehiculoMessage", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28), "html", null, true);
                echo ");\" width=\"50px\" height=\"50px\" />
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
            echo "                        <img src=\"/comunes/icon/notificacion.png\" class=\"mr-3\" onClick=\"reportar(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "html", null, true);
            echo ");\" width=\"50px\" height=\"50px\" />
                    ";
        }
        // line 35
        echo "                </div>
                <div class=\"col-lg-1 col-md-2 col-sm-0 col-xs-0\"></div>
            </div>

            <div class=\"row mt-5\">
                <div class=\"col-lg-12 col-md-0 col-sm-0 col-xs-0\">
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 41, $this->source); })()), "respuestas", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["respuesta"]) {
            // line 42
            echo "                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "email", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 42)))) {
                // line 43
                echo "                            <div class=\"d-flex justify-content-start mb-3\">
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
                    } else {
                        // line 48
                        echo "                                        <img src=\"/comunes/icon/avatar.png\" width=\"70px\" height=\"70px\" />
                                    ";
                    }
                    // line 50
                    echo "                                ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["receptor"]) || array_key_exists("receptor", $context) ? $context["receptor"] : (function () { throw new RuntimeError('Variable "receptor" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 50)))) {
                    // line 51
                    echo "                                    ";
                    if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["receptor"]) || array_key_exists("receptor", $context) ? $context["receptor"] : (function () { throw new RuntimeError('Variable "receptor" does not exist.', 51, $this->source); })()), "avatar", [], "any", false, false, false, 51), null))) {
                        // line 52
                        echo "                                        <img src=\"/avatar/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["receptor"]) || array_key_exists("receptor", $context) ? $context["receptor"] : (function () { throw new RuntimeError('Variable "receptor" does not exist.', 52, $this->source); })()), "avatar", [], "any", false, false, false, 52), "html", null, true);
                        echo "\" width=\"70px\" height=\"70px\" class=\"round\" />
                                    ";
                    } else {
                        // line 54
                        echo "                                        <img src=\"/comunes/icon/avatar.png\" width=\"70px\" height=\"70px\" />
                                    ";
                    }
                    // line 56
                    echo "                                ";
                }
                // line 57
                echo "                                <div class=\"d-flex flex-column border border-dark bg-white ml-2 p-2 border-message1\">
                                    <div class=\"d-flex justify-content-start\">
                                        <p>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["respuesta"], "texto", [], "any", false, false, false, 59), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"d-flex justify-content-around\">
                                        <p>";
                // line 62
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["respuesta"], "fecha", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true);
                echo "</p>
                                        <p>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 63), "html", null, true);
                echo "</p>
                                    </div>
                                </div>
                            </div>
                        ";
            } elseif ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 67
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "email", [], "any", false, false, false, 67), twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 67)))) {
                // line 68
                echo "                            <div class=\"d-flex justify-content-end mb-3\">
                                ";
                // line 69
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["emisor"]) || array_key_exists("emisor", $context) ? $context["emisor"] : (function () { throw new RuntimeError('Variable "emisor" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 69)))) {
                    // line 70
                    echo "                                    ";
                    if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["emisor"]) || array_key_exists("emisor", $context) ? $context["emisor"] : (function () { throw new RuntimeError('Variable "emisor" does not exist.', 70, $this->source); })()), "avatar", [], "any", false, false, false, 70), null))) {
                        // line 71
                        echo "                                        <img src=\"/avatar/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["emisor"]) || array_key_exists("emisor", $context) ? $context["emisor"] : (function () { throw new RuntimeError('Variable "emisor" does not exist.', 71, $this->source); })()), "avatar", [], "any", false, false, false, 71), "html", null, true);
                        echo "\" width=\"70px\" height=\"70px\" class=\"round\" />
                                    ";
                    } else {
                        // line 73
                        echo "                                        <img src=\"/comunes/icon/avatar.png\" width=\"70px\" height=\"70px\" />
                                    ";
                    }
                    // line 75
                    echo "                                ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["receptor"]) || array_key_exists("receptor", $context) ? $context["receptor"] : (function () { throw new RuntimeError('Variable "receptor" does not exist.', 75, $this->source); })()), "email", [], "any", false, false, false, 75), twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 75)))) {
                    // line 76
                    echo "                                    ";
                    if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["receptor"]) || array_key_exists("receptor", $context) ? $context["receptor"] : (function () { throw new RuntimeError('Variable "receptor" does not exist.', 76, $this->source); })()), "avatar", [], "any", false, false, false, 76), null))) {
                        // line 77
                        echo "                                        <img src=\"/avatar/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["receptor"]) || array_key_exists("receptor", $context) ? $context["receptor"] : (function () { throw new RuntimeError('Variable "receptor" does not exist.', 77, $this->source); })()), "avatar", [], "any", false, false, false, 77), "html", null, true);
                        echo "\" width=\"70px\" height=\"70px\" class=\"round\" />
                                    ";
                    } else {
                        // line 79
                        echo "                                        <img src=\"/comunes/icon/avatar.png\" width=\"70px\" height=\"70px\" />
                                    ";
                    }
                    // line 81
                    echo "                                ";
                }
                // line 82
                echo "                                <div class=\"d-flex flex-column border border-dark bg-success ml-2 p-2 border-message2\">
                                    <div class=\"d-flex justify-content-start\">
                                        <p>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["respuesta"], "texto", [], "any", false, false, false, 84), "html", null, true);
                echo "</p>
                                    </div>
                                    <div class=\"d-flex justify-content-around\">
                                        <p>";
                // line 87
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["respuesta"], "fecha", [], "any", false, false, false, 87), "Y-m-d"), "html", null, true);
                echo "</p>
                                        <p>";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["respuesta"], "autor", [], "any", false, false, false, 88), "html", null, true);
                echo "</p>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 93
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['respuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
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
        return array (  291 => 94,  285 => 93,  277 => 88,  273 => 87,  267 => 84,  263 => 82,  260 => 81,  256 => 79,  250 => 77,  247 => 76,  244 => 75,  240 => 73,  234 => 71,  231 => 70,  229 => 69,  226 => 68,  224 => 67,  217 => 63,  213 => 62,  207 => 59,  203 => 57,  200 => 56,  196 => 54,  190 => 52,  187 => 51,  184 => 50,  180 => 48,  174 => 46,  171 => 45,  169 => 44,  166 => 43,  163 => 42,  159 => 41,  151 => 35,  145 => 33,  143 => 32,  140 => 31,  137 => 30,  129 => 28,  126 => 27,  123 => 26,  115 => 24,  113 => 23,  109 => 22,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                    <a class=\"mr-3\" href=\"/respuesta/new/{{ message.id }}\"><img src=\"/comunes/icon/mensaje-de-respuesta.png\" width=\"50px\" height=\"50px\" /></a>
                    {% if message.reportado == true and is_granted(\"ROLE_ADMIN\") and message.vehiculoMessage.eliminado != true %}
                        <img src=\"/comunes/icon/basura.png\" class=\"mr-3\" onClick=\"eliminar({{ message.id }}, {{message.vehiculoMessage.id}});\" width=\"50px\" height=\"50px\" />
                    {% endif %}
                    {% if message.oculto == false %}
                        {% if message.vehiculoMessage.propietario.email == app.user.email %}
                            <img src=\"/comunes/icon/metodo-de-pago.png\" class=\"mr-3\" onClick=\"comprar({{ message.id }}, {{message.vehiculoMessage.id}});\" width=\"50px\" height=\"50px\" />
                        {% endif %}
                    {% endif %}

                    {% if message.reportado == false %}
                        <img src=\"/comunes/icon/notificacion.png\" class=\"mr-3\" onClick=\"reportar({{ message.id }});\" width=\"50px\" height=\"50px\" />
                    {% endif %}
                </div>
                <div class=\"col-lg-1 col-md-2 col-sm-0 col-xs-0\"></div>
            </div>

            <div class=\"row mt-5\">
                <div class=\"col-lg-12 col-md-0 col-sm-0 col-xs-0\">
                    {% for respuesta in message.respuestas %}
                        {% if app.user.email == respuesta.autor %}
                            <div class=\"d-flex justify-content-start mb-3\">
                                {% if emisor.email == respuesta.autor %}
                                    {% if emisor.avatar != null %}
                                        <img src=\"/avatar/{{ emisor.avatar }}\" width=\"70px\" height=\"70px\" class=\"round\" />
                                    {% else %}
                                        <img src=\"/comunes/icon/avatar.png\" width=\"70px\" height=\"70px\" />
                                    {% endif %}
                                {% elseif receptor.email == respuesta.autor %}
                                    {% if receptor.avatar != null %}
                                        <img src=\"/avatar/{{ receptor.avatar }}\" width=\"70px\" height=\"70px\" class=\"round\" />
                                    {% else %}
                                        <img src=\"/comunes/icon/avatar.png\" width=\"70px\" height=\"70px\" />
                                    {% endif %}
                                {% endif %}
                                <div class=\"d-flex flex-column border border-dark bg-white ml-2 p-2 border-message1\">
                                    <div class=\"d-flex justify-content-start\">
                                        <p>{{ respuesta.texto }}</p>
                                    </div>
                                    <div class=\"d-flex justify-content-around\">
                                        <p>{{ respuesta.fecha|date(\"Y-m-d\") }}</p>
                                        <p>{{ respuesta.autor }}</p>
                                    </div>
                                </div>
                            </div>
                        {% elseif app.user.email != respuesta.autor  %}
                            <div class=\"d-flex justify-content-end mb-3\">
                                {% if emisor.email == respuesta.autor %}
                                    {% if emisor.avatar != null %}
                                        <img src=\"/avatar/{{ emisor.avatar }}\" width=\"70px\" height=\"70px\" class=\"round\" />
                                    {% else %}
                                        <img src=\"/comunes/icon/avatar.png\" width=\"70px\" height=\"70px\" />
                                    {% endif %}
                                {% elseif receptor.email == respuesta.autor %}
                                    {% if receptor.avatar != null %}
                                        <img src=\"/avatar/{{ receptor.avatar }}\" width=\"70px\" height=\"70px\" class=\"round\" />
                                    {% else %}
                                        <img src=\"/comunes/icon/avatar.png\" width=\"70px\" height=\"70px\" />
                                    {% endif %}
                                {% endif %}
                                <div class=\"d-flex flex-column border border-dark bg-success ml-2 p-2 border-message2\">
                                    <div class=\"d-flex justify-content-start\">
                                        <p>{{ respuesta.texto }}</p>
                                    </div>
                                    <div class=\"d-flex justify-content-around\">
                                        <p>{{ respuesta.fecha|date(\"Y-m-d\") }}</p>
                                        <p>{{ respuesta.autor }}</p>
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
