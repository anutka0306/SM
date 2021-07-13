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

/* v2/widget/price_list.html.twig */
class __TwigTemplate_d3a6a36c714b484ec812196f2527a2c4857031b310301437bbc209451d7fde85 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/price_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/price_list.html.twig"));

        // line 1
        echo "<div class=\"services-prices\">
    <h3>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["price_list_title"]) || array_key_exists("price_list_title", $context) ? $context["price_list_title"] : (function () { throw new RuntimeError('Variable "price_list_title" does not exist.', 2, $this->source); })()), "html", null, true);
        echo " цена</h3>
    <ul data-uk-accordion=\"collapsible: false\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 5
            echo "            <li><a class=\"uk-accordion-title\" href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</a>
                <div class=\"uk-accordion-content\">
                    <ul class=\"price-list\">
                        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "priceServices", [], "any", false, false, false, 8), function ($__service__) use ($context, $macros) { $context["service"] = $__service__; return twig_get_attribute($this->env, $this->source, $context["service"], "published", [], "any", false, false, false, 8); }));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 9
                echo "                            <li>
                                <span>
                                    ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["service"], "path", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "path", [], "any", false, false, false, 12), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", true, true, false, 12) &&  !(null === twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", false, false, false, 12)))) ? (twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", false, false, false, 12)) : (twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 12))), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 14
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 14), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 14, $this->source); })()), "brandAndModelName", [], "any", false, false, false, 14), "html", null, true);
                    echo "
                                    ";
                }
                // line 16
                echo "                                        <b>от ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 16), "html", null, true);
                echo "&nbsp;р.</b>
                                </span>
                                <span class=\"border\"></span>
                                <span><a class=\"callback js-popup-trigger\" href=\"#\">Рассчитать стоимость</a></span>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                    </ul>
                </div>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/widget/price_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 26,  101 => 22,  88 => 16,  80 => 14,  72 => 12,  70 => 11,  66 => 9,  62 => 8,  55 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"services-prices\">
    <h3>{{ price_list_title }} цена</h3>
    <ul data-uk-accordion=\"collapsible: false\">
        {% for section in sections %}
            <li><a class=\"uk-accordion-title\" href=\"#\">{{ section.name }}</a>
                <div class=\"uk-accordion-content\">
                    <ul class=\"price-list\">
                        {% for service in section.priceServices|filter(service => service.published ) %}
                            <li>
                                <span>
                                    {% if service.path %}
                                        <a href=\"{{ service.path }}\">{{ service.nameInPriceList ?? service.name }}</a>
                                    {% else %}
                                        {{ service.name }} {{ page.brandAndModelName }}
                                    {% endif %}
                                        <b>от {{ service.price }}&nbsp;р.</b>
                                </span>
                                <span class=\"border\"></span>
                                <span><a class=\"callback js-popup-trigger\" href=\"#\">Рассчитать стоимость</a></span>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </li>
        {% endfor %}
    </ul>
</div>", "v2/widget/price_list.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\widget\\price_list.html.twig");
    }
}
