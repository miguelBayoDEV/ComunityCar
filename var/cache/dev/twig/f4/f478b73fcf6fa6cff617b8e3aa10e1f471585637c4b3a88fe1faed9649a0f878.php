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

/* security/login.html.twig */
class __TwigTemplate_0de958300d9757686251a0d9de2b8ee8ba68c13c9794054618bd35c6a844cd29 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
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
        <div class=\"container\">
            <div class=\"d-flex justify-content-center h-100\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3>Sign In</h3>
                        <div class=\"d-flex justify-content-end social_icon\">
                            <span><a href=\"https://es-es.facebook.com/\"><i class=\"fab fa-facebook-square\"></i></a></span>
                            <span><a href=\"https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin\"><i class=\"fab fa-google-plus-square\"></i></a></span>
                            <span><a href=\"https://twitter.com/?lang=es\"><i class=\"fab fa-twitter-square\"></i></a></span>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\">
                            ";
        // line 33
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "                                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 34, $this->source); })()), "messageKey", [], "any", false, false, false, 34), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 34, $this->source); })()), "messageData", [], "any", false, false, false, 34), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 36
        echo "                            <div class=\"input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                                </div>
                                <input type=\"email\" name=\"email\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"email\" id=\"email\">
                            </div>
                            <div class=\"input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
                                </div>
                                <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"password\" id=\"password\">
                            </div>
                            ";
        // line 51
        echo "                            <input type=\"hidden\" name=\"_csrf_token\"
                                value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                            >
                            <div class=\"form-group\">
                                <input type=\"submit\" value=\"Login\" class=\"btn float-right login_btn\">
                            </div>
                        </form>

                        <div class=\"ml-3 d-flex justify-content-start\">
                            <button class=\"btn float-right login_btn\" id=\"check\">Check</button>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-center links\">
                            Don't have an account?<a href=\"/register\">Sign Up</a>
                        </div>
                        ";
        // line 70
        echo "                    </div>
                </div>
            </div>
        </div>

        <script type=\"text/javascript\">
            \$(\"#check\").click(function(ev) {
                // Variable comprobar para mensaje de correcta o incorrecta comprobación
                var comprobar = true;

                // Usuario
                var user = \$(\"#email\").val();
                if(user.length == 0 || user == null) {
\t\t\t\t\talert(\"No has escrito nada en el campo Email.\");
                    comprobar = false;
\t\t\t\t}else if(user.indexOf('@', 0) == -1 || user.indexOf('.', 0) == -1) {
                    alert('El email introducido no es correcto.');
                    comprobar = false;
                }

                // Contraseña
\t\t\t\tvar password = \$(\"#password\").val();
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 70,  105 => 52,  102 => 51,  91 => 40,  85 => 36,  79 => 34,  77 => 33,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
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
        <div class=\"container\">
            <div class=\"d-flex justify-content-center h-100\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3>Sign In</h3>
                        <div class=\"d-flex justify-content-end social_icon\">
                            <span><a href=\"https://es-es.facebook.com/\"><i class=\"fab fa-facebook-square\"></i></a></span>
                            <span><a href=\"https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin\"><i class=\"fab fa-google-plus-square\"></i></a></span>
                            <span><a href=\"https://twitter.com/?lang=es\"><i class=\"fab fa-twitter-square\"></i></a></span>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\">
                            {% if error %}
                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                            {% endif %}
                            <div class=\"input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                                </div>
                                <input type=\"email\" name=\"email\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"email\" id=\"email\">
                            </div>
                            <div class=\"input-group form-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
                                </div>
                                <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"password\" id=\"password\">
                            </div>
                            {# <div class=\"row align-items-center remember\">
                                <input type=\"checkbox\" name=\"_remember_me\">Remember Me
                            </div> #}
                            <input type=\"hidden\" name=\"_csrf_token\"
                                value=\"{{ csrf_token('authenticate') }}\"
                            >
                            <div class=\"form-group\">
                                <input type=\"submit\" value=\"Login\" class=\"btn float-right login_btn\">
                            </div>
                        </form>

                        <div class=\"ml-3 d-flex justify-content-start\">
                            <button class=\"btn float-right login_btn\" id=\"check\">Check</button>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-center links\">
                            Don't have an account?<a href=\"/register\">Sign Up</a>
                        </div>
                        {# <div class=\"d-flex justify-content-center\">
                            <a href=\"#\">Forgot your password?</a>
                        </div> #}
                    </div>
                </div>
            </div>
        </div>

        <script type=\"text/javascript\">
            \$(\"#check\").click(function(ev) {
                // Variable comprobar para mensaje de correcta o incorrecta comprobación
                var comprobar = true;

                // Usuario
                var user = \$(\"#email\").val();
                if(user.length == 0 || user == null) {
\t\t\t\t\talert(\"No has escrito nada en el campo Email.\");
                    comprobar = false;
\t\t\t\t}else if(user.indexOf('@', 0) == -1 || user.indexOf('.', 0) == -1) {
                    alert('El email introducido no es correcto.');
                    comprobar = false;
                }

                // Contraseña
\t\t\t\tvar password = \$(\"#password\").val();
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

\t\t\t\tif(comprobar == true) {
\t\t\t\t\talert(\"Puedes proceder a registrarte debido a que los datos introducidos son correctos.\");
\t\t\t\t}
            });
        </script>
    </body>
</html>

{# {% block body %}
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >

    
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
   

    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Sign in
    </button>
</form>
{% endblock %} #}
", "security/login.html.twig", "/home/bayo/proyectos/ComunityCar/templates/security/login.html.twig");
    }
}
