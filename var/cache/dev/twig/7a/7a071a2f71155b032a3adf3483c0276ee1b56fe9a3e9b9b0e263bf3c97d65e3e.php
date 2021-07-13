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

/* v1/widget/brands.html.twig */
class __TwigTemplate_c061a19daa6eaab72c60ea451940d87bb76e40c8ce5414c9a02e1d24f32b032e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/brands.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/widget/brands.html.twig"));

        // line 1
        echo "<section id=\"brand\" class=\"brand\">
    <div class=\"wrapper\">
        <h2 class=\"brand-list-header\">Мы знаем все тонкости работы с каждым автомобилем</h2>
        <div class=\"row popular_brands\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["popular"]) || array_key_exists("popular", $context) ? $context["popular"] : (function () { throw new RuntimeError('Variable "popular" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 6
            echo "                <div class=\"brand_col\">
                    <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "path", [], "any", false, false, false, 7), "html", null, true);
            echo "\" class=\"brand_cont\">
                        <img ";
            // line 8
            echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["brand"], "imageUrl", [], "any", false, false, false, 8)));
            echo " alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "\" />
                        <div class=\"brand_name\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</div>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </div>
        <div class=\"row all-brands\" style=\"display: none;\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 16
            echo "                <div class=\"brand_col\">
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "path", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"brand_cont\">
                        <img ";
            // line 18
            echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["brand"], "imageUrl", [], "any", false, false, false, 18)));
            echo " alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "\" />
                        <div class=\"brand_name\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</div>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
        <div class=\"brand_line\">
            <div class=\"primary_button show-all-brands\">Показать все марки</div>
        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/widget/brands.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 23,  97 => 19,  91 => 18,  87 => 17,  84 => 16,  80 => 15,  76 => 13,  66 => 9,  60 => 8,  56 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"brand\" class=\"brand\">
    <div class=\"wrapper\">
        <h2 class=\"brand-list-header\">Мы знаем все тонкости работы с каждым автомобилем</h2>
        <div class=\"row popular_brands\">
            {% for brand in popular %}
                <div class=\"brand_col\">
                    <a href=\"{{ brand.path }}\" class=\"brand_cont\">
                        <img {{ lazy_load(asset(brand.imageUrl)) }} alt=\"{{ brand.name }}\" />
                        <div class=\"brand_name\">{{ brand.name }}</div>
                    </a>
                </div>
            {% endfor %}
        </div>
        <div class=\"row all-brands\" style=\"display: none;\">
            {% for brand in items %}
                <div class=\"brand_col\">
                    <a href=\"{{ brand.path }}\" class=\"brand_cont\">
                        <img {{ lazy_load(asset(brand.imageUrl)) }} alt=\"{{ brand.name }}\" />
                        <div class=\"brand_name\">{{ brand.name }}</div>
                    </a>
                </div>
            {% endfor %}
        </div>
        <div class=\"brand_line\">
            <div class=\"primary_button show-all-brands\">Показать все марки</div>
        </div>
    </div>
</section>", "v1/widget/brands.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\widget\\brands.html.twig");
    }
}
