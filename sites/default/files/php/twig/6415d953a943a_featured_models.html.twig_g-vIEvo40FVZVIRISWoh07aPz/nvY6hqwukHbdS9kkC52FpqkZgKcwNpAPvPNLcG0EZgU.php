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

/* themes/model/templates/regions/featured_models.html.twig */
class __TwigTemplate_40bc633215250b1a25c17afa669b103a6a2dedb3cc9c96a651a27f55e1962cc7 extends \Twig\Template
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
        // line 1
        echo "<div class=\"content-page\">
                <div class=\"filter-v1\">
                              <div class=\"row mix-grid thumbnails\">
                       ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured_models"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            echo "       
              <div class=\"col-md-3 col-sm-4 mix category_3 mix_all\" style=\"display: block; opacity: 1; \">
                <a href=\"";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 6, $this->source), "html", null, true);
            echo "rfmu-user/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "model_id", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\">
                <em>
                  <img src=\"";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::fileUrlFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "model_profile", [], "any", false, false, true, 8), 8, $this->source)), "html", null, true);
            echo "\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <span class=\"featured-list\">
                  <p><b>";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "model_name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</b></p>
                  <p>";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "agency_name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "</p>
                </span>
              </a>
              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                              </div>
              </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "themes/model/templates/regions/featured_models.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  68 => 12,  64 => 11,  58 => 8,  51 => 6,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-page\">
                <div class=\"filter-v1\">
                              <div class=\"row mix-grid thumbnails\">
                       {% for model in featured_models %}       
              <div class=\"col-md-3 col-sm-4 mix category_3 mix_all\" style=\"display: block; opacity: 1; \">
                <a href=\"{{base_path}}rfmu-user/{{model.model_id}}\">
                <em>
                  <img src=\"{{ model.model_profile|file_url }}\" alt=\"Amazing Project\" class=\"img-responsive\">
                </em>
                <span class=\"featured-list\">
                  <p><b>{{ model.model_name }}</b></p>
                  <p>{{ model.agency_name }}</p>
                </span>
              </a>
              </div>
              {% endfor %}
                              </div>
              </div>
            </div>", "themes/model/templates/regions/featured_models.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/model/templates/regions/featured_models.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4);
        static $filters = array("escape" => 6, "file_url" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'file_url'],
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
