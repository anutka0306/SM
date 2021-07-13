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

/* elements/_menu_mobile.html.twig */
class __TwigTemplate_255060550b6d0cd57ed7857bdbd05f905b19507efaf57a88fe35c264e2c1e598 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_menu_mobile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_menu_mobile.html.twig"));

        // line 1
        echo "<div class=\"mobile_menu\" id=\"mobile_menu\">
    <div class=\"mobile_menu_logo\">
        <img src=\"../img/logo.png\" alt=\"logo\">
    </div>
    <div class=\"mobile_menu_close\">
        <button onclick=\"close_menu()\">
            <img src=\"../img/close.svg\" alt=\"X\">
        </button>
    </div>
    <div class=\"mobile_menu_item menu_mobile_more_item\">
        <div data-toggle=\"collapse\" data-target=\"#button_more_menu\">Услуги</div>
        <div id=\"button_more_menu\" class=\"collapse\">
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
        </div>
    </div>
    <div class=\"mobile_menu_item\">
        <a href=\"#\">Цены</a>
    </div>
    <div class=\"mobile_menu_item\">
        <a href=\"#\">Акции</a>
    </div>
    <div class=\"mobile_menu_item\">
        <a href=\"#\">Портфолио</a>
    </div>
    <div class=\"mobile_menu_item\">
        <a href=\"#\">О нас</a>
    </div>
    <div class=\"mobile_menu_item\">
        <a href=\"#\">Контакты</a>
    </div>
    <div class=\"mobile_menu_address_item\">
        <div class=\"mobile_menu_address_item_title\">Севастопольский</div>
        <span>Севастопольский пр. д. 95 б, стр 3</span>
        <a href=\"tel:74994441437\">+7 (499) 444-14-37</a>
    </div>
    <div class=\"mobile_menu_address_item_line\"></div>
    <div class=\"mobile_menu_address_item\">
        <div class=\"mobile_menu_address_item_title\">Калужская</div>
        <span>Научный проезд д.14а, стр.7</span>
        <a href=\"tel:74954773396\">+7 (495) 477-33-96</a>
    </div>
    <div class=\"mobile_menu_address_item_line\"></div>
    <div class=\"mobile_menu_address_item\">
        <div class=\"mobile_menu_address_item_title\">Дмитровка</div>
        <span>Лобненская д.17, стр.5</span>
        <a href=\"tel:74994507383\">+7 (499) 450-73-83</a>
    </div>
    <div class=\"mobile_menu_address_item_line\"></div>
    <div class=\"mobile_menu_address_item\">
        <div class=\"mobile_menu_address_item_title\">Удальцова</div>
        <span>Удальцова, д.60 стр.7</span>
        <a href=\"tel:74992880136\">+7 (499) 288-01-36</a>
    </div>
</div>

<script>
    function close_menu(){
        \$('#mobile_menu').css({'display':'none'});
    }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "elements/_menu_mobile.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mobile_menu\" id=\"mobile_menu\">
    <div class=\"mobile_menu_logo\">
        <img src=\"../img/logo.png\" alt=\"logo\">
    </div>
    <div class=\"mobile_menu_close\">
        <button onclick=\"close_menu()\">
            <img src=\"../img/close.svg\" alt=\"X\">
        </button>
    </div>
    <div class=\"mobile_menu_item menu_mobile_more_item\">
        <div data-toggle=\"collapse\" data-target=\"#button_more_menu\">Услуги</div>
        <div id=\"button_more_menu\" class=\"collapse\">
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
            <a href=\"#\">Раздел</a>
        </div>
    </div>
    <div class=\"mobile_menu_item\">
        <a href=\"#\">Цены</a>
    </div>
    <div class=\"mobile_menu_item\">
        <a href=\"#\">Акции</a>
    </div>
    <div class=\"mobile_menu_item\">
        <a href=\"#\">Портфолио</a>
    </div>
    <div class=\"mobile_menu_item\">
        <a href=\"#\">О нас</a>
    </div>
    <div class=\"mobile_menu_item\">
        <a href=\"#\">Контакты</a>
    </div>
    <div class=\"mobile_menu_address_item\">
        <div class=\"mobile_menu_address_item_title\">Севастопольский</div>
        <span>Севастопольский пр. д. 95 б, стр 3</span>
        <a href=\"tel:74994441437\">+7 (499) 444-14-37</a>
    </div>
    <div class=\"mobile_menu_address_item_line\"></div>
    <div class=\"mobile_menu_address_item\">
        <div class=\"mobile_menu_address_item_title\">Калужская</div>
        <span>Научный проезд д.14а, стр.7</span>
        <a href=\"tel:74954773396\">+7 (495) 477-33-96</a>
    </div>
    <div class=\"mobile_menu_address_item_line\"></div>
    <div class=\"mobile_menu_address_item\">
        <div class=\"mobile_menu_address_item_title\">Дмитровка</div>
        <span>Лобненская д.17, стр.5</span>
        <a href=\"tel:74994507383\">+7 (499) 450-73-83</a>
    </div>
    <div class=\"mobile_menu_address_item_line\"></div>
    <div class=\"mobile_menu_address_item\">
        <div class=\"mobile_menu_address_item_title\">Удальцова</div>
        <span>Удальцова, д.60 стр.7</span>
        <a href=\"tel:74992880136\">+7 (499) 288-01-36</a>
    </div>
</div>

<script>
    function close_menu(){
        \$('#mobile_menu').css({'display':'none'});
    }
</script>", "elements/_menu_mobile.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\elements\\_menu_mobile.html.twig");
    }
}
