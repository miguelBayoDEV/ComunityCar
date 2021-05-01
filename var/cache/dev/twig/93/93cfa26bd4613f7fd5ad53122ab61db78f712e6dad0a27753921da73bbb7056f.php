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

/* registration/register.html.twig */
class __TwigTemplate_8bfc21328f5c059c792b39d7b32b0976681a8c0f3d174dea7d1791236748b2ce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Register Page</title>
        <!--Made with love by Mutiullah Samim -->
    
        <!--Bootsrap 4 CDN-->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
        
        <!--Fontawesome CDN-->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

        <!--Custom styles-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/comunes/login/css/login.css\">
    </head>
    <body>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 18
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        <div class=\"container\">
            <div class=\"d-flex justify-content-center h-100\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3>Sign Up</h3>
                        <div class=\"d-flex justify-content-center links\">
                            Have an account?<a href=\"/login\">Sign In</a>
                        </div>
                        <div class=\"d-flex justify-content-end social_icon\">
                            <span><i class=\"fab fa-facebook-square\"></i></span>
                            <span><i class=\"fab fa-google-plus-square\"></i></span>
                            <span><i class=\"fab fa-twitter-square\"></i></span>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), 'form_start');
        echo "
                            <div class=\"input-group form-group\">
                                <div class=\"input-group-prepend text-white\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'row');
        echo "
                                </div>
                            </div>
                            <div class=\"input-group form-group\">
                                <div class=\"input-group-prepend text-white\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "plainPassword", [], "any", false, false, false, 45), 'row', ["label" => "Password"]);
        // line 47
        echo "
                                </div>
                            </div>
                            <div class=\"text-white text-white\">
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "agreeTerms", [], "any", false, false, false, 51), 'row');
        echo "
                            </div>
                            <div class=\"form-group\">
                                <input type=\"submit\" value=\"Register\" class=\"btn float-right login_btn\">
                            </div>
                        ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 56,  115 => 51,  109 => 47,  107 => 45,  98 => 39,  91 => 35,  74 => 20,  65 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>Register Page</title>
        <!--Made with love by Mutiullah Samim -->
    
        <!--Bootsrap 4 CDN-->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
        
        <!--Fontawesome CDN-->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

        <!--Custom styles-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/comunes/login/css/login.css\">
    </head>
    <body>
        {% for flashError in app.flashes('verify_email_error') %}
            <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"d-flex justify-content-center h-100\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3>Sign Up</h3>
                        <div class=\"d-flex justify-content-center links\">
                            Have an account?<a href=\"/login\">Sign In</a>
                        </div>
                        <div class=\"d-flex justify-content-end social_icon\">
                            <span><i class=\"fab fa-facebook-square\"></i></span>
                            <span><i class=\"fab fa-google-plus-square\"></i></span>
                            <span><i class=\"fab fa-twitter-square\"></i></span>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(registrationForm) }}
                            <div class=\"input-group form-group\">
                                <div class=\"input-group-prepend text-white\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                                    {{ form_row(registrationForm.email) }}
                                </div>
                            </div>
                            <div class=\"input-group form-group\">
                                <div class=\"input-group-prepend text-white\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
                                    {{ form_row(registrationForm.plainPassword, {
                                        label: 'Password'
                                    }) }}
                                </div>
                            </div>
                            <div class=\"text-white text-white\">
                                {{ form_row(registrationForm.agreeTerms) }}
                            </div>
                            <div class=\"form-group\">
                                <input type=\"submit\" value=\"Register\" class=\"btn float-right login_btn\">
                            </div>
                        {{ form_end(registrationForm) }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

{# {% block body %}
    {% for flashError in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
    {% endfor %}

    <h1>Register</h1>

    {{ form_start(registrationForm) }}
        {{ form_row(registrationForm.email) }}
        {{ form_row(registrationForm.plainPassword, {
            label: 'Password'
        }) }}
        {{ form_row(registrationForm.agreeTerms) }}

        <button type=\"submit\" class=\"btn\">Register</button>
    {{ form_end(registrationForm) }}
{% endblock %} #}
", "registration/register.html.twig", "/home/bayo/proyectos/ComunityCar/templates/registration/register.html.twig");
    }
}
