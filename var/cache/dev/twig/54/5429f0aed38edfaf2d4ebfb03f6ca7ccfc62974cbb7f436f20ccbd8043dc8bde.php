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

/* v2/blocks/section/auto-brands_old.html.twig */
class __TwigTemplate_e17d8b122b20b56bba70ec5f3227c0840c0caaf120ea86ccd1f4bc9c9d7234ff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/auto-brands_old.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/auto-brands_old.html.twig"));

        // line 1
        echo "<div class=\"section-auto\">
    <div class=\"uk-container\">
        <ul class=\"auto-switcher-nav\" data-uk-switcher=\"animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium; swiping: false\">
            <li><a href=\"#\">Популярные</a></li>
            <li><a href=\"#\">Марки</a></li>
            <li><a href=\"#\">Седаны/Хэтчбеки</a></li>
            <li><a href=\"#\">Кроссоверы</a></li>
            <li><a href=\"#\">Внедорожники</a></li>
        </ul>
        <ul class=\"auto-switcher-content uk-switcher\">
            <li>
                ";
        // line 12
        echo $this->extensions['App\Widget\BrandsModelsExtension']->brands_models_popular($this->env);
        echo "
            </li>
            <li>
                ";
        // line 15
        echo $this->extensions['App\Widget\BrandsModelsExtension']->brands_block($this->env);
        echo "
            </li>
            <li>
                ";
        // line 18
        echo $this->extensions['App\Widget\BrandsModelsExtension']->brands_models_sedan_hatchback($this->env);
        echo "
            </li>
            <li>
                ";
        // line 21
        echo $this->extensions['App\Widget\BrandsModelsExtension']->brands_models_crossover($this->env);
        echo "
            </li>
            <li>
                ";
        // line 24
        echo $this->extensions['App\Widget\BrandsModelsExtension']->brands_models_suv($this->env);
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
        return "v2/blocks/section/auto-brands_old.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  74 => 21,  68 => 18,  62 => 15,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-auto\">
    <div class=\"uk-container\">
        <ul class=\"auto-switcher-nav\" data-uk-switcher=\"animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium; swiping: false\">
            <li><a href=\"#\">Популярные</a></li>
            <li><a href=\"#\">Марки</a></li>
            <li><a href=\"#\">Седаны/Хэтчбеки</a></li>
            <li><a href=\"#\">Кроссоверы</a></li>
            <li><a href=\"#\">Внедорожники</a></li>
        </ul>
        <ul class=\"auto-switcher-content uk-switcher\">
            <li>
                {{ brands_models_popular() }}
            </li>
            <li>
                {{ brands_block() }}
            </li>
            <li>
                {{ brands_models_sedan_hatchback() }}
            </li>
            <li>
                {{ brands_models_crossover() }}
            </li>
            <li>
                {{ brands_models_suv() }}
            </li>
        </ul>
    </div>
</div>", "v2/blocks/section/auto-brands_old.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\section\\auto-brands_old.html.twig");
    }
}
