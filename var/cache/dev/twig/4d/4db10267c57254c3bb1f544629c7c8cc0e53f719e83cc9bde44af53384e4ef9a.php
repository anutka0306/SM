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

/* elements/_footer.html.twig */
class __TwigTemplate_06ff795645da6b9e5d147e13afa696750ace8d136c797929c3187f7ba99838ad extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_footer.html.twig"));

        // line 1
        echo "<div class=\"footer\">
  <div class=\"container container2\">
    <div class=\"row\">
      <div class=\"col-lg-3 col-md-12\">
          <div class=\"footer-logo\"><a href=\"/\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logo.png"), "html", null, true);
        echo "\" alt=\"Автосервис Миракпп\"></a></div>
          <div class=\"footer-copyright\">
              © <?= date(\"Y\") ?> Автосервис Mirakpp. <br>
              Все права защищены.
          </div>
      </div>
      <div class=\"col-lg-3 col-sm-6 footer-menu\">
          <a href=\"/uslugi/polnaya-zamena-masla-v-akpp/\">Полная замена масла в АКПП</a>
          <a href=\"/uslugi/chastichnaya-zamena-masla-v-akpp/\">Частичная замена масла в АКПП</a>
          <a href=\"/uslugi/zamena-masla-v-mkpp/\">Замена масла в МКПП</a>
          <a href=\"/uslugi/zamena-akpp/\">Замена АКПП</a>
          <a href=\"/uslugi/adaptacziya-akpp/\">Адаптация АКПП</a>
          <a href=\"/uslugi/zamena-kpp/\">Замена КПП</a>
          <a href=\"/sitemap/\">Карта сайта</a>
          <a href=\"/vakancies/\">Вакансии</a>
      </div>
      <div class=\"col-lg-3 col-sm-6 footer-menu\">
          <a href=\"/uslugi/remont-ruchki-akpp/\">Ремонт ручки АКПП</a>
          <a href=\"/uslugi/remont-ebu-akpp/\">Ремонт ЭБУ АКПП</a>
          <a href=\"/uslugi/zamena-solenoidov-akpp/\">Замена соленоидов АКПП </a>
          <a href=\"/uslugi/remont-solenoidov-akpp/\">Ремонт соленоидов АКПП</a>
          <a href=\"/uslugi/zamena-selektora-akpp/\">Замена селектора АКПП</a>
          <a href=\"/uslugi/zamena-gidrotransformatora-akpp/\">Замена гидротрансформатора АКПП</a>
          <a href=\"/uslugi/kompyuternaya-diagnostika/\">Компьютерная диагностика АКПП</a>
          <a href=\"/uslugi/zamena-masla-v-akpp/\">Замена масла в АКПП</a>
      </div>
      <div class=\"col-lg-3 col-sm-6 footer-menu\">
          <a href=\"/uslugi/remont-selektora-akpp/\">Ремонт селектора АКПП</a>
          <a href=\"/uslugi/zamena-gidroblocka-akpp/\">Замена гидроблока АКПП</a>
          <a href=\"/uslugi/zamena-filtra-akpp/\">Замена фильтра АКПП</a>
          <a href=\"/uslugi/diagnostika-akpp/\">Диагностика АКПП</a>
          <a href=\"/uslugi/vosstanovlenie-akpp/\">Восстановление АКПП</a>
          <a href=\"/uslugi/obsluzhivanie-akpp/\">Обслуживание АКПП </a>
          <a href=\"/uslugi/zamena-korobki-na-kontraktnuyu/\">Замена коробки </a>
          <a href=\"/uslugi/apparatnaya-zamena-masla-v-akpp/\">Аппаратная замена масла в АКПП </a>
      </div>
    </div>
  </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "elements/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer\">
  <div class=\"container container2\">
    <div class=\"row\">
      <div class=\"col-lg-3 col-md-12\">
          <div class=\"footer-logo\"><a href=\"/\"><img src=\"{{ asset('/img/logo.png') }}\" alt=\"Автосервис Миракпп\"></a></div>
          <div class=\"footer-copyright\">
              © <?= date(\"Y\") ?> Автосервис Mirakpp. <br>
              Все права защищены.
          </div>
      </div>
      <div class=\"col-lg-3 col-sm-6 footer-menu\">
          <a href=\"/uslugi/polnaya-zamena-masla-v-akpp/\">Полная замена масла в АКПП</a>
          <a href=\"/uslugi/chastichnaya-zamena-masla-v-akpp/\">Частичная замена масла в АКПП</a>
          <a href=\"/uslugi/zamena-masla-v-mkpp/\">Замена масла в МКПП</a>
          <a href=\"/uslugi/zamena-akpp/\">Замена АКПП</a>
          <a href=\"/uslugi/adaptacziya-akpp/\">Адаптация АКПП</a>
          <a href=\"/uslugi/zamena-kpp/\">Замена КПП</a>
          <a href=\"/sitemap/\">Карта сайта</a>
          <a href=\"/vakancies/\">Вакансии</a>
      </div>
      <div class=\"col-lg-3 col-sm-6 footer-menu\">
          <a href=\"/uslugi/remont-ruchki-akpp/\">Ремонт ручки АКПП</a>
          <a href=\"/uslugi/remont-ebu-akpp/\">Ремонт ЭБУ АКПП</a>
          <a href=\"/uslugi/zamena-solenoidov-akpp/\">Замена соленоидов АКПП </a>
          <a href=\"/uslugi/remont-solenoidov-akpp/\">Ремонт соленоидов АКПП</a>
          <a href=\"/uslugi/zamena-selektora-akpp/\">Замена селектора АКПП</a>
          <a href=\"/uslugi/zamena-gidrotransformatora-akpp/\">Замена гидротрансформатора АКПП</a>
          <a href=\"/uslugi/kompyuternaya-diagnostika/\">Компьютерная диагностика АКПП</a>
          <a href=\"/uslugi/zamena-masla-v-akpp/\">Замена масла в АКПП</a>
      </div>
      <div class=\"col-lg-3 col-sm-6 footer-menu\">
          <a href=\"/uslugi/remont-selektora-akpp/\">Ремонт селектора АКПП</a>
          <a href=\"/uslugi/zamena-gidroblocka-akpp/\">Замена гидроблока АКПП</a>
          <a href=\"/uslugi/zamena-filtra-akpp/\">Замена фильтра АКПП</a>
          <a href=\"/uslugi/diagnostika-akpp/\">Диагностика АКПП</a>
          <a href=\"/uslugi/vosstanovlenie-akpp/\">Восстановление АКПП</a>
          <a href=\"/uslugi/obsluzhivanie-akpp/\">Обслуживание АКПП </a>
          <a href=\"/uslugi/zamena-korobki-na-kontraktnuyu/\">Замена коробки </a>
          <a href=\"/uslugi/apparatnaya-zamena-masla-v-akpp/\">Аппаратная замена масла в АКПП </a>
      </div>
    </div>
  </div>
</div>", "elements/_footer.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\elements\\_footer.html.twig");
    }
}
