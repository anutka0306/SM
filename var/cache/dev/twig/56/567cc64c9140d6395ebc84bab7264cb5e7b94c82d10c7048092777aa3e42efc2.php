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

/* v1/widget/price_list_full.html.twig */
class __TwigTemplate_5ef60f34c630c090138d741a6dcc9a699a7d4aa046609a4786518e52fd0c8305 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/price_list_full.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/price_list_full.html.twig"));

        // line 1
        echo "<div class=\"prices\" id=\"prices\">
    <div class=\"container\">
        <div class=\"prices__list\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 5
            echo "                <div class=\"prices__list__main\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</div>
                <div class=\"prices__list__content\">
                    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["section"], "children", [], "any", false, false, false, 7));
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
            foreach ($context['_seq'] as $context["_key"] => $context["sub_section"]) {
                // line 8
                echo "                        <div class=\"prices__list__main\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_section"], "name", [], "any", false, false, false, 8), "html", null, true);
                echo "</div>
                        <div class=\"prices__list__content\" ";
                // line 9
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 9)) ? ("style=\"display:block\"") : (""));
                echo ">
                            ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_section"], "priceServices", [], "any", false, false, false, 10), function ($__service__) use ($context, $macros) { $context["service"] = $__service__; return twig_get_attribute($this->env, $this->source, $context["service"], "published", [], "any", false, false, false, 10); }));
                foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                    // line 11
                    echo "                                <div class=\"prices__list__content__item clearfix\">
                                    <div class=\"prices__list__content__item__left\">
                                        ";
                    // line 13
                    if (twig_get_attribute($this->env, $this->source, $context["service"], "path", [], "any", false, false, false, 13)) {
                        // line 14
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "path", [], "any", false, false, false, 14), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 14), "html", null, true);
                        echo "</a>
                                        ";
                    } else {
                        // line 16
                        echo "                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 16), "html", null, true);
                        echo "
                                        ";
                    }
                    // line 18
                    echo "                                        <span>от ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 18), "html", null, true);
                    echo "&nbsp;р.</span></div>
                                    <div class=\"prices__list__content__item__right popup-trigger\" data-title=\"Рассчитать стоимость\">Рассчитать стоимость</div>
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/price_list_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 26,  134 => 24,  119 => 22,  108 => 18,  102 => 16,  94 => 14,  92 => 13,  88 => 11,  84 => 10,  80 => 9,  75 => 8,  58 => 7,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"prices\" id=\"prices\">
    <div class=\"container\">
        <div class=\"prices__list\">
            {% for section in sections %}
                <div class=\"prices__list__main\">{{ section.name }}</div>
                <div class=\"prices__list__content\">
                    {% for sub_section in section.children %}
                        <div class=\"prices__list__main\">{{ sub_section.name }}</div>
                        <div class=\"prices__list__content\" {{ loop.first ? 'style=\"display:block\"' }}>
                            {% for service in sub_section.priceServices|filter(service => service.published ) %}
                                <div class=\"prices__list__content__item clearfix\">
                                    <div class=\"prices__list__content__item__left\">
                                        {% if service.path %}
                                            <a href=\"{{ service.path }}\">{{ service.name }}</a>
                                        {% else %}
                                            {{ service.name }}
                                        {% endif %}
                                        <span>от {{ service.price }}&nbsp;р.</span></div>
                                    <div class=\"prices__list__content__item__right popup-trigger\" data-title=\"Рассчитать стоимость\">Рассчитать стоимость</div>
                                </div>
                            {% endfor %}
                        </div>
                    {% endfor %}
                </div>
            {% endfor %}
        </div>
    </div>
</div>", "v1/widget/price_list_full.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\price_list_full.html.twig");
    }
}
