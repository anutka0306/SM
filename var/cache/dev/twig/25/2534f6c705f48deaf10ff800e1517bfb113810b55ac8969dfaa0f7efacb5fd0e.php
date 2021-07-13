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

/* sitemap/sitemap_part.html.twig */
class __TwigTemplate_ae4344fc8da37b695d0969f3048e034572de249a0372d7f11a4b6a6632fc3d80 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/sitemap_part.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/sitemap_part.html.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset
        xmlns:xsi=\"https://www.w3.org/2001/XMLSchema-instance\"
        xmlns=\"https://www.sitemaps.org/schemas/sitemap/0.9\"
        xsi:schemaLocation=\"https://www.sitemaps.org/schemas/sitemap/0.9 https://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\"
>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 9
            echo "            <url>
                <loc>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 10), "html", null, true);
            echo "</loc>
                <lastmod>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "date", [], "any", false, false, false, 11), "Y-m-d\\TH:i:sP"), "html", null, true);
            echo "</lastmod>
            </url>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
</urlset>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sitemap/sitemap_part.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  63 => 11,  59 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset
        xmlns:xsi=\"https://www.w3.org/2001/XMLSchema-instance\"
        xmlns=\"https://www.sitemaps.org/schemas/sitemap/0.9\"
        xsi:schemaLocation=\"https://www.sitemaps.org/schemas/sitemap/0.9 https://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\"
>

    {% for url in urls %}
            <url>
                <loc>{{ url.loc }}</loc>
                <lastmod>{{ url.date|date(\"Y-m-d\\\\TH:i:sP\") }}</lastmod>
            </url>
    {% endfor %}

</urlset>", "sitemap/sitemap_part.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\sitemap\\sitemap_part.html.twig");
    }
}
