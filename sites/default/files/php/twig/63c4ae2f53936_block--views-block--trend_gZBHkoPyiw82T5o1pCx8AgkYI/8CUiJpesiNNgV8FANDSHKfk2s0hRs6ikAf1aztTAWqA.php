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

/* themes/contrib/showcase_lite/templates/block/block--views-block--trending-block-block-1.html.twig */
class __TwigTemplate_c93f2b133a2e92a6804211a68327edabf627b2998543129b5a45dd53bea0bcaa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<style type=\"text/css\">
/*  .views-field.views-field-title {
    text-align: center;
}*/
.views-field-title>.field-content>a {
    color: #4a4a4ac7 !important;
}
.content-top__section {
    padding: 38px 0 150px;
}
.owl-item>div{
  text-align: center;
}
</style>
";
        // line 16
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 18
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 18), 18, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 19
($context["plugin_id"] ?? null), 19, $this->source))), 3 => "clearfix"];
        // line 23
        echo "<section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 23), 23, $this->source), "html", null, true);
        echo ">
  ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 24, $this->source), "html", null, true);
        echo "
  ";
        // line 25
        if (($context["label"] ?? null)) {
            // line 26
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 26), 26, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 26, $this->source), "html", null, true);
            echo "<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 26, $this->source), "html", null, true);
            echo "/trending\" style=\"float:right;font-size:13px;\">See more >></a></h2>

  ";
        }
        // line 29
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 29, $this->source), "html", null, true);
        echo "

  ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "  
</section>";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 32, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/showcase_lite/templates/block/block--views-block--trending-block-block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  95 => 31,  90 => 34,  88 => 31,  82 => 29,  71 => 26,  69 => 25,  65 => 24,  60 => 23,  58 => 19,  57 => 18,  56 => 16,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
/*  .views-field.views-field-title {
    text-align: center;
}*/
.views-field-title>.field-content>a {
    color: #4a4a4ac7 !important;
}
.content-top__section {
    padding: 38px 0 150px;
}
.owl-item>div{
  text-align: center;
}
</style>
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    'clearfix',
  ]
%}
<section{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes.addClass('block-title') }}>{{ label }}<a href=\"{{ base_path }}/trending\" style=\"float:right;font-size:13px;\">See more >></a></h2>

  {% endif %}
  {{ title_suffix }}

  {% block content %}
    {{ content }}
  {% endblock %}
  
</section>", "themes/contrib/showcase_lite/templates/block/block--views-block--trending-block-block-1.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/contrib/showcase_lite/templates/block/block--views-block--trending-block-block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 25, "block" => 31);
        static $filters = array("clean_class" => 18, "escape" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
