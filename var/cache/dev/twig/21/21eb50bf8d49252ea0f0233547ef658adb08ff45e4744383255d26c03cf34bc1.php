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

/* elements/_navigation.html.twig */
class __TwigTemplate_7c032db4926690d94fe2c0931d98b0f0d7074825f995d1be925d8a23d2c810c7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_navigation.html.twig"));

        // line 1
        $this->displayBlock('breadcrumbs', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 2
        echo "<div class=\"container container2\">
<div class=\"navigation\">
  <div class=\"navigation_item_block\">
    <div class=\"navigation_item\">
      <a href=\"#\">Кузовной ремонт</a>
      <span>⇆</span>
    </div>
    <div class=\"navigation_item\">
      <a href=\"#\">Покраска авто в Москве</a>
      <span>⇆</span>
    </div>
    <div class=\"navigation_item\">
      Локальная покраска
    </div>
  </div>
  <div class=\"navigation_rating\">
    <div class=\"stars\">
      <span class=\"star on\"></span>
      <span class=\"star on\"></span>
      <span class=\"star on\"></span>
      <span class=\"star on\"></span>
      <span class=\"star half\"></span>
    </div>
    <div class=\"navigation_rating_text\">
      <span><b>4.8</b> из  5 (18 оценок)</span>
    </div>
  </div>
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "elements/_navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block breadcrumbs %}
<div class=\"container container2\">
<div class=\"navigation\">
  <div class=\"navigation_item_block\">
    <div class=\"navigation_item\">
      <a href=\"#\">Кузовной ремонт</a>
      <span>⇆</span>
    </div>
    <div class=\"navigation_item\">
      <a href=\"#\">Покраска авто в Москве</a>
      <span>⇆</span>
    </div>
    <div class=\"navigation_item\">
      Локальная покраска
    </div>
  </div>
  <div class=\"navigation_rating\">
    <div class=\"stars\">
      <span class=\"star on\"></span>
      <span class=\"star on\"></span>
      <span class=\"star on\"></span>
      <span class=\"star on\"></span>
      <span class=\"star half\"></span>
    </div>
    <div class=\"navigation_rating_text\">
      <span><b>4.8</b> из  5 (18 оценок)</span>
    </div>
  </div>
</div>
</div>
{% endblock %}", "elements/_navigation.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\elements\\_navigation.html.twig");
    }
}
