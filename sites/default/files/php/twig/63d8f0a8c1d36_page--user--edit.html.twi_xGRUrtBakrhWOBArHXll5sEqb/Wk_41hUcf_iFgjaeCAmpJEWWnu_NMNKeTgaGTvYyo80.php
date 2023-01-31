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

/* themes/model/templates/pages/page--user--edit.html.twig */
class __TwigTemplate_dcee3ffeec42d2e0cf9235c37745ff4a04909de0a00dce3f0419585187565f6b extends \Twig\Template
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
          </div>
          <ul class=\"navbar-nav navbar-nav-right\">
            <li class=\"nav-item nav-profile dropdown\">
              <a class=\"nav-link dropdown-toggle\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <div class=\"nav-profile-img\">
                  <img src=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_photo"] ?? null), 39, $this->source), "html", null, true);
        echo "\" alt=\"image\">
                  <span class=\"availability-status online\"></span>
                </div>
                <div class=\"nav-profile-text\">
                  <p class=\"mb-1 text-black\">";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 43), "value", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "</p>
                </div>
              </a>
              <div class=\"dropdown-menu navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                <a class=\"dropdown-item\" href=\"";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 47, $this->source), "html", null, true);
        echo "user\">
                  <i class=\"mdi mdi-user me-2 text-success\"></i> My Profile </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 50, $this->source), "html", null, true);
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
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_photo"] ?? null), 123, $this->source), "html", null, true);
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
                <span class=\"menu-title\">Manage Account</span>
                <i class=\"menu-arrow\"></i>
                <i class=\"mdi mdi-user menu-icon\"></i>
              </a>
              <div class=\"collapse\" id=\"ui-basic\">
                <ul class=\"nav flex-column sub-menu\">
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 148, $this->source), "html", null, true);
        echo "user\">View Profile</a></li>
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 149
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 149, $this->source), "html", null, true);
        echo "user/edit\">Edit Profile</a></li>
                </ul>
              </div>
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
                    <span></span>Edit Profile <i class=\"mdi mdi-alert-circle-outline icon-sm text-primary align-middle\"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class=\"row\">
              
            </div>
            
            
            <div class=\"row\">
              <div class=\"col-md-12 grid-margin stretch-card\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    ";
        // line 181
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
        echo "
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
        // line 203
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 203, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/vendors/js/vendor.bundle.base.js\"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=\"";
        // line 208
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 208, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/js/off-canvas.js\"></script>
    <script src=\"";
        // line 209
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 209, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/js/hoverable-collapse.js\"></script>
    <script src=\"";
        // line 210
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 210, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/js/misc.js\"></script>
    <!-- End custom js for this page -->
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/model/templates/pages/page--user--edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 210,  307 => 209,  302 => 208,  293 => 203,  268 => 181,  233 => 149,  229 => 148,  201 => 123,  125 => 50,  119 => 47,  112 => 43,  105 => 39,  88 => 27,  82 => 26,  71 => 19,  65 => 17,  54 => 10,  49 => 9,  39 => 1,);
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
          </div>
          <ul class=\"navbar-nav navbar-nav-right\">
            <li class=\"nav-item nav-profile dropdown\">
              <a class=\"nav-link dropdown-toggle\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <div class=\"nav-profile-img\">
                  <img src=\"{{profile_photo}}\" alt=\"image\">
                  <span class=\"availability-status online\"></span>
                </div>
                <div class=\"nav-profile-text\">
                  <p class=\"mb-1 text-black\">{{user.name.value}}</p>
                </div>
              </a>
              <div class=\"dropdown-menu navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                <a class=\"dropdown-item\" href=\"{{base_path}}user\">
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
                <span class=\"menu-title\">Manage Account</span>
                <i class=\"menu-arrow\"></i>
                <i class=\"mdi mdi-user menu-icon\"></i>
              </a>
              <div class=\"collapse\" id=\"ui-basic\">
                <ul class=\"nav flex-column sub-menu\">
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{base_path}}user\">View Profile</a></li>
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{base_path}}user/edit\">Edit Profile</a></li>
                </ul>
              </div>
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
                    <span></span>Edit Profile <i class=\"mdi mdi-alert-circle-outline icon-sm text-primary align-middle\"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class=\"row\">
              
            </div>
            
            
            <div class=\"row\">
              <div class=\"col-md-12 grid-margin stretch-card\">
                <div class=\"card\">
                  <div class=\"card-body\">
                    {{page.content}}
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
</html>", "themes/model/templates/pages/page--user--edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/model/templates/pages/page--user--edit.html.twig");
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
