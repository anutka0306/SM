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

/* v2/widget/price_list_full.html.twig */
class __TwigTemplate_e855dfe9f8a5395b3b594e289c5b856a544393c85a4c9ad4e11aeb05df21b2c9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/price_list_full.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/price_list_full.html.twig"));

        // line 1
        echo "<div class=\"services-prices\">
    <ul data-uk-accordion=\"multiple: true\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 4
            echo "            <li><a class=\"uk-accordion-title\" href=\"#\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "name", [], "any", false, false, false, 4), "html", null, true);
            echo "</a>
                <div class=\"uk-accordion-content\">
                    <ul class=\"price-list\">
                        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "priceServices", [], "any", false, false, false, 7), function ($__service__) use ($context, $macros) { $context["service"] = $__service__; return twig_get_attribute($this->env, $this->source, $context["service"], "published", [], "any", false, false, false, 7); }));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 8
                echo "                            <li>
                                <span>
                                    ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["service"], "path", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "path", [], "any", false, false, false, 11), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", true, true, false, 11) &&  !(null === twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", false, false, false, 11)))) ? (twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", false, false, false, 11)) : (twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 11))), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 13
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 13), "html", null, true);
                    echo "
                                    ";
                }
                // line 15
                echo "                                        <b>от ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 15), "html", null, true);
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
            // line 21
            echo "                    </ul>
                </div>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/widget/price_list_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  95 => 21,  82 => 15,  76 => 13,  68 => 11,  66 => 10,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"services-prices\">
    <ul data-uk-accordion=\"multiple: true\">
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
                                        {{ service.name }}
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
</div>", "v2/widget/price_list_full.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\widget\\price_list_full.html.twig");
    }
}
