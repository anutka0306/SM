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

/* v1/widget/map.html.twig */
class __TwigTemplate_4dbc23151ff7e568c1e7e39ce155f3609d59546ccc86e48a58012790a71b1826 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/map.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/map.html.twig"));

        // line 1
        echo "<script>
\tlet is_detejling = ";
        // line 2
        echo (((isset($context["isDetailing"]) || array_key_exists("isDetailing", $context) ? $context["isDetailing"] : (function () { throw new RuntimeError('Variable "isDetailing" does not exist.', 2, $this->source); })())) ? ("true") : ("false"));
        echo ";
</script>
<div class=\"footer-blocks\">
    <div class=\"footer-contacts container\" id=\"map\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salons"]) || array_key_exists("salons", $context) ? $context["salons"] : (function () { throw new RuntimeError('Variable "salons" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["salon"]) {
            // line 7
            echo "            <div class=\"footer-contacts__contact\">
                <div class=\"footer-contacts__contact__wrap\">
                    <div class=\"footer-contacts__contact__name\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "alias", [], "any", false, false, false, 9), "html", null, true);
            echo "</div>
                    <div class=\"footer-contacts__contact__adress\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "address", [], "any", false, false, false, 10), "html", null, true);
            echo "</div>
                    <div class=\"footer-contacts__contact__phone\">
                        <a href=\"tel:";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "phoneDigits", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
                            <div class=\"m-call-tracking-widget\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "phone", [], "any", false, false, false, 13), "html", null, true);
            echo "</div>
                        </a>
                    </div>
                    <div class=\"footer-contacts__contact__time\">
                        Ежедневно: ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "workingHoursFrom", [], "any", false, false, false, 17), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "workingHoursTo", [], "any", false, false, false, 17), "html", null, true);
            echo " <br>Без выходных
                    </div>
                </div>
                <div class=\"footer-contacts__contact__adresses\">
                    <div class=\"footer-contacts__contact__button mobile_hide\">
                        Построить маршрут
                    </div>

                    <div class=\"footer-contacts__contact__button mobile_show\">
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "yandexNavigatorLink", [], "any", false, false, false, 26), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "alias", [], "any", false, false, false, 26), "html", null, true);
            echo "\" class=\"marsh white-link\"
                           data-map=\"яндекс навигатор\" target=\"_blank\">Яндекс Навигатор</a>
                    </div>

                    <div class=\"footer-contacts__contact__button__content mobile_hide\">
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "yandexMapLink", [], "any", false, false, false, 31), "html", null, true);
            echo "\" class=\"marsh\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "alias", [], "any", false, false, false, 31), "html", null, true);
            echo "\"
                           data-map=\"яндекс карты\" target=\"_blank\">Яндекс карты</a>

                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "googleMapLink", [], "any", false, false, false, 34), "html", null, true);
            echo "\" class=\"marsh\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "alias", [], "any", false, false, false, 34), "html", null, true);
            echo "\"
                           data-map=\"гугл карты\" target=\"_blank\">Google Maps</a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>

    <div class=\"ymap-container lazy\" data-bg=\"url(/img/map/yandex-before-load.jpg)\">
        <div class=\"loader loader-default\"></div>
        <div id=\"map-yandex\"></div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 40,  113 => 34,  105 => 31,  95 => 26,  81 => 17,  74 => 13,  70 => 12,  65 => 10,  61 => 9,  57 => 7,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
\tlet is_detejling = {{ isDetailing?'true':'false' }};
</script>
<div class=\"footer-blocks\">
    <div class=\"footer-contacts container\" id=\"map\">
        {% for salon in salons %}
            <div class=\"footer-contacts__contact\">
                <div class=\"footer-contacts__contact__wrap\">
                    <div class=\"footer-contacts__contact__name\">{{ salon.alias }}</div>
                    <div class=\"footer-contacts__contact__adress\">{{ salon.address }}</div>
                    <div class=\"footer-contacts__contact__phone\">
                        <a href=\"tel:{{ salon.phoneDigits }}\">
                            <div class=\"m-call-tracking-widget\">{{ salon.phone }}</div>
                        </a>
                    </div>
                    <div class=\"footer-contacts__contact__time\">
                        Ежедневно: {{ salon.workingHoursFrom }} - {{ salon.workingHoursTo }} <br>Без выходных
                    </div>
                </div>
                <div class=\"footer-contacts__contact__adresses\">
                    <div class=\"footer-contacts__contact__button mobile_hide\">
                        Построить маршрут
                    </div>

                    <div class=\"footer-contacts__contact__button mobile_show\">
                        <a href=\"{{ salon.yandexNavigatorLink }}\" data-name=\"{{ salon.alias }}\" class=\"marsh white-link\"
                           data-map=\"яндекс навигатор\" target=\"_blank\">Яндекс Навигатор</a>
                    </div>

                    <div class=\"footer-contacts__contact__button__content mobile_hide\">
                        <a href=\"{{ salon.yandexMapLink }}\" class=\"marsh\" data-name=\"{{ salon.alias }}\"
                           data-map=\"яндекс карты\" target=\"_blank\">Яндекс карты</a>

                        <a href=\"{{ salon.googleMapLink }}\" class=\"marsh\" data-name=\"{{ salon.alias }}\"
                           data-map=\"гугл карты\" target=\"_blank\">Google Maps</a>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>

    <div class=\"ymap-container lazy\" data-bg=\"url(/img/map/yandex-before-load.jpg)\">
        <div class=\"loader loader-default\"></div>
        <div id=\"map-yandex\"></div>
    </div>
</div>", "v1/widget/map.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\map.html.twig");
    }
}
