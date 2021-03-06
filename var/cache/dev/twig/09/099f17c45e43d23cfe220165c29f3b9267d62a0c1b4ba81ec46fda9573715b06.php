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

/* elements/_block_content.html.twig */
class __TwigTemplate_6053d3d426bb7869ee0bf42bf1f22ea7729bcdc03555d3a69569b033f53c4c06 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_block_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_block_content.html.twig"));

        // line 1
        echo "<div class=\"block_content container container2\">
  <div class=\"block_content_background\">
    <div class=\"block_content_pre\">
      ";
        // line 4
        echo (isset($context["first_part"]) || array_key_exists("first_part", $context) ? $context["first_part"] : (function () { throw new RuntimeError('Variable "first_part" does not exist.', 4, $this->source); })());
        echo "
    </div>
    <div id=\"more_content\" class=\"collapse\">
      ";
        // line 7
        echo (isset($context["second_part"]) || array_key_exists("second_part", $context) ? $context["second_part"] : (function () { throw new RuntimeError('Variable "second_part" does not exist.', 7, $this->source); })());
        echo "
    </div>
    <div class=\"block_content_more\" id=\"button_more_content\" data-toggle=\"collapse\" data-target=\"#more_content\">????????????????????</div>
  </div>
</div>

<script>
    \$('#more_content').on('hide.bs.collapse', function () {
        \$('#button_more_content').removeClass('is-show');
        \$('#button_more_content').html('????????????????????');
    });
    \$('#more_content').on('shown.bs.collapse', function () {
        \$('#button_more_content').addClass('is-show');
        \$('#button_more_content').html('????????????????');
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "elements/_block_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"block_content container container2\">
  <div class=\"block_content_background\">
    <div class=\"block_content_pre\">
      {{ first_part|raw }}
    </div>
    <div id=\"more_content\" class=\"collapse\">
      {{ second_part|raw }}
    </div>
    <div class=\"block_content_more\" id=\"button_more_content\" data-toggle=\"collapse\" data-target=\"#more_content\">????????????????????</div>
  </div>
</div>

<script>
    \$('#more_content').on('hide.bs.collapse', function () {
        \$('#button_more_content').removeClass('is-show');
        \$('#button_more_content').html('????????????????????');
    });
    \$('#more_content').on('shown.bs.collapse', function () {
        \$('#button_more_content').addClass('is-show');
        \$('#button_more_content').html('????????????????');
    });
</script>", "elements/_block_content.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\elements\\_block_content.html.twig");
    }
}
