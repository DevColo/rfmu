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

/* themes/model/templates/page--front.html.twig */
class __TwigTemplate_d2c63a80d2145d991fa04b0dd432affe797f0f6e2c5590d34396f1fea680d7a6 extends \Twig\Template
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
        echo "<!-- Header -->
";
        // line 2
        $this->loadTemplate("themes/model/templates/page--front.html.twig", "themes/model/templates/page--front.html.twig", 2, "135635464")->display($context);
        // line 5
        echo "<!--End Header -->

    <!-- BEGIN SLIDER -->
    <div class=\"page-slider margin-bottom-40\">
        <div id=\"carousel-example-generic\" class=\"carousel slide carousel-slider\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators carousel-indicators-frontend\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <!-- First slide -->
                <div class=\"item carousel-item-eight active\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <!-- <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                Expore the power <br/>
                                <span class=\"carousel-title-normal\">of Fashion</span>
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">This is what you were looking for</p>
                            <a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Fashion!</a> -->
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class=\"item carousel-item-nine\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six\">
                            <!-- <h2 class=\"animate-delay carousel-title-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                Need a fashion Model?
                            </h2> -->
                           <!--  <p class=\"carousel-subtitle-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                This is what you were looking for
                            </p> -->
                           <!--  <p class=\"carousel-subtitle-v7 margin-bottom-30\" data-animation=\"animated fadeInDown\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p>
                            <a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Book Now!</a> -->
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class=\"item carousel-item-ten\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six\">
                            <!-- <h2 class=\"animate-delay carousel-title-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                Powerful &amp; Clean
                            </h2>
                            <p class=\"carousel-subtitle-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                This is what you are looking for ?
                            </p>
                            <p class=\"carousel-subtitle-v7 margin-bottom-30\" data-animation=\"animated fadeInDown\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class=\"left carousel-control carousel-control-shop carousel-control-frontend\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
            </a>
            <a class=\"right carousel-control carousel-control-shop carousel-control-frontend\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->
";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "message", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "
    <div class=\"main\">
      <div class=\"container\">

        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class=\"row quote-v1 margin-bottom-30\">
          <div class=\"col-md-9\">
            <span>Do you want to showcase your talent ? </span>
          </div>
          <div class=\"col-md-3 text-right\">
            <a class=\"btn-transparent\" href=\"";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 91, $this->source), "html", null, true);
        echo "register-model\" target=\"_blank\">Become a Model</a>
          </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->

        <!-- BEGIN RECENT WORKS -->
        <div class=\"row recent-work margin-bottom-40\">
           <p> <b style =\"text-align:center;\">NEW MODELS</b></p>
           ";
        // line 102
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("new_models_block"), "html", null, true);
        echo "
          
        </div>   

        <!-- END RECENT WORKS -->
         <div class=\"col-md-12 col-sm-12\" style=\"padding-top: 40px;\">
         <a href=\"";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 108, $this->source), "html", null, true);
        echo "people/all-models\" style=\"float: right;\">View Lists ></a>
            <h3 style=\"\">Model Lists</h3>
            <p>Explode our lists of Models from Rwanda Fashion Model Union </p>
             <hr>
            ";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("featured_lists_block"), "html", null, true);
        echo "
            
          </div>
      
          <div class=\"col-md-12 col-sm-12 text-center\" style=\"padding: 30px 0 30px 0;\">
            <span>
                <p style=\"padding: 24px;/*box-shadow: 0 0 8px 1px #d0d0d0;*/width: fit-content;margin: auto;border: 1px solid #eee;\">
                    Do you want to be a member of the fatest growing Agency ?
              <a class=\"btn-transparent \" href=\"";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 120, $this->source), "html", null, true);
        echo "register-agency\" target=\"_blank\" >Apply Now</a>
                </p>
              
            </span>
            
        </div>

        <div class=\"col-md-12 col-sm-12\">
         <b style=\"float: right;\">View Lists ></b>
            <h3 style=\"\">Upcoming Events</h3>
            <p>Explode our lists of Models from Rwanda Fashion Model Union </p>
             <hr>
            ";
        // line 132
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("latest_blog_block"), "html", null, true);
        echo "
           
          </div>

        <div class=\"col-md-12 col-sm-12\" style=\"padding-top: 80px;\">
          <b style=\"float: right;\"><a href=\"our-agencies\">View Lists ></a></b>
            <h3 style=\"\">Top Agencies</h3>
            <p>Explode our lists of Agencies from Rwanda Fashion Model Union </p>
             <hr>
            ";
        // line 141
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("top_agencies_block"), "html", null, true);
        echo "
            
          </div> 

       

        <!-- BEGIN TABS AND TESTIMONIALS -->
        <div class=\"row mix-block margin-bottom-40\">
          <!-- TABS -->
         
        
        
        </div>                
        <!-- END TABS AND TESTIMONIALS -->



        <!-- BEGIN CLIENTS -->
        <div class=\"row margin-bottom-40 our-clients\">
          <div>
            <h3>Our Partners</h3><hr>
            <!-- <p>Discover Our top rated Modeling Agencies</p> -->
          </div>
              <div class=\"col-md-12\" style=\"display:flex;\">
              <div class=\"col-md-3\">
                  <img src=\"";
        // line 166
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 166, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/images/partner.jpg\" class=\"img-responsive\" alt=\"\">
              </div>
              <div class=\"col-md-3\">
                  <img src=\"";
        // line 169
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 169, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/images/partner2.jpg\" class=\"img-responsive\" alt=\"\" style=\"    width: 140px;
    top: 21px;
    position: relative;\">
              </div>
          </div>     
        </div>
        <!-- END CLIENTS -->
      </div>
    </div>
";
        // line 178
        $this->loadTemplate("themes/model/templates/page--front.html.twig", "themes/model/templates/page--front.html.twig", 178, "107056001")->display($context);
        // line 181
        echo "

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 186
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/plugins/respond.min.js\"></script>
    <![endif]--> 
<!--     <script src=\"";
        // line 188
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/plugins/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 189
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/plugins/jquery-migrate.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 190
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>      
    <script src=\"";
        // line 191
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/corporate/scripts/back-to-top.js\" type=\"text/javascript\"></script> -->
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <!-- <script src=\"";
        // line 195
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/plugins/fancybox/source/jquery.fancybox.pack.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 196
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/plugins/owl.carousel/owl.carousel.min.js\" type=\"text/javascript\"></script> --><!-- slider for products -->

<!--     <script src=\"";
        // line 198
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/corporate/scripts/layout.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 199
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/pages/scripts/bs-carousel.js\" type=\"text/javascript\"></script> -->
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>";
    }

    public function getTemplateName()
    {
        return "themes/model/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 199,  291 => 198,  286 => 196,  282 => 195,  275 => 191,  271 => 190,  267 => 189,  263 => 188,  258 => 186,  251 => 181,  249 => 178,  236 => 169,  229 => 166,  201 => 141,  189 => 132,  174 => 120,  163 => 112,  156 => 108,  146 => 102,  135 => 91,  122 => 81,  44 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header -->
{% embed 'region--header.html.twig' %}
  {% block content %}{% endblock %}
{% endembed %}
<!--End Header -->

    <!-- BEGIN SLIDER -->
    <div class=\"page-slider margin-bottom-40\">
        <div id=\"carousel-example-generic\" class=\"carousel slide carousel-slider\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators carousel-indicators-frontend\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <!-- First slide -->
                <div class=\"item carousel-item-eight active\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <!-- <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                Expore the power <br/>
                                <span class=\"carousel-title-normal\">of Fashion</span>
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">This is what you were looking for</p>
                            <a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Fashion!</a> -->
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class=\"item carousel-item-nine\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six\">
                            <!-- <h2 class=\"animate-delay carousel-title-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                Need a fashion Model?
                            </h2> -->
                           <!--  <p class=\"carousel-subtitle-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                This is what you were looking for
                            </p> -->
                           <!--  <p class=\"carousel-subtitle-v7 margin-bottom-30\" data-animation=\"animated fadeInDown\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p>
                            <a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Book Now!</a> -->
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class=\"item carousel-item-ten\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six\">
                            <!-- <h2 class=\"animate-delay carousel-title-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                Powerful &amp; Clean
                            </h2>
                            <p class=\"carousel-subtitle-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                This is what you are looking for ?
                            </p>
                            <p class=\"carousel-subtitle-v7 margin-bottom-30\" data-animation=\"animated fadeInDown\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class=\"left carousel-control carousel-control-shop carousel-control-frontend\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
            </a>
            <a class=\"right carousel-control carousel-control-shop carousel-control-frontend\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->
{{page.message}}
    <div class=\"main\">
      <div class=\"container\">

        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class=\"row quote-v1 margin-bottom-30\">
          <div class=\"col-md-9\">
            <span>Do you want to showcase your talent ? </span>
          </div>
          <div class=\"col-md-3 text-right\">
            <a class=\"btn-transparent\" href=\"{{base_path}}register-model\" target=\"_blank\">Become a Model</a>
          </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->

        <!-- BEGIN RECENT WORKS -->
        <div class=\"row recent-work margin-bottom-40\">
           <p> <b style =\"text-align:center;\">NEW MODELS</b></p>
           {#{% embed 'region--top_models.html.twig' %}
              {% block content %}{% endblock %}
            {% endembed %}#}
            {{ drupal_block('new_models_block')}}
          
        </div>   

        <!-- END RECENT WORKS -->
         <div class=\"col-md-12 col-sm-12\" style=\"padding-top: 40px;\">
         <a href=\"{{base_path}}people/all-models\" style=\"float: right;\">View Lists ></a>
            <h3 style=\"\">Model Lists</h3>
            <p>Explode our lists of Models from Rwanda Fashion Model Union </p>
             <hr>
            {{ drupal_block('featured_lists_block')}}
            
          </div>
      
          <div class=\"col-md-12 col-sm-12 text-center\" style=\"padding: 30px 0 30px 0;\">
            <span>
                <p style=\"padding: 24px;/*box-shadow: 0 0 8px 1px #d0d0d0;*/width: fit-content;margin: auto;border: 1px solid #eee;\">
                    Do you want to be a member of the fatest growing Agency ?
              <a class=\"btn-transparent \" href=\"{{base_path}}register-agency\" target=\"_blank\" >Apply Now</a>
                </p>
              
            </span>
            
        </div>

        <div class=\"col-md-12 col-sm-12\">
         <b style=\"float: right;\">View Lists ></b>
            <h3 style=\"\">Upcoming Events</h3>
            <p>Explode our lists of Models from Rwanda Fashion Model Union </p>
             <hr>
            {{ drupal_block('latest_blog_block')}}
           
          </div>

        <div class=\"col-md-12 col-sm-12\" style=\"padding-top: 80px;\">
          <b style=\"float: right;\"><a href=\"our-agencies\">View Lists ></a></b>
            <h3 style=\"\">Top Agencies</h3>
            <p>Explode our lists of Agencies from Rwanda Fashion Model Union </p>
             <hr>
            {{ drupal_block('top_agencies_block')}}
            
          </div> 

       

        <!-- BEGIN TABS AND TESTIMONIALS -->
        <div class=\"row mix-block margin-bottom-40\">
          <!-- TABS -->
         
        
        
        </div>                
        <!-- END TABS AND TESTIMONIALS -->



        <!-- BEGIN CLIENTS -->
        <div class=\"row margin-bottom-40 our-clients\">
          <div>
            <h3>Our Partners</h3><hr>
            <!-- <p>Discover Our top rated Modeling Agencies</p> -->
          </div>
              <div class=\"col-md-12\" style=\"display:flex;\">
              <div class=\"col-md-3\">
                  <img src=\"{{base_path}}{{ active_theme_path() }}/assets/images/partner.jpg\" class=\"img-responsive\" alt=\"\">
              </div>
              <div class=\"col-md-3\">
                  <img src=\"{{base_path}}{{ active_theme_path() }}/assets/images/partner2.jpg\" class=\"img-responsive\" alt=\"\" style=\"    width: 140px;
    top: 21px;
    position: relative;\">
              </div>
          </div>     
        </div>
        <!-- END CLIENTS -->
      </div>
    </div>
{% embed 'region--footer.html.twig' %}
  {% block content %}{% endblock %}
{% endembed %}


    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src=\"{{ active_theme_path() }}/assets/plugins/respond.min.js\"></script>
    <![endif]--> 
<!--     <script src=\"{{ active_theme_path() }}/assets/plugins/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"{{ active_theme_path() }}/assets/plugins/jquery-migrate.min.js\" type=\"text/javascript\"></script>
    <script src=\"{{ active_theme_path() }}/assets/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>      
    <script src=\"{{ active_theme_path() }}/assets/corporate/scripts/back-to-top.js\" type=\"text/javascript\"></script> -->
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <!-- <script src=\"{{ active_theme_path() }}/assets/plugins/fancybox/source/jquery.fancybox.pack.js\" type=\"text/javascript\"></script>
    <script src=\"{{ active_theme_path() }}/assets/plugins/owl.carousel/owl.carousel.min.js\" type=\"text/javascript\"></script> --><!-- slider for products -->

<!--     <script src=\"{{ active_theme_path() }}/assets/corporate/scripts/layout.js\" type=\"text/javascript\"></script>
    <script src=\"{{ active_theme_path() }}/assets/pages/scripts/bs-carousel.js\" type=\"text/javascript\"></script> -->
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>", "themes/model/templates/page--front.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/model/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 2);
        static $filters = array("escape" => 81);
        static $functions = array("drupal_block" => 102, "active_theme_path" => 166);

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
                ['escape'],
                ['drupal_block', 'active_theme_path']
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


/* themes/model/templates/page--front.html.twig */
class __TwigTemplate_d2c63a80d2145d991fa04b0dd432affe797f0f6e2c5590d34396f1fea680d7a6___135635464 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "region--header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("region--header.html.twig", "themes/model/templates/page--front.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "themes/model/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 3,  595 => 2,  295 => 199,  291 => 198,  286 => 196,  282 => 195,  275 => 191,  271 => 190,  267 => 189,  263 => 188,  258 => 186,  251 => 181,  249 => 178,  236 => 169,  229 => 166,  201 => 141,  189 => 132,  174 => 120,  163 => 112,  156 => 108,  146 => 102,  135 => 91,  122 => 81,  44 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header -->
{% embed 'region--header.html.twig' %}
  {% block content %}{% endblock %}
{% endembed %}
<!--End Header -->

    <!-- BEGIN SLIDER -->
    <div class=\"page-slider margin-bottom-40\">
        <div id=\"carousel-example-generic\" class=\"carousel slide carousel-slider\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators carousel-indicators-frontend\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <!-- First slide -->
                <div class=\"item carousel-item-eight active\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <!-- <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                Expore the power <br/>
                                <span class=\"carousel-title-normal\">of Fashion</span>
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">This is what you were looking for</p>
                            <a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Fashion!</a> -->
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class=\"item carousel-item-nine\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six\">
                            <!-- <h2 class=\"animate-delay carousel-title-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                Need a fashion Model?
                            </h2> -->
                           <!--  <p class=\"carousel-subtitle-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                This is what you were looking for
                            </p> -->
                           <!--  <p class=\"carousel-subtitle-v7 margin-bottom-30\" data-animation=\"animated fadeInDown\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p>
                            <a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Book Now!</a> -->
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class=\"item carousel-item-ten\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six\">
                            <!-- <h2 class=\"animate-delay carousel-title-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                Powerful &amp; Clean
                            </h2>
                            <p class=\"carousel-subtitle-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                This is what you are looking for ?
                            </p>
                            <p class=\"carousel-subtitle-v7 margin-bottom-30\" data-animation=\"animated fadeInDown\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class=\"left carousel-control carousel-control-shop carousel-control-frontend\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
            </a>
            <a class=\"right carousel-control carousel-control-shop carousel-control-frontend\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->
{{page.message}}
    <div class=\"main\">
      <div class=\"container\">

        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class=\"row quote-v1 margin-bottom-30\">
          <div class=\"col-md-9\">
            <span>Do you want to showcase your talent ? </span>
          </div>
          <div class=\"col-md-3 text-right\">
            <a class=\"btn-transparent\" href=\"{{base_path}}register-model\" target=\"_blank\">Become a Model</a>
          </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->

        <!-- BEGIN RECENT WORKS -->
        <div class=\"row recent-work margin-bottom-40\">
           <p> <b style =\"text-align:center;\">NEW MODELS</b></p>
           {#{% embed 'region--top_models.html.twig' %}
              {% block content %}{% endblock %}
            {% endembed %}#}
            {{ drupal_block('new_models_block')}}
          
        </div>   

        <!-- END RECENT WORKS -->
         <div class=\"col-md-12 col-sm-12\" style=\"padding-top: 40px;\">
         <a href=\"{{base_path}}people/all-models\" style=\"float: right;\">View Lists ></a>
            <h3 style=\"\">Model Lists</h3>
            <p>Explode our lists of Models from Rwanda Fashion Model Union </p>
             <hr>
            {{ drupal_block('featured_lists_block')}}
            
          </div>
      
          <div class=\"col-md-12 col-sm-12 text-center\" style=\"padding: 30px 0 30px 0;\">
            <span>
                <p style=\"padding: 24px;/*box-shadow: 0 0 8px 1px #d0d0d0;*/width: fit-content;margin: auto;border: 1px solid #eee;\">
                    Do you want to be a member of the fatest growing Agency ?
              <a class=\"btn-transparent \" href=\"{{base_path}}register-agency\" target=\"_blank\" >Apply Now</a>
                </p>
              
            </span>
            
        </div>

        <div class=\"col-md-12 col-sm-12\">
         <b style=\"float: right;\">View Lists ></b>
            <h3 style=\"\">Upcoming Events</h3>
            <p>Explode our lists of Models from Rwanda Fashion Model Union </p>
             <hr>
            {{ drupal_block('latest_blog_block')}}
           
          </div>

        <div class=\"col-md-12 col-sm-12\" style=\"padding-top: 80px;\">
          <b style=\"float: right;\"><a href=\"our-agencies\">View Lists ></a></b>
            <h3 style=\"\">Top Agencies</h3>
            <p>Explode our lists of Agencies from Rwanda Fashion Model Union </p>
             <hr>
            {{ drupal_block('top_agencies_block')}}
            
          </div> 

       

        <!-- BEGIN TABS AND TESTIMONIALS -->
        <div class=\"row mix-block margin-bottom-40\">
          <!-- TABS -->
         
        
        
        </div>                
        <!-- END TABS AND TESTIMONIALS -->



        <!-- BEGIN CLIENTS -->
        <div class=\"row margin-bottom-40 our-clients\">
          <div>
            <h3>Our Partners</h3><hr>
            <!-- <p>Discover Our top rated Modeling Agencies</p> -->
          </div>
              <div class=\"col-md-12\" style=\"display:flex;\">
              <div class=\"col-md-3\">
                  <img src=\"{{base_path}}{{ active_theme_path() }}/assets/images/partner.jpg\" class=\"img-responsive\" alt=\"\">
              </div>
              <div class=\"col-md-3\">
                  <img src=\"{{base_path}}{{ active_theme_path() }}/assets/images/partner2.jpg\" class=\"img-responsive\" alt=\"\" style=\"    width: 140px;
    top: 21px;
    position: relative;\">
              </div>
          </div>     
        </div>
        <!-- END CLIENTS -->
      </div>
    </div>
{% embed 'region--footer.html.twig' %}
  {% block content %}{% endblock %}
{% endembed %}


    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src=\"{{ active_theme_path() }}/assets/plugins/respond.min.js\"></script>
    <![endif]--> 
<!--     <script src=\"{{ active_theme_path() }}/assets/plugins/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"{{ active_theme_path() }}/assets/plugins/jquery-migrate.min.js\" type=\"text/javascript\"></script>
    <script src=\"{{ active_theme_path() }}/assets/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>      
    <script src=\"{{ active_theme_path() }}/assets/corporate/scripts/back-to-top.js\" type=\"text/javascript\"></script> -->
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <!-- <script src=\"{{ active_theme_path() }}/assets/plugins/fancybox/source/jquery.fancybox.pack.js\" type=\"text/javascript\"></script>
    <script src=\"{{ active_theme_path() }}/assets/plugins/owl.carousel/owl.carousel.min.js\" type=\"text/javascript\"></script> --><!-- slider for products -->

<!--     <script src=\"{{ active_theme_path() }}/assets/corporate/scripts/layout.js\" type=\"text/javascript\"></script>
    <script src=\"{{ active_theme_path() }}/assets/pages/scripts/bs-carousel.js\" type=\"text/javascript\"></script> -->
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>", "themes/model/templates/page--front.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/model/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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


/* themes/model/templates/page--front.html.twig */
class __TwigTemplate_d2c63a80d2145d991fa04b0dd432affe797f0f6e2c5590d34396f1fea680d7a6___107056001 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 178
        return "region--footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("region--footer.html.twig", "themes/model/templates/page--front.html.twig", 178);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 179
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "themes/model/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  905 => 179,  894 => 178,  606 => 3,  595 => 2,  295 => 199,  291 => 198,  286 => 196,  282 => 195,  275 => 191,  271 => 190,  267 => 189,  263 => 188,  258 => 186,  251 => 181,  249 => 178,  236 => 169,  229 => 166,  201 => 141,  189 => 132,  174 => 120,  163 => 112,  156 => 108,  146 => 102,  135 => 91,  122 => 81,  44 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header -->
{% embed 'region--header.html.twig' %}
  {% block content %}{% endblock %}
{% endembed %}
<!--End Header -->

    <!-- BEGIN SLIDER -->
    <div class=\"page-slider margin-bottom-40\">
        <div id=\"carousel-example-generic\" class=\"carousel slide carousel-slider\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators carousel-indicators-frontend\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <!-- First slide -->
                <div class=\"item carousel-item-eight active\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six text-uppercase text-center\">
                            <!-- <h2 class=\"margin-bottom-20 animate-delay carousel-title-v5\" data-animation=\"animated fadeInDown\">
                                Expore the power <br/>
                                <span class=\"carousel-title-normal\">of Fashion</span>
                            </h2>
                            <p class=\"carousel-subtitle-v5 border-top-bottom margin-bottom-30\" data-animation=\"animated fadeInDown\">This is what you were looking for</p>
                            <a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Fashion!</a> -->
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class=\"item carousel-item-nine\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six\">
                            <!-- <h2 class=\"animate-delay carousel-title-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                Need a fashion Model?
                            </h2> -->
                           <!--  <p class=\"carousel-subtitle-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                This is what you were looking for
                            </p> -->
                           <!--  <p class=\"carousel-subtitle-v7 margin-bottom-30\" data-animation=\"animated fadeInDown\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p>
                            <a class=\"carousel-btn-green\" href=\"#\" data-animation=\"animated fadeInUp\">Book Now!</a> -->
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class=\"item carousel-item-ten\">
                    <div class=\"container\">
                        <div class=\"carousel-position-six\">
                            <!-- <h2 class=\"animate-delay carousel-title-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                Powerful &amp; Clean
                            </h2>
                            <p class=\"carousel-subtitle-v6 text-uppercase\" data-animation=\"animated fadeInDown\">
                                This is what you are looking for ?
                            </p>
                            <p class=\"carousel-subtitle-v7 margin-bottom-30\" data-animation=\"animated fadeInDown\">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                Sed est nunc, sagittis at consectetur id.
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class=\"left carousel-control carousel-control-shop carousel-control-frontend\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
            </a>
            <a class=\"right carousel-control carousel-control-shop carousel-control-frontend\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->
{{page.message}}
    <div class=\"main\">
      <div class=\"container\">

        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class=\"row quote-v1 margin-bottom-30\">
          <div class=\"col-md-9\">
            <span>Do you want to showcase your talent ? </span>
          </div>
          <div class=\"col-md-3 text-right\">
            <a class=\"btn-transparent\" href=\"{{base_path}}register-model\" target=\"_blank\">Become a Model</a>
          </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->

        <!-- BEGIN RECENT WORKS -->
        <div class=\"row recent-work margin-bottom-40\">
           <p> <b style =\"text-align:center;\">NEW MODELS</b></p>
           {#{% embed 'region--top_models.html.twig' %}
              {% block content %}{% endblock %}
            {% endembed %}#}
            {{ drupal_block('new_models_block')}}
          
        </div>   

        <!-- END RECENT WORKS -->
         <div class=\"col-md-12 col-sm-12\" style=\"padding-top: 40px;\">
         <a href=\"{{base_path}}people/all-models\" style=\"float: right;\">View Lists ></a>
            <h3 style=\"\">Model Lists</h3>
            <p>Explode our lists of Models from Rwanda Fashion Model Union </p>
             <hr>
            {{ drupal_block('featured_lists_block')}}
            
          </div>
      
          <div class=\"col-md-12 col-sm-12 text-center\" style=\"padding: 30px 0 30px 0;\">
            <span>
                <p style=\"padding: 24px;/*box-shadow: 0 0 8px 1px #d0d0d0;*/width: fit-content;margin: auto;border: 1px solid #eee;\">
                    Do you want to be a member of the fatest growing Agency ?
              <a class=\"btn-transparent \" href=\"{{base_path}}register-agency\" target=\"_blank\" >Apply Now</a>
                </p>
              
            </span>
            
        </div>

        <div class=\"col-md-12 col-sm-12\">
         <b style=\"float: right;\">View Lists ></b>
            <h3 style=\"\">Upcoming Events</h3>
            <p>Explode our lists of Models from Rwanda Fashion Model Union </p>
             <hr>
            {{ drupal_block('latest_blog_block')}}
           
          </div>

        <div class=\"col-md-12 col-sm-12\" style=\"padding-top: 80px;\">
          <b style=\"float: right;\"><a href=\"our-agencies\">View Lists ></a></b>
            <h3 style=\"\">Top Agencies</h3>
            <p>Explode our lists of Agencies from Rwanda Fashion Model Union </p>
             <hr>
            {{ drupal_block('top_agencies_block')}}
            
          </div> 

       

        <!-- BEGIN TABS AND TESTIMONIALS -->
        <div class=\"row mix-block margin-bottom-40\">
          <!-- TABS -->
         
        
        
        </div>                
        <!-- END TABS AND TESTIMONIALS -->



        <!-- BEGIN CLIENTS -->
        <div class=\"row margin-bottom-40 our-clients\">
          <div>
            <h3>Our Partners</h3><hr>
            <!-- <p>Discover Our top rated Modeling Agencies</p> -->
          </div>
              <div class=\"col-md-12\" style=\"display:flex;\">
              <div class=\"col-md-3\">
                  <img src=\"{{base_path}}{{ active_theme_path() }}/assets/images/partner.jpg\" class=\"img-responsive\" alt=\"\">
              </div>
              <div class=\"col-md-3\">
                  <img src=\"{{base_path}}{{ active_theme_path() }}/assets/images/partner2.jpg\" class=\"img-responsive\" alt=\"\" style=\"    width: 140px;
    top: 21px;
    position: relative;\">
              </div>
          </div>     
        </div>
        <!-- END CLIENTS -->
      </div>
    </div>
{% embed 'region--footer.html.twig' %}
  {% block content %}{% endblock %}
{% endembed %}


    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src=\"{{ active_theme_path() }}/assets/plugins/respond.min.js\"></script>
    <![endif]--> 
<!--     <script src=\"{{ active_theme_path() }}/assets/plugins/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"{{ active_theme_path() }}/assets/plugins/jquery-migrate.min.js\" type=\"text/javascript\"></script>
    <script src=\"{{ active_theme_path() }}/assets/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>      
    <script src=\"{{ active_theme_path() }}/assets/corporate/scripts/back-to-top.js\" type=\"text/javascript\"></script> -->
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <!-- <script src=\"{{ active_theme_path() }}/assets/plugins/fancybox/source/jquery.fancybox.pack.js\" type=\"text/javascript\"></script>
    <script src=\"{{ active_theme_path() }}/assets/plugins/owl.carousel/owl.carousel.min.js\" type=\"text/javascript\"></script> --><!-- slider for products -->

<!--     <script src=\"{{ active_theme_path() }}/assets/corporate/scripts/layout.js\" type=\"text/javascript\"></script>
    <script src=\"{{ active_theme_path() }}/assets/pages/scripts/bs-carousel.js\" type=\"text/javascript\"></script> -->
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>", "themes/model/templates/page--front.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/model/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
