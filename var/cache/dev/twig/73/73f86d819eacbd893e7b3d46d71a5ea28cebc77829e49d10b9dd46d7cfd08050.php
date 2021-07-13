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

/* admin/published_services/index.html.twig */
class __TwigTemplate_47a10bc43e6066996e4f7a516ccaf065914991dc15a725e8295960c45a65eccd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyAdmin/page/blank.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/published_services/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/published_services/index.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/blank.html.twig", "admin/published_services/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo "Матрица услуг";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"content\">
        <div class=\"container py-3\">
            <div class=\"alert alert-primary\" role=\"alert\">
                <p>Серым цветом выделены категории прайса, без выделения - услуги. Данные по моделям находятся по ссылкам в названиях брендов</p>
                <p><span  class=\"border border-danger\">Для обновления данных необходимо чистить кэш</span></p>
                <table  border=\"1\" cellspacing=\"0\">
                    <tr>
                        <th>Категория/Услуга</th>
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) || array_key_exists("brands", $context) ? $context["brands"] : (function () { throw new RuntimeError('Variable "brands" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 15
            echo "                            <th>
                                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_published_services_dynamic_pages", ["token" => twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["brand"], "path", [], "any", false, false, false, 16), "/", "left")]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</a>
                            </th>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                    </tr>
                    ";
        // line 20
        echo $this->extensions['App\Widget\PublishedServicesExtension']->get_service_table_rows($this->env, (isset($context["priceCategories"]) || array_key_exists("priceCategories", $context) ? $context["priceCategories"] : (function () { throw new RuntimeError('Variable "priceCategories" does not exist.', 20, $this->source); })()), (isset($context["brands"]) || array_key_exists("brands", $context) ? $context["brands"] : (function () { throw new RuntimeError('Variable "brands" does not exist.', 20, $this->source); })()));
        echo "
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/published_services/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 20,  116 => 19,  105 => 16,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyAdmin/page/blank.html.twig' %}

{% block page_title 'Матрица услуг' %}

{% block content %}
    <div class=\"content\">
        <div class=\"container py-3\">
            <div class=\"alert alert-primary\" role=\"alert\">
                <p>Серым цветом выделены категории прайса, без выделения - услуги. Данные по моделям находятся по ссылкам в названиях брендов</p>
                <p><span  class=\"border border-danger\">Для обновления данных необходимо чистить кэш</span></p>
                <table  border=\"1\" cellspacing=\"0\">
                    <tr>
                        <th>Категория/Услуга</th>
                        {% for brand in brands %}
                            <th>
                                <a href=\"{{ path('admin_published_services_dynamic_pages', { 'token':brand.path|trim('/', 'left') }) }}\">{{ brand.name }}</a>
                            </th>
                        {% endfor %}
                    </tr>
                    {{ service_table_rows(priceCategories, brands) }}
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "admin/published_services/index.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\admin\\published_services\\index.html.twig");
    }
}
