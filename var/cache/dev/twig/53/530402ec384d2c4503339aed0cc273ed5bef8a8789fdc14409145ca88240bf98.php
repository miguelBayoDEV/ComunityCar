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

/* main/mensajesReportados.html.twig */
class __TwigTemplate_4f955a697ce1f855d6df04789d9d4a7a9f1ae518a459e4f8f0577a3cf1667ef1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/mensajesReportados.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/mensajesReportados.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/mensajesReportados.html.twig", 1);
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

        echo "Mensajes";
        
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
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "        <div class=\"row d-flex justify-content-center mt-5 mb-5 exportar\">
            <div class=\"col-lg-6 col-md-2 col-sm-0 col-xs-0\">
                <h3 class=\"pb-5 text-center\">Mensajes:</h3>
                <div class=\"d-flex align-items-start\">
                    <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                        <a class=\"nav-link active\" id=\"v-pills-mensajesReportados-tab\" data-toggle=\"pill\" href=\"#v-pills-mensajesReportados\" role=\"tab\" aria-controls=\"v-pills-mensajesReportados\" aria-selected=\"true\">Mensajes reportados</a>
                        <a class=\"nav-link\" id=\"v-pills-mensajesRecibidos-tab\" data-toggle=\"pill\" href=\"#v-pills-mensajesRecibidos\" role=\"tab\" aria-controls=\"v-pills-mensajesRecibidos\" aria-selected=\"false\">Mensajes recibidos</a>
                        <a class=\"nav-link\" id=\"v-pills-mensajesEnviados-tab\" data-toggle=\"pill\" href=\"#v-pills-mensajesEnviados\" role=\"tab\" aria-controls=\"v-pills-mensajesEnviados\" aria-selected=\"true\">Mensajes enviados</a>
                    </div>
                    <div class=\"tab-content\" id=\"v-pills-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"v-pills-mensajesReportados\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesReportados-tab\">
                            <div class=\"mensajesReportados\">
                                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                echo "                                    ";
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["message"], "reportado", [], "any", false, false, false, 20), true)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["message"], "visto", [], "any", false, false, false, 20), true)))) {
                    // line 21
                    echo "                                        &#x1f6a9;&#xfe0e; ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "texto", [], "any", false, false, false, 21), "html", null, true);
                    echo " - Emisor: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 21), "email", [], "any", false, false, false, 21), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "fechaEnvio", [], "any", false, false, false, 21), "Y-m-d"), "html", null, true);
                    echo "
                                        <button><a href=\"/respuesta/";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 22), "html", null, true);
                    echo "\">Ver mensaje</a></button>
                                        <br/>
                                    ";
                }
                // line 25
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"v-pills-mensajesRecibidos\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesRecibidos-tab\">
                            <div class=\"mensajesRecibidos\">
                                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messagesRecibidos"]) || array_key_exists("messagesRecibidos", $context) ? $context["messagesRecibidos"] : (function () { throw new RuntimeError('Variable "messagesRecibidos" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["messageRecibido"]) {
                // line 31
                echo "                                    ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "oculto", [], "any", false, false, false, 31), true))) {
                    // line 32
                    echo "                                        ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "visto", [], "any", false, false, false, 32), false))) {
                        // line 33
                        echo "                                            &#x1f4ec;&#xfe0e; ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "texto", [], "any", false, false, false, 33), "html", null, true);
                        echo " - Emisor: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "emisor", [], "any", false, false, false, 33), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "fechaEnvio", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true);
                        echo "
                                            <button><a href=\"/messageVisto/";
                        // line 34
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "id", [], "any", false, false, false, 34), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                                            <br/>
                                        ";
                    } else {
                        // line 37
                        echo "                                            &#x1f4ed;&#xfe0e; ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "texto", [], "any", false, false, false, 37), "html", null, true);
                        echo " - Emisor: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "emisor", [], "any", false, false, false, 37), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "fechaLectura", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true);
                        echo "
                                            <button><a href=\"/messageVisto/";
                        // line 38
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "id", [], "any", false, false, false, 38), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                                            <br/>
                                        ";
                    }
                    // line 41
                    echo "                                    ";
                }
                // line 42
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageRecibido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"v-pills-mensajesEnviados\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesEnviados-tab\">
                            <div class=\"mensajesEnviados\">
                                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messagesEnviados"]) || array_key_exists("messagesEnviados", $context) ? $context["messagesEnviados"] : (function () { throw new RuntimeError('Variable "messagesEnviados" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["messageEnviado"]) {
                // line 48
                echo "                                    ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "oculto", [], "any", false, false, false, 48), true))) {
                    // line 49
                    echo "                                        ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "visto", [], "any", false, false, false, 49), false))) {
                        // line 50
                        echo "                                            &#x1f4ec;&#xfe0e; ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "texto", [], "any", false, false, false, 50), "html", null, true);
                        echo " - Receptor: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "receptor", [], "any", false, false, false, 50), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "fechaEnvio", [], "any", false, false, false, 50), "Y-m-d"), "html", null, true);
                        echo "
                                            <button><a href=\"/messageVisto/";
                        // line 51
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "id", [], "any", false, false, false, 51), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                                            <br/>
                                        ";
                    } else {
                        // line 54
                        echo "                                            &#x1f4ed;&#xfe0e; ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "texto", [], "any", false, false, false, 54), "html", null, true);
                        echo " - Receptor: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "receptor", [], "any", false, false, false, 54), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "fechaLectura", [], "any", false, false, false, 54), "Y-m-d"), "html", null, true);
                        echo "
                                            <button><a href=\"/messageVisto/";
                        // line 55
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "id", [], "any", false, false, false, 55), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                                            <br/>
                                        ";
                    }
                    // line 58
                    echo "                                    ";
                }
                // line 59
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageEnviado'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
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
        return "main/mensajesReportados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 60,  237 => 59,  234 => 58,  228 => 55,  219 => 54,  213 => 51,  204 => 50,  201 => 49,  198 => 48,  194 => 47,  188 => 43,  182 => 42,  179 => 41,  173 => 38,  164 => 37,  158 => 34,  149 => 33,  146 => 32,  143 => 31,  139 => 30,  133 => 26,  127 => 25,  121 => 22,  112 => 21,  109 => 20,  105 => 19,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mensajes{% endblock %}

{% block body %}
    {% if is_granted(\"ROLE_ADMIN\") %}
        <div class=\"row d-flex justify-content-center mt-5 mb-5 exportar\">
            <div class=\"col-lg-6 col-md-2 col-sm-0 col-xs-0\">
                <h3 class=\"pb-5 text-center\">Mensajes:</h3>
                <div class=\"d-flex align-items-start\">
                    <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                        <a class=\"nav-link active\" id=\"v-pills-mensajesReportados-tab\" data-toggle=\"pill\" href=\"#v-pills-mensajesReportados\" role=\"tab\" aria-controls=\"v-pills-mensajesReportados\" aria-selected=\"true\">Mensajes reportados</a>
                        <a class=\"nav-link\" id=\"v-pills-mensajesRecibidos-tab\" data-toggle=\"pill\" href=\"#v-pills-mensajesRecibidos\" role=\"tab\" aria-controls=\"v-pills-mensajesRecibidos\" aria-selected=\"false\">Mensajes recibidos</a>
                        <a class=\"nav-link\" id=\"v-pills-mensajesEnviados-tab\" data-toggle=\"pill\" href=\"#v-pills-mensajesEnviados\" role=\"tab\" aria-controls=\"v-pills-mensajesEnviados\" aria-selected=\"true\">Mensajes enviados</a>
                    </div>
                    <div class=\"tab-content\" id=\"v-pills-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"v-pills-mensajesReportados\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesReportados-tab\">
                            <div class=\"mensajesReportados\">
                                {% for message in messages %}
                                    {% if  message.reportado == true and message.visto != true %}
                                        &#x1f6a9;&#xfe0e; {{ message.texto }} - Emisor: {{ message.user.email }} - {{ message.fechaEnvio|date(\"Y-m-d\") }}
                                        <button><a href=\"/respuesta/{{ message.id }}\">Ver mensaje</a></button>
                                        <br/>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"v-pills-mensajesRecibidos\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesRecibidos-tab\">
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
{% endblock %}", "main/mensajesReportados.html.twig", "/home/bayo/proyectos/ComunityCar/templates/main/mensajesReportados.html.twig");
    }
}
