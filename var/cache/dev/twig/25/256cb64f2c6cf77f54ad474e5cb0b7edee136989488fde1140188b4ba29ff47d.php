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

/* v2/widget/before_after.html.twig */
class __TwigTemplate_e44c237b6c4dcb2674dd9e6361ccd206871bae29d293c8e2c03c48af784c4f93 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/before_after.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/before_after.html.twig"));

        // line 1
        echo "<div class=\"section-works\">
    <div class=\"uk-section-large uk-container\">
        <div class=\"uk-position-relative\" data-uk-slideshow=\"min-height: 410; max-height: 410\">
            <h3 class=\"section-title\"><span>Наши работы</span></h3>
            <div class=\"works-block\">
                <ul class=\"uk-slideshow uk-slideshow-items\">
                    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "                        <li>
                            <div class=\"works-block__before works-block__big_img\">
                                <img ";
            // line 10
            echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad(twig_get_attribute($this->env, $this->source, $context["item"], "beforeImgUrl", [], "any", false, false, false, 10));
            echo " alt=\"до\"/>
                                <span>до</span>
                            </div>
                            <div class=\"works-block__after works-block__big_img\">
                                <img ";
            // line 14
            echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad(twig_get_attribute($this->env, $this->source, $context["item"], "afterImgUrl", [], "any", false, false, false, 14));
            echo " alt=\"после\"/>
                                <span>после</span>
                            </div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </ul>

            </div>
            <div class=\"works-slider uk-margin-top uk-position-relative\">
                <div tabindex=\"-1\" data-uk-slider=\"\">
                    <ul class=\"uk-thumbnav uk-slider-items uk-grid uk-grid-small uk-child-width-1-5@l uk-child-width-1-3@m uk-child-width-1-2\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 25, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "                            <li data-uk-slideshow-item=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                                <img ";
            // line 27
            echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad(twig_get_attribute($this->env, $this->source, $context["item"], "afterImgUrl", [], "any", false, false, false, 27), [0 => "uk-width-1-1"]);
            echo " alt=\"work-thumb\"/>
                            </li>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </ul>
                    <a class=\"uk-position-center-left\" href=\"#\" data-uk-slidenav-previous=\"\"
                       data-uk-slider-item=\"previous\"></a><a class=\"uk-position-center-right\" href=\"#\"
                                                             data-uk-slidenav-next=\"\" data-uk-slider-item=\"next\"></a>
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
        return "v2/widget/before_after.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 30,  107 => 27,  102 => 26,  85 => 25,  77 => 19,  66 => 14,  59 => 10,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-works\">
    <div class=\"uk-section-large uk-container\">
        <div class=\"uk-position-relative\" data-uk-slideshow=\"min-height: 410; max-height: 410\">
            <h3 class=\"section-title\"><span>Наши работы</span></h3>
            <div class=\"works-block\">
                <ul class=\"uk-slideshow uk-slideshow-items\">
                    {% for item in items %}
                        <li>
                            <div class=\"works-block__before works-block__big_img\">
                                <img {{ lazy_load(item.beforeImgUrl) }} alt=\"до\"/>
                                <span>до</span>
                            </div>
                            <div class=\"works-block__after works-block__big_img\">
                                <img {{ lazy_load(item.afterImgUrl) }} alt=\"после\"/>
                                <span>после</span>
                            </div>
                        </li>
                    {% endfor %}
                </ul>

            </div>
            <div class=\"works-slider uk-margin-top uk-position-relative\">
                <div tabindex=\"-1\" data-uk-slider=\"\">
                    <ul class=\"uk-thumbnav uk-slider-items uk-grid uk-grid-small uk-child-width-1-5@l uk-child-width-1-3@m uk-child-width-1-2\">
                        {% for item in items %}
                            <li data-uk-slideshow-item=\"{{ loop.index0 }}\">
                                <img {{ lazy_load(item.afterImgUrl,['uk-width-1-1']) }} alt=\"work-thumb\"/>
                            </li>
                        {% endfor %}
                    </ul>
                    <a class=\"uk-position-center-left\" href=\"#\" data-uk-slidenav-previous=\"\"
                       data-uk-slider-item=\"previous\"></a><a class=\"uk-position-center-right\" href=\"#\"
                                                             data-uk-slidenav-next=\"\" data-uk-slider-item=\"next\"></a>
                </div>
            </div>
        </div>
    </div>
</div>", "v2/widget/before_after.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\widget\\before_after.html.twig");
    }
}
