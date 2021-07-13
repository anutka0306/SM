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

/* v1/widget/special_offers_item.html.twig */
class __TwigTemplate_3ff76b412769b4a852ebd2757cc5c4f19548aa37d7ea347d8bf9844039fd48d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/special_offers_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/special_offers_item.html.twig"));

        // line 1
        echo "<div class=\"special_offers__card-block\">
    <div class=\"card\">
        <b class=\"card-zag\">
            ";
        // line 4
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 4, $this->source); })()), "slug", [], "any", false, false, false, 4))) {
            // line 5
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skidki_i_akcii_view", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 5, $this->source); })()), "slug", [], "any", false, false, false, 5)]), "html", null, true);
            echo "\">
                    ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
            echo "
            ";
        }
        // line 11
        echo "        </b>
        <p class=\"card-description\">";
        // line 12
        echo twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12);
        echo "</p>
        <div class=\"cena-wrap\">
            <div>
                ";
        // line 15
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 15, $this->source); })()), "oldPrice", [], "any", false, false, false, 15), 0))) {
            // line 16
            echo "                    ";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 16, $this->source); })()), "oldPrice", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 16, $this->source); })()), "newPrice", [], "any", false, false, false, 16)))) {
                // line 17
                echo "                        <span class=\"stcena\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 17, $this->source); })()), "oldPrice", [], "any", false, false, false, 17), "html", null, true);
                echo " руб</span>
                        <span class=\"newcena \">";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 18, $this->source); })()), "newPrice", [], "any", false, false, false, 18), "html", null, true);
                echo " руб</span>
                    ";
            } else {
                // line 20
                echo "                        <span class=\"newcena \">от ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offer"]) || array_key_exists("offer", $context) ? $context["offer"] : (function () { throw new RuntimeError('Variable "offer" does not exist.', 20, $this->source); })()), "newPrice", [], "any", false, false, false, 20), "html", null, true);
                echo " руб</span>
                    ";
            }
            // line 22
            echo "
                ";
        }
        // line 24
        echo "            </div>
            <div class=\"primary_button popup-trigger\" data-title=\"Записаться\">Записаться</div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/special_offers_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  97 => 22,  91 => 20,  86 => 18,  81 => 17,  78 => 16,  76 => 15,  70 => 12,  67 => 11,  61 => 9,  55 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"special_offers__card-block\">
    <div class=\"card\">
        <b class=\"card-zag\">
            {% if offer.slug is not empty %}
                <a href=\"{{ path('skidki_i_akcii_view',{'slug':offer.slug}) }}\">
                    {{ offer.name }}
                </a>
            {% else %}
                {{ offer.name }}
            {% endif %}
        </b>
        <p class=\"card-description\">{{ offer.description|raw }}</p>
        <div class=\"cena-wrap\">
            <div>
                {% if(offer.oldPrice > 0) %}
                    {% if(offer.oldPrice > offer.newPrice) %}
                        <span class=\"stcena\">{{ offer.oldPrice }} руб</span>
                        <span class=\"newcena \">{{ offer.newPrice }} руб</span>
                    {% else %}
                        <span class=\"newcena \">от {{ offer.newPrice }} руб</span>
                    {% endif %}

                {% endif %}
            </div>
            <div class=\"primary_button popup-trigger\" data-title=\"Записаться\">Записаться</div>
        </div>
    </div>
</div>", "v1/widget/special_offers_item.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\special_offers_item.html.twig");
    }
}
