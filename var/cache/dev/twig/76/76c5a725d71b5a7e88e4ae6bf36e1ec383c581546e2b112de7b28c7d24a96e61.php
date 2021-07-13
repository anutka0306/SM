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

/* v2/pages/contact/contact_form.html.twig */
class __TwigTemplate_86a1430818877a175c4efe17a2eb63f448a6954e53c097c5c55ca44bb281365d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/pages/contact/contact_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/pages/contact/contact_form.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div id=\"feedback-contacts\" class=\"col-md-12\">
        <div class=\"title5 fs24\">Обратная связь</div>
        <form class=\"ajax_form\" action=\"\" method=\"post\" id=\"form-contact\" data-callibri_parse_form=\"true\" />
            <div class=\"row\">
                <div class=\"col-md-4 col-xs-12\">
                    <input type=\"text\" name=\"user_name_contact\"  placeholder=\"Ваше имя\" class=\"input-name\">
                    <input type=\"text\" name=\"user_email_contact\"  placeholder=\"Ваш E-mail\" class=\"input-email\">
                    <input type=\"text\" name=\"user_phone_contact\"  placeholder=\"+7 (___) ___-____\" class=\"input-phone mask-phone error\">
                    <div class=\"form-group\">
                        <div class=\"form__select\">
                            <select name=\"salon_contact\" class=\"salon form-control error\">
                                <option value=\"\">Выберите автосервис*</option>
                                <option value=\"Научный\">Автосервис на Научном</option>
                                <option value=\"Лобненская\">Автосервис на Лобненской</option>
                                <option value=\"Севастопольский\">Автосервис на Севастопольском</option>
                                <!--<option value=\"Нижегородка\">Автосервис на Нижегородской</option>-->
                                <option value=\"Удальцова\">Автосервис на Удальцова</option>
                                <!--<option value=\"Тест\">Тест</option>-->
                            </select></div>
                    </div>
                </div>
                <div class=\"col-md-8 col-xs-12\">

                    <textarea placeholder=\"Оставьте комментарий\" name=\"comment_contact\" id=\"comment_contact\"></textarea>
                    <span id=\"csContact\" class=\"countsymbols\"></span>
                </div>

                <div class=\"col-md-6 col-xs-12\">
                    <div class=\"agreement_row\">
                        <input type=\"checkbox\" name=\"agreement\" id=\"agreement\" checked=\"\" required=\"\">
                        <label for=\"agreement\">
                            <a href=\"/agreement/\" target=\"_blank\">Согласен с политикой конфиденциальности</a>
                        </label>
                    </div>
                </div>

                <div class=\"col-md-6 col-xs-12\">
                    <div class=\"submit-wrapper\">
                        <input type=\"submit\" name=\"submit\" value=\"Отправить\" class=\"btn\" data-callibri_parse_form=\"true\" id=\"btn\">
                    </div>
                </div>

            </div>


            <div id=\"result_form\"></div>
    </div>

</div>


<script>
    \$( document ).ready(function() {
        \$(\"#btn\").click(
            function(event){
                event.preventDefault();
                \$('#result_form').empty();
                sendAjaxForm('result_form', 'ajax_form', '";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_form");
        echo "');
            }
        );
    });

    function sendAjaxForm(result_form, ajax_form, url) {
        \$.ajax({
            url:     url,
            type:     \"POST\", //метод отправки
            dataType: \"html\", //формат данных

            data: \$(\"#form-contact\").serialize(),  // Сеарилизуем объект
            success: function(response) { //Данные отправлены успешно
                let result = JSON.parse(response);
                if(result['errors']){
                    result['errors'].forEach(function (error) {
                        \$('#result_form').append('<p class=\"alert alert-danger\">' + error + '</p>');
                    });
                }else if (result['success']) {
                    \$('#result_form').html('<p class=\"alert alert-success\">Спасибо! Ваше сообщение отправлено.</p>');
                }
            },
            error: function(response) { // Данные не отправлены
                \$('#result_form').html('<p class=\"alert alert-danger\">Ошибка. Данные не отправлены.</p>');
            }
        });
    }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/pages/contact/contact_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 59,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div id=\"feedback-contacts\" class=\"col-md-12\">
        <div class=\"title5 fs24\">Обратная связь</div>
        <form class=\"ajax_form\" action=\"\" method=\"post\" id=\"form-contact\" data-callibri_parse_form=\"true\" />
            <div class=\"row\">
                <div class=\"col-md-4 col-xs-12\">
                    <input type=\"text\" name=\"user_name_contact\"  placeholder=\"Ваше имя\" class=\"input-name\">
                    <input type=\"text\" name=\"user_email_contact\"  placeholder=\"Ваш E-mail\" class=\"input-email\">
                    <input type=\"text\" name=\"user_phone_contact\"  placeholder=\"+7 (___) ___-____\" class=\"input-phone mask-phone error\">
                    <div class=\"form-group\">
                        <div class=\"form__select\">
                            <select name=\"salon_contact\" class=\"salon form-control error\">
                                <option value=\"\">Выберите автосервис*</option>
                                <option value=\"Научный\">Автосервис на Научном</option>
                                <option value=\"Лобненская\">Автосервис на Лобненской</option>
                                <option value=\"Севастопольский\">Автосервис на Севастопольском</option>
                                <!--<option value=\"Нижегородка\">Автосервис на Нижегородской</option>-->
                                <option value=\"Удальцова\">Автосервис на Удальцова</option>
                                <!--<option value=\"Тест\">Тест</option>-->
                            </select></div>
                    </div>
                </div>
                <div class=\"col-md-8 col-xs-12\">

                    <textarea placeholder=\"Оставьте комментарий\" name=\"comment_contact\" id=\"comment_contact\"></textarea>
                    <span id=\"csContact\" class=\"countsymbols\"></span>
                </div>

                <div class=\"col-md-6 col-xs-12\">
                    <div class=\"agreement_row\">
                        <input type=\"checkbox\" name=\"agreement\" id=\"agreement\" checked=\"\" required=\"\">
                        <label for=\"agreement\">
                            <a href=\"/agreement/\" target=\"_blank\">Согласен с политикой конфиденциальности</a>
                        </label>
                    </div>
                </div>

                <div class=\"col-md-6 col-xs-12\">
                    <div class=\"submit-wrapper\">
                        <input type=\"submit\" name=\"submit\" value=\"Отправить\" class=\"btn\" data-callibri_parse_form=\"true\" id=\"btn\">
                    </div>
                </div>

            </div>


            <div id=\"result_form\"></div>
    </div>

</div>


<script>
    \$( document ).ready(function() {
        \$(\"#btn\").click(
            function(event){
                event.preventDefault();
                \$('#result_form').empty();
                sendAjaxForm('result_form', 'ajax_form', '{{ (path(\"contact_form\")) }}');
            }
        );
    });

    function sendAjaxForm(result_form, ajax_form, url) {
        \$.ajax({
            url:     url,
            type:     \"POST\", //метод отправки
            dataType: \"html\", //формат данных

            data: \$(\"#form-contact\").serialize(),  // Сеарилизуем объект
            success: function(response) { //Данные отправлены успешно
                let result = JSON.parse(response);
                if(result['errors']){
                    result['errors'].forEach(function (error) {
                        \$('#result_form').append('<p class=\"alert alert-danger\">' + error + '</p>');
                    });
                }else if (result['success']) {
                    \$('#result_form').html('<p class=\"alert alert-success\">Спасибо! Ваше сообщение отправлено.</p>');
                }
            },
            error: function(response) { // Данные не отправлены
                \$('#result_form').html('<p class=\"alert alert-danger\">Ошибка. Данные не отправлены.</p>');
            }
        });
    }
</script>", "v2/pages/contact/contact_form.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\pages\\contact\\contact_form.html.twig");
    }
}
