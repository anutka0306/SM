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

/* v2/blocks/include/header.html.twig */
class __TwigTemplate_3690c57429f74ddcf54e5b25595dc6c70fa20c49a7398365a0f736d6efa19df9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/include/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/include/header.html.twig"));

        // line 1
        echo "<header class=\"page-header page-header--fixed\">
    <div class=\"page-header__top\">
        <div class=\"uk-container\">
            <div class=\"page-header__top-inner\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['App\Twig\SalonExtension']->salons((($context["page"]) ?? (null))));
        foreach ($context['_seq'] as $context["_key"] => $context["salon"]) {
            // line 6
            echo "                    ";
            // line 7
            echo "                <div class=\"contact-item\">
                    <a class=\"phone-link mgo-number-";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "mangoId", [], "any", false, false, false, 8), "html", null, true);
            echo "\" href=\"tel:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "phoneDigits", [], "any", false, false, false, 8), "html", null, true);
            echo "\" onclick=\"yaCounter41408589.reachGoal ('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "yandexTarget", [], "any", false, false, false, 8), "html", null, true);
            echo "');location.href='tel:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "phoneDigits", [], "any", false, false, false, 8), "html", null, true);
            echo "'; return true;\">
                        ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "phone", [], "any", false, false, false, 9), "html", null, true);
            echo "
                    </a>

                    <span>/</span>

                    <a class=\"adress-link\" href=\"#map-yandex\">
                        ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "address", [], "any", false, false, false, 15), "html", null, true);
            echo "
                    </a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div>
        </div>
    </div>
    <div class=\"page-header__bottom\">
        <div class=\"uk-container\">
            <div class=\"page-header__bottom-inner\">
                <div class=\"logo\"><a class=\"logo__link\" href=\"/\"><img class=\"logo__img\" src=\"/assets/images/logo.png\" alt=\"DETAILINGOF\"/></a></div>
                ";
        // line 26
        echo $this->extensions['App\Twig\MenuExtension']->mainMenu($this->env);
        echo "
                <div class=\"contacts-block\"><a class=\"phone-numb\" href=\"tel:78007757961\">+7 (800) 775-79-61</a><a
                            class=\"callback-link js-popup-trigger\" href=\"#\">Запись на сервис</a></div>
                <div class=\"btn-mobile-menu\"><a href=\"#mobile-menu\" data-uk-toggle=\"\">☰</a></div>
            </div>
        </div>
    </div>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/blocks/include/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 26,  87 => 19,  77 => 15,  68 => 9,  58 => 8,  55 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"page-header page-header--fixed\">
    <div class=\"page-header__top\">
        <div class=\"uk-container\">
            <div class=\"page-header__top-inner\">
                {% for salon in salons(page ?? null) %}
                    {# @var salon \\App\\Entity\\Salon #}
                <div class=\"contact-item\">
                    <a class=\"phone-link mgo-number-{{ salon.mangoId }}\" href=\"tel:{{ salon.phoneDigits }}\" onclick=\"yaCounter41408589.reachGoal ('{{ salon.yandexTarget }}');location.href='tel:{{ salon.phoneDigits }}'; return true;\">
                        {{ salon.phone }}
                    </a>

                    <span>/</span>

                    <a class=\"adress-link\" href=\"#map-yandex\">
                        {{ salon.address }}
                    </a>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
    <div class=\"page-header__bottom\">
        <div class=\"uk-container\">
            <div class=\"page-header__bottom-inner\">
                <div class=\"logo\"><a class=\"logo__link\" href=\"/\"><img class=\"logo__img\" src=\"/assets/images/logo.png\" alt=\"DETAILINGOF\"/></a></div>
                {{ main_menu() }}
                <div class=\"contacts-block\"><a class=\"phone-numb\" href=\"tel:78007757961\">+7 (800) 775-79-61</a><a
                            class=\"callback-link js-popup-trigger\" href=\"#\">Запись на сервис</a></div>
                <div class=\"btn-mobile-menu\"><a href=\"#mobile-menu\" data-uk-toggle=\"\">☰</a></div>
            </div>
        </div>
    </div>
</header>", "v2/blocks/include/header.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\include\\header.html.twig");
    }
}
