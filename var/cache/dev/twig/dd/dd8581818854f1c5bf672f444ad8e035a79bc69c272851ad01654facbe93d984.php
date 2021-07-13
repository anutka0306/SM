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

/* v2/pages/model.html.twig */
class __TwigTemplate_1fe76223848dda07444874e0bd63784b1ce69f092c541b506267617145e92412 extends Template
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
        return "v2/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/pages/model.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/pages/model.html.twig"));

        $this->parent = $this->loadTemplate("v2/base.html.twig", "v2/pages/model.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "metaTitle", [], "any", false, false, false, 2)) ? (twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "metaTitle", [], "any", false, false, false, 2)) : ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "h1", [], "any", false, false, false, 2) . " - Сервис «Мир АКПП»"))), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 4, $this->source); })()), "text", [], "any", false, false, false, 4))) {
            // line 5
            echo "        <div class=\"container container2\">
            <div class=\"row justify-content-center\">
                <div class=\"col-sm-12 col-lg-12\">
                    <h1 class=\"title\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
            echo "</h1>

                </div>
            </div>
        </div>
        ";
        } else {
            // line 14
            echo "    <div class=\"container container2\">
        <div class=\"row justify-content-center\">
            <div class=\"col-sm-12 col-lg-12\">
                <h1 class=\"title\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "</h1>
                <div class=\"col2 catalog-v2\">
                    ";
            // line 19
            if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()), "text", [], "any", false, false, false, 19)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "<table") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                // line 20
                echo "
                        ";
            } else {
                // line 22
                echo "                    ";
                $context["textParts"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 22, $this->source); })()), "text", [], "any", false, false, false, 22), "</p>", 2);
                // line 23
                echo "                    ";
                echo (twig_get_attribute($this->env, $this->source, (isset($context["textParts"]) || array_key_exists("textParts", $context) ? $context["textParts"] : (function () { throw new RuntimeError('Variable "textParts" does not exist.', 23, $this->source); })()), 0, [], "array", false, false, false, 23) . "</p></div>");
                echo "
                            ";
            }
            // line 25
            echo "
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 31
        echo "
    <div class=\"price-list-orders__wrapper\">
        ";
        // line 33
        echo $this->extensions['App\Widget\PriceListExtension']->price_list($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 33, $this->source); })()));
        echo "
    </div>
    ";
        // line 35
        echo $this->extensions['App\Widget\SpecialOffersExtension']->special_offers($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 35, $this->source); })()), "brandAndModelName", [], "any", false, false, false, 35));
        echo "

    ";
        // line 37
        echo twig_include($this->env, $context, "elements/_advantages.html.twig");
        echo "

    <div class=\"container container2\">
        <div class=\"row justify-content-center\">
            <div class=\"col-sm-12 col-lg-12\">
                <div class=\"col2 catalog-v2\">
                    ";
        // line 43
        if ((isset($context["textParts"]) || array_key_exists("textParts", $context))) {
            // line 44
            echo "                        ";
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["textParts"]) || array_key_exists("textParts", $context) ? $context["textParts"] : (function () { throw new RuntimeError('Variable "textParts" does not exist.', 44, $this->source); })())), 1))) {
                // line 45
                echo "                            ";
                echo $this->extensions['App\Widget\ServicesExtention']->service_text($this->env, twig_get_attribute($this->env, $this->source, (isset($context["textParts"]) || array_key_exists("textParts", $context) ? $context["textParts"] : (function () { throw new RuntimeError('Variable "textParts" does not exist.', 45, $this->source); })()), 1, [], "array", false, false, false, 45));
                echo "
                        ";
            }
            // line 47
            echo "                    ";
        } else {
            // line 48
            echo "                        &nbsp;
                        ";
            // line 49
            echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 49, $this->source); })()), "text", [], "any", false, false, false, 49);
            echo "
                    ";
        }
        // line 51
        echo "                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "v2/pages/model.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 51,  180 => 49,  177 => 48,  174 => 47,  168 => 45,  165 => 44,  163 => 43,  154 => 37,  149 => 35,  144 => 33,  140 => 31,  132 => 25,  126 => 23,  123 => 22,  119 => 20,  117 => 19,  112 => 17,  107 => 14,  98 => 8,  93 => 5,  90 => 4,  80 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'v2/base.html.twig' %}
{% block title %} {{ page.metaTitle ? page.metaTitle : (page.h1~' - Сервис «Мир АКПП»') }} {% endblock %}
{% block body %}
    {% if(page.text is empty) %}
        <div class=\"container container2\">
            <div class=\"row justify-content-center\">
                <div class=\"col-sm-12 col-lg-12\">
                    <h1 class=\"title\">{{ page.name }}</h1>

                </div>
            </div>
        </div>
        {% else %}
    <div class=\"container container2\">
        <div class=\"row justify-content-center\">
            <div class=\"col-sm-12 col-lg-12\">
                <h1 class=\"title\">{{ page.name }}</h1>
                <div class=\"col2 catalog-v2\">
                    {% if page.text starts with '<table' %}

                        {% else %}
                    {% set textParts = page.text|split('</p>', 2) %}
                    {{ (textParts[0] ~ '</p></div>')|raw }}
                            {% endif %}

                </div>
            </div>
        </div>
    </div>
    {% endif %}

    <div class=\"price-list-orders__wrapper\">
        {{ price_list(page) }}
    </div>
    {{ special_offers(page.brandAndModelName) }}

    {{ include('elements/_advantages.html.twig') }}

    <div class=\"container container2\">
        <div class=\"row justify-content-center\">
            <div class=\"col-sm-12 col-lg-12\">
                <div class=\"col2 catalog-v2\">
                    {% if textParts is defined %}
                        {% if  textParts|length > 1 %}
                            {{ service_text(textParts[1]) }}
                        {% endif %}
                    {% else %}
                        &nbsp;
                        {{ page.text|raw }}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "v2/pages/model.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\pages\\model.html.twig");
    }
}
