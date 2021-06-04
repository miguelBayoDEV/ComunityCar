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

/* main/perfil.html.twig */
class __TwigTemplate_91b0809e64c2ea1ead84bb5347e8bf420223d3c5bc42ec0d142cc8c9099f841d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/perfil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/perfil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/perfil.html.twig", 1);
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

        echo "Perfil";
        
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
        <div class=\"col-lg-1 col-md-2 col-sm-0 col-xs-0\"></div>
        <div class=\"col-lg-10 col-md-8 col-sm-0 col-xs-0 d-flex justify-content-center\">
            <a class=\"mr-3\" href=\"/vehiculo/new\"><img src=\"/comunes/icon/anadir.png\" width=\"50px\" height=\"50px\" data-toggle=\"tooltip\" title=\"Crear anuncio vehículo\" /></a>
        </div>
        <div class=\"col-lg-1 col-md-2 col-sm-0 col-xs-0\"></div>
    </div>

    <div class=\"row d-flex justify-content-center mt-5 mb-5 exportar\">
        <div class=\"col-lg-6 col-md-0 col-sm-0 col-xs-0\">
            <h3 class=\"pb-5 text-center\">Perfil usuario:</h3>
            <div class=\"d-flex align-items-start\">
                <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                    <a class=\"nav-link active\" id=\"v-pills-perfil-tab\" data-toggle=\"pill\" href=\"#v-pills-perfil\" role=\"tab\" aria-controls=\"v-pills-perfil\" aria-selected=\"true\">Perfil personal</a>
                    <a class=\"nav-link\" id=\"v-pills-vehiculosMios-tab\" data-toggle=\"pill\" href=\"#v-pills-vehiculosMios\" role=\"tab\" aria-controls=\"v-pills-vehiculosMios\" aria-selected=\"false\">Vehículos propios</a>
                    <a class=\"nav-link\" id=\"v-pills-vehiculosVenta-tab\" data-toggle=\"pill\" href=\"#v-pills-vehiculosVenta\" role=\"tab\" aria-controls=\"v-pills-vehiculosVenta\" aria-selected=\"true\">Vehículos en venta</a>
                </div>
                <div class=\"tab-content pildora-content pl-4\" id=\"v-pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"v-pills-perfil\" role=\"tabpanel\" aria-labelledby=\"v-pills-perfil-tab\">
                        <div class=\"perfil pildora-border pl-1 pt-1 pr-2 d-flex flex-column\">
                            <div id=\"avatar\">
                                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
                                    ";
        // line 28
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "avatar", [], "any", false, false, false, 28), null))) {
            // line 29
            echo "                                        <div class=\"d-flex justify-content-center\">
                                            <img src=\"/avatar/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "avatar", [], "any", false, false, false, 30), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\" class=\"round\" />
                                        </div>
                                    ";
        } else {
            // line 33
            echo "                                        <div class=\"d-flex justify-content-center\">
                                            <p>No ha introducido su avatar</p>
                                        </div>
                                    ";
        }
        // line 37
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 37, $this->source); })()), "avatar", [], "any", false, false, false, 37), 'row');
        echo "
                                    <div class=\"d-flex justify-content-center\">
                                        <button type=\"submit\" class=\"btn\">Modificar</button>
                                    </div>
                                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
                            </div>

                            <div id=\"nombreDiv\">
                                <label for=\"nombre\">Nombre:</label>
                                ";
        // line 46
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "nombre", [], "any", false, false, false, 46), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "nombre", [], "any", false, false, false, 46), "")))) {
            // line 47
            echo "                                    <input type=\"text\" id=\"nombre\" name=\"nombre\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "nombre", [], "any", false, false, false, 47), "html", null, true);
            echo "\" id=\"nombre\" />
                                ";
        } else {
            // line 49
            echo "                                    <input type=\"text\" id=\"nombre\" name=\"nombre\" value=\"\" placeholder=\"Rellenar nombre\" id=\"nombre\" />
                                ";
        }
        // line 51
        echo "                                <button class=\"btn\" onClick=\"modificar('nombre')\">Modificar</button>
                            </div>

                            <div id=\"primerApellidoDiv\">
                                <label for=\"primerApellido\">Primer apellido:</label>
                                ";
        // line 56
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "primerApellido", [], "any", false, false, false, 56), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "primerApellido", [], "any", false, false, false, 56), "")))) {
            // line 57
            echo "                                    <input type=\"text\" id=\"primerApellido\" name=\"primerApellido\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "primerApellido", [], "any", false, false, false, 57), "html", null, true);
            echo "\" id=\"primerApellido\" />
                                ";
        } else {
            // line 59
            echo "                                    <input type=\"text\" id=\"primerApellido\" name=\"primerApellido\" value=\"\" placeholder=\"Rellenar primer apellido\" id=\"primerApellido\" />
                                ";
        }
        // line 61
        echo "                                <button class=\"btn\" onClick=\"modificar('primerApellido')\">Modificar</button>
                            </div>

                            <div id=\"segundoApellidoDiv\">
                                <label for=\"segundoApellido\">Segundo apellido:</label>
                                ";
        // line 66
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "segundoApellido", [], "any", false, false, false, 66), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "segundoApellido", [], "any", false, false, false, 66), "")))) {
            // line 67
            echo "                                    <input type=\"text\" id=\"segundoApellido\" name=\"segundoApellido\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "segundoApellido", [], "any", false, false, false, 67), "html", null, true);
            echo "\" id=\"segundoApellido\" />
                                ";
        } else {
            // line 69
            echo "                                    <input type=\"text\" id=\"segundoApellido\" name=\"segundoApellido\" value=\"\" placeholder=\"Rellenar segundo apellido\" id=\"segundoApellido\" />
                                ";
        }
        // line 71
        echo "                                <button class=\"btn\" onClick=\"modificar('segundoApellido')\">Modificar</button>
                            </div>

                            <div id=\"nickDiv\">
                                <label for=\"nick\">Nick:</label>
                                ";
        // line 76
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "nick", [], "any", false, false, false, 76), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "nick", [], "any", false, false, false, 76), "")))) {
            // line 77
            echo "                                    <input type=\"text\" id=\"nick\" name=\"nick\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "nick", [], "any", false, false, false, 77), "html", null, true);
            echo "\" id=\"nick\" />
                                ";
        } else {
            // line 79
            echo "                                    <input type=\"text\" id=\"nick\" name=\"nick\" value=\"\" placeholder=\"Rellenar nick\" id=\"nick\" />
                                ";
        }
        // line 81
        echo "                                <button class=\"btn\" onClick=\"modificar('nick')\">Modificar</button>
                            </div>

                            <div id=\"localidadDiv\">
                                <label for=\"localidad\">Localidad:</label>
                                ";
        // line 86
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "localidad", [], "any", false, false, false, 86), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "localidad", [], "any", false, false, false, 86), "")))) {
            // line 87
            echo "                                    <input type=\"text\" id=\"localidad\" name=\"localidad\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "localidad", [], "any", false, false, false, 87), "html", null, true);
            echo "\" id=\"localidad\" />
                                ";
        } else {
            // line 89
            echo "                                    <input type=\"text\" id=\"localidad\" name=\"localidad\" value=\"\" placeholder=\"Rellenar localidad\" id=\"localidad\" />
                                ";
        }
        // line 91
        echo "                                <button class=\"btn\" onClick=\"modificar('localidad')\">Modificar</button>
                            </div>

                            <div id=\"provinciaDiv\">
                                <label for=\"provincia\">Provincia:</label>
                                ";
        // line 96
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "provincia", [], "any", false, false, false, 96), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "provincia", [], "any", false, false, false, 96), "")))) {
            // line 97
            echo "                                    <input type=\"text\" id=\"provincia\" name=\"provincia\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "provincia", [], "any", false, false, false, 97), "html", null, true);
            echo "\" id=\"provincia\" />
                                ";
        } else {
            // line 99
            echo "                                    <input type=\"text\" id=\"provincia\" name=\"provincia\" value=\"\" placeholder=\"Rellenar provincia\" id=\"provincia\" />
                                ";
        }
        // line 101
        echo "                                <button class=\"btn\" onClick=\"modificar('provincia')\">Modificar</button>
                            </div>

                            <div id=\"telefonoMovilDiv\">
                                <label for=\"telefonoMovil\">Teléfono móvil:</label>
                                ";
        // line 106
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 106), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 106), "")))) {
            // line 107
            echo "                                    <input type=\"tel\" id=\"telefonoMovil\" name=\"telefonoMovil\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 107), "html", null, true);
            echo "\" pattern=\"[0-9]{9}\" id=\"telefonoMovil\" />
                                ";
        } else {
            // line 109
            echo "                                    <input type=\"tel\" id=\"telefonoMovil\" name=\"telefonoMovil\" value=\"\" placeholder=\"123456789\" pattern=\"[0-9]{9}\" id=\"telefonoMovil\" />
                                ";
        }
        // line 111
        echo "                                <button class=\"btn\" onClick=\"modificar('telefonoMovil')\">Modificar</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-vehiculosMios\" role=\"tabpanel\" aria-labelledby=\"v-pills-vehiculosMios-tab\">
                        <div class=\"vehiculosMios\">
                            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 117, $this->source); })()), "vehiculos", [], "any", false, false, false, 117));
        foreach ($context['_seq'] as $context["_key"] => $context["vehiculo"]) {
            // line 118
            echo "                                ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "eliminado", [], "any", false, false, false, 118), true))) {
                // line 119
                echo "                                    <div class=\"vehicles pildora-border mb-3 pl-1 pt-1 pr-2 d-flex justify-content-between\">
                                        <div class=\"d-flex flex-column pl-3\">
                                            <p>Marca: ";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "marca", [], "any", false, false, false, 121), "html", null, true);
                echo " - Modelo: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "modelo", [], "any", false, false, false, 121), "html", null, true);
                echo "</p>
                                            <p>Precio: <strong>";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "precio", [], "any", false, false, false, 122), "html", null, true);
                echo "</strong> euros.</p>
                                        </div>
                                        ";
                // line 124
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "venta", [], "any", false, false, false, 124), false))) {
                    // line 125
                    echo "                                            <button class=\"btn\" onClick=\"addBuscador(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "id", [], "any", false, false, false, 125), "html", null, true);
                    echo ");\">Añadir a venta</button>
                                        ";
                }
                // line 127
                echo "                                    </div>
                                ";
            }
            // line 129
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehiculo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-vehiculosVenta\" role=\"tabpanel\" aria-labelledby=\"v-pills-vehiculosVenta-tab\">
                        <div class=\"vehiculosVenta\">
                            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 134, $this->source); })()), "vehiculos", [], "any", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["vehiculo"]) {
            // line 135
            echo "                                ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "venta", [], "any", false, false, false, 135), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "eliminado", [], "any", false, false, false, 135), false)))) {
                // line 136
                echo "                                    <div class=\"vehicles\">
                                        <div class=\"vehicles pildora-border mb-3 pl-1 pt-1 pr-2 d-flex justify-content-between\">
                                            <div class=\"d-flex flex-column pl-3\">
                                                <p>Marca: ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "marca", [], "any", false, false, false, 139), "html", null, true);
                echo " - Modelo: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "modelo", [], "any", false, false, false, 139), "html", null, true);
                echo "</p>
                                                <p>Precio: <strong>";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "precio", [], "any", false, false, false, 140), "html", null, true);
                echo "</strong> euros.</p>
                                            </div>
                                            <button class=\"btn\" onClick=\"eliminarBuscador(";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "id", [], "any", false, false, false, 142), "html", null, true);
                echo ");\">Eliminar de venta</button>
                                        </div>
                                    </div>
                                ";
            }
            // line 146
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehiculo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function modificar(id) {

            // Validar dato antes de enviar al servidor
            var comprobar = true;
            var dato = \$(\"#\"+id).val();
            if(id == \"nombre\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == false) {
                    alert(\"El nombre introducido es incorrecto.\");
                    window.location.reload();
                    if(dato != null) {
                        \$(\"#nombre\").prop('value', \"";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 165, $this->source); })()), "nombre", [], "any", false, false, false, 165), "html", null, true);
        echo "\");
                    }
                    comprobar = false;
                }
            }else if(id == \"primerApellido\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == false) {
                    alert(\"El primer apellido introducido es incorrecto.\");
                    window.location.reload();
                    if(dato != null) {
                        \$(\"#primerApellido\").prop('value', \"";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 174, $this->source); })()), "primerApellido", [], "any", false, false, false, 174), "html", null, true);
        echo "\");
                    }
                    comprobar = false;
                }
            }else if(id == \"segundoApellido\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == false) {
                    alert(\"El segundo apellido introducido es incorrecto.\");
                    if(dato != null) {
                        \$(\"#segundoApellido\").prop('value', \"";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 182, $this->source); })()), "segundoApellido", [], "any", false, false, false, 182), "html", null, true);
        echo "\");
                    }
                    comprobar = false;
                }
            }else if(id == \"nick\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == false) {
                    alert(\"El nick introducido es incorrecto.\");
                    window.location.reload();
                    if(dato != null) {
                        \$(\"#nick\").prop('value', \"";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 191, $this->source); })()), "nick", [], "any", false, false, false, 191), "html", null, true);
        echo "\");
                    }
                    comprobar = false;
                }
            }else if(id == \"localidad\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == false) {
                    alert(\"El localidad introducida es incorrecto.\");
                    if(dato != null) {
                        \$(\"#localidad\").prop('value', \"";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 199, $this->source); })()), "localidad", [], "any", false, false, false, 199), "html", null, true);
        echo "\");
                    }
                    comprobar = false;
                }
            }else if(id == \"provincia\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == false) {
                    alert(\"El provincia introducida es incorrecto.\");
                    if(dato != null) {
                        \$(\"#provincia\").prop('value', \"";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 207, $this->source); })()), "provincia", [], "any", false, false, false, 207), "html", null, true);
        echo "\");
                    }
                    comprobar = false;
                }
            }else if(id == \"telefonoMovil\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == true) {
                    alert(\"El teléfono móvil introducido es incorrecto.\");
                    if(dato != null) {
                        \$(\"#telefonoMovil\").prop('value', \"";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 215, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 215), "html", null, true);
        echo "\");
                    }
                    comprobar = false;
                }
            }

            var datos = {
                'dato':dato,
                'condicion':id
            };

            function fail(data) {
                alert(\"Error de AJAX: \" + data);
            }

            if(comprobar == true) {
                \$.ajax({
                    type: \"GET\",
                    url: \"/modificar\",
                    data: datos,
                    success: function(data) {
                        window.location.reload();
                    },
                    error: fail
                });
            }
        }

        function eliminarBuscador(id) {

            function fail(data) {
                alert(\"Error de AJAX: \" + data);
            }

            \$.ajax({
                type: \"GET\",
                url: \"/eliminarVehiculoBuscador\",
                data: {'id_vehiculo': id},
                success: function(data) {
                    if(data == \"1\") {
                        alert(\"Vehiculo eliminado correctamente del buscador y en venta.\");
                        window.location.reload();
                    }
                },
                error: fail
            });
        }

        function addBuscador(id) {
            function fail(data) {
                alert(\"Error de AJAX: \" + data);
            }

            \$.ajax({
                type: \"GET\",
                url: \"/addVehiculoBuscador\",
                data: {'id_vehiculo': id},
                success: function(data) {
                    if(data == \"1\") {
                        alert(\"Vehiculo añadido correctamente del buscador y en venta.\");
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
        return "main/perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 215,  441 => 207,  430 => 199,  419 => 191,  407 => 182,  396 => 174,  384 => 165,  364 => 147,  358 => 146,  351 => 142,  346 => 140,  340 => 139,  335 => 136,  332 => 135,  328 => 134,  322 => 130,  316 => 129,  312 => 127,  306 => 125,  304 => 124,  299 => 122,  293 => 121,  289 => 119,  286 => 118,  282 => 117,  274 => 111,  270 => 109,  264 => 107,  262 => 106,  255 => 101,  251 => 99,  245 => 97,  243 => 96,  236 => 91,  232 => 89,  226 => 87,  224 => 86,  217 => 81,  213 => 79,  207 => 77,  205 => 76,  198 => 71,  194 => 69,  188 => 67,  186 => 66,  179 => 61,  175 => 59,  169 => 57,  167 => 56,  160 => 51,  156 => 49,  150 => 47,  148 => 46,  140 => 41,  132 => 37,  126 => 33,  120 => 30,  117 => 29,  115 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Perfil{% endblock %}

{% block body %}
    <div class=\"row mt-5\">
        <div class=\"col-lg-1 col-md-2 col-sm-0 col-xs-0\"></div>
        <div class=\"col-lg-10 col-md-8 col-sm-0 col-xs-0 d-flex justify-content-center\">
            <a class=\"mr-3\" href=\"/vehiculo/new\"><img src=\"/comunes/icon/anadir.png\" width=\"50px\" height=\"50px\" data-toggle=\"tooltip\" title=\"Crear anuncio vehículo\" /></a>
        </div>
        <div class=\"col-lg-1 col-md-2 col-sm-0 col-xs-0\"></div>
    </div>

    <div class=\"row d-flex justify-content-center mt-5 mb-5 exportar\">
        <div class=\"col-lg-6 col-md-0 col-sm-0 col-xs-0\">
            <h3 class=\"pb-5 text-center\">Perfil usuario:</h3>
            <div class=\"d-flex align-items-start\">
                <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                    <a class=\"nav-link active\" id=\"v-pills-perfil-tab\" data-toggle=\"pill\" href=\"#v-pills-perfil\" role=\"tab\" aria-controls=\"v-pills-perfil\" aria-selected=\"true\">Perfil personal</a>
                    <a class=\"nav-link\" id=\"v-pills-vehiculosMios-tab\" data-toggle=\"pill\" href=\"#v-pills-vehiculosMios\" role=\"tab\" aria-controls=\"v-pills-vehiculosMios\" aria-selected=\"false\">Vehículos propios</a>
                    <a class=\"nav-link\" id=\"v-pills-vehiculosVenta-tab\" data-toggle=\"pill\" href=\"#v-pills-vehiculosVenta\" role=\"tab\" aria-controls=\"v-pills-vehiculosVenta\" aria-selected=\"true\">Vehículos en venta</a>
                </div>
                <div class=\"tab-content pildora-content pl-4\" id=\"v-pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"v-pills-perfil\" role=\"tabpanel\" aria-labelledby=\"v-pills-perfil-tab\">
                        <div class=\"perfil pildora-border pl-1 pt-1 pr-2 d-flex flex-column\">
                            <div id=\"avatar\">
                                {{ form_start(avatarForm) }}
                                    {% if user.avatar != null %}
                                        <div class=\"d-flex justify-content-center\">
                                            <img src=\"/avatar/{{ user.avatar }}\" width=\"150px\" height=\"150px\" class=\"round\" />
                                        </div>
                                    {% else %}
                                        <div class=\"d-flex justify-content-center\">
                                            <p>No ha introducido su avatar</p>
                                        </div>
                                    {% endif %}
                                    {{ form_row(avatarForm.avatar) }}
                                    <div class=\"d-flex justify-content-center\">
                                        <button type=\"submit\" class=\"btn\">Modificar</button>
                                    </div>
                                {{ form_end(avatarForm) }}
                            </div>

                            <div id=\"nombreDiv\">
                                <label for=\"nombre\">Nombre:</label>
                                {% if user.nombre != null or user.nombre != \"\" %}
                                    <input type=\"text\" id=\"nombre\" name=\"nombre\" value=\"{{ user.nombre }}\" id=\"nombre\" />
                                {% else %}
                                    <input type=\"text\" id=\"nombre\" name=\"nombre\" value=\"\" placeholder=\"Rellenar nombre\" id=\"nombre\" />
                                {% endif %}
                                <button class=\"btn\" onClick=\"modificar('nombre')\">Modificar</button>
                            </div>

                            <div id=\"primerApellidoDiv\">
                                <label for=\"primerApellido\">Primer apellido:</label>
                                {% if user.primerApellido != null or user.primerApellido != \"\" %}
                                    <input type=\"text\" id=\"primerApellido\" name=\"primerApellido\" value=\"{{ user.primerApellido }}\" id=\"primerApellido\" />
                                {% else %}
                                    <input type=\"text\" id=\"primerApellido\" name=\"primerApellido\" value=\"\" placeholder=\"Rellenar primer apellido\" id=\"primerApellido\" />
                                {% endif %}
                                <button class=\"btn\" onClick=\"modificar('primerApellido')\">Modificar</button>
                            </div>

                            <div id=\"segundoApellidoDiv\">
                                <label for=\"segundoApellido\">Segundo apellido:</label>
                                {% if user.segundoApellido != null or user.segundoApellido != \"\" %}
                                    <input type=\"text\" id=\"segundoApellido\" name=\"segundoApellido\" value=\"{{ user.segundoApellido }}\" id=\"segundoApellido\" />
                                {% else %}
                                    <input type=\"text\" id=\"segundoApellido\" name=\"segundoApellido\" value=\"\" placeholder=\"Rellenar segundo apellido\" id=\"segundoApellido\" />
                                {% endif %}
                                <button class=\"btn\" onClick=\"modificar('segundoApellido')\">Modificar</button>
                            </div>

                            <div id=\"nickDiv\">
                                <label for=\"nick\">Nick:</label>
                                {% if user.nick != null or user.nick != \"\" %}
                                    <input type=\"text\" id=\"nick\" name=\"nick\" value=\"{{ user.nick }}\" id=\"nick\" />
                                {% else %}
                                    <input type=\"text\" id=\"nick\" name=\"nick\" value=\"\" placeholder=\"Rellenar nick\" id=\"nick\" />
                                {% endif %}
                                <button class=\"btn\" onClick=\"modificar('nick')\">Modificar</button>
                            </div>

                            <div id=\"localidadDiv\">
                                <label for=\"localidad\">Localidad:</label>
                                {% if user.localidad != null or user.localidad != \"\" %}
                                    <input type=\"text\" id=\"localidad\" name=\"localidad\" value=\"{{ user.localidad }}\" id=\"localidad\" />
                                {% else %}
                                    <input type=\"text\" id=\"localidad\" name=\"localidad\" value=\"\" placeholder=\"Rellenar localidad\" id=\"localidad\" />
                                {% endif %}
                                <button class=\"btn\" onClick=\"modificar('localidad')\">Modificar</button>
                            </div>

                            <div id=\"provinciaDiv\">
                                <label for=\"provincia\">Provincia:</label>
                                {% if user.provincia != null or user.provincia != \"\" %}
                                    <input type=\"text\" id=\"provincia\" name=\"provincia\" value=\"{{ user.provincia }}\" id=\"provincia\" />
                                {% else %}
                                    <input type=\"text\" id=\"provincia\" name=\"provincia\" value=\"\" placeholder=\"Rellenar provincia\" id=\"provincia\" />
                                {% endif %}
                                <button class=\"btn\" onClick=\"modificar('provincia')\">Modificar</button>
                            </div>

                            <div id=\"telefonoMovilDiv\">
                                <label for=\"telefonoMovil\">Teléfono móvil:</label>
                                {% if user.telefonoMovil != null or user.telefonoMovil != \"\" %}
                                    <input type=\"tel\" id=\"telefonoMovil\" name=\"telefonoMovil\" value=\"{{ user.telefonoMovil }}\" pattern=\"[0-9]{9}\" id=\"telefonoMovil\" />
                                {% else %}
                                    <input type=\"tel\" id=\"telefonoMovil\" name=\"telefonoMovil\" value=\"\" placeholder=\"123456789\" pattern=\"[0-9]{9}\" id=\"telefonoMovil\" />
                                {% endif %}
                                <button class=\"btn\" onClick=\"modificar('telefonoMovil')\">Modificar</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-vehiculosMios\" role=\"tabpanel\" aria-labelledby=\"v-pills-vehiculosMios-tab\">
                        <div class=\"vehiculosMios\">
                            {% for vehiculo in user.vehiculos %}
                                {% if vehiculo.eliminado != true %}
                                    <div class=\"vehicles pildora-border mb-3 pl-1 pt-1 pr-2 d-flex justify-content-between\">
                                        <div class=\"d-flex flex-column pl-3\">
                                            <p>Marca: {{ vehiculo.marca }} - Modelo: {{ vehiculo.modelo }}</p>
                                            <p>Precio: <strong>{{ vehiculo.precio }}</strong> euros.</p>
                                        </div>
                                        {% if vehiculo.venta == false %}
                                            <button class=\"btn\" onClick=\"addBuscador({{ vehiculo.id }});\">Añadir a venta</button>
                                        {% endif %}
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-vehiculosVenta\" role=\"tabpanel\" aria-labelledby=\"v-pills-vehiculosVenta-tab\">
                        <div class=\"vehiculosVenta\">
                            {% for vehiculo in user.vehiculos %}
                                {% if vehiculo.venta == true and vehiculo.eliminado == false %}
                                    <div class=\"vehicles\">
                                        <div class=\"vehicles pildora-border mb-3 pl-1 pt-1 pr-2 d-flex justify-content-between\">
                                            <div class=\"d-flex flex-column pl-3\">
                                                <p>Marca: {{ vehiculo.marca }} - Modelo: {{ vehiculo.modelo }}</p>
                                                <p>Precio: <strong>{{ vehiculo.precio }}</strong> euros.</p>
                                            </div>
                                            <button class=\"btn\" onClick=\"eliminarBuscador({{ vehiculo.id }});\">Eliminar de venta</button>
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function modificar(id) {

            // Validar dato antes de enviar al servidor
            var comprobar = true;
            var dato = \$(\"#\"+id).val();
            if(id == \"nombre\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == false) {
                    alert(\"El nombre introducido es incorrecto.\");
                    window.location.reload();
                    if(dato != null) {
                        \$(\"#nombre\").prop('value', \"{{user.nombre}}\");
                    }
                    comprobar = false;
                }
            }else if(id == \"primerApellido\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == false) {
                    alert(\"El primer apellido introducido es incorrecto.\");
                    window.location.reload();
                    if(dato != null) {
                        \$(\"#primerApellido\").prop('value', \"{{user.primerApellido}}\");
                    }
                    comprobar = false;
                }
            }else if(id == \"segundoApellido\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == false) {
                    alert(\"El segundo apellido introducido es incorrecto.\");
                    if(dato != null) {
                        \$(\"#segundoApellido\").prop('value', \"{{user.segundoApellido}}\");
                    }
                    comprobar = false;
                }
            }else if(id == \"nick\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == false) {
                    alert(\"El nick introducido es incorrecto.\");
                    window.location.reload();
                    if(dato != null) {
                        \$(\"#nick\").prop('value', \"{{user.nick}}\");
                    }
                    comprobar = false;
                }
            }else if(id == \"localidad\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == false) {
                    alert(\"El localidad introducida es incorrecto.\");
                    if(dato != null) {
                        \$(\"#localidad\").prop('value', \"{{user.localidad}}\");
                    }
                    comprobar = false;
                }
            }else if(id == \"provincia\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == false) {
                    alert(\"El provincia introducida es incorrecto.\");
                    if(dato != null) {
                        \$(\"#provincia\").prop('value', \"{{user.provincia}}\");
                    }
                    comprobar = false;
                }
            }else if(id == \"telefonoMovil\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == true) {
                    alert(\"El teléfono móvil introducido es incorrecto.\");
                    if(dato != null) {
                        \$(\"#telefonoMovil\").prop('value', \"{{user.telefonoMovil}}\");
                    }
                    comprobar = false;
                }
            }

            var datos = {
                'dato':dato,
                'condicion':id
            };

            function fail(data) {
                alert(\"Error de AJAX: \" + data);
            }

            if(comprobar == true) {
                \$.ajax({
                    type: \"GET\",
                    url: \"/modificar\",
                    data: datos,
                    success: function(data) {
                        window.location.reload();
                    },
                    error: fail
                });
            }
        }

        function eliminarBuscador(id) {

            function fail(data) {
                alert(\"Error de AJAX: \" + data);
            }

            \$.ajax({
                type: \"GET\",
                url: \"/eliminarVehiculoBuscador\",
                data: {'id_vehiculo': id},
                success: function(data) {
                    if(data == \"1\") {
                        alert(\"Vehiculo eliminado correctamente del buscador y en venta.\");
                        window.location.reload();
                    }
                },
                error: fail
            });
        }

        function addBuscador(id) {
            function fail(data) {
                alert(\"Error de AJAX: \" + data);
            }

            \$.ajax({
                type: \"GET\",
                url: \"/addVehiculoBuscador\",
                data: {'id_vehiculo': id},
                success: function(data) {
                    if(data == \"1\") {
                        alert(\"Vehiculo añadido correctamente del buscador y en venta.\");
                        window.location.reload();
                    }
                },
                error: fail
            });
        }
    </script>
{% endblock %}", "main/perfil.html.twig", "/home/miguel/Escritorio/ComunityCar/templates/main/perfil.html.twig");
    }
}
