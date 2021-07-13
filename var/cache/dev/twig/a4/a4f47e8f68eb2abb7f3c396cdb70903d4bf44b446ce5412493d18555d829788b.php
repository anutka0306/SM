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

/* elements/_header.html.twig */
class __TwigTemplate_3268a0e9e475c979cf7f670acc1a90ec990f0f143368837b9a8e4ba193abeac6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_header.html.twig"));

        // line 1
        echo "<div class=\"header\">
  <div class=\"container container2\">
    <div class=\"row\">
      <div class=\"col-sm-5 col-md-2 col-4 header-logo d-flex align-items-center justify-content-center\">
        <a href=\"/\">
          <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"*\">
        </a>
      </div>
      <div class=\"col-8 col-md-7 header_center d-flex align-items-center justify-content-center flex-wrap desktop-tablet\">
        <div class=\"header-address desktop\">
          <div class=\"header-address-item\">
            <div class=\"header-address-item-title\">Севастопольский</div>
            <span>Севастопольский пр. д. 95 б, стр 3</span>
            <a href=\"tel:74994441437\">+7 (499) 444-14-37</a>
          </div>
          <div class=\"header-address-item\">
            <div class=\"header-address-item-title\">Калужская</div>
            <span>Научный проезд д.14а, стр.7</span>
            <a href=\"tel:74954773396\">+7 (495) 477-33-96</a>
          </div>
          <div class=\"header-address-item\">
            <div class=\"header-address-item-title\">Дмитровка</div>
            <span>Лобненская д.17, стр.5</span>
            <a href=\"tel:74994507383\">+7 (499) 450-73-83</a>
          </div>
          <div class=\"header-address-item\">
            <div class=\"header-address-item-title\">Удальцова</div>
            <span>Удальцова, д.60 стр.7</span>
            <a href=\"tel:74992880136\">+7 (499) 288-01-36</a>
          </div>
        </div>
        <!-- Main menu -->
        <div class=\"container container2 text-center mt-3\">
          <div class=\"row\">
            <div class=\"col-12\">
              <ul style=\"margin: 0;\">
                <li>
                  <a class=\"punkt\" href=\"/uslugi/\">Услуги</a>
                </li>
                <li>
                  <a class=\"punkt\" href=\"/czenyi/\">Цены</a>
                </li>
                <li>
                  <a class=\"punkt\" href=\"/offers/\">Акции</a>
                </li>
                ";
        // line 49
        echo "                <li>
                  <a class=\"punkt\" href=\"/vakancies/\">Вакансии</a>
                </li>
                <li>
                  <a class=\"punkt\" href=\"/o-kompanii/\">О нас</a>
                </li>
                <li>
                  <a class=\"punkt\" href=\"/kontaktyi/\">Контакты</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Main menu end -->
      </div>
      <div class=\"col-sm-5 col-md-2 col-6 header-phones d-flex align-items-center justify-content-center\">
        <div>
          <div class=\"header-center-schedule\">Время работы: с 08:00 до 22:00</div>
          <div class=\"header-center-schedule\">Ежедневно, без выходных.</div>
          <div class=\"header-center-schedule\"><a href=\"tel:74954773396\">+8 (800) 800-88-88</a></div>
          <div class=\"header-center-schedule\"><a class=\"whatsapp-button\" href=\"https://wa.me/79854289850\">Написать в Whatsapp </a></div>
        </div>
      </div>
      <div class=\"col-sm-2 col-2 mobil-flex d-flex align-items-center justify-content-center\">
        <button onclick=\"open_menu()\">
            <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/menu.svg"), "html", null, true);
        echo "\" alt=\"menu\">
        </button>
      </div>
    </div>
  </div>
</div>

<script>
    function open_menu(){
        \$('#mobile_menu').css({'display':'block'});
    }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "elements/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 74,  93 => 49,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header\">
  <div class=\"container container2\">
    <div class=\"row\">
      <div class=\"col-sm-5 col-md-2 col-4 header-logo d-flex align-items-center justify-content-center\">
        <a href=\"/\">
          <img src=\"{{ asset('img/logo.png') }}\" alt=\"*\">
        </a>
      </div>
      <div class=\"col-8 col-md-7 header_center d-flex align-items-center justify-content-center flex-wrap desktop-tablet\">
        <div class=\"header-address desktop\">
          <div class=\"header-address-item\">
            <div class=\"header-address-item-title\">Севастопольский</div>
            <span>Севастопольский пр. д. 95 б, стр 3</span>
            <a href=\"tel:74994441437\">+7 (499) 444-14-37</a>
          </div>
          <div class=\"header-address-item\">
            <div class=\"header-address-item-title\">Калужская</div>
            <span>Научный проезд д.14а, стр.7</span>
            <a href=\"tel:74954773396\">+7 (495) 477-33-96</a>
          </div>
          <div class=\"header-address-item\">
            <div class=\"header-address-item-title\">Дмитровка</div>
            <span>Лобненская д.17, стр.5</span>
            <a href=\"tel:74994507383\">+7 (499) 450-73-83</a>
          </div>
          <div class=\"header-address-item\">
            <div class=\"header-address-item-title\">Удальцова</div>
            <span>Удальцова, д.60 стр.7</span>
            <a href=\"tel:74992880136\">+7 (499) 288-01-36</a>
          </div>
        </div>
        <!-- Main menu -->
        <div class=\"container container2 text-center mt-3\">
          <div class=\"row\">
            <div class=\"col-12\">
              <ul style=\"margin: 0;\">
                <li>
                  <a class=\"punkt\" href=\"/uslugi/\">Услуги</a>
                </li>
                <li>
                  <a class=\"punkt\" href=\"/czenyi/\">Цены</a>
                </li>
                <li>
                  <a class=\"punkt\" href=\"/offers/\">Акции</a>
                </li>
                {#<li>
                  <a class=\"punkt\" href=\"#\">Портфолио</a>
                </li>#}
                <li>
                  <a class=\"punkt\" href=\"/vakancies/\">Вакансии</a>
                </li>
                <li>
                  <a class=\"punkt\" href=\"/o-kompanii/\">О нас</a>
                </li>
                <li>
                  <a class=\"punkt\" href=\"/kontaktyi/\">Контакты</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Main menu end -->
      </div>
      <div class=\"col-sm-5 col-md-2 col-6 header-phones d-flex align-items-center justify-content-center\">
        <div>
          <div class=\"header-center-schedule\">Время работы: с 08:00 до 22:00</div>
          <div class=\"header-center-schedule\">Ежедневно, без выходных.</div>
          <div class=\"header-center-schedule\"><a href=\"tel:74954773396\">+8 (800) 800-88-88</a></div>
          <div class=\"header-center-schedule\"><a class=\"whatsapp-button\" href=\"https://wa.me/79854289850\">Написать в Whatsapp </a></div>
        </div>
      </div>
      <div class=\"col-sm-2 col-2 mobil-flex d-flex align-items-center justify-content-center\">
        <button onclick=\"open_menu()\">
            <img src=\"{{ asset('img/menu.svg') }}\" alt=\"menu\">
        </button>
      </div>
    </div>
  </div>
</div>

<script>
    function open_menu(){
        \$('#mobile_menu').css({'display':'block'});
    }
</script>", "elements/_header.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\elements\\_header.html.twig");
    }
}
