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

/* v2/blocks/section/auto-models.html.twig */
class __TwigTemplate_07b5c6bb4b097ef947caa658e99689fde4f5a90149ee37138efc1cbd12dfc360 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/auto-models.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/auto-models.html.twig"));

        // line 1
        echo "<div class=\"section-auto\">
    <div class=\"uk-container\">
        <ul class=\"auto-switcher-nav\"
            data-uk-switcher=\"animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium; swiping: false\">
            <li><a href=\"#\">Популярные</a></li>
            <li><a href=\"#\">Седаны/Хэтчбеки</a></li>
            <li><a href=\"#\">Кроссоверы</a></li>
            <li><a href=\"#\">Внедорожники</a></li>
            <li><a href=\"#\">Фургоны</a></li>
        </ul>
        <ul class=\"auto-switcher-content uk-switcher\">
            <li>
                ";
        // line 13
        echo $this->extensions['App\Widget\BrandsModelsExtension']->models_popular($this->env, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 13, $this->source); })()));
        echo "
            </li>
            <li>
                ";
        // line 16
        echo $this->extensions['App\Widget\BrandsModelsExtension']->models_sedan_hatchback($this->env, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 16, $this->source); })()));
        echo "
            </li>
            <li>
                ";
        // line 19
        echo $this->extensions['App\Widget\BrandsModelsExtension']->models_crossover($this->env, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 19, $this->source); })()));
        echo "
            </li>
            <li>
                ";
        // line 22
        echo $this->extensions['App\Widget\BrandsModelsExtension']->models_suv($this->env, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 22, $this->source); })()));
        echo "
            </li>
            <li>
                ";
        // line 25
        echo $this->extensions['App\Widget\BrandsModelsExtension']->models_van($this->env, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 25, $this->source); })()));
        echo "
            </li>
        </ul>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/blocks/section/auto-models.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  75 => 22,  69 => 19,  63 => 16,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-auto\">
    <div class=\"uk-container\">
        <ul class=\"auto-switcher-nav\"
            data-uk-switcher=\"animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium; swiping: false\">
            <li><a href=\"#\">Популярные</a></li>
            <li><a href=\"#\">Седаны/Хэтчбеки</a></li>
            <li><a href=\"#\">Кроссоверы</a></li>
            <li><a href=\"#\">Внедорожники</a></li>
            <li><a href=\"#\">Фургоны</a></li>
        </ul>
        <ul class=\"auto-switcher-content uk-switcher\">
            <li>
                {{ models_popular(brand) }}
            </li>
            <li>
                {{ models_sedan_hatchback(brand) }}
            </li>
            <li>
                {{ models_crossover(brand) }}
            </li>
            <li>
                {{ models_suv(brand) }}
            </li>
            <li>
                {{ models_van(brand) }}
            </li>
        </ul>
    </div>
</div>", "v2/blocks/section/auto-models.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\section\\auto-models.html.twig");
    }
}
