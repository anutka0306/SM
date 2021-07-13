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

/* elements/_price_list_orders.html.twig */
class __TwigTemplate_547c390469b386bd9b05bb479658ae857a480d711136b68e3078c706732cb1d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_price_list_orders.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_price_list_orders.html.twig"));

        // line 1
        echo "<h2>";
        echo twig_escape_filter($this->env, (isset($context["price_list_title"]) || array_key_exists("price_list_title", $context) ? $context["price_list_title"] : (function () { throw new RuntimeError('Variable "price_list_title" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "</h2>
<div class=\"price-list-orders\">
  <div class=\"container container2\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-lg-2 mb-4\">
        <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 7, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 8
            echo "          <a class=\"price-list-category nav-link ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 8), 1))) {
                echo " active ";
            }
            echo "\"
             id=\"v-pills-settings";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "-tab\" data-toggle=\"pill\" href=\"#v-pills-settings";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\" role=\"tab\" aria-controls=\"v-pills-settings";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\" aria-selected=\"false\">
              ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "
          </a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </div>
      </div>

      <div class=\"col-sm-12 col-lg-10\">
        <div class=\"tab-content\" id=\"v-pills-tabContent\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 18, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 19
            echo "          <div class=\"tab-pane fade ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19), 1))) {
                echo " active show";
            }
            echo "\" id=\"v-pills-settings";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">
              ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "priceServices", [], "any", false, false, false, 20), function ($__service__) use ($context, $macros) { $context["service"] = $__service__; return twig_get_attribute($this->env, $this->source, $context["service"], "published", [], "any", false, false, false, 20); }));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 21
                echo "
                 <div class=\"price_list_orders-line\">
                <div class=\"price_list_orders-line-text\">

                   ";
                // line 26
                echo "
                    ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["service"], "path", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "path", [], "any", false, false, false, 28), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", true, true, false, 28) &&  !(null === twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", false, false, false, 28)))) ? (twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", false, false, false, 28)) : (twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 28))), "html", null, true);
                    echo "</a>
                    ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 29
$context["service"], "slug", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "                           <a ";
                    echo " href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "slug", [], "any", false, false, false, 30), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", true, true, false, 30) &&  !(null === twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", false, false, false, 30)))) ? (twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", false, false, false, 30)) : (twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 30))), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 32
                    echo "                        <span style=\"color: red\">";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", true, true, false, 32) &&  !(null === twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", false, false, false, 32)))) ? (twig_get_attribute($this->env, $this->source, $context["service"], "nameInPriceList", [], "any", false, false, false, 32)) : (twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 32))), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 34
                echo "                    <b> &nbsp;от ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 34), "html", null, true);
                echo "&nbsp;р.</b>
                </div>
                <div class=\"price_list_orders-line-url\"><a href=\"#\" type=\"button\" data-title=\"ЗАПИСАТЬСЯ ОНЛАЙН\" data-toggle=\"modal\" data-target=\"#callback_popup\">Записаться</a></div>
            </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "          </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </div>
      </div>
    </div>
  </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "elements/_price_list_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 41,  186 => 39,  174 => 34,  168 => 32,  159 => 30,  157 => 29,  150 => 28,  148 => 27,  145 => 26,  139 => 21,  135 => 20,  126 => 19,  109 => 18,  102 => 13,  85 => 10,  77 => 9,  70 => 8,  53 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ price_list_title }}</h2>
<div class=\"price-list-orders\">
  <div class=\"container container2\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-lg-2 mb-4\">
        <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
            {% for section in sections %}
          <a class=\"price-list-category nav-link {% if(loop.index == 1) %} active {% endif %}\"
             id=\"v-pills-settings{{ section.id }}-tab\" data-toggle=\"pill\" href=\"#v-pills-settings{{ section.id }}\" role=\"tab\" aria-controls=\"v-pills-settings{{ section.id }}\" aria-selected=\"false\">
              {{ section.name }}
          </a>
            {% endfor %}
        </div>
      </div>

      <div class=\"col-sm-12 col-lg-10\">
        <div class=\"tab-content\" id=\"v-pills-tabContent\">
            {% for section in sections %}
          <div class=\"tab-pane fade {% if(loop.index == 1) %} active show{% endif %}\" id=\"v-pills-settings{{ section.id }}\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">
              {% for service in section.priceServices|filter(service => service.published ) %}

                 <div class=\"price_list_orders-line\">
                <div class=\"price_list_orders-line-text\">

                   {# {% if(loop.index == 1) %} {{ dump(service) }}{% endif %}#}

                    {% if service.path %}
                    <a href=\"{{ service.path }}\">{{ service.nameInPriceList ?? service.name }}</a>
                    {% elseif service.slug %}
                           <a {#style=\"color:blue\"#} href=\"{{ service.slug }}\">{{ service.nameInPriceList ?? service.name }}</a>
                        {% else %}
                        <span style=\"color: red\">{{ service.nameInPriceList ?? service.name }}</span>
                    {% endif %}
                    <b> &nbsp;от {{ service.price }}&nbsp;р.</b>
                </div>
                <div class=\"price_list_orders-line-url\"><a href=\"#\" type=\"button\" data-title=\"ЗАПИСАТЬСЯ ОНЛАЙН\" data-toggle=\"modal\" data-target=\"#callback_popup\">Записаться</a></div>
            </div>
              {% endfor %}
          </div>
            {% endfor %}
        </div>
      </div>
    </div>
  </div>
</div>", "elements/_price_list_orders.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\elements\\_price_list_orders.html.twig");
    }
}
