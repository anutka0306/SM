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

/* elements/_gallery.html.twig */
class __TwigTemplate_0b686bba3639e064ea82ea853e2fccf60b2ea4795482f3a29f715873ffbbccb8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_gallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_gallery.html.twig"));

        // line 1
        echo "<div class=\"section-gallery\">
    <div class=\"container container2\">
      <div class=\"uk-container\">
        <div class=\"uk-margin-medium-top uk-margin-medium-bottom gallery-slider uk-position-relative\">
          <div tabindex=\"-1\" data-uk-slider=\"\" class=\"uk-slider uk-slider-container\">
            <ul class=\"uk-slider-items uk-grid uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s\" data-uk-lightbox=\"data-uk-lightbox\" style=\"transform: translate3d(0px, 0px, 0px);\">

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "              <li tabindex=\"-1\" class=\"\" style=\"order: 1;\">
                <a href=";
            // line 10
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo ">
                  <img data-src=";
            // line 11
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo " alt=\"gallery\" uk-img=\"\" src=";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo ">
                </a>
              </li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </ul>
            <a class=\"uk-position-center-left uk-icon uk-slidenav-previous uk-slidenav\" href=\"#\" data-uk-slidenav-previous=\"\" data-uk-slider-item=\"previous\"><svg width=\"14px\" height=\"24px\" viewBox=\"0 0 14 24\" xmlns=\"http://www.w3.org/2000/svg\" data-svg=\"slidenav-previous\"><polyline fill=\"none\" stroke=\"#000\" stroke-width=\"1.4\" points=\"12.775,1 1.225,12 12.775,23 \"></polyline></svg></a>
            <a class=\"uk-position-center-right uk-icon uk-slidenav-next uk-slidenav\" href=\"#\" data-uk-slidenav-next=\"\" data-uk-slider-item=\"next\"><svg width=\"14px\" height=\"24px\" viewBox=\"0 0 14 24\" xmlns=\"http://www.w3.org/2000/svg\" data-svg=\"slidenav-next\"><polyline fill=\"none\" stroke=\"#000\" stroke-width=\"1.4\" points=\"1.225,23 12.775,12 1.225,1 \"></polyline></svg></a>
          </div>
        </div>
      </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "elements/_gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  63 => 11,  59 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-gallery\">
    <div class=\"container container2\">
      <div class=\"uk-container\">
        <div class=\"uk-margin-medium-top uk-margin-medium-bottom gallery-slider uk-position-relative\">
          <div tabindex=\"-1\" data-uk-slider=\"\" class=\"uk-slider uk-slider-container\">
            <ul class=\"uk-slider-items uk-grid uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s\" data-uk-lightbox=\"data-uk-lightbox\" style=\"transform: translate3d(0px, 0px, 0px);\">

{% for item in gallery %}
              <li tabindex=\"-1\" class=\"\" style=\"order: 1;\">
                <a href={{ item }}>
                  <img data-src={{ item}} alt=\"gallery\" uk-img=\"\" src={{ item }}>
                </a>
              </li>

{% endfor %}
            </ul>
            <a class=\"uk-position-center-left uk-icon uk-slidenav-previous uk-slidenav\" href=\"#\" data-uk-slidenav-previous=\"\" data-uk-slider-item=\"previous\"><svg width=\"14px\" height=\"24px\" viewBox=\"0 0 14 24\" xmlns=\"http://www.w3.org/2000/svg\" data-svg=\"slidenav-previous\"><polyline fill=\"none\" stroke=\"#000\" stroke-width=\"1.4\" points=\"12.775,1 1.225,12 12.775,23 \"></polyline></svg></a>
            <a class=\"uk-position-center-right uk-icon uk-slidenav-next uk-slidenav\" href=\"#\" data-uk-slidenav-next=\"\" data-uk-slider-item=\"next\"><svg width=\"14px\" height=\"24px\" viewBox=\"0 0 14 24\" xmlns=\"http://www.w3.org/2000/svg\" data-svg=\"slidenav-next\"><polyline fill=\"none\" stroke=\"#000\" stroke-width=\"1.4\" points=\"1.225,23 12.775,12 1.225,1 \"></polyline></svg></a>
          </div>
        </div>
      </div>
    </div>
</div>", "elements/_gallery.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\elements\\_gallery.html.twig");
    }
}
