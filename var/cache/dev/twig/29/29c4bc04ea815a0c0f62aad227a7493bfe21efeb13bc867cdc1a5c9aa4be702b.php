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

/* v2/extensions/mainmenu.html.twig */
class __TwigTemplate_3732627f0bbfcc16e35c309a686ed2ae6ae75112ae9bb8f3a77996436415adbd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/extensions/mainmenu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/extensions/mainmenu.html.twig"));

        // line 1
        echo "<div class=\"container container2 text-center mt-3\">
    <div class=\"row\">
        <div class=\"col-12\">
            <ul style=\"margin: 0;\">
                <li>
                    <a class=\"punkt\" href=\"#\">Услуги</a>
                </li>
                <li>
                    <a class=\"punkt\" href=\"#\">Цены</a>
                </li>
                <li>
                    <a class=\"punkt\" href=\"#\">Акции</a>
                </li>
                <li>
                    <a class=\"punkt\" href=\"/index_video.php\">Портфолио</a>
                </li>
                <li>
                    <a class=\"punkt\" href=\"#\">О нас</a>
                </li>
                <li>
                    <a class=\"punkt\" href=\"#\">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/extensions/mainmenu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container container2 text-center mt-3\">
    <div class=\"row\">
        <div class=\"col-12\">
            <ul style=\"margin: 0;\">
                <li>
                    <a class=\"punkt\" href=\"#\">Услуги</a>
                </li>
                <li>
                    <a class=\"punkt\" href=\"#\">Цены</a>
                </li>
                <li>
                    <a class=\"punkt\" href=\"#\">Акции</a>
                </li>
                <li>
                    <a class=\"punkt\" href=\"/index_video.php\">Портфолио</a>
                </li>
                <li>
                    <a class=\"punkt\" href=\"#\">О нас</a>
                </li>
                <li>
                    <a class=\"punkt\" href=\"#\">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</div>", "v2/extensions/mainmenu.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\extensions\\mainmenu.html.twig");
    }
}
