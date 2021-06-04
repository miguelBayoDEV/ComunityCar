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
        echo "    <div class=\"row mt-5\">
        <div class=\"col-lg-12 col-md-0 col-sm-0 col-xs-0 d-flex justify-content-around\">
            <a class=\"mr-3\" href=\"/vehiculo/new\"><img src=\"/comunes/icon/anadir.png\" width=\"50px\" height=\"50px\" data-toggle=\"tooltip\" title=\"Crear anuncio vehículo\" /></a>
            ";
        // line 10
        echo "            <form action=\"/buscador\" method=\"post\" class=\"form-group d-flex justify-content-between align-items-center buscador\">
                <label for=\"marcas\">Marca:</label>
                <select name=\"marcas\" id=\"marcas\" class=\"form-control border border-danger mr-4\">
                    <option value=\"\" selected>Seleccionar</option>
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marcas"]) || array_key_exists("marcas", $context) ? $context["marcas"] : (function () { throw new RuntimeError('Variable "marcas" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["marca"]) {
            // line 15
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["marca"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["marca"]), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </select>
                <label for=\"modelos\">Modelos:</label>
                <select name=\"modelos\" id=\"modelos\" class=\"form-control border border-danger mr-4\">
                    <option value=\"\" selected>Seleccionar</option>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modelos"]) || array_key_exists("modelos", $context) ? $context["modelos"] : (function () { throw new RuntimeError('Variable "modelos" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["modelo"]) {
            // line 22
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["modelo"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["modelo"]), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modelo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </select>
                <input class=\"btn btn-success\" type=\"submit\" name=\"buscar\" />
            </form>
        </div>
    </div>

    <hr class=\"bg-dark\" />

    <div class=\"row mt-5\">
        <div class=\"col-lg-12 col-md-0 col-sm-0 col-xs-0\">
            <h2 class=\"text-center\">Buscador: </h2>
            ";
        // line 36
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 37
            echo "                ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehicle"], "eliminado", [], "any", false, false, false, 37), false)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehicle"], "venta", [], "any", false, false, false, 37), true)))) {
                // line 38
                echo "                    <div class=\"vehicles mediaBuscador m-5 anuncio buscador\">
                        ";
                // line 39
                if ((0 !== twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "images", [], "any", false, false, false, 39)), 0))) {
                    echo "    
                            <div id=\"carouselExampleIndicators";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 40), "html", null, true);
                    echo "\" class=\"carousel slide carusel bg-dark mr-5\" data-ride=\"carousel\">
                                <ol class=\"carousel-indicators\">
                                    ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "images", [], "any", false, false, false, 42))));
                    foreach ($context['_seq'] as $context["_key"] => $context["contador"]) {
                        // line 43
                        echo "                                        ";
                        if ((0 === twig_compare($context["contador"], 0))) {
                            // line 44
                            echo "                                            <li data-target=\"#carouselExampleIndicators";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 44), "html", null, true);
                            echo "\" data-slide-to=\"0\" class=\"active\"></li>
                                        ";
                        } else {
                            // line 46
                            echo "                                            <li data-target=\"#carouselExampleIndicators";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 46), "html", null, true);
                            echo "\" data-slide-to=\"";
                            echo twig_escape_filter($this->env, $context["contador"], "html", null, true);
                            echo "\"></li>
                                        ";
                        }
                        // line 48
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contador'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "                                </ol>
                                <div class=\"carousel-inner\">
                                    ";
                    // line 51
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["vehicle"], "images", [], "any", false, false, false, 51));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 52
                        echo "                                        ";
                        if ((0 === twig_compare($context["image"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "images", [], "any", false, false, false, 52), 0, [], "array", false, false, false, 52)))) {
                            // line 53
                            echo "                                            <div class=\"carousel-item active\">
                                                <img class=\"d-block w-100\" src=\"/img/";
                            // line 54
                            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
                            echo "\" alt=\"Imagen del anuncio del vehículo\" height=\"190px\" />
                                            </div>
                                        ";
                        } else {
                            // line 57
                            echo "                                            <div class=\"carousel-item\">
                                                <img class=\"d-block w-100\" src=\"/img/";
                            // line 58
                            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
                            echo "\" alt=\"Imagen del anuncio del vehículo\" height=\"190px\" />
                                            </div>
                                        ";
                        }
                        // line 61
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "                                </div>
                                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators";
                    // line 63
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 63), "html", null, true);
                    echo "\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Anterior</span>
                                </a>
                                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 67), "html", null, true);
                    echo "\" role=\"button\" data-slide=\"next\">
                                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Siguiente</span>
                                </a>
                            </div>
                        ";
                } else {
                    // line 73
                    echo "                            <img class=\"d-block mr-5\" src=\"/comunes/icon/sin-fotos.png\" alt=\"Imagen por defecto del anuncio del vehículo\" width=\"250px\" height=\"250px\" />
                        ";
                }
                // line 75
                echo "                        <div class=\"d-flex flex-column infoVehiculo\">
                            <div class=\"d-flex justify-content-around mt-3 border-bottom border-dark mr-3\">
                                <p><strong>Marca:</strong> ";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "marca", [], "any", false, false, false, 77), "html", null, true);
                echo "</p>
                                <p><strong>Modelo:</strong> ";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "modelo", [], "any", false, false, false, 78), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"d-flex justify-content-start mt-3 border-bottom border-dark mr-3\">
                                <p><strong>Descripción:</strong> ";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "descripcion", [], "any", false, false, false, 81), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"d-flex justify-content-around flex-wrap mt-3 border-bottom border-dark mr-3\">
                                <p><strong>Precio:</strong> ";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "precio", [], "any", false, false, false, 84), "html", null, true);
                echo "</p>
                                <p><strong>Autor:</strong> ";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "propietario", [], "any", false, false, false, 85), "email", [], "any", false, false, false, 85), "html", null, true);
                echo "</p>
                                <p><strong>Fecha creación:</strong> ";
                // line 86
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "fechaModificacion", [], "any", false, false, false, 86), "Y-m-d H:i:s"), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"d-flex justify-content-center\">
                                ";
                // line 89
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "propietario", [], "any", false, false, false, 89), "email", [], "any", false, false, false, 89), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "email", [], "any", false, false, false, 89))) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "propietario", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89))))) {
                    // line 90
                    echo "                                    <button class=\"btn btn-success\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_new", ["receptor" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "propietario", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90), "emisor" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90), "id" => twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 90), "vehiculo" => twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                    echo "\" class=\"enlace\">Enviar mensaje</a></button>
                                ";
                } else {
                    // line 92
                    echo "                                    <button class=\"btn btn-success\"><a href=\"/vehiculo/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 92), "html", null, true);
                    echo "/edit\" class=\"enlace\">Editar anuncio vehículo</a></button>
                                ";
                }
                // line 94
                echo "                            </div>
                        </div>
                        <br/>
                    </div>
                ";
            }
            // line 99
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
            ";
        // line 102
        echo "            <div class=\"d-flex justify-content-center align items-center mb-2\">
                <nav aria-label=\"page\">
                    <ul class=\"pagination\">
                        ";
        // line 105
        if (((-1 === twig_compare(twig_length_filter($this->env, (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 105, $this->source); })())), 10)) && (0 <= twig_compare((isset($context["contadorTotal"]) || array_key_exists("contadorTotal", $context) ? $context["contadorTotal"] : (function () { throw new RuntimeError('Variable "contadorTotal" does not exist.', 105, $this->source); })()), 1)))) {
            // line 106
            echo "                            <li class=\"page-item\">
                                <a class=\"page-link pulsar\" href=\"/page/first\"><<</a>
                            </li>
                        ";
        }
        // line 110
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["contadorTotal"]) || array_key_exists("contadorTotal", $context) ? $context["contadorTotal"] : (function () { throw new RuntimeError('Variable "contadorTotal" does not exist.', 110, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["contador"]) {
            // line 111
            echo "                            ";
            if ((0 !== twig_compare(twig_length_filter($this->env, (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 111, $this->source); })())), 0))) {
                // line 112
                echo "                                <li class=\"page-item\">
                                    <a class=\"page-link pulsar\" href=\"/page/";
                // line 113
                echo twig_escape_filter($this->env, $context["contador"], "html", null, true);
                echo "\">
                                        ";
                // line 114
                echo twig_escape_filter($this->env, ($context["contador"] + 1), "html", null, true);
                echo "
                                    </a>
                                </li>
                            ";
            }
            // line 118
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                        ";
        if ((0 <= twig_compare(twig_length_filter($this->env, (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 119, $this->source); })())), 10))) {
            // line 120
            echo "                            <li class=\"page-item\">
                                <a class=\"page-link pulsar\" href=\"/page/last\">>></a>
                            </li>
                        ";
        }
        // line 124
        echo "                    </ul>
                </nav>
            </div>
        </div>
    </div>
";
        
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
        return array (  367 => 124,  361 => 120,  358 => 119,  352 => 118,  345 => 114,  341 => 113,  338 => 112,  335 => 111,  330 => 110,  324 => 106,  322 => 105,  317 => 102,  314 => 100,  308 => 99,  301 => 94,  295 => 92,  289 => 90,  287 => 89,  281 => 86,  277 => 85,  273 => 84,  267 => 81,  261 => 78,  257 => 77,  253 => 75,  249 => 73,  240 => 67,  233 => 63,  230 => 62,  224 => 61,  218 => 58,  215 => 57,  209 => 54,  206 => 53,  203 => 52,  199 => 51,  195 => 49,  189 => 48,  181 => 46,  175 => 44,  172 => 43,  168 => 42,  163 => 40,  159 => 39,  156 => 38,  153 => 37,  148 => 36,  135 => 24,  124 => 22,  120 => 21,  114 => 17,  103 => 15,  99 => 14,  93 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Search{% endblock %}

{% block body %}
    <div class=\"row mt-5\">
        <div class=\"col-lg-12 col-md-0 col-sm-0 col-xs-0 d-flex justify-content-around\">
            <a class=\"mr-3\" href=\"/vehiculo/new\"><img src=\"/comunes/icon/anadir.png\" width=\"50px\" height=\"50px\" data-toggle=\"tooltip\" title=\"Crear anuncio vehículo\" /></a>
            {# Mostrar opciones de busqueda #}
            <form action=\"/buscador\" method=\"post\" class=\"form-group d-flex justify-content-between align-items-center buscador\">
                <label for=\"marcas\">Marca:</label>
                <select name=\"marcas\" id=\"marcas\" class=\"form-control border border-danger mr-4\">
                    <option value=\"\" selected>Seleccionar</option>
                    {% for marca in marcas %}
                        <option value=\"{{ marca }}\">{{ marca|upper }}</option>
                    {% endfor %}
                </select>
                <label for=\"modelos\">Modelos:</label>
                <select name=\"modelos\" id=\"modelos\" class=\"form-control border border-danger mr-4\">
                    <option value=\"\" selected>Seleccionar</option>
                    {% for modelo in modelos %}
                        <option value=\"{{ modelo }}\">{{ modelo|upper }}</option>
                    {% endfor %}
                </select>
                <input class=\"btn btn-success\" type=\"submit\" name=\"buscar\" />
            </form>
        </div>
    </div>

    <hr class=\"bg-dark\" />

    <div class=\"row mt-5\">
        <div class=\"col-lg-12 col-md-0 col-sm-0 col-xs-0\">
            <h2 class=\"text-center\">Buscador: </h2>
            {# Mostrar vehículos #}
            {% for vehicle in vehicles %}
                {% if vehicle.eliminado == false and vehicle.venta == true %}
                    <div class=\"vehicles mediaBuscador m-5 anuncio buscador\">
                        {% if vehicle.images|length != 0 %}    
                            <div id=\"carouselExampleIndicators{{ vehicle.id }}\" class=\"carousel slide carusel bg-dark mr-5\" data-ride=\"carousel\">
                                <ol class=\"carousel-indicators\">
                                    {% for contador in 0 .. vehicle.images|length %}
                                        {% if contador == 0 %}
                                            <li data-target=\"#carouselExampleIndicators{{ vehicle.id }}\" data-slide-to=\"0\" class=\"active\"></li>
                                        {% else %}
                                            <li data-target=\"#carouselExampleIndicators{{ vehicle.id }}\" data-slide-to=\"{{ contador }}\"></li>
                                        {% endif %}
                                    {% endfor %}
                                </ol>
                                <div class=\"carousel-inner\">
                                    {% for image in vehicle.images %}
                                        {% if image == vehicle.images[0] %}
                                            <div class=\"carousel-item active\">
                                                <img class=\"d-block w-100\" src=\"/img/{{ image }}\" alt=\"Imagen del anuncio del vehículo\" height=\"190px\" />
                                            </div>
                                        {% else %}
                                            <div class=\"carousel-item\">
                                                <img class=\"d-block w-100\" src=\"/img/{{ image }}\" alt=\"Imagen del anuncio del vehículo\" height=\"190px\" />
                                            </div>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators{{ vehicle.id }}\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Anterior</span>
                                </a>
                                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators{{ vehicle.id }}\" role=\"button\" data-slide=\"next\">
                                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Siguiente</span>
                                </a>
                            </div>
                        {% else %}
                            <img class=\"d-block mr-5\" src=\"/comunes/icon/sin-fotos.png\" alt=\"Imagen por defecto del anuncio del vehículo\" width=\"250px\" height=\"250px\" />
                        {% endif %}
                        <div class=\"d-flex flex-column infoVehiculo\">
                            <div class=\"d-flex justify-content-around mt-3 border-bottom border-dark mr-3\">
                                <p><strong>Marca:</strong> {{ vehicle.marca }}</p>
                                <p><strong>Modelo:</strong> {{ vehicle.modelo }}</p>
                            </div>
                            <div class=\"d-flex justify-content-start mt-3 border-bottom border-dark mr-3\">
                                <p><strong>Descripción:</strong> {{ vehicle.descripcion }}</p>
                            </div>
                            <div class=\"d-flex justify-content-around flex-wrap mt-3 border-bottom border-dark mr-3\">
                                <p><strong>Precio:</strong> {{ vehicle.precio }}</p>
                                <p><strong>Autor:</strong> {{ vehicle.propietario.email }}</p>
                                <p><strong>Fecha creación:</strong> {{ vehicle.fechaModificacion|date('Y-m-d H:i:s') }}</p>
                            </div>
                            <div class=\"d-flex justify-content-center\">
                                {% if vehicle.propietario.email != app.user.email or vehicle.propietario.id != app.user.id %}
                                    <button class=\"btn btn-success\"><a href=\"{{ path('message_new', {'receptor': vehicle.propietario.id, 'emisor': user.id, 'id': vehicle.id, 'vehiculo': vehicle.id}) }}\" class=\"enlace\">Enviar mensaje</a></button>
                                {% else %}
                                    <button class=\"btn btn-success\"><a href=\"/vehiculo/{{ vehicle.id }}/edit\" class=\"enlace\">Editar anuncio vehículo</a></button>
                                {% endif %}
                            </div>
                        </div>
                        <br/>
                    </div>
                {% endif %}
            {% endfor %}

            {# Paginación #}
            <div class=\"d-flex justify-content-center align items-center mb-2\">
                <nav aria-label=\"page\">
                    <ul class=\"pagination\">
                        {% if vehicles|length < 10 and contadorTotal >= 1 %}
                            <li class=\"page-item\">
                                <a class=\"page-link pulsar\" href=\"/page/first\"><<</a>
                            </li>
                        {% endif %}
                        {% for contador in 0 .. contadorTotal %}
                            {% if vehicles|length != 0 %}
                                <li class=\"page-item\">
                                    <a class=\"page-link pulsar\" href=\"/page/{{contador}}\">
                                        {{ contador + 1 }}
                                    </a>
                                </li>
                            {% endif %}
                        {% endfor %}
                        {% if vehicles|length >= 10 %}
                            <li class=\"page-item\">
                                <a class=\"page-link pulsar\" href=\"/page/last\">>></a>
                            </li>
                        {% endif %}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
{% endblock %}
", "main/buscador.html.twig", "/home/miguel/Escritorio/ComunityCar/templates/main/buscador.html.twig");
    }
}
