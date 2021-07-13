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

/* v1/widget/order_form.html.twig */
class __TwigTemplate_8d78deb74afef9205a63932653da8cab8e3d1226d29032be8ace2f8e0bda866b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/order_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/order_form.html.twig"));

        // line 1
        echo "<div class=\"footer-form lazy\" data-bg=\"url(/img/form-bg.png)\">
    <div class=\"container\">
        <div class=\"footer-form__wrap clearfix\">
            <div class=\"footer-form__left\">
                <p class=\"footer-form__left__title\">заявка на просчет</p>
                <p class=\"footer-form__left__descr\"><a
                            href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["whatsapp_link"]) || array_key_exists("whatsapp_link", $context) ? $context["whatsapp_link"] : (function () { throw new RuntimeError('Variable "whatsapp_link" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\"
                            target=\"_blank\"
                            class=\"whatsapppop\">Отправьте нам</a> заявку с фото и получите просчет фиксированной стоимости ремонта вашего авто
                </p>
            </div>
            <div class=\"footer-form__right\">
                <form method=\"post\" action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mail.callback_consultation");
        echo "\">
                    <div class=\"input-block\"><input type=\"tel\" class=\"phone\" name=\"phone\" placeholder=\"Ваш телефон\"
                                                    required=\"\" im-insert=\"true\">
                        <p class=\"error-input\"></p></div>

                    <div class=\"input-block\">
                        <select class=\"dropdown\" name=\"location\">
                            <option value=\"0\" selected=\"\">Выберите Центр</option>
                            <option value=\"lobn\">На Лобненской</option>
                            <option value=\"udal\">На Удальцова</option>
                            <option value=\"sev\">На Севастопольском</option>
                        </select>
                        <p class=\"error-input\"></p>
                    </div>
                    <input type=\"hidden\" name=\"subject\" value=\"Запись на сервис в техцентр «ДетейлингофЪ»\">
                    <div class=\"footer-form__right__button\">
                        <button type=\"submit\" value=\"Отправить заявку\" class=\"callback_submit\">Отправить заявку</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/order_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer-form lazy\" data-bg=\"url(/img/form-bg.png)\">
    <div class=\"container\">
        <div class=\"footer-form__wrap clearfix\">
            <div class=\"footer-form__left\">
                <p class=\"footer-form__left__title\">заявка на просчет</p>
                <p class=\"footer-form__left__descr\"><a
                            href=\"{{ whatsapp_link }}\"
                            target=\"_blank\"
                            class=\"whatsapppop\">Отправьте нам</a> заявку с фото и получите просчет фиксированной стоимости ремонта вашего авто
                </p>
            </div>
            <div class=\"footer-form__right\">
                <form method=\"post\" action=\"{{ path('mail.callback_consultation') }}\">
                    <div class=\"input-block\"><input type=\"tel\" class=\"phone\" name=\"phone\" placeholder=\"Ваш телефон\"
                                                    required=\"\" im-insert=\"true\">
                        <p class=\"error-input\"></p></div>

                    <div class=\"input-block\">
                        <select class=\"dropdown\" name=\"location\">
                            <option value=\"0\" selected=\"\">Выберите Центр</option>
                            <option value=\"lobn\">На Лобненской</option>
                            <option value=\"udal\">На Удальцова</option>
                            <option value=\"sev\">На Севастопольском</option>
                        </select>
                        <p class=\"error-input\"></p>
                    </div>
                    <input type=\"hidden\" name=\"subject\" value=\"Запись на сервис в техцентр «ДетейлингофЪ»\">
                    <div class=\"footer-form__right__button\">
                        <button type=\"submit\" value=\"Отправить заявку\" class=\"callback_submit\">Отправить заявку</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>", "v1/widget/order_form.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\order_form.html.twig");
    }
}
