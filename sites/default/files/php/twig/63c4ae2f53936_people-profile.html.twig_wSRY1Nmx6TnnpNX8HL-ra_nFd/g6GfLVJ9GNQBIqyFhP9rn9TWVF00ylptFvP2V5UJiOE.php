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

/* modules/custom/rfmu_custom/templates/people-profile.html.twig */
class __TwigTemplate_a71e024df6c25e327e94f1ce0d9ae8e74af2abe6446353e70327d4ab18f5600f extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["people_pic"] ?? null), 6, $this->source), "html", null, true);
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
                      <p class=\"text-secondary mb-1\"><b>";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_people_role"] ?? null), 9, $this->source), "html", null, true);
        echo "</b></p>
                      <p class=\"text-secondary mb-1\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["country_name"] ?? null), 10, $this->source), "html", null, true);
        echo ", ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["state_name"] ?? null), 10, $this->source), "html", null, true);
        echo "</p>
                      <button class=\"btn btn-primary\">Follow</button>
                      <button class=\"btn btn-outline-primary\">Message</button>
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
                </ul>
                <div class=\"tab-content\" style=\"display: grid;\">
                  <div id=\"profile\" class=\"tab-pane active\">
                    <p><b>Phone:</b> ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["people_phone"] ?? null), 31, $this->source), "html", null, true);
        echo "</p>
                    <p><b>Date of birth:</b> ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dob"] ?? null), 32, $this->source), "html", null, true);
        echo "</p>
                    <p><b>Join:</b> ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 33, $this->source), "html", null, true);
        echo "</p>
                  </div>
                  <div id=\"bio\" class=\"tab-pane active\">
                    <p>";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["people_profile"] ?? null), 36, $this->source), "html", null, true);
        echo "</p>
                  </div>
                </div>
              </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/rfmu_custom/templates/people-profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  99 => 33,  95 => 32,  91 => 31,  65 => 10,  61 => 9,  55 => 8,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-4 mb-3\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <div class=\"d-flex flex-column align-items-center text-center\">
                    
                    <img class=\"rounded-circle\" src=\"{{people_pic}}\" title=\"{{ first_name }} {{ last_name }}\">
                    <div class=\"mt-3\">
                      <h4>{{ first_name }} {{ last_name }}</h4>
                      <p class=\"text-secondary mb-1\"><b>{{user_people_role}}</b></p>
                      <p class=\"text-secondary mb-1\">{{country_name}}, {{state_name}}</p>
                      <button class=\"btn btn-primary\">Follow</button>
                      <button class=\"btn btn-outline-primary\">Message</button>
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
                </ul>
                <div class=\"tab-content\" style=\"display: grid;\">
                  <div id=\"profile\" class=\"tab-pane active\">
                    <p><b>Phone:</b> {{ people_phone }}</p>
                    <p><b>Date of birth:</b> {{ dob }}</p>
                    <p><b>Join:</b> {{ created }}</p>
                  </div>
                  <div id=\"bio\" class=\"tab-pane active\">
                    <p>{{ people_profile }}</p>
                  </div>
                </div>
              </div>
    </div>", "modules/custom/rfmu_custom/templates/people-profile.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/modules/custom/rfmu_custom/templates/people-profile.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
