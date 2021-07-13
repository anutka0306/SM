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

/* v2/widget/special_offers_old.html.twig */
class __TwigTemplate_1cf8310b9d579a2485dc97d2ef3359a4003a35fd0e863366a5ada37b18413f1e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/special_offers_old.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/special_offers_old.html.twig"));

        // line 1
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })())), 0))) {
            // line 2
            echo "    <div class=\"section-stock\">
        <div class=\"uk-section uk-container\">
            <div class=\"uk-position-relative\">
                <h3 class=\"section-title\"><span>Акции</span></h3>
                <div class=\"stock-slider uk-position-relative\">
                    <div tabindex=\"-1\" data-uk-slider=\"\">
                        <ul class=\"uk-slider-items uk-grid uk-child-width-1-3@l uk-child-width-1-2@s\" data-uk-height-match=\".stock-item__title, .stock-item__intro\">
                            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 9, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
                // line 10
                echo "                                <li>
                                    ";
                // line 11
                echo twig_include($this->env, $context, "v2/widget/special_offers_item.html.twig");
                echo "
                                </li>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                        </ul><a class=\"uk-position-center-left\" href=\"#\" data-uk-slidenav-previous=\"\" data-uk-slider-item=\"previous\"></a><a class=\"uk-position-center-right\" href=\"#\" data-uk-slidenav-next=\"\" data-uk-slider-item=\"next\"></a></div>
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
        return "v2/widget/special_offers_old.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 14,  74 => 11,  71 => 10,  54 => 9,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if items|length > 0 %}
    <div class=\"section-stock\">
        <div class=\"uk-section uk-container\">
            <div class=\"uk-position-relative\">
                <h3 class=\"section-title\"><span>Акции</span></h3>
                <div class=\"stock-slider uk-position-relative\">
                    <div tabindex=\"-1\" data-uk-slider=\"\">
                        <ul class=\"uk-slider-items uk-grid uk-child-width-1-3@l uk-child-width-1-2@s\" data-uk-height-match=\".stock-item__title, .stock-item__intro\">
                            {% for offer in items %}
                                <li>
                                    {{ include('v2/widget/special_offers_item.html.twig') }}
                                </li>
                            {% endfor %}
                        </ul><a class=\"uk-position-center-left\" href=\"#\" data-uk-slidenav-previous=\"\" data-uk-slider-item=\"previous\"></a><a class=\"uk-position-center-right\" href=\"#\" data-uk-slidenav-next=\"\" data-uk-slider-item=\"next\"></a></div>
                </div>
            </div>
        </div>
    </div>
{% endif %}", "v2/widget/special_offers_old.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\widget\\special_offers_old.html.twig");
    }
}
