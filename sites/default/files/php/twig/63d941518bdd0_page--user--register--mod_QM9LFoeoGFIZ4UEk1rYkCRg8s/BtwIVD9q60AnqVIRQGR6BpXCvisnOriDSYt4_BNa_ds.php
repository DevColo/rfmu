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

/* themes/model/templates/pages/page--user--register--model.html.twig */
class __TwigTemplate_5ca226cab000e69fd69e99b30aae560525ecafafc1ca3f17f334d957840eeed3 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Create Model Account | RFMU</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 9, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/vendors/mdi/css/materialdesignicons.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 10, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/vendors/css/vendor.bundle.base.css\">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 17, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/css/style.css\">
    <!-- End layout styles -->
  </head>
  <body>
    <div class=\"container-scroller\">
      <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
        <div class=\"content-wrapper d-flex align-items-center auth\" style=\"padding:0;\">
          <div class=\"row flex-grow\">
            <div class=\"col-lg-6 mx-auto\">
              <div class=\"auth-form-light text-left p-5\">
                <div class=\"brand-logo text-center\">
                  <img src=\"";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 28, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/model.jpg\" alt=\"Rwanda Fashion Model Union\" style=\"max-width: 18%;font-size: medium !important;margin:auto;\">
                </div>
                <!-- <h4>Hello! let's get started</h4> -->
                <h6 class=\"font-weight-light\">Sign up as a Model</h6>
                <div class=\"pt-3\">
                  ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "message", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "
                  ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "

                  <div class=\"mt-3\">
                   <a href=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 37, $this->source), "html", null, true);
        echo "user/login\" class=\"auth-link text-black\">Login </a>
                  </div>
                  <div class=\"mt-3\">
                    <a class=\"btn btn-block btn-info form-control btn-lg font-weight-medium auth-form-btn\" href=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 40, $this->source), "html", null, true);
        echo "register-agency\">Create Agency Account</a>
                  </div>
                  <div class=\"mt-3\">
                    <a class=\"btn btn-block btn-warning form-control btn-lg font-weight-medium auth-form-btn\" href=\"";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 43, $this->source), "html", null, true);
        echo "\">Go To Home</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src=\"";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 56, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/vendors/js/vendor.bundle.base.js\"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 61, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/js/off-canvas.js\"></script>
    <script src=\"";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 62, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/js/hoverable-collapse.js\"></script>
    <script src=\"";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 63, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/js/misc.js\"></script>
    <!-- endinject -->
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/model/templates/pages/page--user--register--model.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 63,  141 => 62,  136 => 61,  127 => 56,  111 => 43,  105 => 40,  99 => 37,  93 => 34,  89 => 33,  80 => 28,  65 => 17,  54 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Create Model Account | RFMU</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{base_path}}{{ active_theme_path() }}/admin-assets/assets/vendors/mdi/css/materialdesignicons.min.css\">
    <link rel=\"stylesheet\" href=\"{{base_path}}{{ active_theme_path() }}/admin-assets/assets/vendors/css/vendor.bundle.base.css\">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"{{base_path}}{{ active_theme_path() }}/admin-assets/assets/css/style.css\">
    <!-- End layout styles -->
  </head>
  <body>
    <div class=\"container-scroller\">
      <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
        <div class=\"content-wrapper d-flex align-items-center auth\" style=\"padding:0;\">
          <div class=\"row flex-grow\">
            <div class=\"col-lg-6 mx-auto\">
              <div class=\"auth-form-light text-left p-5\">
                <div class=\"brand-logo text-center\">
                  <img src=\"{{base_path}}{{ active_theme_path() }}/assets/model.jpg\" alt=\"Rwanda Fashion Model Union\" style=\"max-width: 18%;font-size: medium !important;margin:auto;\">
                </div>
                <!-- <h4>Hello! let's get started</h4> -->
                <h6 class=\"font-weight-light\">Sign up as a Model</h6>
                <div class=\"pt-3\">
                  {{page.message}}
                  {{page.content}}

                  <div class=\"mt-3\">
                   <a href=\"{{base_path}}user/login\" class=\"auth-link text-black\">Login </a>
                  </div>
                  <div class=\"mt-3\">
                    <a class=\"btn btn-block btn-info form-control btn-lg font-weight-medium auth-form-btn\" href=\"{{base_path}}register-agency\">Create Agency Account</a>
                  </div>
                  <div class=\"mt-3\">
                    <a class=\"btn btn-block btn-warning form-control btn-lg font-weight-medium auth-form-btn\" href=\"{{base_path}}\">Go To Home</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src=\"{{base_path}}{{ active_theme_path() }}/admin-assets/assets/vendors/js/vendor.bundle.base.js\"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=\"{{base_path}}{{ active_theme_path() }}/admin-assets/assets/js/off-canvas.js\"></script>
    <script src=\"{{base_path}}{{ active_theme_path() }}/admin-assets/assets/js/hoverable-collapse.js\"></script>
    <script src=\"{{base_path}}{{ active_theme_path() }}/admin-assets/assets/js/misc.js\"></script>
    <!-- endinject -->
  </body>
</html>", "themes/model/templates/pages/page--user--register--model.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/model/templates/pages/page--user--register--model.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 9);
        static $functions = array("active_theme_path" => 9);

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
