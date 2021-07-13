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

/* admin/published_services/parts/rows.html.twig */
class __TwigTemplate_0377da8a315dc8559c5788d81760daade0bac33e49d5b67ed23e80fd299be154 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/published_services/parts/rows.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/published_services/parts/rows.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["priceCategories"]) || array_key_exists("priceCategories", $context) ? $context["priceCategories"] : (function () { throw new RuntimeError('Variable "priceCategories" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["priceCategory"]) {
            // line 2
            echo "    <tr>
        <td class=\"bg-dark text-white\">";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priceCategory"], "fullName", [], "any", false, false, false, 3), "html", null, true);
            echo "</td>
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 5
                echo "                ";
                echo $this->extensions['App\Widget\PublishedServicesExtension']->get_service_table_cell($this->env, $context["page"], $context["priceCategory"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "            </tr>
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["priceCategory"], "priceServices", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["priceService"]) {
                // line 9
                echo "                <tr>
                    <td>";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priceCategory"], "fullName", [], "any", false, false, false, 10), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priceService"], "name", [], "any", false, false, false, 10), "html", null, true);
                echo "</td>
                    ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 11, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 12
                    echo "                ";
                    echo $this->extensions['App\Widget\PublishedServicesExtension']->get_service_table_cell($this->env, $context["page"], $context["priceService"]);
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceService'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/published_services/parts/rows.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 14,  87 => 12,  83 => 11,  77 => 10,  74 => 9,  70 => 8,  67 => 7,  58 => 5,  54 => 4,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for priceCategory in priceCategories %}
    <tr>
        <td class=\"bg-dark text-white\">{{ priceCategory.fullName }}</td>
            {% for page in pages %}
                {{ service_table_cell(page, priceCategory) }}
            {% endfor %}
            </tr>
            {% for priceService in priceCategory.priceServices %}
                <tr>
                    <td>{{ priceCategory.fullName }} / {{priceService.name}}</td>
                    {% for page in pages %}
                {{ service_table_cell(page, priceService) }}
            {% endfor %}
        </tr>
    {% endfor %}
{% endfor %}
", "admin/published_services/parts/rows.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\admin\\published_services\\parts\\rows.html.twig");
    }
}
