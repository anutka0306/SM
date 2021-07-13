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

/* v2/widget/special_offers_item_old.html.twig */
class __TwigTemplate_3e2fa86d249a411b5d30603902dee6cf73eb4c89d7089e456e81c6060fc49c00 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/special_offers_item_old.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/special_offers_item_old.html.twig"));

        // line 1
        echo "<div class=\"stock-item\">
    <div class=\"stock-item__media\">

        <img ";
        // line 4
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 4, $this->source); })()), "imageUrl", [], "any", false, false, false, 4)));
        echo " alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "\" />

        <div class=\"stock-item__title\">
            ";
        // line 7
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 7, $this->source); })()), "slug", [], "any", false, false, false, 7))) {
            // line 8
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skidki_i_akcii_view", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 8, $this->source); })()), "slug", [], "any", false, false, false, 8)]), "html", null, true);
            echo "\">
                    ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 12
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
            echo "
            ";
        }
        // line 14
        echo "        </div>
    </div>
    <div class=\"stock-item__desc\">
        <div class=\"stock-item__intro\">";
        // line 17
        echo twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17);
        echo "</div>
        <div class=\"stock-item__bottom\">
            ";
        // line 19
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 19, $this->source); })()), "oldPrice", [], "any", false, false, false, 19), 0))) {
            // line 20
            echo "                <div class=\"stock-item__price\">
                ";
            // line 21
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 21, $this->source); })()), "oldPrice", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 21, $this->source); })()), "newPrice", [], "any", false, false, false, 21)))) {
                // line 22
                echo "                        <span class=\"current\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 22, $this->source); })()), "newPrice", [], "any", false, false, false, 22), "html", null, true);
                echo " р</span>
                        <span class=\"old\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 23, $this->source); })()), "oldPrice", [], "any", false, false, false, 23), "html", null, true);
                echo " р</span>
                ";
            } else {
                // line 25
                echo "                    <span class=\"current\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 25, $this->source); })()), "newPrice", [], "any", false, false, false, 25), "html", null, true);
                echo " р</span>
                ";
            }
            // line 27
            echo "                </div>
            ";
        }
        // line 29
        echo "
            <div class=\"stock-item__btn\">
                <a href=\"#\" class=\"js-popup-trigger\">Записаться</a>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/widget/special_offers_item_old.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 29,  108 => 27,  102 => 25,  97 => 23,  92 => 22,  90 => 21,  87 => 20,  85 => 19,  80 => 17,  75 => 14,  69 => 12,  63 => 9,  58 => 8,  56 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"stock-item\">
    <div class=\"stock-item__media\">

        <img {{ lazy_load(asset(offer.imageUrl)) }} alt=\"{{ offer.name }}\" />

        <div class=\"stock-item__title\">
            {% if offer.slug is not empty %}
                <a href=\"{{ path('skidki_i_akcii_view',{'slug':offer.slug}) }}\">
                    {{ offer.name }}
                </a>
            {% else %}
                {{ offer.name }}
            {% endif %}
        </div>
    </div>
    <div class=\"stock-item__desc\">
        <div class=\"stock-item__intro\">{{ offer.description|raw }}</div>
        <div class=\"stock-item__bottom\">
            {% if(offer.oldPrice > 0) %}
                <div class=\"stock-item__price\">
                {% if(offer.oldPrice > offer.newPrice) %}
                        <span class=\"current\">{{ offer.newPrice }} р</span>
                        <span class=\"old\">{{ offer.oldPrice }} р</span>
                {% else %}
                    <span class=\"current\">{{ offer.newPrice }} р</span>
                {% endif %}
                </div>
            {% endif %}

            <div class=\"stock-item__btn\">
                <a href=\"#\" class=\"js-popup-trigger\">Записаться</a>
            </div>
        </div>
    </div>
</div>", "v2/widget/special_offers_item_old.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\widget\\special_offers_item_old.html.twig");
    }
}
