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

/* elements/_advantages.html.twig */
class __TwigTemplate_286188482b122d7c55d7881ab2053c470a313e58935a0a17350acbe2115eca43 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_advantages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_advantages.html.twig"));

        // line 1
        echo "<div class=\"block_advantages\">
    <div class=\"block_advantages_bg\">
      <h2>Преимущества</h2>
      <div class=\"container container2\">
        <div class=\"row\">
          <div class=\"preimblock-b\">
              <img src=\"https://r-ms.ru/img/advantages/1.png\" alt=\"img\">
            <p>Специализированный сервис</p>
              ";
        // line 9
        if (((((isset($context["brandName"]) || array_key_exists("brandName", $context))) ? (_twig_default_filter((isset($context["brandName"]) || array_key_exists("brandName", $context) ? $context["brandName"] : (function () { throw new RuntimeError('Variable "brandName" does not exist.', 9, $this->source); })()))) : ("")) || (((isset($context["modelName"]) || array_key_exists("modelName", $context))) ? (_twig_default_filter((isset($context["modelName"]) || array_key_exists("modelName", $context) ? $context["modelName"] : (function () { throw new RuntimeError('Variable "modelName" does not exist.', 9, $this->source); })()))) : ("")))) {
            // line 10
            echo "                <span>«Мир АКПП» - это сеть специализированных автосервисов в Москве по ремонту и обслуживанию АКПП
                    ";
            // line 11
            if ((((isset($context["brandName"]) || array_key_exists("brandName", $context))) ? (_twig_default_filter((isset($context["brandName"]) || array_key_exists("brandName", $context) ? $context["brandName"] : (function () { throw new RuntimeError('Variable "brandName" does not exist.', 11, $this->source); })()))) : (""))) {
                // line 12
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["brandName"]) || array_key_exists("brandName", $context) ? $context["brandName"] : (function () { throw new RuntimeError('Variable "brandName" does not exist.', 12, $this->source); })()), "html", null, true);
                echo "
                    ";
            }
            // line 14
            echo "                    ";
            if ((((isset($context["modelName"]) || array_key_exists("modelName", $context))) ? (_twig_default_filter((isset($context["modelName"]) || array_key_exists("modelName", $context) ? $context["modelName"] : (function () { throw new RuntimeError('Variable "modelName" does not exist.', 14, $this->source); })()))) : (""))) {
                // line 15
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["modelName"]) || array_key_exists("modelName", $context) ? $context["modelName"] : (function () { throw new RuntimeError('Variable "modelName" does not exist.', 15, $this->source); })()), "html", null, true);
                echo "
                    ";
            }
            // line 17
            echo "                всех видов.</span>
              ";
        } else {
            // line 19
            echo "                <span>«Мир АКПП» - это сеть специализированных автосервисов в Москве по ремонту и обслуживанию АКПП
                всех видов.</span>
              ";
        }
        // line 22
        echo "          </div>
          <div class=\"preimblock-b\">
              <img src=\"https://r-ms.ru/img/advantages/1.png\" alt=\"img\">
            <p>Ремонт АКПП дешевле, чем у дилеров до 70%.</p>
            ";
        // line 26
        if (((((isset($context["brandName"]) || array_key_exists("brandName", $context))) ? (_twig_default_filter((isset($context["brandName"]) || array_key_exists("brandName", $context) ? $context["brandName"] : (function () { throw new RuntimeError('Variable "brandName" does not exist.', 26, $this->source); })()))) : ("")) || (((isset($context["modelName"]) || array_key_exists("modelName", $context))) ? (_twig_default_filter((isset($context["modelName"]) || array_key_exists("modelName", $context) ? $context["modelName"] : (function () { throw new RuntimeError('Variable "modelName" does not exist.', 26, $this->source); })()))) : ("")))) {
            // line 27
            echo "                <span>Ремонт АКПП
                    ";
            // line 28
            if ((((isset($context["brandName"]) || array_key_exists("brandName", $context))) ? (_twig_default_filter((isset($context["brandName"]) || array_key_exists("brandName", $context) ? $context["brandName"] : (function () { throw new RuntimeError('Variable "brandName" does not exist.', 28, $this->source); })()))) : (""))) {
                // line 29
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["brandName"]) || array_key_exists("brandName", $context) ? $context["brandName"] : (function () { throw new RuntimeError('Variable "brandName" does not exist.', 29, $this->source); })()), "html", null, true);
                echo "
                    ";
            }
            // line 31
            echo "                    ";
            if ((((isset($context["modelName"]) || array_key_exists("modelName", $context))) ? (_twig_default_filter((isset($context["modelName"]) || array_key_exists("modelName", $context) ? $context["modelName"] : (function () { throw new RuntimeError('Variable "modelName" does not exist.', 31, $this->source); })()))) : (""))) {
                // line 32
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["modelName"]) || array_key_exists("modelName", $context) ? $context["modelName"] : (function () { throw new RuntimeError('Variable "modelName" does not exist.', 32, $this->source); })()), "html", null, true);
                echo "
                    ";
            }
            // line 34
            echo "                     дешевле, чем у дилеров до 70%.</span>
              ";
        } else {
            // line 36
            echo "                <span>Ремонт АКПП дешевле, чем у дилеров до 70%.</span>
            ";
        }
        // line 38
        echo "          </div>
          <div class=\"preimblock-b\">
              <img src=\"https://r-ms.ru/img/advantages/1.png\" alt=\"img\">
            <p>Гарантия 2 года</p>
            ";
        // line 42
        if (((((isset($context["brandName"]) || array_key_exists("brandName", $context))) ? (_twig_default_filter((isset($context["brandName"]) || array_key_exists("brandName", $context) ? $context["brandName"] : (function () { throw new RuntimeError('Variable "brandName" does not exist.', 42, $this->source); })()))) : ("")) || (((isset($context["modelName"]) || array_key_exists("modelName", $context))) ? (_twig_default_filter((isset($context["modelName"]) || array_key_exists("modelName", $context) ? $context["modelName"] : (function () { throw new RuntimeError('Variable "modelName" does not exist.', 42, $this->source); })()))) : ("")))) {
            // line 43
            echo "            <span>Для ремонта трансмиссии
                ";
            // line 44
            if ((((isset($context["brandName"]) || array_key_exists("brandName", $context))) ? (_twig_default_filter((isset($context["brandName"]) || array_key_exists("brandName", $context) ? $context["brandName"] : (function () { throw new RuntimeError('Variable "brandName" does not exist.', 44, $this->source); })()))) : (""))) {
                // line 45
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["brandName"]) || array_key_exists("brandName", $context) ? $context["brandName"] : (function () { throw new RuntimeError('Variable "brandName" does not exist.', 45, $this->source); })()), "html", null, true);
                echo "
                ";
            }
            // line 47
            echo "                ";
            if ((((isset($context["modelName"]) || array_key_exists("modelName", $context))) ? (_twig_default_filter((isset($context["modelName"]) || array_key_exists("modelName", $context) ? $context["modelName"] : (function () { throw new RuntimeError('Variable "modelName" does not exist.', 47, $this->source); })()))) : (""))) {
                // line 48
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["modelName"]) || array_key_exists("modelName", $context) ? $context["modelName"] : (function () { throw new RuntimeError('Variable "modelName" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "
                ";
            }
            // line 50
            echo "                мы используем оригинальные комплектующие, поставляемые напрямую с заводов-изготовителей. Каждая деталь подбирается под конкретную модель трансмиссионного устройства.</span>
            ";
        } else {
            // line 52
            echo "            <span>Для ремонта трансмиссии мы используем оригинальные комплектующие, поставляемые напрямую с заводов-изготовителей. Каждая деталь подбирается под конкретную модель трансмиссионного устройства.</span>
            ";
        }
        // line 54
        echo "          </div>
        </div>
      </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "elements/_advantages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 54,  152 => 52,  148 => 50,  142 => 48,  139 => 47,  133 => 45,  131 => 44,  128 => 43,  126 => 42,  120 => 38,  116 => 36,  112 => 34,  106 => 32,  103 => 31,  97 => 29,  95 => 28,  92 => 27,  90 => 26,  84 => 22,  79 => 19,  75 => 17,  69 => 15,  66 => 14,  60 => 12,  58 => 11,  55 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"block_advantages\">
    <div class=\"block_advantages_bg\">
      <h2>Преимущества</h2>
      <div class=\"container container2\">
        <div class=\"row\">
          <div class=\"preimblock-b\">
              <img src=\"https://r-ms.ru/img/advantages/1.png\" alt=\"img\">
            <p>Специализированный сервис</p>
              {% if brandName|default or modelName|default %}
                <span>«Мир АКПП» - это сеть специализированных автосервисов в Москве по ремонту и обслуживанию АКПП
                    {% if brandName|default %}
                        {{ brandName }}
                    {% endif %}
                    {% if modelName|default %}
                        {{ modelName }}
                    {% endif %}
                всех видов.</span>
              {% else %}
                <span>«Мир АКПП» - это сеть специализированных автосервисов в Москве по ремонту и обслуживанию АКПП
                всех видов.</span>
              {% endif %}
          </div>
          <div class=\"preimblock-b\">
              <img src=\"https://r-ms.ru/img/advantages/1.png\" alt=\"img\">
            <p>Ремонт АКПП дешевле, чем у дилеров до 70%.</p>
            {% if brandName|default or modelName|default %}
                <span>Ремонт АКПП
                    {% if brandName|default %}
                    {{ brandName }}
                    {% endif %}
                    {% if modelName|default %}
                    {{ modelName }}
                    {% endif %}
                     дешевле, чем у дилеров до 70%.</span>
              {% else %}
                <span>Ремонт АКПП дешевле, чем у дилеров до 70%.</span>
            {% endif %}
          </div>
          <div class=\"preimblock-b\">
              <img src=\"https://r-ms.ru/img/advantages/1.png\" alt=\"img\">
            <p>Гарантия 2 года</p>
            {% if brandName|default or modelName|default %}
            <span>Для ремонта трансмиссии
                {% if brandName|default %}
                    {{ brandName }}
                {% endif %}
                {% if modelName|default %}
                    {{ modelName }}
                {% endif %}
                мы используем оригинальные комплектующие, поставляемые напрямую с заводов-изготовителей. Каждая деталь подбирается под конкретную модель трансмиссионного устройства.</span>
            {% else %}
            <span>Для ремонта трансмиссии мы используем оригинальные комплектующие, поставляемые напрямую с заводов-изготовителей. Каждая деталь подбирается под конкретную модель трансмиссионного устройства.</span>
            {% endif %}
          </div>
        </div>
      </div>
  </div>
</div>
", "elements/_advantages.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\elements\\_advantages.html.twig");
    }
}
