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

/* v1/extensions/inject_content_image.html.twig */
class __TwigTemplate_19c32b26165419ef042b956de2f9730a3ae47a13109ce44fd3442b51003f197e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/extensions/inject_content_image.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/extensions/inject_content_image.html.twig"));

        // line 1
        echo "<a rel=\"boxed\" href=\"/img/";
        echo twig_escape_filter($this->env, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "/original/";
        echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    <img alt=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" src=\"/img/";
        echo twig_escape_filter($this->env, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "/small/";
        echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\">
</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/extensions/inject_content_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a rel=\"boxed\" href=\"/img/{{ folder }}/original/{{ image }}\">
    <img alt=\"{{ title }}\" title=\"{{ title }}\" src=\"/img/{{ folder }}/small/{{ image }}\">
</a>", "v1/extensions/inject_content_image.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\extensions\\inject_content_image.html.twig");
    }
}
