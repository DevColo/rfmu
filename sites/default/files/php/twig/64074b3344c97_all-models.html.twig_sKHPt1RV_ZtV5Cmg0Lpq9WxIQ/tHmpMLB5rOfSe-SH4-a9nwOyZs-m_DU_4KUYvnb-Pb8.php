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

/* modules/custom/rfmu_custom/templates/all-models.html.twig */
class __TwigTemplate_c38aafc02d77ccdeea1daee4f66376852294251aedcc411130c985777003adfb extends \Twig\Template
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
        echo "<section class=\"ftco-section-2 mt-5 pb-5\">
<div class=\"container\">
\t";
        // line 54
        echo "</div>
<section class=\"ftco-section-2 mb-5 pb-5\">
\t<div class=\"container\">
\t\t<div class=\"all-models-container row d-flex no-gutters\">
\t    \t\t<!-- <div class=\"col-md-6 d-flex align-items-center heading-section ftco-animate bg-light\">
\t    \t\t<div class=\"col-md-9\">
\t\t\t<div class=\"p-5\">
\t\t\t  <h2 class=\"mb-4\">Be the Next Top Model</h2>
\t\t         <p>Far far away, behind the word mountains, far from the countries Vokalia </p>
\t            </div>
              </div>
\t    </div> -->
\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            echo "\t
\t<div class=\"col-md-3 col-sm-4 mix category_3 mix_all\" style=\"display: block; opacity: 1; \">
\t\t<a href=\"/rfmu-user/";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "model_id", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "\">
                <em>
                  <img src=\"";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::fileUrlFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "model_profile", [], "any", false, false, true, 70), 70, $this->source)), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "name_name", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "\" class=\"img-responsive\">
                </em>
                <span class=\"featured-list\">
                ";
            // line 74
            echo "                 ";
            // line 75
            echo "                 <p>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "model_name", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "</p>
                 <p>";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "agency_name", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "</p>
                </span>
              </a>
        </div>
\t  
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t    \t\t</div>
\t    \t\t<!-- <div class=\"row no-gutters mt-5\">
\t          <div class=\"col text-center\">
\t            <div class=\"block-27\">
\t              <ul>
\t                <li><a href=\"#\">&lt;</a></li> -->
\t                <!-- <li class=\"active\"><span></span></li> -->
\t                ";
        // line 90
        echo "\t                <!-- <li><a href=\"#\"> -->";
        echo "<!-- </a></li> -->
\t                ";
        // line 92
        echo "\t                <!-- <li><a href=\"#\">&gt;</a></li>
\t              </ul> -->
\t            <!-- </div>
\t          </div>
\t        </div> -->
\t    \t</div>
\t    </section>
    </div></div>
</section>



    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    
";
    }

    public function getTemplateName()
    {
        return "modules/custom/rfmu_custom/templates/all-models.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 92,  105 => 90,  96 => 82,  84 => 76,  79 => 75,  77 => 74,  69 => 70,  64 => 68,  57 => 66,  43 => 54,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ftco-section-2 mt-5 pb-5\">
<div class=\"container\">
\t{#
<form class=\"form-search form-search-position\" method=\"get\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm gutters-19\">
            <div class=\"form-group\">
            \t<label class=\"label\">By Gender</label>
              <div class=\"input-group\">
                  <select class=\"form-control\" name=\"gender\">
                  {% set sex = query.taxonomy .type('model_gender') .all()%}
\t\t\t<option value=\"all\"> All </option>
\t\t\t{% for sex in sex %}
                  <option value=\"{{sex.tid.value}}\">{{sex.name.value}} </option>
\t\t\t{% endfor %}
                  </select> 
              </div>
            </div>
          </div>
           <div class=\"col-sm gutters-19\">
            <div class=\"form-group\">
            \t<label class=\"label\">By Complexion</label>
              <div class=\"input-group\">
                  <select class=\"form-control\" name=\"skin\">
{% set skin = query.taxonomy .type('model_complexion') .all()%}
\t\t\t<option value=\"all\" > All </option>
\t\t\t{% for skin in skin %}
                  <option value=\"{{skin.tid.value}}\">{{skin.name.value}} </option>
\t\t\t{% endfor %}
                  \t
                  </select> 
              </div>
            </div>
          </div>
          <div class=\"col-sm gutters-19\">
            <div class=\"form-group\">
            \t<label class=\"text-white\">.</label>
            \t<div class=\"input-group\">
                 <input type=\"submit\" value=\"Apply\" class=\"btn btn-primary form-control py-3 px-5\" style=\"border:#1d96ec;background:#1d96ec!important;color:#fff!important;\">
           </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

 <div class=\"row\">
\t<div class=\"col-md-12 text-center\">
\t\t<b>{{search_result}}</b>
\t</div>
#}
</div>
<section class=\"ftco-section-2 mb-5 pb-5\">
\t<div class=\"container\">
\t\t<div class=\"all-models-container row d-flex no-gutters\">
\t    \t\t<!-- <div class=\"col-md-6 d-flex align-items-center heading-section ftco-animate bg-light\">
\t    \t\t<div class=\"col-md-9\">
\t\t\t<div class=\"p-5\">
\t\t\t  <h2 class=\"mb-4\">Be the Next Top Model</h2>
\t\t         <p>Far far away, behind the word mountains, far from the countries Vokalia </p>
\t            </div>
              </div>
\t    </div> -->
\t{% for model in data %}\t
\t<div class=\"col-md-3 col-sm-4 mix category_3 mix_all\" style=\"display: block; opacity: 1; \">
\t\t<a href=\"/rfmu-user/{{model.model_id}}\">
                <em>
                  <img src=\"{{ model.model_profile|file_url }}\" alt=\"{{ model.name_name}}\" class=\"img-responsive\">
                </em>
                <span class=\"featured-list\">
                {#  <p><b>{{ loop.index }}-{{model.title}}</b></p> #}
                 {# <p>{{ model.Owner.field_agency_name.value }}</p> #}
                 <p>{{ model.model_name}}</p>
                 <p>{{ model.agency_name}}</p>
                </span>
              </a>
        </div>
\t  
\t{% endfor %}
\t    \t\t</div>
\t    \t\t<!-- <div class=\"row no-gutters mt-5\">
\t          <div class=\"col text-center\">
\t            <div class=\"block-27\">
\t              <ul>
\t                <li><a href=\"#\">&lt;</a></li> -->
\t                <!-- <li class=\"active\"><span></span></li> -->
\t                {#% for count in counter %#}
\t                <!-- <li><a href=\"#\"> -->{#{ loop.index }#}<!-- </a></li> -->
\t                {#%endfor%#}
\t                <!-- <li><a href=\"#\">&gt;</a></li>
\t              </ul> -->
\t            <!-- </div>
\t          </div>
\t        </div> -->
\t    \t</div>
\t    </section>
    </div></div>
</section>



    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    
", "modules/custom/rfmu_custom/templates/all-models.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/modules/custom/rfmu_custom/templates/all-models.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 66);
        static $filters = array("escape" => 68, "file_url" => 70);
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
