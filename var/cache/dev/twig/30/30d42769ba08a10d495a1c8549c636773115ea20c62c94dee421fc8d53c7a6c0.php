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

/* admin/global/_drop_zone.html.twig */
class __TwigTemplate_7bae2237feaf197cd772716458c5c827dd1a42630c8acf461b47135f79fe2d84 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/global/_drop_zone.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/global/_drop_zone.html.twig"));

        // line 1
        echo "<h2>Добавьте изображения</h2>
<div class=\"row\">
    <div class=\"col-md-6\">
        <!-- Our markup, the important part here! -->
        <div id=\"drag-and-drop-zone\" class=\"dm-uploader p-5\">
            <h3 class=\"mb-5 mt-5 text-muted\">Перетащите изображения в эту область</h3>

            <div class=\"btn btn-primary btn-block mb-5\">
                <span>Добавить файл</span>
                <input type=\"file\" title='Click to add Files' />
            </div>
        </div><!-- /uploader -->

    </div>
    <div class=\"col-md-6\">
        <div class=\"card h-100\">
            <div class=\"card-header\">
                Список файлов
            </div>

            <ul class=\"list-unstyled p-2 d-flex flex-column col\" id=\"files\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((isset($context["files"]) || array_key_exists("files", $context))) ? (_twig_default_filter((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 22, $this->source); })()), [])) : ([])));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 23
            echo "                    <li class=\"media_uploader\">
                        <div class=\"preview-img-wrapper\">
                            ";
            // line 25
            echo twig_include($this->env, $context, "@EasyAdmin/default/field_image.html.twig", ["value" => $context["file"], "uuid" => twig_random($this->env)]);
            echo "
                        </div>
                        <strong>";
            // line 27
            echo twig_escape_filter($this->env, $context["file"], "html", null, true);
            echo "</strong>
                        <a class=\"btn text-danger delete_image\" data-file=\"";
            // line 28
            echo twig_escape_filter($this->env, $context["file"], "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_files_delete_image");
            echo "\" target=\"_self\">
                            <i class=\"fa fa-fw fa-trash-o\"></i> Удалить
                        </a>
                    </li>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                    <li class=\"text-muted text-center empty\">Загруженные файлы отсутствуют</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </ul>
        </div>
    </div>
</div>

<script type=\"text/html\" id=\"files-template\">
    <li class=\"media_uploader\">
        <img class=\"mr-3 mb-2 preview-img\" />
        <div class=\"media-body mb-1\">

            <p class=\"mb-2\">
                <strong>%%filename%%</strong> - Статус: <span class=\"text-muted\">В очереди</span>
            </p>
            <div class=\"progress mb-2\">
                <progress max=\"100\" class=\"progress-bar\" value=\"0\"></progress>
            </div>
            <hr class=\"mt-1 mb-1\" />
        </div>
    </li>
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/global/_drop_zone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 35,  117 => 33,  97 => 28,  93 => 27,  88 => 25,  84 => 23,  66 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Добавьте изображения</h2>
<div class=\"row\">
    <div class=\"col-md-6\">
        <!-- Our markup, the important part here! -->
        <div id=\"drag-and-drop-zone\" class=\"dm-uploader p-5\">
            <h3 class=\"mb-5 mt-5 text-muted\">Перетащите изображения в эту область</h3>

            <div class=\"btn btn-primary btn-block mb-5\">
                <span>Добавить файл</span>
                <input type=\"file\" title='Click to add Files' />
            </div>
        </div><!-- /uploader -->

    </div>
    <div class=\"col-md-6\">
        <div class=\"card h-100\">
            <div class=\"card-header\">
                Список файлов
            </div>

            <ul class=\"list-unstyled p-2 d-flex flex-column col\" id=\"files\">
                {% for file in files|default([]) %}
                    <li class=\"media_uploader\">
                        <div class=\"preview-img-wrapper\">
                            {{ include('@EasyAdmin/default/field_image.html.twig',{value:file,uuid:random()}) }}
                        </div>
                        <strong>{{ file }}</strong>
                        <a class=\"btn text-danger delete_image\" data-file=\"{{ file }}\" href=\"{{ path('admin_files_delete_image') }}\" target=\"_self\">
                            <i class=\"fa fa-fw fa-trash-o\"></i> Удалить
                        </a>
                    </li>
                {% else %}
                    <li class=\"text-muted text-center empty\">Загруженные файлы отсутствуют</li>
                {% endfor %}
            </ul>
        </div>
    </div>
</div>

<script type=\"text/html\" id=\"files-template\">
    <li class=\"media_uploader\">
        <img class=\"mr-3 mb-2 preview-img\" />
        <div class=\"media-body mb-1\">

            <p class=\"mb-2\">
                <strong>%%filename%%</strong> - Статус: <span class=\"text-muted\">В очереди</span>
            </p>
            <div class=\"progress mb-2\">
                <progress max=\"100\" class=\"progress-bar\" value=\"0\"></progress>
            </div>
            <hr class=\"mt-1 mb-1\" />
        </div>
    </li>
</script>", "admin/global/_drop_zone.html.twig", "C:\\OpenServer\\domains\\SM\\templates\\admin\\global\\_drop_zone.html.twig");
    }
}
