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

/* region--header.html.twig */
class __TwigTemplate_b6dcbff7c6df3736ccef9e8303440dcbf6b71ba2820de244af91f33f77d7deda extends \Twig\Template
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
      <!-- basic -->
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <!-- mobile metas -->
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
      <!-- site metas -->
      <title>RFMU</title>
      <meta name=\"keywords\" content=\"\">
      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">
      <!-- bootstrap css -->
      <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 16, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/css/bootstrap.min.css\">
      <!-- style css -->
      <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 18, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/css/style.css\">
      <!-- Responsive-->
      <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 20, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/css/responsive.css\">
      <!-- fevicon -->
      <link rel=\"icon\" href=\"";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 22, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/rmodels.jpeg\" type=\"image/gif\" />
      <!-- Scrollbar Custom CSS -->
      <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 24, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/css/jquery.mCustomScrollbar.min.css\">
      <!-- Tweaks for older IEs-->
      <link rel=\"stylesheet\" href=\"https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">
      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css\" media=\"screen\">
      <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
         <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 31, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/css/bootstrap-3.4.1.min.css\">
        <!--  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css\"> -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
  <!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script> -->
        <!--  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css\"> -->
<link rel=\"stylesheet\" href=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 37, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/css/bootstrap-3.3.5.min.css\">
  <script src=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 38, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/js/jQuery-3.6.1.min.js\"></script>
  <script src=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 39, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/js/jQuery-3.4.1.min.js\"></script>
  <style type=\"text/css\">
     #search-block-form>#edit-submit{
      display: none !important;
     }
     input[value=\"Search\"] { 
      display: none !important;
      }
  </style>
   </head>
   <!-- body -->
   <body class=\"main-layout\">
      <!-- loader  -->
      <!-- <div class=\"loader_bg\" style=\"display:none;\">
         <div class=\"loader\"><img src=\"";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 53, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/loading.gif\" alt=\"#\" /></div>
      </div>
 -->      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class=\"header\">
            <div class=\"header_top d_none1\">
               <div class=\"container\">
                  <div class=\"row\">
                     <div class=\"col-md-4\">
                        <ul class=\"conta_icon \" style=\"margin-bottom: 0;\">
                           ";
        // line 65
        if (($context["logged_in"] ?? null)) {
            // line 66
            echo "                           <li class=\"user-detail-wrap dropdown\">
        <a href=\"javascript:void(0);\" class=\"\" data-toggle=\"dropdown\" style=\"
    display: -webkit-box;
\">
            ";
            // line 70
            if ( !twig_test_empty(($context["agency_logo"] ?? null))) {
                // line 71
                echo "              <img class=\"user-img\" style=\"width:35px;height:35px;border-radius: 17px;\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::fileUrlFilter($this->sandbox->ensureToStringAllowed(($context["agency_logo"] ?? null), 71, $this->source)), "html", null, true);
                echo "\" data-no-retina=\"\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_name"] ?? null), 71, $this->source), "html", null, true);
                echo "\"><span class=\"caret\"></span>
            ";
            } else {
                // line 73
                echo "              <img style=\"width:40px;height:35px;\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 73, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
                echo "/images/default-user.png\" alt=\"Default Image\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["loggedin_user_name"] ?? null), 73, $this->source), "html", null, true);
                echo "\"><span class=\"caret\"></span>
            ";
            }
            // line 75
            echo "            
        </a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 78, $this->source), "html", null, true);
            echo "rfmu-user/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "\">My Account</a></li>
            <li><a href=\"";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 79, $this->source), "html", null, true);
            echo "user/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "/edit\">Edit My Profile</a></li>
            <li><a href=\"";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 80, $this->source), "html", null, true);
            echo "user/logout\">Logout</a></li>
        </ul>
 </li>
  ";
        } else {
            // line 84
            echo "    <li>
                              <button type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\"  class=\"order\" style=\"float: left;\">Join Now</button>
                           </li>
  ";
        }
        // line 88
        echo "                           
                        </ul>
                     </div>
                     <div class=\"col-md-4\">
                         <ul class=\"header-menu\">
                           <!-- <li> <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                              </a>
                           </li>
                           <li> <a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                           <li> <a href=\"#\"> <i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                           <li> <a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                              </a>
                           </li> -->
                           <li><a href=\"";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 101, $this->source), "html", null, true);
        echo "about-us\">About Us</a></li>
                           <li><a href=\"";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 102, $this->source), "html", null, true);
        echo "contact-us\">Contact Us</a></li>
                           <li><a href=\"";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 103, $this->source), "html", null, true);
        echo "faqs\">FAQs</a></li>
                           <li><a href=\"";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 104, $this->source), "html", null, true);
        echo "our-partners\">Our Partners</a></li>
                        </ul>
                     </div>
                     <div class=\"col-md-4\">
                        <div class=\"se_fonr1\">
                           <form action=\"#\" >
                              <div class=\"select-box\">
                                 <label for=\"select-box1\" class=\"label select-box1\"><span class=\"label-desc\">English</span> </label>
                                 <select id=\"select-box1\" class=\"select\">
                                    <option value=\"Choice 1\">English</option>
                                    <!-- <option value=\"Choice 1\">Falkla</option>
                                    <option value=\"Choice 2\">Germa</option>
                                    <option value=\"Choice 3\">Neverl</option> -->
                                 </select>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"header_midil\">
               <div class=\"container\">
                  <div class=\"row d_flex\">
                     <div class=\"col-md-4\">
                        <!-- <ul class=\"conta_icon d_none1\">
                           <li><a href=\"#\"><img src=\"images/email.png\" alt=\"#\"/> demo@gmail.com</a> </li> 
                        </ul> -->
                     </div>
                     <div class=\"col-md-4\">
                        <a class=\"logo\" href=\"";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 134, $this->source), "html", null, true);
        echo "\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 134, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/rmodels.jpeg\" alt=\"#\" width=\"47\" />
                           <li class=\"d_none1\">Rwanda Fashion Models Union </li>
                        </a>
                     </div>
                     <div class=\"col-md-4\">
                        <!-- <ul class=\"right_icon d_none1\">
                           <a href=\"#\" class=\"order\">Join Now</a> 
                        </ul> -->
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"header_bottom\">
               <div class=\"container\">
                  <div class=\"row\">
                     <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8\">
                        <nav class=\"navigation navbar navbar-expand-md navbar-dark \">

";
        // line 152
        if (($context["logged_in"] ?? null)) {
            // line 153
            echo "  ";
        } else {
            // line 154
            echo "    <div class=\"user-detail-wrap dropdown login\">
     <a type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"join-logout\">Join</a>
    </div>
  ";
        }
        // line 158
        echo "
                           <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample04\" aria-controls=\"navbarsExample04\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                           <span class=\"navbar-toggler-icon\"></span>
                           </button>
                           <div class=\"collapse navbar-collapse\" id=\"navbarsExample04\">
                              <ul class=\"navbar-nav mr-auto\">
                                 ";
        // line 164
        if (($context["logged_in"] ?? null)) {
            // line 165
            echo "    <li class=\"user-detail-wrap dropdown user-menu-dropdown\">
        <a href=\"javascript:void(0);\" class=\"\" data-toggle=\"dropdown\" style=\"
    display: -webkit-box;
\">
            ";
            // line 169
            if ( !twig_test_empty(($context["agency_logo"] ?? null))) {
                // line 170
                echo "              <img class=\"user-img\" style=\"width:35px;height:35px;border-radius: 17px;\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::fileUrlFilter($this->sandbox->ensureToStringAllowed(($context["agency_logo"] ?? null), 170, $this->source)), "html", null, true);
                echo "\" data-no-retina=\"\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_name"] ?? null), 170, $this->source), "html", null, true);
                echo "\"><span class=\"caret\"></span>
            ";
            } else {
                // line 172
                echo "              <img style=\"width:40px;height:35px;\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 172, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
                echo "/images/default-user.png\" alt=\"Default Image\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["loggedin_user_name"] ?? null), 172, $this->source), "html", null, true);
                echo "\"><span class=\"caret\"></span>
            ";
            }
            // line 174
            echo "            
        </a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"";
            // line 177
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 177, $this->source), "html", null, true);
            echo "rfmu-user/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
            echo "\" class=\"text-white\">My Account</a></li>
            <li><a href=\"";
            // line 178
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 178, $this->source), "html", null, true);
            echo "user/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
            echo "/edit\" class=\"text-white\">Edit My Profile</a></li>
            <li><a href=\"";
            // line 179
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 179, $this->source), "html", null, true);
            echo "user/logout\" class=\"text-white\">Logout</a></li>
        </ul>
 </li>
  ";
        }
        // line 183
        echo "                                 <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"";
        // line 184
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 184, $this->source), "html", null, true);
        echo "\">Home</a>
                                 </li>
                                 <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 187
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 187, $this->source), "html", null, true);
        echo "blog-landing-page\">Blog</a>
                                 </li>
                                 <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 190
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 190, $this->source), "html", null, true);
        echo "our-agencies\">Agencies</a>
                                 </li>
                                 <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 193
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 193, $this->source), "html", null, true);
        echo "people\">People</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class=\"col-md-4\">
                        <div class=\"search\">
                           ";
        // line 201
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("search_form_block"), "html", null, true);
        echo "
                          <!--  <form action=\"/action_page.php\">
                              <input class=\"form_sea\" type=\"text\" placeholder=\"Search\" name=\"search\">
                              <button type=\"submit\" class=\"seach_icon\"><i class=\"fa fa-search\"></i></button>
                           </form> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>

 
      <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        </div>
        <div class=\"modal-body\">
          <a href=\"";
        // line 225
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 225, $this->source), "html", null, true);
        echo "user/login\"><p class=\"text-center login-link\">I already have an account. Login</p></a>
         <a href=\"";
        // line 226
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 226, $this->source), "html", null, true);
        echo "register-agency\"> <p class=\"text-center register-link\">Create Agency Account</p></a>

         <a href=\"";
        // line 228
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 228, $this->source), "html", null, true);
        echo "register-model\"><p class=\"text-center register-link\">I'm a Model. Create Model Account</p></a>

         <a href=\"";
        // line 230
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 230, $this->source), "html", null, true);
        echo "register-people\"><p class=\"text-center register-link\">I'm not a Model, but I want to be a member of RFMU Community( For Photographers, Directors, Designers, and people of other profesions ). Create Member Account</p></a>

        </div>
      </div>
      
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "region--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 230,  424 => 228,  419 => 226,  415 => 225,  388 => 201,  377 => 193,  371 => 190,  365 => 187,  359 => 184,  356 => 183,  349 => 179,  343 => 178,  337 => 177,  332 => 174,  323 => 172,  315 => 170,  313 => 169,  307 => 165,  305 => 164,  297 => 158,  291 => 154,  288 => 153,  286 => 152,  262 => 134,  229 => 104,  225 => 103,  221 => 102,  217 => 101,  202 => 88,  196 => 84,  189 => 80,  183 => 79,  177 => 78,  172 => 75,  163 => 73,  155 => 71,  153 => 70,  147 => 66,  145 => 65,  129 => 53,  111 => 39,  106 => 38,  101 => 37,  91 => 31,  80 => 24,  74 => 22,  68 => 20,  62 => 18,  56 => 16,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
   <head>
      <!-- basic -->
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <!-- mobile metas -->
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
      <!-- site metas -->
      <title>RFMU</title>
      <meta name=\"keywords\" content=\"\">
      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">
      <!-- bootstrap css -->
      <link rel=\"stylesheet\" href=\"{{base_path}}{{active_theme_path()}}/css/bootstrap.min.css\">
      <!-- style css -->
      <link rel=\"stylesheet\" href=\"{{base_path}}{{active_theme_path()}}/css/style.css\">
      <!-- Responsive-->
      <link rel=\"stylesheet\" href=\"{{base_path}}{{active_theme_path()}}/css/responsive.css\">
      <!-- fevicon -->
      <link rel=\"icon\" href=\"{{base_path}}{{active_theme_path()}}/images/rmodels.jpeg\" type=\"image/gif\" />
      <!-- Scrollbar Custom CSS -->
      <link rel=\"stylesheet\" href=\"{{base_path}}{{active_theme_path()}}/css/jquery.mCustomScrollbar.min.css\">
      <!-- Tweaks for older IEs-->
      <link rel=\"stylesheet\" href=\"https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">
      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css\" media=\"screen\">
      <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
         <link rel=\"stylesheet\" href=\"{{base_path}}{{active_theme_path()}}/css/bootstrap-3.4.1.min.css\">
        <!--  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css\"> -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
  <!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script> -->
        <!--  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css\"> -->
<link rel=\"stylesheet\" href=\"{{base_path}}{{active_theme_path()}}/css/bootstrap-3.3.5.min.css\">
  <script src=\"{{base_path}}{{active_theme_path()}}/js/jQuery-3.6.1.min.js\"></script>
  <script src=\"{{base_path}}{{active_theme_path()}}/js/jQuery-3.4.1.min.js\"></script>
  <style type=\"text/css\">
     #search-block-form>#edit-submit{
      display: none !important;
     }
     input[value=\"Search\"] { 
      display: none !important;
      }
  </style>
   </head>
   <!-- body -->
   <body class=\"main-layout\">
      <!-- loader  -->
      <!-- <div class=\"loader_bg\" style=\"display:none;\">
         <div class=\"loader\"><img src=\"{{base_path}}{{active_theme_path()}}/images/loading.gif\" alt=\"#\" /></div>
      </div>
 -->      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class=\"header\">
            <div class=\"header_top d_none1\">
               <div class=\"container\">
                  <div class=\"row\">
                     <div class=\"col-md-4\">
                        <ul class=\"conta_icon \" style=\"margin-bottom: 0;\">
                           {% if logged_in %}
                           <li class=\"user-detail-wrap dropdown\">
        <a href=\"javascript:void(0);\" class=\"\" data-toggle=\"dropdown\" style=\"
    display: -webkit-box;
\">
            {% if agency_logo is not empty %}
              <img class=\"user-img\" style=\"width:35px;height:35px;border-radius: 17px;\" src=\"{{ agency_logo | file_url }}\" data-no-retina=\"\" title=\"{{user_name}}\"><span class=\"caret\"></span>
            {% else %}
              <img style=\"width:40px;height:35px;\" src=\"{{ base_path }}{{ active_theme_path() }}/images/default-user.png\" alt=\"Default Image\" title=\"{{loggedin_user_name}}\"><span class=\"caret\"></span>
            {% endif %}
            
        </a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"{{ base_path }}rfmu-user/{{user.id}}\">My Account</a></li>
            <li><a href=\"{{ base_path }}user/{{user.id}}/edit\">Edit My Profile</a></li>
            <li><a href=\"{{ base_path }}user/logout\">Logout</a></li>
        </ul>
 </li>
  {% else %}
    <li>
                              <button type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\"  class=\"order\" style=\"float: left;\">Join Now</button>
                           </li>
  {% endif %}
                           
                        </ul>
                     </div>
                     <div class=\"col-md-4\">
                         <ul class=\"header-menu\">
                           <!-- <li> <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                              </a>
                           </li>
                           <li> <a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                           <li> <a href=\"#\"> <i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                           <li> <a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                              </a>
                           </li> -->
                           <li><a href=\"{{base_path}}about-us\">About Us</a></li>
                           <li><a href=\"{{base_path}}contact-us\">Contact Us</a></li>
                           <li><a href=\"{{base_path}}faqs\">FAQs</a></li>
                           <li><a href=\"{{base_path}}our-partners\">Our Partners</a></li>
                        </ul>
                     </div>
                     <div class=\"col-md-4\">
                        <div class=\"se_fonr1\">
                           <form action=\"#\" >
                              <div class=\"select-box\">
                                 <label for=\"select-box1\" class=\"label select-box1\"><span class=\"label-desc\">English</span> </label>
                                 <select id=\"select-box1\" class=\"select\">
                                    <option value=\"Choice 1\">English</option>
                                    <!-- <option value=\"Choice 1\">Falkla</option>
                                    <option value=\"Choice 2\">Germa</option>
                                    <option value=\"Choice 3\">Neverl</option> -->
                                 </select>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"header_midil\">
               <div class=\"container\">
                  <div class=\"row d_flex\">
                     <div class=\"col-md-4\">
                        <!-- <ul class=\"conta_icon d_none1\">
                           <li><a href=\"#\"><img src=\"images/email.png\" alt=\"#\"/> demo@gmail.com</a> </li> 
                        </ul> -->
                     </div>
                     <div class=\"col-md-4\">
                        <a class=\"logo\" href=\"{{base_path}}\"><img src=\"{{base_path}}{{active_theme_path()}}/images/rmodels.jpeg\" alt=\"#\" width=\"47\" />
                           <li class=\"d_none1\">Rwanda Fashion Models Union </li>
                        </a>
                     </div>
                     <div class=\"col-md-4\">
                        <!-- <ul class=\"right_icon d_none1\">
                           <a href=\"#\" class=\"order\">Join Now</a> 
                        </ul> -->
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"header_bottom\">
               <div class=\"container\">
                  <div class=\"row\">
                     <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8\">
                        <nav class=\"navigation navbar navbar-expand-md navbar-dark \">

{% if logged_in %}
  {% else %}
    <div class=\"user-detail-wrap dropdown login\">
     <a type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"join-logout\">Join</a>
    </div>
  {% endif %}

                           <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample04\" aria-controls=\"navbarsExample04\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                           <span class=\"navbar-toggler-icon\"></span>
                           </button>
                           <div class=\"collapse navbar-collapse\" id=\"navbarsExample04\">
                              <ul class=\"navbar-nav mr-auto\">
                                 {% if logged_in %}
    <li class=\"user-detail-wrap dropdown user-menu-dropdown\">
        <a href=\"javascript:void(0);\" class=\"\" data-toggle=\"dropdown\" style=\"
    display: -webkit-box;
\">
            {% if agency_logo is not empty %}
              <img class=\"user-img\" style=\"width:35px;height:35px;border-radius: 17px;\" src=\"{{ agency_logo | file_url }}\" data-no-retina=\"\" title=\"{{user_name}}\"><span class=\"caret\"></span>
            {% else %}
              <img style=\"width:40px;height:35px;\" src=\"{{ base_path }}{{ active_theme_path() }}/images/default-user.png\" alt=\"Default Image\" title=\"{{loggedin_user_name}}\"><span class=\"caret\"></span>
            {% endif %}
            
        </a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"{{ base_path }}rfmu-user/{{user.id}}\" class=\"text-white\">My Account</a></li>
            <li><a href=\"{{ base_path }}user/{{user.id}}/edit\" class=\"text-white\">Edit My Profile</a></li>
            <li><a href=\"{{ base_path }}user/logout\" class=\"text-white\">Logout</a></li>
        </ul>
 </li>
  {% endif %}
                                 <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"{{base_path}}\">Home</a>
                                 </li>
                                 <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{base_path}}blog-landing-page\">Blog</a>
                                 </li>
                                 <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{base_path}}our-agencies\">Agencies</a>
                                 </li>
                                 <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{base_path}}people\">People</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class=\"col-md-4\">
                        <div class=\"search\">
                           {{ drupal_block('search_form_block') }}
                          <!--  <form action=\"/action_page.php\">
                              <input class=\"form_sea\" type=\"text\" placeholder=\"Search\" name=\"search\">
                              <button type=\"submit\" class=\"seach_icon\"><i class=\"fa fa-search\"></i></button>
                           </form> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>

 
      <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        </div>
        <div class=\"modal-body\">
          <a href=\"{{base_path}}user/login\"><p class=\"text-center login-link\">I already have an account. Login</p></a>
         <a href=\"{{base_path}}register-agency\"> <p class=\"text-center register-link\">Create Agency Account</p></a>

         <a href=\"{{base_path}}register-model\"><p class=\"text-center register-link\">I'm a Model. Create Model Account</p></a>

         <a href=\"{{base_path}}register-people\"><p class=\"text-center register-link\">I'm not a Model, but I want to be a member of RFMU Community( For Photographers, Directors, Designers, and people of other profesions ). Create Member Account</p></a>

        </div>
      </div>
      
    </div>
  </div>", "region--header.html.twig", "themes/rmodels/templates/regions/region--header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 65);
        static $filters = array("escape" => 16, "file_url" => 71);
        static $functions = array("active_theme_path" => 16, "drupal_block" => 201);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'file_url'],
                ['active_theme_path', 'drupal_block']
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
