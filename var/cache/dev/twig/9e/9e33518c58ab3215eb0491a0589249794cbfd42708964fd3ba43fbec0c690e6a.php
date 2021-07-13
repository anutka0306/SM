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

/* @EasyAdmin/default/paginator.html.twig */
class __TwigTemplate_9f2f37071084d5ded84c85eac40b7eaa31eff31e819a23ffa851e5c2309048a9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/paginator.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/paginator.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["_paginator_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 3, $this->source); })()), ["referer" => null]);
        // line 4
        echo "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.counter", ["%start%" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 7, $this->source); })()), "currentPageOffsetStart", [], "any", false, false, false, 7), "%end%" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 7, $this->source); })()), "currentPageOffsetEnd", [], "any", false, false, false, 7), "%results%" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 7, $this->source); })()), "nbResults", [], "any", false, false, false, 7)], "EasyAdminBundle");
        echo "
    </div>

    <div class=\"pager pagination list-pagination-paginator ";
        // line 10
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 10, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 10)) ? ("first-page") : (""));
        echo " ";
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 10, $this->source); })()), "hasNextPage", [], "any", false, false, false, 10)) ? ("last-page") : (""));
        echo "\">
        <a class=\"btn btn-secondary ";
        // line 11
        echo (((0 === twig_compare(1, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 11, $this->source); })()), "currentPage", [], "any", false, false, false, 11)))) ? ("disabled") : (""));
        echo "\"
           href=\"";
        // line 12
        (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 12, $this->source); })()), "currentPage", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 12, $this->source); })()), "nbPages", [], "any", false, false, false, 12)))) ? (print ("#")) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) || array_key_exists("_paginator_request_parameters", $context) ? $context["_paginator_request_parameters"] : (function () { throw new RuntimeError('Variable "_paginator_request_parameters" does not exist.', 12, $this->source); })()), ["page" => 1])), "html", null, true))));
        echo "\">
            <span class=\"btn-label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.first", [], "EasyAdminBundle"), "html", null, true);
        echo "</span> <i class=\"fa fa-angle-double-left\"></i>
        </a>
        <a class=\"btn btn-secondary ";
        // line 15
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 15, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 15)) ? ("disabled") : (""));
        echo "\"
           href=\"";
        // line 16
        (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 16, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 16)) ? (print ("#")) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) || array_key_exists("_paginator_request_parameters", $context) ? $context["_paginator_request_parameters"] : (function () { throw new RuntimeError('Variable "_paginator_request_parameters" does not exist.', 16, $this->source); })()), ["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 16, $this->source); })()), "previousPage", [], "any", false, false, false, 16)])), "html", null, true))));
        echo "\">
            <i class=\"fa fa-angle-left\"></i> <span class=\"btn-label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
        echo "</span>
        </a>

        ";
        // line 21
        echo "
        ";
        // line 23
        echo "        ";
        $context["nearbyPagesLimit"] = 5;
        // line 24
        echo "
        ";
        // line 25
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 25, $this->source); })()), "currentPage", [], "any", false, false, false, 25), 1))) {
            // line 26
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 26, $this->source); })()), "currentPage", [], "any", false, false, false, 26) - (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new RuntimeError('Variable "nearbyPagesLimit" does not exist.', 26, $this->source); })())), (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 26, $this->source); })()), "currentPage", [], "any", false, false, false, 26) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 27
                echo "                ";
                if ((1 === twig_compare($context["i"], 0))) {
                    // line 28
                    echo "                    <a class=\"btn btn-secondary\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) || array_key_exists("_paginator_request_parameters", $context) ? $context["_paginator_request_parameters"] : (function () { throw new RuntimeError('Variable "_paginator_request_parameters" does not exist.', 28, $this->source); })()), ["page" => $context["i"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                ";
                }
                // line 30
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        <a class=\"btn btn-secondary\" class=\"current\" style=\"background-color: #e3e7ed\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 33, $this->source); })()), "currentPage", [], "any", false, false, false, 33), "html", null, true);
        echo "</a>

        ";
        // line 35
        if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 35, $this->source); })()), "currentPage", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 35, $this->source); })()), "nbPages", [], "any", false, false, false, 35)))) {
            // line 36
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 36, $this->source); })()), "currentPage", [], "any", false, false, false, 36) + 1), (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 36, $this->source); })()), "currentPage", [], "any", false, false, false, 36) + (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new RuntimeError('Variable "nearbyPagesLimit" does not exist.', 36, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 37
                echo "                ";
                if ((0 >= twig_compare($context["i"], twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 37, $this->source); })()), "nbPages", [], "any", false, false, false, 37)))) {
                    // line 38
                    echo "                    <a class=\"btn btn-secondary\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) || array_key_exists("_paginator_request_parameters", $context) ? $context["_paginator_request_parameters"] : (function () { throw new RuntimeError('Variable "_paginator_request_parameters" does not exist.', 38, $this->source); })()), ["page" => $context["i"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                ";
                }
                // line 40
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        ";
        }
        // line 42
        echo "
        ";
        // line 44
        echo "
        <a class=\"btn btn-secondary ";
        // line 45
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 45, $this->source); })()), "hasNextPage", [], "any", false, false, false, 45)) ? ("disabled") : (""));
        echo "\"
           href=\"";
        // line 46
        (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 46, $this->source); })()), "hasNextPage", [], "any", false, false, false, 46)) ? (print ("#")) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) || array_key_exists("_paginator_request_parameters", $context) ? $context["_paginator_request_parameters"] : (function () { throw new RuntimeError('Variable "_paginator_request_parameters" does not exist.', 46, $this->source); })()), ["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 46, $this->source); })()), "nextPage", [], "any", false, false, false, 46)])), "html", null, true))));
        echo "\">
            <span class=\"btn-label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
        echo "</span> <i class=\"fa fa-angle-right\"></i>
        </a>
        <a class=\"btn btn-secondary ";
        // line 49
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 49, $this->source); })()), "currentPage", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 49, $this->source); })()), "nbPages", [], "any", false, false, false, 49)))) ? ("disabled") : (""));
        echo "\"
           href=\"";
        // line 50
        (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 50, $this->source); })()), "currentPage", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 50, $this->source); })()), "nbPages", [], "any", false, false, false, 50)))) ? (print ("#")) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) || array_key_exists("_paginator_request_parameters", $context) ? $context["_paginator_request_parameters"] : (function () { throw new RuntimeError('Variable "_paginator_request_parameters" does not exist.', 50, $this->source); })()), ["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 50, $this->source); })()), "nbPages", [], "any", false, false, false, 50)])), "html", null, true))));
        echo "\">
            <span class=\"btn-label\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.last", [], "EasyAdminBundle"), "html", null, true);
        echo "</span> <i class=\"fa fa-angle-double-right\"></i>
        </a>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 51,  186 => 50,  182 => 49,  177 => 47,  173 => 46,  169 => 45,  166 => 44,  163 => 42,  160 => 41,  154 => 40,  146 => 38,  143 => 37,  138 => 36,  136 => 35,  131 => 33,  128 => 32,  125 => 31,  119 => 30,  111 => 28,  108 => 27,  103 => 26,  101 => 25,  98 => 24,  95 => 23,  92 => 21,  86 => 17,  82 => 16,  78 => 15,  73 => 13,  69 => 12,  65 => 11,  59 => 10,  53 => 7,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'EasyAdminBundle' %}

{% set _paginator_request_parameters = _request_parameters|merge({'referer': null}) %}

<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        {{ 'paginator.counter'|trans({ '%start%': paginator.currentPageOffsetStart, '%end%': paginator.currentPageOffsetEnd, '%results%': paginator.nbResults})|raw }}
    </div>

    <div class=\"pager pagination list-pagination-paginator {{ not paginator.hasPreviousPage ? 'first-page' }} {{ not paginator.hasNextPage ? 'last-page' }}\">
        <a class=\"btn btn-secondary {{ 1 == paginator.currentPage? 'disabled' }}\"
           href=\"{{ paginator.currentPage == paginator.nbPages ? '#' : path('easyadmin', _paginator_request_parameters|merge({ page: 1 }) ) }}\">
            <span class=\"btn-label\">{{ 'paginator.first'|trans }}</span> <i class=\"fa fa-angle-double-left\"></i>
        </a>
        <a class=\"btn btn-secondary {{ not paginator.hasPreviousPage ? 'disabled' }}\"
           href=\"{{ not paginator.hasPreviousPage ? '#' : path('easyadmin', _paginator_request_parameters|merge({ page: paginator.previousPage }) ) }}\">
            <i class=\"fa fa-angle-left\"></i> <span class=\"btn-label\">{{ 'paginator.previous'|trans }}</span>
        </a>

        {# BEGIN DISPLAYING PAGE NUMBERS #}

        {# the number of pages that are displayed around the active page #}
        {% set nearbyPagesLimit = 5 %}

        {% if paginator.currentPage > 1 %}
            {% for i in range(paginator.currentPage-nearbyPagesLimit, paginator.currentPage-1) %}
                {% if ( i > 0 ) %}
                    <a class=\"btn btn-secondary\" href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: i }) ) }}\">{{ i }}</a>
                {% endif %}
            {% endfor %}
        {% endif %}

        <a class=\"btn btn-secondary\" class=\"current\" style=\"background-color: #e3e7ed\">{{ paginator.currentPage }}</a>

        {% if paginator.currentPage < paginator.nbPages %}
            {% for i in range(paginator.currentPage+1, paginator.currentPage + nearbyPagesLimit) %}
                {% if ( i <= paginator.nbPages ) %}
                    <a class=\"btn btn-secondary\" href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: i }) ) }}\">{{ i }}</a>
                {% endif %}
            {% endfor %}
        {% endif %}

        {# END DISPLAYING PAGE NUMBERS #}

        <a class=\"btn btn-secondary {{ not paginator.hasNextPage ? 'disabled' }}\"
           href=\"{{ not paginator.hasNextPage ? '#' : path('easyadmin', _paginator_request_parameters|merge({ page: paginator.nextPage }) ) }}\">
            <span class=\"btn-label\">{{ 'paginator.next'|trans }}</span> <i class=\"fa fa-angle-right\"></i>
        </a>
        <a class=\"btn btn-secondary {{ paginator.currentPage == paginator.nbPages ? 'disabled' }}\"
           href=\"{{ paginator.currentPage == paginator.nbPages ? '#' : path('easyadmin', _paginator_request_parameters|merge({ page: paginator.nbPages }) ) }}\">
            <span class=\"btn-label\">{{ 'paginator.last'|trans }}</span> <i class=\"fa fa-angle-double-right\"></i>
        </a>
    </div>
</div>", "@EasyAdmin/default/paginator.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\bundles\\EasyAdminBundle\\default\\paginator.html.twig");
    }
}
