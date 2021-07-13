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

/* v2/extensions/whatsapp.html.twig */
class __TwigTemplate_5d06189aa994efeb72bfec77b7670d6689ea9931bba1d3c03abf04e4ea56bad9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/extensions/whatsapp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/extensions/whatsapp.html.twig"));

        // line 1
        echo "<div class=\"section-whatsapp\">
    <div class=\"uk-section uk-container\">
        <div class=\"uk-grid uk-grid-small uk-flex-middle\" data-uk-grid=\"data-uk-grid\">
            <div class=\"uk-width-1-3@m\">
                <img class=\"section-whatsapp__img\" src=\"/assets/images/img-whatsapp.png\"
                     alt=\"Заявка в WhatsApp\"/>
            </div>
            <div class=\"uk-width-2-3@m\">
                <h3 class=\"section-whatsapp__title\">Заявка в WhatsApp</h3>
                <p class=\"section-whatsapp__desc\">Отправьте нам заявку с фото и получите просчет фиксированной стоимости
                    ремонта вашего ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["brand_model"]) || array_key_exists("brand_model", $context) ? $context["brand_model"] : (function () { throw new RuntimeError('Variable "brand_model" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</p>
                <div class=\"uk-grid uk-grid-small uk-child-width-1-3@s\" data-uk-grid=\"data-uk-grid\">
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "                        <div>
                            <a
                                    class=\"whatsapp-link\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 16), "html", null, true);
            echo "\"
                                    onclick=\"(function(){ga('send', 'event', 'forma', 'whatsApp');})();\"
                                    target=\"_blank\"
                            >
                                <span class=\"whatsapp-link__small\">Написать</span>
                                <span class=\"whatsapp-link__adress\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</span>
                            </a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
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
        return "v2/extensions/whatsapp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  76 => 21,  68 => 16,  64 => 14,  60 => 13,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-whatsapp\">
    <div class=\"uk-section uk-container\">
        <div class=\"uk-grid uk-grid-small uk-flex-middle\" data-uk-grid=\"data-uk-grid\">
            <div class=\"uk-width-1-3@m\">
                <img class=\"section-whatsapp__img\" src=\"/assets/images/img-whatsapp.png\"
                     alt=\"Заявка в WhatsApp\"/>
            </div>
            <div class=\"uk-width-2-3@m\">
                <h3 class=\"section-whatsapp__title\">Заявка в WhatsApp</h3>
                <p class=\"section-whatsapp__desc\">Отправьте нам заявку с фото и получите просчет фиксированной стоимости
                    ремонта вашего {{ brand_model }}</p>
                <div class=\"uk-grid uk-grid-small uk-child-width-1-3@s\" data-uk-grid=\"data-uk-grid\">
                    {% for item in items %}
                        <div>
                            <a
                                    class=\"whatsapp-link\" href=\"{{ item.link }}\"
                                    onclick=\"(function(){ga('send', 'event', 'forma', 'whatsApp');})();\"
                                    target=\"_blank\"
                            >
                                <span class=\"whatsapp-link__small\">Написать</span>
                                <span class=\"whatsapp-link__adress\">{{ item.name }}</span>
                            </a>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</div>", "v2/extensions/whatsapp.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\extensions\\whatsapp.html.twig");
    }
}
