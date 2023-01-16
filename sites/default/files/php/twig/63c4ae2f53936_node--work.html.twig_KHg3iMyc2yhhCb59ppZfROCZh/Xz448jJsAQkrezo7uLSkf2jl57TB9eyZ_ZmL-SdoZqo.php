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

/* themes/contrib/showcase_lite/templates/node/node--work.html.twig */
class __TwigTemplate_7a1091ca2f7e5358b0b6580195265ce13891925113ddca200fb96ef5bc0b7cfc extends \Twig\Template
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
        // line 69
        $context["classes"] = [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "bundle", [], "any", false, false, true, 70), 70, $this->source)), 1 => ((twig_get_attribute($this->env, $this->source,         // line 71
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 71)) ? ("is-promoted") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 72)) ? ("is-sticky") : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 73)) ? ("is-unpublished") : ("")), 4 => ((        // line 74
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 74, $this->source))) : ("")), 5 => "clearfix"];
        // line 78
        echo "<style type=\"text/css\">
  @media (min-width: 768px){
    /*.col-sm-4 {
      width: 32%;
    }*/
  }
  .col-md-12 nav > h2{
    font-size: 23px !important;
    padding-bottom: 2px !important;
    margin: 0;
    border-bottom: 1px solid #eee !important;
    font-weight: 300;
    text-align: left !important;
    letter-spacing: 0.09em !important;
  }
  h2#title {
    margin-top: 0;
  }
  nav#block-useraccountmenu {
    margin-bottom: 15px;
}
  img{
    border-radius: 0;
  }
  .main-content__section, .sidebar__section {
    padding: 20px 0 20px;
}
</style>



  <section class=\"col-md-8 col-lg-7\">
    <article";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 110), 110, $this->source), "html", null, true);
        echo ">
      <img loading=\"lazy\" src=\"";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::fileUrlFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_work_cover", [], "any", false, false, true, 111), 111, $this->source)), "html", null, true);
        echo "\" width=\"1000\" height=\"667\" alt=\"\" typeof=\"foaf:Image\" class=\"img-responsive\">
</article>
  </section>

";
        // line 116
        echo "
<aside class=\"col-md-4 col-lg-offset-1\">
  <section class=\"sidebar-second\">
    <div class=\"region region-sidebar-second\">
<nav role=\"navigation\" aria-labelledby=\"block-useraccountmenu-menu\" id=\"block-useraccountmenu\" class=\"contextual-region clearfix block block-menu navigation menu--account\">
      
  <h2 id=\"title\">";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 122), "value", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        echo "</h2>
    <ul class=\"clearfix menu\">
      ";
        // line 124
        if (($context["display_submitted"] ?? null)) {
            // line 125
            echo "        <li class=\"menu-item\">
        <a>Published On:";
            // line 126
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 126, $this->source), "html", null, true);
            echo "</a>
        </li>
        ";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 128, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 130
        echo "    </ul>
 
  </nav>

  <nav role=\"navigation\" aria-labelledby=\"block-useraccountmenu-menu\" id=\"block-useraccountmenu\" class=\"contextual-region clearfix block block-menu navigation menu--account\">
      
  <h2 id=\"title\">Person(s) in this picture</h2>
    <ul class=\"clearfix menu\">
      ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_models_in_this_picture", [], "any", false, false, true, 138));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 139
            echo "        ";
            // line 140
            echo "        ";
            // line 141
            echo "          ";
            // line 142
            echo "        ";
            // line 143
            echo "        ";
            // line 144
            echo "        <li class=\"menu-item\">
        <a href=\"";
            // line 145
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 145, $this->source), "html", null, true);
            echo "/rfmu-user/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["model"], "entity", [], "any", false, false, true, 145), "uid", [], "any", false, false, true, 145), "value", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["model"], "entity", [], "any", false, false, true, 145), "name", [], "any", false, false, true, 145), "value", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "    </ul>
 
  </nav>

<nav role=\"navigation\" aria-labelledby=\"block-tools-menu\" id=\"block-tools\" class=\"contextual-region clearfix block block-menu navigation menu--tools\">
      
  <h2 id=\"block-tools-menu\">Contributors</h2>
    <ul class=\"clearfix menu\">
      ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_photo_credit", [], "any", false, false, true, 156));
        foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
            // line 157
            echo "        <li class=\"menu-item\">
          <a href=\"";
            // line 158
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 158, $this->source), "html", null, true);
            echo "/rfmu-user/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["credit"], "entity", [], "any", false, false, true, 158), "uid", [], "any", false, false, true, 158), "value", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
            echo "\" data-drupal-link-system-path=\"node/add\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["credit"], "entity", [], "any", false, false, true, 158), "field_role", [], "any", false, false, true, 158), "entity", [], "any", false, false, true, 158), "name", [], "any", false, false, true, 158), "value", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
            echo " - ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["credit"], "entity", [], "any", false, false, true, 158), "name", [], "any", false, false, true, 158), "value", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
            echo "
          </a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "    </ul>

  </nav>

  </div>
 </section>
                          </aside>

";
        // line 171
        echo "






";
    }

    public function getTemplateName()
    {
        return "themes/contrib/showcase_lite/templates/node/node--work.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 171,  192 => 162,  176 => 158,  173 => 157,  169 => 156,  159 => 148,  146 => 145,  143 => 144,  141 => 143,  139 => 142,  137 => 141,  135 => 140,  133 => 139,  129 => 138,  119 => 130,  114 => 128,  109 => 126,  106 => 125,  104 => 124,  99 => 122,  91 => 116,  84 => 111,  80 => 110,  46 => 78,  44 => 74,  43 => 73,  42 => 72,  41 => 71,  40 => 70,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @ingroup templates
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{%
  set classes = [
    node.bundle|clean_class,
    node.isPromoted() ? 'is-promoted',
    node.isSticky() ? 'is-sticky',
    not node.isPublished() ? 'is-unpublished',
    view_mode ? view_mode|clean_class,
    'clearfix',
  ]
%}
<style type=\"text/css\">
  @media (min-width: 768px){
    /*.col-sm-4 {
      width: 32%;
    }*/
  }
  .col-md-12 nav > h2{
    font-size: 23px !important;
    padding-bottom: 2px !important;
    margin: 0;
    border-bottom: 1px solid #eee !important;
    font-weight: 300;
    text-align: left !important;
    letter-spacing: 0.09em !important;
  }
  h2#title {
    margin-top: 0;
  }
  nav#block-useraccountmenu {
    margin-bottom: 15px;
}
  img{
    border-radius: 0;
  }
  .main-content__section, .sidebar__section {
    padding: 20px 0 20px;
}
</style>



  <section class=\"col-md-8 col-lg-7\">
    <article{{ attributes.addClass(classes) }}>
      <img loading=\"lazy\" src=\"{{node.field_work_cover|file_url}}\" width=\"1000\" height=\"667\" alt=\"\" typeof=\"foaf:Image\" class=\"img-responsive\">
</article>
  </section>

{#start#}

<aside class=\"col-md-4 col-lg-offset-1\">
  <section class=\"sidebar-second\">
    <div class=\"region region-sidebar-second\">
<nav role=\"navigation\" aria-labelledby=\"block-useraccountmenu-menu\" id=\"block-useraccountmenu\" class=\"contextual-region clearfix block block-menu navigation menu--account\">
      
  <h2 id=\"title\">{{node.title.value}}</h2>
    <ul class=\"clearfix menu\">
      {% if display_submitted %}
        <li class=\"menu-item\">
        <a>Published On:{{ date }}</a>
        </li>
        {{ metadata }}
      {% endif %}
    </ul>
 
  </nav>

  <nav role=\"navigation\" aria-labelledby=\"block-useraccountmenu-menu\" id=\"block-useraccountmenu\" class=\"contextual-region clearfix block block-menu navigation menu--account\">
      
  <h2 id=\"title\">Person(s) in this picture</h2>
    <ul class=\"clearfix menu\">
      {% for model in node.field_models_in_this_picture %}
        {#% set comma = '' %#}
        {#% if loop.index > 1 %#}
          {#% set comma = ',' %#}
        {#% endif %#}
        {#{ comma }#}
        <li class=\"menu-item\">
        <a href=\"{{base_url}}/rfmu-user/{{model.entity.uid.value }}\">{{model.entity.name.value }}</a>
        </li>
        {% endfor %}
    </ul>
 
  </nav>

<nav role=\"navigation\" aria-labelledby=\"block-tools-menu\" id=\"block-tools\" class=\"contextual-region clearfix block block-menu navigation menu--tools\">
      
  <h2 id=\"block-tools-menu\">Contributors</h2>
    <ul class=\"clearfix menu\">
      {% for credit in node.field_photo_credit %}
        <li class=\"menu-item\">
          <a href=\"{{base_url}}/rfmu-user/{{credit.entity.uid.value }}\" data-drupal-link-system-path=\"node/add\">{{credit.entity.field_role.entity.name.value}} - {{credit.entity.name.value }}
          </a>
        </li>
      {% endfor %}
    </ul>

  </nav>

  </div>
 </section>
                          </aside>

{#end#}







", "themes/contrib/showcase_lite/templates/node/node--work.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/contrib/showcase_lite/templates/node/node--work.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 69, "if" => 124, "for" => 138);
        static $filters = array("clean_class" => 70, "escape" => 110, "file_url" => 111);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'file_url'],
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
