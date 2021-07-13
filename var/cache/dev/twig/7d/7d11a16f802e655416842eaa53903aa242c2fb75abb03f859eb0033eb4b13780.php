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

/* sitemap/sitemap.html.twig */
class __TwigTemplate_9773e50d172c8268dde7965e1ba6108f317600029bd40b25022bff834c56ac7b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/sitemap.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/sitemap.html.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["sitemaps_count"]) || array_key_exists("sitemaps_count", $context) ? $context["sitemaps_count"] : (function () { throw new RuntimeError('Variable "sitemaps_count" does not exist.', 3, $this->source); })()) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "        <sitemap>
            <loc>";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "/sitemap_";
            echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
            echo ".xml</loc>
            <lastmod>";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
            echo "</lastmod>
        </sitemap>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</sitemapindex>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sitemap/sitemap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  60 => 6,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    {% for i in 0..sitemaps_count-1 %}
        <sitemap>
            <loc>{{ hostname }}/sitemap_{{ i + 1 }}.xml</loc>
            <lastmod>{{ 'now'|date(\"Y-m-d\") }}</lastmod>
        </sitemap>
    {% endfor %}
</sitemapindex>

", "sitemap/sitemap.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\sitemap\\sitemap.html.twig");
    }
}
