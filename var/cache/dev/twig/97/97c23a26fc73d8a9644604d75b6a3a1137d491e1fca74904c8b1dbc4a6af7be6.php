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

/* salon/new.html.twig */
class __TwigTemplate_7eddf352e9a6fa1fd73321b254335d4123434b57f863224cf3ebd4e8719583d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salon/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salon/new.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
    <head>
        <title>New Salon</title>
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    </head>
    ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "    <script src=\"/bundles/easyadmin/app.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js\"></script>
    <script>
        \$(document).ready(function () {
            bsCustomFileInput.init()
        })
    </script>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "            ";
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
            <style type=\"text/css\">
                .form-group .col-form-label.required:after, .form-group label.required:after {
                    bottom: 4px;
                    color: red;
                    content: \"\\2022\";
                    filter: opacity(75%);
                    position: relative;
                    right: -2px;
                }
                .col-form-label, .form-group > label {
                    font-weight: bold;
                }
            </style>
            

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "        <div class=\"container\">
            <h1>Создать новый салон</h1>
            ";
        // line 30
        echo twig_include($this->env, $context, "salon/_form.html.twig");
        echo "

            <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">На главную страницу</a>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "salon/new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 32,  127 => 30,  123 => 28,  113 => 27,  87 => 9,  85 => 6,  75 => 5,  58 => 35,  56 => 27,  53 => 26,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ru\">
    <head>
        <title>New Salon</title>
        {% block stylesheets %}
            {# <link rel=\"stylesheet\" href=\"/bundles/easyadmin/app.css\">
            <link rel=\"stylesheet\" href=\"/css/admin.css\"> 
            <link rel=\"stylesheet\" href=\"/css/jquery.dm-uploader.css\"> #}
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
            <style type=\"text/css\">
                .form-group .col-form-label.required:after, .form-group label.required:after {
                    bottom: 4px;
                    color: red;
                    content: \"\\2022\";
                    filter: opacity(75%);
                    position: relative;
                    right: -2px;
                }
                .col-form-label, .form-group > label {
                    font-weight: bold;
                }
            </style>
            

        {% endblock %}
    </head>
    {% block body %}
        <div class=\"container\">
            <h1>Создать новый салон</h1>
            {{ include('salon/_form.html.twig') }}

            <a href=\"{{ path('home') }}\">На главную страницу</a>
        </div>
    {% endblock %}
    <script src=\"/bundles/easyadmin/app.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js\"></script>
    <script>
        \$(document).ready(function () {
            bsCustomFileInput.init()
        })
    </script>
</html>", "salon/new.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\salon\\new.html.twig");
    }
}
