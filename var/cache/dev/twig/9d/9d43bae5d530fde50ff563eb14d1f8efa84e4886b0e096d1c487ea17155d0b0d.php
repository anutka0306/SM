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

/* v2/scripts/_liveinternet.html.twig */
class __TwigTemplate_4a3617e575b6dbe477e60077e1c2a34f59e37e659eb634bfe0623c16c5f99115 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/scripts/_liveinternet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/scripts/_liveinternet.html.twig"));

        // line 1
        echo "<!--LiveInternet counter-->
<script type=\"text/javascript\">
    new Image().src = \"//counter.yadro.ru/hit?r\"+
        escape(document.referrer)+((typeof(screen)==\"undefined\")?\"\":
            \";s\"+screen.width+\"*\"+screen.height+\"*\"+(screen.colorDepth?
            screen.colorDepth:screen.pixelDepth))+\";u\"+escape(document.URL)+
        \";\"+Math.random();</script><!--/LiveInternet-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/scripts/_liveinternet.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--LiveInternet counter-->
<script type=\"text/javascript\">
    new Image().src = \"//counter.yadro.ru/hit?r\"+
        escape(document.referrer)+((typeof(screen)==\"undefined\")?\"\":
            \";s\"+screen.width+\"*\"+screen.height+\"*\"+(screen.colorDepth?
            screen.colorDepth:screen.pixelDepth))+\";u\"+escape(document.URL)+
        \";\"+Math.random();</script><!--/LiveInternet-->", "v2/scripts/_liveinternet.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\scripts\\_liveinternet.html.twig");
    }
}
