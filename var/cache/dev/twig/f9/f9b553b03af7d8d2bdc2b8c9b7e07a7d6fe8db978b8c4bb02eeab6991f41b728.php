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

/* v1/widget/service_menu.html.twig */
class __TwigTemplate_12419ce6444232f19daac500aa95bbd183e6d97ba689b30dd07db0a42c696b92 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/service_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/service_menu.html.twig"));

        // line 1
        echo "<div class=\"services\" id=\"services\">
    <div class=\"container\">
        <h2 class=\"services__title\">Услуги</h2>
        <div class=\"services__items\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 6
            echo "            <div class=\"services__items__item\">
                <img ";
            // line 7
            echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["service"], "img", [], "any", false, false, false, 7)));
            echo " alt=\"\">
                <div class=\"img-overlay\"></div>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "link", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
                    <div class=\"services__items__item__text\">
                        <div class=\"services__items__item__text__price\">от ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 11), "html", null, true);
            echo " <span>р</span>
                        </div>
                        <div class=\"services__items__item__text__name\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</div>
                    </div>
                </a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/service_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  71 => 13,  66 => 11,  61 => 9,  56 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"services\" id=\"services\">
    <div class=\"container\">
        <h2 class=\"services__title\">Услуги</h2>
        <div class=\"services__items\">
            {% for service in services %}
            <div class=\"services__items__item\">
                <img {{ lazy_load(asset(service.img)) }} alt=\"\">
                <div class=\"img-overlay\"></div>
                <a href=\"{{ service.link }}\">
                    <div class=\"services__items__item__text\">
                        <div class=\"services__items__item__text__price\">от {{ service.price }} <span>р</span>
                        </div>
                        <div class=\"services__items__item__text__name\">{{ service.name }}</div>
                    </div>
                </a>
            </div>
            {% endfor %}

        </div>
    </div>
</div>", "v1/widget/service_menu.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\service_menu.html.twig");
    }
}
