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

/* themes/model/templates/regions/latestBlog.html.twig */
class __TwigTemplate_cbbe3d88999b2ddf0d78ad25fa4d78d6b82b02e4d9c9c8f35baa16599aa3565f extends \Twig\Template
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
        echo "<div class=\"col-md-12 col-sm-9 blog-posts\">
         ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["article_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 3
            echo "                  <div class=\"row\">
                    <!-- <div class=\"col-md-4 col-sm-4\">          
                      <div class=\"front-carousel\">
                        <div class=\"carousel slide\" id=\"myCarousel\">
                          <div class=\"carousel-inner\">
                            <div class=\"item\">
                              <img alt=\"\" src=\"";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
            echo "/assets/pages/img/works/img1.jpg\">
                            </div>
                            <div class=\"item\">
                              <img alt=\"\" src=\"";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
            echo "/assets/pages/img/works/img2.jpg\">
                            </div>
                            <div class=\"item active\">
                              <img alt=\"\" src=\"";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
            echo "/assets/pages/img/works/img3.jpg\">
                            </div>
                          </div>
                          <a data-slide=\"prev\" href=\"#myCarousel\" class=\"carousel-control left\">
                            <i class=\"fa fa-angle-left\"></i>
                          </a>
                          <a data-slide=\"next\" href=\"#myCarousel\" class=\"carousel-control right\">
                            <i class=\"fa fa-angle-right\"></i>
                          </a>
                        </div>                
                      </div>            
                    </div> -->
                    <div class=\"col-md-4 col-sm-4\">
                      <img class=\"img-responsive\" alt=\"\" src=\"";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::fileUrlFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "article_img", [], "any", false, false, true, 28), 28, $this->source)), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"col-md-8 col-sm-8\">
                      <h2><a href=\"";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 31, $this->source), "html", null, true);
            echo "article/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "article_id", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "article_title", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "</a></h2>
                      <ul class=\"blog-info\">
                        <li><i class=\"fa fa-calendar\"></i>";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "article_date", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</li>
                      <!--   <li><i class=\"fa fa-comments\"></i> 17</li> -->
                        <li><i class=\"fa fa-user\"></i> ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "author_name", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</li>
                      </ul>
                      <p>";
            // line 37
            $context["text"] = twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "article_body", [], "any", false, false, true, 37), 37, $this->source)));
            // line 38
            echo "         ";
            (((twig_length_filter($this->env, ($context["text"] ?? null)) > 300)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_slice($this->env, ($context["text"] ?? null), 0, 300) . "..."), "html", null, true))) : (print (($context["text"] ?? null))));
            echo "</p>
                      <a href=\"";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 39, $this->source), "html", null, true);
            echo "article/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "article_id", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "\" class=\"more\">Read more <i class=\"icon-angle-right\"></i></a>
                    </div>
                  </div>
                  <hr class=\"blog-post-sep\">
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                 <!--  <ul class=\"pagination\">
                    <li><a href=\"javascript:;\">Prev</a></li>
                    <li><a href=\"javascript:;\">1</a></li>
                    <li><a href=\"javascript:;\">2</a></li>
                    <li class=\"active\"><a href=\"javascript:;\">3</a></li>
                    <li><a href=\"javascript:;\">4</a></li>
                    <li><a href=\"javascript:;\">5</a></li>
                    <li><a href=\"javascript:;\">Next</a></li>
                  </ul>  -->              
                </div>";
    }

    public function getTemplateName()
    {
        return "themes/model/templates/regions/latestBlog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  114 => 39,  109 => 38,  107 => 37,  102 => 35,  97 => 33,  88 => 31,  82 => 28,  66 => 15,  60 => 12,  54 => 9,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-12 col-sm-9 blog-posts\">
         {% for article in article_data %}
                  <div class=\"row\">
                    <!-- <div class=\"col-md-4 col-sm-4\">          
                      <div class=\"front-carousel\">
                        <div class=\"carousel slide\" id=\"myCarousel\">
                          <div class=\"carousel-inner\">
                            <div class=\"item\">
                              <img alt=\"\" src=\"{{ active_theme_path() }}/assets/pages/img/works/img1.jpg\">
                            </div>
                            <div class=\"item\">
                              <img alt=\"\" src=\"{{ active_theme_path() }}/assets/pages/img/works/img2.jpg\">
                            </div>
                            <div class=\"item active\">
                              <img alt=\"\" src=\"{{ active_theme_path() }}/assets/pages/img/works/img3.jpg\">
                            </div>
                          </div>
                          <a data-slide=\"prev\" href=\"#myCarousel\" class=\"carousel-control left\">
                            <i class=\"fa fa-angle-left\"></i>
                          </a>
                          <a data-slide=\"next\" href=\"#myCarousel\" class=\"carousel-control right\">
                            <i class=\"fa fa-angle-right\"></i>
                          </a>
                        </div>                
                      </div>            
                    </div> -->
                    <div class=\"col-md-4 col-sm-4\">
                      <img class=\"img-responsive\" alt=\"\" src=\"{{article.article_img |file_url}}\">
                    </div>
                    <div class=\"col-md-8 col-sm-8\">
                      <h2><a href=\"{{base_path}}article/{{article.article_id}}\">{{article.article_title}}</a></h2>
                      <ul class=\"blog-info\">
                        <li><i class=\"fa fa-calendar\"></i>{{article.article_date}}</li>
                      <!--   <li><i class=\"fa fa-comments\"></i> 17</li> -->
                        <li><i class=\"fa fa-user\"></i> {{article.author_name}}</li>
                      </ul>
                      <p>{% set text = article.article_body|render|striptags %}
         {{ text|length > 300 ? text|slice(0, 300)|raw ~ '...' : text|raw }}</p>
                      <a href=\"{{base_path}}article/{{article.article_id}}\" class=\"more\">Read more <i class=\"icon-angle-right\"></i></a>
                    </div>
                  </div>
                  <hr class=\"blog-post-sep\">
                  {% endfor %}
                 <!--  <ul class=\"pagination\">
                    <li><a href=\"javascript:;\">Prev</a></li>
                    <li><a href=\"javascript:;\">1</a></li>
                    <li><a href=\"javascript:;\">2</a></li>
                    <li class=\"active\"><a href=\"javascript:;\">3</a></li>
                    <li><a href=\"javascript:;\">4</a></li>
                    <li><a href=\"javascript:;\">5</a></li>
                    <li><a href=\"javascript:;\">Next</a></li>
                  </ul>  -->              
                </div>", "themes/model/templates/regions/latestBlog.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/model/templates/regions/latestBlog.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 2, "set" => 37);
        static $filters = array("escape" => 9, "file_url" => 28, "striptags" => 37, "render" => 37, "length" => 38, "raw" => 38, "slice" => 38);
        static $functions = array("active_theme_path" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape', 'file_url', 'striptags', 'render', 'length', 'raw', 'slice'],
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
