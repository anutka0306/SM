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

/* v2/widget/models.html.twig */
class __TwigTemplate_ebce371826a4fbce2a7c2d2ae2a25bffd2fefb11e6a68766a229345c83369d8a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/models.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/models.html.twig"));

        // line 1
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new RuntimeError('Variable "models" does not exist.', 1, $this->source); })())), 0))) {
            // line 2
            echo "<table class=\"table-style2\" width=\"100%\" border=\"1\" cellspacing=\"0\" align=\"center\">
    <tbody>
    <tr><td colspan=\"3\" align=\"center\">Модели: </td></tr>
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new RuntimeError('Variable "models" does not exist.', 5, $this->source); })()), 3));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 6
                echo "    <tr>
        ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                    // line 8
                    echo "
        <td>
            ";
                    // line 10
                    if (twig_get_attribute($this->env, $this->source, $context["model"], "path", [], "any", false, false, false, 10)) {
                        // line 11
                        echo "                <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["curBrand"]) || array_key_exists("curBrand", $context) ? $context["curBrand"] : (function () { throw new RuntimeError('Variable "curBrand" does not exist.', 11, $this->source); })()), 0, [], "array", false, false, false, 11), "path", [], "any", false, false, false, 11), "html", null, true);
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "code", [], "any", false, false, false, 11), "html", null, true);
                        echo "\"
                   title=\"Ремонт АКПП ";
                        // line 12
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["curBrand"]) || array_key_exists("curBrand", $context) ? $context["curBrand"] : (function () { throw new RuntimeError('Variable "curBrand" does not exist.', 12, $this->source); })()), 0, [], "array", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "name", [], "any", false, false, false, 12), "html", null, true);
                        echo " (";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["curBrand"]) || array_key_exists("curBrand", $context) ? $context["curBrand"] : (function () { throw new RuntimeError('Variable "curBrand" does not exist.', 12, $this->source); })()), 0, [], "array", false, false, false, 12), "nameRus", [], "any", false, false, false, 12), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "nameRus", [], "any", false, false, false, 12), "html", null, true);
                        echo ") в Москве\">
                    Ремонт АКПП ";
                        // line 13
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["curBrand"]) || array_key_exists("curBrand", $context) ? $context["curBrand"] : (function () { throw new RuntimeError('Variable "curBrand" does not exist.', 13, $this->source); })()), 0, [], "array", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true);
                        echo "  ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "name", [], "any", false, false, false, 13), "html", null, true);
                        echo " (";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["curBrand"]) || array_key_exists("curBrand", $context) ? $context["curBrand"] : (function () { throw new RuntimeError('Variable "curBrand" does not exist.', 13, $this->source); })()), 0, [], "array", false, false, false, 13), "nameRus", [], "any", false, false, false, 13), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "nameRus", [], "any", false, false, false, 13), "html", null, true);
                        echo ") в Москве
                </a>
                ";
                    } else {
                        // line 16
                        echo "                    <span style=\"color: blue\">
                        Ремонт АКПП ";
                        // line 17
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["curBrand"]) || array_key_exists("curBrand", $context) ? $context["curBrand"] : (function () { throw new RuntimeError('Variable "curBrand" does not exist.', 17, $this->source); })()), 0, [], "array", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
                        echo "  ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "name", [], "any", false, false, false, 17), "html", null, true);
                        echo " (";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["curBrand"]) || array_key_exists("curBrand", $context) ? $context["curBrand"] : (function () { throw new RuntimeError('Variable "curBrand" does not exist.', 17, $this->source); })()), 0, [], "array", false, false, false, 17), "nameRus", [], "any", false, false, false, 17), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "nameRus", [], "any", false, false, false, 17), "html", null, true);
                        echo ") в Москве
                    </span>
            ";
                    }
                    // line 20
                    echo "        </td>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "    </tr>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </tbody>
</table>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/widget/models.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 25,  117 => 22,  110 => 20,  98 => 17,  95 => 16,  83 => 13,  73 => 12,  67 => 11,  65 => 10,  61 => 8,  57 => 7,  54 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if models|length > 0 %}
<table class=\"table-style2\" width=\"100%\" border=\"1\" cellspacing=\"0\" align=\"center\">
    <tbody>
    <tr><td colspan=\"3\" align=\"center\">Модели: </td></tr>
    {% for row in models|batch(3) %}
    <tr>
        {% for model in row %}

        <td>
            {% if(model.path) %}
                <a href=\"{{ curBrand[0].path }}{{ model.code }}\"
                   title=\"Ремонт АКПП {{ curBrand[0].name }} {{ model.name }} ({{ curBrand[0].nameRus }} {{ model.nameRus }}) в Москве\">
                    Ремонт АКПП {{ curBrand[0].name }}  {{ model.name}} ({{ curBrand[0].nameRus }} {{ model.nameRus }}) в Москве
                </a>
                {% else %}
                    <span style=\"color: blue\">
                        Ремонт АКПП {{ curBrand[0].name }}  {{ model.name}} ({{ curBrand[0].nameRus }} {{ model.nameRus }}) в Москве
                    </span>
            {% endif %}
        </td>
        {% endfor %}
    </tr>

    {% endfor %}
    </tbody>
</table>
{% endif %}", "v2/widget/models.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\widget\\models.html.twig");
    }
}
