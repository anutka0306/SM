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

/* v2/blocks/include/footer.html.twig */
class __TwigTemplate_1a4dfadd0b1b0fe109ec4e760781bc397c6cf1673e1e6c242f7ca23fad292cf7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/include/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/include/footer.html.twig"));

        // line 1
        echo "<footer class=\"page-footer\">
    <div class=\"uk-section-xsmall uk-container\"><span>© 2003-2020 \"ДетейлингофЪ\". <a
                    href=\"/body_works/\">Кузовной ремонт</a>, <a
                    href=\"/paint/\">Покраска автомобилей</a>, <a
                    href=\"/detailing/\">Детейлинг</a>, <a href=\"/sitemap/\">Карта сайта.</a></span>
    </div>
    <div class=\"btn-fixed\">
        <a class=\"calc-btn\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calculator");
        echo "\">
            <img src=\"/assets/images/icons/calc.png\" alt=\"Калькулятор\"/>
            Калькулятор
        </a>
        <a class=\"repairs-btn js-popup-trigger\" href=\"#\">
            <span data-uk-icon=\"cog\"></span>
            Записаться на ремонт
        </a>
    </div>
    <!--
    <div class=\"social-block\">
        <div class=\"social-block__title\"><span>мы в соцсетях</span></div>
        <div class=\"social-block__list\">
            <ul>
                <li><a href=\"http://facebook.com/\" target=\"_blank\"><img src=\"/assets/images/icons/social-1.png\"
                                                                        alt=\"social\"/></a></li>
                <li><a href=\"http://youtube.com/\" target=\"_blank\"><img src=\"/assets/images/icons/social-2.png\"
                                                                       alt=\"social\"/></a></li>
                <li><a href=\"http://vk.com/\" target=\"_blank\"><img src=\"/assets/images/icons/social-3.png\" alt=\"social\"/></a>
                </li>
            </ul>
        </div>
    </div>-->
</footer>
";
        // line 32
        echo $this->extensions['App\Twig\MenuExtension']->offcanvas($this->env, (($context["page"]) ?? (null)));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/blocks/include/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 32,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"page-footer\">
    <div class=\"uk-section-xsmall uk-container\"><span>© 2003-2020 \"ДетейлингофЪ\". <a
                    href=\"/body_works/\">Кузовной ремонт</a>, <a
                    href=\"/paint/\">Покраска автомобилей</a>, <a
                    href=\"/detailing/\">Детейлинг</a>, <a href=\"/sitemap/\">Карта сайта.</a></span>
    </div>
    <div class=\"btn-fixed\">
        <a class=\"calc-btn\" href=\"{{ path('calculator') }}\">
            <img src=\"/assets/images/icons/calc.png\" alt=\"Калькулятор\"/>
            Калькулятор
        </a>
        <a class=\"repairs-btn js-popup-trigger\" href=\"#\">
            <span data-uk-icon=\"cog\"></span>
            Записаться на ремонт
        </a>
    </div>
    <!--
    <div class=\"social-block\">
        <div class=\"social-block__title\"><span>мы в соцсетях</span></div>
        <div class=\"social-block__list\">
            <ul>
                <li><a href=\"http://facebook.com/\" target=\"_blank\"><img src=\"/assets/images/icons/social-1.png\"
                                                                        alt=\"social\"/></a></li>
                <li><a href=\"http://youtube.com/\" target=\"_blank\"><img src=\"/assets/images/icons/social-2.png\"
                                                                       alt=\"social\"/></a></li>
                <li><a href=\"http://vk.com/\" target=\"_blank\"><img src=\"/assets/images/icons/social-3.png\" alt=\"social\"/></a>
                </li>
            </ul>
        </div>
    </div>-->
</footer>
{{ offcanvas(page ?? null) }}", "v2/blocks/include/footer.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\include\\footer.html.twig");
    }
}
