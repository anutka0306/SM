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

/* v2/blocks/section/form.html.twig */
class __TwigTemplate_72de9e5f0b99954789ffde4fa4fdd5003ff30f456273b49cc1173595cbaec666 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/form.html.twig"));

        // line 1
        echo "<div class=\"block-form\">
    <form class=\"js-callback-form\" action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mail.callback_consultation");
        echo "\" method=\"post\">
        <div class=\"uk-background-secondary\">
            <div class=\"uk-section uk-container uk-container-small\">
                <div class=\"uk-grid uk-grid-small\" data-uk-grid=\"data-uk-grid\">

                    <div class=\"uk-width-2-5@m\">
                        <input class=\"uk-input\" name=\"name\" type=\"text\" placeholder=\"Имя\"/>
                        <p class=\"error-input\">Поле обязательно для заполнения</p>
                    </div>
                    <div class=\"uk-width-2-5@m\">
                        <input class=\"uk-input js-phone\" name=\"phone\" type=\"text\" placeholder=\"Телефон\" required/>
                        <p class=\"error-input\">Поле обязательно для заполнения</p>
                    </div>
                    <div class=\"uk-width-1-5@m\">
                        <input class=\"uk-button uk-button-default uk-width-1-1\" type=\"submit\"
                               value=\"Отправить\"/>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/blocks/section/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"block-form\">
    <form class=\"js-callback-form\" action=\"{{ path('mail.callback_consultation') }}\" method=\"post\">
        <div class=\"uk-background-secondary\">
            <div class=\"uk-section uk-container uk-container-small\">
                <div class=\"uk-grid uk-grid-small\" data-uk-grid=\"data-uk-grid\">

                    <div class=\"uk-width-2-5@m\">
                        <input class=\"uk-input\" name=\"name\" type=\"text\" placeholder=\"Имя\"/>
                        <p class=\"error-input\">Поле обязательно для заполнения</p>
                    </div>
                    <div class=\"uk-width-2-5@m\">
                        <input class=\"uk-input js-phone\" name=\"phone\" type=\"text\" placeholder=\"Телефон\" required/>
                        <p class=\"error-input\">Поле обязательно для заполнения</p>
                    </div>
                    <div class=\"uk-width-1-5@m\">
                        <input class=\"uk-button uk-button-default uk-width-1-1\" type=\"submit\"
                               value=\"Отправить\"/>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>", "v2/blocks/section/form.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\section\\form.html.twig");
    }
}
