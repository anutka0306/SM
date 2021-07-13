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

/* v2/blocks/section/whatsapp.html.twig */
class __TwigTemplate_a416c82ab1b5ae51f483e2a6a5f2f1bd719322a961de9b32adc428c65bc50c3e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/whatsapp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/whatsapp.html.twig"));

        // line 1
        echo "<div class=\"section-whatsapp\">
    <div class=\"uk-section uk-container\">
        <div class=\"uk-grid uk-grid-small uk-flex-middle\" data-uk-grid=\"data-uk-grid\">
            <div class=\"uk-width-1-3@m\"><img class=\"section-whatsapp__img\" src=\"/assets/images/img-whatsapp.png\" alt=\"Заявка в WhatsApp\" /></div>
            <div class=\"uk-width-2-3@m\">
                <h3 class=\"section-whatsapp__title\">Заявка в WhatsApp</h3>
                <p class=\"section-whatsapp__desc\">Отправьте нам заявку с фото и получите просчет фиксированной стоимости ремонта вашего авто</p>
                <div class=\"uk-grid uk-grid-small uk-child-width-1-3@s\" data-uk-grid=\"data-uk-grid\">
                    <div><a class=\"whatsapp-link\" href=\"#\"><span class=\"whatsapp-link__small\">Написать</span><span class=\"whatsapp-link__adress\">Севастопольский</span></a></div>
                    <div><a class=\"whatsapp-link\" href=\"#\"><span class=\"whatsapp-link__small\">Написать</span><span class=\"whatsapp-link__adress\">Лобненская</span></a></div>
                    <div><a class=\"whatsapp-link\" href=\"#\"><span class=\"whatsapp-link__small\">Написать</span><span class=\"whatsapp-link__adress\">Удальцова</span></a></div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/blocks/section/whatsapp.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-whatsapp\">
    <div class=\"uk-section uk-container\">
        <div class=\"uk-grid uk-grid-small uk-flex-middle\" data-uk-grid=\"data-uk-grid\">
            <div class=\"uk-width-1-3@m\"><img class=\"section-whatsapp__img\" src=\"/assets/images/img-whatsapp.png\" alt=\"Заявка в WhatsApp\" /></div>
            <div class=\"uk-width-2-3@m\">
                <h3 class=\"section-whatsapp__title\">Заявка в WhatsApp</h3>
                <p class=\"section-whatsapp__desc\">Отправьте нам заявку с фото и получите просчет фиксированной стоимости ремонта вашего авто</p>
                <div class=\"uk-grid uk-grid-small uk-child-width-1-3@s\" data-uk-grid=\"data-uk-grid\">
                    <div><a class=\"whatsapp-link\" href=\"#\"><span class=\"whatsapp-link__small\">Написать</span><span class=\"whatsapp-link__adress\">Севастопольский</span></a></div>
                    <div><a class=\"whatsapp-link\" href=\"#\"><span class=\"whatsapp-link__small\">Написать</span><span class=\"whatsapp-link__adress\">Лобненская</span></a></div>
                    <div><a class=\"whatsapp-link\" href=\"#\"><span class=\"whatsapp-link__small\">Написать</span><span class=\"whatsapp-link__adress\">Удальцова</span></a></div>
                </div>
            </div>
        </div>
    </div>
</div>", "v2/blocks/section/whatsapp.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\section\\whatsapp.html.twig");
    }
}
