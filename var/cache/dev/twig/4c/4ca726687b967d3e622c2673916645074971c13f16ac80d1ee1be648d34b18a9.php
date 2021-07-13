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

/* v1/widget/price_blocks.html.twig */
class __TwigTemplate_c766867d1a2c020015077886fae6c5428535c9534c8351d91467c70ffc6f346b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/price_blocks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/price_blocks.html.twig"));

        // line 1
        echo "<div class=\"service-price row\">
    <div class=\"Box col-md-3 col-lg-2\">
        <div class=\"kira-theme4__table1__icon\">
            <span>Средняя стоимость услуги для ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["brand_model_name"]) || array_key_exists("brand_model_name", $context) ? $context["brand_model_name"] : (function () { throw new RuntimeError('Variable "brand_model_name" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"cena\">
            <span>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["price_service"]) || array_key_exists("price_service", $context) ? $context["price_service"] : (function () { throw new RuntimeError('Variable "price_service" does not exist.', 7, $this->source); })()), "price", [], "any", false, false, false, 7), "html", null, true);
        echo "</span>
            <span> руб</span>
        </div>
    </div>

    <div class=\"Box col-md-3 col-lg-2\">
        <div class=\"kira-theme4__table1__icon\">
            <span>Ориентировочное время ремонта для ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["brand_model_name"]) || array_key_exists("brand_model_name", $context) ? $context["brand_model_name"] : (function () { throw new RuntimeError('Variable "brand_model_name" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"cena\">
            <span>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["price_service"]) || array_key_exists("price_service", $context) ? $context["price_service"] : (function () { throw new RuntimeError('Variable "price_service" does not exist.', 17, $this->source); })()), "hours", [], "any", false, false, false, 17), "html", null, true);
        echo "</span>
            <span> часа</span>
        </div>
    </div>

</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/price_blocks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  64 => 14,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"service-price row\">
    <div class=\"Box col-md-3 col-lg-2\">
        <div class=\"kira-theme4__table1__icon\">
            <span>Средняя стоимость услуги для {{ brand_model_name }}</span>
        </div>
        <div class=\"cena\">
            <span>{{ price_service.price }}</span>
            <span> руб</span>
        </div>
    </div>

    <div class=\"Box col-md-3 col-lg-2\">
        <div class=\"kira-theme4__table1__icon\">
            <span>Ориентировочное время ремонта для {{ brand_model_name }}</span>
        </div>
        <div class=\"cena\">
            <span>{{ price_service.hours }}</span>
            <span> часа</span>
        </div>
    </div>

</div>", "v1/widget/price_blocks.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\price_blocks.html.twig");
    }
}
