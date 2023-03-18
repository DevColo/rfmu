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

/* modules/custom/rfmu_custom/templates/top_agencies.html.twig */
class __TwigTemplate_9302fd44767e10d730829914f62bb9e4faa3a6fed320fb5a449142812e169656 extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(($context["top_agencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["agency"]) {
            echo "      
                      <div class=\"col-md-3 col-sm-4 mix category_3 mix_all\" style=\"display: block; opacity: 1; \">
                        <a href=\"rfmu-user/";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["agency"], "agency_id", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\">
                        <em>
                          <img src=\"";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["agency"], "agency_logo", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["agency"], "agency_name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\" class=\"img-responsive\">
                        </em>
                        <span class=\"featured-list\">
                          <p><b>";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["agency"], "agency_name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</b></p>
                          <!-- <p>Agency</p> -->
                        </span>
                      </a>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </div>
              </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/rfmu_custom/templates/top_agencies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  64 => 11,  56 => 8,  51 => 6,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-page\">
                <div class=\"filter-v1\">
                    <div class=\"row mix-grid thumbnails\">
                    {% for agency in top_agencies %}      
                      <div class=\"col-md-3 col-sm-4 mix category_3 mix_all\" style=\"display: block; opacity: 1; \">
                        <a href=\"rfmu-user/{{agency.agency_id}}\">
                        <em>
                          <img src=\"{{ agency.agency_logo }}\" alt=\"{{agency.agency_name}}\" class=\"img-responsive\">
                        </em>
                        <span class=\"featured-list\">
                          <p><b>{{agency.agency_name}}</b></p>
                          <!-- <p>Agency</p> -->
                        </span>
                      </a>
                      </div>
                      {% endfor %}
                </div>
              </div>
            </div>", "modules/custom/rfmu_custom/templates/top_agencies.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/modules/custom/rfmu_custom/templates/top_agencies.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
