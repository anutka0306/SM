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

/* v1/blocks/layout/_advantages.html.twig */
class __TwigTemplate_43d3b2412b9f33c9dca6b85d59c85d6716242f468d62b770fc1775e9798abf8f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/layout/_advantages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/layout/_advantages.html.twig"));

        // line 1
        echo "<div class=\"shadow-btm\">
    <div class=\"advantages\">

        <div class=\"advantages__item popup-trigger\">
            <div class=\"advantages__item__part\">
                <div class=\"green-block\"><img ";
        // line 6
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/group.png"));
        echo " alt=\"\"></div>
            </div>
            <div class=\"advantages__item__part\">
                <div class=\"advantages__item__part__title\">
                    8 клиентов из 10
                </div>
                <div class=\"advantages__item__part__text\">
                    Приходят в наш сервис по рекомендации других людей
                </div>
            </div>
        </div>
        <div class=\"advantages__item popup-trigger\">
            <div class=\"advantages__item__part\">
                <div class=\"green-block\"><img ";
        // line 19
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pig.png"));
        echo " alt=\"\"></div>
            </div>
            <div class=\"advantages__item__part\">
                <div class=\"advantages__item__part__title\">
                    на 30% дешевле
                </div>
                <div class=\"advantages__item__part__text\">
                    Стоимость работ, чем у официального дилера";
        // line 26
        ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 26, $this->source); })()), "brandName", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, (" " . twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 26, $this->source); })()), "brandName", [], "any", false, false, false, 26)), "html", null, true))) : (print ("")));
        echo ", при том же качестве
                </div>
            </div>
        </div>
        <div class=\"advantages__item popup-trigger\">
            <div class=\"advantages__item__part\">
                <div class=\"green-block\"><img ";
        // line 32
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/thumbsup.png"));
        echo "  alt=\"\">
                </div>
            </div>
            <div class=\"advantages__item__part\">
                <div class=\"advantages__item__part__title\">
                    Более 500 000
                </div>
                <div class=\"advantages__item__part__text\">
                    довольных клиентов за время работы нашего автосервиса
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/blocks/layout/_advantages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  76 => 26,  66 => 19,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"shadow-btm\">
    <div class=\"advantages\">

        <div class=\"advantages__item popup-trigger\">
            <div class=\"advantages__item__part\">
                <div class=\"green-block\"><img {{ lazy_load(asset('img/group.png')) }} alt=\"\"></div>
            </div>
            <div class=\"advantages__item__part\">
                <div class=\"advantages__item__part__title\">
                    8 клиентов из 10
                </div>
                <div class=\"advantages__item__part__text\">
                    Приходят в наш сервис по рекомендации других людей
                </div>
            </div>
        </div>
        <div class=\"advantages__item popup-trigger\">
            <div class=\"advantages__item__part\">
                <div class=\"green-block\"><img {{ lazy_load(asset('img/pig.png')) }} alt=\"\"></div>
            </div>
            <div class=\"advantages__item__part\">
                <div class=\"advantages__item__part__title\">
                    на 30% дешевле
                </div>
                <div class=\"advantages__item__part__text\">
                    Стоимость работ, чем у официального дилера{{ page.brandName ? ' '~page.brandName }}, при том же качестве
                </div>
            </div>
        </div>
        <div class=\"advantages__item popup-trigger\">
            <div class=\"advantages__item__part\">
                <div class=\"green-block\"><img {{ lazy_load(asset('img/thumbsup.png')) }}  alt=\"\">
                </div>
            </div>
            <div class=\"advantages__item__part\">
                <div class=\"advantages__item__part__title\">
                    Более 500 000
                </div>
                <div class=\"advantages__item__part__text\">
                    довольных клиентов за время работы нашего автосервиса
                </div>
            </div>
        </div>
    </div>
</div>", "v1/blocks/layout/_advantages.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\blocks\\layout\\_advantages.html.twig");
    }
}
