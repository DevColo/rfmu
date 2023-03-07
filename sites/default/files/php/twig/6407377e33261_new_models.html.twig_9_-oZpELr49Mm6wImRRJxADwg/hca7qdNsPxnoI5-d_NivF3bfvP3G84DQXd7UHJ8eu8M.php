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

/* themes/model/templates/regions/new_models.html.twig */
class __TwigTemplate_d6e3ad04af014ca22441f6cb1753e144d80e238959864e618daae9bc94204bd8 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "           
<div class=\"col-md-12\">
            <div class=\"owl-carousel owl-carousel4 owl-theme owl-loaded\" style=\"display:inline-flex;width: 100% !important;\">
              ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["new_models"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 11
            echo "              <div class=\"recent-work-item\">
                <em>
                  <img src=\"";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::fileUrlFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "model_profile", [], "any", false, false, true, 13), 13, $this->source)), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "model_name", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\" class=\"img-responsive\" style=\"max-width:90%;height:;\">
                  <a href=\"";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 14, $this->source), "html", null, true);
            echo "rfmu-user/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "model_id", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-link\"></i></a>
                  <a href=\"";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::fileUrlFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "model_profile", [], "any", false, false, true, 15), 15, $this->source)), "html", null, true);
            echo "\" class=\"fancybox-button\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "model_name", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\" data-rel=\"fancybox-button\"><i class=\"fa fa-search\"></i></a>
                </em>
                <a class=\"recent-work-description\" href=\"javascript:;\">
                  <strong>";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "model_name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</strong>
                  <b>";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "agency_name", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</b>
                </a>
              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </div>       
</div>
        <!-- <img src=\"";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 25, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/verify-icon.png\" style=\"
    position: relative;
    width: 9px;
    display: inline-flex;
\"> -->







";
    }

    public function getTemplateName()
    {
        return "themes/model/templates/regions/new_models.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  86 => 23,  76 => 19,  72 => 18,  64 => 15,  58 => 14,  52 => 13,  48 => 11,  44 => 10,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% set project = query.entries
              .type('model')
              .orderBy('field_model_rank.value ASC')
              .limit(5)
              .all()
           %}#}
           
<div class=\"col-md-12\">
            <div class=\"owl-carousel owl-carousel4 owl-theme owl-loaded\" style=\"display:inline-flex;width: 100% !important;\">
              {% for model in new_models %}
              <div class=\"recent-work-item\">
                <em>
                  <img src=\"{{ model.model_profile|file_url }}\" alt=\"{{ model.model_name }}\" class=\"img-responsive\" style=\"max-width:90%;height:;\">
                  <a href=\"{{base_path}}rfmu-user/{{model.model_id}}\"><i class=\"fa fa-link\"></i></a>
                  <a href=\"{{ model.model_profile|file_url }}\" class=\"fancybox-button\" title=\"{{ model.model_name }}\" data-rel=\"fancybox-button\"><i class=\"fa fa-search\"></i></a>
                </em>
                <a class=\"recent-work-description\" href=\"javascript:;\">
                  <strong>{{ model.model_name }}</strong>
                  <b>{{ model.agency_name }}</b>
                </a>
              </div>
              {%endfor%}
            </div>       
</div>
        <!-- <img src=\"{{base_path}}{{ active_theme_path()}}/images/verify-icon.png\" style=\"
    position: relative;
    width: 9px;
    display: inline-flex;
\"> -->







", "themes/model/templates/regions/new_models.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/model/templates/regions/new_models.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 10);
        static $filters = array("escape" => 13, "file_url" => 13);
        static $functions = array("active_theme_path" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'file_url'],
                ['active_theme_path']
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
