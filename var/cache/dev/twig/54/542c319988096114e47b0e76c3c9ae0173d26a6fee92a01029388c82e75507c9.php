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

/* v2/turbo/service/content.html.twig */
class __TwigTemplate_0c8399c611b47586d965bc5177c75b88b4a41f1b17eb3ff4c4ced7ab97c601f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/turbo/service/content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/turbo/service/content.html.twig"));

        // line 1
        $context["phone"] = "+7 (800) 775-79-61";
        // line 2
        $this->loadTemplate("v2/turbo/service/our-works.html.twig", "v2/turbo/service/content.html.twig", 2)->display($context);
        // line 3
        echo $this->extensions['App\Widget\PriceListExtension']->price_list_turbo($this->env, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 3, $this->source); })()));
        echo "
";
        // line 4
        $this->loadTemplate("v2/turbo/service/link.html.twig", "v2/turbo/service/content.html.twig", 4)->display($context);
        // line 5
        echo $this->extensions['App\Twig\ContentExtension']->turboText($this->env, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 5, $this->source); })()));
        echo "
";
        // line 6
        $this->loadTemplate("v2/turbo/service/about.html.twig", "v2/turbo/service/content.html.twig", 6)->display($context);
        // line 8
        $this->loadTemplate("v2/turbo/service/address.html.twig", "v2/turbo/service/content.html.twig", 8)->display($context);
        // line 9
        $this->loadTemplate("v2/turbo/service/map.html.twig", "v2/turbo/service/content.html.twig", 9)->display($context);
        // line 10
        $this->loadTemplate("v2/turbo/service/callback-corner.html.twig", "v2/turbo/service/content.html.twig", 10)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/turbo/service/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  61 => 9,  59 => 8,  57 => 6,  53 => 5,  51 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set phone = '+7 (800) 775-79-61' %}
{% include 'v2/turbo/service/our-works.html.twig' %}
{{ price_list_turbo(service) }}
{% include 'v2/turbo/service/link.html.twig' %}
{{ turbo_text(service) }}
{% include 'v2/turbo/service/about.html.twig' %}
{# {% include 'v2/turbo/service/callback-buttons.html.twig' %} #}
{% include 'v2/turbo/service/address.html.twig' %}
{% include 'v2/turbo/service/map.html.twig' %}
{% include 'v2/turbo/service/callback-corner.html.twig' %}", "v2/turbo/service/content.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\turbo\\service\\content.html.twig");
    }
}
