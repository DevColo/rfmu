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

/* themes/contrib/showcase_lite/templates/block/hometoppeople.html.twig */
class __TwigTemplate_085000390f472dfe1ab7254a8605d14970e1b9e7566a1121c6ce9813f1c166c0 extends \Twig\Template
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
    .carousel-inner>.item>img{
        border-radius: 0px;
    }
</style>
<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\">
      <div class=\"item active\">
        <img src=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/pic.jpeg\" alt=\"Los Angeles\" style=\"width:100%;\">
        <div class=\"carousel-caption d-none d-md-block\">
            <h5>Models</h5>
            <p>6</p>
        </div>
      </div>

      <div class=\"item\">
        <img src=\"";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/pic3.jpg\" alt=\"New york\" style=\"width:100%;\">
        <div class=\"carousel-caption d-none d-md-block\">
            <h5>Designers</h5>
            <!-- <p>13</p> -->
        </div>
      </div>
      <div class=\"item\">
        <img src=\"";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/pic1.jpg\" alt=\"New york\" style=\"width:100%;\">
        <div class=\"carousel-caption d-none d-md-block\">
            <h5>Entertainers</h5>
            <!-- <p>13</p> -->
        </div>
      </div>
      <div class=\"item\">
        <img src=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/pic1.jpg\" alt=\"New york\" style=\"width:100%;\">
        <div class=\"carousel-caption d-none d-md-block\">
            <h5>Photographers</h5>
            <!-- <p>13</p> -->
        </div>
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>


<!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script> -->


";
    }

    public function getTemplateName()
    {
        return "themes/contrib/showcase_lite/templates/block/hometoppeople.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 39,  78 => 32,  68 => 25,  57 => 17,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
    .carousel-inner>.item>img{
        border-radius: 0px;
    }
</style>
<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\">
      <div class=\"item active\">
        <img src=\"{{ active_theme_path() }}/images/pic.jpeg\" alt=\"Los Angeles\" style=\"width:100%;\">
        <div class=\"carousel-caption d-none d-md-block\">
            <h5>Models</h5>
            <p>6</p>
        </div>
      </div>

      <div class=\"item\">
        <img src=\"{{ active_theme_path() }}/images/pic3.jpg\" alt=\"New york\" style=\"width:100%;\">
        <div class=\"carousel-caption d-none d-md-block\">
            <h5>Designers</h5>
            <!-- <p>13</p> -->
        </div>
      </div>
      <div class=\"item\">
        <img src=\"{{ active_theme_path() }}/images/pic1.jpg\" alt=\"New york\" style=\"width:100%;\">
        <div class=\"carousel-caption d-none d-md-block\">
            <h5>Entertainers</h5>
            <!-- <p>13</p> -->
        </div>
      </div>
      <div class=\"item\">
        <img src=\"{{ active_theme_path() }}/images/pic1.jpg\" alt=\"New york\" style=\"width:100%;\">
        <div class=\"carousel-caption d-none d-md-block\">
            <h5>Photographers</h5>
            <!-- <p>13</p> -->
        </div>
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>


<!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script> -->


", "themes/contrib/showcase_lite/templates/block/hometoppeople.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/contrib/showcase_lite/templates/block/hometoppeople.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 17);
        static $functions = array("active_theme_path" => 17);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
