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

        <!-- Enlace a CDN JQuery -->
            <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    </head>
    <body>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 21
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        <div class=\"container\">
            <div class=\"d-flex justify-content-center h-100\">
                <div class=\"card\">
                    <div class=\"card-header pb-0\">
                        <h3>Sign Up</h3>
                        <div class=\"d-flex justify-content-end social_icon\">
                            <span><a href=\"https://es-es.facebook.com/\"><i class=\"fab fa-facebook-square\"></i></a></span>
                            <span><a href=\"https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin\"><i class=\"fab fa-google-plus-square\"></i></a></span>
                            <span><a href=\"https://twitter.com/?lang=es\"><i class=\"fab fa-twitter-square\"></i></a></span>
                        </div>
                        <div class=\"d-flex justify-content-center links\">
                            Have an account?<a href=\"/login\">Sign In</a>
                        </div>
                    </div>
                    <div class=\"card-body pb-0\">
                        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
                            <div class=\"input-group form-group\">
                                <div class=\"input-group-prepend text-white\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'row');
        echo "
                                </div>
                            </div>
                            <div class=\"input-group form-group\">
                                <div class=\"input-group-prepend text-white\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "plainPassword", [], "any", false, false, false, 48), 'row', ["label" => "Password"]);
        // line 50
        echo "
                                </div>
                            </div>
                            <div class=\"text-white text-white\">
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "agreeTerms", [], "any", false, false, false, 54), 'row');
        echo "
                            </div>
                            <div class=\"form-group mt-4\">
                                <input type=\"submit\" value=\"Register\" class=\"btn float-right login_btn\">
                            </div>
                        ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), 'form_end');
        echo "
                        <div class=\"ml-3 d-flex justify-content-start\">
                            <button class=\"btn float-right login_btn\" id=\"check\">Check</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type=\"text/javascript\">
            \$(\"#check\").click(function(ev) {
                // Variable comprobar para mensaje de correcta o incorrecta comprobación
                var comprobar = true;

                // Usuario
                var user = \$(\"#registration_form_email\").val();
                if(user.length == 0 || user == null) {
\t\t\t\t\talert(\"No has escrito nada en el campo Email.\");
                    comprobar = false;
\t\t\t\t}else if(user.indexOf('@', 0) == -1 || user.indexOf('.', 0) == -1) {
                    alert('El email introducido no es correcto.');
                    comprobar = false;
                }

                // Contraseña
\t\t\t\tvar password = \$(\"#registration_form_plainPassword\").val();
\t\t\t\tif(password.length == 0 || password == null) {
\t\t\t\t\talert(\"No has escrito nada en el campo Password.\");
                    comprobar = false;
\t\t\t\t}else if(password.length < 6 && password.length != 0) {
\t\t\t\t\talert(\"Contraseña demasiado corta.\");
\t\t\t\t\tcomprobar = false;
\t\t\t\t}else if(password.length > 32) {
\t\t\t\t\talert(\"Contraseña demasiado larga.\");
\t\t\t\t\tcomprobar = false;
\t\t\t\t}

                // CheckBox
                var checkbox = \$('#registration_form_agreeTerms').prop('checked');
                if(!checkbox) {
                    alert(\"No has seleccionado el campo checkbox del acuerdo a los términos. Es obligatorio.\");
\t\t\t\t\tcomprobar = false;
                }

\t\t\t\tif(comprobar == true) {
\t\t\t\t\talert(\"Puedes proceder a registrarte debido a que los datos introducidos son correctos.\");
\t\t\t\t}
            });
        </script>
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
        return array (  126 => 59,  118 => 54,  112 => 50,  110 => 48,  101 => 42,  94 => 38,  77 => 23,  68 => 21,  64 => 20,  43 => 1,);
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

        <!-- Enlace a CDN JQuery -->
            <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    </head>
    <body>
        {% for flashError in app.flashes('verify_email_error') %}
            <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
        {% endfor %}
        <div class=\"container\">
            <div class=\"d-flex justify-content-center h-100\">
                <div class=\"card\">
                    <div class=\"card-header pb-0\">
                        <h3>Sign Up</h3>
                        <div class=\"d-flex justify-content-end social_icon\">
                            <span><a href=\"https://es-es.facebook.com/\"><i class=\"fab fa-facebook-square\"></i></a></span>
                            <span><a href=\"https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin\"><i class=\"fab fa-google-plus-square\"></i></a></span>
                            <span><a href=\"https://twitter.com/?lang=es\"><i class=\"fab fa-twitter-square\"></i></a></span>
                        </div>
                        <div class=\"d-flex justify-content-center links\">
                            Have an account?<a href=\"/login\">Sign In</a>
                        </div>
                    </div>
                    <div class=\"card-body pb-0\">
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
                            <div class=\"form-group mt-4\">
                                <input type=\"submit\" value=\"Register\" class=\"btn float-right login_btn\">
                            </div>
                        {{ form_end(registrationForm) }}
                        <div class=\"ml-3 d-flex justify-content-start\">
                            <button class=\"btn float-right login_btn\" id=\"check\">Check</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type=\"text/javascript\">
            \$(\"#check\").click(function(ev) {
                // Variable comprobar para mensaje de correcta o incorrecta comprobación
                var comprobar = true;

                // Usuario
                var user = \$(\"#registration_form_email\").val();
                if(user.length == 0 || user == null) {
\t\t\t\t\talert(\"No has escrito nada en el campo Email.\");
                    comprobar = false;
\t\t\t\t}else if(user.indexOf('@', 0) == -1 || user.indexOf('.', 0) == -1) {
                    alert('El email introducido no es correcto.');
                    comprobar = false;
                }

                // Contraseña
\t\t\t\tvar password = \$(\"#registration_form_plainPassword\").val();
\t\t\t\tif(password.length == 0 || password == null) {
\t\t\t\t\talert(\"No has escrito nada en el campo Password.\");
                    comprobar = false;
\t\t\t\t}else if(password.length < 6 && password.length != 0) {
\t\t\t\t\talert(\"Contraseña demasiado corta.\");
\t\t\t\t\tcomprobar = false;
\t\t\t\t}else if(password.length > 32) {
\t\t\t\t\talert(\"Contraseña demasiado larga.\");
\t\t\t\t\tcomprobar = false;
\t\t\t\t}

                // CheckBox
                var checkbox = \$('#registration_form_agreeTerms').prop('checked');
                if(!checkbox) {
                    alert(\"No has seleccionado el campo checkbox del acuerdo a los términos. Es obligatorio.\");
\t\t\t\t\tcomprobar = false;
                }

\t\t\t\tif(comprobar == true) {
\t\t\t\t\talert(\"Puedes proceder a registrarte debido a que los datos introducidos son correctos.\");
\t\t\t\t}
            });
        </script>
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
