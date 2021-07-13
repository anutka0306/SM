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

/* v2/blocks/section/reviews.html.twig */
class __TwigTemplate_fe8d413a78b65e328f663898564900b4890295bfbe3ed523c0b015b1a946cb1e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/reviews.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/reviews.html.twig"));

        // line 1
        $context["ratingItems"] = [0 => ["link" => "https://zoon.ru/msk/autoservice/avtomasterskaya_detejlingof_na_sevastopolskom_prospekte/reviews/", "img" => "zoon.png", "alt" => "Zoon.ru", "stars" => "stars-4_5.png", "rating" => 4.2], 1 => ["link" => "https://yandex.ru/maps/-/CCQ8IAtFKD", "img" => "yandex.png", "alt" => "Yandex", "stars" => "stars-4_5.png", "rating" => 4.2], 2 => ["link" => "https://goo.gl/maps/pgEW4NmfVtwFrgL26", "img" => "google.png", "alt" => "Google", "stars" => "stars-5.png", "rating" => 5.0], 3 => ["link" => "https://go.2gis.com/8ea8s", "img" => "2gis.png", "alt" => "2 Gis", "stars" => "stars-5.png", "rating" => 5.0]];
        // line 31
        echo "
<div class=\"section-reviews\">
    <div class=\"uk-background-secondary\">
        <div class=\"uk-section-large uk-container\">
            <div class=\"uk-position-relative\">
                <h3 class=\"section-title\"><span>Отзывы</span></h3>
                <div class=\"reviews-slider uk-position-relative\">
                    <div tabindex=\"-1\" data-uk-slider=\"\">
                        <ul class=\"uk-slider-items uk-grid uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s\" data-uk-lightbox=\"data-uk-lightbox\">
                            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ratingItems"]) || array_key_exists("ratingItems", $context) ? $context["ratingItems"] : (function () { throw new RuntimeError('Variable "ratingItems" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ratingItem"]) {
            // line 41
            echo "                                <li>
                                    <div class=\"reviews-item\">
                                        <div class=\"reviews-item__logo\">
                                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ratingItem"], "link", [], "any", false, false, false, 44), "html", null, true);
            echo "\" target=\"_blank\"><img
                                                        src=\"/assets/images/rating/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ratingItem"], "img", [], "any", false, false, false, 45), "html", null, true);
            echo "\"
                                                        alt=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ratingItem"], "alt", [], "any", false, false, false, 46), "html", null, true);
            echo "\"/></a>
                                        </div>
                                        <div class=\"reviews-item__stars\"><span>Рейтинг</span><img
                                                    src=\"/assets/images/rating/";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ratingItem"], "stars", [], "any", false, false, false, 49), "html", null, true);
            echo "\" alt=\"star\"/>
                                        </div>
                                        <div class=\"reviews-item__rating\"><span>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ratingItem"], "rating", [], "any", false, false, false, 51), "html", null, true);
            echo "</span><span>от  5</span>
                                        </div>
                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ratingItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        </ul><a class=\"uk-position-center-left\" href=\"#\" data-uk-slidenav-previous=\"\" data-uk-slider-item=\"previous\"></a><a class=\"uk-position-center-right\" href=\"#\" data-uk-slidenav-next=\"\" data-uk-slider-item=\"next\"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v2/blocks/section/reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 56,  84 => 51,  79 => 49,  73 => 46,  69 => 45,  65 => 44,  60 => 41,  56 => 40,  45 => 31,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set ratingItems = [
    {
        'link' : 'https://zoon.ru/msk/autoservice/avtomasterskaya_detejlingof_na_sevastopolskom_prospekte/reviews/',
        'img': 'zoon.png',
        'alt': 'Zoon.ru',
        'stars': 'stars-4_5.png',
        'rating': 4.2
    },
    {
        'link' : 'https://yandex.ru/maps/-/CCQ8IAtFKD',
        'img': 'yandex.png',
        'alt': 'Yandex',
        'stars': 'stars-4_5.png',
        'rating': 4.2
    },
    {
        'link' : 'https://goo.gl/maps/pgEW4NmfVtwFrgL26',
        'img': 'google.png',
        'alt': 'Google',
        'stars': 'stars-5.png',
        'rating': 5.0
    },
    {
        'link' : 'https://go.2gis.com/8ea8s',
        'img': '2gis.png',
        'alt': '2 Gis',
        'stars': 'stars-5.png',
        'rating': 5.0
    },
] %}

<div class=\"section-reviews\">
    <div class=\"uk-background-secondary\">
        <div class=\"uk-section-large uk-container\">
            <div class=\"uk-position-relative\">
                <h3 class=\"section-title\"><span>Отзывы</span></h3>
                <div class=\"reviews-slider uk-position-relative\">
                    <div tabindex=\"-1\" data-uk-slider=\"\">
                        <ul class=\"uk-slider-items uk-grid uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s\" data-uk-lightbox=\"data-uk-lightbox\">
                            {% for ratingItem in ratingItems %}
                                <li>
                                    <div class=\"reviews-item\">
                                        <div class=\"reviews-item__logo\">
                                            <a href=\"{{ ratingItem.link }}\" target=\"_blank\"><img
                                                        src=\"/assets/images/rating/{{ ratingItem.img }}\"
                                                        alt=\"{{ ratingItem.alt }}\"/></a>
                                        </div>
                                        <div class=\"reviews-item__stars\"><span>Рейтинг</span><img
                                                    src=\"/assets/images/rating/{{ ratingItem.stars }}\" alt=\"star\"/>
                                        </div>
                                        <div class=\"reviews-item__rating\"><span>{{ ratingItem.rating }}</span><span>от  5</span>
                                        </div>
                                    </div>
                                </li>
                            {% endfor %}
                        </ul><a class=\"uk-position-center-left\" href=\"#\" data-uk-slidenav-previous=\"\" data-uk-slider-item=\"previous\"></a><a class=\"uk-position-center-right\" href=\"#\" data-uk-slidenav-next=\"\" data-uk-slider-item=\"next\"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>", "v2/blocks/section/reviews.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\section\\reviews.html.twig");
    }
}
