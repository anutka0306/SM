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

/* v2/widget/map.html.twig */
class __TwigTemplate_bbd58fc7d10d6201ae008a437dde33bc860854766291b6dfaa90984a9dead3e7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/map.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/map.html.twig"));

        // line 1
        echo "<div class=\"section-map\">
    <div class=\"map-box\">
        <div class=\"ymap-container lazy\" data-bg=\"url(/img/map/yandex-before-load.jpg)\">
            <div class=\"loader loader-default\"></div>
            <div id=\"map-yandex\"></div>
        </div>
    </div>
    <div class=\"map-content\">
        <div class=\"uk-container\">
            <div class=\"uk-position-relative\">
                <div tabindex=\"-1\" data-uk-slider=\"\">
                    <ul class=\"uk-slider-items uk-grid uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-2@s\">
                        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salons"]) || array_key_exists("salons", $context) ? $context["salons"] : (function () { throw new RuntimeError('Variable "salons" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["salon"]) {
            // line 14
            echo "                        <li>
                            <div class=\"contacts-item\">
                                <div class=\"contacts-item__title\">
                                    ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "alias", [], "any", false, false, false, 17), "html", null, true);
            echo "
                                </div>
                                <div class=\"contacts-item__info\">
                                    <div class=\"contacts-item__adress\">
                                        <span>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "address", [], "any", false, false, false, 21), "html", null, true);
            echo "</span>
                                    </div>
                                    <div class=\"contacts-item__phone\">
                                        <a href=\"tel:";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "phoneDigits", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
                                            ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "phone", [], "any", false, false, false, 25), "html", null, true);
            echo "
                                        </a>
                                    </div>
                                    <div class=\"contacts-item__time-work\">
                                        <span>
                                            Ежедневно: ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "workingHoursFrom", [], "any", false, false, false, 30), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "workingHoursTo", [], "any", false, false, false, 30), "html", null, true);
            echo "<br>
                                            Без выходных
                                        </span>
                                    </div>
                                    <div class=\"contacts-item__location\">
                                        <a class=\"js-popup-trigger\">
                                            <span class=\"text\">Записаться<br> в сервис</span><span
                                                    data-uk-icon=\"location\"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </ul>
                    <ul class=\"uk-slider-nav uk-dotnav uk-flex-center uk-margin\"></ul>
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
        return "v2/widget/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  91 => 30,  83 => 25,  79 => 24,  73 => 21,  66 => 17,  61 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-map\">
    <div class=\"map-box\">
        <div class=\"ymap-container lazy\" data-bg=\"url(/img/map/yandex-before-load.jpg)\">
            <div class=\"loader loader-default\"></div>
            <div id=\"map-yandex\"></div>
        </div>
    </div>
    <div class=\"map-content\">
        <div class=\"uk-container\">
            <div class=\"uk-position-relative\">
                <div tabindex=\"-1\" data-uk-slider=\"\">
                    <ul class=\"uk-slider-items uk-grid uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-2@s\">
                        {% for salon in salons %}
                        <li>
                            <div class=\"contacts-item\">
                                <div class=\"contacts-item__title\">
                                    {{ salon.alias }}
                                </div>
                                <div class=\"contacts-item__info\">
                                    <div class=\"contacts-item__adress\">
                                        <span>{{ salon.address }}</span>
                                    </div>
                                    <div class=\"contacts-item__phone\">
                                        <a href=\"tel:{{ salon.phoneDigits }}\">
                                            {{ salon.phone }}
                                        </a>
                                    </div>
                                    <div class=\"contacts-item__time-work\">
                                        <span>
                                            Ежедневно: {{ salon.workingHoursFrom }} - {{ salon.workingHoursTo }}<br>
                                            Без выходных
                                        </span>
                                    </div>
                                    <div class=\"contacts-item__location\">
                                        <a class=\"js-popup-trigger\">
                                            <span class=\"text\">Записаться<br> в сервис</span><span
                                                    data-uk-icon=\"location\"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        {% endfor %}
                    </ul>
                    <ul class=\"uk-slider-nav uk-dotnav uk-flex-center uk-margin\"></ul>
                </div>
            </div>
        </div>
    </div>
</div>", "v2/widget/map.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\widget\\map.html.twig");
    }
}
