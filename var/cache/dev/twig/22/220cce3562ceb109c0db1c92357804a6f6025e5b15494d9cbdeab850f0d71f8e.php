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

/* v2/scripts/_schema.html.twig */
class __TwigTemplate_8951e7dcac86c14bc09dbf0fa621f54ef5db296c1f46e740ee41e2b56c20d1d2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/scripts/_schema.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/scripts/_schema.html.twig"));

        // line 1
        echo "<script type=\"application/ld+json\">
    {
        \"@context\" : \"https://schema.org\",
        \"@type\" : \"LocalBusiness\",
        \"name\" : \"МирАКПП\",
        \"image\" : \"https://www.mirakpp.ru/template/logo.png\",
        \"telephone\" : \"+7(495)150-69-21\",
        \"email\" : \"\",
        \"address\" : {
            \"@type\" : \"PostalAddress\",
            \"addressLocality\" : \"Москва\",
            \"streetAddress\" : \"Лобненская, 17 стр.1\",
            \"addressCountry\" : \"Россия\"
        },
        \"openingHours\": \"Пн-Вс 08:00-22:00\",
        \"paymentAccepted\": \"Оплата наличными, картой, рассрочка\",
        \"priceRange\": \"1200-1800 нормочас\",
        \"url\" : \"http://mirakpp.tw1.ru\",
        \"aggregateRating\" : {
            \"@type\" : \"AggregateRating\",
            \"ratingValue\" : \"4,9\",
            \"bestRating\" : \"5\",
            \"worstRating\" : \"4\",
            \"ratingCount\" : \"80\"
        }
    }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/scripts/_schema.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"application/ld+json\">
    {
        \"@context\" : \"https://schema.org\",
        \"@type\" : \"LocalBusiness\",
        \"name\" : \"МирАКПП\",
        \"image\" : \"https://www.mirakpp.ru/template/logo.png\",
        \"telephone\" : \"+7(495)150-69-21\",
        \"email\" : \"\",
        \"address\" : {
            \"@type\" : \"PostalAddress\",
            \"addressLocality\" : \"Москва\",
            \"streetAddress\" : \"Лобненская, 17 стр.1\",
            \"addressCountry\" : \"Россия\"
        },
        \"openingHours\": \"Пн-Вс 08:00-22:00\",
        \"paymentAccepted\": \"Оплата наличными, картой, рассрочка\",
        \"priceRange\": \"1200-1800 нормочас\",
        \"url\" : \"http://mirakpp.tw1.ru\",
        \"aggregateRating\" : {
            \"@type\" : \"AggregateRating\",
            \"ratingValue\" : \"4,9\",
            \"bestRating\" : \"5\",
            \"worstRating\" : \"4\",
            \"ratingCount\" : \"80\"
        }
    }
</script>", "v2/scripts/_schema.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\scripts\\_schema.html.twig");
    }
}
