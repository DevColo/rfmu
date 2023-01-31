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

/* themes/model/templates/pages/page--user.html.twig */
class __TwigTemplate_f09960d457b23d31e6f231d92597163ef20fee230f613192adc7458ac2775ab2 extends \Twig\Template
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
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 19, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/model.jpg\" />
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- partial:partials/_navbar.html -->
      <nav class=\"navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
        <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
          <a class=\"navbar-brand brand-logo\" href=\"";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 26, $this->source), "html", null, true);
        echo "\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 26, $this->source), "html", null, true);
        echo "themes/model/assets/model.jpg\" alt=\"Rwanda Fashion Model Union\" style=\"max-width: 13%;font-size: medium !important;\" /></a>
          <a class=\"navbar-brand brand-logo-mini\" href=\"";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 27, $this->source), "html", null, true);
        echo "\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 27, $this->source), "html", null, true);
        echo "themes/model/assets/model.jpg\" alt=\"Rwanda Fashion Model Union\" style=\"width: 30px;\" /></a>
        </div>
        <div class=\"navbar-menu-wrapper d-flex align-items-stretch\">
          <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
            <span class=\"mdi mdi-menu\"></span>
          </button>
          <div class=\"search-field d-none d-md-block\">
            <form class=\"d-flex align-items-center h-100\" action=\"#\">
              <div class=\"input-group\">
                <div class=\"input-group-prepend bg-transparent\">
                  <i class=\"input-group-text border-0 mdi mdi-magnify\"></i>
                </div>
                ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("search_form_block"), "html", null, true);
        echo "
              </div>
            </form>
          </div>
          <ul class=\"navbar-nav navbar-nav-right\">
            <li class=\"nav-item nav-profile dropdown\">
              <a class=\"nav-link dropdown-toggle\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <div class=\"nav-profile-img\">
                  <img src=\"";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_photo"] ?? null), 47, $this->source), "html", null, true);
        echo "\" alt=\"image\">
                  <span class=\"availability-status online\"></span>
                </div>
                <div class=\"nav-profile-text\">
                  <p class=\"mb-1 text-black\">";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 51), 0, [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "</p>
                </div>
              </a>
              <div class=\"dropdown-menu navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                <a class=\"dropdown-item\" href=\"";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 55, $this->source), "html", null, true);
        echo "my-profile\">
                  <i class=\"mdi mdi-user me-2 text-success\"></i> My Profile </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 58, $this->source), "html", null, true);
        echo "user/logout\">
                  <i class=\"mdi mdi-logout me-2 text-primary\"></i> Signout </a>
              </div>
            </li>
            <li class=\"nav-item d-none d-lg-block full-screen-link\">
              <a class=\"nav-link\">
                <i class=\"mdi mdi-fullscreen\" id=\"fullscreen-button\"></i>
              </a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link count-indicator dropdown-toggle\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"mdi mdi-email-outline\"></i>
                <span class=\"count-symbol bg-warning\"></span>
              </a>
              <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
                <h6 class=\"p-3 mb-0\">Messages</h6>
                <div class=\"dropdown-divider\"></div>
                <!-- <a class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <img src=\"assets/images/faces/face2.jpg\" alt=\"image\" class=\"profile-pic\">
                  </div>
                  <div class=\"preview-item-content d-flex align-items-start flex-column justify-content-center\">
                    <h6 class=\"preview-subject ellipsis mb-1 font-weight-normal\">Cregh send you a message</h6>
                    <p class=\"text-gray mb-0\"> 15 Minutes ago </p>
                  </div>
                </a> -->
                <div class=\"dropdown-divider\"></div>
                <h6 class=\"p-3 mb-0 text-center\">no messages</h6>
              </div>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                <i class=\"mdi mdi-bell-outline\"></i>
                <span class=\"count-symbol bg-danger\"></span>
              </a>
              <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                <h6 class=\"p-3 mb-0\">Notifications</h6>
                <div class=\"dropdown-divider\"></div>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <div class=\"preview-icon bg-warning\">
                      <i class=\"mdi mdi-settings\"></i>
                    </div>
                  </div>
                  <!-- <div class=\"preview-item-content d-flex align-items-start flex-column justify-content-center\">
                    <h6 class=\"preview-subject font-weight-normal mb-1\">Settings</h6>
                    <p class=\"text-gray ellipsis mb-0\"> Update dashboard </p>
                  </div> -->
                </a>
                <div class=\"dropdown-divider\"></div>
                <h6 class=\"p-3 mb-0 text-center\">no notifications</h6>
              </div>
            </li>
            <li class=\"nav-item nav-logout d-none d-lg-block\">
              <a class=\"nav-link\" href=\"#\">
                <i class=\"mdi mdi-power\"></i>
              </a>
            </li>
          </ul>
          <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
            <span class=\"mdi mdi-menu\"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:partials/_sidebar.html -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
          <ul class=\"nav\">
            <li class=\"nav-item nav-profile\">
              <a href=\"#\" class=\"nav-link\">
                <div class=\"nav-profile-image\">
                  <img src=\"";
        // line 131
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_photo"] ?? null), 131, $this->source), "html", null, true);
        echo "\" alt=\"profile\">
                  <span class=\"login-status online\"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class=\"nav-profile-text d-flex flex-column\">
                  <span class=\"font-weight-bold mb-2\">David Grey. H</span>
                  <span class=\"text-secondary text-small\">Project Manager</span>
                </div>
                <i class=\"mdi mdi-bookmark-check text-success nav-profile-badge\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"index.html\">
                <span class=\"menu-title\">Dashboard</span>
                <i class=\"mdi mdi-home menu-icon\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
                <span class=\"menu-title\">Basic UI Elements</span>
                <i class=\"menu-arrow\"></i>
                <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
              </a>
              <div class=\"collapse\" id=\"ui-basic\">
                <ul class=\"nav flex-column sub-menu\">
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/buttons.html\">Buttons</a></li>
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/typography.html\">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"pages/icons/mdi.html\">
                <span class=\"menu-title\">Icons</span>
                <i class=\"mdi mdi-contacts menu-icon\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"pages/forms/basic_elements.html\">
                <span class=\"menu-title\">Forms</span>
                <i class=\"mdi mdi-format-list-bulleted menu-icon\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"pages/charts/chartjs.html\">
                <span class=\"menu-title\">Charts</span>
                <i class=\"mdi mdi-chart-bar menu-icon\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"pages/tables/basic-table.html\">
                <span class=\"menu-title\">Tables</span>
                <i class=\"mdi mdi-table-large menu-icon\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#general-pages\" aria-expanded=\"false\" aria-controls=\"general-pages\">
                <span class=\"menu-title\">Sample Pages</span>
                <i class=\"menu-arrow\"></i>
                <i class=\"mdi mdi-medical-bag menu-icon\"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class=\"main-panel\">
          <div class=\"content-wrapper\">
            <div class=\"page-header\">
              <h3 class=\"page-title\">
                <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                  <i class=\"mdi mdi-home\"></i>
                </span> Dashboard
              </h3>
              <nav aria-label=\"breadcrumb\">
                <ul class=\"breadcrumb\">
                  <li class=\"breadcrumb-item active\" aria-current=\"page\">
                    <span></span>Oveview <i class=\"mdi mdi-alert-circle-outline icon-sm text-primary align-middle\"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class=\"row\">
              <div class=\"col-md-4 stretch-card grid-margin\">
                <div class=\"card bg-gradient-danger card-img-holder text-white\">
                  <div class=\"card-body\">
                    <h4 class=\"font-weight-normal mb-3\">My Posts <i class=\"mdi mdi-chart-line mdi-24px float-right\"></i>
                    </h4>
                    <h2 class=\"mb-5\">-</h2>
                  </div>
                </div>
              </div>
              <div class=\"col-md-4 stretch-card grid-margin\">
                <div class=\"card bg-gradient-info card-img-holder text-white\">
                  <div class=\"card-body\">
                    <h4 class=\"font-weight-normal mb-3\">Teammates <i class=\"mdi mdi-bookmark-outline mdi-24px float-right\"></i>
                    </h4>
                    <h2 class=\"mb-5\">-</h2>
                  </div>
                </div>
              </div>
              <div class=\"col-md-4 stretch-card grid-margin\">
                <div class=\"card bg-gradient-success card-img-holder text-white\">
                  <div class=\"card-body\">
                    <h4 class=\"font-weight-normal mb-3\">My Agencies <i class=\"mdi mdi-diamond mdi-24px float-right\"></i>
                    </h4>
                    <h2 class=\"mb-5\">-</h2>
                  </div>
                </div>
              </div>
            </div>
            
            
            <div class=\"row\">
              <div class=\"col-md-7 grid-margin stretch-card\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title\">My Chat</h4>
                    <div class=\"table-responsive\">
                     ";
        // line 248
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("who_s_online"), "html", null, true);
        echo "
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- <footer class=\"footer\">
            <div class=\"container-fluid d-flex justify-content-between\">
              <span class=\"text-muted d-block text-center text-sm-start d-sm-inline-block\">Copyright © bootstrapdash.com 2021</span>
              <span class=\"float-none float-sm-end mt-1 mt-sm-0 text-end\"> Free <a href=\"https://www.bootstrapdash.com/bootstrap-admin-template/\" target=\"_blank\">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer> -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
<script src=\"";
        // line 271
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 271, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/vendors/js/vendor.bundle.base.js\"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=\"";
        // line 276
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 276, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/js/off-canvas.js\"></script>
    <script src=\"";
        // line 277
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 277, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/js/hoverable-collapse.js\"></script>
    <script src=\"";
        // line 278
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 278, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/js/misc.js\"></script>
    <!-- End custom js for this page -->
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/model/templates/pages/page--user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 278,  372 => 277,  367 => 276,  358 => 271,  332 => 248,  212 => 131,  136 => 58,  130 => 55,  123 => 51,  116 => 47,  105 => 39,  88 => 27,  82 => 26,  71 => 19,  65 => 17,  54 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
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
    <link rel=\"shortcut icon\" href=\"{{base_path}}{{ active_theme_path() }}/assets/model.jpg\" />
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- partial:partials/_navbar.html -->
      <nav class=\"navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
        <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
          <a class=\"navbar-brand brand-logo\" href=\"{{base_path}}\"><img src=\"{{base_path}}themes/model/assets/model.jpg\" alt=\"Rwanda Fashion Model Union\" style=\"max-width: 13%;font-size: medium !important;\" /></a>
          <a class=\"navbar-brand brand-logo-mini\" href=\"{{base_path}}\"><img src=\"{{base_path}}themes/model/assets/model.jpg\" alt=\"Rwanda Fashion Model Union\" style=\"width: 30px;\" /></a>
        </div>
        <div class=\"navbar-menu-wrapper d-flex align-items-stretch\">
          <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
            <span class=\"mdi mdi-menu\"></span>
          </button>
          <div class=\"search-field d-none d-md-block\">
            <form class=\"d-flex align-items-center h-100\" action=\"#\">
              <div class=\"input-group\">
                <div class=\"input-group-prepend bg-transparent\">
                  <i class=\"input-group-text border-0 mdi mdi-magnify\"></i>
                </div>
                {{ drupal_block('search_form_block') }}
              </div>
            </form>
          </div>
          <ul class=\"navbar-nav navbar-nav-right\">
            <li class=\"nav-item nav-profile dropdown\">
              <a class=\"nav-link dropdown-toggle\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <div class=\"nav-profile-img\">
                  <img src=\"{{profile_photo}}\" alt=\"image\">
                  <span class=\"availability-status online\"></span>
                </div>
                <div class=\"nav-profile-text\">
                  <p class=\"mb-1 text-black\">{{user.name.0.value}}</p>
                </div>
              </a>
              <div class=\"dropdown-menu navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                <a class=\"dropdown-item\" href=\"{{base_path}}my-profile\">
                  <i class=\"mdi mdi-user me-2 text-success\"></i> My Profile </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"{{base_path}}user/logout\">
                  <i class=\"mdi mdi-logout me-2 text-primary\"></i> Signout </a>
              </div>
            </li>
            <li class=\"nav-item d-none d-lg-block full-screen-link\">
              <a class=\"nav-link\">
                <i class=\"mdi mdi-fullscreen\" id=\"fullscreen-button\"></i>
              </a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link count-indicator dropdown-toggle\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"mdi mdi-email-outline\"></i>
                <span class=\"count-symbol bg-warning\"></span>
              </a>
              <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
                <h6 class=\"p-3 mb-0\">Messages</h6>
                <div class=\"dropdown-divider\"></div>
                <!-- <a class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <img src=\"assets/images/faces/face2.jpg\" alt=\"image\" class=\"profile-pic\">
                  </div>
                  <div class=\"preview-item-content d-flex align-items-start flex-column justify-content-center\">
                    <h6 class=\"preview-subject ellipsis mb-1 font-weight-normal\">Cregh send you a message</h6>
                    <p class=\"text-gray mb-0\"> 15 Minutes ago </p>
                  </div>
                </a> -->
                <div class=\"dropdown-divider\"></div>
                <h6 class=\"p-3 mb-0 text-center\">no messages</h6>
              </div>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                <i class=\"mdi mdi-bell-outline\"></i>
                <span class=\"count-symbol bg-danger\"></span>
              </a>
              <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                <h6 class=\"p-3 mb-0\">Notifications</h6>
                <div class=\"dropdown-divider\"></div>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <div class=\"preview-icon bg-warning\">
                      <i class=\"mdi mdi-settings\"></i>
                    </div>
                  </div>
                  <!-- <div class=\"preview-item-content d-flex align-items-start flex-column justify-content-center\">
                    <h6 class=\"preview-subject font-weight-normal mb-1\">Settings</h6>
                    <p class=\"text-gray ellipsis mb-0\"> Update dashboard </p>
                  </div> -->
                </a>
                <div class=\"dropdown-divider\"></div>
                <h6 class=\"p-3 mb-0 text-center\">no notifications</h6>
              </div>
            </li>
            <li class=\"nav-item nav-logout d-none d-lg-block\">
              <a class=\"nav-link\" href=\"#\">
                <i class=\"mdi mdi-power\"></i>
              </a>
            </li>
          </ul>
          <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
            <span class=\"mdi mdi-menu\"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:partials/_sidebar.html -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
          <ul class=\"nav\">
            <li class=\"nav-item nav-profile\">
              <a href=\"#\" class=\"nav-link\">
                <div class=\"nav-profile-image\">
                  <img src=\"{{profile_photo}}\" alt=\"profile\">
                  <span class=\"login-status online\"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class=\"nav-profile-text d-flex flex-column\">
                  <span class=\"font-weight-bold mb-2\">David Grey. H</span>
                  <span class=\"text-secondary text-small\">Project Manager</span>
                </div>
                <i class=\"mdi mdi-bookmark-check text-success nav-profile-badge\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"index.html\">
                <span class=\"menu-title\">Dashboard</span>
                <i class=\"mdi mdi-home menu-icon\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
                <span class=\"menu-title\">Basic UI Elements</span>
                <i class=\"menu-arrow\"></i>
                <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
              </a>
              <div class=\"collapse\" id=\"ui-basic\">
                <ul class=\"nav flex-column sub-menu\">
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/buttons.html\">Buttons</a></li>
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/typography.html\">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"pages/icons/mdi.html\">
                <span class=\"menu-title\">Icons</span>
                <i class=\"mdi mdi-contacts menu-icon\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"pages/forms/basic_elements.html\">
                <span class=\"menu-title\">Forms</span>
                <i class=\"mdi mdi-format-list-bulleted menu-icon\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"pages/charts/chartjs.html\">
                <span class=\"menu-title\">Charts</span>
                <i class=\"mdi mdi-chart-bar menu-icon\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"pages/tables/basic-table.html\">
                <span class=\"menu-title\">Tables</span>
                <i class=\"mdi mdi-table-large menu-icon\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#general-pages\" aria-expanded=\"false\" aria-controls=\"general-pages\">
                <span class=\"menu-title\">Sample Pages</span>
                <i class=\"menu-arrow\"></i>
                <i class=\"mdi mdi-medical-bag menu-icon\"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class=\"main-panel\">
          <div class=\"content-wrapper\">
            <div class=\"page-header\">
              <h3 class=\"page-title\">
                <span class=\"page-title-icon bg-gradient-primary text-white me-2\">
                  <i class=\"mdi mdi-home\"></i>
                </span> Dashboard
              </h3>
              <nav aria-label=\"breadcrumb\">
                <ul class=\"breadcrumb\">
                  <li class=\"breadcrumb-item active\" aria-current=\"page\">
                    <span></span>Oveview <i class=\"mdi mdi-alert-circle-outline icon-sm text-primary align-middle\"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class=\"row\">
              <div class=\"col-md-4 stretch-card grid-margin\">
                <div class=\"card bg-gradient-danger card-img-holder text-white\">
                  <div class=\"card-body\">
                    <h4 class=\"font-weight-normal mb-3\">My Posts <i class=\"mdi mdi-chart-line mdi-24px float-right\"></i>
                    </h4>
                    <h2 class=\"mb-5\">-</h2>
                  </div>
                </div>
              </div>
              <div class=\"col-md-4 stretch-card grid-margin\">
                <div class=\"card bg-gradient-info card-img-holder text-white\">
                  <div class=\"card-body\">
                    <h4 class=\"font-weight-normal mb-3\">Teammates <i class=\"mdi mdi-bookmark-outline mdi-24px float-right\"></i>
                    </h4>
                    <h2 class=\"mb-5\">-</h2>
                  </div>
                </div>
              </div>
              <div class=\"col-md-4 stretch-card grid-margin\">
                <div class=\"card bg-gradient-success card-img-holder text-white\">
                  <div class=\"card-body\">
                    <h4 class=\"font-weight-normal mb-3\">My Agencies <i class=\"mdi mdi-diamond mdi-24px float-right\"></i>
                    </h4>
                    <h2 class=\"mb-5\">-</h2>
                  </div>
                </div>
              </div>
            </div>
            
            
            <div class=\"row\">
              <div class=\"col-md-7 grid-margin stretch-card\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    <h4 class=\"card-title\">My Chat</h4>
                    <div class=\"table-responsive\">
                     {{ drupal_view('who_s_online') }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- <footer class=\"footer\">
            <div class=\"container-fluid d-flex justify-content-between\">
              <span class=\"text-muted d-block text-center text-sm-start d-sm-inline-block\">Copyright © bootstrapdash.com 2021</span>
              <span class=\"float-none float-sm-end mt-1 mt-sm-0 text-end\"> Free <a href=\"https://www.bootstrapdash.com/bootstrap-admin-template/\" target=\"_blank\">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer> -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
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
    <!-- End custom js for this page -->
  </body>
</html>", "themes/model/templates/pages/page--user.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/model/templates/pages/page--user.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 9);
        static $functions = array("active_theme_path" => 9, "drupal_block" => 39, "drupal_view" => 248);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['active_theme_path', 'drupal_block', 'drupal_view']
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
