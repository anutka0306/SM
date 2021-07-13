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

/* v1/blocks/popup/_callback-popup.html.twig */
class __TwigTemplate_b7d590cb1946134b9f1e2c14b2176c392f4c0f588f7ec19dac361e1b5731059b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/popup/_callback-popup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/popup/_callback-popup.html.twig"));

        // line 1
        echo "<div class=\"popup\">
    <div id=\"callback-popup\" class=\"popup__wrap\">
        <div class=\"close\">&#215;</div>
        <form class=\"form\" method=\"post\"  action=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mail.callback_consultation");
        echo "\">
            <div class=\"form-body\">
                <p class=\"middle_text_form\">Запись на сервис</p>

                <div class=\"row-form\">
                    <div class=\"form-group\">
                        <label>Телефон*:</label>
                        <input type=\"tel\" name=\"phone\" class=\"phone\" required=\"\" im-insert=\"true\">
                        <span class=\"error-input\"></span>
                    </div>
                </div>
                <div class=\"row-form\">
                    <div class=\"input-block\">
                        <label>Выберите Центр:</label>
                        <select class=\"dropdown\" name=\"location\">
                            <option value=\"lobn\" selected=\"\">На Лобненской</option>
                            <option value=\"udal\">На Удальцова</option>
                            <option value=\"sev\">На Севастопольском</option>
                        </select>
                        <p class=\"error-input\"></p>
                    </div>
                </div>
                <input type=\"hidden\" name=\"subject\" value=\"Запись на сервис в техцентр «ДетейлингофЪ»\">
                <button type=\"submit\" class=\"btn btn_full callback_submit\">Отправить</button>
                <div class=\"agreement_row\">
                    <input type=\"checkbox\" class=\"agreement_checkbox\" name=\"agreement\" id=\"agreement\" checked required>
                    <label for=\"agreement\">
                        <a href=\"/agreement/\" target=\"_blank\">Согласен с политикой конфиденциальности</a>
                    </label>
                </div>
            </div>
            <div class=\"form-msg\">
                <div class=\"form-msg__text\">Ваша заявка принята.</div>
                <div class=\"form-msg__text\">Мы Вам перезвоним!</div>
            </div>
        </form>
    </div>

</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/blocks/popup/_callback-popup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"popup\">
    <div id=\"callback-popup\" class=\"popup__wrap\">
        <div class=\"close\">&#215;</div>
        <form class=\"form\" method=\"post\"  action=\"{{ path('mail.callback_consultation') }}\">
            <div class=\"form-body\">
                <p class=\"middle_text_form\">Запись на сервис</p>

                <div class=\"row-form\">
                    <div class=\"form-group\">
                        <label>Телефон*:</label>
                        <input type=\"tel\" name=\"phone\" class=\"phone\" required=\"\" im-insert=\"true\">
                        <span class=\"error-input\"></span>
                    </div>
                </div>
                <div class=\"row-form\">
                    <div class=\"input-block\">
                        <label>Выберите Центр:</label>
                        <select class=\"dropdown\" name=\"location\">
                            <option value=\"lobn\" selected=\"\">На Лобненской</option>
                            <option value=\"udal\">На Удальцова</option>
                            <option value=\"sev\">На Севастопольском</option>
                        </select>
                        <p class=\"error-input\"></p>
                    </div>
                </div>
                <input type=\"hidden\" name=\"subject\" value=\"Запись на сервис в техцентр «ДетейлингофЪ»\">
                <button type=\"submit\" class=\"btn btn_full callback_submit\">Отправить</button>
                <div class=\"agreement_row\">
                    <input type=\"checkbox\" class=\"agreement_checkbox\" name=\"agreement\" id=\"agreement\" checked required>
                    <label for=\"agreement\">
                        <a href=\"/agreement/\" target=\"_blank\">Согласен с политикой конфиденциальности</a>
                    </label>
                </div>
            </div>
            <div class=\"form-msg\">
                <div class=\"form-msg__text\">Ваша заявка принята.</div>
                <div class=\"form-msg__text\">Мы Вам перезвоним!</div>
            </div>
        </form>
    </div>

</div>", "v1/blocks/popup/_callback-popup.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\blocks\\popup\\_callback-popup.html.twig");
    }
}
