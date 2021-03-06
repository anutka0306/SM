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
class __TwigTemplate_a6418f4b697eba71ca6e3ff731a3724668da87a610891f97b92307f904df7d8b extends Template
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
        echo "\" alt=\"???????????????????? ??????????????\"></a></div>
          <div class=\"footer-copyright\">
              ?? <?= date(\"Y\") ?> ???????????????????? Mirakpp. <br>
              ?????? ?????????? ????????????????.
          </div>
      </div>
      <div class=\"col-lg-3 col-sm-6 footer-menu\">
          <a href=\"/uslugi/polnaya-zamena-masla-v-akpp/\">???????????? ???????????? ?????????? ?? ????????</a>
          <a href=\"/uslugi/chastichnaya-zamena-masla-v-akpp/\">?????????????????? ???????????? ?????????? ?? ????????</a>
          <a href=\"/uslugi/zamena-masla-v-mkpp/\">???????????? ?????????? ?? ????????</a>
          <a href=\"/uslugi/zamena-akpp/\">???????????? ????????</a>
          <a href=\"/uslugi/adaptacziya-akpp/\">?????????????????? ????????</a>
          <a href=\"/uslugi/zamena-kpp/\">???????????? ??????</a>
          <a href=\"/sitemap/\">?????????? ??????????</a>
          <a href=\"/vakancies/\">????????????????</a>
      </div>
      <div class=\"col-lg-3 col-sm-6 footer-menu\">
          <a href=\"/uslugi/remont-ruchki-akpp/\">???????????? ?????????? ????????</a>
          <a href=\"/uslugi/remont-ebu-akpp/\">???????????? ?????? ????????</a>
          <a href=\"/uslugi/zamena-solenoidov-akpp/\">???????????? ???????????????????? ???????? </a>
          <a href=\"/uslugi/remont-solenoidov-akpp/\">???????????? ???????????????????? ????????</a>
          <a href=\"/uslugi/zamena-selektora-akpp/\">???????????? ?????????????????? ????????</a>
          <a href=\"/uslugi/zamena-gidrotransformatora-akpp/\">???????????? ?????????????????????????????????????? ????????</a>
          <a href=\"/uslugi/kompyuternaya-diagnostika/\">???????????????????????? ?????????????????????? ????????</a>
          <a href=\"/uslugi/zamena-masla-v-akpp/\">???????????? ?????????? ?? ????????</a>
      </div>
      <div class=\"col-lg-3 col-sm-6 footer-menu\">
          <a href=\"/uslugi/remont-selektora-akpp/\">???????????? ?????????????????? ????????</a>
          <a href=\"/uslugi/zamena-gidroblocka-akpp/\">???????????? ???????????????????? ????????</a>
          <a href=\"/uslugi/zamena-filtra-akpp/\">???????????? ?????????????? ????????</a>
          <a href=\"/uslugi/diagnostika-akpp/\">?????????????????????? ????????</a>
          <a href=\"/uslugi/vosstanovlenie-akpp/\">???????????????????????????? ????????</a>
          <a href=\"/uslugi/obsluzhivanie-akpp/\">???????????????????????? ???????? </a>
          <a href=\"/uslugi/zamena-korobki-na-kontraktnuyu/\">???????????? ?????????????? </a>
          <a href=\"/uslugi/apparatnaya-zamena-masla-v-akpp/\">???????????????????? ???????????? ?????????? ?? ???????? </a>
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
          <div class=\"footer-logo\"><a href=\"/\"><img src=\"{{ asset('/img/logo.png') }}\" alt=\"???????????????????? ??????????????\"></a></div>
          <div class=\"footer-copyright\">
              ?? <?= date(\"Y\") ?> ???????????????????? Mirakpp. <br>
              ?????? ?????????? ????????????????.
          </div>
      </div>
      <div class=\"col-lg-3 col-sm-6 footer-menu\">
          <a href=\"/uslugi/polnaya-zamena-masla-v-akpp/\">???????????? ???????????? ?????????? ?? ????????</a>
          <a href=\"/uslugi/chastichnaya-zamena-masla-v-akpp/\">?????????????????? ???????????? ?????????? ?? ????????</a>
          <a href=\"/uslugi/zamena-masla-v-mkpp/\">???????????? ?????????? ?? ????????</a>
          <a href=\"/uslugi/zamena-akpp/\">???????????? ????????</a>
          <a href=\"/uslugi/adaptacziya-akpp/\">?????????????????? ????????</a>
          <a href=\"/uslugi/zamena-kpp/\">???????????? ??????</a>
          <a href=\"/sitemap/\">?????????? ??????????</a>
          <a href=\"/vakancies/\">????????????????</a>
      </div>
      <div class=\"col-lg-3 col-sm-6 footer-menu\">
          <a href=\"/uslugi/remont-ruchki-akpp/\">???????????? ?????????? ????????</a>
          <a href=\"/uslugi/remont-ebu-akpp/\">???????????? ?????? ????????</a>
          <a href=\"/uslugi/zamena-solenoidov-akpp/\">???????????? ???????????????????? ???????? </a>
          <a href=\"/uslugi/remont-solenoidov-akpp/\">???????????? ???????????????????? ????????</a>
          <a href=\"/uslugi/zamena-selektora-akpp/\">???????????? ?????????????????? ????????</a>
          <a href=\"/uslugi/zamena-gidrotransformatora-akpp/\">???????????? ?????????????????????????????????????? ????????</a>
          <a href=\"/uslugi/kompyuternaya-diagnostika/\">???????????????????????? ?????????????????????? ????????</a>
          <a href=\"/uslugi/zamena-masla-v-akpp/\">???????????? ?????????? ?? ????????</a>
      </div>
      <div class=\"col-lg-3 col-sm-6 footer-menu\">
          <a href=\"/uslugi/remont-selektora-akpp/\">???????????? ?????????????????? ????????</a>
          <a href=\"/uslugi/zamena-gidroblocka-akpp/\">???????????? ???????????????????? ????????</a>
          <a href=\"/uslugi/zamena-filtra-akpp/\">???????????? ?????????????? ????????</a>
          <a href=\"/uslugi/diagnostika-akpp/\">?????????????????????? ????????</a>
          <a href=\"/uslugi/vosstanovlenie-akpp/\">???????????????????????????? ????????</a>
          <a href=\"/uslugi/obsluzhivanie-akpp/\">???????????????????????? ???????? </a>
          <a href=\"/uslugi/zamena-korobki-na-kontraktnuyu/\">???????????? ?????????????? </a>
          <a href=\"/uslugi/apparatnaya-zamena-masla-v-akpp/\">???????????????????? ???????????? ?????????? ?? ???????? </a>
      </div>
    </div>
  </div>
</div>", "elements/_footer.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\elements\\_footer.html.twig");
    }
}
