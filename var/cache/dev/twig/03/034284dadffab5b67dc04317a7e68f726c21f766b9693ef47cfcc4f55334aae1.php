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

/* v2/blocks/section/auto-brands.html.twig */
class __TwigTemplate_713f8d7b9a848a2853b906929425551d7529e9cbac11db845b6e86202ef564ea extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/auto-brands.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/auto-brands.html.twig"));

        // line 1
        echo "<div class=\"price-list\">
    <div class=\"container container2\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-2 mb-4\">
                ";
        // line 5
        echo $this->extensions['App\Widget\ServicesExtention']->service_block($this->env);
        echo "
            </div>
            <div class=\"col-sm-12 col-lg-10\">
                ";
        // line 8
        echo $this->extensions['App\Widget\BrandsModelsExtension']->brands_service_block($this->env);
        echo "
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/blocks/section/auto-brands.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"price-list\">
    <div class=\"container container2\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-2 mb-4\">
                {{ service_block() }}
            </div>
            <div class=\"col-sm-12 col-lg-10\">
                {{ brands_service_block() }}
            </div>
        </div>
    </div>
</div>", "v2/blocks/section/auto-brands.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\section\\auto-brands.html.twig");
    }
}
