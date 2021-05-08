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
        ";
        // line 25
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "nombre", [], "any", false, false, false, 25), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "nombre", [], "any", false, false, false, 25), "")))) {
            // line 26
            echo "            <input type=\"text\" id=\"nombre\" name=\"nombre\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "nombre", [], "any", false, false, false, 26), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 28
            echo "            <input type=\"text\" id=\"nombre\" name=\"nombre\" value=\"\" placeholder=\"Campo nombre sin rellenar\" />
        ";
        }
        // line 30
        echo "        <button onClick=\"modificar('nombre')\">Modificar</button>
    </div>

    <div id=\"primerApellidoDiv\">
        ";
        // line 34
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "primerApellido", [], "any", false, false, false, 34), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "primerApellido", [], "any", false, false, false, 34), "")))) {
            // line 35
            echo "            <input type=\"text\" id=\"primerApellido\" name=\"primerApellido\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "primerApellido", [], "any", false, false, false, 35), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 37
            echo "            <input type=\"text\" id=\"primerApellido\" name=\"primerApellido\" value=\"\" placeholder=\"Campo primer apellido sin rellenar\" />
        ";
        }
        // line 39
        echo "        <button onClick=\"modificar('primerApellido')\">Modificar</button>
    </div>

    <div id=\"segundoApellidoDiv\">
        ";
        // line 43
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "segundoApellido", [], "any", false, false, false, 43), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "segundoApellido", [], "any", false, false, false, 43), "")))) {
            // line 44
            echo "            <input type=\"text\" id=\"segundoApellido\" name=\"segundoApellido\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "segundoApellido", [], "any", false, false, false, 44), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 46
            echo "            <input type=\"text\" id=\"segundoApellido\" name=\"segundoApellido\" value=\"\" placeholder=\"Campo segundo apellido sin rellenar\" />
        ";
        }
        // line 48
        echo "        <button onClick=\"modificar('segundoApellido')\">Modificar</button>
    </div>

    <div id=\"nickDiv\">
        ";
        // line 52
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "nick", [], "any", false, false, false, 52), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "nick", [], "any", false, false, false, 52), "")))) {
            // line 53
            echo "            <input type=\"text\" id=\"nick\" name=\"nick\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "nick", [], "any", false, false, false, 53), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 55
            echo "            <input type=\"text\" id=\"nick\" name=\"nick\" value=\"\" placeholder=\"Campo nick sin rellenar\" />
        ";
        }
        // line 57
        echo "        <button onClick=\"modificar('nick')\">Modificar</button>
    </div>

    <div id=\"localidadDiv\">
        ";
        // line 61
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "localidad", [], "any", false, false, false, 61), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "localidad", [], "any", false, false, false, 61), "")))) {
            // line 62
            echo "            <input type=\"text\" id=\"localidad\" name=\"localidad\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "localidad", [], "any", false, false, false, 62), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 64
            echo "            <input type=\"text\" id=\"localidad\" name=\"localidad\" value=\"\" placeholder=\"Campo localidad sin rellenar\" />
        ";
        }
        // line 66
        echo "        <button onClick=\"modificar('localidad')\">Modificar</button>
    </div>

    <div id=\"provinciaDiv\">
        ";
        // line 70
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "provincia", [], "any", false, false, false, 70), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "provincia", [], "any", false, false, false, 70), "")))) {
            // line 71
            echo "            <input type=\"text\" id=\"provincia\" name=\"provincia\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "provincia", [], "any", false, false, false, 71), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 73
            echo "            <input type=\"text\" id=\"provincia\" name=\"provincia\" value=\"\" placeholder=\"Campo provincia sin rellenar\" />
        ";
        }
        // line 75
        echo "        <button onClick=\"modificar('provincia')\">Modificar</button>
    </div>

    <div id=\"telefonoMovilDiv\">
        ";
        // line 79
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 79), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 79), "")))) {
            // line 80
            echo "            <input type=\"number\" id=\"telefonoMovil\" name=\"telefonoMovil\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 80), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 82
            echo "            <input type=\"number\" id=\"telefonoMovil\" name=\"telefonoMovil\" value=\"\" placeholder=\"Campo teléfono móvil sin rellenar\" />
        ";
        }
        // line 84
        echo "        <button onClick=\"modificar('telefonoMovil')\">Modificar</button>
    </div>

    <h1>Lista de vehículos mios:</h1>
    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "vehiculos", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["vehiculo"]) {
            // line 89
            echo "        ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "eliminado", [], "any", false, false, false, 89), true))) {
                // line 90
                echo "            <div class=\"vehicles\">
                Marca: ";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "marca", [], "any", false, false, false, 91), "html", null, true);
                echo "
                <br/>
                Modelo: ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "modelo", [], "any", false, false, false, 93), "html", null, true);
                echo "
                <br/>
                Descripción: ";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "descripcion", [], "any", false, false, false, 95), "html", null, true);
                echo "
                <br/>
                Precio: ";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "precio", [], "any", false, false, false, 97), "html", null, true);
                echo " euros.
                <br/>
                ";
                // line 99
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "venta", [], "any", false, false, false, 99), false))) {
                    // line 100
                    echo "                    <button onClick=\"addBuscador(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "id", [], "any", false, false, false, 100), "html", null, true);
                    echo ");\">Añadir a venta</button>
                ";
                }
                // line 102
                echo "            </div>
        ";
            }
            // line 104
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehiculo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "
    <h1>Lista de vehículos en venta:</h1>
    ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "vehiculos", [], "any", false, false, false, 107));
        foreach ($context['_seq'] as $context["_key"] => $context["vehiculo"]) {
            // line 108
            echo "        ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "venta", [], "any", false, false, false, 108), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "eliminado", [], "any", false, false, false, 108), false)))) {
                // line 109
                echo "            <div class=\"vehicles\">
                Marca: ";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "marca", [], "any", false, false, false, 110), "html", null, true);
                echo "
                <br/>
                Modelo: ";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "modelo", [], "any", false, false, false, 112), "html", null, true);
                echo "
                <br/>
                Descripción: ";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "descripcion", [], "any", false, false, false, 114), "html", null, true);
                echo "
                <br/>
                Precio: ";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "precio", [], "any", false, false, false, 116), "html", null, true);
                echo " euros.
                <br/>
                <button onClick=\"eliminarBuscador(";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "id", [], "any", false, false, false, 118), "html", null, true);
                echo ");\">Eliminar de venta</button>
            </div>
        ";
            }
            // line 121
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehiculo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "
    <script>
        function modificar(id) {

            var datos = {
                'dato':\$(\"#\"+id).val(),
                'condicion':id
            };

            function fail(data) {
                alert(\"Error de AJAX: \" + data);
            }

            \$.ajax({
                type: \"GET\",
                url: \"/modificar\",
                data: datos,
                success: function(data) {
                    if(data == \"error\") {
                        alert(\"Error\");
                    }else if(data == \"nombre\") {
                        \$(\"#nombreDiv\").val('";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 143, $this->source); })()), "nombre", [], "any", false, false, false, 143), "html", null, true);
        echo "');
                    }else if(data == \"primerApellido\") {
                        \$(\"#primerApellidoDiv\").val('";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 145, $this->source); })()), "primerApellido", [], "any", false, false, false, 145), "html", null, true);
        echo "');
                    }else if(data == \"segundoApellido\") {
                        \$(\"#segundoApellidoDiv\").val('";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 147, $this->source); })()), "segundoApellido", [], "any", false, false, false, 147), "html", null, true);
        echo "');
                    }else if(data == \"nick\") {
                        \$(\"#nickDiv\").val('";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 149, $this->source); })()), "nick", [], "any", false, false, false, 149), "html", null, true);
        echo "');
                    }else if(data == \"localidad\") {
                        \$(\"#localidadDiv\").val('";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 151, $this->source); })()), "localidad", [], "any", false, false, false, 151), "html", null, true);
        echo "');
                    }else if(data == \"provincia\") {
                        \$(\"#provinciaDiv\").val('";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 153, $this->source); })()), "provincia", [], "any", false, false, false, 153), "html", null, true);
        echo "');
                    }else if(data == \"telefonoMovil\") {
                        \$(\"#telefonoMovilDiv\").val('";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 155, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 155), "html", null, true);
        echo "');
                    }
                },
                error: fail
            });
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
        return array (  400 => 155,  395 => 153,  390 => 151,  385 => 149,  380 => 147,  375 => 145,  370 => 143,  347 => 122,  341 => 121,  335 => 118,  330 => 116,  325 => 114,  320 => 112,  315 => 110,  312 => 109,  309 => 108,  305 => 107,  301 => 105,  295 => 104,  291 => 102,  285 => 100,  283 => 99,  278 => 97,  273 => 95,  268 => 93,  263 => 91,  260 => 90,  257 => 89,  253 => 88,  247 => 84,  243 => 82,  237 => 80,  235 => 79,  229 => 75,  225 => 73,  219 => 71,  217 => 70,  211 => 66,  207 => 64,  201 => 62,  199 => 61,  193 => 57,  189 => 55,  183 => 53,  181 => 52,  175 => 48,  171 => 46,  165 => 44,  163 => 43,  157 => 39,  153 => 37,  147 => 35,  145 => 34,  139 => 30,  135 => 28,  129 => 26,  127 => 25,  120 => 21,  114 => 19,  110 => 17,  104 => 15,  102 => 14,  98 => 13,  91 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
        {% if user.nombre != null or user.nombre != \"\" %}
            <input type=\"text\" id=\"nombre\" name=\"nombre\" value=\"{{ user.nombre }}\" />
        {% else %}
            <input type=\"text\" id=\"nombre\" name=\"nombre\" value=\"\" placeholder=\"Campo nombre sin rellenar\" />
        {% endif %}
        <button onClick=\"modificar('nombre')\">Modificar</button>
    </div>

    <div id=\"primerApellidoDiv\">
        {% if user.primerApellido != null or user.primerApellido != \"\" %}
            <input type=\"text\" id=\"primerApellido\" name=\"primerApellido\" value=\"{{ user.primerApellido }}\" />
        {% else %}
            <input type=\"text\" id=\"primerApellido\" name=\"primerApellido\" value=\"\" placeholder=\"Campo primer apellido sin rellenar\" />
        {% endif %}
        <button onClick=\"modificar('primerApellido')\">Modificar</button>
    </div>

    <div id=\"segundoApellidoDiv\">
        {% if user.segundoApellido != null or user.segundoApellido != \"\" %}
            <input type=\"text\" id=\"segundoApellido\" name=\"segundoApellido\" value=\"{{ user.segundoApellido }}\" />
        {% else %}
            <input type=\"text\" id=\"segundoApellido\" name=\"segundoApellido\" value=\"\" placeholder=\"Campo segundo apellido sin rellenar\" />
        {% endif %}
        <button onClick=\"modificar('segundoApellido')\">Modificar</button>
    </div>

    <div id=\"nickDiv\">
        {% if user.nick != null or user.nick != \"\" %}
            <input type=\"text\" id=\"nick\" name=\"nick\" value=\"{{ user.nick }}\" />
        {% else %}
            <input type=\"text\" id=\"nick\" name=\"nick\" value=\"\" placeholder=\"Campo nick sin rellenar\" />
        {% endif %}
        <button onClick=\"modificar('nick')\">Modificar</button>
    </div>

    <div id=\"localidadDiv\">
        {% if user.localidad != null or user.localidad != \"\" %}
            <input type=\"text\" id=\"localidad\" name=\"localidad\" value=\"{{ user.localidad }}\" />
        {% else %}
            <input type=\"text\" id=\"localidad\" name=\"localidad\" value=\"\" placeholder=\"Campo localidad sin rellenar\" />
        {% endif %}
        <button onClick=\"modificar('localidad')\">Modificar</button>
    </div>

    <div id=\"provinciaDiv\">
        {% if user.provincia != null or user.provincia != \"\" %}
            <input type=\"text\" id=\"provincia\" name=\"provincia\" value=\"{{ user.provincia }}\" />
        {% else %}
            <input type=\"text\" id=\"provincia\" name=\"provincia\" value=\"\" placeholder=\"Campo provincia sin rellenar\" />
        {% endif %}
        <button onClick=\"modificar('provincia')\">Modificar</button>
    </div>

    <div id=\"telefonoMovilDiv\">
        {% if user.telefonoMovil != null or user.telefonoMovil != \"\" %}
            <input type=\"number\" id=\"telefonoMovil\" name=\"telefonoMovil\" value=\"{{ user.telefonoMovil }}\" />
        {% else %}
            <input type=\"number\" id=\"telefonoMovil\" name=\"telefonoMovil\" value=\"\" placeholder=\"Campo teléfono móvil sin rellenar\" />
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

            var datos = {
                'dato':\$(\"#\"+id).val(),
                'condicion':id
            };

            function fail(data) {
                alert(\"Error de AJAX: \" + data);
            }

            \$.ajax({
                type: \"GET\",
                url: \"/modificar\",
                data: datos,
                success: function(data) {
                    if(data == \"error\") {
                        alert(\"Error\");
                    }else if(data == \"nombre\") {
                        \$(\"#nombreDiv\").val('{{user.nombre}}');
                    }else if(data == \"primerApellido\") {
                        \$(\"#primerApellidoDiv\").val('{{user.primerApellido}}');
                    }else if(data == \"segundoApellido\") {
                        \$(\"#segundoApellidoDiv\").val('{{user.segundoApellido}}');
                    }else if(data == \"nick\") {
                        \$(\"#nickDiv\").val('{{user.nick}}');
                    }else if(data == \"localidad\") {
                        \$(\"#localidadDiv\").val('{{user.localidad}}');
                    }else if(data == \"provincia\") {
                        \$(\"#provinciaDiv\").val('{{user.provincia}}');
                    }else if(data == \"telefonoMovil\") {
                        \$(\"#telefonoMovilDiv\").val('{{user.telefonoMovil}}');
                    }
                },
                error: fail
            });
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
