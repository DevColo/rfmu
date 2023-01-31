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

/* modules/custom/rfmu_custom/templates/agency-profile.html.twig */
class __TwigTemplate_ac2beccf40c4897ddfb6da02609cca0c45e1d903cfba4c9f2ad05348cde2ac19 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["agency_logo"] ?? null), 6, $this->source), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["agency_name"] ?? null), 6, $this->source), "html", null, true);
        echo "\">
                    <div class=\"mt-3\">
                      <h4>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["agency_name"] ?? null), 8, $this->source), "html", null, true);
        echo " </h4>
                      <p class=\"text-secondary mb-1\"><b>";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_account_type"] ?? null), 9, $this->source), "html", null, true);
        echo "</b></p>
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
                    <a href=\"#bio\" data-toggle=\"tab\" aria-expanded=\"false\">Bio</a>
                  </li>
                  <li class=\"\">
                    <a href=\"#models\" data-toggle=\"tab\" aria-expanded=\"false\">All Models</a>
                  </li>
                </ul>
                <div class=\"tab-content\" style=\"display: grid;\">
                  <div id=\"profile\" class=\"tab-pane active\">
                    <p><b>Phone:</b> ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["agency_cell"] ?? null), 33, $this->source), "html", null, true);
        echo "</p>
                    <p><b>Website:</b> ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["agency_website"] ?? null), 34, $this->source), "html", null, true);
        echo "</p>
                    <p><b>Email:</b> ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["agency_email"] ?? null), 35, $this->source), "html", null, true);
        echo "</p>
                    <p><b>Member Since:</b> ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 36, $this->source), "html", null, true);
        echo "</p>
                  </div>
                  <div id=\"bio\" class=\"tab-pane active\">
                    <p>";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["agency_bio"] ?? null), 39, $this->source), "html", null, true);
        echo "</p>
                  </div>
                  <div id=\"models\" class=\"tab-pane\">
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["model_agencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["agencies"]) {
            // line 43
            echo "                    
                    <div class=\"col-md-3 col-xl-4 pb-40\">
          <a href=\"";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 45, $this->source), "html", null, true);
            echo "rfmu-user/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["agencies"], "agency_id", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "\">
          <div class=\"card card-explore\" style=\"box-shadow: 0 0 7px 0 #eee;\">
            <div class=\"card-explore__img\" style=\"text-align:center;\">
              <img class=\"card-img\" src=\"";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["agencies"], "my_agency_pic", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "\" alt=\"Agency Logo\">
              
            </div>
            <div class=\"card-body\" style=\"text-align:center;\">
              <b class=\"card-explore__link\">";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["agencies"], "agency_name", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
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
        // line 60
        echo "                  </div>
                </div>
              </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/rfmu_custom/templates/agency-profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 60,  136 => 52,  129 => 48,  121 => 45,  117 => 43,  113 => 42,  107 => 39,  101 => 36,  97 => 35,  93 => 34,  89 => 33,  61 => 10,  57 => 9,  53 => 8,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-4 mb-3\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <div class=\"d-flex flex-column align-items-center text-center\">
                    
                    <img class=\"rounded-circle\" src=\"{{agency_logo}}\" title=\"{{ agency_name }}\">
                    <div class=\"mt-3\">
                      <h4>{{ agency_name }} </h4>
                      <p class=\"text-secondary mb-1\"><b>{{ user_account_type }}</b></p>
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
                    <a href=\"#bio\" data-toggle=\"tab\" aria-expanded=\"false\">Bio</a>
                  </li>
                  <li class=\"\">
                    <a href=\"#models\" data-toggle=\"tab\" aria-expanded=\"false\">All Models</a>
                  </li>
                </ul>
                <div class=\"tab-content\" style=\"display: grid;\">
                  <div id=\"profile\" class=\"tab-pane active\">
                    <p><b>Phone:</b> {{ agency_cell }}</p>
                    <p><b>Website:</b> {{ agency_website }}</p>
                    <p><b>Email:</b> {{ agency_email }}</p>
                    <p><b>Member Since:</b> {{ created }}</p>
                  </div>
                  <div id=\"bio\" class=\"tab-pane active\">
                    <p>{{ agency_bio }}</p>
                  </div>
                  <div id=\"models\" class=\"tab-pane\">
                    {% for agencies in model_agencies %}
                    
                    <div class=\"col-md-3 col-xl-4 pb-40\">
          <a href=\"{{base_path}}rfmu-user/{{agencies.agency_id}}\">
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
    </div>", "modules/custom/rfmu_custom/templates/agency-profile.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/modules/custom/rfmu_custom/templates/agency-profile.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 42);
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
