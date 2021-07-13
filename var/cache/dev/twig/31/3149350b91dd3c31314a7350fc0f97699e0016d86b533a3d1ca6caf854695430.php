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

/* v2/extensions/offcanvas.html.twig */
class __TwigTemplate_650718d5a671f4356ad9978e3943f59315adf9d0dce799e62810b665a3ca61b4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/extensions/offcanvas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/extensions/offcanvas.html.twig"));

        // line 1
        echo "<div id=\"mobile-menu\" data-uk-offcanvas=\"mode: reveal\">
    <div class=\"uk-offcanvas-bar\"><button class=\"uk-offcanvas-close\" type=\"button\" data-uk-close=\"\"></button>
        <div class=\"uk-margin-remove-top\">
            <div class=\"logo\"><img class=\"logo__img\" src=\"/assets/images/logo.png\" alt=\"DETAILINGOF\" /></div>
        </div>
        <div class=\"uk-margin\">
            <ul class=\"uk-nav uk-nav-default uk-nav-parent-icon\" data-uk-nav=\"multiple: true\">
                <li class=\"uk-parent\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uslugi");
        echo "\">Услуги</a>
                    <ul class=\"uk-nav-sub\">
                        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                        ";
            // line 12
            echo "                        <li class=\"uk-parent\">
                            <a href=\"#\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</a>
                            <ul class=\"uk-nav-sub\">
                                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 16
                echo "                                    ";
                // line 17
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "path", [], "any", false, false, false, 17), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 17), "html", null, true);
                echo "</a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                            </ul>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    </ul>
                </li>
                ";
        // line 24
        echo twig_include($this->env, $context, "v2/blocks/include/main_menu_items.html.twig");
        echo "
            </ul>
        </div>
        <div class=\"uk-margin\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['App\Twig\SalonExtension']->salons((($context["page"]) ?? (null))));
        foreach ($context['_seq'] as $context["_key"] => $context["salon"]) {
            // line 29
            echo "                ";
            // line 30
            echo "                <div class=\"contact-item\">
                    <a class=\"phone-link mgo-number-";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "mangoId", [], "any", false, false, false, 31), "html", null, true);
            echo "\" href=\"tel:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "phoneDigits", [], "any", false, false, false, 31), "html", null, true);
            echo "\" onclick=\"yaCounter41408589.reachGoal ('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "yandexTarget", [], "any", false, false, false, 31), "html", null, true);
            echo "');location.href='tel:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "phoneDigits", [], "any", false, false, false, 31), "html", null, true);
            echo "'; return true;\">
                        ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "phone", [], "any", false, false, false, 32), "html", null, true);
            echo "
                    </a>
                    <a class=\"adress-link\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "googleMapLink", [], "any", false, false, false, 34), "html", null, true);
            echo "\" target=\"_blank\">
                        ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salon"], "address", [], "any", false, false, false, 35), "html", null, true);
            echo "
                    </a>
                </div>
                <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/extensions/offcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 40,  135 => 35,  131 => 34,  126 => 32,  116 => 31,  113 => 30,  111 => 29,  107 => 28,  100 => 24,  96 => 22,  88 => 19,  77 => 17,  75 => 16,  71 => 15,  66 => 13,  63 => 12,  61 => 11,  57 => 10,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"mobile-menu\" data-uk-offcanvas=\"mode: reveal\">
    <div class=\"uk-offcanvas-bar\"><button class=\"uk-offcanvas-close\" type=\"button\" data-uk-close=\"\"></button>
        <div class=\"uk-margin-remove-top\">
            <div class=\"logo\"><img class=\"logo__img\" src=\"/assets/images/logo.png\" alt=\"DETAILINGOF\" /></div>
        </div>
        <div class=\"uk-margin\">
            <ul class=\"uk-nav uk-nav-default uk-nav-parent-icon\" data-uk-nav=\"multiple: true\">
                <li class=\"uk-parent\"><a href=\"{{ path('uslugi') }}\">Услуги</a>
                    <ul class=\"uk-nav-sub\">
                        {% for item in items %}
                        {# @var item \\App\\Dto\\ServiceMenuItemDto #}
                        <li class=\"uk-parent\">
                            <a href=\"#\">{{ item.name }}</a>
                            <ul class=\"uk-nav-sub\">
                                {% for service in item.items %}
                                    {# @var service \\App\\Entity\\RootService #}
                                    <li><a href=\"{{ service.path }}\">{{ service.name }}</a></li>
                                {% endfor %}
                            </ul>
                        </li>
                        {% endfor %}
                    </ul>
                </li>
                {{ include('v2/blocks/include/main_menu_items.html.twig') }}
            </ul>
        </div>
        <div class=\"uk-margin\">
            {% for salon in salons(page ?? null) %}
                {# @var salon \\App\\Entity\\Salon #}
                <div class=\"contact-item\">
                    <a class=\"phone-link mgo-number-{{ salon.mangoId }}\" href=\"tel:{{ salon.phoneDigits }}\" onclick=\"yaCounter41408589.reachGoal ('{{ salon.yandexTarget }}');location.href='tel:{{ salon.phoneDigits }}'; return true;\">
                        {{ salon.phone }}
                    </a>
                    <a class=\"adress-link\" href=\"{{ salon.googleMapLink }}\" target=\"_blank\">
                        {{ salon.address }}
                    </a>
                </div>
                <hr/>
            {% endfor %}
        </div>
    </div>
</div>", "v2/extensions/offcanvas.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\extensions\\offcanvas.html.twig");
    }
}
