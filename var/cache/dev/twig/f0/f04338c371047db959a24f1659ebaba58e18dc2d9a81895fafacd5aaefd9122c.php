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

/* v2/widget/brands-with-models.html.twig */
class __TwigTemplate_6d7a799224c715ea6c4829ec0e7c0bccd0e6a11081e8f4595698d43371140a83 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/brands-with-models.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/brands-with-models.html.twig"));

        // line 1
        echo "<div class=\"uk-position-relative\" tabindex=\"-1\" uk-slider=\"\">
    <div class=\"uk-slider-container\">
        <ul class=\"uk-slider-items uk-grid uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) || array_key_exists("brands", $context) ? $context["brands"] : (function () { throw new RuntimeError('Variable "brands" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 5
            echo "                <li>
                    <div class=\"auto-switcher-item\">
                        <div class=\"auto-switcher-item__img\">
                            <img ";
            // line 8
            echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["brand"], "photoUrl", [], "any", false, false, false, 8)));
            echo " alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "\" />
                        </div>
                        <div class=\"auto-switcher-item__select\">
                            <div class=\"uk-inline\">
                                <button class=\"uk-button uk-button-default with-dropdown\"
                                        type=\"button\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</button>
                                <div data-uk-dropdown=\"data-uk-dropdown\">
                                    <div class=\"uk-panel-scrollable\">
                                        <ul class=\"uk-nav uk-dropdown-nav\">
                                            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["brand"], "priceModels", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                // line 18
                echo "                                                <li>
                                                    <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "path", [], "any", false, false, false, 19), "html", null, true);
                echo "\">
                                                        ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "name", [], "any", false, false, false, 20), "html", null, true);
                echo "
                                                    </a>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </ul>
    </div>
    <div class=\"uk-visible@l\">
        <a class=\"uk-position-center-left-out uk-position-small\" href=\"#\" uk-slidenav-previous=\"\"
           uk-slider-item=\"previous\"></a>
        <a class=\"uk-position-center-right-out uk-position-small\"
           href=\"#\" uk-slidenav-next=\"\"
           uk-slider-item=\"next\"></a>
    </div>
    <div class=\"uk-hidden@l\">
        <ul class=\"uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top\"></ul>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/widget/brands-with-models.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 32,  95 => 24,  85 => 20,  81 => 19,  78 => 18,  74 => 17,  67 => 13,  57 => 8,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"uk-position-relative\" tabindex=\"-1\" uk-slider=\"\">
    <div class=\"uk-slider-container\">
        <ul class=\"uk-slider-items uk-grid uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s\">
            {% for brand in brands %}
                <li>
                    <div class=\"auto-switcher-item\">
                        <div class=\"auto-switcher-item__img\">
                            <img {{ lazy_load(asset(brand.photoUrl)) }} alt=\"{{ brand.name }}\" />
                        </div>
                        <div class=\"auto-switcher-item__select\">
                            <div class=\"uk-inline\">
                                <button class=\"uk-button uk-button-default with-dropdown\"
                                        type=\"button\">{{ brand.name }}</button>
                                <div data-uk-dropdown=\"data-uk-dropdown\">
                                    <div class=\"uk-panel-scrollable\">
                                        <ul class=\"uk-nav uk-dropdown-nav\">
                                            {% for model in brand.priceModels %}
                                                <li>
                                                    <a href=\"{{ model.path }}\">
                                                        {{ model.name }}
                                                    </a>
                                                </li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            {% endfor %}
        </ul>
    </div>
    <div class=\"uk-visible@l\">
        <a class=\"uk-position-center-left-out uk-position-small\" href=\"#\" uk-slidenav-previous=\"\"
           uk-slider-item=\"previous\"></a>
        <a class=\"uk-position-center-right-out uk-position-small\"
           href=\"#\" uk-slidenav-next=\"\"
           uk-slider-item=\"next\"></a>
    </div>
    <div class=\"uk-hidden@l\">
        <ul class=\"uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top\"></ul>
    </div>
</div>", "v2/widget/brands-with-models.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\widget\\brands-with-models.html.twig");
    }
}
