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

/* v1/widget/why_us.html.twig */
class __TwigTemplate_3f7f6d6f88f1937dc47a96ab814fdd35ac8baab1588a160825ffbd373ea36ad8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/why_us.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/why_us.html.twig"));

        // line 1
        echo "<div class=\"whyus\">
    <div class=\"video\">
        <video class=\"lazy\" data-src=\"/video/whyus.mp4\" type=\"video/mp4\" autoplay loop preload=\"auto\" muted
               id=\"video\"></video>
        <div class=\"video-bg\"></div>
    </div>
    <div class=\"container\">
        <h2 class=\"whyus__title\">Почему Мы</h2>
        <div class=\"whyus__items\">
            <div class=\"whyus__items__item popup-trigger\">
                <div class=\"whyus__items__item__icon\">
                    <div class=\"green-block\"><img ";
        // line 12
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/whyus/paint.png"));
        echo " alt=\"\">
                    </div>
                </div>
                <p class=\"whyus__items__item__text\">
                    <span>Современная</span><br>покрасочная камера</p>
            </div>
            <div class=\"whyus__items__item popup-trigger\">
                <div class=\"whyus__items__item__icon\">
                    <div class=\"green-block\"><img ";
        // line 20
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/whyus/guarantee.png"));
        echo " alt=\"\">
                    </div>
                </div>
                <p class=\"whyus__items__item__text\">
                    <span>Официальная</span><br>пожизненная гарантия</p>
            </div>
            <div class=\"whyus__items__item popup-trigger\">
                <div class=\"whyus__items__item__icon\">
                    <div class=\"green-block\"><img ";
        // line 28
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/whyus/trust.png"));
        echo " alt=\"\">
                    </div>
                </div>
                <p class=\"whyus__items__item__text\">
                    <span>Честные</span><br>фиксированные цены <br><span
                            class=\"whyus__decrp\">(не навязываем ненужных работ)</span></p>
            </div>
            <div class=\"whyus__items__item popup-trigger\">
                <div class=\"whyus__items__item__icon\">
                    <div class=\"green-block\"><img ";
        // line 37
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/whyus/location.png"));
        echo " alt=\"\">
                    </div>
                </div>
                <p class=\"whyus__items__item__text\">
                    <span>Удобное расположение</span><br>";
        // line 41
        echo (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 41, $this->source); })());
        echo "</p>
            </div>
            <div class=\"whyus__items__item popup-trigger\">
                <div class=\"whyus__items__item__icon\">
                    <div class=\"green-block\"><img ";
        // line 45
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/whyus/opit.png"));
        echo " alt=\"\">
                    </div>
                </div>
                <p class=\"whyus__items__item__text\">";
        // line 48
        echo (isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new RuntimeError('Variable "experience" does not exist.', 48, $this->source); })());
        echo "</p>
            </div>
            <div class=\"whyus__items__item popup-trigger\">
                <div class=\"whyus__items__item__icon\">
                    <div class=\"green-block\"><img ";
        // line 52
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/whyus/apple.png"));
        echo " alt=\"\">
                    </div>
                </div>
                <p class=\"whyus__items__item__text\">
                    <span>100% попадание</span><br>в цвет</p>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/why_us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 52,  110 => 48,  104 => 45,  97 => 41,  90 => 37,  78 => 28,  67 => 20,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"whyus\">
    <div class=\"video\">
        <video class=\"lazy\" data-src=\"/video/whyus.mp4\" type=\"video/mp4\" autoplay loop preload=\"auto\" muted
               id=\"video\"></video>
        <div class=\"video-bg\"></div>
    </div>
    <div class=\"container\">
        <h2 class=\"whyus__title\">Почему Мы</h2>
        <div class=\"whyus__items\">
            <div class=\"whyus__items__item popup-trigger\">
                <div class=\"whyus__items__item__icon\">
                    <div class=\"green-block\"><img {{ lazy_load(asset('img/whyus/paint.png')) }} alt=\"\">
                    </div>
                </div>
                <p class=\"whyus__items__item__text\">
                    <span>Современная</span><br>покрасочная камера</p>
            </div>
            <div class=\"whyus__items__item popup-trigger\">
                <div class=\"whyus__items__item__icon\">
                    <div class=\"green-block\"><img {{ lazy_load(asset('img/whyus/guarantee.png')) }} alt=\"\">
                    </div>
                </div>
                <p class=\"whyus__items__item__text\">
                    <span>Официальная</span><br>пожизненная гарантия</p>
            </div>
            <div class=\"whyus__items__item popup-trigger\">
                <div class=\"whyus__items__item__icon\">
                    <div class=\"green-block\"><img {{ lazy_load(asset('img/whyus/trust.png')) }} alt=\"\">
                    </div>
                </div>
                <p class=\"whyus__items__item__text\">
                    <span>Честные</span><br>фиксированные цены <br><span
                            class=\"whyus__decrp\">(не навязываем ненужных работ)</span></p>
            </div>
            <div class=\"whyus__items__item popup-trigger\">
                <div class=\"whyus__items__item__icon\">
                    <div class=\"green-block\"><img {{ lazy_load(asset('img/whyus/location.png')) }} alt=\"\">
                    </div>
                </div>
                <p class=\"whyus__items__item__text\">
                    <span>Удобное расположение</span><br>{{ location|raw }}</p>
            </div>
            <div class=\"whyus__items__item popup-trigger\">
                <div class=\"whyus__items__item__icon\">
                    <div class=\"green-block\"><img {{ lazy_load(asset('img/whyus/opit.png')) }} alt=\"\">
                    </div>
                </div>
                <p class=\"whyus__items__item__text\">{{ experience|raw }}</p>
            </div>
            <div class=\"whyus__items__item popup-trigger\">
                <div class=\"whyus__items__item__icon\">
                    <div class=\"green-block\"><img {{ lazy_load(asset('img/whyus/apple.png')) }} alt=\"\">
                    </div>
                </div>
                <p class=\"whyus__items__item__text\">
                    <span>100% попадание</span><br>в цвет</p>
            </div>
        </div>
    </div>
</div>", "v1/widget/why_us.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\why_us.html.twig");
    }
}
