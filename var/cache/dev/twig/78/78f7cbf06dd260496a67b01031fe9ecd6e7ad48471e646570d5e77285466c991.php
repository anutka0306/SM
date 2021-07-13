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

/* v2/turbo/service/price.html.twig */
class __TwigTemplate_100511aa6c36f9c58ecd41232a041cbd6a62f31958b8713343d99e42f3c915cd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/turbo/service/price.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/turbo/service/price.html.twig"));

        // line 1
        echo "<h2>";
        echo twig_escape_filter($this->env, (isset($context["price_list_title"]) || array_key_exists("price_list_title", $context) ? $context["price_list_title"] : (function () { throw new RuntimeError('Variable "price_list_title" does not exist.', 1, $this->source); })()), "html", null, true);
        echo " цена</h2>
<table>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 4
            echo "       ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["section"], "priceServices", [], "any", false, false, false, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 5
                echo "            <tr>
                <td>
                    ";
                // line 7
                if (twig_get_attribute($this->env, $this->source, $context["service"], "path", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "schemeAndHttpHost", [], "any", false, false, false, 8) . twig_get_attribute($this->env, $this->source, $context["service"], "path", [], "any", false, false, false, 8)), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 8), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 10
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 10), "html", null, true);
                    echo "
                    ";
                }
                // line 12
                echo "                </td>
                <td>от ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 13), "html", null, true);
                echo "&#8381</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/turbo/service/price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 17,  90 => 16,  81 => 13,  78 => 12,  72 => 10,  64 => 8,  62 => 7,  58 => 5,  53 => 4,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ price_list_title }} цена</h2>
<table>
    {% for section in sections %}
       {% for service in section.priceServices %}
            <tr>
                <td>
                    {% if service.path %}
                        <a href=\"{{ app.request.schemeAndHttpHost ~ service.path }}\"> {{ service.name }}</a>
                    {% else %}
                        {{ service.name }}
                    {% endif %}
                </td>
                <td>от {{ service.price }}&#8381</td>
            </tr>
        {% endfor %}
    {% endfor %}
</table>", "v2/turbo/service/price.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\turbo\\service\\price.html.twig");
    }
}
