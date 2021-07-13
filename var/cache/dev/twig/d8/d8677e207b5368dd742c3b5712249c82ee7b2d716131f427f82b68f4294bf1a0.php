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

/* v2/extensions/gallery.html.twig */
class __TwigTemplate_744bf47c08c6510fcef09bced9d6aca15947ff34f9f274ce95c35f6c1cf34c88 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/extensions/gallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/extensions/gallery.html.twig"));

        // line 1
        echo "<div class=\"section-gallery\">
    <div class=\"uk-container\">
        <div class=\"uk-margin-medium-top uk-margin-medium-bottom gallery-slider uk-position-relative\">
            <div tabindex=\"-1\" data-uk-slider=\"\">
                <ul class=\"uk-slider-items uk-grid uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s\"
                    data-uk-lightbox=\"data-uk-lightbox\">
                    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 8
            echo "                    <li>
                        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\">
                            <img data-src=\"";
            // line 10
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\" alt=\"gallery\" uk-img/>
                        </a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </ul>
                <a class=\"uk-position-center-left\" href=\"#\" data-uk-slidenav-previous=\"\" data-uk-slider-item=\"previous\"></a>
                <a class=\"uk-position-center-right\" href=\"#\" data-uk-slidenav-next=\"\" data-uk-slider-item=\"next\"></a>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/extensions/gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  62 => 10,  58 => 9,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-gallery\">
    <div class=\"uk-container\">
        <div class=\"uk-margin-medium-top uk-margin-medium-bottom gallery-slider uk-position-relative\">
            <div tabindex=\"-1\" data-uk-slider=\"\">
                <ul class=\"uk-slider-items uk-grid uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s\"
                    data-uk-lightbox=\"data-uk-lightbox\">
                    {% for image in files %}
                    <li>
                        <a href=\"{{ image }}\">
                            <img data-src=\"{{ image }}\" alt=\"gallery\" uk-img/>
                        </a>
                    </li>
                    {% endfor %}
                </ul>
                <a class=\"uk-position-center-left\" href=\"#\" data-uk-slidenav-previous=\"\" data-uk-slider-item=\"previous\"></a>
                <a class=\"uk-position-center-right\" href=\"#\" data-uk-slidenav-next=\"\" data-uk-slider-item=\"next\"></a>
            </div>
        </div>
    </div>
</div>", "v2/extensions/gallery.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\extensions\\gallery.html.twig");
    }
}
