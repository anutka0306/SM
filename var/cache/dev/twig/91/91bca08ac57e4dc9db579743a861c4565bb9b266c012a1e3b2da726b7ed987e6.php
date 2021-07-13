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

/* v1/widget/whatsapp_button.html.twig */
class __TwigTemplate_86e61e88a8fa2c7c98ded6a00a622cfd3239cab84e2147cd992e27bfa06c550f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/whatsapp_button.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/whatsapp_button.html.twig"));

        // line 1
        echo "<a class=\"wapopup mobile_show\" href=\"#\" data-href=\"whatsapp\">
    <div class=\"wapopup__content\"><img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/whatsapp-button/whatsapp.svg"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"wapopup__content__text\">
            <div>Оцените стоимость кузовного</div>
            <div>ремонта <span>по WhatsApp</span></div>
        </div>
    </div>
</a>
<div class=\"w-popup\">
    <div class=\"w-popup-wrap\">
        <div class=\"w-popup-close\"></div>
        <div class=\"whatsapp__button button\">
            <p class=\"footer-form__left__title\">Заявка в WhatsApp</p>
            <p class=\"footer-form__left__descr\">Отправьте нам заявку с фото и получите просчет фиксированной стоимости ремонта вашего авто</p>
            <div class=\"btn_block\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "                    <div class=\"footer-form__right__button btn-tel\">
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 18), "html", null, true);
            echo "\" class=\"button whatsapppop\" target=\"_blank\" onclick=\"(function(){ga('send', 'event', 'forma', 'whatsApp');})();\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/whatsapp_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  70 => 18,  67 => 17,  63 => 16,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"wapopup mobile_show\" href=\"#\" data-href=\"whatsapp\">
    <div class=\"wapopup__content\"><img src=\"{{ asset('img/whatsapp-button/whatsapp.svg') }}\" alt=\"\">
        <div class=\"wapopup__content__text\">
            <div>Оцените стоимость кузовного</div>
            <div>ремонта <span>по WhatsApp</span></div>
        </div>
    </div>
</a>
<div class=\"w-popup\">
    <div class=\"w-popup-wrap\">
        <div class=\"w-popup-close\"></div>
        <div class=\"whatsapp__button button\">
            <p class=\"footer-form__left__title\">Заявка в WhatsApp</p>
            <p class=\"footer-form__left__descr\">Отправьте нам заявку с фото и получите просчет фиксированной стоимости ремонта вашего авто</p>
            <div class=\"btn_block\">
                {% for item in items %}
                    <div class=\"footer-form__right__button btn-tel\">
                        <a href=\"{{ item.link }}\" class=\"button whatsapppop\" target=\"_blank\" onclick=\"(function(){ga('send', 'event', 'forma', 'whatsApp');})();\">{{ item.name }}</a>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>", "v1/widget/whatsapp_button.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\whatsapp_button.html.twig");
    }
}
