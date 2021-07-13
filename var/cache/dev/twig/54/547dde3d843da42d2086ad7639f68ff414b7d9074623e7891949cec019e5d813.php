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

/* v2/blocks/section/form2.html.twig */
class __TwigTemplate_b8b70532091bc2735637cb487a5398843de7a3880b35323d3181c14515b8f4cf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/form2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/form2.html.twig"));

        // line 1
        echo "<div class=\"block-form\">
    <div class=\"uk-background-secondary\">
        <div class=\"uk-section uk-container\">
            <h3 class=\"block-form__title\">Заявка на просчет</h3>
            <p class=\"block-form__desc\">Отправьте нам заявку с фото и получите просчет фиксированной стоимости ремонта вашего авто</p>
            <form action=\"#\">
                <div class=\"uk-grid uk-grid-small\" data-uk-grid=\"data-uk-grid\">
                    <div class=\"uk-width-2-5@m\"><input class=\"uk-input\" type=\"text\" placeholder=\"Ваш телефон\" /></div>
                    <div class=\"uk-width-2-5@m\"><select class=\"uk-select\"><option value=\"\">Выберите центр</option><option value=\"Техцентр на Дмитровке\">Техцентр на Дмитровке</option><option value=\"Техцентр на Мичуринском\">Техцентр на Мичуринском</option><option value=\"Техцентр на Севастопольском\">Техцентр на Севастопольском</option></select></div>
                    <div class=\"uk-width-1-5@m\"><input class=\"uk-button uk-button-default uk-width-1-1\" type=\"submit\" value=\"Отправить заявку\" /></div>
                </div>
            </form>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/blocks/section/form2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"block-form\">
    <div class=\"uk-background-secondary\">
        <div class=\"uk-section uk-container\">
            <h3 class=\"block-form__title\">Заявка на просчет</h3>
            <p class=\"block-form__desc\">Отправьте нам заявку с фото и получите просчет фиксированной стоимости ремонта вашего авто</p>
            <form action=\"#\">
                <div class=\"uk-grid uk-grid-small\" data-uk-grid=\"data-uk-grid\">
                    <div class=\"uk-width-2-5@m\"><input class=\"uk-input\" type=\"text\" placeholder=\"Ваш телефон\" /></div>
                    <div class=\"uk-width-2-5@m\"><select class=\"uk-select\"><option value=\"\">Выберите центр</option><option value=\"Техцентр на Дмитровке\">Техцентр на Дмитровке</option><option value=\"Техцентр на Мичуринском\">Техцентр на Мичуринском</option><option value=\"Техцентр на Севастопольском\">Техцентр на Севастопольском</option></select></div>
                    <div class=\"uk-width-1-5@m\"><input class=\"uk-button uk-button-default uk-width-1-1\" type=\"submit\" value=\"Отправить заявку\" /></div>
                </div>
            </form>
        </div>
    </div>
</div>", "v2/blocks/section/form2.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\section\\form2.html.twig");
    }
}
