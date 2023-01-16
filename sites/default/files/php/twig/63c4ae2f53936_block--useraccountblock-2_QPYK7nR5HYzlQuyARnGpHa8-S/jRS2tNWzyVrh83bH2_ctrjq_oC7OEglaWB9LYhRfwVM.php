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

/* themes/contrib/showcase_lite/templates/block/block--useraccountblock-2.html.twig */
class __TwigTemplate_415ca5bdb977ba50298306e0de7457891ed370401a3b84ea9506197833875275 extends \Twig\Template
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
        if (($context["logged_in"] ?? null)) {
            // line 2
            echo "    <div class=\"user-detail-wrap dropdown\" style=\"text-align: end;width: auto;\"> 
        <a href=\"javascript:void(0);\" class=\"btn\" data-toggle=\"dropdown\">
            ";
            // line 4
            if ( !twig_test_empty(($context["agency_logo"] ?? null))) {
                // line 5
                echo "              <img class=\"user-img\" style=\"width:35px;height:35px;border-radius: 17px;\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::fileUrlFilter($this->sandbox->ensureToStringAllowed(($context["agency_logo"] ?? null), 5, $this->source)), "html", null, true);
                echo "\" data-no-retina=\"\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_name"] ?? null), 5, $this->source), "html", null, true);
                echo "\">&nbsp;<span class=\"caret\"></span>
            ";
            } else {
                // line 7
                echo "              <img style=\"width:35px;height:35px;\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source), "html", null, true);
                echo "/";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
                echo "/images/default-user.png\" alt=\"Default Image\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["loggedin_user_name"] ?? null), 7, $this->source), "html", null, true);
                echo "\">&nbsp;<span class=\"caret\"></span>
            ";
            }
            // line 9
            echo "            <span class=\"user-name\"><div class=\"user_name\" title=\"\"></div></span>
            
        </a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 13, $this->source), "html", null, true);
            echo "/rfmu-user/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\">My Account</a></li>
            <li><a href=\"";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 14, $this->source), "html", null, true);
            echo "/user/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "/edit\">Edit My Profile</a></li>
            <li><a href=\"";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 15, $this->source), "html", null, true);
            echo "/user/logout\">Logout</a></li>
        </ul>
    </div>
     <div class=\"menu-toggle-btn\">
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </div>
  ";
        } else {
            // line 24
            echo "    <div class=\"user-detail-wrap dropdown login\">
     <a href=\"";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 25, $this->source), "html", null, true);
            echo "/user\">Join</a>
    </div>
  ";
        }
        // line 28
        echo "  <div class=\"dropdown\" id=\"custom-mobile-menu\">
  <button class=\"btn-menu dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-bars text-white\"></i></button>
  <ul class=\"dropdown-menu\" style=\"left: -297px;
    text-align: center;
    background: #fff;\">
    <li><a href=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 33, $this->source), "html", null, true);
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 34, $this->source), "html", null, true);
        echo "/blog-landing-page\">News</a></li>
    <li><a href=\"";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 35, $this->source), "html", null, true);
        echo "/about-us\">About Us</a></li>
    <li><a href=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 36, $this->source), "html", null, true);
        echo "/about-us\">Agencies</a></li>
    <li><a href=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 37, $this->source), "html", null, true);
        echo "/people\">People</a></li>
  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/showcase_lite/templates/block/block--useraccountblock-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  123 => 36,  119 => 35,  115 => 34,  111 => 33,  104 => 28,  98 => 25,  95 => 24,  83 => 15,  77 => 14,  71 => 13,  65 => 9,  55 => 7,  47 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if logged_in %}
    <div class=\"user-detail-wrap dropdown\" style=\"text-align: end;width: auto;\"> 
        <a href=\"javascript:void(0);\" class=\"btn\" data-toggle=\"dropdown\">
            {% if agency_logo is not empty %}
              <img class=\"user-img\" style=\"width:35px;height:35px;border-radius: 17px;\" src=\"{{ agency_logo | file_url }}\" data-no-retina=\"\" title=\"{{user_name}}\">&nbsp;<span class=\"caret\"></span>
            {% else %}
              <img style=\"width:35px;height:35px;\" src=\"{{ base_path }}/{{ active_theme_path() }}/images/default-user.png\" alt=\"Default Image\" title=\"{{loggedin_user_name}}\">&nbsp;<span class=\"caret\"></span>
            {% endif %}
            <span class=\"user-name\"><div class=\"user_name\" title=\"\"></div></span>
            
        </a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"{{ base_path }}/rfmu-user/{{user.id}}\">My Account</a></li>
            <li><a href=\"{{ base_path }}/user/{{user.id}}/edit\">Edit My Profile</a></li>
            <li><a href=\"{{ base_path }}/user/logout\">Logout</a></li>
        </ul>
    </div>
     <div class=\"menu-toggle-btn\">
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </div>
  {% else %}
    <div class=\"user-detail-wrap dropdown login\">
     <a href=\"{{ base_path }}/user\">Join</a>
    </div>
  {% endif %}
  <div class=\"dropdown\" id=\"custom-mobile-menu\">
  <button class=\"btn-menu dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-bars text-white\"></i></button>
  <ul class=\"dropdown-menu\" style=\"left: -297px;
    text-align: center;
    background: #fff;\">
    <li><a href=\"{{ base_path }}\">Home</a></li>
    <li><a href=\"{{ base_path }}/blog-landing-page\">News</a></li>
    <li><a href=\"{{ base_path }}/about-us\">About Us</a></li>
    <li><a href=\"{{ base_path }}/about-us\">Agencies</a></li>
    <li><a href=\"{{ base_path }}/people\">People</a></li>
  </ul>
</div>", "themes/contrib/showcase_lite/templates/block/block--useraccountblock-2.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/contrib/showcase_lite/templates/block/block--useraccountblock-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 5, "file_url" => 5);
        static $functions = array("active_theme_path" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
