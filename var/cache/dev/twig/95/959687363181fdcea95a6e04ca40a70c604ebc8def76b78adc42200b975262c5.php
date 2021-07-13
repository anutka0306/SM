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

/* v1/blocks/layout/rating.html.twig */
class __TwigTemplate_9da5c0b8cde11e09eb108cc8ca2c33050d0e2529d3d809b083ad14d2e0ac683d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/layout/rating.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/layout/rating.html.twig"));

        // line 1
        echo "<!--Блок РЕЙТИНГИ начало-->
<section class=\"rating\">
    <div class=\"container container2\">
        <h2>Отзывы о нас:</h2>
        <div class=\"row\">
            <div class=\"col-lg-3 col-6\">
                <div class=\"rating__card\">
                    <div class=\"img\">
                        <a target=\"_blank\" href=\"https://zoon.ru/msk/autoservice/avtomasterskaya_detejlingof_na_sevastopolskom_prospekte/reviews/\">
                            <img ";
        // line 10
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/rating/rating-logo-zoon.png"));
        echo " alt=\"Zoon.ru\">
                        </a>
                    </div>
                    <div class=\"text\">
                        <span>рейтинг</span>
                        ";
        // line 15
        echo $this->extensions['App\Twig\StarsExtension']->renderStars(4.5);
        echo "
                        <b>4.2 из 5</b>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-6\">
                <div class=\"rating__card\">
                    <div class=\"img\">
                        <a target=\"_blank\" href=\"https://yandex.ru/maps/org/deteylingof/1119366778/?ll=37.543629%2C55.635450&z=12\">
                            <img ";
        // line 24
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/rating/rating-logo-yandex.png"));
        echo " alt=\"Yandex\">
                        </a>
                    </div>
                    <div class=\"text\">
                        <span>рейтинг</span>
                        ";
        // line 29
        echo $this->extensions['App\Twig\StarsExtension']->renderStars(4.5);
        echo "
                        <b>4.2 из 5</b>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-6\">
                <div class=\"rating__card\">
                    <div class=\"img\">
                        <a target=\"_blank\" href=\"https://goo.gl/maps/4seacphrPAxKeFtq7\">
                            <img ";
        // line 38
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/rating/rating-logo-google.png"));
        echo " alt=\"Google\">
                        </a>
                    </div>
                    <div class=\"text\">
                        <span>рейтинг</span>
                        ";
        // line 43
        echo $this->extensions['App\Twig\StarsExtension']->renderStars(5);
        echo "
                        <b>5 из 5</b>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-6\">
                <div class=\"rating__card\">
                    <div class=\"img\">
                        <a target=\"_blank\" href=\"https://2gis.ru/moscow/firm/70000001020178971?m=37.543546%2C55.635367%2F16\">
                            <img ";
        // line 52
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/rating/rating-logo-2gis.png"));
        echo " alt=\"2 Gis\">
                        </a>
                    </div>
                    <div class=\"text\">
                        <span>рейтинг</span>
                        ";
        // line 57
        echo $this->extensions['App\Twig\StarsExtension']->renderStars(5);
        echo "
                        <b>5 из 5</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Блок РЕЙТИНГИ Конец-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/blocks/layout/rating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 57,  114 => 52,  102 => 43,  94 => 38,  82 => 29,  74 => 24,  62 => 15,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Блок РЕЙТИНГИ начало-->
<section class=\"rating\">
    <div class=\"container container2\">
        <h2>Отзывы о нас:</h2>
        <div class=\"row\">
            <div class=\"col-lg-3 col-6\">
                <div class=\"rating__card\">
                    <div class=\"img\">
                        <a target=\"_blank\" href=\"https://zoon.ru/msk/autoservice/avtomasterskaya_detejlingof_na_sevastopolskom_prospekte/reviews/\">
                            <img {{ lazy_load(asset('img/rating/rating-logo-zoon.png')) }} alt=\"Zoon.ru\">
                        </a>
                    </div>
                    <div class=\"text\">
                        <span>рейтинг</span>
                        {{ stars(4.5) }}
                        <b>4.2 из 5</b>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-6\">
                <div class=\"rating__card\">
                    <div class=\"img\">
                        <a target=\"_blank\" href=\"https://yandex.ru/maps/org/deteylingof/1119366778/?ll=37.543629%2C55.635450&z=12\">
                            <img {{ lazy_load(asset('img/rating/rating-logo-yandex.png')) }} alt=\"Yandex\">
                        </a>
                    </div>
                    <div class=\"text\">
                        <span>рейтинг</span>
                        {{ stars(4.5) }}
                        <b>4.2 из 5</b>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-6\">
                <div class=\"rating__card\">
                    <div class=\"img\">
                        <a target=\"_blank\" href=\"https://goo.gl/maps/4seacphrPAxKeFtq7\">
                            <img {{ lazy_load(asset('img/rating/rating-logo-google.png')) }} alt=\"Google\">
                        </a>
                    </div>
                    <div class=\"text\">
                        <span>рейтинг</span>
                        {{ stars(5) }}
                        <b>5 из 5</b>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-6\">
                <div class=\"rating__card\">
                    <div class=\"img\">
                        <a target=\"_blank\" href=\"https://2gis.ru/moscow/firm/70000001020178971?m=37.543546%2C55.635367%2F16\">
                            <img {{ lazy_load(asset('img/rating/rating-logo-2gis.png')) }} alt=\"2 Gis\">
                        </a>
                    </div>
                    <div class=\"text\">
                        <span>рейтинг</span>
                        {{ stars(5) }}
                        <b>5 из 5</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Блок РЕЙТИНГИ Конец-->", "v1/blocks/layout/rating.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\blocks\\layout\\rating.html.twig");
    }
}
