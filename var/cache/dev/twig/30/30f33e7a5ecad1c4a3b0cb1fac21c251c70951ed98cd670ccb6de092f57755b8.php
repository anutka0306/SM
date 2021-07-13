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

/* sitemap_old/index.xml.twig */
class __TwigTemplate_eba4dbcffd9d10da062863722e550f8ce06939bb3abcf68c66a3d40a9337921e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap_old/index.xml.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap_old/index.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset
        xmlns:xsi=\"https://www.w3.org/2001/XMLSchema-instance\"
        xmlns=\"https://www.sitemaps.org/schemas/sitemap/0.9\"
        xsi:schemaLocation=\"https://www.sitemaps.org/schemas/sitemap/0.9 https://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\"
>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 8
            echo "    <url>
        <loc>";
            // line 9
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "schemeAndHttpHost", [], "any", false, false, false, 9) . twig_get_attribute($this->env, $this->source, $context["page"], "path", [], "any", false, false, false, 9)), "html", null, true);
            echo "</loc>
        <lastmod>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "modifyDate", [], "any", false, false, false, 10), "Y-m-d\\TH:i:sP"), "html", null, true);
            echo "</lastmod>
    </url>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</urlset>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sitemap_old/index.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  62 => 10,  58 => 9,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset
        xmlns:xsi=\"https://www.w3.org/2001/XMLSchema-instance\"
        xmlns=\"https://www.sitemaps.org/schemas/sitemap/0.9\"
        xsi:schemaLocation=\"https://www.sitemaps.org/schemas/sitemap/0.9 https://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\"
>
{% for page in pages %}
    <url>
        <loc>{{ app.request.schemeAndHttpHost~page.path }}</loc>
        <lastmod>{{ page.modifyDate|date(\"Y-m-d\\\\TH:i:sP\") }}</lastmod>
    </url>
{% endfor %}
</urlset>
", "sitemap_old/index.xml.twig", "C:\\OpenServer\\domains\\SM\\templates\\sitemap_old\\index.xml.twig");
    }
}
