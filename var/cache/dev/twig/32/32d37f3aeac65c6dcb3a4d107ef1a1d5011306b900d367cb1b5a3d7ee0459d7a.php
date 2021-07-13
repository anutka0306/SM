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

/* v1/blocks/scripts/_liveinternet.html.twig */
class __TwigTemplate_915d38adade12c3f1e7b86487ebed4b6d19b0081d16899a8beafe807530fd648 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/scripts/_liveinternet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/scripts/_liveinternet.html.twig"));

        // line 1
        echo "<!--LiveInternet counter-->
<script type=\"text/javascript\">
\tnew Image().src = \"//counter.yadro.ru/hit?r\"+
\t\tescape(document.referrer)+((typeof(screen)==\"undefined\")?\"\":
\t\t\t\";s\"+screen.width+\"*\"+screen.height+\"*\"+(screen.colorDepth?
\t\t\tscreen.colorDepth:screen.pixelDepth))+\";u\"+escape(document.URL)+
\t\t\";h\"+escape(document.title.substring(0,150))+
\t\t\";\"+Math.random();</script>
<!--/LiveInternet-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/blocks/scripts/_liveinternet.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--LiveInternet counter-->
<script type=\"text/javascript\">
\tnew Image().src = \"//counter.yadro.ru/hit?r\"+
\t\tescape(document.referrer)+((typeof(screen)==\"undefined\")?\"\":
\t\t\t\";s\"+screen.width+\"*\"+screen.height+\"*\"+(screen.colorDepth?
\t\t\tscreen.colorDepth:screen.pixelDepth))+\";u\"+escape(document.URL)+
\t\t\";h\"+escape(document.title.substring(0,150))+
\t\t\";\"+Math.random();</script>
<!--/LiveInternet-->", "v1/blocks/scripts/_liveinternet.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\blocks\\scripts\\_liveinternet.html.twig");
    }
}
