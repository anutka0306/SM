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

/* v2/blocks/section/about.html.twig */
class __TwigTemplate_4e431afbfc79957d80b8f506bc562407f1ba9feaaa194f1eedd0ce63dc317cba extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v2/blocks/section/about.html.twig"));

        // line 1
        echo "<div class=\"section-about\">
    <div class=\"uk-section uk-container\">
        <div class=\"uk-position-relative\">
            <h3 class=\"section-title\"><span>Почему мы</span></h3>
            <div>
                <div class=\"about-items uk-grid uk-child-width-1-3@m  uk-child-width-1-2@s\" data-uk-grid=\"data-uk-grid\">
                    <div>
                        <div class=\"about-item\">
                            <div class=\"about-item__icon\"><img src=\"/assets/images/icons/about-1.png\" alt=\"about\" /></div>
                            <div class=\"about-item__desc\">
                                <div class=\"about-item__title\">Современная</div>
                                <div class=\"about-item__intro\">Покрасочная камера</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"about-item\">
                            <div class=\"about-item__icon\"><img src=\"/assets/images/icons/about-2.png\" alt=\"about\" /></div>
                            <div class=\"about-item__desc\">
                                <div class=\"about-item__title\">Официальная</div>
                                <div class=\"about-item__intro\">Пожизненная гарантия</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"about-item\">
                            <div class=\"about-item__icon\"><img src=\"/assets/images/icons/about-3.png\" alt=\"about\" /></div>
                            <div class=\"about-item__desc\">
                                <div class=\"about-item__title\">Честные</div>
                                <div class=\"about-item__intro\">Фиксированные цены. Без навязанных услуг</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"about-item\">
                            <div class=\"about-item__icon\"><img src=\"/assets/images/icons/about-4.png\" alt=\"about\" /></div>
                            <div class=\"about-item__desc\">
                                <div class=\"about-item__title\">Удобное<br> расположение</div>
                                <div class=\"about-item__intro\">3 автосервиса в разных округах москвы</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"about-item\">
                            <div class=\"about-item__icon\"><img src=\"/assets/images/icons/about-5.png\" alt=\"about\" /></div>
                            <div class=\"about-item__desc\">
                                <div class=\"about-item__title\">Опытные мастера</div>
                                <div class=\"about-item__intro\">со стажем более 10 лет</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"about-item\">
                            <div class=\"about-item__icon\"><img src=\"/assets/images/icons/about-6.png\" alt=\"about\" /></div>
                            <div class=\"about-item__desc\">
                                <div class=\"about-item__title\">100% попадание<br> в цвет</div>
                                <div class=\"about-item__intro\"></div>
                            </div>
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
        return "v2/blocks/section/about.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section-about\">
    <div class=\"uk-section uk-container\">
        <div class=\"uk-position-relative\">
            <h3 class=\"section-title\"><span>Почему мы</span></h3>
            <div>
                <div class=\"about-items uk-grid uk-child-width-1-3@m  uk-child-width-1-2@s\" data-uk-grid=\"data-uk-grid\">
                    <div>
                        <div class=\"about-item\">
                            <div class=\"about-item__icon\"><img src=\"/assets/images/icons/about-1.png\" alt=\"about\" /></div>
                            <div class=\"about-item__desc\">
                                <div class=\"about-item__title\">Современная</div>
                                <div class=\"about-item__intro\">Покрасочная камера</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"about-item\">
                            <div class=\"about-item__icon\"><img src=\"/assets/images/icons/about-2.png\" alt=\"about\" /></div>
                            <div class=\"about-item__desc\">
                                <div class=\"about-item__title\">Официальная</div>
                                <div class=\"about-item__intro\">Пожизненная гарантия</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"about-item\">
                            <div class=\"about-item__icon\"><img src=\"/assets/images/icons/about-3.png\" alt=\"about\" /></div>
                            <div class=\"about-item__desc\">
                                <div class=\"about-item__title\">Честные</div>
                                <div class=\"about-item__intro\">Фиксированные цены. Без навязанных услуг</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"about-item\">
                            <div class=\"about-item__icon\"><img src=\"/assets/images/icons/about-4.png\" alt=\"about\" /></div>
                            <div class=\"about-item__desc\">
                                <div class=\"about-item__title\">Удобное<br> расположение</div>
                                <div class=\"about-item__intro\">3 автосервиса в разных округах москвы</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"about-item\">
                            <div class=\"about-item__icon\"><img src=\"/assets/images/icons/about-5.png\" alt=\"about\" /></div>
                            <div class=\"about-item__desc\">
                                <div class=\"about-item__title\">Опытные мастера</div>
                                <div class=\"about-item__intro\">со стажем более 10 лет</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"about-item\">
                            <div class=\"about-item__icon\"><img src=\"/assets/images/icons/about-6.png\" alt=\"about\" /></div>
                            <div class=\"about-item__desc\">
                                <div class=\"about-item__title\">100% попадание<br> в цвет</div>
                                <div class=\"about-item__intro\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "v2/blocks/section/about.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v2\\blocks\\section\\about.html.twig");
    }
}
