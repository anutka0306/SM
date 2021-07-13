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

/* v1/blocks/scripts/_schema.html.twig */
class __TwigTemplate_338d474c876e4a992e5c1f6eefe141c09e9897f933e0fbdc8697a2b2f891e14b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/scripts/_schema.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/scripts/_schema.html.twig"));

        // line 1
        echo "<script type=\"application/ld+json\">
{
\t\"@context\" : \"https://schema.org\",
\t\"@type\" : \"LocalBusiness\",
\t\"name\" : \"ДетейлингофЪ\",
\t\"image\" : \"https://fuelfuture.ru/images/llooogo.png\",
\t\"telephone\" : \"+7(800) 775-79-61\",
\t\"email\" : \"\",
\t\"address\" : {
\t\t\"@type\" : \"PostalAddress\",
\t\t\"addressLocality\" : \"Москва\",
\t\t\"streetAddress\" : \"Севастопольский проспект 95Б стр. 2\",
\t\t\"addressCountry\" : \"Россия\"
\t},
\t\"sameAs\" : [ \"https://www.instagram.com/fuelfuture.ru\", \"https://www.facebook.com/fuelfuture.ru\", \"https://vk.com/fuelfuture\"],
\t\"openingHours\": \"Пн-Вс 09:00-21:00\",
\t\"paymentAccepted\": \"Оплата наличными, картой, рассрочка\",
\t\"priceRange\": \"1200-1800 нормочас\",
\t\"url\" : \"https://fuelfuture.ru\",
\t\"aggregateRating\" : {
\t\t\"@type\" : \"AggregateRating\",
\t\t\"ratingValue\" : \"4,9\",
\t\t\"bestRating\" : \"5\",
\t\t\"worstRating\" : \"4\",
\t\t\"ratingCount\" : \"110\"
\t}


}
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/blocks/scripts/_schema.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"application/ld+json\">
{
\t\"@context\" : \"https://schema.org\",
\t\"@type\" : \"LocalBusiness\",
\t\"name\" : \"ДетейлингофЪ\",
\t\"image\" : \"https://fuelfuture.ru/images/llooogo.png\",
\t\"telephone\" : \"+7(800) 775-79-61\",
\t\"email\" : \"\",
\t\"address\" : {
\t\t\"@type\" : \"PostalAddress\",
\t\t\"addressLocality\" : \"Москва\",
\t\t\"streetAddress\" : \"Севастопольский проспект 95Б стр. 2\",
\t\t\"addressCountry\" : \"Россия\"
\t},
\t\"sameAs\" : [ \"https://www.instagram.com/fuelfuture.ru\", \"https://www.facebook.com/fuelfuture.ru\", \"https://vk.com/fuelfuture\"],
\t\"openingHours\": \"Пн-Вс 09:00-21:00\",
\t\"paymentAccepted\": \"Оплата наличными, картой, рассрочка\",
\t\"priceRange\": \"1200-1800 нормочас\",
\t\"url\" : \"https://fuelfuture.ru\",
\t\"aggregateRating\" : {
\t\t\"@type\" : \"AggregateRating\",
\t\t\"ratingValue\" : \"4,9\",
\t\t\"bestRating\" : \"5\",
\t\t\"worstRating\" : \"4\",
\t\t\"ratingCount\" : \"110\"
\t}


}
</script>", "v1/blocks/scripts/_schema.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\blocks\\scripts\\_schema.html.twig");
    }
}
