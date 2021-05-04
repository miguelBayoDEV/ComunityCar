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
        echo "    <h1 id=\"datosPersonales\">Datos personales:</h1>

    <div id=\"avatar\">
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
            ";
        // line 10
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "avatar", [], "any", false, false, false, 10), null))) {
            // line 11
            echo "                <img src=\"/avatar/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "avatar", [], "any", false, false, false, 11), "html", null, true);
            echo "\" width=\"250px\" height=\"250px\" />
            ";
        } else {
            // line 13
            echo "                <p>No ha introducido su avatar</p>
            ";
        }
        // line 15
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 15, $this->source); })()), "avatar", [], "any", false, false, false, 15), 'row');
        echo "
            <button type=\"submit\" class=\"btn\">Modificar</button>
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
    </div>

    <div id=\"nombreDiv\">
        ";
        // line 21
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "nombre", [], "any", false, false, false, 21), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "nombre", [], "any", false, false, false, 21), "")))) {
            // line 22
            echo "            <input type=\"text\" id=\"nombre\" name=\"nombre\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "nombre", [], "any", false, false, false, 22), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 24
            echo "            <input type=\"text\" id=\"nombre\" name=\"nombre\" value=\"\" placeholder=\"Campo nombre sin rellenar\" />
        ";
        }
        // line 26
        echo "        <button onClick=\"modificar('nombre')\">Modificar</button>
    </div>

    <div id=\"primerApellidoDiv\">
        ";
        // line 30
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "primerApellido", [], "any", false, false, false, 30), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "primerApellido", [], "any", false, false, false, 30), "")))) {
            // line 31
            echo "            <input type=\"text\" id=\"primerApellido\" name=\"primerApellido\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "primerApellido", [], "any", false, false, false, 31), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 33
            echo "            <input type=\"text\" id=\"primerApellido\" name=\"primerApellido\" value=\"\" placeholder=\"Campo primer apellido sin rellenar\" />
        ";
        }
        // line 35
        echo "        <button onClick=\"modificar('primerApellido')\">Modificar</button>
    </div>

    <div id=\"segundoApellidoDiv\">
        ";
        // line 39
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "segundoApellido", [], "any", false, false, false, 39), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "segundoApellido", [], "any", false, false, false, 39), "")))) {
            // line 40
            echo "            <input type=\"text\" id=\"segundoApellido\" name=\"segundoApellido\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "segundoApellido", [], "any", false, false, false, 40), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 42
            echo "            <input type=\"text\" id=\"segundoApellido\" name=\"segundoApellido\" value=\"\" placeholder=\"Campo segundo apellido sin rellenar\" />
        ";
        }
        // line 44
        echo "        <button onClick=\"modificar('segundoApellido')\">Modificar</button>
    </div>

    <div id=\"nickDiv\">
        ";
        // line 48
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "nick", [], "any", false, false, false, 48), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "nick", [], "any", false, false, false, 48), "")))) {
            // line 49
            echo "            <input type=\"text\" id=\"nick\" name=\"nick\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "nick", [], "any", false, false, false, 49), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 51
            echo "            <input type=\"text\" id=\"nick\" name=\"nick\" value=\"\" placeholder=\"Campo nick sin rellenar\" />
        ";
        }
        // line 53
        echo "        <button onClick=\"modificar('nick')\">Modificar</button>
    </div>

    <div id=\"localidadDiv\">
        ";
        // line 57
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "localidad", [], "any", false, false, false, 57), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "localidad", [], "any", false, false, false, 57), "")))) {
            // line 58
            echo "            <input type=\"text\" id=\"localidad\" name=\"localidad\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "localidad", [], "any", false, false, false, 58), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 60
            echo "            <input type=\"text\" id=\"localidad\" name=\"localidad\" value=\"\" placeholder=\"Campo localidad sin rellenar\" />
        ";
        }
        // line 62
        echo "        <button onClick=\"modificar('localidad')\">Modificar</button>
    </div>

    <div id=\"provinciaDiv\">
        ";
        // line 66
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "provincia", [], "any", false, false, false, 66), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "provincia", [], "any", false, false, false, 66), "")))) {
            // line 67
            echo "            <input type=\"text\" id=\"provincia\" name=\"provincia\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "provincia", [], "any", false, false, false, 67), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 69
            echo "            <input type=\"text\" id=\"provincia\" name=\"provincia\" value=\"\" placeholder=\"Campo provincia sin rellenar\" />
        ";
        }
        // line 71
        echo "        <button onClick=\"modificar('provincia')\">Modificar</button>
    </div>

    <div id=\"telefonoMovilDiv\">
        ";
        // line 75
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 75), null)) || (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 75), "")))) {
            // line 76
            echo "            <input type=\"number\" id=\"telefonoMovil\" name=\"telefonoMovil\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 76), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 78
            echo "            <input type=\"number\" id=\"telefonoMovil\" name=\"telefonoMovil\" value=\"\" placeholder=\"Campo teléfono móvil sin rellenar\" />
        ";
        }
        // line 80
        echo "        <button onClick=\"modificar('telefonoMovil')\">Modificar</button>
    </div>

    <h1>Lista de vehículos mios:</h1>
    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "vehiculos", [], "any", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["vehiculo"]) {
            // line 85
            echo "        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "eliminado", [], "any", false, false, false, 85), true))) {
                // line 86
                echo "            <div class=\"vehicles\">
                Marca: ";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "marca", [], "any", false, false, false, 87), "html", null, true);
                echo "
                <br/>
                Modelo: ";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "modelo", [], "any", false, false, false, 89), "html", null, true);
                echo "
                <br/>
                Descripción: ";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "descripcion", [], "any", false, false, false, 91), "html", null, true);
                echo "
                <br/>
                Precio: ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "precio", [], "any", false, false, false, 93), "html", null, true);
                echo " euros.
                <br/>
                ";
                // line 95
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "venta", [], "any", false, false, false, 95), false))) {
                    // line 96
                    echo "                    <button onClick=\"addBuscador(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "id", [], "any", false, false, false, 96), "html", null, true);
                    echo ");\">Añadir a venta</button>
                ";
                }
                // line 98
                echo "            </div>
        ";
            }
            // line 100
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehiculo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "
    <h1>Lista de vehículos en venta:</h1>
    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 103, $this->source); })()), "vehiculos", [], "any", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["vehiculo"]) {
            // line 104
            echo "        ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "venta", [], "any", false, false, false, 104), true)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["vehiculo"], "eliminado", [], "any", false, false, false, 104), false)))) {
                // line 105
                echo "            <div class=\"vehicles\">
                Marca: ";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "marca", [], "any", false, false, false, 106), "html", null, true);
                echo "
                <br/>
                Modelo: ";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "modelo", [], "any", false, false, false, 108), "html", null, true);
                echo "
                <br/>
                Descripción: ";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "descripcion", [], "any", false, false, false, 110), "html", null, true);
                echo "
                <br/>
                Precio: ";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "precio", [], "any", false, false, false, 112), "html", null, true);
                echo " euros.
                <br/>
                <button onClick=\"eliminarBuscador(";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehiculo"], "id", [], "any", false, false, false, 114), "html", null, true);
                echo ");\">Eliminar de venta</button>
            </div>
        ";
            }
            // line 117
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehiculo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
    ";
        // line 120
        echo "    <button><a href=\"/vehiculo/new\">Introducir vehículo a vender</a></button>

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
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 142, $this->source); })()), "nombre", [], "any", false, false, false, 142), "html", null, true);
        echo "');
                    }else if(data == \"primerApellido\") {
                        \$(\"#primerApellidoDiv\").val('";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 144, $this->source); })()), "primerApellido", [], "any", false, false, false, 144), "html", null, true);
        echo "');
                    }else if(data == \"segundoApellido\") {
                        \$(\"#segundoApellidoDiv\").val('";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 146, $this->source); })()), "segundoApellido", [], "any", false, false, false, 146), "html", null, true);
        echo "');
                    }else if(data == \"nick\") {
                        \$(\"#nickDiv\").val('";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 148, $this->source); })()), "nick", [], "any", false, false, false, 148), "html", null, true);
        echo "');
                    }else if(data == \"localidad\") {
                        \$(\"#localidadDiv\").val('";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 150, $this->source); })()), "localidad", [], "any", false, false, false, 150), "html", null, true);
        echo "');
                    }else if(data == \"provincia\") {
                        \$(\"#provinciaDiv\").val('";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 152, $this->source); })()), "provincia", [], "any", false, false, false, 152), "html", null, true);
        echo "');
                    }else if(data == \"telefonoMovil\") {
                        \$(\"#telefonoMovilDiv\").val('";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 154, $this->source); })()), "telefonoMovil", [], "any", false, false, false, 154), "html", null, true);
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
        return array (  399 => 154,  394 => 152,  389 => 150,  384 => 148,  379 => 146,  374 => 144,  369 => 142,  345 => 120,  342 => 118,  336 => 117,  330 => 114,  325 => 112,  320 => 110,  315 => 108,  310 => 106,  307 => 105,  304 => 104,  300 => 103,  296 => 101,  290 => 100,  286 => 98,  280 => 96,  278 => 95,  273 => 93,  268 => 91,  263 => 89,  258 => 87,  255 => 86,  252 => 85,  248 => 84,  242 => 80,  238 => 78,  232 => 76,  230 => 75,  224 => 71,  220 => 69,  214 => 67,  212 => 66,  206 => 62,  202 => 60,  196 => 58,  194 => 57,  188 => 53,  184 => 51,  178 => 49,  176 => 48,  170 => 44,  166 => 42,  160 => 40,  158 => 39,  152 => 35,  148 => 33,  142 => 31,  140 => 30,  134 => 26,  130 => 24,  124 => 22,  122 => 21,  115 => 17,  109 => 15,  105 => 13,  99 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Perfil{% endblock %}

{% block body %}
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
        {% if vehiculo.eliminado == true %}
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

    {# Añadir nuevo vehículo para vender #}
    <button><a href=\"/vehiculo/new\">Introducir vehículo a vender</a></button>

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
