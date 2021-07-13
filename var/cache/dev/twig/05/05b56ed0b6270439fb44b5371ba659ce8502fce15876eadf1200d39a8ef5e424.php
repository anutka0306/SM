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

/* v2/widget/video.html.twig */
class __TwigTemplate_0f2bff0975a556e75d102b6f4366e4a5c19ae163581ea2ac362b4892e3830e95 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/video.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/widget/video.html.twig"));

        // line 1
        echo "<div class=\"uk-container\">
    <div ";
        // line 2
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoadBg("/img/works-bg.png", [0 => "video_block"]);
        echo ">
        <div class=\"uk-grid uk-grid-small uk-child-width-1-2@l\"
             data-uk-grid=\"data-uk-grid\">
            <div class=\"uk-flex-last@l\">
                <h2 class=\"video_block__title\">
                    ";
        // line 7
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "category", [], "any", false, false, false, 7))) {
            // line 8
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videoblog_item", ["categoryAlias" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "category", [], "any", false, false, false, 8), "alias", [], "any", false, false, false, 8), "id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
            echo "\">
                            ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 12
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
            echo "
                    ";
        }
        // line 14
        echo "                </h2>
                <div class=\"video_block__text\">
                    ";
        // line 16
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "text", [], "any", false, false, false, 16)) ? (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "text", [], "any", false, false, false, 16)) : (""));
        echo "
                </div>
            </div>
            <div class=\"uk-flex-first@l uk-first-column\">
                <div class=\"video_block__video\">
                    ";
        // line 21
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "imageUrl", [], "any", false, false, false, 21))) {
            // line 22
            echo "                        <video controls=\"\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
            echo "\"
                               class=\"lazy videoblog__video\" width=\"100%\" style=\"max-height: 600px\">
                            <source type=\"video/mp4\" data-src=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 24, $this->source); })()), "imageUrl", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
                            <source type=\"video/mp4\" media=\"all and (max-width: 600px)\" data-src=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "imageUrl", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
                        </video>
                    ";
        } else {
            // line 28
            echo "                        ";
            echo $this->extensions['App\Twig\LazyLoadExtension']->lazyYoutube(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 28, $this->source); })()), "link", [], "any", false, false, false, 28));
            echo "
                    ";
        }
        // line 30
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/widget/video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  103 => 28,  97 => 25,  93 => 24,  87 => 22,  85 => 21,  77 => 16,  73 => 14,  67 => 12,  61 => 9,  56 => 8,  54 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"uk-container\">
    <div {{ lazy_load_bg('/img/works-bg.png',['video_block']) }}>
        <div class=\"uk-grid uk-grid-small uk-child-width-1-2@l\"
             data-uk-grid=\"data-uk-grid\">
            <div class=\"uk-flex-last@l\">
                <h2 class=\"video_block__title\">
                    {% if item.category is not empty %}
                        <a href=\"{{ path('videoblog_item',{'categoryAlias':item.category.alias,'id':item.id}) }}\">
                            {{ item.name }}
                        </a>
                    {% else %}
                        {{ item.name }}
                    {% endif %}
                </h2>
                <div class=\"video_block__text\">
                    {{ item.text ? item.text|raw }}
                </div>
            </div>
            <div class=\"uk-flex-first@l uk-first-column\">
                <div class=\"video_block__video\">
                    {% if item.imageUrl is not empty %}
                        <video controls=\"\" alt=\"{{ item.name }}\"
                               class=\"lazy videoblog__video\" width=\"100%\" style=\"max-height: 600px\">
                            <source type=\"video/mp4\" data-src=\"{{ item.imageUrl }}\">
                            <source type=\"video/mp4\" media=\"all and (max-width: 600px)\" data-src=\"{{ item.imageUrl }}\">
                        </video>
                    {% else %}
                        {{ lazy_youtube(item.link) }}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
", "v2/widget/video.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\widget\\video.html.twig");
    }
}
