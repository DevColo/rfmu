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

/* modules/custom/rfmu_custom/templates/model-profile.html.twig */
class __TwigTemplate_ffaa70356e0e3e324b3f0b7c85f9e2d674f65105b19ce3d016cb097b6232f431 extends \Twig\Template
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
        echo "<div class=\"col-md-4 mb-3\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <div class=\"d-flex flex-column align-items-center text-center\">
                    
                    <img class=\"rounded-circle\" src=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["model_pic"] ?? null), 6, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["first_name"] ?? null), 6, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["last_name"] ?? null), 6, $this->source), "html", null, true);
        echo "\">
                    <div class=\"mt-3\">
                      <h4>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["first_name"] ?? null), 8, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["last_name"] ?? null), 8, $this->source), "html", null, true);
        echo "</h4>
                      <p class=\"text-secondary mb-1\"><b>Model</b></p>
                      <p class=\"text-secondary mb-1\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["country_name"] ?? null), 10, $this->source), "html", null, true);
        echo ", ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["state_name"] ?? null), 10, $this->source), "html", null, true);
        echo "</p>
                      <a style=\"font-size: 25px;\"><i class=\"fa fa-instagram\"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<div class=\"col-md-8\">
              <div class=\"tabs\">
                <ul class=\"nav nav-tabs\">
                  <li class=\"active\">
                    <a href=\"#profile\" data-toggle=\"tab\" aria-expanded=\"true\" >Profile</a>
                  </li>
                  <li class=\"\">
                    <a href=\"#bio\" data-toggle=\"tab\" aria-expanded=\"true\">Bio</a>
                  </li>
                  <li class=\"\">
                    <a href=\"#models\" data-toggle=\"tab\" aria-expanded=\"true\">Agency</a>
                  </li>
                </ul>
                <div class=\"tab-content\" style=\"\">
                  <div id=\"profile\" class=\"tab-pane active\">
                    <p><b>Phone:</b> ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["model_phone"] ?? null), 33, $this->source), "html", null, true);
        echo "</p>
                    <p><b>Eyes Color:</b> ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["model_eyes_color"] ?? null), 34, $this->source), "html", null, true);
        echo "</p>
                    <p><b>Hair Color:</b> ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["model_hair_color"] ?? null), 35, $this->source), "html", null, true);
        echo "</p>
                    <p><b>Height:</b> ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["model_height"] ?? null), 36, $this->source), "html", null, true);
        echo "</p>
                    <p><b>Shoe Size:</b> ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["model_shoe"] ?? null), 37, $this->source), "html", null, true);
        echo "</p>
                    <p><b>Join:</b> ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 38, $this->source), "html", null, true);
        echo "</p>
                  </div>
                  <div id=\"bio\" class=\"tab-pane\">
                    <p>";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["model_profile"] ?? null), 41, $this->source), "html", null, true);
        echo "</p>
                  </div>
                  <div id=\"models\" class=\"tab-pane\">
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["model_agencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["agencies"]) {
            // line 45
            echo "                    
                    <div class=\"col-md-3 col-xl-4 pb-40\">
          <a href=\"";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["agencies"], "agency_id", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "\">
          <div class=\"card card-explore\" style=\"box-shadow: 0 0 7px 0 #eee;\">
            <div class=\"card-explore__img\" style=\"text-align:center;\">
              <img class=\"card-img\" src=\"";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["agencies"], "my_agency_pic", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "\" alt=\"Agency Logo\">
              
            </div>
            <div class=\"card-body\" style=\"text-align:center;\">
              <b class=\"card-explore__link\">";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["agencies"], "agency_name", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "</b>
            </div>
          </div>
        </a>


      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agencies'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                  </div>
                </div>
              </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "modules/custom/rfmu_custom/templates/model-profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 62,  143 => 54,  136 => 50,  130 => 47,  126 => 45,  122 => 44,  116 => 41,  110 => 38,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  62 => 10,  55 => 8,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-4 mb-3\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <div class=\"d-flex flex-column align-items-center text-center\">
                    
                    <img class=\"rounded-circle\" src=\"{{model_pic}}\" title=\"{{ first_name }} {{ last_name }}\">
                    <div class=\"mt-3\">
                      <h4>{{ first_name }} {{ last_name }}</h4>
                      <p class=\"text-secondary mb-1\"><b>Model</b></p>
                      <p class=\"text-secondary mb-1\">{{country_name}}, {{state_name}}</p>
                      <a style=\"font-size: 25px;\"><i class=\"fa fa-instagram\"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<div class=\"col-md-8\">
              <div class=\"tabs\">
                <ul class=\"nav nav-tabs\">
                  <li class=\"active\">
                    <a href=\"#profile\" data-toggle=\"tab\" aria-expanded=\"true\" >Profile</a>
                  </li>
                  <li class=\"\">
                    <a href=\"#bio\" data-toggle=\"tab\" aria-expanded=\"true\">Bio</a>
                  </li>
                  <li class=\"\">
                    <a href=\"#models\" data-toggle=\"tab\" aria-expanded=\"true\">Agency</a>
                  </li>
                </ul>
                <div class=\"tab-content\" style=\"\">
                  <div id=\"profile\" class=\"tab-pane active\">
                    <p><b>Phone:</b> {{ model_phone }}</p>
                    <p><b>Eyes Color:</b> {{ model_eyes_color }}</p>
                    <p><b>Hair Color:</b> {{ model_hair_color }}</p>
                    <p><b>Height:</b> {{ model_height }}</p>
                    <p><b>Shoe Size:</b> {{ model_shoe }}</p>
                    <p><b>Join:</b> {{ created }}</p>
                  </div>
                  <div id=\"bio\" class=\"tab-pane\">
                    <p>{{ model_profile }}</p>
                  </div>
                  <div id=\"models\" class=\"tab-pane\">
                    {% for agencies in model_agencies %}
                    
                    <div class=\"col-md-3 col-xl-4 pb-40\">
          <a href=\"{{agencies.agency_id}}\">
          <div class=\"card card-explore\" style=\"box-shadow: 0 0 7px 0 #eee;\">
            <div class=\"card-explore__img\" style=\"text-align:center;\">
              <img class=\"card-img\" src=\"{{agencies.my_agency_pic}}\" alt=\"Agency Logo\">
              
            </div>
            <div class=\"card-body\" style=\"text-align:center;\">
              <b class=\"card-explore__link\">{{agencies.agency_name}}</b>
            </div>
          </div>
        </a>


      </div>
                    {% endfor %}
                  </div>
                </div>
              </div>
    </div>



", "modules/custom/rfmu_custom/templates/model-profile.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/modules/custom/rfmu_custom/templates/model-profile.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 44);
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
