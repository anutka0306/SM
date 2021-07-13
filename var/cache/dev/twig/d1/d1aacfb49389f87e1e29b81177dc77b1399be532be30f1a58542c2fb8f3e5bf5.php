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

/* admin/price_category_tree/_tree.html.twig */
class __TwigTemplate_42bff414b0882fd06270def920d9f3f479af02770f1673b542486860903beba3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/price_category_tree/_tree.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/price_category_tree/_tree.html.twig"));

        // line 1
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 2, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "        <li>
                <a target=\"_blank\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", ["entity" => "PriceCategory", "action" => "edit", "id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 4)]), "html", null, true);
            echo "\"><i class=\"fa fa-pen\"></i></a> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 4), "html", null, true);
            echo " . Услуг - ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "priceServices", [], "any", false, false, false, 4)), "html", null, true);
            echo "
            ";
            // line 5
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 5)), 0))) {
                // line 6
                echo "                ";
                echo twig_include($this->env, $context, "admin/price_category_tree/_tree.html.twig", ["categories" => twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 6)]);
                echo "
            ";
            }
            // line 8
            echo "        </li>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/price_category_tree/_tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 10,  84 => 8,  78 => 6,  76 => 5,  66 => 4,  63 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    {% for category in categories %}
        <li>
                <a target=\"_blank\" href=\"{{ path('easyadmin',{'entity':'PriceCategory','action':'edit','id':category.id}) }}\"><i class=\"fa fa-pen\"></i></a> {{ category.id }}.{{ category.name }} . Услуг - {{ category.priceServices|length }}
            {% if category.children|length > 0 %}
                {{ include('admin/price_category_tree/_tree.html.twig',{ \"categories\" : category.children }) }}
            {% endif %}
        </li>
    {% endfor %}
</ul>", "admin/price_category_tree/_tree.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\admin\\price_category_tree\\_tree.html.twig");
    }
}
