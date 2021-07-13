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

/* v2/pages/contact/index.html.twig */
class __TwigTemplate_3571a958e999b1d9625b9c71c5fee2d91c5868d81a0d19cf539ee24f7c4bd650 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'seoDescription' => [$this, 'block_seoDescription'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "v2/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/pages/contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/pages/contact/index.html.twig"));

        $this->parent = $this->loadTemplate("v2/base.html.twig", "v2/pages/contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "metaTitle", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_seoDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "seoDescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "seoDescription"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 4, $this->source); })()), "metaDescription", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container container2\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12\">
                <h1 class=\"title\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()), "h1", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"col-md-4 contacts\" style=\"margin-top: 30px;\">
        <div class=\"col1\">

            <div class=\"icon1-4\">
                <span>МЫ РАБОТАЕМ:</span><br>
                <div>с 8:00 до 22:00</div>
            </div>

            <div class=\"icon1-1\">
                <span>Телефон:</span><br>
                <div class=\"fs18\">
                    <a href=\"tel:+74951506921\" class=\"mgo-number-10007 callibri_phone1\">8 (495) 150-69-21</a>
                </div>
            </div>
            <div class=\"icon1-3\">
                <span>Адрес:</span>
                <div>г. Москва, Лобненская улица, 17с6 </div>
            </div>
            <div class=\"icon1-1\">
                <span>Телефон:</span><br>
                <div class=\"fs18\">
                    <a href=\"tel:+74991107863\" class=\"mgo-number-10007 callibri_phone3\">8 (499) 110-78-63</a>
                </div>
            </div>
            <div class=\"icon1-3\">
                <span>Адрес:</span>
                <div>г. Москва, Севастопольский проспект, дом 95 б</div>
            </div>

            <div class=\"icon1-1\">
                <span>Телефон:</span><br>
                <div class=\"fs18\">
                    <a href=\"tel:+74994503132\" class=\"mgo-number-10007 callibri_phone4\">8 (499) 450-31-32</a>
                </div>
            </div>
            <div class=\"icon1-3\">
                <span>Адрес:</span>
                <div>Научный пр-д, 14А строение 6</div>
            </div>


            <div class=\"icon1-1\">
                <span>Телефон:</span><br>
                <div class=\"fs18\">
                    <a href=\"tel:+74992880136\" class=\"mgo-number-10007 callibri_phone2\">8 (499) 288-01-36</a>
                </div>
            </div>
            <div class=\"icon1-3\">
                <span>Адрес:</span>
                <div>ул. Удальцова, 60 стр.7</div>
            </div>

            <div class=\"icon1-1\">
                <span>Номер для Whatsapp</span><br>
                <div class=\"fs18\">
                    <a href=\"tel:89019091505\">8 (901) 909-15-05</a>
                </div>
            </div>
        </div>
            </div>

            <div class=\"col-md-8\">
                    <script type=\"text/javascript\" charset=\"utf-8\" async src=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad971ef27a3f95dbb98cd921271b467aed2c339e0cecbb612714e0f7c0d1c93af&amp;width=100%25&amp;height=700&amp;lang=ru_RU&amp;scroll=true\"></script>

            </div>
            <div class=\"col-12\">
                <div class=\"message message2\">
                    <p>На этой странице указаны все наши контакты, вы всегда имеете возможность связаться с нами любым приемлемым для вас способом. По ним вы можете уточнить информацию о нашей работе или согласовать сроки обслуживания и т.д.</p>

                    <p>Мы всегда рады оказать любую техническую или консультативную помощь в плане ремонта и обслуживания АКПП любых видов и моделей. Консультация наших специалистов и диагностика АКПП для всех наших клиентов БЕСПЛАТНЫЕ.</p>

                    Приезжайте сразу к нам в мастерскую или заранее запишитесь на ТО АКПП по телефону.
                </div>
            </div>
        </div>

       ";
        // line 89
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "v2/pages/contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 89,  117 => 10,  112 => 7,  102 => 6,  81 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'v2/base.html.twig' %}

{% block title %} {{ page.metaTitle }} {% endblock %}
{% block seoDescription %} {{ page.metaDescription}} {% endblock %}

{% block body %}
    <div class=\"container container2\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12\">
                <h1 class=\"title\">{{ page.h1 }}</h1>
            </div>
            <div class=\"col-md-4 contacts\" style=\"margin-top: 30px;\">
        <div class=\"col1\">

            <div class=\"icon1-4\">
                <span>МЫ РАБОТАЕМ:</span><br>
                <div>с 8:00 до 22:00</div>
            </div>

            <div class=\"icon1-1\">
                <span>Телефон:</span><br>
                <div class=\"fs18\">
                    <a href=\"tel:+74951506921\" class=\"mgo-number-10007 callibri_phone1\">8 (495) 150-69-21</a>
                </div>
            </div>
            <div class=\"icon1-3\">
                <span>Адрес:</span>
                <div>г. Москва, Лобненская улица, 17с6 </div>
            </div>
            <div class=\"icon1-1\">
                <span>Телефон:</span><br>
                <div class=\"fs18\">
                    <a href=\"tel:+74991107863\" class=\"mgo-number-10007 callibri_phone3\">8 (499) 110-78-63</a>
                </div>
            </div>
            <div class=\"icon1-3\">
                <span>Адрес:</span>
                <div>г. Москва, Севастопольский проспект, дом 95 б</div>
            </div>

            <div class=\"icon1-1\">
                <span>Телефон:</span><br>
                <div class=\"fs18\">
                    <a href=\"tel:+74994503132\" class=\"mgo-number-10007 callibri_phone4\">8 (499) 450-31-32</a>
                </div>
            </div>
            <div class=\"icon1-3\">
                <span>Адрес:</span>
                <div>Научный пр-д, 14А строение 6</div>
            </div>


            <div class=\"icon1-1\">
                <span>Телефон:</span><br>
                <div class=\"fs18\">
                    <a href=\"tel:+74992880136\" class=\"mgo-number-10007 callibri_phone2\">8 (499) 288-01-36</a>
                </div>
            </div>
            <div class=\"icon1-3\">
                <span>Адрес:</span>
                <div>ул. Удальцова, 60 стр.7</div>
            </div>

            <div class=\"icon1-1\">
                <span>Номер для Whatsapp</span><br>
                <div class=\"fs18\">
                    <a href=\"tel:89019091505\">8 (901) 909-15-05</a>
                </div>
            </div>
        </div>
            </div>

            <div class=\"col-md-8\">
                    <script type=\"text/javascript\" charset=\"utf-8\" async src=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad971ef27a3f95dbb98cd921271b467aed2c339e0cecbb612714e0f7c0d1c93af&amp;width=100%25&amp;height=700&amp;lang=ru_RU&amp;scroll=true\"></script>

            </div>
            <div class=\"col-12\">
                <div class=\"message message2\">
                    <p>На этой странице указаны все наши контакты, вы всегда имеете возможность связаться с нами любым приемлемым для вас способом. По ним вы можете уточнить информацию о нашей работе или согласовать сроки обслуживания и т.д.</p>

                    <p>Мы всегда рады оказать любую техническую или консультативную помощь в плане ремонта и обслуживания АКПП любых видов и моделей. Консультация наших специалистов и диагностика АКПП для всех наших клиентов БЕСПЛАТНЫЕ.</p>

                    Приезжайте сразу к нам в мастерскую или заранее запишитесь на ТО АКПП по телефону.
                </div>
            </div>
        </div>

       {# Here was contact form #}

{% endblock %}", "v2/pages/contact/index.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\pages\\contact\\index.html.twig");
    }
}
