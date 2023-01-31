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
class __TwigTemplate_7bc8d740b2caa7d354390095cd9897c18181aacee774483f9ec309e2fb59bc69 extends \Twig\Template
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
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset=\"utf-8\">
  <title>Rwanda Fashion Models Union</title>

  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

  <meta content=\"Metronic Shop UI description\" name=\"description\">
  <meta content=\"Metronic Shop UI keywords\" name=\"keywords\">
  <meta content=\"keenthemes\" name=\"author\">

  <meta property=\"og:site_name\" content=\"-CUSTOMER VALUE-\">
  <meta property=\"og:title\" content=\"-CUSTOMER VALUE-\">
  <meta property=\"og:description\" content=\"-CUSTOMER VALUE-\">
  <meta property=\"og:type\" content=\"website\">
  <meta property=\"og:image\" content=\"-CUSTOMER VALUE-\"><!-- link to image for socio -->
  <meta property=\"og:url\" content=\"-CUSTOMER VALUE-\">

  <link rel=\"shortcut icon\" href=\"assets/model.jpg\">

  <!-- Fonts START -->
  <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all\" rel=\"stylesheet\" type=\"text/css\">
  <!-- Fonts END -->

  <!-- Global styles START -->          
<!--   <link href=\"assets/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
  <link href=\"assets/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\"> -->
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
 <!--  <link href=\"assets/pages/css/animate.css\" rel=\"stylesheet\">
  <link href=\"assets/plugins/fancybox/source/jquery.fancybox.css\" rel=\"stylesheet\">
  <link href=\"assets/plugins/owl.carousel/assets/owl.carousel.css\" rel=\"stylesheet\"> -->
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
<!--   <link href=\"assets/pages/css/components.css\" rel=\"stylesheet\">
  <link href=\"assets/pages/css/slider.css\" rel=\"stylesheet\">
  <link href=\"assets/corporate/css/style.css\" rel=\"stylesheet\">
  <link href=\"assets/pages/css/portfolio.css\" rel=\"stylesheet\">
  <link href=\"assets/corporate/css/style-responsive.css\" rel=\"stylesheet\">
  <link href=\"assets/corporate/css/themes/green.css\" rel=\"stylesheet\" id=\"style-color\">
  <link href=\"assets/corporate/css/custom.css\" rel=\"stylesheet\"> -->
  <!-- Theme styles END -->
      <script src=\"";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 51, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/plugins/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 52, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/plugins/jquery-migrate.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 53, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>      
    <script src=\"";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 54, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/corporate/scripts/back-to-top.js\" type=\"text/javascript\"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src=\"";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 58, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/plugins/fancybox/source/jquery.fancybox.pack.js\" type=\"text/javascript\"></script><!-- pop up -->
    <script src=\"";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 59, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/plugins/owl.carousel/owl.carousel.min.js\" type=\"text/javascript\"></script><!-- slider for products -->

    <script src=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 61, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/corporate/scripts/layout.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 62, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/pages/scripts/bs-carousel.js\" type=\"text/javascript\"></script>

    <!-- END PAGE LEVEL JAVASCRIPTS -->
  <style type=\"text/css\">
    .featured-list{
      text-align: center;
    }
    .featured-list>p{
      margin-bottom:1px !important;
    }
    .container {
    width: 90% !important;
    max-width: 90% !important;
    }
    #search-block-form{
      position: relative;
      top: 9px;
      margin-left: 20px;
    }
  </style>
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class=\"corporate\">


    <!-- BEGIN TOP BAR -->
    <!-- <div class=\"pre-header\">
        <div class=\"container\">
            <div class=\"row\"> -->
                <!-- BEGIN TOP BAR LEFT PART -->
               <!--  <div class=\"col-md-6 col-sm-6 additional-shop-info\">
                    <ul class=\"list-unstyled list-inline\">
                        <li><i class=\"fa fa-phone\"></i><span>+250780256609
</span></li>
                        <li><i class=\"fa fa-envelope-o\"></i><span>rwandafashionmodelsunion@gmail.com</span></li>
                    </ul>
                </div> -->
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
              <!--   <div class=\"col-md-6 col-sm-6 additional-nav\">
                    <ul class=\"list-unstyled list-inline pull-right\">
                        <li><a href=\"";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 105, $this->source), "html", null, true);
        echo "user/login\">Log In</a></li>
                        <li><a href=\"";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 106, $this->source), "html", null, true);
        echo "register-agency\">Create Agency Account</a></li>
                        <li><a href=\"";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 107, $this->source), "html", null, true);
        echo "model/register\">Create Model Account</a></li>
                    </ul>
                </div> -->
                <!-- END TOP BAR MENU -->
    <!--         </div>
        </div>        
    </div> -->
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class=\"header\">
      <div class=\"container\">
       <a class=\"site-logo\" href=\"";
        // line 118
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 118, $this->source), "html", null, true);
        echo "\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 118, $this->source), "html", null, true);
        echo "/themes/model/assets/model.jpg\" alt=\"Rwanda Fashion Model Union\" style=\"max-width: 32%;font-size: medium !important;\">
          <!-- <b style=\"
    font-weight: 100;
    color: #cca40c;
\">Rwanda Fashion Models Union</b> -->
        </a>
         ";
        // line 124
        if (($context["logged_in"] ?? null)) {
            // line 125
            echo "       <!--                     <li class=\"user-detail-wrap dropdown\">
        <a href=\"javascript:void(0);\" class=\"\" data-toggle=\"dropdown\" style=\"
    display: -webkit-box;
\">
            ";
            // line 129
            if ( !twig_test_empty(($context["agency_logo"] ?? null))) {
                // line 130
                echo "              <img class=\"user-img\" style=\"width:35px;height:35px;border-radius: 17px;\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::fileUrlFilter($this->sandbox->ensureToStringAllowed(($context["agency_logo"] ?? null), 130, $this->source)), "html", null, true);
                echo "\" data-no-retina=\"\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_name"] ?? null), 130, $this->source), "html", null, true);
                echo "\"><span class=\"caret\"></span>
            ";
            } else {
                // line 132
                echo "              <img style=\"width:40px;height:35px;\" src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 132, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
                echo "/images/default-user.png\" alt=\"Default Image\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["loggedin_user_name"] ?? null), 132, $this->source), "html", null, true);
                echo "\"><span class=\"caret\"></span>
            ";
            }
            // line 134
            echo "            
        </a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"";
            // line 137
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 137, $this->source), "html", null, true);
            echo "rfmu-user/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo "\">My Account</a></li>
            <li><a href=\"";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 138, $this->source), "html", null, true);
            echo "user/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "/edit\">Edit My Profile</a></li>
            <li><a href=\"";
            // line 139
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 139, $this->source), "html", null, true);
            echo "user/logout\">Logout</a></li>
        </ul>
 </li> -->
  ";
        }
        // line 142
        echo " 

        <a href=\"javascript:void(0);\" class=\"mobi-toggler\"><i class=\"fa fa-bars\"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class=\"header-navigation pull-right font-transform-inherit\">
          <ul>
            <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" href=\"";
        // line 150
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 150, $this->source), "html", null, true);
        echo "\">
                Home 
                
              </a>
            </li>

            <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" href=\"";
        // line 157
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 157, $this->source), "html", null, true);
        echo "our-agencies\">
                Agencies 
                
              </a>
                
              <ul class=\"dropdown-menu\">          
              </ul>
            </li>
            <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"javascript:;\">
                People
                
              </a>
                
              <ul class=\"dropdown-menu\">
                <li class=\"dropdown-submenu\">
                  <a href=\"";
        // line 173
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 173, $this->source), "html", null, true);
        echo "people/all-models\">Models </a>
                </li>
                <li><a href=\"";
        // line 175
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 175, $this->source), "html", null, true);
        echo "people\">Photographers</a></li>
                <li><a href=\"";
        // line 176
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 176, $this->source), "html", null, true);
        echo "people\">Fashion Editors/Stylist</a></li>
                <li><a href=\"";
        // line 177
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 177, $this->source), "html", null, true);
        echo "people\">Makeup</a></li>
                <li><a href=\"";
        // line 178
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 178, $this->source), "html", null, true);
        echo "people\">Hair Stylists</a></li>
                <li><a href=\"";
        // line 179
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 179, $this->source), "html", null, true);
        echo "people\">Designers</a></li>
              </ul>
            </li>
            <!-- <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" href=\"javascript:;\">
                Vlog 
              </a>
            </li> -->
            <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"javascript:;\">
                Blog
              </a>
                
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 193
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 193, $this->source), "html", null, true);
        echo "blog-landing-page\">Latest News</a></li>
                <li><a href=\"";
        // line 194
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 194, $this->source), "html", null, true);
        echo "blog-landing-page\">Upcoming Events</a></li>
              </ul>
            </li>
            <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" href=\"";
        // line 198
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 198, $this->source), "html", null, true);
        echo "about-us\">
                About RFMU 
              </a>
            </li>

             <li class=\"dropdown dropdown-megamenu\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"";
        // line 204
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 204, $this->source), "html", null, true);
        echo "contact-us\">
                Contact Us
                
              </a>
            </li>  

  ";
        // line 210
        if (($context["logged_in"] ?? null)) {
            // line 211
            echo "                <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" href=\"";
            // line 212
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 212, $this->source), "html", null, true);
            echo "user\">
                <i class=\"fa fa-user\"></i>My Account 
              </a>
            </li>

             <li class=\"dropdown dropdown-megamenu\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"";
            // line 218
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 218, $this->source), "html", null, true);
            echo "user/logout\">
                <i class=\"fa fa-key\"></i>Logout
                
              </a>
            </li>             
  ";
        } else {
            // line 224
            echo "    <li class=\"dropdown dropdown-megamenu\">
                              <a type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\"  class=\"order dropdown-toggle btn btn-primary\" style=\"float: left;\">Join</a>
                           </li>
  ";
        }
        // line 227
        echo " 

            <!-- BEGIN TOP SEARCH -->
            <!-- <li class=\"menu-search\">
              <span class=\"sep\"></span>
              <i class=\"fa fa-search search-btn\"></i>
              <div class=\"search-box\">
                <form action=\"#\">
                  <div class=\"input-group\">
                    <input type=\"text\" placeholder=\"Search\" class=\"form-control\">
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-primary\" type=\"submit\">Search</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li> -->
        <!-- BEGIN TOP SEARCH -->
            <li class=\"menu-search\">
              <span class=\"sep\"></span>
              <i class=\"fa fa-search search-btn\"></i>
              <div class=\"search-box\">
                ";
        // line 249
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("search_form_block"), "html", null, true);
        echo "
              </div> 
            </li>
        <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

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
        // line 270
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 270, $this->source), "html", null, true);
        echo "user/login\"><p class=\"text-center login-link\">I already have an account. Login</p></a>
         <a href=\"";
        // line 271
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 271, $this->source), "html", null, true);
        echo "register-agency\"> <p class=\"text-center register-link\">Create Agency Account</p></a>

         <a href=\"";
        // line 273
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 273, $this->source), "html", null, true);
        echo "register-model\"><p class=\"text-center register-link\">I'm a Model. Create Model Account</p></a>

         <a href=\"";
        // line 275
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 275, $this->source), "html", null, true);
        echo "register-people\"><p class=\"text-center register-link\">I'm not a Model, but I want to be a member of RFMU Community( For Photographers, Directors, Designers, and people of other profesions ). Create Member Account</p></a>

        </div>
      </div>
      
    </div>
  </div>
    ";
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
        return array (  458 => 275,  453 => 273,  448 => 271,  444 => 270,  420 => 249,  396 => 227,  390 => 224,  381 => 218,  372 => 212,  369 => 211,  367 => 210,  358 => 204,  349 => 198,  342 => 194,  338 => 193,  321 => 179,  317 => 178,  313 => 177,  309 => 176,  305 => 175,  300 => 173,  281 => 157,  271 => 150,  261 => 142,  254 => 139,  248 => 138,  242 => 137,  237 => 134,  228 => 132,  220 => 130,  218 => 129,  212 => 125,  210 => 124,  199 => 118,  185 => 107,  181 => 106,  177 => 105,  130 => 62,  125 => 61,  119 => 59,  114 => 58,  106 => 54,  101 => 53,  96 => 52,  91 => 51,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset=\"utf-8\">
  <title>Rwanda Fashion Models Union</title>

  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

  <meta content=\"Metronic Shop UI description\" name=\"description\">
  <meta content=\"Metronic Shop UI keywords\" name=\"keywords\">
  <meta content=\"keenthemes\" name=\"author\">

  <meta property=\"og:site_name\" content=\"-CUSTOMER VALUE-\">
  <meta property=\"og:title\" content=\"-CUSTOMER VALUE-\">
  <meta property=\"og:description\" content=\"-CUSTOMER VALUE-\">
  <meta property=\"og:type\" content=\"website\">
  <meta property=\"og:image\" content=\"-CUSTOMER VALUE-\"><!-- link to image for socio -->
  <meta property=\"og:url\" content=\"-CUSTOMER VALUE-\">

  <link rel=\"shortcut icon\" href=\"assets/model.jpg\">

  <!-- Fonts START -->
  <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all\" rel=\"stylesheet\" type=\"text/css\">
  <!-- Fonts END -->

  <!-- Global styles START -->          
<!--   <link href=\"assets/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
  <link href=\"assets/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\"> -->
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
 <!--  <link href=\"assets/pages/css/animate.css\" rel=\"stylesheet\">
  <link href=\"assets/plugins/fancybox/source/jquery.fancybox.css\" rel=\"stylesheet\">
  <link href=\"assets/plugins/owl.carousel/assets/owl.carousel.css\" rel=\"stylesheet\"> -->
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
<!--   <link href=\"assets/pages/css/components.css\" rel=\"stylesheet\">
  <link href=\"assets/pages/css/slider.css\" rel=\"stylesheet\">
  <link href=\"assets/corporate/css/style.css\" rel=\"stylesheet\">
  <link href=\"assets/pages/css/portfolio.css\" rel=\"stylesheet\">
  <link href=\"assets/corporate/css/style-responsive.css\" rel=\"stylesheet\">
  <link href=\"assets/corporate/css/themes/green.css\" rel=\"stylesheet\" id=\"style-color\">
  <link href=\"assets/corporate/css/custom.css\" rel=\"stylesheet\"> -->
  <!-- Theme styles END -->
      <script src=\"{{base_path}}{{ active_theme_path() }}/assets/plugins/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"{{base_path}}{{ active_theme_path() }}/assets/plugins/jquery-migrate.min.js\" type=\"text/javascript\"></script>
    <script src=\"{{base_path}}{{ active_theme_path() }}/assets/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>      
    <script src=\"{{base_path}}{{ active_theme_path() }}/assets/corporate/scripts/back-to-top.js\" type=\"text/javascript\"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src=\"{{base_path}}{{ active_theme_path() }}/assets/plugins/fancybox/source/jquery.fancybox.pack.js\" type=\"text/javascript\"></script><!-- pop up -->
    <script src=\"{{base_path}}{{ active_theme_path() }}/assets/plugins/owl.carousel/owl.carousel.min.js\" type=\"text/javascript\"></script><!-- slider for products -->

    <script src=\"{{base_path}}{{ active_theme_path() }}/assets/corporate/scripts/layout.js\" type=\"text/javascript\"></script>
    <script src=\"{{base_path}}{{ active_theme_path() }}/assets/pages/scripts/bs-carousel.js\" type=\"text/javascript\"></script>

    <!-- END PAGE LEVEL JAVASCRIPTS -->
  <style type=\"text/css\">
    .featured-list{
      text-align: center;
    }
    .featured-list>p{
      margin-bottom:1px !important;
    }
    .container {
    width: 90% !important;
    max-width: 90% !important;
    }
    #search-block-form{
      position: relative;
      top: 9px;
      margin-left: 20px;
    }
  </style>
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class=\"corporate\">


    <!-- BEGIN TOP BAR -->
    <!-- <div class=\"pre-header\">
        <div class=\"container\">
            <div class=\"row\"> -->
                <!-- BEGIN TOP BAR LEFT PART -->
               <!--  <div class=\"col-md-6 col-sm-6 additional-shop-info\">
                    <ul class=\"list-unstyled list-inline\">
                        <li><i class=\"fa fa-phone\"></i><span>+250780256609
</span></li>
                        <li><i class=\"fa fa-envelope-o\"></i><span>rwandafashionmodelsunion@gmail.com</span></li>
                    </ul>
                </div> -->
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
              <!--   <div class=\"col-md-6 col-sm-6 additional-nav\">
                    <ul class=\"list-unstyled list-inline pull-right\">
                        <li><a href=\"{{base_path}}user/login\">Log In</a></li>
                        <li><a href=\"{{base_path}}register-agency\">Create Agency Account</a></li>
                        <li><a href=\"{{base_path}}model/register\">Create Model Account</a></li>
                    </ul>
                </div> -->
                <!-- END TOP BAR MENU -->
    <!--         </div>
        </div>        
    </div> -->
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class=\"header\">
      <div class=\"container\">
       <a class=\"site-logo\" href=\"{{base_path}}\"><img src=\"{{base_path}}/themes/model/assets/model.jpg\" alt=\"Rwanda Fashion Model Union\" style=\"max-width: 32%;font-size: medium !important;\">
          <!-- <b style=\"
    font-weight: 100;
    color: #cca40c;
\">Rwanda Fashion Models Union</b> -->
        </a>
         {% if logged_in %}
       <!--                     <li class=\"user-detail-wrap dropdown\">
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
 </li> -->
  {% endif %} 

        <a href=\"javascript:void(0);\" class=\"mobi-toggler\"><i class=\"fa fa-bars\"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class=\"header-navigation pull-right font-transform-inherit\">
          <ul>
            <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" href=\"{{base_path}}\">
                Home 
                
              </a>
            </li>

            <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" href=\"{{base_path}}our-agencies\">
                Agencies 
                
              </a>
                
              <ul class=\"dropdown-menu\">          
              </ul>
            </li>
            <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"javascript:;\">
                People
                
              </a>
                
              <ul class=\"dropdown-menu\">
                <li class=\"dropdown-submenu\">
                  <a href=\"{{base_path}}people/all-models\">Models </a>
                </li>
                <li><a href=\"{{base_path}}people\">Photographers</a></li>
                <li><a href=\"{{base_path}}people\">Fashion Editors/Stylist</a></li>
                <li><a href=\"{{base_path}}people\">Makeup</a></li>
                <li><a href=\"{{base_path}}people\">Hair Stylists</a></li>
                <li><a href=\"{{base_path}}people\">Designers</a></li>
              </ul>
            </li>
            <!-- <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" href=\"javascript:;\">
                Vlog 
              </a>
            </li> -->
            <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"javascript:;\">
                Blog
              </a>
                
              <ul class=\"dropdown-menu\">
                <li><a href=\"{{base_path}}blog-landing-page\">Latest News</a></li>
                <li><a href=\"{{base_path}}blog-landing-page\">Upcoming Events</a></li>
              </ul>
            </li>
            <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" href=\"{{base_path}}about-us\">
                About RFMU 
              </a>
            </li>

             <li class=\"dropdown dropdown-megamenu\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"{{base_path}}contact-us\">
                Contact Us
                
              </a>
            </li>  

  {% if logged_in %}
                <li class=\"dropdown\">
              <a class=\"dropdown-toggle\" href=\"{{base_path}}user\">
                <i class=\"fa fa-user\"></i>My Account 
              </a>
            </li>

             <li class=\"dropdown dropdown-megamenu\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"{{base_path}}user/logout\">
                <i class=\"fa fa-key\"></i>Logout
                
              </a>
            </li>             
  {% else %}
    <li class=\"dropdown dropdown-megamenu\">
                              <a type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\"  class=\"order dropdown-toggle btn btn-primary\" style=\"float: left;\">Join</a>
                           </li>
  {% endif %} 

            <!-- BEGIN TOP SEARCH -->
            <!-- <li class=\"menu-search\">
              <span class=\"sep\"></span>
              <i class=\"fa fa-search search-btn\"></i>
              <div class=\"search-box\">
                <form action=\"#\">
                  <div class=\"input-group\">
                    <input type=\"text\" placeholder=\"Search\" class=\"form-control\">
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-primary\" type=\"submit\">Search</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li> -->
        <!-- BEGIN TOP SEARCH -->
            <li class=\"menu-search\">
              <span class=\"sep\"></span>
              <i class=\"fa fa-search search-btn\"></i>
              <div class=\"search-box\">
                {{ drupal_block('search_form_block') }}
              </div> 
            </li>
        <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

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
  </div>
    ", "region--header.html.twig", "themes/model/templates/regions/region--header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 124);
        static $filters = array("escape" => 51, "file_url" => 130);
        static $functions = array("active_theme_path" => 51, "drupal_block" => 249);

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
