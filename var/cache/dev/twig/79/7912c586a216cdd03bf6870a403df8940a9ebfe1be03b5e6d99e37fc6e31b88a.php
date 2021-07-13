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

/* v1/widget/article_menu.html.twig */
class __TwigTemplate_deb7479353ca72dac1cad4041822d4441e9cb837f331304c378493faf6581744 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/article_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/article_menu.html.twig"));

        // line 1
        echo "<div class=\"services-list-container\">
    <ul class=\"services-list\" id=\"block_usl_model_top\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 4
            echo "            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)))) {
                // line 5
                echo "                <li class=\"active\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 5), "html", null, true);
                echo "</li>
            ";
            } else {
                // line 7
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "path", [], "any", false, false, false, 7), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 7), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 9
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>
    <button class=\"btn services-list-btn btn-success\">Показать все</button>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/article_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 10,  68 => 9,  60 => 7,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"services-list-container\">
    <ul class=\"services-list\" id=\"block_usl_model_top\">
        {% for article in articles %}
            {% if article.id == service.id %}
                <li class=\"active\">{{ article.name }}</li>
            {% else %}
                <li><a href=\"{{ article.path }}\">{{ article.name }}</a></li>
            {% endif %}
        {% endfor %}
    </ul>
    <button class=\"btn services-list-btn btn-success\">Показать все</button>
</div>", "v1/widget/article_menu.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\article_menu.html.twig");
    }
}
