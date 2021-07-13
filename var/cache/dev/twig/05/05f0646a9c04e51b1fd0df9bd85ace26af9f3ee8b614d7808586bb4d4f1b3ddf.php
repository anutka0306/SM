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

/* v1/widget/price_list.html.twig */
class __TwigTemplate_42258a47bed6e20f1c97af6f36917c5f9a191c207a965fc95a51ef259560ba1d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/price_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/price_list.html.twig"));

        // line 1
        echo "<div ";
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoadBg($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/prices-bg.png"), [0 => "prices"]);
        echo " id=\"prices\">
    <div class=\"container\">
        <h2 class=\"prices__title\">";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["price_list_title"]) || array_key_exists("price_list_title", $context) ? $context["price_list_title"] : (function () { throw new RuntimeError('Variable "price_list_title" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " цена</h2>
        <div class=\"prices__list\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 6
            echo "                <div class=\"prices__list__main\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "name", [], "any", false, false, false, 6), "html", null, true);
            echo "</div>
                <div class=\"prices__list__content\">
                    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "priceServices", [], "any", false, false, false, 8), function ($__service__) use ($context, $macros) { $context["service"] = $__service__; return twig_get_attribute($this->env, $this->source, $context["service"], "published", [], "any", false, false, false, 8); }));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 9
                echo "                        <div class=\"prices__list__content__item clearfix\">
                            <div class=\"prices__list__content__item__left\">
                                ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["service"], "path", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "path", [], "any", false, false, false, 12), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", true, true, false, 12) &&  !(null === twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", false, false, false, 12)))) ? (twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", false, false, false, 12)) : (twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 12))), "html", null, true);
                    echo "</a>
                                ";
                } else {
                    // line 14
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 14), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 14, $this->source); })()), "brandAndModelName", [], "any", false, false, false, 14), "html", null, true);
                    echo "
                                ";
                }
                // line 16
                echo "                                <span>от ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 16), "html", null, true);
                echo "&nbsp;р.</span>
                            </div>
                            <div class=\"prices__list__content__item__right popup-trigger\" data-title=\"Рассчитать стоимость\">Рассчитать стоимость</div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        </div>
    </div>
</div>
";
        // line 27
        echo twig_include($this->env, $context, "blocks/layout/callback_buttons.html.twig");
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/price_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 27,  109 => 23,  102 => 21,  90 => 16,  82 => 14,  74 => 12,  72 => 11,  68 => 9,  64 => 8,  58 => 6,  54 => 5,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div {{ lazy_load_bg(asset('img/prices-bg.png'),['prices']) }} id=\"prices\">
    <div class=\"container\">
        <h2 class=\"prices__title\">{{ price_list_title }} цена</h2>
        <div class=\"prices__list\">
            {% for section in sections %}
                <div class=\"prices__list__main\">{{ section.name }}</div>
                <div class=\"prices__list__content\">
                    {% for service in section.priceServices|filter(service => service.published )  %}
                        <div class=\"prices__list__content__item clearfix\">
                            <div class=\"prices__list__content__item__left\">
                                {% if service.path %}
                                    <a href=\"{{ service.path }}\">{{ service.nameInPriceList ?? service.name }}</a>
                                {% else %}
                                    {{ service.name }} {{ page.brandAndModelName }}
                                {% endif %}
                                <span>от {{ service.price }}&nbsp;р.</span>
                            </div>
                            <div class=\"prices__list__content__item__right popup-trigger\" data-title=\"Рассчитать стоимость\">Рассчитать стоимость</div>
                        </div>
                    {% endfor %}
                </div>
            {% endfor %}

        </div>
    </div>
</div>
{{ include('blocks/layout/callback_buttons.html.twig') }}", "v1/widget/price_list.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\price_list.html.twig");
    }
}
