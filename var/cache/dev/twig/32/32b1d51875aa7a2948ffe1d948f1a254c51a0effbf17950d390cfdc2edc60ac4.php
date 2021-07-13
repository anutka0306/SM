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

/* v2/blocks/section/rating_schema.html.twig */
class __TwigTemplate_730c4ece892b404817b568e0c9cf5e7fd215182f44ec1c5d5402bfcf911bd720 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/rating_schema.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/rating_schema.html.twig"));

        // line 1
        if (((((isset($context["page"]) || array_key_exists("page", $context)) &&  !twig_test_empty((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 1, $this->source); })()))) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "ratingValue", [], "any", true, true, false, 1)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 1, $this->source); })()), "ratingValue", [], "any", false, false, false, 1)))) {
            // line 2
            echo "    <div class=\"rating_schema\">
        <div
                class=\"rating_schema_wrapper\"
                itemprop=\"aggregateRating\"
                itemscope=\"itemscope\"
                itemtype=\"http://schema.org/AggregateRating\"
        >

            <div class=\"rating-box\">
                ";
            // line 11
            echo $this->extensions['App\Twig\StarsExtension']->renderStars(4.5);
            echo "
                <meta itemprop=\"worstRating\" content=\"1\">
            </div>

            <div class=\"rating-details\">
              <span>
                    <span class=\"ratingValue\" itemprop=\"ratingValue\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 17, $this->source); })()), "ratingValue", [], "any", false, false, false, 17), "html", null, true);
            echo "</span>
                    <span class=\"text-muted\">из&nbsp;
                        <span itemprop=\"bestRating\">5</span>
                    </span>
                 (<span itemprop=\"ratingCount\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 21, $this->source); })()), "ratingCount", [], "any", false, false, false, 21), "html", null, true);
            echo "</span>&nbsp;оценок)
              </span>
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
        return "v2/blocks/section/rating_schema.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 21,  65 => 17,  56 => 11,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if page is defined and page is not empty and page.ratingValue is defined and page.ratingValue is not empty %}
    <div class=\"rating_schema\">
        <div
                class=\"rating_schema_wrapper\"
                itemprop=\"aggregateRating\"
                itemscope=\"itemscope\"
                itemtype=\"http://schema.org/AggregateRating\"
        >

            <div class=\"rating-box\">
                {{ stars(4.5) }}
                <meta itemprop=\"worstRating\" content=\"1\">
            </div>

            <div class=\"rating-details\">
              <span>
                    <span class=\"ratingValue\" itemprop=\"ratingValue\">{{ page.ratingValue }}</span>
                    <span class=\"text-muted\">из&nbsp;
                        <span itemprop=\"bestRating\">5</span>
                    </span>
                 (<span itemprop=\"ratingCount\">{{ page.ratingCount }}</span>&nbsp;оценок)
              </span>
            </div>
        </div>
    </div>
{% endif %}", "v2/blocks/section/rating_schema.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\section\\rating_schema.html.twig");
    }
}
