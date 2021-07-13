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

/* v2/turbo/service/our-works.html.twig */
class __TwigTemplate_2b43dd3b5af16b2641103d881092b97c396e460537575f8b49f2e9ed2df0dc6d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/turbo/service/our-works.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/turbo/service/our-works.html.twig"));

        // line 1
        if ( !twig_test_empty((isset($context["ourWorksImages"]) || array_key_exists("ourWorksImages", $context) ? $context["ourWorksImages"] : (function () { throw new RuntimeError('Variable "ourWorksImages" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <h2>Примеры выполненных работ</h2>
    <div data-block=\"slider\" data-view=\"landscape\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["ourWorksImages"]) || array_key_exists("ourWorksImages", $context) ? $context["ourWorksImages"] : (function () { throw new RuntimeError('Variable "ourWorksImages" does not exist.', 4, $this->source); })()), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 5
                echo "            <figure>
                <img src=\"";
                // line 6
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "schemeAndHttpHost", [], "any", false, false, false, 6) . $context["image"]), "html", null, true);
                echo "\"/>
            </figure>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/turbo/service/our-works.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  56 => 6,  53 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if ourWorksImages is not empty %}
    <h2>Примеры выполненных работ</h2>
    <div data-block=\"slider\" data-view=\"landscape\">
        {% for image in ourWorksImages|slice(0,5) %}
            <figure>
                <img src=\"{{ app.request.schemeAndHttpHost ~ image }}\"/>
            </figure>
        {% endfor %}
    </div>
{% endif %}", "v2/turbo/service/our-works.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\turbo\\service\\our-works.html.twig");
    }
}
