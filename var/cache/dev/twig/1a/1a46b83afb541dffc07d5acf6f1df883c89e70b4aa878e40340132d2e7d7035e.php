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
            <a class=\"mr-3\" href=\"/vehiculo/new\"><img src=\"/comunes/icon/anadir.png\" width=\"50px\" height=\"50px\" /></a>
            ";
        // line 10
        echo "            <form action=\"/buscador\" method=\"post\" class=\"form-group d-flex justify-content-between align-items-center buscador\">
                <label for=\"marcas\">Marca:</label>
                <select name=\"marcas\" id=\"marcas\" class=\"form-control border border-success mr-4\">
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
                <select name=\"modelos\" id=\"modelos\" class=\"form-control border border-success mr-4\">
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
        <div class=\"col-lg-12 col-md-0 col-sm-0 col-xs-0 d-flex flex-column justify-content-around\">
            ";
        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 36
            echo "                ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehicle"], "eliminado", [], "any", false, false, false, 36), false)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehicle"], "venta", [], "any", false, false, false, 36), true)))) {
                // line 37
                echo "                    <div class=\"vehicles\">
                        Marca: ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "marca", [], "any", false, false, false, 38), "html", null, true);
                echo "
                        Modelo: ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "modelo", [], "any", false, false, false, 39), "html", null, true);
                echo "
                        ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "propietario", [], "any", false, false, false, 40), "email", [], "any", false, false, false, 40), "html", null, true);
                echo "
                        ";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "fechaModificacion", [], "any", false, false, false, 41), "Y-m-d H:i:s"), "html", null, true);
                echo "
                        Fotos:
                        <br/>
                        ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["vehicle"], "images", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["foto"]) {
                    // line 45
                    echo "                            <img src=\"/img/";
                    echo twig_escape_filter($this->env, $context["foto"], "html", null, true);
                    echo "\" />
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foto'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                        ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "propietario", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)))) {
                    // line 48
                    echo "                            <button><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_new", ["receptor" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "propietario", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "emisor" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "id" => twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 48), "vehiculo" => twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                    echo "\">Enviar mensaje</a></button>
                        ";
                } else {
                    // line 50
                    echo "                            <button><a href=\"/vehiculo/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 50), "html", null, true);
                    echo "/edit\">Editar anuncio vehículo</a></button>
                        ";
                }
                // line 52
                echo "                    </div>
                ";
            }
            // line 54
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
            ";
        // line 57
        echo "            
            <div class=\"d-flex justify-content-center align items-center mb-2\">
                <nav aria-label=\"page\">
                    <ul class=\"pagination\">
                        <li class=\"page-item\">
                            <a class=\"page-link pulsar\" href=\"/page/first\"><<</a>
                        </li>
                        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["contadorTotal"]) || array_key_exists("contadorTotal", $context) ? $context["contadorTotal"] : (function () { throw new RuntimeError('Variable "contadorTotal" does not exist.', 64, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["contador"]) {
            // line 65
            echo "                            <li class=\"page-item\">
                                <a class=\"page-link pulsar\" href=\"/page/";
            // line 66
            echo twig_escape_filter($this->env, $context["contador"], "html", null, true);
            echo "\">
                                    ";
            // line 67
            echo twig_escape_filter($this->env, ($context["contador"] + 1), "html", null, true);
            echo "
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        <li class=\"page-item\">
                            <a class=\"page-link pulsar\" href=\"/page/last\">>></a>
                        </li>
                    </ul>
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
        return array (  247 => 71,  237 => 67,  233 => 66,  230 => 65,  226 => 64,  217 => 57,  214 => 55,  208 => 54,  204 => 52,  198 => 50,  192 => 48,  189 => 47,  180 => 45,  176 => 44,  170 => 41,  166 => 40,  162 => 39,  158 => 38,  155 => 37,  152 => 36,  147 => 35,  135 => 24,  124 => 22,  120 => 21,  114 => 17,  103 => 15,  99 => 14,  93 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Search{% endblock %}

{% block body %}
    <div class=\"row mt-5\">
        <div class=\"col-lg-12 col-md-0 col-sm-0 col-xs-0 d-flex justify-content-around\">
            <a class=\"mr-3\" href=\"/vehiculo/new\"><img src=\"/comunes/icon/anadir.png\" width=\"50px\" height=\"50px\" /></a>
            {# Mostrar opciones de busqueda #}
            <form action=\"/buscador\" method=\"post\" class=\"form-group d-flex justify-content-between align-items-center buscador\">
                <label for=\"marcas\">Marca:</label>
                <select name=\"marcas\" id=\"marcas\" class=\"form-control border border-success mr-4\">
                    <option value=\"\" selected>Seleccionar</option>
                    {% for marca in marcas %}
                        <option value=\"{{ marca }}\">{{ marca|upper }}</option>
                    {% endfor %}
                </select>
                <label for=\"modelos\">Modelos:</label>
                <select name=\"modelos\" id=\"modelos\" class=\"form-control border border-success mr-4\">
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
        <div class=\"col-lg-12 col-md-0 col-sm-0 col-xs-0 d-flex flex-column justify-content-around\">
            {# Mostrar vehículos #}
            {% for vehicle in vehicles %}
                {% if vehicle.eliminado == false and vehicle.venta == true %}
                    <div class=\"vehicles\">
                        Marca: {{ vehicle.marca }}
                        Modelo: {{ vehicle.modelo }}
                        {{ vehicle.propietario.email }}
                        {{ vehicle.fechaModificacion|date('Y-m-d H:i:s') }}
                        Fotos:
                        <br/>
                        {% for foto in vehicle.images %}
                            <img src=\"/img/{{ foto }}\" />
                        {% endfor %}
                        {% if vehicle.propietario.id != app.user.id %}
                            <button><a href=\"{{ path('message_new', {'receptor': vehicle.propietario.id, 'emisor': user.id, 'id': vehicle.id, 'vehiculo': vehicle.id}) }}\">Enviar mensaje</a></button>
                        {% else %}
                            <button><a href=\"/vehiculo/{{ vehicle.id }}/edit\">Editar anuncio vehículo</a></button>
                        {% endif %}
                    </div>
                {% endif %}
            {% endfor %}

            {# Paginación #}
            
            <div class=\"d-flex justify-content-center align items-center mb-2\">
                <nav aria-label=\"page\">
                    <ul class=\"pagination\">
                        <li class=\"page-item\">
                            <a class=\"page-link pulsar\" href=\"/page/first\"><<</a>
                        </li>
                        {% for contador in 0 .. contadorTotal %}
                            <li class=\"page-item\">
                                <a class=\"page-link pulsar\" href=\"/page/{{contador}}\">
                                    {{ contador + 1 }}
                                </a>
                            </li>
                        {% endfor %}
                        <li class=\"page-item\">
                            <a class=\"page-link pulsar\" href=\"/page/last\">>></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
{% endblock %}
", "main/buscador.html.twig", "/home/miguel/Escritorio/ComunityCar/templates/main/buscador.html.twig");
    }
}
