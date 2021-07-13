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

/* v2/blocks/include/main_menu_items.html.twig */
class __TwigTemplate_6c4148a0d97566ce7e834db45605faecf07be746dfb15b3d6571d542721c16ad extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/include/main_menu_items.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/include/main_menu_items.html.twig"));

        // line 1
        echo "<li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("price_list");
        echo "#content\">Цены</a></li>
<li><a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skidki_i_akcii_index");
        echo "#content\">Акции</a></li>
<li><a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("naschiraboty_index");
        echo "#content\">Портфолио</a></li>
<li><a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videoblog_index");
        echo "#content\">Видеоблог</a></li>
<li><a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dynamic_pages", ["token" => "about_us/"]);
        echo "#content\">О нас</a></li>
<li><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dynamic_pages", ["token" => "contact_info/"]);
        echo "#content\">Контакты</a></li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/blocks/include/main_menu_items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 6,  60 => 5,  56 => 4,  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li><a href=\"{{ path('price_list') }}#content\">Цены</a></li>
<li><a href=\"{{ path('skidki_i_akcii_index') }}#content\">Акции</a></li>
<li><a href=\"{{ path('naschiraboty_index') }}#content\">Портфолио</a></li>
<li><a href=\"{{ path('videoblog_index') }}#content\">Видеоблог</a></li>
<li><a href=\"{{ path('dynamic_pages', {'token':'about_us/'}) }}#content\">О нас</a></li>
<li><a href=\"{{ path('dynamic_pages', {'token':'contact_info/'}) }}#content\">Контакты</a></li>", "v2/blocks/include/main_menu_items.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\include\\main_menu_items.html.twig");
    }
}
