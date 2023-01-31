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
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 11, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/css/style.css\">
    <!-- End layout styles -->
    <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 13, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/model.jpg\" />
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- partial:partials/_navbar.html -->
      <nav class=\"navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
        <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
          <a class=\"navbar-brand brand-logo\" href=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 20, $this->source), "html", null, true);
        echo "\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 20, $this->source), "html", null, true);
        echo "themes/model/assets/model.jpg\" alt=\"Rwanda Fashion Model Union\" style=\"max-width: 13%;font-size: medium !important;\" /></a>
          <a class=\"navbar-brand brand-logo-mini\" href=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 21, $this->source), "html", null, true);
        echo "\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 21, $this->source), "html", null, true);
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
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_photo"] ?? null), 33, $this->source), "html", null, true);
        echo "\" alt=\"image\">
                  <span class=\"availability-status online\"></span>
                </div>
                <div class=\"nav-profile-text\">
                  <p class=\"mb-1 text-black\">";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_name"] ?? null), 37, $this->source), "html", null, true);
        echo "</p>
                </div>
              </a>
              <div class=\"dropdown-menu navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                <a class=\"dropdown-item\" href=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 41, $this->source), "html", null, true);
        echo "user\">
                  <i class=\"mdi mdi-user me-2 text-success\"></i> My Profile </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 44, $this->source), "html", null, true);
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
              <a class=\"nav-link\" href=\"";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 99, $this->source), "html", null, true);
        echo "\">
                <i class=\"mdi mdi-home\"></i>Home
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
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_photo"] ?? null), 117, $this->source), "html", null, true);
        echo "\" alt=\"profile\">
                  <span class=\"login-status online\"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class=\"nav-profile-text d-flex flex-column\">
                  <span class=\"font-weight-bold mb-2\">";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_name"] ?? null), 122, $this->source), "html", null, true);
        echo "</span>
                  <!-- <span class=\"text-secondary text-small\">Project Manager</span> -->
                </div>
                <i class=\"mdi mdi-bookmark-check text-success nav-profile-badge\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 129
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 129, $this->source), "html", null, true);
        echo "\">
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
        // line 142
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 142, $this->source), "html", null, true);
        echo "user\">View Profile</a></li>
                  <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 143
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 143, $this->source), "html", null, true);
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
        // line 204
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
        // line 227
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 227, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/vendors/js/vendor.bundle.base.js\"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=\"";
        // line 232
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 232, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/js/off-canvas.js\"></script>
    <script src=\"";
        // line 233
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 233, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/admin-assets/assets/js/hoverable-collapse.js\"></script>
    <script src=\"";
        // line 234
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 234, $this->source), "html", null, true);
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
        return array (  345 => 234,  340 => 233,  335 => 232,  326 => 227,  300 => 204,  236 => 143,  232 => 142,  216 => 129,  206 => 122,  198 => 117,  177 => 99,  119 => 44,  113 => 41,  106 => 37,  99 => 33,  82 => 21,  76 => 20,  65 => 13,  59 => 11,  54 => 10,  49 => 9,  39 => 1,);
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
                  <p class=\"mb-1 text-black\">{{user_name}}</p>
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
              <a class=\"nav-link\" href=\"{{base_path}}\">
                <i class=\"mdi mdi-home\"></i>Home
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
                  <span class=\"font-weight-bold mb-2\">{{user_name}}</span>
                  <!-- <span class=\"text-secondary text-small\">Project Manager</span> -->
                </div>
                <i class=\"mdi mdi-bookmark-check text-success nav-profile-badge\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{base_path}}\">
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
        static $functions = array("active_theme_path" => 9, "drupal_view" => 204);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['active_theme_path', 'drupal_view']
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