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
                    <div class=\"tab-content pildora-content pl-4\" id=\"v-pills-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"v-pills-mensajesRecibidos\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesRecibidos-tab\">
                            <div class=\"mensajesRecibidos\">
                                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messagesRecibidos"]) || array_key_exists("messagesRecibidos", $context) ? $context["messagesRecibidos"] : (function () { throw new RuntimeError('Variable "messagesRecibidos" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["messageRecibido"]) {
                // line 19
                echo "                                    ";
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "oculto", [], "any", false, false, false, 19), true)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "user", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19))))) {
                    // line 20
                    echo "                                        ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "visto", [], "any", false, false, false, 20), false))) {
                        // line 21
                        echo "                                            <div class=\"d-flex flex-column border border-dark pl-1 pt-1\">
                                                <div class=\"d-flex flex-start\">
                                                    &#x1f4ec;&#xfe0e; ";
                        // line 23
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "texto", [], "any", false, false, false, 23), "html", null, true);
                        echo "
                                                </div>
                                                <div class=\"d-flex justify-content-around align-items-center\">
                                                    <p>";
                        // line 26
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "fechaEnvio", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true);
                        echo "</p>
                                                    <button class=\"btn btn-primary\"><a href=\"/messageVisto/";
                        // line 27
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "id", [], "any", false, false, false, 27), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                                                </div>
                                            </div>
                                            <br/>
                                        ";
                    } else {
                        // line 32
                        echo "                                            <div class=\"d-flex flex-column border border-dark pl-1 pt-1\">
                                                <div class=\"d-flex flex-start\">
                                                    &#x1f4ed;&#xfe0e; ";
                        // line 34
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "texto", [], "any", false, false, false, 34), "html", null, true);
                        echo "
                                                </div>
                                                <div class=\"d-flex justify-content-around align-items-center\">
                                                    <p>";
                        // line 37
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "fechaLectura", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true);
                        echo "</p>
                                                    <button class=\"btn btn-primary\"><a href=\"/messageVisto/";
                        // line 38
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "id", [], "any", false, false, false, 38), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                                                </div>
                                            </div>
                                            <br/>
                                        ";
                    }
                    // line 43
                    echo "                                    ";
                }
                // line 44
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageRecibido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"v-pills-mensajesEnviados\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesEnviados-tab\">
                            <div class=\"mensajesEnviados\">
                                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messagesEnviados"]) || array_key_exists("messagesEnviados", $context) ? $context["messagesEnviados"] : (function () { throw new RuntimeError('Variable "messagesEnviados" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["messageEnviado"]) {
                // line 50
                echo "                                    ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "oculto", [], "any", false, false, false, 50), true))) {
                    // line 51
                    echo "                                        ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "visto", [], "any", false, false, false, 51), false))) {
                        // line 52
                        echo "                                            <div class=\"d-flex flex-column border border-dark pl-1 pt-1\">
                                                <div class=\"d-flex flex-start\">
                                                    &#x1f4ec;&#xfe0e; ";
                        // line 54
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "texto", [], "any", false, false, false, 54), "html", null, true);
                        echo "
                                                </div>
                                                <div class=\"d-flex justify-content-around align-items-center\">
                                                    <p>";
                        // line 57
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "fechaEnvio", [], "any", false, false, false, 57), "Y-m-d"), "html", null, true);
                        echo "</p>
                                                    <button class=\"btn btn-primary\"><a href=\"/messageVisto/";
                        // line 58
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "id", [], "any", false, false, false, 58), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                                                </div>
                                            </div>
                                            <br/>
                                        ";
                    } else {
                        // line 63
                        echo "                                            <div class=\"d-flex flex-column border border-dark pl-1 pt-1\">
                                                <div class=\"d-flex flex-start\">
                                                    &#x1f4ed;&#xfe0e; ";
                        // line 65
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "texto", [], "any", false, false, false, 65), "html", null, true);
                        echo "
                                                </div>
                                                <div class=\"d-flex justify-content-around align-items-center\">
                                                    <p>";
                        // line 68
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "fechaLectura", [], "any", false, false, false, 68), "Y-m-d"), "html", null, true);
                        echo "</p>
                                                    <button class=\"btn btn-primary\"><a href=\"/messageVisto/";
                        // line 69
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "id", [], "any", false, false, false, 69), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                                                </div>
                                            </div>
                                            <br/>
                                        ";
                    }
                    // line 74
                    echo "                                    ";
                }
                // line 75
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageEnviado'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
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
        return array (  236 => 76,  230 => 75,  227 => 74,  219 => 69,  215 => 68,  209 => 65,  205 => 63,  197 => 58,  193 => 57,  187 => 54,  183 => 52,  180 => 51,  177 => 50,  173 => 49,  167 => 45,  161 => 44,  158 => 43,  150 => 38,  146 => 37,  140 => 34,  136 => 32,  128 => 27,  124 => 26,  118 => 23,  114 => 21,  111 => 20,  108 => 19,  104 => 18,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                    <div class=\"tab-content pildora-content pl-4\" id=\"v-pills-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"v-pills-mensajesRecibidos\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesRecibidos-tab\">
                            <div class=\"mensajesRecibidos\">
                                {% for messageRecibido in messagesRecibidos %}
                                    {% if messageRecibido.oculto != true and messageRecibido.user.id != app.user.id %}
                                        {% if messageRecibido.visto == false %}
                                            <div class=\"d-flex flex-column border border-dark pl-1 pt-1\">
                                                <div class=\"d-flex flex-start\">
                                                    &#x1f4ec;&#xfe0e; {{ messageRecibido.texto }}
                                                </div>
                                                <div class=\"d-flex justify-content-around align-items-center\">
                                                    <p>{{ messageRecibido.fechaEnvio|date(\"Y-m-d\") }}</p>
                                                    <button class=\"btn btn-primary\"><a href=\"/messageVisto/{{ messageRecibido.id }}\">Ver mensaje</a></button>
                                                </div>
                                            </div>
                                            <br/>
                                        {% else %}
                                            <div class=\"d-flex flex-column border border-dark pl-1 pt-1\">
                                                <div class=\"d-flex flex-start\">
                                                    &#x1f4ed;&#xfe0e; {{ messageRecibido.texto }}
                                                </div>
                                                <div class=\"d-flex justify-content-around align-items-center\">
                                                    <p>{{ messageRecibido.fechaLectura|date(\"Y-m-d\") }}</p>
                                                    <button class=\"btn btn-primary\"><a href=\"/messageVisto/{{ messageRecibido.id }}\">Ver mensaje</a></button>
                                                </div>
                                            </div>
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
                                            <div class=\"d-flex flex-column border border-dark pl-1 pt-1\">
                                                <div class=\"d-flex flex-start\">
                                                    &#x1f4ec;&#xfe0e; {{ messageEnviado.texto }}
                                                </div>
                                                <div class=\"d-flex justify-content-around align-items-center\">
                                                    <p>{{ messageEnviado.fechaEnvio|date(\"Y-m-d\") }}</p>
                                                    <button class=\"btn btn-primary\"><a href=\"/messageVisto/{{ messageEnviado.id }}\">Ver mensaje</a></button>
                                                </div>
                                            </div>
                                            <br/>
                                        {% else %}
                                            <div class=\"d-flex flex-column border border-dark pl-1 pt-1\">
                                                <div class=\"d-flex flex-start\">
                                                    &#x1f4ed;&#xfe0e; {{ messageEnviado.texto }}
                                                </div>
                                                <div class=\"d-flex justify-content-around align-items-center\">
                                                    <p>{{ messageEnviado.fechaLectura|date(\"Y-m-d\") }}</p>
                                                    <button class=\"btn btn-primary\"><a href=\"/messageVisto/{{ messageEnviado.id }}\">Ver mensaje</a></button>
                                                </div>
                                            </div>
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
{% endblock %}", "main/bandejaCorreo.html.twig", "/home/miguel/Escritorio/ComunityCar/templates/main/bandejaCorreo.html.twig");
    }
}
