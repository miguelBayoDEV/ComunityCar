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
                    <div class=\"tab-content pildora-content pl-4\" id=\"v-pills-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"v-pills-mensajesReportados\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesReportados-tab\">
                            <div class=\"mensajesReportados\">
                                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                echo "                                    ";
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["message"], "reportado", [], "any", false, false, false, 20), true)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["message"], "oculto", [], "any", false, false, false, 20), true)))) {
                    // line 21
                    echo "                                        <div class=\"d-flex flex-column pildora-border pl-1 pt-1\">
                                            <div class=\"d-flex flex-start\">
                                                &#x1f6a9;&#xfe0e; ";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "texto", [], "any", false, false, false, 23), "html", null, true);
                    echo "
                                            </div>
                                            <div class=\"d-flex justify-content-around align-items-center\">
                                                <p>";
                    // line 26
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "fechaEnvio", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true);
                    echo "</p>
                                                <button class=\"btn btn-primary\"><a class=\"enlace\" href=\"/messageVisto/";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 27), "html", null, true);
                    echo "\">Ver mensaje</a></button>
                                            </div>
                                        </div>
                                        <br/>
                                    ";
                }
                // line 32
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"v-pills-mensajesRecibidos\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesRecibidos-tab\">
                            <div class=\"mensajesRecibidos\">
                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messagesRecibidos"]) || array_key_exists("messagesRecibidos", $context) ? $context["messagesRecibidos"] : (function () { throw new RuntimeError('Variable "messagesRecibidos" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["messageRecibido"]) {
                // line 38
                echo "                                    ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "user", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)))) {
                    // line 39
                    echo "                                        ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "visto", [], "any", false, false, false, 39), false))) {
                        // line 40
                        echo "                                            <div class=\"d-flex flex-column  pildora-border pl-1 pt-1\">
                                                <div class=\"d-flex flex-start\">
                                                    &#x1f4ec;&#xfe0e; ";
                        // line 42
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "texto", [], "any", false, false, false, 42), "html", null, true);
                        echo "
                                                </div>
                                                <div class=\"d-flex justify-content-around align-items-center\">
                                                    <p>";
                        // line 45
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "fechaEnvio", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true);
                        echo "</p>
                                                    <button class=\"btn btn-primary\"><a class=\"enlace\" href=\"/messageVisto/";
                        // line 46
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "id", [], "any", false, false, false, 46), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                                                </div>
                                            </div>
                                            <br/>
                                        ";
                    } else {
                        // line 51
                        echo "                                            <div class=\"d-flex flex-column  pildora-border pl-1 pt-1\">
                                                <div class=\"d-flex flex-start\">
                                                    &#x1f4ed;&#xfe0e; ";
                        // line 53
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "texto", [], "any", false, false, false, 53), "html", null, true);
                        echo "
                                                </div>
                                                <div class=\"d-flex justify-content-around align-items-center\">
                                                    <p>";
                        // line 56
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "fechaLectura", [], "any", false, false, false, 56), "Y-m-d"), "html", null, true);
                        echo "</p>
                                                    <button class=\"btn btn-primary\"><a class=\"enlace\" href=\"/messageVisto/";
                        // line 57
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageRecibido"], "id", [], "any", false, false, false, 57), "html", null, true);
                        echo "\">Ver mensaje</a></button>
                                                </div>
                                            </div>
                                            <br/>
                                        ";
                    }
                    // line 62
                    echo "                                    ";
                }
                // line 63
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageRecibido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"v-pills-mensajesEnviados\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesEnviados-tab\">
                            <div class=\"mensajesEnviados\">
                                ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messagesEnviados"]) || array_key_exists("messagesEnviados", $context) ? $context["messagesEnviados"] : (function () { throw new RuntimeError('Variable "messagesEnviados" does not exist.', 68, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["messageEnviado"]) {
                // line 69
                echo "                                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "visto", [], "any", false, false, false, 69), false))) {
                    // line 70
                    echo "                                        <div class=\"d-flex flex-column  pildora-border pl-1 pt-1\">
                                            <div class=\"d-flex flex-start\">
                                                &#x1f4ec;&#xfe0e; ";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "texto", [], "any", false, false, false, 72), "html", null, true);
                    echo "
                                            </div>
                                            <div class=\"d-flex justify-content-around align-items-center\">
                                                <p>";
                    // line 75
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "fechaEnvio", [], "any", false, false, false, 75), "Y-m-d"), "html", null, true);
                    echo "</p>
                                                <button class=\"btn btn-primary\"><a class=\"enlace\" href=\"/messageVisto/";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "id", [], "any", false, false, false, 76), "html", null, true);
                    echo "\">Ver mensaje</a></button>
                                            </div>
                                        </div>
                                        <br/>
                                    ";
                } else {
                    // line 81
                    echo "                                        <div class=\"d-flex flex-column  pildora-border pl-1 pt-1\">
                                            <div class=\"d-flex flex-start\">
                                                &#x1f4ed;&#xfe0e; ";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "texto", [], "any", false, false, false, 83), "html", null, true);
                    echo "
                                            </div>
                                            <div class=\"d-flex justify-content-around align-items-center\">
                                                <p>";
                    // line 86
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "fechaLectura", [], "any", false, false, false, 86), "Y-m-d"), "html", null, true);
                    echo "</p>
                                                <button class=\"btn btn-primary\"><a class=\"enlace\" href=\"/messageVisto/";
                    // line 87
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messageEnviado"], "id", [], "any", false, false, false, 87), "html", null, true);
                    echo "\">Ver mensaje</a></button>
                                            </div>
                                        </div>
                                        <br/>
                                    ";
                }
                // line 92
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messageEnviado'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
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
        return array (  272 => 93,  266 => 92,  258 => 87,  254 => 86,  248 => 83,  244 => 81,  236 => 76,  232 => 75,  226 => 72,  222 => 70,  219 => 69,  215 => 68,  209 => 64,  203 => 63,  200 => 62,  192 => 57,  188 => 56,  182 => 53,  178 => 51,  170 => 46,  166 => 45,  160 => 42,  156 => 40,  153 => 39,  150 => 38,  146 => 37,  140 => 33,  134 => 32,  126 => 27,  122 => 26,  116 => 23,  112 => 21,  109 => 20,  105 => 19,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                    <div class=\"tab-content pildora-content pl-4\" id=\"v-pills-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"v-pills-mensajesReportados\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesReportados-tab\">
                            <div class=\"mensajesReportados\">
                                {% for message in messages %}
                                    {% if  message.reportado == true and message.oculto != true %}
                                        <div class=\"d-flex flex-column pildora-border pl-1 pt-1\">
                                            <div class=\"d-flex flex-start\">
                                                &#x1f6a9;&#xfe0e; {{ message.texto }}
                                            </div>
                                            <div class=\"d-flex justify-content-around align-items-center\">
                                                <p>{{ message.fechaEnvio|date(\"Y-m-d\") }}</p>
                                                <button class=\"btn btn-primary\"><a class=\"enlace\" href=\"/messageVisto/{{ message.id }}\">Ver mensaje</a></button>
                                            </div>
                                        </div>
                                        <br/>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"v-pills-mensajesRecibidos\" role=\"tabpanel\" aria-labelledby=\"v-pills-mensajesRecibidos-tab\">
                            <div class=\"mensajesRecibidos\">
                                {% for messageRecibido in messagesRecibidos %}
                                    {% if messageRecibido.user.id != app.user.id %}
                                        {% if messageRecibido.visto == false %}
                                            <div class=\"d-flex flex-column  pildora-border pl-1 pt-1\">
                                                <div class=\"d-flex flex-start\">
                                                    &#x1f4ec;&#xfe0e; {{ messageRecibido.texto }}
                                                </div>
                                                <div class=\"d-flex justify-content-around align-items-center\">
                                                    <p>{{ messageRecibido.fechaEnvio|date(\"Y-m-d\") }}</p>
                                                    <button class=\"btn btn-primary\"><a class=\"enlace\" href=\"/messageVisto/{{ messageRecibido.id }}\">Ver mensaje</a></button>
                                                </div>
                                            </div>
                                            <br/>
                                        {% else %}
                                            <div class=\"d-flex flex-column  pildora-border pl-1 pt-1\">
                                                <div class=\"d-flex flex-start\">
                                                    &#x1f4ed;&#xfe0e; {{ messageRecibido.texto }}
                                                </div>
                                                <div class=\"d-flex justify-content-around align-items-center\">
                                                    <p>{{ messageRecibido.fechaLectura|date(\"Y-m-d\") }}</p>
                                                    <button class=\"btn btn-primary\"><a class=\"enlace\" href=\"/messageVisto/{{ messageRecibido.id }}\">Ver mensaje</a></button>
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
                                    {% if messageEnviado.visto == false %}
                                        <div class=\"d-flex flex-column  pildora-border pl-1 pt-1\">
                                            <div class=\"d-flex flex-start\">
                                                &#x1f4ec;&#xfe0e; {{ messageEnviado.texto }}
                                            </div>
                                            <div class=\"d-flex justify-content-around align-items-center\">
                                                <p>{{ messageEnviado.fechaEnvio|date(\"Y-m-d\") }}</p>
                                                <button class=\"btn btn-primary\"><a class=\"enlace\" href=\"/messageVisto/{{ messageEnviado.id }}\">Ver mensaje</a></button>
                                            </div>
                                        </div>
                                        <br/>
                                    {% else %}
                                        <div class=\"d-flex flex-column  pildora-border pl-1 pt-1\">
                                            <div class=\"d-flex flex-start\">
                                                &#x1f4ed;&#xfe0e; {{ messageEnviado.texto }}
                                            </div>
                                            <div class=\"d-flex justify-content-around align-items-center\">
                                                <p>{{ messageEnviado.fechaLectura|date(\"Y-m-d\") }}</p>
                                                <button class=\"btn btn-primary\"><a class=\"enlace\" href=\"/messageVisto/{{ messageEnviado.id }}\">Ver mensaje</a></button>
                                            </div>
                                        </div>
                                        <br/>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}", "main/mensajesReportados.html.twig", "/home/miguel/Escritorio/ComunityCar/templates/main/mensajesReportados.html.twig");
    }
}
