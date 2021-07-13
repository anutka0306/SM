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

/* v2/pages/brand.html.twig */
class __TwigTemplate_5e57223ad1e9a81639458d456f64bd249d2734b645a97b9a1402e277acc697cb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/pages/brand.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/pages/brand.html.twig"));

        $this->parent = $this->loadTemplate("v2/base.html.twig", "v2/pages/brand.html.twig", 1);
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
        echo "

    ";
        // line 6
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "text", [], "any", false, false, false, 6))) {
            // line 7
            echo "        <div class=\"container container2\">
            <div class=\"row justify-content-center\">
                <div class=\"col-sm-12 col-lg-12\">
                    <h1 class=\"title\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</h1>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 15
            echo "        <div class=\"container container2\">
            <div class=\"row justify-content-center\">
                <div class=\"col-sm-12 col-lg-12\">
                    <h1 class=\"title\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</h1>
                    <div class=\"col2 catalog-v2\">
                        ";
            // line 20
            if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 20, $this->source); })()), "text", [], "any", false, false, false, 20)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "<table") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                // line 21
                echo "
                        ";
            } else {
                // line 23
                echo "                            ";
                $context["textParts"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 23, $this->source); })()), "text", [], "any", false, false, false, 23), "</p>", 2);
                // line 24
                echo "                            ";
                echo twig_replace_filter((twig_get_attribute($this->env, $this->source, (isset($context["textParts"]) || array_key_exists("textParts", $context) ? $context["textParts"] : (function () { throw new RuntimeError('Variable "textParts" does not exist.', 24, $this->source); })()), 0, [], "array", false, false, false, 24) . "</p></div>"), ["[[\$table-price]]" => ""]);
                echo "
                        ";
            }
            // line 26
            echo "
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 32
        echo "


    <div class=\"price-list-orders__wrapper\">
        ";
        // line 36
        echo $this->extensions['App\Widget\PriceListExtension']->price_list($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 36, $this->source); })()));
        echo "
    </div>
    ";
        // line 38
        echo $this->extensions['App\Widget\SpecialOffersExtension']->special_offers($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 38, $this->source); })()), "brandAndModelName", [], "any", false, false, false, 38));
        echo "

    ";
        // line 40
        $this->loadTemplate("elements/_advantages.html.twig", "v2/pages/brand.html.twig", 40)->display(twig_array_merge($context, ["brandName" => (isset($context["brandName"]) || array_key_exists("brandName", $context) ? $context["brandName"] : (function () { throw new RuntimeError('Variable "brandName" does not exist.', 40, $this->source); })())]));
        // line 41
        echo "
<div class=\"container container2\">
    <div class=\"row justify-content-center\">
        <div class=\"col-sm-12 col-lg-12\">
            <div class=\"col2 catalog-v2\">

                ";
        // line 47
        if ((isset($context["textParts"]) || array_key_exists("textParts", $context))) {
            // line 48
            echo "                    ";
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["textParts"]) || array_key_exists("textParts", $context) ? $context["textParts"] : (function () { throw new RuntimeError('Variable "textParts" does not exist.', 48, $this->source); })())), 1))) {
                // line 49
                echo "                        ";
                $context["textSubParts"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["textParts"]) || array_key_exists("textParts", $context) ? $context["textParts"] : (function () { throw new RuntimeError('Variable "textParts" does not exist.', 49, $this->source); })()), 1, [], "array", false, false, false, 49), "[[\$section_models]]", 2);
                // line 50
                echo "                        ";
                echo twig_replace_filter(("<div>" . twig_get_attribute($this->env, $this->source, (isset($context["textSubParts"]) || array_key_exists("textSubParts", $context) ? $context["textSubParts"] : (function () { throw new RuntimeError('Variable "textSubParts" does not exist.', 50, $this->source); })()), 0, [], "array", false, false, false, 50)), ["[[\$table-price]]" => ""]);
                echo "

                        ";
                // line 52
                echo $this->extensions['App\Widget\BrandsModelsExtension']->brand_models($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 52, $this->source); })()), "priceBrand", [], "any", false, false, false, 52), twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 52, $this->source); })()), "path", [], "any", false, false, false, 52));
                echo "

                        ";
                // line 54
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["textSubParts"]) || array_key_exists("textSubParts", $context) ? $context["textSubParts"] : (function () { throw new RuntimeError('Variable "textSubParts" does not exist.', 54, $this->source); })()), 1, [], "array", false, false, false, 54), ["[[\$table-price]]" => ""]);
                echo "
                    ";
            } else {
                // line 56
                echo "                        &nbsp;
                        ";
                // line 57
                echo $this->extensions['App\Widget\BrandsModelsExtension']->brand_models($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 57, $this->source); })()), "priceBrand", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 57, $this->source); })()), "path", [], "any", false, false, false, 57));
                echo "

                    ";
            }
            // line 60
            echo "                ";
        } else {
            // line 61
            echo "                    ";
            echo $this->extensions['App\Widget\BrandsModelsExtension']->brand_models($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 61, $this->source); })()), "priceBrand", [], "any", false, false, false, 61), twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 61, $this->source); })()), "path", [], "any", false, false, false, 61));
            echo "
                    &nbsp;
                    ";
            // line 63
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 63, $this->source); })()), "text", [], "any", false, false, false, 63), ["[[\$table-price]]" => ""]);
            echo "
                ";
        }
        // line 65
        echo "            </div>
        </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "v2/pages/brand.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 65,  210 => 63,  204 => 61,  201 => 60,  195 => 57,  192 => 56,  187 => 54,  182 => 52,  176 => 50,  173 => 49,  170 => 48,  168 => 47,  160 => 41,  158 => 40,  153 => 38,  148 => 36,  142 => 32,  134 => 26,  128 => 24,  125 => 23,  121 => 21,  119 => 20,  114 => 18,  109 => 15,  101 => 10,  96 => 7,  94 => 6,  90 => 4,  80 => 3,  59 => 2,  36 => 1,);
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
                            {{ (textParts[0] ~ '</p></div>')|replace({'[[\$table-price]]': ''})|raw }}
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

    {% include 'elements/_advantages.html.twig' with {'brandName': brandName} %}

<div class=\"container container2\">
    <div class=\"row justify-content-center\">
        <div class=\"col-sm-12 col-lg-12\">
            <div class=\"col2 catalog-v2\">

                {% if textParts is defined %}
                    {% if textParts|length > 1 %}
                        {% set textSubParts = textParts[1]|split('[[\$section_models]]',2) %}
                        {{ ('<div>' ~ textSubParts[0])|replace({'[[\$table-price]]': ''})|raw }}

                        {{ brand_models(page.priceBrand, page.path) }}

                        {{ (textSubParts[1])|replace({'[[\$table-price]]': ''})|raw }}
                    {% else %}
                        &nbsp;
                        {{ brand_models(page.priceBrand, page.path) }}

                    {% endif %}
                {% else %}
                    {{ brand_models(page.priceBrand, page.path) }}
                    &nbsp;
                    {{ page.text|replace({'[[\$table-price]]': ''})|raw }}
                {% endif %}
            </div>
        </div>
    </div>
</div>


{% endblock %}
", "v2/pages/brand.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\pages\\brand.html.twig");
    }
}
