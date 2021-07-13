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

/* v2/turbo/service/about.html.twig */
class __TwigTemplate_5ea3a3dd438dc46045202095d4ca87ff67cabb5837d0d1873ed2b3334b0f32c7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/turbo/service/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/turbo/service/about.html.twig"));

        // line 1
        echo "<div class=\"about\">
    <h2>Почему мы</h2>
    <ul>
        <li>Современная покрасочная камера</li>
        <li>Официальная пожизненная гарантия</li>
        <li>Честные фиксированные цены. Без навязанных услуг</li>
        <li>Удобное расположение - 3 автосервиса в разных округах москвы</li>
        <li>Опытные мастера со стажем более 10 лет</li>
        <li>100% попадание в цвет</li>
    </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/turbo/service/about.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"about\">
    <h2>Почему мы</h2>
    <ul>
        <li>Современная покрасочная камера</li>
        <li>Официальная пожизненная гарантия</li>
        <li>Честные фиксированные цены. Без навязанных услуг</li>
        <li>Удобное расположение - 3 автосервиса в разных округах москвы</li>
        <li>Опытные мастера со стажем более 10 лет</li>
        <li>100% попадание в цвет</li>
    </ul>
</div>", "v2/turbo/service/about.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\turbo\\service\\about.html.twig");
    }
}
