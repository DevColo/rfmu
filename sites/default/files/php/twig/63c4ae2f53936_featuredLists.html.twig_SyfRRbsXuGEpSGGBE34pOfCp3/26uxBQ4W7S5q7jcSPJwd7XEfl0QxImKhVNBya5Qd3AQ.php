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

/* themes/contrib/showcase_lite/templates/block/featuredLists.html.twig */
class __TwigTemplate_b95cfa5a717979f83e047d48471db790722b132bbba07892b5c90f9089cff055 extends \Twig\Template
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
        echo "<style type=\"text/css\">
 .owl-wrapper{
    display: inline-flex;
    margin: auto;
 }
 .owl-item{
    padding: 0px;
 }
 img{
    border-radius: 0;
 }
 .carousel-item {
    /*box-shadow: 0 0 11px #eee;*/
    margin-bottom: 10px;
}
a:hover{
    text-decoration: none;
}
h6.mb-2 {
    margin-bottom: 2px !important;
}
.slogan{
    width: fit-content;
    display: block;
    border-bottom: 0.2px solid #d2cfcf;
    margin-bottom: 10px;
}
.text-uppercase{
    text-transform: uppercase;
}


</style>
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/OwlCarousel/dist/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/OwlCarousel/dist/assets/owl.theme.default.min.css\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\" integrity=\"sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

<h2 class=\"block-title\">Top Model Lists <a href=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 38, $this->source), "html", null, true);
        echo "/our-agencies\" style=\"float:right;font-size:13px;\">See more >></a></h2>

 
<div data-settings=\"{&quot;grouping&quot;:[],&quot;row_class&quot;:&quot;row&quot;,&quot;default_row_class&quot;:true,&quot;uses_fields&quot;:false,&quot;items&quot;:4,&quot;itemsDesktop&quot;:[20],&quot;itemsDesktopSmall&quot;:[979,3],&quot;itemsTablet&quot;:[768,1],&quot;itemsMobile&quot;:[3],&quot;singleItem&quot;:false,&quot;itemsScaleUp&quot;:false,&quot;slideSpeed&quot;:200,&quot;paginationSpeed&quot;:800,&quot;rewindSpeed&quot;:1000,&quot;autoPlay&quot;:true,&quot;stopOnHover&quot;:false,&quot;navigation&quot;:false,&quot;navigationText&quot;:[&quot;prev&quot;,&quot;next&quot;],&quot;prevText&quot;:&quot;prev&quot;,&quot;nextText&quot;:&quot;next&quot;,&quot;rewindNav&quot;:true,&quot;scrollPerPage&quot;:false,&quot;pagination&quot;:true,&quot;paginationNumbers&quot;:false,&quot;responsive&quot;:true,&quot;responsiveRefreshRate&quot;:200,&quot;mouseDrag&quot;:true,&quot;touchDrag&quot;:true,&quot;transitionStyle&quot;:&quot;fade&quot;}\" class=\"owl-slider-wrapper owl-carousel owl-theme\" class=\"owl-slider-wrapper owl-carousel owl-theme\" style=\"opacity: 1; display: inline-flex;\">
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured_models"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 43
            echo "            
                
    <div class=\"carousel-item\">
    <a href=\"";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 46, $this->source), "html", null, true);
            echo "/rfmu-user/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "agency_id", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "\">
      <div class=\"carousel-item-image\">
        <img src=\"";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::fileUrlFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "model_profile", [], "any", false, false, true, 48), 48, $this->source)), "html", null, true);
            echo "\" class=\"item-image\">
      </div>
      <div class=\"carousel-item-text text-center\">
        <b class=\"text-black mb-2 text-uppercase\">";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "agency_name", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "'s Top Models</b><br>
        <small class=\"text-black\">Created by: ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["model"], "agency_name", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "</small>
        <img src=\"";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
            echo "/images/verify-icon.png\" style=\"
    position: relative;
    width: 9px;
    display: inline-flex;
\">
      </div>
    </a>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "      
</div>  




";
    }

    public function getTemplateName()
    {
        return "themes/contrib/showcase_lite/templates/block/featuredLists.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 62,  121 => 53,  117 => 52,  113 => 51,  107 => 48,  100 => 46,  95 => 43,  91 => 42,  84 => 38,  78 => 35,  74 => 34,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
 .owl-wrapper{
    display: inline-flex;
    margin: auto;
 }
 .owl-item{
    padding: 0px;
 }
 img{
    border-radius: 0;
 }
 .carousel-item {
    /*box-shadow: 0 0 11px #eee;*/
    margin-bottom: 10px;
}
a:hover{
    text-decoration: none;
}
h6.mb-2 {
    margin-bottom: 2px !important;
}
.slogan{
    width: fit-content;
    display: block;
    border-bottom: 0.2px solid #d2cfcf;
    margin-bottom: 10px;
}
.text-uppercase{
    text-transform: uppercase;
}


</style>
    <link rel=\"stylesheet\" href=\"{{ active_theme_path() }}/OwlCarousel/dist/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"{{ active_theme_path() }}/OwlCarousel/dist/assets/owl.theme.default.min.css\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\" integrity=\"sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

<h2 class=\"block-title\">Top Model Lists <a href=\"{{base_path}}/our-agencies\" style=\"float:right;font-size:13px;\">See more >></a></h2>

 
<div data-settings=\"{&quot;grouping&quot;:[],&quot;row_class&quot;:&quot;row&quot;,&quot;default_row_class&quot;:true,&quot;uses_fields&quot;:false,&quot;items&quot;:4,&quot;itemsDesktop&quot;:[20],&quot;itemsDesktopSmall&quot;:[979,3],&quot;itemsTablet&quot;:[768,1],&quot;itemsMobile&quot;:[3],&quot;singleItem&quot;:false,&quot;itemsScaleUp&quot;:false,&quot;slideSpeed&quot;:200,&quot;paginationSpeed&quot;:800,&quot;rewindSpeed&quot;:1000,&quot;autoPlay&quot;:true,&quot;stopOnHover&quot;:false,&quot;navigation&quot;:false,&quot;navigationText&quot;:[&quot;prev&quot;,&quot;next&quot;],&quot;prevText&quot;:&quot;prev&quot;,&quot;nextText&quot;:&quot;next&quot;,&quot;rewindNav&quot;:true,&quot;scrollPerPage&quot;:false,&quot;pagination&quot;:true,&quot;paginationNumbers&quot;:false,&quot;responsive&quot;:true,&quot;responsiveRefreshRate&quot;:200,&quot;mouseDrag&quot;:true,&quot;touchDrag&quot;:true,&quot;transitionStyle&quot;:&quot;fade&quot;}\" class=\"owl-slider-wrapper owl-carousel owl-theme\" class=\"owl-slider-wrapper owl-carousel owl-theme\" style=\"opacity: 1; display: inline-flex;\">
        {% for model in featured_models %}
            
                
    <div class=\"carousel-item\">
    <a href=\"{{base_path}}/rfmu-user/{{model.agency_id}}\">
      <div class=\"carousel-item-image\">
        <img src=\"{{model.model_profile |file_url}}\" class=\"item-image\">
      </div>
      <div class=\"carousel-item-text text-center\">
        <b class=\"text-black mb-2 text-uppercase\">{{model.agency_name }}'s Top Models</b><br>
        <small class=\"text-black\">Created by: {{model.agency_name}}</small>
        <img src=\"{{ active_theme_path()}}/images/verify-icon.png\" style=\"
    position: relative;
    width: 9px;
    display: inline-flex;
\">
      </div>
    </a>
  </div>
{% endfor %}
      
</div>  




", "themes/contrib/showcase_lite/templates/block/featuredLists.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/contrib/showcase_lite/templates/block/featuredLists.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 42);
        static $filters = array("escape" => 34, "file_url" => 48);
        static $functions = array("active_theme_path" => 34);

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
