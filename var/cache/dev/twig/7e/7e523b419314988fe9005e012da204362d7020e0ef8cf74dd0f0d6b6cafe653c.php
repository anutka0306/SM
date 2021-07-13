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

/* v1/widget/models.html.twig */
class __TwigTemplate_9a63eca25e684115395f7ce198354d5169a2e26c313b3e83742fc2381ccfbf33 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/models.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/models.html.twig"));

        // line 1
        echo "<section id=\"brand\" class=\"brand\">
    <div class=\"wrapper\">
        <h2 class=\"brand-list-header\">Знаем все детали при ремонте ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["brand_name"]) || array_key_exists("brand_name", $context) ? $context["brand_name"] : (function () { throw new RuntimeError('Variable "brand_name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</h2>
        <div class=\"row read-more-models\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new RuntimeError('Variable "models" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 6
            echo "            <div class=\"brand_col\">
                <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "path", [], "any", false, false, false, 7), "html", null, true);
            echo "\" class=\"brand_cont\">
                    <img ";
            // line 8
            echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["model"], "imageUrl", [], "any", false, false, false, 8)));
            echo " alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "\" />
                    <div class=\"brand_name\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</div>
                </a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/models.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  69 => 9,  63 => 8,  59 => 7,  56 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"brand\" class=\"brand\">
    <div class=\"wrapper\">
        <h2 class=\"brand-list-header\">Знаем все детали при ремонте {{ brand_name }}</h2>
        <div class=\"row read-more-models\">
            {% for model in models %}
            <div class=\"brand_col\">
                <a href=\"{{ model.path }}\" class=\"brand_cont\">
                    <img {{ lazy_load(asset(model.imageUrl)) }} alt=\"{{ model.name }}\" />
                    <div class=\"brand_name\">{{ model.name }}</div>
                </a>
            </div>
            {% endfor %}
        </div>
    </div>
</section>", "v1/widget/models.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\models.html.twig");
    }
}
