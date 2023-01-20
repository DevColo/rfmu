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
class __TwigTemplate_bc1246f1f27da9c90fe4639a56c8a741d91d3dc3632aac2602b64072c17e33e9 extends \Twig\Template
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
        echo "      <footer>
         <div class=\"footer\">
            <div class=\"container\">
               <div class=\"row\">
                  <div class=\"col-md-3\">
                     <div class=\"inror_box\">
                        <p style=\"padding: 0;\"><img src=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/rmodels.jpeg\" class=\"img-responsive\" style=\"
    width: 80px;
    height: 80px;
    border-radius: 75px;
    box-shadow: 0 0 7px 0 #eee;
\"></p><br>
<em class=\"text-white\">Welcome to RFMU area
You may have heard of Equity as the trade union for  Fashion Modeling – we are also the Rwanda trade union for fashion models. We fight for our members rights at work and hope you’ll join the hundreds of models already in RFMU.</em>

                     </div>
                  </div>
                  <div class=\"col-md-2\">
                     <div class=\"inror_box\">
                        <h3 class=\"text-left\">Discover</h3>
                     <ul class=\"footer-ul\">
                        <li>
                           <p>
                           <a href=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 24, $this->source), "html", null, true);
        echo "about-us\">> Who We Are</a></p>
                        <li><p>
                           <a href=\"";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 26, $this->source), "html", null, true);
        echo "contact-us\">> Contact Us</a>
                        </p>
                           
                        </li>
                        <li><p>
                           <a href=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 31, $this->source), "html", null, true);
        echo "contact-us\">> Our Partners</a>
                        </p>
                        </li>
                        <li><p>
                            <a href=\"";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 35, $this->source), "html", null, true);
        echo "contact-us\">> FAQs</a>
                        </p>
                        </li>
                     </ul>
                        
                     </div>
                  </div>
                  <div class=\"col-md-2\">
                     <div class=\"inror_box\">
                        <h3 class=\"text-left\">Quick Links</h3>
                        <ul class=\"footer-ul\">
                        <li>
                           <p>
                              <a href=\"";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 48, $this->source), "html", null, true);
        echo "user/login\">> Login</a>
                           </p>
                        </li>
                        <li>
                           <p>
                              <a href=\"";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 53, $this->source), "html", null, true);
        echo "register-model\">> Signup As Model</a>
                           </p>
                        <li>
                           <p>
                              <a href=\"";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 57, $this->source), "html", null, true);
        echo "register-agency\">> Signup As Agency</a>
                           </p>
                        </li>
                        <li>
                           <p>
                              <a href=\"";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 62, $this->source), "html", null, true);
        echo "register-people\">> Signup As Member</a>
                           </p>
                        </li>
                     </ul>
                     </div>
                  </div>
                  <div class=\"col-md-2\">
                     <div class=\"inror_box\">
                        <h3 class=\"text-left\">Contact</h3>
                        <ul class=\"footer-ul\">
                           <li>
                              <p><i class=\"fa fa-phone\"></i>&nbsp;+250780256609</p>
                           </li>
                           <li>
                              <p><i class=\"fa fa-map\"></i>&nbsp;N0 735/RGB/NGO/0C/06/2020, Sonatube, kicukiro, kigali, Rwanda</p>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class=\"col-md-3\">
                     <div class=\"inror_box\">
                        <h3 class=\"text-left\">Find Us</h3>
                           <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15949.70476387692!2d30.078066649999997!3d-1.98415275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2srw!4v1674249168732!5m2!1sen!2srw\" width=\"250\" height=\"190\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                        </ul>
                        
                        
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"copyright\">
               <div class=\"container\">
                  <div class=\"row\">
                     <div class=\"col-md-12\">
                        <p>© 2023 All Rights Reserved. Rwanda Fashion Models Union</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>";
    }

    public function getTemplateName()
    {
        return "region--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 62,  119 => 57,  112 => 53,  104 => 48,  88 => 35,  81 => 31,  73 => 26,  68 => 24,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("      <footer>
         <div class=\"footer\">
            <div class=\"container\">
               <div class=\"row\">
                  <div class=\"col-md-3\">
                     <div class=\"inror_box\">
                        <p style=\"padding: 0;\"><img src=\"{{base_path}}{{active_theme_path()}}/images/rmodels.jpeg\" class=\"img-responsive\" style=\"
    width: 80px;
    height: 80px;
    border-radius: 75px;
    box-shadow: 0 0 7px 0 #eee;
\"></p><br>
<em class=\"text-white\">Welcome to RFMU area
You may have heard of Equity as the trade union for  Fashion Modeling – we are also the Rwanda trade union for fashion models. We fight for our members rights at work and hope you’ll join the hundreds of models already in RFMU.</em>

                     </div>
                  </div>
                  <div class=\"col-md-2\">
                     <div class=\"inror_box\">
                        <h3 class=\"text-left\">Discover</h3>
                     <ul class=\"footer-ul\">
                        <li>
                           <p>
                           <a href=\"{{base_path}}about-us\">> Who We Are</a></p>
                        <li><p>
                           <a href=\"{{base_path}}contact-us\">> Contact Us</a>
                        </p>
                           
                        </li>
                        <li><p>
                           <a href=\"{{base_path}}contact-us\">> Our Partners</a>
                        </p>
                        </li>
                        <li><p>
                            <a href=\"{{base_path}}contact-us\">> FAQs</a>
                        </p>
                        </li>
                     </ul>
                        
                     </div>
                  </div>
                  <div class=\"col-md-2\">
                     <div class=\"inror_box\">
                        <h3 class=\"text-left\">Quick Links</h3>
                        <ul class=\"footer-ul\">
                        <li>
                           <p>
                              <a href=\"{{base_path}}user/login\">> Login</a>
                           </p>
                        </li>
                        <li>
                           <p>
                              <a href=\"{{base_path}}register-model\">> Signup As Model</a>
                           </p>
                        <li>
                           <p>
                              <a href=\"{{base_path}}register-agency\">> Signup As Agency</a>
                           </p>
                        </li>
                        <li>
                           <p>
                              <a href=\"{{base_path}}register-people\">> Signup As Member</a>
                           </p>
                        </li>
                     </ul>
                     </div>
                  </div>
                  <div class=\"col-md-2\">
                     <div class=\"inror_box\">
                        <h3 class=\"text-left\">Contact</h3>
                        <ul class=\"footer-ul\">
                           <li>
                              <p><i class=\"fa fa-phone\"></i>&nbsp;+250780256609</p>
                           </li>
                           <li>
                              <p><i class=\"fa fa-map\"></i>&nbsp;N0 735/RGB/NGO/0C/06/2020, Sonatube, kicukiro, kigali, Rwanda</p>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class=\"col-md-3\">
                     <div class=\"inror_box\">
                        <h3 class=\"text-left\">Find Us</h3>
                           <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15949.70476387692!2d30.078066649999997!3d-1.98415275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2srw!4v1674249168732!5m2!1sen!2srw\" width=\"250\" height=\"190\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                        </ul>
                        
                        
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"copyright\">
               <div class=\"container\">
                  <div class=\"row\">
                     <div class=\"col-md-12\">
                        <p>© 2023 All Rights Reserved. Rwanda Fashion Models Union</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>", "region--footer.html.twig", "themes/rmodels/templates/regions/region--footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 7);
        static $functions = array("active_theme_path" => 7);

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
