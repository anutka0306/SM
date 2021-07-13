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

/* v2/pages/service.html.twig */
class __TwigTemplate_c0d4601c4463253822cb2c74e690b2cdb59f1adb03e8bbb97d16173ad3972c62 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/pages/service.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/pages/service.html.twig"));

        $this->parent = $this->loadTemplate("v2/base.html.twig", "v2/pages/service.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div class=\"container container2\">
        <div class=\"row justify-content-center\">
            <div class=\"col-sm-12 col-lg-12\">
                <h1 class=\"title\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
                ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()), "text", [], "any", false, false, false, 10);
        echo "
            </div>
        </div>
    </div>

    <div class=\"price-list-orders__wrapper\">
        ";
        // line 16
        echo $this->extensions['App\Widget\PriceListExtension']->price_list($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 16, $this->source); })()));
        echo "
    </div>
    ";
        // line 18
        echo $this->extensions['App\Widget\SpecialOffersExtension']->special_offers($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 18, $this->source); })()), "brandAndModelName", [], "any", false, false, false, 18));
        echo "
    ";
        // line 19
        $this->loadTemplate("elements/_advantages.html.twig", "v2/pages/service.html.twig", 19)->display(twig_array_merge($context, ["brandName" => (isset($context["brandName"]) || array_key_exists("brandName", $context) ? $context["brandName"] : (function () { throw new RuntimeError('Variable "brandName" does not exist.', 19, $this->source); })()), "modelName" => (isset($context["modelName"]) || array_key_exists("modelName", $context) ? $context["modelName"] : (function () { throw new RuntimeError('Variable "modelName" does not exist.', 19, $this->source); })())]));
        // line 20
        echo "
    <div class=\"brands-service-block__wrapper\">
        <div class=\"container container2\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-lg-12\">
                    ";
        // line 25
        echo $this->extensions['App\Widget\BrandsModelsExtension']->brands_service_block($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 25, $this->source); })()), "service", [], "any", false, false, false, 25), "slug", [], "any", false, false, false, 25));
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
        return "v2/pages/service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 25,  120 => 20,  118 => 19,  114 => 18,  109 => 16,  100 => 10,  96 => 9,  90 => 5,  80 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'v2/base.html.twig' %}
{% block title %} {{ page.metaTitle ? page.metaTitle : (page.h1~' - Сервис «Мир АКПП»') }} {% endblock %}

{% block body %}

    <div class=\"container container2\">
        <div class=\"row justify-content-center\">
            <div class=\"col-sm-12 col-lg-12\">
                <h1 class=\"title\">{{ page.name }}</h1>
                {{ page.text|raw }}
            </div>
        </div>
    </div>

    <div class=\"price-list-orders__wrapper\">
        {{ price_list(page) }}
    </div>
    {{ special_offers(page.brandAndModelName) }}
    {% include 'elements/_advantages.html.twig' with {'brandName': brandName, 'modelName': modelName}  %}

    <div class=\"brands-service-block__wrapper\">
        <div class=\"container container2\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-lg-12\">
                    {{ brands_service_block(page.service.slug) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "v2/pages/service.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\pages\\service.html.twig");
    }
}
