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

/* v1/blocks/layout/_footer.html.twig */
class __TwigTemplate_538036dcff5b048c35d3c9d6d9092b85a3865f879ea025ccd31903ffde6690de extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/layout/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/layout/_footer.html.twig"));

        // line 1
        echo "<div class=\"footer\">
    <div class=\"container-fluid\">
        ";
        // line 39
        echo "        <div class=\"footer__bottom row\">
            <div class=\"copyright col-sm-10 col-12\">© 2003-";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " \"ДетейлингофЪ\".
                <a href=\"/\">Кузовной ремонт</a>,
                <a href=\"/paint/\">Покраска автомобилей</a>,
                <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sitemap_index");
        echo "\">Карта сайта</a>.
            </div>
        </div>
    </div>

</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/blocks/layout/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 43,  50 => 40,  47 => 39,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer\">
    <div class=\"container-fluid\">
        {#<div class=\"footer__top row\">
            <ul class=\"footer__left-col col-sm-6 col-12\">
                <li><a href=\"/contact_info/\">Контакты</a></li>
                <li><a href=\"/price_list/\">Прайс-лист</a></li>
                <li><a href=\"/uslugi/\">Услуги</a></li>
                <li><a href=\"/about_us/\">О компании</a></li>
                <li><a href=\"/naschiraboty/\">Наши работы</a></li>
            </ul>

            <div class=\"footer__right-col col-sm-6 col-12\">
                {% if is_detailing(page ?? null) %}
                    <span class=\"phone_footer mgo-number-10762\"
                          onclick=\"location.href='tel:84994904453'\">8 (499) 490-44-53</span>
                    <small></small>
                    <span class=\"address_footer\">Москва, Севастопольский проспект дом 95Б стр. 2</span>
                {% else %}
                    <span class=\"phone_footer mgo-number-10762\"
                          onclick=\"location.href='tel:+74953747712'\">+7 (495) 374-77-12</span>
                    <small></small>

                    <span class=\"address_footer\">Москва, Севастопольский проспект дом 95Б стр. 2</span>

                    <span class=\"phone_footer\"
                          onclick=\"yaCounter41408589.reachGoal ('click_michurinskii');location.href='tel:+74953748856'; return true;\">+7(495) 374-88-56</span>
                    <span class=\"address_footer\">Москва, ул. Удальцова, 60 стр.7</span>

                    <span class=\"phone_footer mgo-number-10586\"
                          onclick=\"yaCounter41408589.reachGoal ('click_dimitrovka');location.href='tel:+74951507017'; return true;\">+7 (495) 150-70-78</span>
                    <span class=\"address_footer\">Москва, ул. Лобненская д.17 стр.6</span>

                    <span class=\"phone_footer mgo-number-10586\">+7 (800) 775-79-61</span>
                    <span class=\"address_footer\">Звонок бесплатный</span>
                {% endif %}

            </div>
        </div>#}
        <div class=\"footer__bottom row\">
            <div class=\"copyright col-sm-10 col-12\">© 2003-{{ 'now'|date('Y') }} \"ДетейлингофЪ\".
                <a href=\"/\">Кузовной ремонт</a>,
                <a href=\"/paint/\">Покраска автомобилей</a>,
                <a href=\"{{ path('sitemap_index') }}\">Карта сайта</a>.
            </div>
        </div>
    </div>

</div>

", "v1/blocks/layout/_footer.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\blocks\\layout\\_footer.html.twig");
    }
}
