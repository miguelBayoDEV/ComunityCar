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
        echo "
    ";
        // line 8
        echo "    <button><a href=\"/vehiculo/new\">Introducir vehículo a vender</a></button>

    <h1 id=\"datosPersonales\">Datos personales:</h1>

    <div id=\"avatar\">
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
            ";
        // line 14
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "avatar", [], "any", false, false, false, 14), null))) {
            // line 15
            echo "                <img src=\"/avatar/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "avatar", [], "any", false, false, false, 15), "html", null, true);
            echo "\" width=\"250px\" height=\"250px\" />
            ";
        } else {
            // line 17
            echo "                <p>No ha introducido su avatar</p>
            ";
        }
        // line 19
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 19, $this->source); })()), "avatar", [], "any", false, false, false, 19), 'row');
        echo "
            <button type=\"submit\" class=\"btn\">Modificar</button>
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
    </div>

    <div id=\"nombreDiv\">
        <label for=\"nombre\">Nombre:</label>
        ";
        // line 26
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "nombre", [], "any", false, false, false, 26), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "nombre", [], "any", false, false, false, 26), "")))) {
            // line 27
            echo "            <input type=\"text\" id=\"nombre\" name=\"nombre\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "nombre", [], "any", false, false, false, 27), "html", null, true);
            echo "\" id=\"nombre\" />
        ";
        } else {
            // line 29
            echo "            <input type=\"text\" id=\"nombre\" name=\"nombre\" value=\"\" placeholder=\"Rellenar nombre\" id=\"nombre\" />
        ";
        }
        // line 31
        echo "        <button onClick=\"modificar('nombre')\">Modificar</button>
    </div>

    <div id=\"primerApellidoDiv\">
        <label for=\"primerApellido\">Primer apellido:</label>
        ";
        // line 36
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "primerApellido", [], "any", false, false, false, 36), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "primerApellido", [], "any", false, false, false, 36), "")))) {
            // line 37
            echo "            <input type=\"text\" id=\"primerApellido\" name=\"primerApellido\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "primerApellido", [], "any", false, false, false, 37), "html", null, true);
            echo "\" id=\"primerApellido\" />
        ";
        } else {
            // line 39
            echo "            <input type=\"text\" id=\"primerApellido\" name=\"primerApellido\" value=\"\" placeholder=\"Rellenar primer apellido\" id=\"primerApellido\" />
        ";
        }
        // line 41
        echo "        <button onClick=\"modificar('primerApellido')\">Modificar</button>
    </div>

    <div id=\"segundoApellidoDiv\">
        <label for=\"segundoApellido\">Segundo apellido:</label>
        ";
        // line 46
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "segundoApellido", [], "any", false, false, false, 46), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "segundoApellido", [], "any", false, false, false, 46), "")))) {
            // line 47
            echo "            <input type=\"text\" id=\"segundoApellido\" name=\"segundoApellido\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "segundoApellido", [], "any", false, false, false, 47), "html", null, true);
            echo "\" id=\"segundoApellido\" />
        ";
        } else {
            // line 49
            echo "            <input type=\"text\" id=\"segundoApellido\" name=\"segundoApellido\" value=\"\" placeholder=\"Rellenar segundo apellido\" id=\"segundoApellido\" />
        ";
        }
        // line 51
        echo "        <button onClick=\"modificar('segundoApellido')\">Modificar</button>
    </div>

    <div id=\"nickDiv\">
        <label for=\"nick\">Nick:</label>
        ";
        // line 56
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "nick", [], "any", false, false, false, 56), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "nick", [], "any", false, false, false, 56), "")))) {
            // line 57
            echo "            <input type=\"text\" id=\"nick\" name=\"nick\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "nick", [], "any", false, false, false, 57), "html", null, true);
            echo "\" id=\"nick\" />
        ";
        } else {
            // line 59
            echo "            <input type=\"text\" id=\"nick\" name=\"nick\" value=\"\" placeholder=\"Rellenar nick\" id=\"nick\" />
        ";
        }
        // line 61
        echo "        <button onClick=\"modificar('nick')\">Modificar</button>
    </div>

    <div id=\"localidadDiv\">
        <label for=\"localidad\">Localidad:</label>
        ";
        // line 66
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "localidad", [], "any", false, false, false, 66), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "localidad", [], "any", false, false, false, 66), "")))) {
            // line 67
            echo "            <input type=\"text\" id=\"localidad\" name=\"localidad\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "localidad", [], "any", false, false, false, 67), "html", null, true);
            echo "\" id=\"localidad\" />
        ";
        } else {
            // line 69
            echo "            <input type=\"text\" id=\"localidad\" name=\"localidad\" value=\"\" placeholder=\"Rellenar localidad\" id=\"localidad\" />
        ";
        }
        // line 71
        echo "        <button onClick=\"modificar('localidad')\">Modificar</button>
    </div>

    <div id=\"provinciaDiv\">
        <label for=\"provincia\">Provincia:</label>
        ";
        // line 76
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "provincia", [], "any", false, false, false, 76), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "provincia", [], "any", false, false, false, 76), "")))) {
            // line 77
            echo "            <input type=\"text\" id=\"provincia\" name=\"provincia\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "provincia", [], "any", false, false, false, 77), "html", null, true);
            echo "\" id=\"provincia\" />
        ";
        } else {
            // line 79
            echo "            <input type=\"text\" id=\"provincia\" name=\"provincia\" value=\"\" placeholder=\"Rellenar provincia\" id=\"provincia\" />
        ";
        }
        // line 81
        echo "        <button onClick=\"modificar('provincia')\">Modificar</button>
    </div>

    <div id=\"telefonoMovilDiv\">
        <label for=\"telefonoMovil\">Teléfono móvil:</label>
        ";
        // line 86
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 86), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 86), "")))) {
            // line 87
            echo "            <input type=\"tel\" id=\"telefonoMovil\" name=\"telefonoMovil\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 87), "html", null, true);
            echo "\" pattern=\"[0-9]{9}\" id=\"telefonoMovil\" />
        ";
        } else {
            // line 89
            echo "            <input type=\"tel\" id=\"telefonoMovil\" name=\"telefonoMovil\" value=\"\" placeholder=\"123456789\" pattern=\"[0-9]{9}\" id=\"telefonoMovil\" />
        ";
        }
        // line 91
        echo "        <button onClick=\"modificar('telefonoMovil')\">Modificar</button>
    </div>

    <h1>Lista de vehículos mios:</h1>
    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "vehiculos", [], "any", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["vehiculo"]) {
            // line 96
            echo "        ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "eliminado", [], "any", false, false, false, 96), true))) {
                // line 97
                echo "            <div class=\"vehicles\">
                Marca: ";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "marca", [], "any", false, false, false, 98), "html", null, true);
                echo "
                <br/>
                Modelo: ";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "modelo", [], "any", false, false, false, 100), "html", null, true);
                echo "
                <br/>
                Descripción: ";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "descripcion", [], "any", false, false, false, 102), "html", null, true);
                echo "
                <br/>
                Precio: ";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "precio", [], "any", false, false, false, 104), "html", null, true);
                echo " euros.
                <br/>
                ";
                // line 106
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "venta", [], "any", false, false, false, 106), false))) {
                    // line 107
                    echo "                    <button onClick=\"addBuscador(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "id", [], "any", false, false, false, 107), "html", null, true);
                    echo ");\">Añadir a venta</button>
                ";
                }
                // line 109
                echo "            </div>
        ";
            }
            // line 111
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehiculo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
    <h1>Lista de vehículos en venta:</h1>
    ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 114, $this->source); })()), "vehiculos", [], "any", false, false, false, 114));
        foreach ($context['_seq'] as $context["_key"] => $context["vehiculo"]) {
            // line 115
            echo "        ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "venta", [], "any", false, false, false, 115), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "eliminado", [], "any", false, false, false, 115), false)))) {
                // line 116
                echo "            <div class=\"vehicles\">
                Marca: ";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "marca", [], "any", false, false, false, 117), "html", null, true);
                echo "
                <br/>
                Modelo: ";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "modelo", [], "any", false, false, false, 119), "html", null, true);
                echo "
                <br/>
                Descripción: ";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "descripcion", [], "any", false, false, false, 121), "html", null, true);
                echo "
                <br/>
                Precio: ";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "precio", [], "any", false, false, false, 123), "html", null, true);
                echo " euros.
                <br/>
                <button onClick=\"eliminarBuscador(";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "id", [], "any", false, false, false, 125), "html", null, true);
                echo ");\">Eliminar de venta</button>
            </div>
        ";
            }
            // line 128
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehiculo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "
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
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 141, $this->source); })()), "nombre", [], "any", false, false, false, 141), "html", null, true);
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
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 150, $this->source); })()), "primerApellido", [], "any", false, false, false, 150), "html", null, true);
        echo "\");
                    }
                    comprobar = false;
                }
            }else if(id == \"segundoApellido\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == false) {
                    alert(\"El segundo apellido introducido es incorrecto.\");
                    if(dato != null) {
                        \$(\"#segundoApellido\").prop('value', \"";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 158, $this->source); })()), "segundoApellido", [], "any", false, false, false, 158), "html", null, true);
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
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 167, $this->source); })()), "nick", [], "any", false, false, false, 167), "html", null, true);
        echo "\");
                    }
                    comprobar = false;
                }
            }else if(id == \"localidad\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == false) {
                    alert(\"El localidad introducida es incorrecto.\");
                    if(dato != null) {
                        \$(\"#localidad\").prop('value', \"";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 175, $this->source); })()), "localidad", [], "any", false, false, false, 175), "html", null, true);
        echo "\");
                    }
                    comprobar = false;
                }
            }else if(id == \"provincia\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == false) {
                    alert(\"El provincia introducida es incorrecto.\");
                    if(dato != null) {
                        \$(\"#provincia\").prop('value', \"";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 183, $this->source); })()), "provincia", [], "any", false, false, false, 183), "html", null, true);
        echo "\");
                    }
                    comprobar = false;
                }
            }else if(id == \"telefonoMovil\") {
                if(dato.length == 0 && dato == \"\" || dato == null || dato == undefined || isNaN(dato) == true) {
                    alert(\"El teléfono móvil introducido es incorrecto.\");
                    if(dato != null) {
                        \$(\"#telefonoMovil\").prop('value', \"";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 191, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 191), "html", null, true);
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
        return array (  436 => 191,  425 => 183,  414 => 175,  403 => 167,  391 => 158,  380 => 150,  368 => 141,  354 => 129,  348 => 128,  342 => 125,  337 => 123,  332 => 121,  327 => 119,  322 => 117,  319 => 116,  316 => 115,  312 => 114,  308 => 112,  302 => 111,  298 => 109,  292 => 107,  290 => 106,  285 => 104,  280 => 102,  275 => 100,  270 => 98,  267 => 97,  264 => 96,  260 => 95,  254 => 91,  250 => 89,  244 => 87,  242 => 86,  235 => 81,  231 => 79,  225 => 77,  223 => 76,  216 => 71,  212 => 69,  206 => 67,  204 => 66,  197 => 61,  193 => 59,  187 => 57,  185 => 56,  178 => 51,  174 => 49,  168 => 47,  166 => 46,  159 => 41,  155 => 39,  149 => 37,  147 => 36,  140 => 31,  136 => 29,  130 => 27,  128 => 26,  120 => 21,  114 => 19,  110 => 17,  104 => 15,  102 => 14,  98 => 13,  91 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Perfil{% endblock %}

{% block body %}

    {# Añadir nuevo vehículo para vender #}
    <button><a href=\"/vehiculo/new\">Introducir vehículo a vender</a></button>

    <h1 id=\"datosPersonales\">Datos personales:</h1>

    <div id=\"avatar\">
        {{ form_start(avatarForm) }}
            {% if user.avatar != null %}
                <img src=\"/avatar/{{ user.avatar }}\" width=\"250px\" height=\"250px\" />
            {% else %}
                <p>No ha introducido su avatar</p>
            {% endif %}
            {{ form_row(avatarForm.avatar) }}
            <button type=\"submit\" class=\"btn\">Modificar</button>
        {{ form_end(avatarForm) }}
    </div>

    <div id=\"nombreDiv\">
        <label for=\"nombre\">Nombre:</label>
        {% if user.nombre != null or user.nombre != \"\" %}
            <input type=\"text\" id=\"nombre\" name=\"nombre\" value=\"{{ user.nombre }}\" id=\"nombre\" />
        {% else %}
            <input type=\"text\" id=\"nombre\" name=\"nombre\" value=\"\" placeholder=\"Rellenar nombre\" id=\"nombre\" />
        {% endif %}
        <button onClick=\"modificar('nombre')\">Modificar</button>
    </div>

    <div id=\"primerApellidoDiv\">
        <label for=\"primerApellido\">Primer apellido:</label>
        {% if user.primerApellido != null or user.primerApellido != \"\" %}
            <input type=\"text\" id=\"primerApellido\" name=\"primerApellido\" value=\"{{ user.primerApellido }}\" id=\"primerApellido\" />
        {% else %}
            <input type=\"text\" id=\"primerApellido\" name=\"primerApellido\" value=\"\" placeholder=\"Rellenar primer apellido\" id=\"primerApellido\" />
        {% endif %}
        <button onClick=\"modificar('primerApellido')\">Modificar</button>
    </div>

    <div id=\"segundoApellidoDiv\">
        <label for=\"segundoApellido\">Segundo apellido:</label>
        {% if user.segundoApellido != null or user.segundoApellido != \"\" %}
            <input type=\"text\" id=\"segundoApellido\" name=\"segundoApellido\" value=\"{{ user.segundoApellido }}\" id=\"segundoApellido\" />
        {% else %}
            <input type=\"text\" id=\"segundoApellido\" name=\"segundoApellido\" value=\"\" placeholder=\"Rellenar segundo apellido\" id=\"segundoApellido\" />
        {% endif %}
        <button onClick=\"modificar('segundoApellido')\">Modificar</button>
    </div>

    <div id=\"nickDiv\">
        <label for=\"nick\">Nick:</label>
        {% if user.nick != null or user.nick != \"\" %}
            <input type=\"text\" id=\"nick\" name=\"nick\" value=\"{{ user.nick }}\" id=\"nick\" />
        {% else %}
            <input type=\"text\" id=\"nick\" name=\"nick\" value=\"\" placeholder=\"Rellenar nick\" id=\"nick\" />
        {% endif %}
        <button onClick=\"modificar('nick')\">Modificar</button>
    </div>

    <div id=\"localidadDiv\">
        <label for=\"localidad\">Localidad:</label>
        {% if user.localidad != null or user.localidad != \"\" %}
            <input type=\"text\" id=\"localidad\" name=\"localidad\" value=\"{{ user.localidad }}\" id=\"localidad\" />
        {% else %}
            <input type=\"text\" id=\"localidad\" name=\"localidad\" value=\"\" placeholder=\"Rellenar localidad\" id=\"localidad\" />
        {% endif %}
        <button onClick=\"modificar('localidad')\">Modificar</button>
    </div>

    <div id=\"provinciaDiv\">
        <label for=\"provincia\">Provincia:</label>
        {% if user.provincia != null or user.provincia != \"\" %}
            <input type=\"text\" id=\"provincia\" name=\"provincia\" value=\"{{ user.provincia }}\" id=\"provincia\" />
        {% else %}
            <input type=\"text\" id=\"provincia\" name=\"provincia\" value=\"\" placeholder=\"Rellenar provincia\" id=\"provincia\" />
        {% endif %}
        <button onClick=\"modificar('provincia')\">Modificar</button>
    </div>

    <div id=\"telefonoMovilDiv\">
        <label for=\"telefonoMovil\">Teléfono móvil:</label>
        {% if user.telefonoMovil != null or user.telefonoMovil != \"\" %}
            <input type=\"tel\" id=\"telefonoMovil\" name=\"telefonoMovil\" value=\"{{ user.telefonoMovil }}\" pattern=\"[0-9]{9}\" id=\"telefonoMovil\" />
        {% else %}
            <input type=\"tel\" id=\"telefonoMovil\" name=\"telefonoMovil\" value=\"\" placeholder=\"123456789\" pattern=\"[0-9]{9}\" id=\"telefonoMovil\" />
        {% endif %}
        <button onClick=\"modificar('telefonoMovil')\">Modificar</button>
    </div>

    <h1>Lista de vehículos mios:</h1>
    {% for vehiculo in user.vehiculos %}
        {% if vehiculo.eliminado != true %}
            <div class=\"vehicles\">
                Marca: {{ vehiculo.marca }}
                <br/>
                Modelo: {{ vehiculo.modelo }}
                <br/>
                Descripción: {{ vehiculo.descripcion }}
                <br/>
                Precio: {{ vehiculo.precio }} euros.
                <br/>
                {% if vehiculo.venta == false %}
                    <button onClick=\"addBuscador({{ vehiculo.id }});\">Añadir a venta</button>
                {% endif %}
            </div>
        {% endif %}
    {% endfor %}

    <h1>Lista de vehículos en venta:</h1>
    {% for vehiculo in user.vehiculos %}
        {% if vehiculo.venta == true and vehiculo.eliminado == false %}
            <div class=\"vehicles\">
                Marca: {{ vehiculo.marca }}
                <br/>
                Modelo: {{ vehiculo.modelo }}
                <br/>
                Descripción: {{ vehiculo.descripcion }}
                <br/>
                Precio: {{ vehiculo.precio }} euros.
                <br/>
                <button onClick=\"eliminarBuscador({{ vehiculo.id }});\">Eliminar de venta</button>
            </div>
        {% endif %}
    {% endfor %}

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
{% endblock %}", "main/perfil.html.twig", "/home/bayo/proyectos/ComunityCar/templates/main/perfil.html.twig");
    }
}
