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

/* navbar/navbar.html.twig */
class __TwigTemplate_d7f9159e4a93a3400f8d64ff6b6e4919a97527b85e4168ff91fb3f5719fee177 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/navbar.html.twig"));

        // line 1
        echo "<nav class=\"nav nav-masthead justify-content-center float-md-end bg-dark\" id=\"navbar\">
\t
\t";
        // line 3
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 4
            echo "\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Buscador</a>
\t\t<a class=\"nav-link\" href=\"/messagesReportados\">Mensajes reportados</a>
\t\t<a class=\"nav-link\" href=\"/usuarios\">Exportar usuarios</a>
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\tAdmin - ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "email", [], "any", false, false, false, 9), "html", null, true);
            echo "
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t<a class=\"dropdown-item\" href=\"/perfil\">Perfil</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a class=\"dropdown-item\" href=\"/login\">Login</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"/register\">Register</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"/logout\">Logout</a>
\t\t\t</div>
\t\t</li>
\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 20
            echo "\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Buscador</a>
\t\t<a class=\"nav-link\" href=\"/message\">Mensajes</a>
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "email", [], "any", false, false, false, 24), "html", null, true);
            echo "
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t<a class=\"dropdown-item\" href=\"/perfil\">Perfil</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a class=\"dropdown-item\" href=\"/login\">Login</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"/register\">Register</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"/logout\">Logout</a>
\t\t\t</div>
\t\t</li>
\t";
        }
        // line 35
        echo "</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 35,  76 => 24,  70 => 20,  56 => 9,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"nav nav-masthead justify-content-center float-md-end bg-dark\" id=\"navbar\">
\t
\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Buscador</a>
\t\t<a class=\"nav-link\" href=\"/messagesReportados\">Mensajes reportados</a>
\t\t<a class=\"nav-link\" href=\"/usuarios\">Exportar usuarios</a>
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\tAdmin - {{ app.user.email }}
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t<a class=\"dropdown-item\" href=\"/perfil\">Perfil</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a class=\"dropdown-item\" href=\"/login\">Login</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"/register\">Register</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"/logout\">Logout</a>
\t\t\t</div>
\t\t</li>
\t{% elseif is_granted(\"ROLE_USER\") %}
\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Buscador</a>
\t\t<a class=\"nav-link\" href=\"/message\">Mensajes</a>
\t\t<li class=\"nav-item dropdown\">
\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t{{ app.user.email }}
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t<a class=\"dropdown-item\" href=\"/perfil\">Perfil</a>
\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t<a class=\"dropdown-item\" href=\"/login\">Login</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"/register\">Register</a>
\t\t\t\t<a class=\"dropdown-item\" href=\"/logout\">Logout</a>
\t\t\t</div>
\t\t</li>
\t{% endif %}
</nav>", "navbar/navbar.html.twig", "/home/bayo/proyectos/ComunityCar/templates/navbar/navbar.html.twig");
    }
}
