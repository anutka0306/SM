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

/* v1/widget/video.html.twig */
class __TwigTemplate_9ba2edffab7e3925efebc5845a4e3c49813fc9068ed9ebc699b5bf8540a4ac0c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/video.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/video.html.twig"));

        // line 1
        echo "<div ";
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoadBg("/img/works-bg.png", [0 => "video_block"]);
        echo ">
    <div class=\"container\">
        <h2 class=\"video_block__title\">
            ";
        // line 4
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "category", [], "any", false, false, false, 4))) {
            // line 5
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videoblog_item", ["categoryAlias" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "category", [], "any", false, false, false, 5), "alias", [], "any", false, false, false, 5), "id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)]), "html", null, true);
            echo "\">
                    ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
            echo "
            ";
        }
        // line 11
        echo "        </h2>
        <div class=\"video_block__text\">
            ";
        // line 13
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "text", [], "any", false, false, false, 13)) ? (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "text", [], "any", false, false, false, 13)) : (""));
        echo "
        </div>
        <div class=\"video_block__video\">
            ";
        // line 16
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "imageUrl", [], "any", false, false, false, 16))) {
            // line 17
            echo "                <video controls=\"\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "\"
                       class=\"lazy videoblog__video\" width=\"100%\" style=\"max-height: 600px\">
                    <source type=\"video/mp4\" data-src=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "imageUrl", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
                    <source type=\"video/mp4\" media=\"all and (max-width: 600px)\" data-src=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "imageUrl", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
                </video>
            ";
        } else {
            // line 23
            echo "                ";
            echo $this->extensions['App\Twig\LazyLoadExtension']->lazyYoutube(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "link", [], "any", false, false, false, 23));
            echo "
            ";
        }
        // line 25
        echo "
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  97 => 23,  91 => 20,  87 => 19,  81 => 17,  79 => 16,  73 => 13,  69 => 11,  63 => 9,  57 => 6,  52 => 5,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div {{ lazy_load_bg('/img/works-bg.png',['video_block']) }}>
    <div class=\"container\">
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
</div>", "v1/widget/video.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\video.html.twig");
    }
}
