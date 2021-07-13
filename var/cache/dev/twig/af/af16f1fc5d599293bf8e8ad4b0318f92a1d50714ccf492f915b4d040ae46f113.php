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

/* v1/blocks/scripts/_mango.html.twig */
class __TwigTemplate_1a29859437f51548a5b530461c12b8f0323e11eb6c0baf28c827824f36b6efe4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/scripts/_mango.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/scripts/_mango.html.twig"));

        // line 1
        echo "<div type=\"button\" class=\"callback-bt_perezvon\"
     id='perethvon0' style=\"display: block;\">
    <div class=\"text-call_perezvon\">
        <i class=\"mango__phone\"></i>
        <span>Заказать<br>звонок</span>
    </div>
</div>

<div class=\"callback-blok_perezvon\" id='perethvon' style=\"display: none;\">
    <div class=\"close-popup_perezvon\"></div>
    <div class=\"title-widget_perezvon\">Заказать звонок</div>
    <p class=\"text-widget_perezvon\">
        ";
        // line 13
        if (twig_in_filter(twig_date_format_filter($this->env, "now", "H"), range(9, 18))) {
            // line 14
            echo "            Мы перезвоним<br>через 30 секунд
        ";
        } else {
            // line 16
            echo "            Мы перезвоним<br>утром после 9
        ";
        }
        // line 18
        echo "    </p>
    <img class=\"flag-ru_perezvon\">
    <span class=\"box-phone-span-input_perezvon ru-box-phone-span-input_perezvon\" data-content=\"+7\">
            <input id=\"phoneperezvon\" placeholder=\"(ххх) ххх-хх-хх\" class=\"phone_mask_perezvon\"
                   style=\"padding-left: 30px; height: 35px; width: 190px;\"></span>

    <div class=\"button-call_perezvon button-widget_perezvon\">Позвоните мне</div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/blocks/scripts/_mango.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  63 => 16,  59 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div type=\"button\" class=\"callback-bt_perezvon\"
     id='perethvon0' style=\"display: block;\">
    <div class=\"text-call_perezvon\">
        <i class=\"mango__phone\"></i>
        <span>Заказать<br>звонок</span>
    </div>
</div>

<div class=\"callback-blok_perezvon\" id='perethvon' style=\"display: none;\">
    <div class=\"close-popup_perezvon\"></div>
    <div class=\"title-widget_perezvon\">Заказать звонок</div>
    <p class=\"text-widget_perezvon\">
        {% if 'now'|date('H') in 9..18 %}
            Мы перезвоним<br>через 30 секунд
        {% else %}
            Мы перезвоним<br>утром после 9
        {% endif %}
    </p>
    <img class=\"flag-ru_perezvon\">
    <span class=\"box-phone-span-input_perezvon ru-box-phone-span-input_perezvon\" data-content=\"+7\">
            <input id=\"phoneperezvon\" placeholder=\"(ххх) ххх-хх-хх\" class=\"phone_mask_perezvon\"
                   style=\"padding-left: 30px; height: 35px; width: 190px;\"></span>

    <div class=\"button-call_perezvon button-widget_perezvon\">Позвоните мне</div>
</div>", "v1/blocks/scripts/_mango.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\blocks\\scripts\\_mango.html.twig");
    }
}
