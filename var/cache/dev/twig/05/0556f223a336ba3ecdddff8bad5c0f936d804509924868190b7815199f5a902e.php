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

/* v2/blocks/section/youtube-popup.html.twig */
class __TwigTemplate_20207120b876f5c417407344e3b15f758c3846041ee31b89d9ef43e02e00c9a5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/youtube-popup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/youtube-popup.html.twig"));

        // line 1
        echo "<div id=\"modal-media-youtube\" class=\"uk-flex-top\" uk-modal>
    <div class=\"uk-modal-dialog uk-width-auto uk-margin-auto-vertical\">
        <button class=\"uk-modal-close-outside\" type=\"button\" uk-close></button>
        ";
        // line 6
        echo "         <video controls=\"\" alt=\"видео о нас\" poster=\"/video/poster.jpg\"
            class=\"lazy videoblog__video\" uk-video uk-responsive style=\"max-height: 600px; max-width: 100%;\">
            <source type=\"video/mp4\" data-src=\"/video/FF_HQ.mp4\">
            <source type=\"video/mp4\" media=\"all and (max-width: 600px)\" data-src=\"/video/FF_HQ.mp4\">
        </video>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/blocks/section/youtube-popup.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modal-media-youtube\" class=\"uk-flex-top\" uk-modal>
    <div class=\"uk-modal-dialog uk-width-auto uk-margin-auto-vertical\">
        <button class=\"uk-modal-close-outside\" type=\"button\" uk-close></button>
        {# <iframe src=\"https://www.youtube-nocookie.com/embed/c2pz2mlSfXA\" width=\"1280\" height=\"720\" frameborder=\"0\"
                uk-video uk-responsive></iframe> #}
         <video controls=\"\" alt=\"видео о нас\" poster=\"/video/poster.jpg\"
            class=\"lazy videoblog__video\" uk-video uk-responsive style=\"max-height: 600px; max-width: 100%;\">
            <source type=\"video/mp4\" data-src=\"/video/FF_HQ.mp4\">
            <source type=\"video/mp4\" media=\"all and (max-width: 600px)\" data-src=\"/video/FF_HQ.mp4\">
        </video>
    </div>
</div>", "v2/blocks/section/youtube-popup.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\section\\youtube-popup.html.twig");
    }
}
