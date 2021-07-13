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

/* v1/widget/paint_menu.html.twig */
class __TwigTemplate_1a67247598db9d0fb955317790484bfb23efc33dc1e3d63a7e9696264bd94d3c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/paint_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/paint_menu.html.twig"));

        // line 1
        echo "<div class=\"paint_menu\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "link", [], "any", false, false, false, 3), "html", null, true);
            echo "\" class=\"item_paint_menu\">
            <div ";
            // line 4
            echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoadBg($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["service"], "img", [], "any", false, false, false, 4)), [0 => "item_paint_menu_img"]);
            echo " ></div>
            <span>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</span>
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/paint_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 8,  59 => 5,  55 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"paint_menu\">
    {% for service in services %}
        <a href=\"{{ service.link }}\" class=\"item_paint_menu\">
            <div {{ lazy_load_bg(asset(service.img),['item_paint_menu_img']) }} ></div>
            <span>{{ service.name }}</span>
        </a>
    {% endfor %}
</div>", "v1/widget/paint_menu.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\paint_menu.html.twig");
    }
}
