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

/* v1/blocks/scripts/_yandex_metrics.html.twig */
class __TwigTemplate_c1145d2fa8ea080ec00c835c9338492732f48e166c451c12c36bbdf92f8da7b4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/scripts/_yandex_metrics.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "v1/blocks/scripts/_yandex_metrics.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
\t(function (d, w, c) {
\t\t(w[c] = w[c] || []).push(function() {
\t\t\ttry {
\t\t\t\tw.yaCounter41408589 = new Ya.Metrika({
\t\t\t\t\tid:41408589,
\t\t\t\t\tclickmap:true,
\t\t\t\t\ttrackLinks:true,
\t\t\t\t\taccurateTrackBounce:true,
\t\t\t\t\twebvisor:true
\t\t\t\t});
\t\t\t} catch(e) { }
\t\t});

\t\tvar n = d.getElementsByTagName(\"script\")[0],
\t\t\ts = d.createElement(\"script\"),
\t\t\tf = function () { n.parentNode.insertBefore(s, n); };
\t\ts.type = \"text/javascript\";
\t\ts.async = true;
\t\ts.src = \"https://mc.yandex.ru/metrika/watch.js\";

\t\tif (w.opera == \"[object Opera]\") {
\t\t\td.addEventListener(\"DOMContentLoaded\", f, false);
\t\t} else { f(); }
\t})(document, window, \"yandex_metrika_callbacks\");
</script>
<noscript><div><img src=\"https://mc.yandex.ru/watch/41408589\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "v1/blocks/scripts/_yandex_metrics.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
\t(function (d, w, c) {
\t\t(w[c] = w[c] || []).push(function() {
\t\t\ttry {
\t\t\t\tw.yaCounter41408589 = new Ya.Metrika({
\t\t\t\t\tid:41408589,
\t\t\t\t\tclickmap:true,
\t\t\t\t\ttrackLinks:true,
\t\t\t\t\taccurateTrackBounce:true,
\t\t\t\t\twebvisor:true
\t\t\t\t});
\t\t\t} catch(e) { }
\t\t});

\t\tvar n = d.getElementsByTagName(\"script\")[0],
\t\t\ts = d.createElement(\"script\"),
\t\t\tf = function () { n.parentNode.insertBefore(s, n); };
\t\ts.type = \"text/javascript\";
\t\ts.async = true;
\t\ts.src = \"https://mc.yandex.ru/metrika/watch.js\";

\t\tif (w.opera == \"[object Opera]\") {
\t\t\td.addEventListener(\"DOMContentLoaded\", f, false);
\t\t} else { f(); }
\t})(document, window, \"yandex_metrika_callbacks\");
</script>
<noscript><div><img src=\"https://mc.yandex.ru/watch/41408589\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>", "v1/blocks/scripts/_yandex_metrics.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\v1\\blocks\\scripts\\_yandex_metrics.html.twig");
    }
}
