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

/* v2/turbo/service/sub-price-action.html.twig */
class __TwigTemplate_777aee7eee368e5952eb7688975c8944aa01a2ad3553617a45104d9c1fbdb4c1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/turbo/service/sub-price-action.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/turbo/service/sub-price-action.html.twig"));

        // line 1
        echo "<div class=\"sub-price-action\">
    <p>
        <strong>
            <span>&#128293;</span>
            <span>БЕСПЛАТНАЯ ДИАГНОСТИКА по 43 параметрам</span>
        </strong>.<br>
        <span>&#9940;</span>
        <i style=\"font-weight: lighter; margin-top: 5px;\">Предложение действительно при первом обращении или ремонте в нашем автосервисе «Мицубиси Сервис».</i>
        <a target=\"_blank\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "schemeAndHttpHost", [], "any", false, false, false, 9), "html", null, true);
        echo "/free_diagnostics/\">Подробнее</a>
    </p>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/turbo/service/sub-price-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sub-price-action\">
    <p>
        <strong>
            <span>&#128293;</span>
            <span>БЕСПЛАТНАЯ ДИАГНОСТИКА по 43 параметрам</span>
        </strong>.<br>
        <span>&#9940;</span>
        <i style=\"font-weight: lighter; margin-top: 5px;\">Предложение действительно при первом обращении или ремонте в нашем автосервисе «Мицубиси Сервис».</i>
        <a target=\"_blank\" href=\"{{ app.request.schemeAndHttpHost }}/free_diagnostics/\">Подробнее</a>
    </p>
</div>", "v2/turbo/service/sub-price-action.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\turbo\\service\\sub-price-action.html.twig");
    }
}
