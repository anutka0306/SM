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

/* v1/widget/before_after.html.twig */
class __TwigTemplate_0807456f04e4837ea83dc6cac2814b8cebfee6415bb6c1c14d52fe39511e990d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/before_after.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/before_after.html.twig"));

        // line 1
        echo "<div ";
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoadBg("/img/works-bg.png", [0 => "before_after"]);
        echo " id=\"before_after\">
    <div class=\"container\">
        <h2 class=\"before_after__title\">Наши работы</h2>
        <div class=\"before_after__slider before-slider\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "                <div class=\"before-slider__slide\">
                    <div class=\"before\"><img ";
            // line 7
            echo $this->extensions['App\Twig\LazyLoadExtension']->slickLazyLoad(twig_get_attribute($this->env, $this->source, $context["item"], "beforeImg", [], "any", false, false, false, 7));
            echo " alt=\"\"></div>
                    <div class=\"after\"><img ";
            // line 8
            echo $this->extensions['App\Twig\LazyLoadExtension']->slickLazyLoad(twig_get_attribute($this->env, $this->source, $context["item"], "afterImg", [], "any", false, false, false, 8));
            echo " alt=\"\"></div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </div>
        <div class=\"before_after__slider nav-before-slider\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "                <div class=\"nav-before-slider__slide\">
                    <div>
                        <img ";
            // line 16
            echo $this->extensions['App\Twig\LazyLoadExtension']->slickLazyLoad(twig_get_attribute($this->env, $this->source, $context["item"], "afterImg", [], "any", false, false, false, 16));
            echo " alt=\"\">
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/before_after.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  83 => 16,  79 => 14,  75 => 13,  71 => 11,  62 => 8,  58 => 7,  55 => 6,  51 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div {{ lazy_load_bg('/img/works-bg.png',['before_after']) }} id=\"before_after\">
    <div class=\"container\">
        <h2 class=\"before_after__title\">Наши работы</h2>
        <div class=\"before_after__slider before-slider\">
            {% for item in items %}
                <div class=\"before-slider__slide\">
                    <div class=\"before\"><img {{ slick_lazy_load(item.beforeImg) }} alt=\"\"></div>
                    <div class=\"after\"><img {{ slick_lazy_load(item.afterImg) }} alt=\"\"></div>
                </div>
            {% endfor %}
        </div>
        <div class=\"before_after__slider nav-before-slider\">
            {% for item in items %}
                <div class=\"nav-before-slider__slide\">
                    <div>
                        <img {{ slick_lazy_load(item.afterImg) }} alt=\"\">
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>", "v1/widget/before_after.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\before_after.html.twig");
    }
}
