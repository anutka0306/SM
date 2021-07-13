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

/* v2/extensions/seo.html.twig */
class __TwigTemplate_01ca1b5292ed56bc109abbe16803ba6d19680e983ed6868df0240293ebe0961a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/extensions/seo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/extensions/seo.html.twig"));

        // line 1
        echo "<div class=\"section-seo\">
    <div class=\"uk-container\">
        <div class=\"seo-box\">
            <div class=\"seo-box__text\">
                ";
        // line 5
        echo (isset($context["visible_text"]) || array_key_exists("visible_text", $context) ? $context["visible_text"] : (function () { throw new RuntimeError('Variable "visible_text" does not exist.', 5, $this->source); })());
        echo "
            </div>
            ";
        // line 7
        if ( !twig_test_empty((isset($context["hidden_text"]) || array_key_exists("hidden_text", $context) ? $context["hidden_text"] : (function () { throw new RuntimeError('Variable "hidden_text" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "                <div class=\"seo-box__text-hide\">
                    ";
            // line 9
            echo (isset($context["hidden_text"]) || array_key_exists("hidden_text", $context) ? $context["hidden_text"] : (function () { throw new RuntimeError('Variable "hidden_text" does not exist.', 9, $this->source); })());
            echo "
                </div>
            ";
        }
        // line 12
        echo "            <div class=\"seo-box__more\">Развернуть</div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/extensions/seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  59 => 9,  56 => 8,  54 => 7,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-seo\">
    <div class=\"uk-container\">
        <div class=\"seo-box\">
            <div class=\"seo-box__text\">
                {{ visible_text|raw }}
            </div>
            {% if hidden_text is not empty %}
                <div class=\"seo-box__text-hide\">
                    {{ hidden_text|raw }}
                </div>
            {% endif %}
            <div class=\"seo-box__more\">Развернуть</div>
        </div>
    </div>
</div>", "v2/extensions/seo.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\extensions\\seo.html.twig");
    }
}
