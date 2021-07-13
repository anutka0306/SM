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

/* sitemap_old/index_splinted.xml.twig */
class __TwigTemplate_72413381c914055b8118f455dc227543a4b8f4017186d8d99e2542a3df4e75c0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap_old/index_splinted.xml.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap_old/index_splinted.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 4
            echo "        <sitemap>
            <loc>";
            // line 5
            echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "schemeAndHttpHost", [], "any", false, false, false, 5) . "/") . (isset($context["parts_folder_name"]) || array_key_exists("parts_folder_name", $context) ? $context["parts_folder_name"] : (function () { throw new RuntimeError('Variable "parts_folder_name" does not exist.', 5, $this->source); })())) . "/") . $context["file"]), "html", null, true);
            echo "</loc>
            <lastmod>";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
            echo "</lastmod>
        </sitemap>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</sitemapindex>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sitemap_old/index_splinted.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  58 => 6,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
{% for file in files %}
        <sitemap>
            <loc>{{ app.request.schemeAndHttpHost~'/'~parts_folder_name~'/'~file }}</loc>
            <lastmod>{{ 'now'|date(\"Y-m-d\") }}</lastmod>
        </sitemap>
{% endfor %}
</sitemapindex>", "sitemap_old/index_splinted.xml.twig", "C:\\OpenServer\\domains\\SM\\templates\\sitemap_old\\index_splinted.xml.twig");
    }
}
