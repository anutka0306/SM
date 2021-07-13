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

/* v2/pages/simple.html.twig */
class __TwigTemplate_bdc2d3934b6e6d837e85eea89db5fd5f7937b9711f5f1e34c6a655c6473d2c10 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/pages/simple.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/pages/simple.html.twig"));

        $this->parent = $this->loadTemplate("v2/base.html.twig", "v2/pages/simple.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        // line 5
        echo "    ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 5, $this->source); })()), "text", [], "any", false, false, false, 5))) {
            // line 6
            echo "        <div class=\"container container2\">
            <div class=\"row justify-content-center\">
                <div class=\"col-sm-12 col-lg-12\">
                    <h1 class=\"title\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
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
        // line 35
        echo $this->extensions['App\Widget\PriceListExtension']->price_list($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 35, $this->source); })()));
        echo "
    </div>
    ";
        // line 38
        echo "
    ";
        // line 40
        echo "
<div class=\"container container2\">
    <div class=\"row justify-content-center\">
        <div class=\"col-sm-12 col-lg-12\">
            <div class=\"col2 catalog-v2\">

                ";
        // line 46
        if ((isset($context["textParts"]) || array_key_exists("textParts", $context))) {
            // line 47
            echo "                ";
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["textParts"]) || array_key_exists("textParts", $context) ? $context["textParts"] : (function () { throw new RuntimeError('Variable "textParts" does not exist.', 47, $this->source); })())), 1))) {
                // line 48
                echo "
                ";
                // line 49
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["textParts"]) || array_key_exists("textParts", $context) ? $context["textParts"] : (function () { throw new RuntimeError('Variable "textParts" does not exist.', 49, $this->source); })()), 1, [], "array", false, false, false, 49), ["[[\$table-price]]" => ""]);
                echo "

                ";
            }
            // line 52
            echo "                ";
        }
        // line 53
        echo "            </div>
        </div>
    </div>
</div>

    <div class=\"brands-service-block__wrapper\">
        <div class=\"container container2\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-lg-12\">
                    <h2>Ремонт АКПП по маркам</h2>
                    ";
        // line 63
        echo $this->extensions['App\Widget\BrandsModelsExtension']->brands_service_block($this->env);
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "v2/pages/simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 63,  158 => 53,  155 => 52,  149 => 49,  146 => 48,  143 => 47,  141 => 46,  133 => 40,  130 => 38,  125 => 35,  120 => 32,  112 => 26,  106 => 24,  103 => 23,  99 => 21,  97 => 20,  92 => 18,  87 => 15,  78 => 9,  73 => 6,  70 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'v2/base.html.twig' %}

{% block body %}
    {#{{ include('v2/blocks/section/content.html.twig',{text:page.text }) }}#}
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
    {#{{ special_offers(page.brandAndModelName) }}#}

    {#{{ include('elements/_advantages.html.twig') }}#}

<div class=\"container container2\">
    <div class=\"row justify-content-center\">
        <div class=\"col-sm-12 col-lg-12\">
            <div class=\"col2 catalog-v2\">

                {% if textParts is defined %}
                {% if textParts|length > 1 %}

                {{ (textParts[1])|replace({'[[\$table-price]]': ''})|raw }}

                {% endif %}
                {% endif %}
            </div>
        </div>
    </div>
</div>

    <div class=\"brands-service-block__wrapper\">
        <div class=\"container container2\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-lg-12\">
                    <h2>Ремонт АКПП по маркам</h2>
                    {{ brands_service_block() }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "v2/pages/simple.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\pages\\simple.html.twig");
    }
}
