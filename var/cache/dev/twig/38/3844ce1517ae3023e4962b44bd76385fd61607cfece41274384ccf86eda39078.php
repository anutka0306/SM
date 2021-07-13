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

/* v1/blocks/rating_schema.html.twig */
class __TwigTemplate_b06ff58ab90784c98218fedff9708a4a55e394c1e36610c56b7322671dbeb478 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/rating_schema.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/rating_schema.html.twig"));

        // line 1
        echo "<section class=\"rating_schema\">
    <div class=\"container\">
        <div
                class=\"pl-4 mt-2 row\"
                itemprop=\"aggregateRating\"
                itemscope=\"itemscope\"
                itemtype=\"http://schema.org/AggregateRating\"
        >
            <div class=\"col-md-4 col-12\">
                <div class=\"rating-box mr-2\">
                    ";
        // line 11
        echo $this->extensions['App\Twig\StarsExtension']->renderStars(4.5);
        echo "
                </div>
                <meta itemprop=\"worstRating\" content=\"1\">
            </div>

            <div class=\"rating-details col-md-8 col-12\">
              <span class=\"ml-3\">
                    <strong>
                        <span itemprop=\"ratingValue\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()), "ratingValue", [], "any", false, false, false, 19), "html", null, true);
        echo "</span>
                    </strong>&nbsp;
                    <span class=\"text-muted\">из&nbsp;
                        <span itemprop=\"bestRating\">5</span>
                    </span>
                </span>
                <em class=\"small text-muted\">
                    (<span itemprop=\"ratingCount\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 26, $this->source); })()), "ratingCount", [], "any", false, false, false, 26), "html", null, true);
        echo "</span>&nbsp;оценок). Рейтинг составлен, благодаря отзывам от наших клиентов
                </em>
            </div>


        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/blocks/rating_schema.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  66 => 19,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"rating_schema\">
    <div class=\"container\">
        <div
                class=\"pl-4 mt-2 row\"
                itemprop=\"aggregateRating\"
                itemscope=\"itemscope\"
                itemtype=\"http://schema.org/AggregateRating\"
        >
            <div class=\"col-md-4 col-12\">
                <div class=\"rating-box mr-2\">
                    {{ stars(4.5) }}
                </div>
                <meta itemprop=\"worstRating\" content=\"1\">
            </div>

            <div class=\"rating-details col-md-8 col-12\">
              <span class=\"ml-3\">
                    <strong>
                        <span itemprop=\"ratingValue\">{{ page.ratingValue }}</span>
                    </strong>&nbsp;
                    <span class=\"text-muted\">из&nbsp;
                        <span itemprop=\"bestRating\">5</span>
                    </span>
                </span>
                <em class=\"small text-muted\">
                    (<span itemprop=\"ratingCount\">{{ page.ratingCount }}</span>&nbsp;оценок). Рейтинг составлен, благодаря отзывам от наших клиентов
                </em>
            </div>


        </div>
    </div>
</section>", "v1/blocks/rating_schema.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\blocks\\rating_schema.html.twig");
    }
}
