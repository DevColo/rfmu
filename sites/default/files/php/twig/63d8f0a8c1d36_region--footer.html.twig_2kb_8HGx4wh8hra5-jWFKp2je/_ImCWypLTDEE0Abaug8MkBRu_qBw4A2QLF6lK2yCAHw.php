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

/* region--footer.html.twig */
class __TwigTemplate_e15a20ff5bbbbfcab067dd1be922b54a9f3755730d16e2e8b7d3f1b4d1332b49 extends \Twig\Template
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
        echo "    <!-- BEGIN PRE-FOOTER -->
    <div class=\"pre-footer\">
      <div class=\"container\">
        <div class=\"row\">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <!-- <div class=\"col-md-4 col-sm-6 pre-footer-col\">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>

          
          </div> -->
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
         <!--  <div class=\"col-md-4 col-sm-6 pre-footer-col\">
            <h2>Our Contacts</h2>
            <address class=\"margin-bottom-40\">
              N0 735/RGB/NGO/0C/06/2020,<br> 
              Sonatube, kicukiro, <br>
              kigali, Rwanda<br>
              Email: <a href=\"mailto:rwandafashionmodelsunion@gmail.com\">rwandafashionmodelsunion@gmail.com</a><br>
              Cell: <a href=\"tel:+250780256609\">+250780256609</a>
            </address>

            <div class=\"pre-footer-subscribe-box pre-footer-subscribe-box-vertical\">
              <h2>Newsletter</h2>
              <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
              <form action=\"#\">
                <div class=\"input-group\">
                  <input type=\"text\" placeholder=\"youremail@mail.com\" class=\"form-control\">
                  <span class=\"input-group-btn\">
                    <button class=\"btn btn-primary\" type=\"submit\">Subscribe</button>
                  </span>
                </div>
              </form>
            </div>
          </div> -->
          <!-- END BOTTOM CONTACTS -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <!-- BEGIN COPYRIGHT -->
          <div class=\"col-md-4 col-sm-4 padding-top-10\">
            2023 © Rwanda Fashion Model Agency. ALL Rights Reserved. <a href=\"javascript:;\">Privacy Policy</a> | <a href=\"javascript:;\">Terms of Service</a>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class=\"col-md-4 col-sm-4\">
            <ul class=\"social-footer list-unstyled list-inline pull-right\">
              <li><a href=\"javascript:;\"><i class=\"fa fa-facebook\"></i></a></li>
              <li><a href=\"javascript:;\"><i class=\"fa fa-instagram\"></i></a></li>
              <li><a href=\"javascript:;\"><i class=\"fa fa-twitter\"></i></a></li>
              <li><a href=\"javascript:;\"><i class=\"fa fa-youtube\"></i></a></li>
            </ul>  
          </div>
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
          <div class=\"col-md-4 col-sm-4 text-right\">
            <!-- <p class=\"powered\">Powered by: <a href=\"http://www.keenthemes.com/\">KeenThemes.com</a></p> -->
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->";
    }

    public function getTemplateName()
    {
        return "region--footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <!-- BEGIN PRE-FOOTER -->
    <div class=\"pre-footer\">
      <div class=\"container\">
        <div class=\"row\">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <!-- <div class=\"col-md-4 col-sm-6 pre-footer-col\">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>

          
          </div> -->
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
         <!--  <div class=\"col-md-4 col-sm-6 pre-footer-col\">
            <h2>Our Contacts</h2>
            <address class=\"margin-bottom-40\">
              N0 735/RGB/NGO/0C/06/2020,<br> 
              Sonatube, kicukiro, <br>
              kigali, Rwanda<br>
              Email: <a href=\"mailto:rwandafashionmodelsunion@gmail.com\">rwandafashionmodelsunion@gmail.com</a><br>
              Cell: <a href=\"tel:+250780256609\">+250780256609</a>
            </address>

            <div class=\"pre-footer-subscribe-box pre-footer-subscribe-box-vertical\">
              <h2>Newsletter</h2>
              <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
              <form action=\"#\">
                <div class=\"input-group\">
                  <input type=\"text\" placeholder=\"youremail@mail.com\" class=\"form-control\">
                  <span class=\"input-group-btn\">
                    <button class=\"btn btn-primary\" type=\"submit\">Subscribe</button>
                  </span>
                </div>
              </form>
            </div>
          </div> -->
          <!-- END BOTTOM CONTACTS -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <!-- BEGIN COPYRIGHT -->
          <div class=\"col-md-4 col-sm-4 padding-top-10\">
            2023 © Rwanda Fashion Model Agency. ALL Rights Reserved. <a href=\"javascript:;\">Privacy Policy</a> | <a href=\"javascript:;\">Terms of Service</a>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class=\"col-md-4 col-sm-4\">
            <ul class=\"social-footer list-unstyled list-inline pull-right\">
              <li><a href=\"javascript:;\"><i class=\"fa fa-facebook\"></i></a></li>
              <li><a href=\"javascript:;\"><i class=\"fa fa-instagram\"></i></a></li>
              <li><a href=\"javascript:;\"><i class=\"fa fa-twitter\"></i></a></li>
              <li><a href=\"javascript:;\"><i class=\"fa fa-youtube\"></i></a></li>
            </ul>  
          </div>
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
          <div class=\"col-md-4 col-sm-4 text-right\">
            <!-- <p class=\"powered\">Powered by: <a href=\"http://www.keenthemes.com/\">KeenThemes.com</a></p> -->
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->", "region--footer.html.twig", "themes/model/templates/regions/region--footer.html.twig");
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
