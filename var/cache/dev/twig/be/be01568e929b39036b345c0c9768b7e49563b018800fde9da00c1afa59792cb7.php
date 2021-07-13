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

/* v2/blocks/section/services.html.twig */
class __TwigTemplate_50334b2282348f87765d1668ffbe963a0a11e3d3cce270a6d4fddb1c57420f4a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/services.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/services.html.twig"));

        // line 1
        echo "<div class=\"section-services\">
    <div class=\"uk-background-secondary\">
        <div class=\"uk-section uk-container\">
            <div class=\"uk-position-relative\">
                <h3 class=\"section-title\"><span>Услуги</span></h3>
                <div class=\"services-list uk-grid uk-grid-small uk-child-width-1-4@m uk-child-width-1-2\" data-uk-grid=\"data-uk-grid\">
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/body_works/\">
                                <div class=\"service-item__media\"><img ";
        // line 10
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/service-item-1.jpg"));
        echo " alt=\"Кузовной ремонт\" /></div>
                                <div class=\"service-item__title\"><span>Кузовной ремонт</span></div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/paint/local_paint/\">
                                <div class=\"service-item__media\"><img ";
        // line 18
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/service-item-2.jpg"));
        echo " alt=\"Покраска кузова\" /></div>
                                <div class=\"service-item__title\"><span>Покраска кузова</span></div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/repair_indents/remov_indents_paint/\">
                                <div class=\"service-item__media\"><img ";
        // line 26
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/service-item-3.jpg"));
        echo " alt=\"Удаление вмятин\" /></div>
                                <div class=\"service-item__title\"><span>Удаление вмятин</span></div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/remov_scratch/\">
                                <div class=\"service-item__media\"><img ";
        // line 34
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/service-item-4.jpg"));
        echo " alt=\"Удаление царапин\" /></div>
                                <div class=\"service-item__title\"><span>Удаление царапин</span></div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/repair_glass/\">
                                <div class=\"service-item__media\"><img ";
        // line 42
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/service-item-5.jpg"));
        echo " alt=\"Ремонт автостекол\" /></div>
                                <div class=\"service-item__title\"><span>Ремонт автостекол</span></div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/detailing/\">
                                <div class=\"service-item__media\"><img ";
        // line 50
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/service-item-6.jpg"));
        echo " alt=\"Детейлинг\" /></div>
                                <div class=\"service-item__title\"><span>Детейлинг</span></div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/local_body_repair/\">
                                <div class=\"service-item__media\"><img ";
        // line 58
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/service-item-7.jpg"));
        echo " alt=\"Локальный ремонт кузова\" /></div>
                                <div class=\"service-item__title\"><span>Локальный ремонт кузова</span></div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/repair_chips_paint/\">
                                <div class=\"service-item__media\"><img ";
        // line 66
        echo $this->extensions['App\Twig\LazyLoadExtension']->lazyLoad($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/service-item-8.jpg"));
        echo " alt=\"Ремонт и удаление сколов\" /></div>
                                <div class=\"service-item__title\"><span>Ремонт и удаление сколов</span></div>
                            </a>
                        </div>
                    </div>
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
        return "v2/blocks/section/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 66,  120 => 58,  109 => 50,  98 => 42,  87 => 34,  76 => 26,  65 => 18,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-services\">
    <div class=\"uk-background-secondary\">
        <div class=\"uk-section uk-container\">
            <div class=\"uk-position-relative\">
                <h3 class=\"section-title\"><span>Услуги</span></h3>
                <div class=\"services-list uk-grid uk-grid-small uk-child-width-1-4@m uk-child-width-1-2\" data-uk-grid=\"data-uk-grid\">
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/body_works/\">
                                <div class=\"service-item__media\"><img {{ lazy_load(asset('/assets/images/service-item-1.jpg')) }} alt=\"Кузовной ремонт\" /></div>
                                <div class=\"service-item__title\"><span>Кузовной ремонт</span></div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/paint/local_paint/\">
                                <div class=\"service-item__media\"><img {{ lazy_load(asset('/assets/images/service-item-2.jpg')) }} alt=\"Покраска кузова\" /></div>
                                <div class=\"service-item__title\"><span>Покраска кузова</span></div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/repair_indents/remov_indents_paint/\">
                                <div class=\"service-item__media\"><img {{ lazy_load(asset('/assets/images/service-item-3.jpg')) }} alt=\"Удаление вмятин\" /></div>
                                <div class=\"service-item__title\"><span>Удаление вмятин</span></div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/remov_scratch/\">
                                <div class=\"service-item__media\"><img {{ lazy_load(asset('/assets/images/service-item-4.jpg')) }} alt=\"Удаление царапин\" /></div>
                                <div class=\"service-item__title\"><span>Удаление царапин</span></div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/repair_glass/\">
                                <div class=\"service-item__media\"><img {{ lazy_load(asset('/assets/images/service-item-5.jpg')) }} alt=\"Ремонт автостекол\" /></div>
                                <div class=\"service-item__title\"><span>Ремонт автостекол</span></div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/detailing/\">
                                <div class=\"service-item__media\"><img {{ lazy_load(asset('/assets/images/service-item-6.jpg')) }} alt=\"Детейлинг\" /></div>
                                <div class=\"service-item__title\"><span>Детейлинг</span></div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/local_body_repair/\">
                                <div class=\"service-item__media\"><img {{ lazy_load(asset('/assets/images/service-item-7.jpg')) }} alt=\"Локальный ремонт кузова\" /></div>
                                <div class=\"service-item__title\"><span>Локальный ремонт кузова</span></div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"service-item\">
                            <a class=\"service-item__link\" href=\"/repair_chips_paint/\">
                                <div class=\"service-item__media\"><img {{ lazy_load(asset('/assets/images/service-item-8.jpg')) }} alt=\"Ремонт и удаление сколов\" /></div>
                                <div class=\"service-item__title\"><span>Ремонт и удаление сколов</span></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "v2/blocks/section/services.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\section\\services.html.twig");
    }
}
