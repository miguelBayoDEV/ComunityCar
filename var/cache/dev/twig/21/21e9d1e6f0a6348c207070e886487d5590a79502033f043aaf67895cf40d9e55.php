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
<html>
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
            div#container {
                height: 100%;
            }

            aside.anime {
                border: 2px solid black;
                width: 15%;
                height: 580px;
                margin: 2%;
                position: fixed;
                background-image: url(\"/comunes/anime/img/carretera.png\");
                background-repeat: no-repeat;
                background-size: cover;
            }

            aside.anime > img {
                position: fixed;
                top: 500px;
                right: 200px;
                width: 100px;
                height: 150px;
            }
        </style>
    </head>
    <body>
        <div class=\"d-flex flex-column h-100\" id=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    ";
        // line 61
        $this->loadTemplate("navbar/navbar.html.twig", "base.html.twig", 61)->display($context);
        // line 62
        echo "                </div>
            </div>
            <div class=\"row\" id=\"container\">
                <div class=\"col-9\">
                    ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "                </div>
                <div class=\"col-3\">
                    <aside class=\"anime\">
                        <img id=\"carAnime\" src=\"/comunes/anime/img/coche.png\" />
                    </aside>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <footer class=\"footer mt-auto text-center text-white-50 bg-dark\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-5 col-md-5 col-sm-4 col-xs-12\">
                                    <ul class=\"adress\">
                                        <span>Adress</span>
                                        <li>
                                            <p>Lorem ipsum dolor sit amet, vero omnis vocibus</p>
                                        </li>
                                        <li>
                                            <p>+90 1234 56789</p>
                                        </li>
                                        <li>
                                            <p>info@gmail.com</p>
                                        </li>
                                    </ul>
                                </div>

                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    <ul class=\"contact\">
                                        <span>Contact</span>
                                        <li>
                                            <a href=\"/main\">Home</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">About</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-12\">
                                    <ul class=\"social\">
                                        <span>Social Media Networks</span>
                                        <li>
                                                <a href=\"https://es-es.facebook.com/\"><i class=\"fa fa-facebook fa-2x\"></i></a>
                                        </li>
                                        <li>
                                                <a href=\"https://www.instagram.com/\"><i class=\"fa fa-instagram fa-2x\"></i></a>
                                        </li>
                                        <li>
                                                <a href=\"https://twitter.com/?lang=es\"><i class=\"fa fa-twitter fa-2x\"></i></a>
                                        </li>
                                        <li>
                                                <a href=\"https://www.pinterest.es/\"><i class=\"fa fa-pinterest fa-2x\"></i></a>
                                        </li>
                                        <li>
                                                <a href=\"https://www.youtube.com/\"><i class=\"fa fa-youtube fa-2x\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <script>

            function comprobarAncho(){
                var altoContenido=window.innerHeight-50;
                if(altoContenido>600){
                    \$('footer').css(\"position\",\"relative\");
                }else{
                    \$('footer').css(\"position\",\"fixed\");
                }
            }

            comprobarAncho();    

            \$(window).resize(function() {
                comprobarAncho();
            });

            // Animación del coche
            \$(\"#carAnime\").click(function() {
                \$(this).animate({
                    top:'100px',
                }, 3000);
                
                \$(this).animate({
                    top:'500px'
                }, 1);
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

        echo "Welcome!";
        
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

    // line 66
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
        return array (  300 => 66,  283 => 23,  273 => 22,  258 => 15,  254 => 13,  250 => 11,  248 => 10,  245 => 9,  235 => 8,  216 => 6,  108 => 67,  106 => 66,  100 => 62,  98 => 61,  66 => 31,  64 => 22,  61 => 21,  59 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>{% block title %}Welcome!{% endblock %}</title>

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
            div#container {
                height: 100%;
            }

            aside.anime {
                border: 2px solid black;
                width: 15%;
                height: 580px;
                margin: 2%;
                position: fixed;
                background-image: url(\"/comunes/anime/img/carretera.png\");
                background-repeat: no-repeat;
                background-size: cover;
            }

            aside.anime > img {
                position: fixed;
                top: 500px;
                right: 200px;
                width: 100px;
                height: 150px;
            }
        </style>
    </head>
    <body>
        <div class=\"d-flex flex-column h-100\" id=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    {% include 'navbar/navbar.html.twig' %}
                </div>
            </div>
            <div class=\"row\" id=\"container\">
                <div class=\"col-9\">
                    {% block body %}{% endblock %}
                </div>
                <div class=\"col-3\">
                    <aside class=\"anime\">
                        <img id=\"carAnime\" src=\"/comunes/anime/img/coche.png\" />
                    </aside>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <footer class=\"footer mt-auto text-center text-white-50 bg-dark\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-5 col-md-5 col-sm-4 col-xs-12\">
                                    <ul class=\"adress\">
                                        <span>Adress</span>
                                        <li>
                                            <p>Lorem ipsum dolor sit amet, vero omnis vocibus</p>
                                        </li>
                                        <li>
                                            <p>+90 1234 56789</p>
                                        </li>
                                        <li>
                                            <p>info@gmail.com</p>
                                        </li>
                                    </ul>
                                </div>

                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    <ul class=\"contact\">
                                        <span>Contact</span>
                                        <li>
                                            <a href=\"/main\">Home</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">About</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-12\">
                                    <ul class=\"social\">
                                        <span>Social Media Networks</span>
                                        <li>
                                                <a href=\"https://es-es.facebook.com/\"><i class=\"fa fa-facebook fa-2x\"></i></a>
                                        </li>
                                        <li>
                                                <a href=\"https://www.instagram.com/\"><i class=\"fa fa-instagram fa-2x\"></i></a>
                                        </li>
                                        <li>
                                                <a href=\"https://twitter.com/?lang=es\"><i class=\"fa fa-twitter fa-2x\"></i></a>
                                        </li>
                                        <li>
                                                <a href=\"https://www.pinterest.es/\"><i class=\"fa fa-pinterest fa-2x\"></i></a>
                                        </li>
                                        <li>
                                                <a href=\"https://www.youtube.com/\"><i class=\"fa fa-youtube fa-2x\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <script>

            function comprobarAncho(){
                var altoContenido=window.innerHeight-50;
                if(altoContenido>600){
                    \$('footer').css(\"position\",\"relative\");
                }else{
                    \$('footer').css(\"position\",\"fixed\");
                }
            }

            comprobarAncho();    

            \$(window).resize(function() {
                comprobarAncho();
            });

            // Animación del coche
            \$(\"#carAnime\").click(function() {
                \$(this).animate({
                    top:'100px',
                }, 3000);
                
                \$(this).animate({
                    top:'500px'
                }, 1);
            });

        </script>
    </body>
</html>
", "base.html.twig", "/home/bayo/proyectos/ComunityCar/templates/base.html.twig");
    }
}
