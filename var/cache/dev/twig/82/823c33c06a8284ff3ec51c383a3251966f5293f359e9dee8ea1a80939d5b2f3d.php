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

/* elements/_perezvon.html.twig */
class __TwigTemplate_d708021a4d67f6a1c494ba05df0442fd3fe258555f222b5ce6289febfa5d5cfe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_perezvon.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_perezvon.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"call-icon link-to-scroll\" type=\"button\" data-title=\"ЗАПИСАТЬСЯ ОНЛАЙН\" data-toggle=\"modal\" data-target=\"#callback_popup_call\"></a>

<div class=\"modal fade\" id=\"callback_popup_call\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"feedbackLabel\" aria-hidden=\"true\">
<div id=\"modal_1\" class=\"popwindow modal-dialog\" role=\"document\">
    <div class=\"popup-wrap1 modal-content\">
        <div>
            <div class=\"modal-header callback-popup-title\">
                <div style=\"width: 100%\">
                    <h5 class=\"modal-title\" id=\"callback_popup_title\">Заказать обратный звонок</h5>
                    <small>Оставьте ваши контакты, и наш менеджер<br>свяжется с Вами в ближайшее время.</small>
                </div>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>

            <div class=\"callback-popup-body\">
                <form class=\"ajax_form\" action=\"\" method=\"post\" id=\"call-form\" data-callibri_parse_form=\"true\">
                    <input type=\"text\" class=\"form-control\" name=\"user_name\" value=\"\" placeholder=\"Ваше имя\">
                    <input type=\"text\" class=\"form-control\" name=\"user_surname\" value=\"\" placeholder=\"Ваша фамилия\" style=\"left: -99999px; position:absolute;\">
                    <input type=\"text\" class=\"form-control\" name=\"user_phone\" value=\"\" placeholder=\"+7 (___) ___-____\" class=\"mask-phone\">

                    <span id=\"csCall\"></span>
                    <textarea class=\"form-control\" placeholder=\"Оставьте комментарий\" name=\"comment\" id=\"comment_call\"></textarea>

                    <div class=\"form-group\">
                        <div class=\"form__select\">
                            <select name=\"salon\" class=\"salon form-control\">
                                <option value=\"\">Выберите автосервис*</option>
                                <option value=\"Научный\">Автосервис на Научном</option>
                                <option value=\"Лобненская\">Автосервис на Лобненской</option>
                                <option value=\"Севастопольский\">Автосервис на Севастопольском</option>
                                <!--<option value=\"Нижегородка\">Автосервис на Нижегородской</option>-->
                                <option value=\"Удальцова\">Автосервис на Удальцова</option>
                                <!--<option value=\"Тест\">Тест</option>-->
                            </select></div>
                    </div>


                    <div class=\"callback-popup-footer\">
                        <input type=\"submit\" name=\"submit\" class=\"btn\" value=\"Отправить\" data-callibri_parse_form=\"true\">
                        <div class=\"agreement_row\">
                            <input type=\"checkbox\" name=\"agreement\" id=\"agreement\" checked=\"\" required=\"\">
                            <label for=\"agreement\">
                                <a href=\"/agreement/\" target=\"_blank\">Согласен с политикой конфиденциальности</a>
                            </label>
                        </div>

                        <input type=\"hidden\" name=\"af_action\" value=\"8566d34660c02b3a933bde1b479492cb\">
                    </div>
                </form>
            </div>

        </div>
    </div>
    <button data-fancybox-close=\"\" class=\"fancybox-close-small\">×</button></div>
</div>


<script>
    \$( document ).ready(function() {
        \$('#callback_popup_call').on('show.bs.modal', function (event) {
            var button = \$(event.relatedTarget);
            var title = button.data('title');
            \$('#callback_popup_title').html(title);
        });
        \$(\"#callback_popup_phone\").mask(\"+7(999) 999-99-99\");
    });
    function send_form(){
        var name = \$('#callback_popup_name').val();
        var phone = \$('#callback_popup_phone').val();
        var service = \$('#callback_popup_service').val();
        if(!name.length)
            return false;
        if(!phone.length)
            return false;
        if(!service.length)
            return false;
        phone = Number(phone.replace(/\\D+/g,\"\"));
        console.log('Send: ' + name + ' ' + phone + ' ' + service);

        \$('#callback_popup').modal('hide');
    }
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "elements/_perezvon.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"#\" class=\"call-icon link-to-scroll\" type=\"button\" data-title=\"ЗАПИСАТЬСЯ ОНЛАЙН\" data-toggle=\"modal\" data-target=\"#callback_popup_call\"></a>

<div class=\"modal fade\" id=\"callback_popup_call\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"feedbackLabel\" aria-hidden=\"true\">
<div id=\"modal_1\" class=\"popwindow modal-dialog\" role=\"document\">
    <div class=\"popup-wrap1 modal-content\">
        <div>
            <div class=\"modal-header callback-popup-title\">
                <div style=\"width: 100%\">
                    <h5 class=\"modal-title\" id=\"callback_popup_title\">Заказать обратный звонок</h5>
                    <small>Оставьте ваши контакты, и наш менеджер<br>свяжется с Вами в ближайшее время.</small>
                </div>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>

            <div class=\"callback-popup-body\">
                <form class=\"ajax_form\" action=\"\" method=\"post\" id=\"call-form\" data-callibri_parse_form=\"true\">
                    <input type=\"text\" class=\"form-control\" name=\"user_name\" value=\"\" placeholder=\"Ваше имя\">
                    <input type=\"text\" class=\"form-control\" name=\"user_surname\" value=\"\" placeholder=\"Ваша фамилия\" style=\"left: -99999px; position:absolute;\">
                    <input type=\"text\" class=\"form-control\" name=\"user_phone\" value=\"\" placeholder=\"+7 (___) ___-____\" class=\"mask-phone\">

                    <span id=\"csCall\"></span>
                    <textarea class=\"form-control\" placeholder=\"Оставьте комментарий\" name=\"comment\" id=\"comment_call\"></textarea>

                    <div class=\"form-group\">
                        <div class=\"form__select\">
                            <select name=\"salon\" class=\"salon form-control\">
                                <option value=\"\">Выберите автосервис*</option>
                                <option value=\"Научный\">Автосервис на Научном</option>
                                <option value=\"Лобненская\">Автосервис на Лобненской</option>
                                <option value=\"Севастопольский\">Автосервис на Севастопольском</option>
                                <!--<option value=\"Нижегородка\">Автосервис на Нижегородской</option>-->
                                <option value=\"Удальцова\">Автосервис на Удальцова</option>
                                <!--<option value=\"Тест\">Тест</option>-->
                            </select></div>
                    </div>


                    <div class=\"callback-popup-footer\">
                        <input type=\"submit\" name=\"submit\" class=\"btn\" value=\"Отправить\" data-callibri_parse_form=\"true\">
                        <div class=\"agreement_row\">
                            <input type=\"checkbox\" name=\"agreement\" id=\"agreement\" checked=\"\" required=\"\">
                            <label for=\"agreement\">
                                <a href=\"/agreement/\" target=\"_blank\">Согласен с политикой конфиденциальности</a>
                            </label>
                        </div>

                        <input type=\"hidden\" name=\"af_action\" value=\"8566d34660c02b3a933bde1b479492cb\">
                    </div>
                </form>
            </div>

        </div>
    </div>
    <button data-fancybox-close=\"\" class=\"fancybox-close-small\">×</button></div>
</div>


<script>
    \$( document ).ready(function() {
        \$('#callback_popup_call').on('show.bs.modal', function (event) {
            var button = \$(event.relatedTarget);
            var title = button.data('title');
            \$('#callback_popup_title').html(title);
        });
        \$(\"#callback_popup_phone\").mask(\"+7(999) 999-99-99\");
    });
    function send_form(){
        var name = \$('#callback_popup_name').val();
        var phone = \$('#callback_popup_phone').val();
        var service = \$('#callback_popup_service').val();
        if(!name.length)
            return false;
        if(!phone.length)
            return false;
        if(!service.length)
            return false;
        phone = Number(phone.replace(/\\D+/g,\"\"));
        console.log('Send: ' + name + ' ' + phone + ' ' + service);

        \$('#callback_popup').modal('hide');
    }
</script>
", "elements/_perezvon.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\elements\\_perezvon.html.twig");
    }
}
