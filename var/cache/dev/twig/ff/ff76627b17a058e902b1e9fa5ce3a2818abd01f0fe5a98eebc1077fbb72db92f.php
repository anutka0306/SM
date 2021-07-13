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

/* v2/blocks/section/team.html.twig */
class __TwigTemplate_fa39bfd175a5f675daf989caf1cc3038faad9eefdac1d4c23d99aba92ae9a274 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/team.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/team.html.twig"));

        // line 1
        echo "<div class=\"section-team\">
    <div class=\"uk-section-large uk-container\">
        <div class=\"uk-position-relative\">
            <h3 class=\"section-title\"><span>Мастера</span></h3>
            <div class=\"uk-position-relative\">
                <div tabindex=\"-1\" data-uk-slider=\"\">
                    <ul class=\"uk-slider-items uk-grid uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s\" data-uk-lightbox=\"data-uk-lightbox\">
                        <li>
                            <div class=\"team-item\">
                                <div class=\"team-item__media\"><img ";
        // line 10
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/team-item-1.png"));
        echo " alt=\"Дружинин&lt;br&gt; Александр\" /></div>
                                <div class=\"team-item__name\">Дружинин<br> Александр</div>
                                <div class=\"team-item__position\">Мастер-приемщик</div>
                            </div>
                        </li>
                        <li>
                            <div class=\"team-item\">
                                <div class=\"team-item__media\"><img ";
        // line 17
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/team-item-2.png"));
        echo " alt=\"Полешов&lt;br&gt; Павел\" /></div>
                                <div class=\"team-item__name\">Полешов<br> Павел</div>
                                <div class=\"team-item__position\">Мастер-приемщик</div>
                            </div>
                        </li>
                        <li>
                            <div class=\"team-item\">
                                <div class=\"team-item__media\"><img ";
        // line 24
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/team-item-3.png"));
        echo " alt=\"Марыкин&lt;br&gt; Олег\" /></div>
                                <div class=\"team-item__name\">Марыкин<br> Олег</div>
                                <div class=\"team-item__position\">Мастер цеха</div>
                            </div>
                        </li>
                        <li>
                            <div class=\"team-item\">
                                <div class=\"team-item__media\"><img ";
        // line 31
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/team-item-4.png"));
        echo " alt=\"Кондрашов&lt;br&gt; Алексей\" /></div>
                                <div class=\"team-item__name\">Кондрашов<br> Алексей</div>
                                <div class=\"team-item__position\">Мастер-приемщик</div>
                            </div>
                        </li>
                    </ul>
                    <ul class=\"uk-slider-nav uk-dotnav uk-flex-center uk-margin\"></ul>
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
        return "v2/blocks/section/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  74 => 24,  64 => 17,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-team\">
    <div class=\"uk-section-large uk-container\">
        <div class=\"uk-position-relative\">
            <h3 class=\"section-title\"><span>Мастера</span></h3>
            <div class=\"uk-position-relative\">
                <div tabindex=\"-1\" data-uk-slider=\"\">
                    <ul class=\"uk-slider-items uk-grid uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s\" data-uk-lightbox=\"data-uk-lightbox\">
                        <li>
                            <div class=\"team-item\">
                                <div class=\"team-item__media\"><img {{ lazy_load(asset('/assets/images/team-item-1.png')) }} alt=\"Дружинин&lt;br&gt; Александр\" /></div>
                                <div class=\"team-item__name\">Дружинин<br> Александр</div>
                                <div class=\"team-item__position\">Мастер-приемщик</div>
                            </div>
                        </li>
                        <li>
                            <div class=\"team-item\">
                                <div class=\"team-item__media\"><img {{ lazy_load(asset('/assets/images/team-item-2.png')) }} alt=\"Полешов&lt;br&gt; Павел\" /></div>
                                <div class=\"team-item__name\">Полешов<br> Павел</div>
                                <div class=\"team-item__position\">Мастер-приемщик</div>
                            </div>
                        </li>
                        <li>
                            <div class=\"team-item\">
                                <div class=\"team-item__media\"><img {{ lazy_load(asset('/assets/images/team-item-3.png')) }} alt=\"Марыкин&lt;br&gt; Олег\" /></div>
                                <div class=\"team-item__name\">Марыкин<br> Олег</div>
                                <div class=\"team-item__position\">Мастер цеха</div>
                            </div>
                        </li>
                        <li>
                            <div class=\"team-item\">
                                <div class=\"team-item__media\"><img {{ lazy_load(asset('/assets/images/team-item-4.png')) }} alt=\"Кондрашов&lt;br&gt; Алексей\" /></div>
                                <div class=\"team-item__name\">Кондрашов<br> Алексей</div>
                                <div class=\"team-item__position\">Мастер-приемщик</div>
                            </div>
                        </li>
                    </ul>
                    <ul class=\"uk-slider-nav uk-dotnav uk-flex-center uk-margin\"></ul>
                </div>
            </div>
        </div>
    </div>
</div>", "v2/blocks/section/team.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\section\\team.html.twig");
    }
}
