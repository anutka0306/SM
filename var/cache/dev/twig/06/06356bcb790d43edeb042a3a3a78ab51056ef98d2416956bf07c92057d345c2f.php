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

/* elements/_price_list.html.twig */
class __TwigTemplate_5902ef30bfdc7728fd10b13a752d6b5beb9c51b92751c16240ff14e1bca6ec45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_price_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/_price_list.html.twig"));

        // line 1
        echo "<div class=\"price-list\">
  <div class=\"container container2\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-lg-2 mb-4\">
        <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
          <a class=\"price-list-category nav-link active\" id=\"v-pills-home-tab\" data-toggle=\"pill\" href=\"#v-pills-home\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">ТО</a>
          <a class=\"price-list-category nav-link\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Диагностика</a>
          <a class=\"price-list-category nav-link\" id=\"v-pills-messages-tab\" data-toggle=\"pill\" href=\"#v-pills-messages\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">Раздел</a>
          <a class=\"price-list-category nav-link\" id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"#v-pills-settings\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Раздел</a>
        </div>
      </div>
      <div class=\"col-sm-12 col-lg-10\">
        <div class=\"tab-content\" id=\"v-pills-tabContent\">
          <div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <div class=\"price-title\"><a href=\"#\">Audi</a></div>
                    <div class=\"price-model\"><a href=\"#\">A6</a></div>
                    <div class=\"price-model\"><a href=\"#\">A7</a></div>
                    <div class=\"price-model\"><a href=\"#\">A8</a></div>
                    <div class=\"price-model\"><a href=\"#\">A9</a></div>
                    <div class=\"price-model\"><a href=\"#\">A10</a></div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"price-title\"><a href=\"#\">BMW</a></div>
                    <div class=\"price-model\"><a href=\"#\">e46</a></div>
                    <div class=\"price-model\"><a href=\"#\">e47</a></div>
                    <div class=\"price-model\"><a href=\"#\">e127</a></div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"price-title\"><a href=\"#\">Ford</a></div>
                    <div class=\"price-model\"><a href=\"#\">Focus</a></div>
                    <div class=\"price-model\"><a href=\"#\">Aimass</a></div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"price-title\"><a href=\"#\">Hunday</a></div>
                    <div class=\"price-model\"><a href=\"#\">Uysyu</a></div>
                    <div class=\"price-model\"><a href=\"#\">Austic</a></div>
                    <div class=\"price-model\"><a href=\"#\">LLlksasI</a></div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"price-title\"><a href=\"#\">VAZ</a></div>
                    <div class=\"price-model\"><a href=\"#\">2101</a></div>
                    <div class=\"price-model\"><a href=\"#\">2102</a></div>
                    <div class=\"price-model\"><a href=\"#\">2103</a></div>
                    <div class=\"price-model\"><a href=\"#\">2104</a></div>
                    <div class=\"price-model\"><a href=\"#\">2105</a></div>
                    <div class=\"price-model\"><a href=\"#\">2106</a></div>
                    <div class=\"price-model\"><a href=\"#\">2107</a></div>
                    <div class=\"price-model\"><a href=\"#\">2108</a></div>
                    <div class=\"price-model\"><a href=\"#\">2109</a></div>
                    <div class=\"price-model\"><a href=\"#\">2110</a></div>
                    <div class=\"price-model\"><a href=\"#\">2111</a></div>
                    <div class=\"price-model\"><a href=\"#\">2112</a></div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"price-title\"><a href=\"#\">Марка</a></div>
                    <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                    <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                    <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                </div>
            </div>
          </div>
          <div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\">
              <div class=\"row\">
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Audi</a></div>
                      <div class=\"price-model\"><a href=\"#\">A6</a></div>
                      <div class=\"price-model\"><a href=\"#\">A7</a></div>
                      <div class=\"price-model\"><a href=\"#\">A8</a></div>
                      <div class=\"price-model\"><a href=\"#\">A9</a></div>
                      <div class=\"price-model\"><a href=\"#\">A10</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">BMW</a></div>
                      <div class=\"price-model\"><a href=\"#\">e46</a></div>
                      <div class=\"price-model\"><a href=\"#\">e47</a></div>
                      <div class=\"price-model\"><a href=\"#\">e127</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Ford</a></div>
                      <div class=\"price-model\"><a href=\"#\">Focus</a></div>
                      <div class=\"price-model\"><a href=\"#\">Aimass</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Hunday</a></div>
                      <div class=\"price-model\"><a href=\"#\">Uysyu</a></div>
                      <div class=\"price-model\"><a href=\"#\">Austic</a></div>
                      <div class=\"price-model\"><a href=\"#\">LLlksasI</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">VAZ</a></div>
                      <div class=\"price-model\"><a href=\"#\">2101</a></div>
                      <div class=\"price-model\"><a href=\"#\">2102</a></div>
                      <div class=\"price-model\"><a href=\"#\">2103</a></div>
                      <div class=\"price-model\"><a href=\"#\">2104</a></div>
                      <div class=\"price-model\"><a href=\"#\">2105</a></div>
                      <div class=\"price-model\"><a href=\"#\">2106</a></div>
                      <div class=\"price-model\"><a href=\"#\">2107</a></div>
                      <div class=\"price-model\"><a href=\"#\">2108</a></div>
                      <div class=\"price-model\"><a href=\"#\">2109</a></div>
                      <div class=\"price-model\"><a href=\"#\">2110</a></div>
                      <div class=\"price-model\"><a href=\"#\">2111</a></div>
                      <div class=\"price-model\"><a href=\"#\">2112</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Марка</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                  </div>
              </div>
          </div>
          <div class=\"tab-pane fade\" id=\"v-pills-messages\" role=\"tabpanel\" aria-labelledby=\"v-pills-messages-tab\">
              <div class=\"row\">
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Audi</a></div>
                      <div class=\"price-model\"><a href=\"#\">A6</a></div>
                      <div class=\"price-model\"><a href=\"#\">A7</a></div>
                      <div class=\"price-model\"><a href=\"#\">A8</a></div>
                      <div class=\"price-model\"><a href=\"#\">A9</a></div>
                      <div class=\"price-model\"><a href=\"#\">A10</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">BMW</a></div>
                      <div class=\"price-model\"><a href=\"#\">e46</a></div>
                      <div class=\"price-model\"><a href=\"#\">e47</a></div>
                      <div class=\"price-model\"><a href=\"#\">e127</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Ford</a></div>
                      <div class=\"price-model\"><a href=\"#\">Focus</a></div>
                      <div class=\"price-model\"><a href=\"#\">Aimass</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Hunday</a></div>
                      <div class=\"price-model\"><a href=\"#\">Uysyu</a></div>
                      <div class=\"price-model\"><a href=\"#\">Austic</a></div>
                      <div class=\"price-model\"><a href=\"#\">LLlksasI</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">VAZ</a></div>
                      <div class=\"price-model\"><a href=\"#\">2101</a></div>
                      <div class=\"price-model\"><a href=\"#\">2102</a></div>
                      <div class=\"price-model\"><a href=\"#\">2103</a></div>
                      <div class=\"price-model\"><a href=\"#\">2104</a></div>
                      <div class=\"price-model\"><a href=\"#\">2105</a></div>
                      <div class=\"price-model\"><a href=\"#\">2106</a></div>
                      <div class=\"price-model\"><a href=\"#\">2107</a></div>
                      <div class=\"price-model\"><a href=\"#\">2108</a></div>
                      <div class=\"price-model\"><a href=\"#\">2109</a></div>
                      <div class=\"price-model\"><a href=\"#\">2110</a></div>
                      <div class=\"price-model\"><a href=\"#\">2111</a></div>
                      <div class=\"price-model\"><a href=\"#\">2112</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Марка</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                  </div>
              </div>
          </div>
          <div class=\"tab-pane fade\" id=\"v-pills-settings\" role=\"tabpanel\" aria-labelledby=\"v-pills-settings-tab\">
              <div class=\"row\">
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Audi</a></div>
                      <div class=\"price-model\"><a href=\"#\">A6</a></div>
                      <div class=\"price-model\"><a href=\"#\">A7</a></div>
                      <div class=\"price-model\"><a href=\"#\">A8</a></div>
                      <div class=\"price-model\"><a href=\"#\">A9</a></div>
                      <div class=\"price-model\"><a href=\"#\">A10</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">BMW</a></div>
                      <div class=\"price-model\"><a href=\"#\">e46</a></div>
                      <div class=\"price-model\"><a href=\"#\">e47</a></div>
                      <div class=\"price-model\"><a href=\"#\">e127</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Ford</a></div>
                      <div class=\"price-model\"><a href=\"#\">Focus</a></div>
                      <div class=\"price-model\"><a href=\"#\">Aimass</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Hunday</a></div>
                      <div class=\"price-model\"><a href=\"#\">Uysyu</a></div>
                      <div class=\"price-model\"><a href=\"#\">Austic</a></div>
                      <div class=\"price-model\"><a href=\"#\">LLlksasI</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">VAZ</a></div>
                      <div class=\"price-model\"><a href=\"#\">2101</a></div>
                      <div class=\"price-model\"><a href=\"#\">2102</a></div>
                      <div class=\"price-model\"><a href=\"#\">2103</a></div>
                      <div class=\"price-model\"><a href=\"#\">2104</a></div>
                      <div class=\"price-model\"><a href=\"#\">2105</a></div>
                      <div class=\"price-model\"><a href=\"#\">2106</a></div>
                      <div class=\"price-model\"><a href=\"#\">2107</a></div>
                      <div class=\"price-model\"><a href=\"#\">2108</a></div>
                      <div class=\"price-model\"><a href=\"#\">2109</a></div>
                      <div class=\"price-model\"><a href=\"#\">2110</a></div>
                      <div class=\"price-model\"><a href=\"#\">2111</a></div>
                      <div class=\"price-model\"><a href=\"#\">2112</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Марка</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
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
        return "elements/_price_list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"price-list\">
  <div class=\"container container2\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-lg-2 mb-4\">
        <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
          <a class=\"price-list-category nav-link active\" id=\"v-pills-home-tab\" data-toggle=\"pill\" href=\"#v-pills-home\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">ТО</a>
          <a class=\"price-list-category nav-link\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Диагностика</a>
          <a class=\"price-list-category nav-link\" id=\"v-pills-messages-tab\" data-toggle=\"pill\" href=\"#v-pills-messages\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">Раздел</a>
          <a class=\"price-list-category nav-link\" id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"#v-pills-settings\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Раздел</a>
        </div>
      </div>
      <div class=\"col-sm-12 col-lg-10\">
        <div class=\"tab-content\" id=\"v-pills-tabContent\">
          <div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <div class=\"price-title\"><a href=\"#\">Audi</a></div>
                    <div class=\"price-model\"><a href=\"#\">A6</a></div>
                    <div class=\"price-model\"><a href=\"#\">A7</a></div>
                    <div class=\"price-model\"><a href=\"#\">A8</a></div>
                    <div class=\"price-model\"><a href=\"#\">A9</a></div>
                    <div class=\"price-model\"><a href=\"#\">A10</a></div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"price-title\"><a href=\"#\">BMW</a></div>
                    <div class=\"price-model\"><a href=\"#\">e46</a></div>
                    <div class=\"price-model\"><a href=\"#\">e47</a></div>
                    <div class=\"price-model\"><a href=\"#\">e127</a></div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"price-title\"><a href=\"#\">Ford</a></div>
                    <div class=\"price-model\"><a href=\"#\">Focus</a></div>
                    <div class=\"price-model\"><a href=\"#\">Aimass</a></div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"price-title\"><a href=\"#\">Hunday</a></div>
                    <div class=\"price-model\"><a href=\"#\">Uysyu</a></div>
                    <div class=\"price-model\"><a href=\"#\">Austic</a></div>
                    <div class=\"price-model\"><a href=\"#\">LLlksasI</a></div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"price-title\"><a href=\"#\">VAZ</a></div>
                    <div class=\"price-model\"><a href=\"#\">2101</a></div>
                    <div class=\"price-model\"><a href=\"#\">2102</a></div>
                    <div class=\"price-model\"><a href=\"#\">2103</a></div>
                    <div class=\"price-model\"><a href=\"#\">2104</a></div>
                    <div class=\"price-model\"><a href=\"#\">2105</a></div>
                    <div class=\"price-model\"><a href=\"#\">2106</a></div>
                    <div class=\"price-model\"><a href=\"#\">2107</a></div>
                    <div class=\"price-model\"><a href=\"#\">2108</a></div>
                    <div class=\"price-model\"><a href=\"#\">2109</a></div>
                    <div class=\"price-model\"><a href=\"#\">2110</a></div>
                    <div class=\"price-model\"><a href=\"#\">2111</a></div>
                    <div class=\"price-model\"><a href=\"#\">2112</a></div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"price-title\"><a href=\"#\">Марка</a></div>
                    <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                    <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                    <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                </div>
            </div>
          </div>
          <div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\">
              <div class=\"row\">
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Audi</a></div>
                      <div class=\"price-model\"><a href=\"#\">A6</a></div>
                      <div class=\"price-model\"><a href=\"#\">A7</a></div>
                      <div class=\"price-model\"><a href=\"#\">A8</a></div>
                      <div class=\"price-model\"><a href=\"#\">A9</a></div>
                      <div class=\"price-model\"><a href=\"#\">A10</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">BMW</a></div>
                      <div class=\"price-model\"><a href=\"#\">e46</a></div>
                      <div class=\"price-model\"><a href=\"#\">e47</a></div>
                      <div class=\"price-model\"><a href=\"#\">e127</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Ford</a></div>
                      <div class=\"price-model\"><a href=\"#\">Focus</a></div>
                      <div class=\"price-model\"><a href=\"#\">Aimass</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Hunday</a></div>
                      <div class=\"price-model\"><a href=\"#\">Uysyu</a></div>
                      <div class=\"price-model\"><a href=\"#\">Austic</a></div>
                      <div class=\"price-model\"><a href=\"#\">LLlksasI</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">VAZ</a></div>
                      <div class=\"price-model\"><a href=\"#\">2101</a></div>
                      <div class=\"price-model\"><a href=\"#\">2102</a></div>
                      <div class=\"price-model\"><a href=\"#\">2103</a></div>
                      <div class=\"price-model\"><a href=\"#\">2104</a></div>
                      <div class=\"price-model\"><a href=\"#\">2105</a></div>
                      <div class=\"price-model\"><a href=\"#\">2106</a></div>
                      <div class=\"price-model\"><a href=\"#\">2107</a></div>
                      <div class=\"price-model\"><a href=\"#\">2108</a></div>
                      <div class=\"price-model\"><a href=\"#\">2109</a></div>
                      <div class=\"price-model\"><a href=\"#\">2110</a></div>
                      <div class=\"price-model\"><a href=\"#\">2111</a></div>
                      <div class=\"price-model\"><a href=\"#\">2112</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Марка</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                  </div>
              </div>
          </div>
          <div class=\"tab-pane fade\" id=\"v-pills-messages\" role=\"tabpanel\" aria-labelledby=\"v-pills-messages-tab\">
              <div class=\"row\">
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Audi</a></div>
                      <div class=\"price-model\"><a href=\"#\">A6</a></div>
                      <div class=\"price-model\"><a href=\"#\">A7</a></div>
                      <div class=\"price-model\"><a href=\"#\">A8</a></div>
                      <div class=\"price-model\"><a href=\"#\">A9</a></div>
                      <div class=\"price-model\"><a href=\"#\">A10</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">BMW</a></div>
                      <div class=\"price-model\"><a href=\"#\">e46</a></div>
                      <div class=\"price-model\"><a href=\"#\">e47</a></div>
                      <div class=\"price-model\"><a href=\"#\">e127</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Ford</a></div>
                      <div class=\"price-model\"><a href=\"#\">Focus</a></div>
                      <div class=\"price-model\"><a href=\"#\">Aimass</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Hunday</a></div>
                      <div class=\"price-model\"><a href=\"#\">Uysyu</a></div>
                      <div class=\"price-model\"><a href=\"#\">Austic</a></div>
                      <div class=\"price-model\"><a href=\"#\">LLlksasI</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">VAZ</a></div>
                      <div class=\"price-model\"><a href=\"#\">2101</a></div>
                      <div class=\"price-model\"><a href=\"#\">2102</a></div>
                      <div class=\"price-model\"><a href=\"#\">2103</a></div>
                      <div class=\"price-model\"><a href=\"#\">2104</a></div>
                      <div class=\"price-model\"><a href=\"#\">2105</a></div>
                      <div class=\"price-model\"><a href=\"#\">2106</a></div>
                      <div class=\"price-model\"><a href=\"#\">2107</a></div>
                      <div class=\"price-model\"><a href=\"#\">2108</a></div>
                      <div class=\"price-model\"><a href=\"#\">2109</a></div>
                      <div class=\"price-model\"><a href=\"#\">2110</a></div>
                      <div class=\"price-model\"><a href=\"#\">2111</a></div>
                      <div class=\"price-model\"><a href=\"#\">2112</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Марка</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                  </div>
              </div>
          </div>
          <div class=\"tab-pane fade\" id=\"v-pills-settings\" role=\"tabpanel\" aria-labelledby=\"v-pills-settings-tab\">
              <div class=\"row\">
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Audi</a></div>
                      <div class=\"price-model\"><a href=\"#\">A6</a></div>
                      <div class=\"price-model\"><a href=\"#\">A7</a></div>
                      <div class=\"price-model\"><a href=\"#\">A8</a></div>
                      <div class=\"price-model\"><a href=\"#\">A9</a></div>
                      <div class=\"price-model\"><a href=\"#\">A10</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">BMW</a></div>
                      <div class=\"price-model\"><a href=\"#\">e46</a></div>
                      <div class=\"price-model\"><a href=\"#\">e47</a></div>
                      <div class=\"price-model\"><a href=\"#\">e127</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Ford</a></div>
                      <div class=\"price-model\"><a href=\"#\">Focus</a></div>
                      <div class=\"price-model\"><a href=\"#\">Aimass</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Hunday</a></div>
                      <div class=\"price-model\"><a href=\"#\">Uysyu</a></div>
                      <div class=\"price-model\"><a href=\"#\">Austic</a></div>
                      <div class=\"price-model\"><a href=\"#\">LLlksasI</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">VAZ</a></div>
                      <div class=\"price-model\"><a href=\"#\">2101</a></div>
                      <div class=\"price-model\"><a href=\"#\">2102</a></div>
                      <div class=\"price-model\"><a href=\"#\">2103</a></div>
                      <div class=\"price-model\"><a href=\"#\">2104</a></div>
                      <div class=\"price-model\"><a href=\"#\">2105</a></div>
                      <div class=\"price-model\"><a href=\"#\">2106</a></div>
                      <div class=\"price-model\"><a href=\"#\">2107</a></div>
                      <div class=\"price-model\"><a href=\"#\">2108</a></div>
                      <div class=\"price-model\"><a href=\"#\">2109</a></div>
                      <div class=\"price-model\"><a href=\"#\">2110</a></div>
                      <div class=\"price-model\"><a href=\"#\">2111</a></div>
                      <div class=\"price-model\"><a href=\"#\">2112</a></div>
                  </div>
                  <div class=\"col-md-2\">
                      <div class=\"price-title\"><a href=\"#\">Марка</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                      <div class=\"price-model\"><a href=\"#\">Модель</a></div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>", "elements/_price_list.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\elements\\_price_list.html.twig");
    }
}
