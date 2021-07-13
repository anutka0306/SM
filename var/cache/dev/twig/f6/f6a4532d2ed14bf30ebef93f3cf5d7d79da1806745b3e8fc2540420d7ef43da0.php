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

/* elements/_cartblock.html.twig */
class __TwigTemplate_c3660bfdd64f3f3ba3c9650bc05275c26a6ec0c408b730e9221be4cd528de22d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_cartblock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_cartblock.html.twig"));

        // line 1
        echo "<div class=\"block_cartablock\">
    <div class=\"container container2\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-xl-3\">
                <div class=\"cartablock-card\">
                    <div class=\"cartablock-card-zag\">Севастопольский</div>
                    <div class=\"cartablock-card-addr\">Севастопольский пр. 95 б, стр 3</div>
                    <div class=\"cartablock-card-tel\"><a href=\"tel:74994441437\">+7 (499) 444-14-37</a></div>
                    <div class=\"cartablock-card-vrrab\">Ежедневно: 08:00 - 22:00</div>
                    <button class=\"cartablock-card-zopen\" type=\"button\" data-title=\"ОСТАВИТЬ ЗАЯВКУ\" data-toggle=\"modal\" data-target=\"#callback_popup\">Оставить заявку</button>
                    <div class=\"cartablock-card-btnwrap\">
                        <div class=\"cartablock-card-btnwrap-btn\">Построить маршрут</div>
                        <div class=\"cartablock-card-btnwrap-btn-url\">
                            <a href=\"https://yandex.ru/maps/213/moscow/house/sevastopolskiy_prospekt_95b/Z04YcwNjTEIPQFtvfXpydH9nYQ==/?ll=37.543578%2C55.635345&amp;z=15.88\" target=\"_blank\" rel=\"external\">Веб-версия Яндекс Карт</a>
                            <a href=\"https://www.google.ru/maps/dir/55.6309203,37.5530772/%D0%A1%D0%B5%D0%B2%D0%B0%D1%81%D1%82%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C%D1%81%D0%BA%D0%B8%D0%B9+%D0%BF%D1%80.,+95%D0%91,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F,+117342/@55.6353414,37.534924,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x414ab2b520b9d46b:0x2a38af8b6d18744d!2m2!1d37.5436788!2d55.6353296\" target=\"_blank\" rel=\"external\">Google Maps</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-xl-3\">
                <div class=\"cartablock-card\">
                    <div class=\"cartablock-card-zag\">Калужская</div>
                    <div class=\"cartablock-card-addr\">Научный проезд д.14а с.7</div>
                    <div class=\"cartablock-card-tel\"><a href=\"tel:74954773396\">+7 (495) 477-33-96</a></div>
                    <div class=\"cartablock-card-vrrab\">Ежедневно: 08:00 - 22:00</div>
                    <button class=\"cartablock-card-zopen\" data-title=\"ОСТАВИТЬ ЗАЯВКУ\" data-toggle=\"modal\" data-target=\"#callback_popup\">Оставить заявку</button>
                    <div class=\"cartablock-card-btnwrap\">
                        <div class=\"cartablock-card-btnwrap-btn\">Построить маршрут</div>
                        <div class=\"cartablock-card-btnwrap-btn-url\">
                            <a href=\"https://yandex.ru/maps/213/moscow/house/nauchny_proyezd_14as5/Z04YcwJjSUEBQFtvfXp0dHthYw==/?ll=37.553047%2C55.655727&amp;z=16.44\" target=\"_blank\" rel=\"external\">Веб-версия Яндекс Карт</a>
                            <a href=\"https://www.google.ru/maps/dir//%D0%9D%D0%B0%D1%83%D1%87%D0%BD%D1%8B%D0%B9+%D0%BF%D1%80-%D0%B4,+14%D0%90+%D1%81%D1%82%D1%80%D0%BE%D0%B5%D0%BD%D0%B8%D0%B5+5,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+117246/@55.6557179,37.5486899,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x46b54d28c6a009d7:0x30772bd7284ec273!2m2!1d37.553078!2d55.655718\" target=\"_blank\" rel=\"external\">Google Maps</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-xl-3\">
                <div class=\"cartablock-card\">
                    <div class=\"cartablock-card-zag\">Дмитровка</div>
                    <div class=\"cartablock-card-addr\">Лобненская д.17 стр.5</div>
                    <div class=\"cartablock-card-tel\"><a href=\"tel:74994507383\">+7 (499) 450-73-83</a></div>
                    <div class=\"cartablock-card-vrrab\">Ежедневно: 08:00 - 22:00</div>
                    <button class=\"cartablock-card-zopen\" data-title=\"ОСТАВИТЬ ЗАЯВКУ\" data-toggle=\"modal\" data-target=\"#callback_popup\">Оставить заявку</button>
                    <div class=\"cartablock-card-btnwrap\">
                        <div class=\"cartablock-card-btnwrap-btn\">Построить маршрут</div>
                        <div class=\"cartablock-card-btnwrap-btn-url\">
                            <a href=\"https://yandex.ru/maps/213/moscow/?ll=37.522588%2C55.891251&amp;mode=routes&amp;rtext=~55.892138%2C37.524166&amp;rtt=auto&amp;sll=37.726797%2C55.657246&amp;sspn=0.889206%2C0.284548&amp;text=%D1%83%D0%BB.%20%D0%9B%D0%BE%D0%B1%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%2C%2017%20%D1%81%D1%82%D1%80.1&amp;toaddress=%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%D1%83%D0%BB.%D0%9B%D0%BE%D0%B1%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%2C%2017%2C%D1%81%D1%82%D1%80.1&amp;z=15\" target=\"_blank\" rel=\"external\">Веб-версия Яндекс Карт</a>
                            <a href=\"https://www.google.ru/maps/dir//%D1%83%D0%BB.+%D0%9B%D0%BE%D0%B1%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F,+17,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+127644/@55.8918798,37.5189218,15.75z/data=!4m8!4m7!1m0!1m5!1m1!1s0x46b539cffbd294dd:0x35fa4f70919e3ab5!2m2!1d37.5241599!2d55.892144\" target=\"_blank\" rel=\"external\">Google Maps</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-xl-3\">
                <div class=\"cartablock-card\">
                    <div class=\"cartablock-card-zag\">Удальцова</div>
                    <div class=\"cartablock-card-addr\">Удальцова, д.60 стр.7</div>
                    <div class=\"cartablock-card-tel\"><a href=\"tel:74992880136\">+7 (499) 288-01-36</a></div>
                    <div class=\"cartablock-card-vrrab\">Ежедневно: 08:00 - 22:00</div>
                    <button class=\"cartablock-card-zopen\" data-title=\"ОСТАВИТЬ ЗАЯВКУ\" data-toggle=\"modal\" data-target=\"#callback_popup\">Оставить заявку</button>
                    <div class=\"cartablock-card-btnwrap\">
                        <div class=\"cartablock-card-btnwrap-btn\">Построить маршрут</div>
                        <div class=\"cartablock-card-btnwrap-btn-url\">
                            <a href=\"https://yandex.ru/maps/213/moscow/?ll=37.522588%2C55.891251&amp;mode=routes&amp;rtext=~55.892138%2C37.524166&amp;rtt=auto&amp;sll=37.726797%2C55.657246&amp;sspn=0.889206%2C0.284548&amp;text=%D1%83%D0%BB.%20%D0%9B%D0%BE%D0%B1%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%2C%2017%20%D1%81%D1%82%D1%80.1&amp;toaddress=%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%D1%83%D0%BB.%D0%9B%D0%BE%D0%B1%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%2C%2017%2C%D1%81%D1%82%D1%80.1&amp;z=15\" target=\"_blank\" rel=\"external\">Веб-версия Яндекс Карт</a>
                            <a href=\"https://www.google.ru/maps/dir//%D1%83%D0%BB.+%D0%9B%D0%BE%D0%B1%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F,+17,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+127644/@55.8918798,37.5189218,15.75z/data=!4m8!4m7!1m0!1m5!1m1!1s0x46b539cffbd294dd:0x35fa4f70919e3ab5!2m2!1d37.5241599!2d55.892144\" target=\"_blank\" rel=\"external\">Google Maps</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"cartablock-carta\">
            <div class=\"ymap-container\">
                <div class=\"loader loader-default\"></div>
                <div id=\"map-yandex\"></div>
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
        return "elements/_cartblock.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"block_cartablock\">
    <div class=\"container container2\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-xl-3\">
                <div class=\"cartablock-card\">
                    <div class=\"cartablock-card-zag\">Севастопольский</div>
                    <div class=\"cartablock-card-addr\">Севастопольский пр. 95 б, стр 3</div>
                    <div class=\"cartablock-card-tel\"><a href=\"tel:74994441437\">+7 (499) 444-14-37</a></div>
                    <div class=\"cartablock-card-vrrab\">Ежедневно: 08:00 - 22:00</div>
                    <button class=\"cartablock-card-zopen\" type=\"button\" data-title=\"ОСТАВИТЬ ЗАЯВКУ\" data-toggle=\"modal\" data-target=\"#callback_popup\">Оставить заявку</button>
                    <div class=\"cartablock-card-btnwrap\">
                        <div class=\"cartablock-card-btnwrap-btn\">Построить маршрут</div>
                        <div class=\"cartablock-card-btnwrap-btn-url\">
                            <a href=\"https://yandex.ru/maps/213/moscow/house/sevastopolskiy_prospekt_95b/Z04YcwNjTEIPQFtvfXpydH9nYQ==/?ll=37.543578%2C55.635345&amp;z=15.88\" target=\"_blank\" rel=\"external\">Веб-версия Яндекс Карт</a>
                            <a href=\"https://www.google.ru/maps/dir/55.6309203,37.5530772/%D0%A1%D0%B5%D0%B2%D0%B0%D1%81%D1%82%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C%D1%81%D0%BA%D0%B8%D0%B9+%D0%BF%D1%80.,+95%D0%91,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F,+117342/@55.6353414,37.534924,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x414ab2b520b9d46b:0x2a38af8b6d18744d!2m2!1d37.5436788!2d55.6353296\" target=\"_blank\" rel=\"external\">Google Maps</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-xl-3\">
                <div class=\"cartablock-card\">
                    <div class=\"cartablock-card-zag\">Калужская</div>
                    <div class=\"cartablock-card-addr\">Научный проезд д.14а с.7</div>
                    <div class=\"cartablock-card-tel\"><a href=\"tel:74954773396\">+7 (495) 477-33-96</a></div>
                    <div class=\"cartablock-card-vrrab\">Ежедневно: 08:00 - 22:00</div>
                    <button class=\"cartablock-card-zopen\" data-title=\"ОСТАВИТЬ ЗАЯВКУ\" data-toggle=\"modal\" data-target=\"#callback_popup\">Оставить заявку</button>
                    <div class=\"cartablock-card-btnwrap\">
                        <div class=\"cartablock-card-btnwrap-btn\">Построить маршрут</div>
                        <div class=\"cartablock-card-btnwrap-btn-url\">
                            <a href=\"https://yandex.ru/maps/213/moscow/house/nauchny_proyezd_14as5/Z04YcwJjSUEBQFtvfXp0dHthYw==/?ll=37.553047%2C55.655727&amp;z=16.44\" target=\"_blank\" rel=\"external\">Веб-версия Яндекс Карт</a>
                            <a href=\"https://www.google.ru/maps/dir//%D0%9D%D0%B0%D1%83%D1%87%D0%BD%D1%8B%D0%B9+%D0%BF%D1%80-%D0%B4,+14%D0%90+%D1%81%D1%82%D1%80%D0%BE%D0%B5%D0%BD%D0%B8%D0%B5+5,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+117246/@55.6557179,37.5486899,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x46b54d28c6a009d7:0x30772bd7284ec273!2m2!1d37.553078!2d55.655718\" target=\"_blank\" rel=\"external\">Google Maps</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-xl-3\">
                <div class=\"cartablock-card\">
                    <div class=\"cartablock-card-zag\">Дмитровка</div>
                    <div class=\"cartablock-card-addr\">Лобненская д.17 стр.5</div>
                    <div class=\"cartablock-card-tel\"><a href=\"tel:74994507383\">+7 (499) 450-73-83</a></div>
                    <div class=\"cartablock-card-vrrab\">Ежедневно: 08:00 - 22:00</div>
                    <button class=\"cartablock-card-zopen\" data-title=\"ОСТАВИТЬ ЗАЯВКУ\" data-toggle=\"modal\" data-target=\"#callback_popup\">Оставить заявку</button>
                    <div class=\"cartablock-card-btnwrap\">
                        <div class=\"cartablock-card-btnwrap-btn\">Построить маршрут</div>
                        <div class=\"cartablock-card-btnwrap-btn-url\">
                            <a href=\"https://yandex.ru/maps/213/moscow/?ll=37.522588%2C55.891251&amp;mode=routes&amp;rtext=~55.892138%2C37.524166&amp;rtt=auto&amp;sll=37.726797%2C55.657246&amp;sspn=0.889206%2C0.284548&amp;text=%D1%83%D0%BB.%20%D0%9B%D0%BE%D0%B1%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%2C%2017%20%D1%81%D1%82%D1%80.1&amp;toaddress=%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%D1%83%D0%BB.%D0%9B%D0%BE%D0%B1%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%2C%2017%2C%D1%81%D1%82%D1%80.1&amp;z=15\" target=\"_blank\" rel=\"external\">Веб-версия Яндекс Карт</a>
                            <a href=\"https://www.google.ru/maps/dir//%D1%83%D0%BB.+%D0%9B%D0%BE%D0%B1%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F,+17,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+127644/@55.8918798,37.5189218,15.75z/data=!4m8!4m7!1m0!1m5!1m1!1s0x46b539cffbd294dd:0x35fa4f70919e3ab5!2m2!1d37.5241599!2d55.892144\" target=\"_blank\" rel=\"external\">Google Maps</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6 col-xl-3\">
                <div class=\"cartablock-card\">
                    <div class=\"cartablock-card-zag\">Удальцова</div>
                    <div class=\"cartablock-card-addr\">Удальцова, д.60 стр.7</div>
                    <div class=\"cartablock-card-tel\"><a href=\"tel:74992880136\">+7 (499) 288-01-36</a></div>
                    <div class=\"cartablock-card-vrrab\">Ежедневно: 08:00 - 22:00</div>
                    <button class=\"cartablock-card-zopen\" data-title=\"ОСТАВИТЬ ЗАЯВКУ\" data-toggle=\"modal\" data-target=\"#callback_popup\">Оставить заявку</button>
                    <div class=\"cartablock-card-btnwrap\">
                        <div class=\"cartablock-card-btnwrap-btn\">Построить маршрут</div>
                        <div class=\"cartablock-card-btnwrap-btn-url\">
                            <a href=\"https://yandex.ru/maps/213/moscow/?ll=37.522588%2C55.891251&amp;mode=routes&amp;rtext=~55.892138%2C37.524166&amp;rtt=auto&amp;sll=37.726797%2C55.657246&amp;sspn=0.889206%2C0.284548&amp;text=%D1%83%D0%BB.%20%D0%9B%D0%BE%D0%B1%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%2C%2017%20%D1%81%D1%82%D1%80.1&amp;toaddress=%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%D1%83%D0%BB.%D0%9B%D0%BE%D0%B1%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%2C%2017%2C%D1%81%D1%82%D1%80.1&amp;z=15\" target=\"_blank\" rel=\"external\">Веб-версия Яндекс Карт</a>
                            <a href=\"https://www.google.ru/maps/dir//%D1%83%D0%BB.+%D0%9B%D0%BE%D0%B1%D0%BD%D0%B5%D0%BD%D1%81%D0%BA%D0%B0%D1%8F,+17,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+127644/@55.8918798,37.5189218,15.75z/data=!4m8!4m7!1m0!1m5!1m1!1s0x46b539cffbd294dd:0x35fa4f70919e3ab5!2m2!1d37.5241599!2d55.892144\" target=\"_blank\" rel=\"external\">Google Maps</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"cartablock-carta\">
            <div class=\"ymap-container\">
                <div class=\"loader loader-default\"></div>
                <div id=\"map-yandex\"></div>
            </div>
        </div>
    </div>
</div>
", "elements/_cartblock.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\elements\\_cartblock.html.twig");
    }
}
