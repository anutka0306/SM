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

/* v2/extensions/breadcrumbs.html.twig */
class __TwigTemplate_07f50699d022dfc11a7d063d877d3991b273b924bb5756e040fc2e38f8e9f724 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/extensions/breadcrumbs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/extensions/breadcrumbs.html.twig"));

        // line 1
        echo "<div class=\"container container2\">
    <div class=\"navigation\">
        <div class=\"navigation_item_block\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 4, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 5)) {
                // line 6
                echo "            <div class=\"navigation_item\">
                <a href=\"#\">";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 7), "html", null, true);
                echo "</a>
            </div>
            ";
            } else {
                // line 10
                echo "            <div class=\"navigation_item\">
                <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 11), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 11), "html", null, true);
                echo "</a>
                <span>&#8646;</span>
            </div>

            ";
            }
            // line 16
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
    ";
        // line 18
        echo twig_include($this->env, $context, "v2/blocks/section/rating_schema.html.twig", ["page" => (($context["page"]) ?? (null))]);
        echo "
</div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/extensions/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 18,  104 => 17,  90 => 16,  80 => 11,  77 => 10,  71 => 7,  68 => 6,  65 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container container2\">
    <div class=\"navigation\">
        <div class=\"navigation_item_block\">
        {% for item in items %}
            {% if loop.last %}
            <div class=\"navigation_item\">
                <a href=\"#\">{{ item.name }}</a>
            </div>
            {% else %}
            <div class=\"navigation_item\">
                <a href=\"{{ item.path }}\">{{ item.name }}</a>
                <span>&#8646;</span>
            </div>

            {% endif %}
        {% endfor %}
    </div>
    {{ include('v2/blocks/section/rating_schema.html.twig',{ page: page ?? null }) }}
</div>
</div>", "v2/extensions/breadcrumbs.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\extensions\\breadcrumbs.html.twig");
    }
}
