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

/* base.html.twig */
class __TwigTemplate_61d2aac208ca8b4b978a87882347313500fe929228a3c8af81283450823331e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "
        <style type=\"text/css\">

            hr {
                background-color: white;
            }

            a.marca {
                font-size: 30px;
            }

            a.barraInferior {
                font-size: 10px;
                color: #a311d6;
            }

            a.barra:hover {
                font-size: 15px;
            }

            a.barraInferior:hover {
                font-size: 14px;
                color: #a311d6;
            }

            ul.adress span, ul.contact span, ul.social span {
                color: #a311d6;
                font-size: 14px;
            }

            .sinpadding [class*=\"col-\"] {
                padding: 0;
            }

            div.anime {
                position: relative;
                height: 300px;
                width: 700px;
                background-image: url(\"/comunes/anime/img/carretera.png\");
                background-repeat: no-repeat;
                background-size: cover;
            }

            div.anime > img {
                position: absolute;
                top: 60%;
                right: 68%;
                width: 30%;
                height: 20%;
            }

            div.exportar {
                min-height: 500px;
            }

            div.mensaje {
                min-height: 600px;
            }

            input, textarea {
                border-radius: 10%;
            }

            input:focus, textarea:focus {
                border: 3px dotted #f91818;
            }

            label {
                margin-right: 1%;
            }

            div.pildora-content {
                min-width: 600px;
                min-height: 600px;
            }

            div.border-message1 {
                border: 2px dashed black;
                box-shadow: 2px -2px 5px 5px #888888;
                margin-bottom: 2%;
                border-radius:10px;
                min-width: 375px;
                overflow: auto;
            }

            div.border-message2 {
                border: 2px dashed black;
                box-shadow: 2px -2px 5px 5px #FB876E;
                margin-bottom: 2%;
                border-radius:10px;
                min-width: 375px;
                overflow: auto;
            }

            .round {
                border-radius:50%;
                border: 3px solid #666;
            }

            .enlace {
                text-decoration: none;
                color: black;
            }

            .buscador {
                border-radius: 7px;
                padding: 2%;
                border: 3px dashed #5CE640;
            }

            .pulsar {
                background-color: #A5F70E;
                color: #2283E4;
                border: 2px dashed #E42234;
            }

            .pulsar:hover {
                background-color: #43BFF8;
                color: #F70E6F;
                border: 5px dashed #E42234;
            }

            .anuncio {
                min-height: 200px;
                border-radius: 25px;
            }

            .carusel {
                border-radius: 15px;
                border: 7px dotted #E42234;
            }
        </style>
    </head>
    <body class=\"container-fluid\">
        <div class=\"row sinpadding\">
            <div class=\"col-12\">
                ";
        // line 167
        $this->loadTemplate("navbar/navbar.html.twig", "base.html.twig", 167)->display($context);
        // line 168
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\" id=\"main\">
                ";
        // line 172
        $this->displayBlock('body', $context, $blocks);
        // line 173
        echo "            </div>
        </div>
        <div class=\"row pie sinpadding\">
            <div class=\"col-12\">
                <footer class=\"footer mt-auto text-center text-white-50 bg-dark\">
                    <div class=\"container\">
                        <div class=\"row mt-5\">
                            <div class=\"col-lg-5 col-md-5 col-sm-4 col-xs-12\">
                                <ul class=\"adress\">
                                    <span>Realizado por:</span>
                                    <li>
                                        <p>Miguel Ángel Puerta Bayo</p>
                                    </li>
                                    <li>
                                        <p>2º DAW</p>
                                    </li>
                                    <li>
                                        <img src=\"/comunes/footer/img/copyright.png\" width=\"7%\" height=\"7%\" />
                                    </li>
                                </ul>
                            </div>

                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                <ul class=\"contact\">
                                    <span>Contacto:</span>
                                    <li>
                                        <p>miguelpuerta@gmail.com</p>
                                    </li>
                                    <li>
                                        <div>
                                            Iconos diseñados por 
                                                <a href=\"https://www.freepik.com\" title=\"Freepik\">
                                                    Freepik
                                                </a> 
                                            from 
                                            <a href=\"https://www.flaticon.es/\" title=\"Flaticon\">
                                                www.flaticon.es
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <hr />
                                    </li>
                                    <li>
                                        <a href=\"/perfil\" id=\"perfil\">Mi perfil</a>
                                        <br/>
                                        <a href=\"/anime\" id=\"anime\">Video y animación</a>
                                        <br/>
                                        <a href=\"/privacidad\" target=\"_blank\" id=\"privacidad\">Política de privacidad e información legal</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-12\">
                                <ul class=\"social\">
                                    <span>Redes sociales:</span>
                                    <li>
                                            <a href=\"https://es-es.facebook.com/\"><i class=\"fa fa-facebook fa-2x hover\"></i></a>
                                    </li>
                                    <li>
                                            <a href=\"https://www.instagram.com/\"><i class=\"fa fa-instagram fa-2x hover\"></i></a>
                                    </li>
                                    <li>
                                            <a href=\"https://twitter.com/?lang=es\"><i class=\"fa fa-twitter fa-2x hover\"></i></a>
                                    </li>
                                    <li>
                                            <a href=\"https://www.pinterest.es/\"><i class=\"fa fa-pinterest fa-2x hover\"></i></a>
                                    </li>
                                    <li>
                                            <a href=\"https://www.youtube.com/\"><i class=\"fa fa-youtube fa-2x hover\"></i></a>
                                    </li>
                                </ul>
                            </div>   
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script>

            // Efecto x2 de enlace mi perfil
            \$(\"#perfil\").hover(function() {
                \$(this).css({
                    fontSize: \"18px\",
                    color: \"#28eec7\"
                });
            }, function() {
                \$(this).css({
                    fontSize: \"15px\",
                    color: \"#ffffff\"
                });
            });

            \$(\"#anime\").hover(function() {
                \$(this).css({
                    fontSize: \"18px\",
                    color: \"#f03bca\"
                });
            }, function() {
                \$(this).css({
                    fontSize: \"15px\",
                    color: \"#ffffff\"
                });
            });

            \$(\"#privacidad\").hover(function() {
                \$(this).css({
                    fontSize: \"18px\",
                    color: \"#9D22E4\"
                });
            }, function() {
                \$(this).css({
                    fontSize: \"15px\",
                    color: \"#ffffff\"
                });
            });

            // Efecto iconos
            \$(\".hover\").hover(function() {
                \$(this).css({
                    transform: \"scale(2)\",
                    color: \"#d1f67b\"
                });
            }, function() {
                \$(this).css({
                    transform: \"scale(1)\",
                    color: \"#cdcccc\"
                });
            });
        </script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Política de privacidad e información legal";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <!-- Enlace CSS Bootstrap4 -->
            ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 11
            echo "                <link href=\"/comunes/css/admin.css\" rel=\"stylesheet\">
            ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 13
            echo "                <link href=\"/comunes/css/user.css\" rel=\"stylesheet\">
            ";
        }
        // line 15
        echo "            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
            <link href=\"/comunes/footer/css/footer.css\" rel=\"stylesheet\">
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
            <link rel=\"shortcut icon\" href=\"#\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "            <!-- Enlace a CDN JQuery -->
            <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>

            <!-- Enlace Scripts Bootstrap4 -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 172,  422 => 23,  412 => 22,  397 => 15,  393 => 13,  389 => 11,  387 => 10,  384 => 9,  374 => 8,  355 => 6,  214 => 173,  212 => 172,  206 => 168,  204 => 167,  66 => 31,  64 => 22,  61 => 21,  59 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>{% block title %}Política de privacidad e información legal{% endblock %}</title>

        {% block stylesheets %}
            <!-- Enlace CSS Bootstrap4 -->
            {% if is_granted(\"ROLE_ADMIN\") %}
                <link href=\"/comunes/css/admin.css\" rel=\"stylesheet\">
            {% elseif is_granted(\"ROLE_USER\") %}
                <link href=\"/comunes/css/user.css\" rel=\"stylesheet\">
            {% endif %}
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
            <link href=\"/comunes/footer/css/footer.css\" rel=\"stylesheet\">
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
            <link rel=\"shortcut icon\" href=\"#\" />
        {% endblock %}

        {% block javascripts %}
            <!-- Enlace a CDN JQuery -->
            <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>

            <!-- Enlace Scripts Bootstrap4 -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
        {% endblock %}

        <style type=\"text/css\">

            hr {
                background-color: white;
            }

            a.marca {
                font-size: 30px;
            }

            a.barraInferior {
                font-size: 10px;
                color: #a311d6;
            }

            a.barra:hover {
                font-size: 15px;
            }

            a.barraInferior:hover {
                font-size: 14px;
                color: #a311d6;
            }

            ul.adress span, ul.contact span, ul.social span {
                color: #a311d6;
                font-size: 14px;
            }

            .sinpadding [class*=\"col-\"] {
                padding: 0;
            }

            div.anime {
                position: relative;
                height: 300px;
                width: 700px;
                background-image: url(\"/comunes/anime/img/carretera.png\");
                background-repeat: no-repeat;
                background-size: cover;
            }

            div.anime > img {
                position: absolute;
                top: 60%;
                right: 68%;
                width: 30%;
                height: 20%;
            }

            div.exportar {
                min-height: 500px;
            }

            div.mensaje {
                min-height: 600px;
            }

            input, textarea {
                border-radius: 10%;
            }

            input:focus, textarea:focus {
                border: 3px dotted #f91818;
            }

            label {
                margin-right: 1%;
            }

            div.pildora-content {
                min-width: 600px;
                min-height: 600px;
            }

            div.border-message1 {
                border: 2px dashed black;
                box-shadow: 2px -2px 5px 5px #888888;
                margin-bottom: 2%;
                border-radius:10px;
                min-width: 375px;
                overflow: auto;
            }

            div.border-message2 {
                border: 2px dashed black;
                box-shadow: 2px -2px 5px 5px #FB876E;
                margin-bottom: 2%;
                border-radius:10px;
                min-width: 375px;
                overflow: auto;
            }

            .round {
                border-radius:50%;
                border: 3px solid #666;
            }

            .enlace {
                text-decoration: none;
                color: black;
            }

            .buscador {
                border-radius: 7px;
                padding: 2%;
                border: 3px dashed #5CE640;
            }

            .pulsar {
                background-color: #A5F70E;
                color: #2283E4;
                border: 2px dashed #E42234;
            }

            .pulsar:hover {
                background-color: #43BFF8;
                color: #F70E6F;
                border: 5px dashed #E42234;
            }

            .anuncio {
                min-height: 200px;
                border-radius: 25px;
            }

            .carusel {
                border-radius: 15px;
                border: 7px dotted #E42234;
            }
        </style>
    </head>
    <body class=\"container-fluid\">
        <div class=\"row sinpadding\">
            <div class=\"col-12\">
                {% include 'navbar/navbar.html.twig' %}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\" id=\"main\">
                {% block body %}{% endblock %}
            </div>
        </div>
        <div class=\"row pie sinpadding\">
            <div class=\"col-12\">
                <footer class=\"footer mt-auto text-center text-white-50 bg-dark\">
                    <div class=\"container\">
                        <div class=\"row mt-5\">
                            <div class=\"col-lg-5 col-md-5 col-sm-4 col-xs-12\">
                                <ul class=\"adress\">
                                    <span>Realizado por:</span>
                                    <li>
                                        <p>Miguel Ángel Puerta Bayo</p>
                                    </li>
                                    <li>
                                        <p>2º DAW</p>
                                    </li>
                                    <li>
                                        <img src=\"/comunes/footer/img/copyright.png\" width=\"7%\" height=\"7%\" />
                                    </li>
                                </ul>
                            </div>

                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                <ul class=\"contact\">
                                    <span>Contacto:</span>
                                    <li>
                                        <p>miguelpuerta@gmail.com</p>
                                    </li>
                                    <li>
                                        <div>
                                            Iconos diseñados por 
                                                <a href=\"https://www.freepik.com\" title=\"Freepik\">
                                                    Freepik
                                                </a> 
                                            from 
                                            <a href=\"https://www.flaticon.es/\" title=\"Flaticon\">
                                                www.flaticon.es
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <hr />
                                    </li>
                                    <li>
                                        <a href=\"/perfil\" id=\"perfil\">Mi perfil</a>
                                        <br/>
                                        <a href=\"/anime\" id=\"anime\">Video y animación</a>
                                        <br/>
                                        <a href=\"/privacidad\" target=\"_blank\" id=\"privacidad\">Política de privacidad e información legal</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-12\">
                                <ul class=\"social\">
                                    <span>Redes sociales:</span>
                                    <li>
                                            <a href=\"https://es-es.facebook.com/\"><i class=\"fa fa-facebook fa-2x hover\"></i></a>
                                    </li>
                                    <li>
                                            <a href=\"https://www.instagram.com/\"><i class=\"fa fa-instagram fa-2x hover\"></i></a>
                                    </li>
                                    <li>
                                            <a href=\"https://twitter.com/?lang=es\"><i class=\"fa fa-twitter fa-2x hover\"></i></a>
                                    </li>
                                    <li>
                                            <a href=\"https://www.pinterest.es/\"><i class=\"fa fa-pinterest fa-2x hover\"></i></a>
                                    </li>
                                    <li>
                                            <a href=\"https://www.youtube.com/\"><i class=\"fa fa-youtube fa-2x hover\"></i></a>
                                    </li>
                                </ul>
                            </div>   
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script>

            // Efecto x2 de enlace mi perfil
            \$(\"#perfil\").hover(function() {
                \$(this).css({
                    fontSize: \"18px\",
                    color: \"#28eec7\"
                });
            }, function() {
                \$(this).css({
                    fontSize: \"15px\",
                    color: \"#ffffff\"
                });
            });

            \$(\"#anime\").hover(function() {
                \$(this).css({
                    fontSize: \"18px\",
                    color: \"#f03bca\"
                });
            }, function() {
                \$(this).css({
                    fontSize: \"15px\",
                    color: \"#ffffff\"
                });
            });

            \$(\"#privacidad\").hover(function() {
                \$(this).css({
                    fontSize: \"18px\",
                    color: \"#9D22E4\"
                });
            }, function() {
                \$(this).css({
                    fontSize: \"15px\",
                    color: \"#ffffff\"
                });
            });

            // Efecto iconos
            \$(\".hover\").hover(function() {
                \$(this).css({
                    transform: \"scale(2)\",
                    color: \"#d1f67b\"
                });
            }, function() {
                \$(this).css({
                    transform: \"scale(1)\",
                    color: \"#cdcccc\"
                });
            });
        </script>
    </body>
</html>
", "base.html.twig", "/home/miguel/Escritorio/ComunityCar/templates/base.html.twig");
    }
}
