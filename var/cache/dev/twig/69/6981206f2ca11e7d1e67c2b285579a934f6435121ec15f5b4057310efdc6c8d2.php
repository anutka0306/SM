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

/* v2/widget/special_offers.html.twig */
class __TwigTemplate_9fb00272bdcb408790323e0ebb1f5ee374333c43795f3a032ee0e50dcba5469e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/special_offers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/special_offers.html.twig"));

        // line 1
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })())), 0))) {
            // line 2
            echo "    <div class=\"block_promotions\">
        <div class=\"container container2\">
            <h2>Акции и спецпредложения</h2>
            <div class=\"section-gallery\">
                <div class=\"uk-container\">
                    <div class=\"uk-margin-medium-top uk-margin-medium-bottom gallery-slider uk-position-relative\">
                        <div tabindex=\"-1\" data-uk-slider=\"\" class=\"uk-slider uk-slider-container\">
                            <ul class=\"uk-slider-items uk-grid uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s\" data-uk-lightbox=\"data-uk-lightbox\" style=\"transform: translate3d(0px, 0px, 0px);margin: 0 40px 0 15px;\">
                                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
                // line 11
                echo "
                                    <li tabindex=\"-1\" class=\"\" style=\"order: 1;\">
                                        <div class=\"post-slide\">
                                            <div class=\"post-review\">
                                                <h3 class=\"post-title\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", [], "any", false, false, false, 15), "html", null, true);
                echo "</h3>
                                                <p class=\"post-description\">
                                                    ";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["offer"], "description", [], "any", false, false, false, 17);
                echo "
                                                </p>
                                                <div class=\"post-price\">
                                                    <div>
                                                        ";
                // line 21
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["offer"], "oldPrice", [], "any", false, false, false, 21), 0))) {
                    // line 22
                    echo "                                                            <span class=\"old_price\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "oldPrice", [], "any", false, false, false, 22), "html", null, true);
                    echo " руб</span>
                                                        ";
                }
                // line 24
                echo "                                                        <span class=\"new_price\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "newPrice", [], "any", false, false, false, 24), "html", null, true);
                echo " руб</span>
                                                    </div>
                                                    <button class=\"\" data-title=\"ОСТАВИТЬ ЗАЯВКУ\" data-toggle=\"modal\" data-target=\"#callback_popup\">Записаться</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                            </ul>
                            <a class=\"uk-position-center-left uk-icon uk-slidenav-previous uk-slidenav\" href=\"#\" data-uk-slidenav-previous=\"\" data-uk-slider-item=\"previous\"><svg width=\"14px\" height=\"24px\" viewBox=\"0 0 14 24\" xmlns=\"http://www.w3.org/2000/svg\" data-svg=\"slidenav-previous\"><polyline fill=\"none\" stroke=\"#000\" stroke-width=\"1.4\" points=\"12.775,1 1.225,12 12.775,23 \"></polyline></svg></a>
                            <a class=\"uk-position-center-right uk-icon uk-slidenav-next uk-slidenav\" href=\"#\" data-uk-slidenav-next=\"\" data-uk-slider-item=\"next\"><svg width=\"14px\" height=\"24px\" viewBox=\"0 0 14 24\" xmlns=\"http://www.w3.org/2000/svg\" data-svg=\"slidenav-next\"><polyline fill=\"none\" stroke=\"#000\" stroke-width=\"1.4\" points=\"1.225,23 12.775,12 1.225,1 \"></polyline></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/widget/special_offers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  85 => 24,  79 => 22,  77 => 21,  70 => 17,  65 => 15,  59 => 11,  55 => 10,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if items|length > 0 %}
    <div class=\"block_promotions\">
        <div class=\"container container2\">
            <h2>Акции и спецпредложения</h2>
            <div class=\"section-gallery\">
                <div class=\"uk-container\">
                    <div class=\"uk-margin-medium-top uk-margin-medium-bottom gallery-slider uk-position-relative\">
                        <div tabindex=\"-1\" data-uk-slider=\"\" class=\"uk-slider uk-slider-container\">
                            <ul class=\"uk-slider-items uk-grid uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s\" data-uk-lightbox=\"data-uk-lightbox\" style=\"transform: translate3d(0px, 0px, 0px);margin: 0 40px 0 15px;\">
                                {% for offer in items %}

                                    <li tabindex=\"-1\" class=\"\" style=\"order: 1;\">
                                        <div class=\"post-slide\">
                                            <div class=\"post-review\">
                                                <h3 class=\"post-title\">{{ offer.name }}</h3>
                                                <p class=\"post-description\">
                                                    {{ offer.description|raw }}
                                                </p>
                                                <div class=\"post-price\">
                                                    <div>
                                                        {% if offer.oldPrice > 0 %}
                                                            <span class=\"old_price\">{{ offer.oldPrice }} руб</span>
                                                        {% endif %}
                                                        <span class=\"new_price\">{{ offer.newPrice}} руб</span>
                                                    </div>
                                                    <button class=\"\" data-title=\"ОСТАВИТЬ ЗАЯВКУ\" data-toggle=\"modal\" data-target=\"#callback_popup\">Записаться</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                {% endfor %}
                            </ul>
                            <a class=\"uk-position-center-left uk-icon uk-slidenav-previous uk-slidenav\" href=\"#\" data-uk-slidenav-previous=\"\" data-uk-slider-item=\"previous\"><svg width=\"14px\" height=\"24px\" viewBox=\"0 0 14 24\" xmlns=\"http://www.w3.org/2000/svg\" data-svg=\"slidenav-previous\"><polyline fill=\"none\" stroke=\"#000\" stroke-width=\"1.4\" points=\"12.775,1 1.225,12 12.775,23 \"></polyline></svg></a>
                            <a class=\"uk-position-center-right uk-icon uk-slidenav-next uk-slidenav\" href=\"#\" data-uk-slidenav-next=\"\" data-uk-slider-item=\"next\"><svg width=\"14px\" height=\"24px\" viewBox=\"0 0 14 24\" xmlns=\"http://www.w3.org/2000/svg\" data-svg=\"slidenav-next\"><polyline fill=\"none\" stroke=\"#000\" stroke-width=\"1.4\" points=\"1.225,23 12.775,12 1.225,1 \"></polyline></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endif %}", "v2/widget/special_offers.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\widget\\special_offers.html.twig");
    }
}
