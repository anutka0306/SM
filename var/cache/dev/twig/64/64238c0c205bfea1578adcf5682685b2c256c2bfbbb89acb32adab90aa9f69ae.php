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

/* admin/published_services/brand.html.twig */
class __TwigTemplate_526ce9472911cf28b91867832a46cb0737b34d61d74f9c4f45d275a509f45906 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/published_services/brand.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/published_services/brand.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/blank.html.twig", "admin/published_services/brand.html.twig", 1);
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
                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_published_services_index");
        echo "\">Назад</a>
                <table  border=\"1\" cellspacing=\"0\">
                    <tr>
                        <th>Категория/Услуга</th>
                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new RuntimeError('Variable "models" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 16
            echo "                            <th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</th>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    </tr>
                \t";
        // line 19
        echo $this->extensions['App\Widget\PublishedServicesExtension']->get_service_table_rows($this->env, (isset($context["priceCategories"]) || array_key_exists("priceCategories", $context) ? $context["priceCategories"] : (function () { throw new RuntimeError('Variable "priceCategories" does not exist.', 19, $this->source); })()), (isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new RuntimeError('Variable "models" does not exist.', 19, $this->source); })()), (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 19, $this->source); })()));
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
        return "admin/published_services/brand.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 19,  115 => 18,  106 => 16,  102 => 15,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                <a href=\"{{ path('admin_published_services_index') }}\">Назад</a>
                <table  border=\"1\" cellspacing=\"0\">
                    <tr>
                        <th>Категория/Услуга</th>
                        {% for model in models %}
                            <th>{{ model.name }}</th>
                        {% endfor %}
                    </tr>
                \t{{ service_table_rows(priceCategories, models, brand) }}
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "admin/published_services/brand.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\admin\\published_services\\brand.html.twig");
    }
}
