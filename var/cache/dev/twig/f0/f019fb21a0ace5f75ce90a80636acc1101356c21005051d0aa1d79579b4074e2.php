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

/* main/bandejaCorreo.html.twig */
class __TwigTemplate_0e024707e48bf5b984415caa60e0c288459a63d5bde4154f9fe93f441464c4e0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/bandejaCorreo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/bandejaCorreo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/bandejaCorreo.html.twig", 1);
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

        echo "Correos";
        
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
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 7
            echo "        <div class=\"row d-flex justify-content-center mt-5 mb-5 exportar\">
            <div class=\"col-lg-6 col-md-2 col-sm-0 col-xs-0\">
                <h3 class=\"pb-5 text-center\">Mensajes:</h3>
                <div class=\"d-flex align-items-start\">
                    <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                        <a class=\"nav-link active\" id=\"v-pills-mensajesRecibidos-tab\" data-toggle=\"pill\" href=\"#v-pills-mensajesRecibidos\" role=\"tab\" aria-controls=\"v-pills-mensajesRecibidos\" aria-selected=\"false\">Mensajes recibidos</a>
                        <a class=\"nav-link\" id=\"v-pills-mensajesEnviados-tab\" data-toggle=\"pill\" href=\"#v-pills-mensajesEnviados\" role=\"tab\" aria-controls=\"v-pills-mensajesEnviados\" aria-selected=\"true\">Mensajes enviados</a>
                    </div>
                    <div class=\"tab-content\" id=\"v-pills-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"v-pills-mensajesRecibidos\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesRecibidos-tab\">
                            <div class=\"mensajesRecibidos\">
                                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messagesRecibidos"]) || array_key_exists("messagesRecibidos", $context) ? $context["messagesRecibidos"] : (function () { throw new RuntimeError('Variable "messagesRecibidos" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["messageRecibido"]) {
                // line 19
                echo "                                    ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "oculto", [], "any", false, false, false, 19), true))) {
                    // line 20
                    echo "                                        ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "visto", [], "any", false, false, false, 20), false))) {
                        // line 21
                        echo "                                            &#x1f4ec;&#xfe0e; ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "texto", [], "any", false, false, false, 21), "html", null, true);
                        echo " - Emisor: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "emisor", [], "any", false, false, false, 21), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "fechaEnvio", [], "any", false, false, false, 21), "Y-m-d"), "html", null, true);
                        echo "
                                            <button><a href=\"/messageVisto/";
                        // line 22
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "id", [], "any", false, false, false, 22), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                                            <br/>
                                        ";
                    } else {
                        // line 25
                        echo "                                            &#x1f4ed;&#xfe0e; ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "texto", [], "any", false, false, false, 25), "html", null, true);
                        echo " - Emisor: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "emisor", [], "any", false, false, false, 25), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "fechaLectura", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true);
                        echo "
                                            <button><a href=\"/messageVisto/";
                        // line 26
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "id", [], "any", false, false, false, 26), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                                            <br/>
                                        ";
                    }
                    // line 29
                    echo "                                    ";
                }
                // line 30
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageRecibido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"v-pills-mensajesEnviados\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesEnviados-tab\">
                            <div class=\"mensajesEnviados\">
                                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messagesEnviados"]) || array_key_exists("messagesEnviados", $context) ? $context["messagesEnviados"] : (function () { throw new RuntimeError('Variable "messagesEnviados" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["messageEnviado"]) {
                // line 36
                echo "                                    ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "oculto", [], "any", false, false, false, 36), true))) {
                    // line 37
                    echo "                                        ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "visto", [], "any", false, false, false, 37), false))) {
                        // line 38
                        echo "                                            &#x1f4ec;&#xfe0e; ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "texto", [], "any", false, false, false, 38), "html", null, true);
                        echo " - Receptor: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "receptor", [], "any", false, false, false, 38), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "fechaEnvio", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true);
                        echo "
                                            <button><a href=\"/messageVisto/";
                        // line 39
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "id", [], "any", false, false, false, 39), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                                            <br/>
                                        ";
                    } else {
                        // line 42
                        echo "                                            &#x1f4ed;&#xfe0e; ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "texto", [], "any", false, false, false, 42), "html", null, true);
                        echo " - Receptor: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "receptor", [], "any", false, false, false, 42), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "fechaLectura", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true);
                        echo "
                                            <button><a href=\"/messageVisto/";
                        // line 43
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "id", [], "any", false, false, false, 43), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                                            <br/>
                                        ";
                    }
                    // line 46
                    echo "                                    ";
                }
                // line 47
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageEnviado'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/bandejaCorreo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 48,  202 => 47,  199 => 46,  193 => 43,  184 => 42,  178 => 39,  169 => 38,  166 => 37,  163 => 36,  159 => 35,  153 => 31,  147 => 30,  144 => 29,  138 => 26,  129 => 25,  123 => 22,  114 => 21,  111 => 20,  108 => 19,  104 => 18,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Correos{% endblock %}

{% block body %}
    {% if is_granted(\"ROLE_USER\") %}
        <div class=\"row d-flex justify-content-center mt-5 mb-5 exportar\">
            <div class=\"col-lg-6 col-md-2 col-sm-0 col-xs-0\">
                <h3 class=\"pb-5 text-center\">Mensajes:</h3>
                <div class=\"d-flex align-items-start\">
                    <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                        <a class=\"nav-link active\" id=\"v-pills-mensajesRecibidos-tab\" data-toggle=\"pill\" href=\"#v-pills-mensajesRecibidos\" role=\"tab\" aria-controls=\"v-pills-mensajesRecibidos\" aria-selected=\"false\">Mensajes recibidos</a>
                        <a class=\"nav-link\" id=\"v-pills-mensajesEnviados-tab\" data-toggle=\"pill\" href=\"#v-pills-mensajesEnviados\" role=\"tab\" aria-controls=\"v-pills-mensajesEnviados\" aria-selected=\"true\">Mensajes enviados</a>
                    </div>
                    <div class=\"tab-content\" id=\"v-pills-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"v-pills-mensajesRecibidos\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesRecibidos-tab\">
                            <div class=\"mensajesRecibidos\">
                                {% for messageRecibido in messagesRecibidos %}
                                    {% if messageRecibido.oculto != true %}
                                        {% if messageRecibido.visto == false %}
                                            &#x1f4ec;&#xfe0e; {{ messageRecibido.texto }} - Emisor: {{ messageRecibido.emisor }} - {{ messageRecibido.fechaEnvio|date(\"Y-m-d\") }}
                                            <button><a href=\"/messageVisto/{{ messageRecibido.id }}\">Ver mensaje</a></button>
                                            <br/>
                                        {% else %}
                                            &#x1f4ed;&#xfe0e; {{ messageRecibido.texto }} - Emisor: {{ messageRecibido.emisor }} - {{ messageRecibido.fechaLectura|date(\"Y-m-d\") }}
                                            <button><a href=\"/messageVisto/{{ messageRecibido.id }}\">Ver mensaje</a></button>
                                            <br/>
                                        {% endif %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"v-pills-mensajesEnviados\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesEnviados-tab\">
                            <div class=\"mensajesEnviados\">
                                {% for messageEnviado in messagesEnviados %}
                                    {% if messageEnviado.oculto != true %}
                                        {% if messageEnviado.visto == false %}
                                            &#x1f4ec;&#xfe0e; {{ messageEnviado.texto }} - Receptor: {{ messageEnviado.receptor }} - {{ messageEnviado.fechaEnvio|date(\"Y-m-d\") }}
                                            <button><a href=\"/messageVisto/{{ messageEnviado.id }}\">Ver mensaje</a></button>
                                            <br/>
                                        {% else %}
                                            &#x1f4ed;&#xfe0e; {{ messageEnviado.texto }} - Receptor: {{ messageEnviado.receptor }} - {{ messageEnviado.fechaLectura|date(\"Y-m-d\") }}
                                            <button><a href=\"/messageVisto/{{ messageEnviado.id }}\">Ver mensaje</a></button>
                                            <br/>
                                        {% endif %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}", "main/bandejaCorreo.html.twig", "/home/bayo/proyectos/ComunityCar/templates/main/bandejaCorreo.html.twig");
    }
}
