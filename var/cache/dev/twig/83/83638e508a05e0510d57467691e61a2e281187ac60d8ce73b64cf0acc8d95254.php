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

/* v2/extensions/mainmenu_old.html.twig */
class __TwigTemplate_2528d58a222d4c7c46820424712f35351688cc0ba31862d4fec5e7fb37d40992 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/extensions/mainmenu_old.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/extensions/mainmenu_old.html.twig"));

        // line 1
        echo "<nav class=\"nav\">
    <ul class=\"nav-list\" data-uk-navbar=\"\">
        <li class=\"uk-parent\"><a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uslugi");
        echo "\">Услуги</a>
            <div class=\"uk-navbar-dropdown\" uk-drop=\"boundary: .page-header__bottom-inner; boundary-align: true; pos: bottom-justify;\">
                <div class=\"uk-grid-small uk-child-width-1-4\" data-uk-grid=\"\">
                    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "                        ";
            // line 8
            echo "                        <div>
                            <ul class=\"uk-nav uk-navbar-dropdown-nav\">
                                <li class=\"uk-nav-header\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</li>
                                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 12
                echo "                                    ";
                // line 13
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "path", [], "any", false, false, false, 13), "html", null, true);
                echo "#content\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 13), "html", null, true);
                echo "</a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "mainLink", [], "any", false, false, false, 15), "html", null, true);
            echo "#content\">Все услуги</a></li>
                            </ul>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </div>
            </div>
        </li>
        ";
        // line 22
        echo twig_include($this->env, $context, "v2/blocks/include/main_menu_items.html.twig");
        echo "
    </ul>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/extensions/mainmenu_old.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  95 => 19,  84 => 15,  73 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 8,  57 => 7,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"nav\">
    <ul class=\"nav-list\" data-uk-navbar=\"\">
        <li class=\"uk-parent\"><a href=\"{{ path('uslugi') }}\">Услуги</a>
            <div class=\"uk-navbar-dropdown\" uk-drop=\"boundary: .page-header__bottom-inner; boundary-align: true; pos: bottom-justify;\">
                <div class=\"uk-grid-small uk-child-width-1-4\" data-uk-grid=\"\">
                    {% for item in items %}
                        {# @var item \\App\\Dto\\ServiceMenuItemDto #}
                        <div>
                            <ul class=\"uk-nav uk-navbar-dropdown-nav\">
                                <li class=\"uk-nav-header\">{{ item.name }}</li>
                                {% for service in item.items %}
                                    {# @var service \\App\\Entity\\RootService #}
                                    <li><a href=\"{{ service.path }}#content\">{{ service.name }}</a></li>
                                {% endfor %}
                                <li><a href=\"{{ item.mainLink }}#content\">Все услуги</a></li>
                            </ul>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </li>
        {{ include('v2/blocks/include/main_menu_items.html.twig') }}
    </ul>
</nav>", "v2/extensions/mainmenu_old.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\extensions\\mainmenu_old.html.twig");
    }
}
