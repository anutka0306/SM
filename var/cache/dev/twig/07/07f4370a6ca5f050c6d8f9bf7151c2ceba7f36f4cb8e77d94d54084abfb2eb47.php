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

/* v2/widget/services.html.twig */
class __TwigTemplate_db14d9780bffa4966c20dd10e96026b20002604e6af0d27f7828e8209285af36 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/services.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/services.html.twig"));

        // line 1
        echo "<div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 2, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 3
            echo "        <a class=\"price-list-category nav-link ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 3), 1))) {
                echo " active ";
            }
            echo "\" id=\"v-pills-brands";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 3), "html", null, true);
            echo "-tab\" data-toggle=\"pill\" href=\"#v-pills-brands";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 3), "html", null, true);
            echo "\" role=\"tab\" aria-controls=\"v-pills-brands";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 3), "html", null, true);
            echo "\" aria-selected=\"true\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 3), "html", null, true);
            echo "</a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/widget/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 5,  63 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
    {% for service in items %}
        <a class=\"price-list-category nav-link {% if(loop.index == 1) %} active {% endif %}\" id=\"v-pills-brands{{ service.id }}-tab\" data-toggle=\"pill\" href=\"#v-pills-brands{{ service.id }}\" role=\"tab\" aria-controls=\"v-pills-brands{{ service.id }}\" aria-selected=\"true\">{{ service.name }}</a>
    {% endfor %}
</div>", "v2/widget/services.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\widget\\services.html.twig");
    }
}
