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

/* main/anime.html.twig */
class __TwigTemplate_f9f149f9dcf415eeb8129855d489d7257a308e86e2a7f34a7d72b420ce1b334f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/anime.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/anime.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/anime.html.twig", 1);
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

        echo "Vídeo y animación";
        
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
        echo "    <div class=\"row d-flex justify-content-center mt-5\">
        <div class=\"col-lg-6 col-md-2 col-sm-0 col-xs-0\">
            <h3 class=\"pb-4 text-center\">Vídeo con audio y animación:</h3>
            <div class=\"d-flex align-items-start\">
                <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                    <a class=\"nav-link active\" id=\"v-pills-video-tab\" data-toggle=\"pill\" href=\"#v-pills-video\" role=\"tab\" aria-controls=\"v-pills-video\" aria-selected=\"true\">Vídeo</a>
                    <a class=\"nav-link\" id=\"v-pills-anime-tab\" data-toggle=\"pill\" href=\"#v-pills-anime\" role=\"tab\" aria-controls=\"v-pills-anime\" aria-selected=\"false\">Animación</a>
                </div>
                <div class=\"tab-content\" id=\"v-pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"v-pills-video\" role=\"tabpanel\" aria-labelledby=\"v-pills-video-tab\">
                        <div class=\"m-4 ml-5\">
                            <video loop=\"true\" autoplay=\"true\" width=\"100%\" hight=\"100%\">
                                <source src=\"/comunes/header/videoHeader.ogv\" type=\"video/ogg\" />
                                <source src=\"/comunes/header/videoHeader.mp4\" type=\"video/mp4\" />
                            </video>
                            <img id=\"volumen\" src=\"/comunes/header/sonido.png\" data-toggle=\"tooltip\" title=\"Estado del sonido\" />
                            <audio loop=\"true\" autoplay=\"true\" id=\"sonido\">
                                <source src=\"/comunes/header/carrera.mp3\"  type=\"audio/mp3\">
                                <source src=\"/comunes/header/carrera.ogg\"  type=\"audio/ogg\">
                                <source src=\"/comunes/header/carrera.wav\"  type=\"audio/wav\">
                                Este es un elemento de audio no soportado por tu navegador, prueba con otro.
                            </audio>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-anime\" role=\"tabpanel\" aria-labelledby=\"v-pills-anime-tab\">
                        <aside class=\"anime\">
                            <img id=\"carAnime\" src=\"/comunes/anime/img/coche.png\" />
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type=\"text/javascript\">
        // Animación del coche
        \$(\"#carAnime\").click(function() {
            \$(this).animate({
                right:'1vh',
            }, 2700);
            
            \$(this).animate({
                right:'68vh'
            }, 1);
        });

        // Sonido
        \$('[data-toggle=\"tooltip\"]').tooltip();

        \$(\"#volumen\").click(function() {
            var video = document.querySelector(\"#sonido\");

            if(video.muted == true) {
                video.muted = false;
                \$(this).attr(\"src\", \"/comunes/header/sonido.png\");
                \$(this).attr(\"title\", \"Volumen\");
            }else {
                video.muted = true;
                \$(this).attr(\"src\", \"/comunes/header/muted.png\");
                \$(this).attr(\"title\", \"Muted\");
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/anime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vídeo y animación{% endblock %}

{% block body %}
    <div class=\"row d-flex justify-content-center mt-5\">
        <div class=\"col-lg-6 col-md-2 col-sm-0 col-xs-0\">
            <h3 class=\"pb-4 text-center\">Vídeo con audio y animación:</h3>
            <div class=\"d-flex align-items-start\">
                <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                    <a class=\"nav-link active\" id=\"v-pills-video-tab\" data-toggle=\"pill\" href=\"#v-pills-video\" role=\"tab\" aria-controls=\"v-pills-video\" aria-selected=\"true\">Vídeo</a>
                    <a class=\"nav-link\" id=\"v-pills-anime-tab\" data-toggle=\"pill\" href=\"#v-pills-anime\" role=\"tab\" aria-controls=\"v-pills-anime\" aria-selected=\"false\">Animación</a>
                </div>
                <div class=\"tab-content\" id=\"v-pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"v-pills-video\" role=\"tabpanel\" aria-labelledby=\"v-pills-video-tab\">
                        <div class=\"m-4 ml-5\">
                            <video loop=\"true\" autoplay=\"true\" width=\"100%\" hight=\"100%\">
                                <source src=\"/comunes/header/videoHeader.ogv\" type=\"video/ogg\" />
                                <source src=\"/comunes/header/videoHeader.mp4\" type=\"video/mp4\" />
                            </video>
                            <img id=\"volumen\" src=\"/comunes/header/sonido.png\" data-toggle=\"tooltip\" title=\"Estado del sonido\" />
                            <audio loop=\"true\" autoplay=\"true\" id=\"sonido\">
                                <source src=\"/comunes/header/carrera.mp3\"  type=\"audio/mp3\">
                                <source src=\"/comunes/header/carrera.ogg\"  type=\"audio/ogg\">
                                <source src=\"/comunes/header/carrera.wav\"  type=\"audio/wav\">
                                Este es un elemento de audio no soportado por tu navegador, prueba con otro.
                            </audio>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-anime\" role=\"tabpanel\" aria-labelledby=\"v-pills-anime-tab\">
                        <aside class=\"anime\">
                            <img id=\"carAnime\" src=\"/comunes/anime/img/coche.png\" />
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type=\"text/javascript\">
        // Animación del coche
        \$(\"#carAnime\").click(function() {
            \$(this).animate({
                right:'1vh',
            }, 2700);
            
            \$(this).animate({
                right:'68vh'
            }, 1);
        });

        // Sonido
        \$('[data-toggle=\"tooltip\"]').tooltip();

        \$(\"#volumen\").click(function() {
            var video = document.querySelector(\"#sonido\");

            if(video.muted == true) {
                video.muted = false;
                \$(this).attr(\"src\", \"/comunes/header/sonido.png\");
                \$(this).attr(\"title\", \"Volumen\");
            }else {
                video.muted = true;
                \$(this).attr(\"src\", \"/comunes/header/muted.png\");
                \$(this).attr(\"title\", \"Muted\");
            }
        });
    </script>
{% endblock %}", "main/anime.html.twig", "/home/bayo/proyectos/ComunityCar/templates/main/anime.html.twig");
    }
}
