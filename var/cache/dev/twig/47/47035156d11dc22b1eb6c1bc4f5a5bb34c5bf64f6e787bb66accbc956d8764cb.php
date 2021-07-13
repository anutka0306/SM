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

/* v2/turbo/service/callback-buttons.html.twig */
class __TwigTemplate_d487a9f5ab9bd8df02ba72dd8fdacc43d6663b0f8d7afb1b26576e60f3cdb059 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/turbo/service/callback-buttons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/turbo/service/callback-buttons.html.twig"));

        // line 1
        $context["buttons"] = [0 => "Записаться в сервис", 1 => "Получить консультацию", 2 => "Бесплатная диагностика", 3 => "Заказать эвакуатор"];
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 3
            echo "    <button
            formaction=\"tel:";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\"
            data-background-color=\"blue\"
            data-color=\"white\"
            data-turbo=\"false\"
            data-primary=\"true\"
    >
        ";
            // line 10
            echo twig_escape_filter($this->env, $context["button"], "html", null, true);
            echo "
    </button>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/turbo/service/callback-buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  52 => 4,  49 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set buttons = ['Записаться в сервис', 'Получить консультацию', 'Бесплатная диагностика', 'Заказать эвакуатор'] %}
{% for button in buttons %}
    <button
            formaction=\"tel:{{ phone }}\"
            data-background-color=\"blue\"
            data-color=\"white\"
            data-turbo=\"false\"
            data-primary=\"true\"
    >
        {{ button }}
    </button>
{% endfor %}", "v2/turbo/service/callback-buttons.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\turbo\\service\\callback-buttons.html.twig");
    }
}
