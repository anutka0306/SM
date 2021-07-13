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

/* v2/widget/brands.html.twig */
class __TwigTemplate_bbbb8af106ac9a4b6751fbb9546538d1d791c45a3023515b50a06a6eff2c7839 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/brands.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/brands.html.twig"));

        // line 1
        echo "<div class=\"tab-content\" id=\"v-pills-tabContent\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 2, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 3
            echo "
    <div class=\"tab-pane fade ";
            // line 4
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 4), 1))) {
                echo "show active ";
            }
            echo "\" id=\"v-pills-brands";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
        <div class=\"row\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 6, $this->source); })()), 10));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 7
                echo "            <div class=\"col-md-2\">
                ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                    // line 9
                    echo "
                    ";
                    // line 10
                    if (twig_get_attribute($this->env, $this->source, $context["service"], "slug", [], "any", false, false, false, 10)) {
                        // line 11
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["brand"], "service_url", [], "any", false, false, false, 11)) {
                            // line 12
                            echo "                        <div class=\"price-title brands-list__block_item\"><a href=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["brand"], "service_url", [], "any", false, false, false, 12), "path", [], "any", false, false, false, 12), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 12), "html", null, true);
                            echo "</a></div>
                            ";
                        } else {
                            // line 14
                            echo "                                <div class=\"price-title brands-list__block_item\"><a href=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "path", [], "any", false, false, false, 14), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 14), "html", null, true);
                            echo "</a></div>
                            ";
                        }
                        // line 16
                        echo "                    ";
                    } else {
                        // line 17
                        echo "                        <div class=\"price-title brands-list__block_item\"><a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "path", [], "any", false, false, false, 17), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 17), "html", null, true);
                        echo "</a></div>
                    ";
                    }
                    // line 19
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
        </div>
    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/widget/brands.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 26,  136 => 22,  129 => 20,  123 => 19,  115 => 17,  112 => 16,  104 => 14,  96 => 12,  93 => 11,  91 => 10,  88 => 9,  84 => 8,  81 => 7,  77 => 6,  66 => 4,  63 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tab-content\" id=\"v-pills-tabContent\">
    {% for service in services %}

    <div class=\"tab-pane fade {% if(loop.index == 1) %}show active {% endif %}\" id=\"v-pills-brands{{ service.id }}\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab{{ service.id }}\">
        <div class=\"row\">
            {% for row in items|batch(10) %}
            <div class=\"col-md-2\">
                {% for brand in row %}

                    {% if service.slug %}
                        {% if brand.service_url %}
                        <div class=\"price-title brands-list__block_item\"><a href=\"{{ brand.service_url.path}}\">{{ brand.name }}</a></div>
                            {% else %}
                                <div class=\"price-title brands-list__block_item\"><a href=\"{{ brand.path}}\">{{ brand.name }}</a></div>
                            {% endif %}
                    {% else %}
                        <div class=\"price-title brands-list__block_item\"><a href=\"{{ brand.path }}\">{{ brand.name }}</a></div>
                    {% endif %}
                {% endfor %}
            </div>
            {% endfor %}

        </div>
    </div>
    {% endfor %}
</div>", "v2/widget/brands.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\widget\\brands.html.twig");
    }
}
