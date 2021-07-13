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

/* v2/embed/video_fone.html.twig */
class __TwigTemplate_a10abecfd0e918798535571c41aa5c0ce88e51d3c303d549d62fb9d3a0f629b6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'video' => [$this, 'block_video'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/embed/video_fone.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/embed/video_fone.html.twig"));

        // line 1
        $this->displayBlock('video', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_video($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "video"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "video"));

        // line 2
        echo "<div class=\"video-background\">
    <div class=\"video\">
        <video muted=\"\" autoplay=\"\" loop=\"\" preload=\"auto\" class=\"lazy loaded\" data-was-processed=\"true\">
            <source type=\"video/mp4\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("video/video.mp4"), "html", null, true);
        echo "\">
        </video>
    </div>
    <div class=\"video-background-content\">

        <div class=\"video-background-content-body\">
            <h1>Ремонт АКПП от профессионалов в Москве</h1>
            <h3>Сервис положительных эмоций</h3>
            <div class=\"container  utp-wrap\">
                <div class=\"row utp\">
                    <span class=\"col-md-6\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tick.png"), "html", null, true);
        echo "\" alt=\"img\">Свой цех по ремонту КПП</span>
                    <span class=\"col-md-6\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tick.png"), "html", null, true);
        echo "\" alt=\"img\">Работаем с Юр. Лицами</span>
                    <span class=\"col-md-6\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tick.png"), "html", null, true);
        echo "\" alt=\"img\">Доставка авто или КПП на эвакуаторе</span>
                    <span class=\"col-md-6\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tick.png"), "html", null, true);
        echo "\" alt=\"img\">Гарантия на работу от 1 года</span>
                </div>
            </div>
            <div class=\"video-background-content-body-button\">
                <button class=\"color_red_border_button\" type=\"button\" data-title=\"ДИАГНОСТИКА\" data-toggle=\"modal\" data-target=\"#callback_popup\">ДИАГНОСТИКА</button>
                <button class=\"color_red_border_button button-center\" type=\"button\" data-title=\"ЗАПИСЬ НА РЕМОНТ / ТО\" data-toggle=\"modal\" data-target=\"#callback_popup\">ЗАПИСЬ НА РЕМОНТ / ТО</button>
                <button class=\"color_red_border_button\" type=\"button\" data-title=\"ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ\" data-toggle=\"modal\" data-target=\"#callback_popup\">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</button>
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
        return "v2/embed/video_fone.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 18,  89 => 17,  85 => 16,  81 => 15,  68 => 5,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block video %}
<div class=\"video-background\">
    <div class=\"video\">
        <video muted=\"\" autoplay=\"\" loop=\"\" preload=\"auto\" class=\"lazy loaded\" data-was-processed=\"true\">
            <source type=\"video/mp4\" src=\"{{ asset('video/video.mp4') }}\">
        </video>
    </div>
    <div class=\"video-background-content\">

        <div class=\"video-background-content-body\">
            <h1>Ремонт АКПП от профессионалов в Москве</h1>
            <h3>Сервис положительных эмоций</h3>
            <div class=\"container  utp-wrap\">
                <div class=\"row utp\">
                    <span class=\"col-md-6\"><img src=\"{{ asset('img/tick.png') }}\" alt=\"img\">Свой цех по ремонту КПП</span>
                    <span class=\"col-md-6\"><img src=\"{{ asset('img/tick.png') }}\" alt=\"img\">Работаем с Юр. Лицами</span>
                    <span class=\"col-md-6\"><img src=\"{{ asset('img/tick.png') }}\" alt=\"img\">Доставка авто или КПП на эвакуаторе</span>
                    <span class=\"col-md-6\"><img src=\"{{ asset('img/tick.png') }}\" alt=\"img\">Гарантия на работу от 1 года</span>
                </div>
            </div>
            <div class=\"video-background-content-body-button\">
                <button class=\"color_red_border_button\" type=\"button\" data-title=\"ДИАГНОСТИКА\" data-toggle=\"modal\" data-target=\"#callback_popup\">ДИАГНОСТИКА</button>
                <button class=\"color_red_border_button button-center\" type=\"button\" data-title=\"ЗАПИСЬ НА РЕМОНТ / ТО\" data-toggle=\"modal\" data-target=\"#callback_popup\">ЗАПИСЬ НА РЕМОНТ / ТО</button>
                <button class=\"color_red_border_button\" type=\"button\" data-title=\"ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ\" data-toggle=\"modal\" data-target=\"#callback_popup\">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</button>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "v2/embed/video_fone.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\embed\\video_fone.html.twig");
    }
}
