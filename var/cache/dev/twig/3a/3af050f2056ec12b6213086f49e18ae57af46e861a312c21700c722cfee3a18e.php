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

/* v1/blocks/layout/_header.html.twig */
class __TwigTemplate_c25500140e8fb66aac9cfd5bad4b404341a9a78c8b19685099968664d7181d79 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/layout/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/layout/_header.html.twig"));

        // line 1
        echo "<div class=\"mega_wrapss\">
    <header class=\"header__wrapper\">
        <div class=\"header__wrapper__top\">
            <div class=\"container\">

                <div class=\"header__wrapper__top__mobile\">
                    <p id=\"contacts\">Контакты</p>
                    <p id=\"menu\">Меню</p>
                </div>
            </div>
        </div>
        <div class=\"header__wrapper__bottom clearfix\">
            <div class=\"container\">
                <div class=\"flex-head\">
                    <div class=\"close\">&#215;</div>

                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['App\Twig\SalonExtension']->salons((($context["page"]) ?? (null))));
        foreach ($context['_seq'] as $context["_key"] => $context["salon"]) {
            // line 18
            echo "                        <div class=\"header__wrapper__bottom__contact\">
                            <div class=\"header__wrapper__bottom__contact__name\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</div>
                            <div class=\"header__wrapper__bottom__contact__adress\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "address", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
                            <div class=\"header__wrapper__bottom__contact__phone\">
                                <div class=\"mgo-number-";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "mangoId", [], "any", false, false, false, 22), "html", null, true);
            echo " cursor\"
                                     onclick=\"yaCounter41408589.reachGoal ('";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "yandexTarget", [], "any", false, false, false, 23), "html", null, true);
            echo "');location.href='tel:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "phoneDigits", [], "any", false, false, false, 23), "html", null, true);
            echo "'; return true;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "phone", [], "any", false, false, false, 23), "html", null, true);
            echo "
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
                    <div class=\"header__wrapper__bottom__contact\">
                        <div class=\"button_top_service\">
                            <div class=\"header__wrapper__bottom__contact-popup__content\">
                                <p class=\"popup-trigger\">Запись на сервис</p>
                                <div class=\"top-phone-container cursor\">
                                    <div onclick=\"location.href='tel:88007757961'\">+7 (800) 775-79-61</div><!--+7(800)100-87-53-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"header__wrapper__menu\">
            <div class=\"container\">
                <div class=\"header__wrapper__menu__logo\">
                    <a href=\"/\"><img src=\"/img/logo.svg\" alt=\"\"></a>
                </div>
                <div class=\"header__wrapper__menu__items\">

                    <div class=\"close\">&#215;</div>
                    <div class=\"header__wrapper__menu__items__item\">
                        <a href=\"/\" data-href=\"services\">Главная</a>
                    </div>
                    <div class=\"header__wrapper__menu__items__item\">
                        <a href=\"/uslugi/\" data-href=\"services\">Услуги</a>
                    </div>
                    <div class=\"header__wrapper__menu__items__item\">
                        <a href=\"/price_list/\" data-href=\"services\">Прайс-лист</a>
                    </div>
                    <div class=\"header__wrapper__menu__items__item\">
                        <a href=\"/naschiraboty/\" data-href=\"prices\">Наши работы</a>
                    </div>
                    <div class=\"header__wrapper__menu__items__item\">
                        <a href=\"/about_us/\" data-href=\"guarantee\">О Компании</a>
                    </div>
                    <div class=\"header__wrapper__menu__items__item\">
                        <a href=\"/contact_info/\" data-href=\"map\">Контакты</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class=\"wrapper\">
        <div class=\"main-top\">
            <div class=\"video_wrapper\">
                <div id=\"video_overlay\"></div>
                <video class=\"lazy\" muted=\"\" autoplay=\"\" loop=\"\" preload=\"auto\">
                    <source data-src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("video/header-bg.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
                </video>
            </div>

            <div class=\"container\">
                <div class=\"main-top__text\">
                    <p class=\"main-top__text__subtitle popup-trigger\">пожизненная гарантия</p>
                    ";
        // line 85
        if ((isset($context["h1"]) || array_key_exists("h1", $context) ? $context["h1"] : (function () { throw new RuntimeError('Variable "h1" does not exist.', 85, $this->source); })())) {
            // line 86
            echo "                        <h1 itemprop=\"name\" class=\"main-top__text__title\">";
            echo (isset($context["h1"]) || array_key_exists("h1", $context) ? $context["h1"] : (function () { throw new RuntimeError('Variable "h1" does not exist.', 86, $this->source); })());
            echo "</h1>
                        <div itemprop=\"description\" class=\"d-none\">";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 87, $this->source); })()), "html", null, true);
            echo "</div>
                    ";
        }
        // line 89
        echo "
                    ";
        // line 90
        $context["calculated_price"] = $this->extensions['App\Twig\PriceListHelperExtension']->calc_price((($context["page"]) ?? (null)));
        // line 91
        echo "                    ";
        if ((isset($context["calculated_price"]) || array_key_exists("calculated_price", $context) ? $context["calculated_price"] : (function () { throw new RuntimeError('Variable "calculated_price" does not exist.', 91, $this->source); })())) {
            // line 92
            echo "                        <span class=\"main-top__text__price popup-trigger\">
                            от ";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["calculated_price"]) || array_key_exists("calculated_price", $context) ? $context["calculated_price"] : (function () { throw new RuntimeError('Variable "calculated_price" does not exist.', 93, $this->source); })()), "html", null, true);
            echo "&nbsp;<span>&#8381;</span>
                        </span>
                    ";
        }
        // line 96
        echo "                    <div class=\"main-top__text__button\">
                        <div class=\"main-top__text__button__inner popup-trigger\">
                            Заявка на просчет
                        </div>
                    </div>
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
        return "v1/blocks/layout/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 96,  181 => 93,  178 => 92,  175 => 91,  173 => 90,  170 => 89,  165 => 87,  160 => 86,  158 => 85,  148 => 78,  96 => 28,  81 => 23,  77 => 22,  72 => 20,  68 => 19,  65 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mega_wrapss\">
    <header class=\"header__wrapper\">
        <div class=\"header__wrapper__top\">
            <div class=\"container\">

                <div class=\"header__wrapper__top__mobile\">
                    <p id=\"contacts\">Контакты</p>
                    <p id=\"menu\">Меню</p>
                </div>
            </div>
        </div>
        <div class=\"header__wrapper__bottom clearfix\">
            <div class=\"container\">
                <div class=\"flex-head\">
                    <div class=\"close\">&#215;</div>

                    {% for salon in salons(page ?? null) %}
                        <div class=\"header__wrapper__bottom__contact\">
                            <div class=\"header__wrapper__bottom__contact__name\">{{ salon.name }}</div>
                            <div class=\"header__wrapper__bottom__contact__adress\">{{ salon.address }}</div>
                            <div class=\"header__wrapper__bottom__contact__phone\">
                                <div class=\"mgo-number-{{ salon.mangoId }} cursor\"
                                     onclick=\"yaCounter41408589.reachGoal ('{{ salon.yandexTarget }}');location.href='tel:{{ salon.phoneDigits }}'; return true;\">{{ salon.phone }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}

                    <div class=\"header__wrapper__bottom__contact\">
                        <div class=\"button_top_service\">
                            <div class=\"header__wrapper__bottom__contact-popup__content\">
                                <p class=\"popup-trigger\">Запись на сервис</p>
                                <div class=\"top-phone-container cursor\">
                                    <div onclick=\"location.href='tel:88007757961'\">+7 (800) 775-79-61</div><!--+7(800)100-87-53-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"header__wrapper__menu\">
            <div class=\"container\">
                <div class=\"header__wrapper__menu__logo\">
                    <a href=\"/\"><img src=\"/img/logo.svg\" alt=\"\"></a>
                </div>
                <div class=\"header__wrapper__menu__items\">

                    <div class=\"close\">&#215;</div>
                    <div class=\"header__wrapper__menu__items__item\">
                        <a href=\"/\" data-href=\"services\">Главная</a>
                    </div>
                    <div class=\"header__wrapper__menu__items__item\">
                        <a href=\"/uslugi/\" data-href=\"services\">Услуги</a>
                    </div>
                    <div class=\"header__wrapper__menu__items__item\">
                        <a href=\"/price_list/\" data-href=\"services\">Прайс-лист</a>
                    </div>
                    <div class=\"header__wrapper__menu__items__item\">
                        <a href=\"/naschiraboty/\" data-href=\"prices\">Наши работы</a>
                    </div>
                    <div class=\"header__wrapper__menu__items__item\">
                        <a href=\"/about_us/\" data-href=\"guarantee\">О Компании</a>
                    </div>
                    <div class=\"header__wrapper__menu__items__item\">
                        <a href=\"/contact_info/\" data-href=\"map\">Контакты</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class=\"wrapper\">
        <div class=\"main-top\">
            <div class=\"video_wrapper\">
                <div id=\"video_overlay\"></div>
                <video class=\"lazy\" muted=\"\" autoplay=\"\" loop=\"\" preload=\"auto\">
                    <source data-src=\"{{ asset('video/header-bg.mp4') }}\" type=\"video/mp4\">
                </video>
            </div>

            <div class=\"container\">
                <div class=\"main-top__text\">
                    <p class=\"main-top__text__subtitle popup-trigger\">пожизненная гарантия</p>
                    {% if h1 %}
                        <h1 itemprop=\"name\" class=\"main-top__text__title\">{{ h1|raw }}</h1>
                        <div itemprop=\"description\" class=\"d-none\">{{ description }}</div>
                    {% endif %}

                    {%  set calculated_price = calc_price(page ?? null) %}
                    {%  if calculated_price %}
                        <span class=\"main-top__text__price popup-trigger\">
                            от {{ calculated_price }}&nbsp;<span>&#8381;</span>
                        </span>
                    {% endif %}
                    <div class=\"main-top__text__button\">
                        <div class=\"main-top__text__button__inner popup-trigger\">
                            Заявка на просчет
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "v1/blocks/layout/_header.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\blocks\\layout\\_header.html.twig");
    }
}
