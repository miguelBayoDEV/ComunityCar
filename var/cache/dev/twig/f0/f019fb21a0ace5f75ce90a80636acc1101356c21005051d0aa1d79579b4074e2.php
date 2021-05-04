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
            echo "        <h1>Mensajes recebidos:</h1>
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messagesRecibidos"]) || array_key_exists("messagesRecibidos", $context) ? $context["messagesRecibidos"] : (function () { throw new RuntimeError('Variable "messagesRecibidos" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["messageRecibido"]) {
                // line 9
                echo "            ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "oculto", [], "any", false, false, false, 9), true))) {
                    // line 10
                    echo "                ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "visto", [], "any", false, false, false, 10), false))) {
                        // line 11
                        echo "                    &#x1f4ec;&#xfe0e; ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "texto", [], "any", false, false, false, 11), "html", null, true);
                        echo " - Emisor: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "emisor", [], "any", false, false, false, 11), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "fechaEnvio", [], "any", false, false, false, 11), "Y-m-d"), "html", null, true);
                        echo "
                    <button><a href=\"/respuesta/";
                        // line 12
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "id", [], "any", false, false, false, 12), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                    <br/>
                ";
                    } else {
                        // line 15
                        echo "                    &#x1f4ed;&#xfe0e; ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "texto", [], "any", false, false, false, 15), "html", null, true);
                        echo " - Emisor: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "emisor", [], "any", false, false, false, 15), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "fechaLectura", [], "any", false, false, false, 15), "Y-m-d"), "html", null, true);
                        echo "
                    <button><a href=\"/respuesta/";
                        // line 16
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "id", [], "any", false, false, false, 16), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                    <br/>
                ";
                    }
                    // line 19
                    echo "            ";
                }
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageRecibido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
        <h1>Mensajes enviados:</h1>
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messagesEnviados"]) || array_key_exists("messagesEnviados", $context) ? $context["messagesEnviados"] : (function () { throw new RuntimeError('Variable "messagesEnviados" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["messageEnviado"]) {
                // line 24
                echo "            ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "oculto", [], "any", false, false, false, 24), true))) {
                    // line 25
                    echo "                ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "visto", [], "any", false, false, false, 25), false))) {
                        // line 26
                        echo "                    &#x1f4ec;&#xfe0e; ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "texto", [], "any", false, false, false, 26), "html", null, true);
                        echo " - Receptor: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "receptor", [], "any", false, false, false, 26), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "fechaEnvio", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true);
                        echo "
                    <button><a href=\"/respuesta/";
                        // line 27
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "id", [], "any", false, false, false, 27), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                    <br/>
                ";
                    } else {
                        // line 30
                        echo "                    &#x1f4ed;&#xfe0e; ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "texto", [], "any", false, false, false, 30), "html", null, true);
                        echo " - Receptor: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "receptor", [], "any", false, false, false, 30), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "fechaLectura", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true);
                        echo "
                    <button><a href=\"/respuesta/";
                        // line 31
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "id", [], "any", false, false, false, 31), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                    <br/>
                ";
                    }
                    // line 34
                    echo "            ";
                }
                // line 35
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageEnviado'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    ";
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
        return array (  196 => 36,  190 => 35,  187 => 34,  181 => 31,  172 => 30,  166 => 27,  157 => 26,  154 => 25,  151 => 24,  147 => 23,  143 => 21,  137 => 20,  134 => 19,  128 => 16,  119 => 15,  113 => 12,  104 => 11,  101 => 10,  98 => 9,  94 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Correos{% endblock %}

{% block body %}
    {% if is_granted(\"ROLE_USER\") %}
        <h1>Mensajes recebidos:</h1>
        {% for messageRecibido in messagesRecibidos %}
            {% if messageRecibido.oculto != true %}
                {% if messageRecibido.visto == false %}
                    &#x1f4ec;&#xfe0e; {{ messageRecibido.texto }} - Emisor: {{ messageRecibido.emisor }} - {{ messageRecibido.fechaEnvio|date(\"Y-m-d\") }}
                    <button><a href=\"/respuesta/{{ messageRecibido.id }}\">Ver mensaje</a></button>
                    <br/>
                {% else %}
                    &#x1f4ed;&#xfe0e; {{ messageRecibido.texto }} - Emisor: {{ messageRecibido.emisor }} - {{ messageRecibido.fechaLectura|date(\"Y-m-d\") }}
                    <button><a href=\"/respuesta/{{ messageRecibido.id }}\">Ver mensaje</a></button>
                    <br/>
                {% endif %}
            {% endif %}
        {% endfor %}

        <h1>Mensajes enviados:</h1>
        {% for messageEnviado in messagesEnviados %}
            {% if messageEnviado.oculto != true %}
                {% if messageEnviado.visto == false %}
                    &#x1f4ec;&#xfe0e; {{ messageEnviado.texto }} - Receptor: {{ messageEnviado.receptor }} - {{ messageEnviado.fechaEnvio|date(\"Y-m-d\") }}
                    <button><a href=\"/respuesta/{{ messageEnviado.id }}\">Ver mensaje</a></button>
                    <br/>
                {% else %}
                    &#x1f4ed;&#xfe0e; {{ messageEnviado.texto }} - Receptor: {{ messageEnviado.receptor }} - {{ messageEnviado.fechaLectura|date(\"Y-m-d\") }}
                    <button><a href=\"/respuesta/{{ messageEnviado.id }}\">Ver mensaje</a></button>
                    <br/>
                {% endif %}
            {% endif %}
        {% endfor %}
    {% endif %}
{% endblock %}", "main/bandejaCorreo.html.twig", "/home/bayo/proyectos/ComunityCar/templates/main/bandejaCorreo.html.twig");
    }
}
