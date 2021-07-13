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

/* v2/blocks/section/services_categories.html.twig */
class __TwigTemplate_2759893bb5cbda910c4e0546b6992dedef991b32d293d8e4078eedf444a25390 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/services_categories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/services_categories.html.twig"));

        // line 1
        echo "<div class=\"uk-container\">
    <section class=\"auto-services\">
        <div class=\"auto-service-item\">
            <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "pathinfo", [], "any", false, false, false, 4), "html", null, true);
        echo "pokraska-kuzova/\" title=\"Покраска кузова\">
                <img ";
        // line 5
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/painting.png"));
        echo " alt=\"Покраска кузова\" title=\"Покраска кузова\">
                <div class=\"auto-services-text\">
                    <div class=\"auto-services-name\">Покраска кузова</div>
                    <div class=\"auto-services-price\">от 1 100 руб.</div>
                </div>
            </a>
        </div>
        <div class=\"auto-service-item\">
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "pathinfo", [], "any", false, false, false, 13), "html", null, true);
        echo "kuzovnoj-remont/\" title=\"Кузовной ремонт\">
                <img ";
        // line 14
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/body-repair.png"));
        echo " alt=\"Кузовной ремонт\" title=\"Кузовной ремонт\">
                <div class=\"auto-services-text\">
                    <div class=\"auto-services-name\">Кузовной ремонт</div>
                    <div class=\"auto-services-price\">от 1 100 руб.</div>
                </div>
            </a>
        </div>
        <div class=\"auto-service-item\">
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "pathinfo", [], "any", false, false, false, 22), "html", null, true);
        echo "ustanovka-avtostekol/\" title=\"Ремонт автостекол\">
                <img ";
        // line 23
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/glasses-repair.png"));
        echo " alt=\"Ремонт автостекол\"
                                                                           title=\"Ремонт автостекол\">
                <div class=\"auto-services-text\">
                    <div class=\"auto-services-name\">Ремонт автостекол</div>
                    <div class=\"auto-services-price\">от 500 руб.</div>
                </div>
            </a>
        </div>
        <div class=\"auto-service-item\">
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "pathinfo", [], "any", false, false, false, 32), "html", null, true);
        echo "detejling/\" title=\"Детейлинг\">
                <img ";
        // line 33
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/detailing.png"));
        echo " alt=\"Детейлинг\" title=\"Детейлинг\">
                <div class=\"auto-services-text\">
                    <div class=\"auto-services-name\">Детейлинг</div>
                    <div class=\"auto-services-price\">от 600 руб.</div>
                </div>
            </a>
        </div>
    </section>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/blocks/section/services_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  94 => 32,  82 => 23,  78 => 22,  67 => 14,  63 => 13,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"uk-container\">
    <section class=\"auto-services\">
        <div class=\"auto-service-item\">
            <a href=\"{{ app.request.pathinfo }}pokraska-kuzova/\" title=\"Покраска кузова\">
                <img {{ lazy_load(asset('img/icon/painting.png')) }} alt=\"Покраска кузова\" title=\"Покраска кузова\">
                <div class=\"auto-services-text\">
                    <div class=\"auto-services-name\">Покраска кузова</div>
                    <div class=\"auto-services-price\">от 1 100 руб.</div>
                </div>
            </a>
        </div>
        <div class=\"auto-service-item\">
            <a href=\"{{ app.request.pathinfo }}kuzovnoj-remont/\" title=\"Кузовной ремонт\">
                <img {{ lazy_load(asset('img/icon/body-repair.png')) }} alt=\"Кузовной ремонт\" title=\"Кузовной ремонт\">
                <div class=\"auto-services-text\">
                    <div class=\"auto-services-name\">Кузовной ремонт</div>
                    <div class=\"auto-services-price\">от 1 100 руб.</div>
                </div>
            </a>
        </div>
        <div class=\"auto-service-item\">
            <a href=\"{{ app.request.pathinfo }}ustanovka-avtostekol/\" title=\"Ремонт автостекол\">
                <img {{ lazy_load(asset('img/icon/glasses-repair.png')) }} alt=\"Ремонт автостекол\"
                                                                           title=\"Ремонт автостекол\">
                <div class=\"auto-services-text\">
                    <div class=\"auto-services-name\">Ремонт автостекол</div>
                    <div class=\"auto-services-price\">от 500 руб.</div>
                </div>
            </a>
        </div>
        <div class=\"auto-service-item\">
            <a href=\"{{ app.request.pathinfo }}detejling/\" title=\"Детейлинг\">
                <img {{ lazy_load(asset('img/icon/detailing.png')) }} alt=\"Детейлинг\" title=\"Детейлинг\">
                <div class=\"auto-services-text\">
                    <div class=\"auto-services-name\">Детейлинг</div>
                    <div class=\"auto-services-price\">от 600 руб.</div>
                </div>
            </a>
        </div>
    </section>
</div>", "v2/blocks/section/services_categories.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\section\\services_categories.html.twig");
    }
}
