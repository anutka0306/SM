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

/* v2/blocks/section/works.html.twig */
class __TwigTemplate_709f56404587675a428dfea29012898e0c9ba787942d71711f084b488f2b4d95 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/works.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/works.html.twig"));

        // line 1
        echo "<div class=\"section-works\">
    <div class=\"uk-section-large uk-container\">
        <div class=\"uk-position-relative\">
            <h3 class=\"section-title\"><span>Наши работы</span></h3>
            <div class=\"works-block\">
                <div class=\"works-block__before\"><img data-src=\"/assets/images/before.jpg\" alt=\"до\" uk-img /><span>до</span></div>
                <div class=\"works-block__after\"><img data-src=\"/assets/images/after.jpg\" alt=\"после\" uk-img /><span>после</span></div>
            </div>
            <div class=\"works-slider uk-margin-top uk-position-relative\">
                <div tabindex=\"-1\" data-uk-slider=\"\">
                    <ul class=\"uk-slider-items uk-grid uk-grid-small uk-child-width-1-5@l uk-child-width-1-3@m uk-child-width-1-2\">
                        <li><img class=\"uk-width-1-1\" ";
        // line 12
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/work-thumb.jpg"));
        echo " alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" ";
        // line 13
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/work-thumb.jpg"));
        echo " alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" ";
        // line 14
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/work-thumb.jpg"));
        echo " alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" ";
        // line 15
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/work-thumb.jpg"));
        echo " alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" ";
        // line 16
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/work-thumb.jpg"));
        echo " alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" ";
        // line 17
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/work-thumb.jpg"));
        echo " alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" ";
        // line 18
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/work-thumb.jpg"));
        echo " alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" ";
        // line 19
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/work-thumb.jpg"));
        echo " alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" ";
        // line 20
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/work-thumb.jpg"));
        echo " alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" ";
        // line 21
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/work-thumb.jpg"));
        echo " alt=\"work-thumb\" /></li>
                    </ul><a class=\"uk-position-center-left\" href=\"#\" data-uk-slidenav-previous=\"\" data-uk-slider-item=\"previous\"></a><a class=\"uk-position-center-right\" href=\"#\" data-uk-slidenav-next=\"\" data-uk-slider-item=\"next\"></a></div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/blocks/section/works.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-works\">
    <div class=\"uk-section-large uk-container\">
        <div class=\"uk-position-relative\">
            <h3 class=\"section-title\"><span>Наши работы</span></h3>
            <div class=\"works-block\">
                <div class=\"works-block__before\"><img data-src=\"/assets/images/before.jpg\" alt=\"до\" uk-img /><span>до</span></div>
                <div class=\"works-block__after\"><img data-src=\"/assets/images/after.jpg\" alt=\"после\" uk-img /><span>после</span></div>
            </div>
            <div class=\"works-slider uk-margin-top uk-position-relative\">
                <div tabindex=\"-1\" data-uk-slider=\"\">
                    <ul class=\"uk-slider-items uk-grid uk-grid-small uk-child-width-1-5@l uk-child-width-1-3@m uk-child-width-1-2\">
                        <li><img class=\"uk-width-1-1\" {{ lazy_load(asset('/assets/images/work-thumb.jpg')) }} alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" {{ lazy_load(asset('/assets/images/work-thumb.jpg')) }} alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" {{ lazy_load(asset('/assets/images/work-thumb.jpg')) }} alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" {{ lazy_load(asset('/assets/images/work-thumb.jpg')) }} alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" {{ lazy_load(asset('/assets/images/work-thumb.jpg')) }} alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" {{ lazy_load(asset('/assets/images/work-thumb.jpg')) }} alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" {{ lazy_load(asset('/assets/images/work-thumb.jpg')) }} alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" {{ lazy_load(asset('/assets/images/work-thumb.jpg')) }} alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" {{ lazy_load(asset('/assets/images/work-thumb.jpg')) }} alt=\"work-thumb\" /></li>
                        <li><img class=\"uk-width-1-1\" {{ lazy_load(asset('/assets/images/work-thumb.jpg')) }} alt=\"work-thumb\" /></li>
                    </ul><a class=\"uk-position-center-left\" href=\"#\" data-uk-slidenav-previous=\"\" data-uk-slider-item=\"previous\"></a><a class=\"uk-position-center-right\" href=\"#\" data-uk-slidenav-next=\"\" data-uk-slider-item=\"next\"></a></div>
            </div>
        </div>
    </div>
</div>", "v2/blocks/section/works.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\section\\works.html.twig");
    }
}
