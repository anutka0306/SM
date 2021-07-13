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

/* v1/widget/whatsapp_block.html.twig */
class __TwigTemplate_56359f8f355cd92efa34bcef828f8e7be4553603469d0b2d6dd9f3a070fc81ef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/whatsapp_block.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/whatsapp_block.html.twig"));

        // line 1
        echo "<div ";
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoadBg($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/form-bg.png"), [0 => "whatsapp"]);
        echo ">
    <div class=\"container\">
        <div class=\"whatsapp__item\">
            <div class=\"whatsapp__phone\" id=\"whatsapp\">
                <img ";
        // line 5
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/whatsapp-block/whatsapp-phone.png"));
        echo " alt=\"\">
                <div ";
        // line 6
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoadBg($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/whatsapp-block/whatsapp-phone.jpg"), [0 => "whatsapp__phone__text"]);
        echo "></div>
            </div>
        </div>
        <div class=\"whatsapp__item clearfix\">
            <div class=\"whatsapp__button button\">
                <p class=\"footer-form__left__title\">Заявка в WhatsApp</p>
                <p class=\"footer-form__left__descr\">Отправьте нам заявку с фото и получите просчет фиксированной стоимости ремонта вашего ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["brand_model"]) || array_key_exists("brand_model", $context) ? $context["brand_model"] : (function () { throw new RuntimeError('Variable "brand_model" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</p>
                <div class=\"btn_block\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "                        <div class=\"footer-form__right__button btn-tel\">
                            <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 16), "html", null, true);
            echo "\"
                               class=\"button whatsapppop\" target=\"_blank\"
                               onclick=\"(function(){ga('send', 'event', 'forma', 'whatsApp');})();\">
                                ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "
                            </a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/whatsapp_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  82 => 19,  76 => 16,  73 => 15,  69 => 14,  64 => 12,  55 => 6,  51 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div {{ lazy_load_bg(asset('img/form-bg.png'),['whatsapp']) }}>
    <div class=\"container\">
        <div class=\"whatsapp__item\">
            <div class=\"whatsapp__phone\" id=\"whatsapp\">
                <img {{ lazy_load(asset('img/whatsapp-block/whatsapp-phone.png')) }} alt=\"\">
                <div {{ lazy_load_bg(asset('img/whatsapp-block/whatsapp-phone.jpg'),['whatsapp__phone__text']) }}></div>
            </div>
        </div>
        <div class=\"whatsapp__item clearfix\">
            <div class=\"whatsapp__button button\">
                <p class=\"footer-form__left__title\">Заявка в WhatsApp</p>
                <p class=\"footer-form__left__descr\">Отправьте нам заявку с фото и получите просчет фиксированной стоимости ремонта вашего {{ brand_model }}</p>
                <div class=\"btn_block\">
                    {% for item in items %}
                        <div class=\"footer-form__right__button btn-tel\">
                            <a href=\"{{ item.link }}\"
                               class=\"button whatsapppop\" target=\"_blank\"
                               onclick=\"(function(){ga('send', 'event', 'forma', 'whatsApp');})();\">
                                {{ item.name }}
                            </a>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</div>", "v1/widget/whatsapp_block.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\whatsapp_block.html.twig");
    }
}
