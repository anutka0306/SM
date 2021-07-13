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

/* v2/turbo/service/address.html.twig */
class __TwigTemplate_e2b1c1a6faf488d04da020834f653cccb5cf8305642bc6216830b1a8a8477000 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/turbo/service/address.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/turbo/service/address.html.twig"));

        // line 1
        echo "<h2 id=\"adresses\">Адреса сервисов</h2>
<p>ул. Лобненская, 17 стр.1</p>
<p><small><a href=\"tel:+74951507078\">+7(495) 150-70-78 </a></small></p>
<button
        formaction=\"https://yandex.ru/maps/213/moscow/?ll=37.522588%2C55.891251&mode=routes&rtext=~55.892138%2C37.524166&rtt=auto&ruri=~&z=15\"
        data-background-color=\"blue\"
        data-color=\"white\"
        data-turbo=\"false\"
        data-primary=\"true\"
>
    Построить маршрут
</button>

<p>ул. Удальцова, 60</p>
<p><small><a href=\"tel:+74953748856\">+7(495) 374-88-56</a></small></p>
<button
        formaction=\"https://yandex.ru/maps/213/moscow/?ll=37.488125%2C55.687766&mode=routes&rtext=~55.687766%2C37.488125&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fll%3D37.488%252C55.688%26spn%3D0.001%252C0.001%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%259C%25D0%25BE%25D1%2581%25D0%25BA%25D0%25B2%25D0%25B0%252C%2520%25D1%2583%25D0%25BB%25D0%25B8%25D1%2586%25D0%25B0%2520%25D0%25A3%25D0%25B4%25D0%25B0%25D0%25BB%25D1%258C%25D1%2586%25D0%25BE%25D0%25B2%25D0%25B0%252C%252060&z=17\"
        data-background-color=\"blue\"
        data-color=\"white\"
        data-turbo=\"false\"
        data-primary=\"true\"
>
    Построить маршрут
</button>

<p>Севастопольский пр-т, 95б</p>
<p><small><a href=\"tel:+74953747712\">+7(495) 374-77-12</a></small></p>
<button
        formaction=\"https://yandex.ru/maps/213/moscow/?ll=37.543972%2C55.635318&mode=routes&rtext=~55.635345%2C37.543578&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fll%3D37.544%252C55.635%26spn%3D0.001%252C0.001%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%259C%25D0%25BE%25D1%2581%25D0%25BA%25D0%25B2%25D0%25B0%252C%2520%25D0%25A1%25D0%25B5%25D0%25B2%25D0%25B0%25D1%2581%25D1%2582%25D0%25BE%25D0%25BF%25D0%25BE%25D0%25BB%25D1%258C%25D1%2581%25D0%25BA%25D0%25B8%25D0%25B9%2520%25D0%25BF%25D1%2580%25D0%25BE%25D1%2581%25D0%25BF%25D0%25B5%25D0%25BA%25D1%2582%252C%252095%25D0%2591&z=18\"
        data-background-color=\"blue\"
        data-color=\"white\"
        data-turbo=\"false\"
        data-primary=\"true\"
>
    Построить маршрут
</button>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/turbo/service/address.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2 id=\"adresses\">Адреса сервисов</h2>
<p>ул. Лобненская, 17 стр.1</p>
<p><small><a href=\"tel:+74951507078\">+7(495) 150-70-78 </a></small></p>
<button
        formaction=\"https://yandex.ru/maps/213/moscow/?ll=37.522588%2C55.891251&mode=routes&rtext=~55.892138%2C37.524166&rtt=auto&ruri=~&z=15\"
        data-background-color=\"blue\"
        data-color=\"white\"
        data-turbo=\"false\"
        data-primary=\"true\"
>
    Построить маршрут
</button>

<p>ул. Удальцова, 60</p>
<p><small><a href=\"tel:+74953748856\">+7(495) 374-88-56</a></small></p>
<button
        formaction=\"https://yandex.ru/maps/213/moscow/?ll=37.488125%2C55.687766&mode=routes&rtext=~55.687766%2C37.488125&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fll%3D37.488%252C55.688%26spn%3D0.001%252C0.001%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%259C%25D0%25BE%25D1%2581%25D0%25BA%25D0%25B2%25D0%25B0%252C%2520%25D1%2583%25D0%25BB%25D0%25B8%25D1%2586%25D0%25B0%2520%25D0%25A3%25D0%25B4%25D0%25B0%25D0%25BB%25D1%258C%25D1%2586%25D0%25BE%25D0%25B2%25D0%25B0%252C%252060&z=17\"
        data-background-color=\"blue\"
        data-color=\"white\"
        data-turbo=\"false\"
        data-primary=\"true\"
>
    Построить маршрут
</button>

<p>Севастопольский пр-т, 95б</p>
<p><small><a href=\"tel:+74953747712\">+7(495) 374-77-12</a></small></p>
<button
        formaction=\"https://yandex.ru/maps/213/moscow/?ll=37.543972%2C55.635318&mode=routes&rtext=~55.635345%2C37.543578&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fll%3D37.544%252C55.635%26spn%3D0.001%252C0.001%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%259C%25D0%25BE%25D1%2581%25D0%25BA%25D0%25B2%25D0%25B0%252C%2520%25D0%25A1%25D0%25B5%25D0%25B2%25D0%25B0%25D1%2581%25D1%2582%25D0%25BE%25D0%25BF%25D0%25BE%25D0%25BB%25D1%258C%25D1%2581%25D0%25BA%25D0%25B8%25D0%25B9%2520%25D0%25BF%25D1%2580%25D0%25BE%25D1%2581%25D0%25BF%25D0%25B5%25D0%25BA%25D1%2582%252C%252095%25D0%2591&z=18\"
        data-background-color=\"blue\"
        data-color=\"white\"
        data-turbo=\"false\"
        data-primary=\"true\"
>
    Построить маршрут
</button>", "v2/turbo/service/address.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\turbo\\service\\address.html.twig");
    }
}
