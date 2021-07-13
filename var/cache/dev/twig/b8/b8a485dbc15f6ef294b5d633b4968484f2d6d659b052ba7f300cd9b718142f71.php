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

/* yml/index.xml.twig */
class __TwigTemplate_cd3f306e042537c326b29d98af3d226ff4424c438a12cffac7f1fc2d1424d0d3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "yml/index.xml.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "yml/index.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<yml_catalog date=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i"), "html", null, true);
        echo "\">
    <shop>
        <name>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["main_page_data"]) || array_key_exists("main_page_data", $context) ? $context["main_page_data"] : (function () { throw new RuntimeError('Variable "main_page_data" does not exist.', 4, $this->source); })()), "meta_title", [], "any", false, false, false, 4), "html", null, true);
        echo "</name>
        <company>";
        // line 5
        echo twig_get_attribute($this->env, $this->source, (isset($context["main_page_data"]) || array_key_exists("main_page_data", $context) ? $context["main_page_data"] : (function () { throw new RuntimeError('Variable "main_page_data" does not exist.', 5, $this->source); })()), "meta_description", [], "any", false, false, false, 5);
        echo "?></company>
        <url>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "schemeAndHttpHost", [], "any", false, false, false, 6), "html", null, true);
        echo "/</url>
        <currencies>
            <currency id=\"RUR\" rate=\"1\" />
        </currencies>
        <categories>
            <category id=\"1\">Товары в наличии</category>
        </categories>
        <offers>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offers"]) || array_key_exists("offers", $context) ? $context["offers"] : (function () { throw new RuntimeError('Variable "offers" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 15
            echo "<offer id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\" available=\"true\">
                <url>";
            // line 16
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "schemeAndHttpHost", [], "any", false, false, false, 16) . twig_get_attribute($this->env, $this->source, $context["offer"], "path", [], "any", false, false, false, 16)), "html", null, true);
            echo "</url>
                <price>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "price", [], "any", false, false, false, 17), "html", null, true);
            echo "</price>
                <currencyId>RUR</currencyId>
                <categoryId>1</categoryId>
                <name>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "meta_title", [], "any", false, false, false, 20), "html", null, true);
            echo "</name>
                <description>";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["offer"], "meta_description", [], "any", false, false, false, 21);
            echo "</description>
                <manufacturer_warranty>true</manufacturer_warranty>
                <delivery>false</delivery>
                <picture>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "schemeAndHttpHost", [], "any", false, false, false, 24), "html", null, true);
            echo "/img/yml/product.jpg</picture>
            </offer>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</offers>
    </shop>
</yml_catalog>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "yml/index.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 27,  99 => 24,  93 => 21,  89 => 20,  83 => 17,  79 => 16,  74 => 15,  70 => 14,  59 => 6,  55 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<yml_catalog date=\"{{ 'now'|date('Y-m-d H:i') }}\">
    <shop>
        <name>{{ main_page_data.meta_title }}</name>
        <company>{{ main_page_data.meta_description|raw }}?></company>
        <url>{{ app.request.schemeAndHttpHost }}/</url>
        <currencies>
            <currency id=\"RUR\" rate=\"1\" />
        </currencies>
        <categories>
            <category id=\"1\">Товары в наличии</category>
        </categories>
        <offers>
            {% for offer in offers -%}
            <offer id=\"{{ offer.id }}\" available=\"true\">
                <url>{{ app.request.schemeAndHttpHost~offer.path }}</url>
                <price>{{ offer.price }}</price>
                <currencyId>RUR</currencyId>
                <categoryId>1</categoryId>
                <name>{{ offer.meta_title }}</name>
                <description>{{ offer.meta_description|raw }}</description>
                <manufacturer_warranty>true</manufacturer_warranty>
                <delivery>false</delivery>
                <picture>{{ app.request.schemeAndHttpHost }}/img/yml/product.jpg</picture>
            </offer>
            {% endfor -%}
        </offers>
    </shop>
</yml_catalog>", "yml/index.xml.twig", "C:\\OpenServer\\domains\\SM\\templates\\yml\\index.xml.twig");
    }
}
