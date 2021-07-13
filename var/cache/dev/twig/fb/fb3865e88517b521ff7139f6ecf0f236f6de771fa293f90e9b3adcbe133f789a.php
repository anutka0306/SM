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

/* v2/pages/recaptcha.html.twig */
class __TwigTemplate_4243c89066ca343faad1e2e2ed3e5776b471499fbdfc6d73849b167276e266b6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/pages/recaptcha.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/pages/recaptcha.html.twig"));

        // line 1
        echo "<html>
    <head>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    </head>
    <body>
    <div style=\"font-size: 1.5rem;\" class=\"text-center p-3\">
        <div class=\"container d-flex justify-content-center\">
            <div class=\"row\">
                <form method=\"post\">
                    <div class=\"form-group\">
                        <p>Пожалуйста, поставьте галочку и нажмите кнопку Войти</p>
                        <div class=\"g-recaptcha d-flex justify-content-center\" data-sitekey=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["gg_recaptcha_site_key"]) || array_key_exists("gg_recaptcha_site_key", $context) ? $context["gg_recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "gg_recaptcha_site_key" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary btn-block\">Войти</button>
                </form>
            </div>
        </div>
    </div>
    <script src=\"https://www.google.com/recaptcha/api.js\"></script>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/pages/recaptcha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    </head>
    <body>
    <div style=\"font-size: 1.5rem;\" class=\"text-center p-3\">
        <div class=\"container d-flex justify-content-center\">
            <div class=\"row\">
                <form method=\"post\">
                    <div class=\"form-group\">
                        <p>Пожалуйста, поставьте галочку и нажмите кнопку Войти</p>
                        <div class=\"g-recaptcha d-flex justify-content-center\" data-sitekey=\"{{ gg_recaptcha_site_key }}\">
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary btn-block\">Войти</button>
                </form>
            </div>
        </div>
    </div>
    <script src=\"https://www.google.com/recaptcha/api.js\"></script>
    </body>
</html>", "v2/pages/recaptcha.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\pages\\recaptcha.html.twig");
    }
}
