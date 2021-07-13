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

/* v1/blocks/layout/callback_buttons.html.twig */
class __TwigTemplate_f31f7ba2593c049adbf954822d47869ac4282364b6ec5a2c9fb24b3e3ecb04d3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/layout/callback_buttons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/layout/callback_buttons.html.twig"));

        // line 1
        echo "<div class=\"callback_buttons\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"text-wrap\">
                    <div class=\"text1\"><b>★</b>Бесплатный аудит ЛКП и интерьера автомобиля + диагностика ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "getBrandAndModelName", [], "any", false, false, false, 6), "html", null, true);
        echo " по 43 пунктам.</div>
                </div>
            </div>
        </div>
        <div class=\"scard-wrap\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"scard popup-trigger\" data-title=\"Рассчитать стоимость\">
                        <span>Рассчитать</span>
                        <div>СТОИМОСТЬ</div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"scard popup-trigger\" data-title=\"Получить консультацию\">
                        <span>Получить</span>
                        <div>КОНСУЛЬТАЦИЮ</div>
                    </div>
                </div>
                ";
        // line 24
        if ($this->extensions['App\Twig\PriceListHelperExtension']->is_detailing((($context["page"]) ?? (null)))) {
            // line 25
            echo "                    <div class=\"col-md-4\">
                        <div class=\"scard popup-trigger\" data-title=\"Записаться на детейлинг\">
                            <span>Записаться</span>
                            <div>НА ДЕТЕЙЛИНГ</div>
                        </div>
                    </div>
                ";
        } else {
            // line 32
            echo "                    <div class=\"col-md-4\">
                        <div class=\"scard popup-trigger\" data-title=\"Заявка на эвакуатор\">
                            <span>Заявка</span>
                            <div>на эвакуатор</div>
                        </div>
                    </div>
                ";
        }
        // line 39
        echo "
            </div>
        </div>

    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/blocks/layout/callback_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 39,  82 => 32,  73 => 25,  71 => 24,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"callback_buttons\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"text-wrap\">
                    <div class=\"text1\"><b>★</b>Бесплатный аудит ЛКП и интерьера автомобиля + диагностика {{ page.getBrandAndModelName }} по 43 пунктам.</div>
                </div>
            </div>
        </div>
        <div class=\"scard-wrap\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"scard popup-trigger\" data-title=\"Рассчитать стоимость\">
                        <span>Рассчитать</span>
                        <div>СТОИМОСТЬ</div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"scard popup-trigger\" data-title=\"Получить консультацию\">
                        <span>Получить</span>
                        <div>КОНСУЛЬТАЦИЮ</div>
                    </div>
                </div>
                {% if is_detailing(page ?? null) %}
                    <div class=\"col-md-4\">
                        <div class=\"scard popup-trigger\" data-title=\"Записаться на детейлинг\">
                            <span>Записаться</span>
                            <div>НА ДЕТЕЙЛИНГ</div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-md-4\">
                        <div class=\"scard popup-trigger\" data-title=\"Заявка на эвакуатор\">
                            <span>Заявка</span>
                            <div>на эвакуатор</div>
                        </div>
                    </div>
                {% endif %}

            </div>
        </div>

    </div>
</div>", "v1/blocks/layout/callback_buttons.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\blocks\\layout\\callback_buttons.html.twig");
    }
}
