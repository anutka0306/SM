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

/* v2/blocks/section/hero.html.twig */
class __TwigTemplate_21a258009681f193ecd53e2902f6c188bb58143154a0204cd7bb560060d9377c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/hero.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/hero.html.twig"));

        // line 1
        echo "<div class=\"hero\">
    <div class=\"uk-container\">
        <div class=\"hero__box\">
            <div class=\"hero__content\">
                ";
        // line 5
        if ( !twig_test_empty((isset($context["h1"]) || array_key_exists("h1", $context) ? $context["h1"] : (function () { throw new RuntimeError('Variable "h1" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "                    <h1 itemprop=\"name\" class=\"hero__title\">";
            echo (isset($context["h1"]) || array_key_exists("h1", $context) ? $context["h1"] : (function () { throw new RuntimeError('Variable "h1" does not exist.', 6, $this->source); })());
            echo "</h1>
                ";
        }
        // line 8
        echo "                 <a
                        class=\"youtube-btn\"
                        href=\"#modal-media-youtube\" uk-toggle>
                    <img src=\"/assets/images/icons/youtube.png\" alt=\"\"/>
                    <p>
                        <b>видео о нас</b>
                        <span>всего за 180 сек</span>
                    </p>
                </a> 
            </div>
            <div
                    class=\"hero__plus\">
                <div class=\"hero-plus-item\">
                    <div class=\"hero-plus-item__value\"><img src=\"/assets/images/icons/plus.png\" alt=\"\"/></div>
                    <div class=\"hero-plus-item__text\">Пожизненная гарантия<br/> на кузовные работы</div>
                </div>
                <div class=\"hero-plus-item\">
                    <div class=\"hero-plus-item__value\">3</div>
                    <div class=\"hero-plus-item__text\">Удобных автосервиса<br/> в Москве</div>
                </div>
                <div class=\"hero-plus-item\">
                    <div class=\"hero-plus-item__value\"><small>на</small> 40%</div>
                    <div class=\"hero-plus-item__text\">Дешевле, чем у дилера<br/> при том же качестве</div>
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
        return "v2/blocks/section/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"hero\">
    <div class=\"uk-container\">
        <div class=\"hero__box\">
            <div class=\"hero__content\">
                {% if h1 is not empty %}
                    <h1 itemprop=\"name\" class=\"hero__title\">{{ h1|raw }}</h1>
                {% endif %}
                 <a
                        class=\"youtube-btn\"
                        href=\"#modal-media-youtube\" uk-toggle>
                    <img src=\"/assets/images/icons/youtube.png\" alt=\"\"/>
                    <p>
                        <b>видео о нас</b>
                        <span>всего за 180 сек</span>
                    </p>
                </a> 
            </div>
            <div
                    class=\"hero__plus\">
                <div class=\"hero-plus-item\">
                    <div class=\"hero-plus-item__value\"><img src=\"/assets/images/icons/plus.png\" alt=\"\"/></div>
                    <div class=\"hero-plus-item__text\">Пожизненная гарантия<br/> на кузовные работы</div>
                </div>
                <div class=\"hero-plus-item\">
                    <div class=\"hero-plus-item__value\">3</div>
                    <div class=\"hero-plus-item__text\">Удобных автосервиса<br/> в Москве</div>
                </div>
                <div class=\"hero-plus-item\">
                    <div class=\"hero-plus-item__value\"><small>на</small> 40%</div>
                    <div class=\"hero-plus-item__text\">Дешевле, чем у дилера<br/> при том же качестве</div>
                </div>
            </div>
        </div>
    </div>
</div>", "v2/blocks/section/hero.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\section\\hero.html.twig");
    }
}
