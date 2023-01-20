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

/* themes/rmodels/templates/page.html.twig */
class __TwigTemplate_ec9b73bd55e116d97241bef938c575b7dac390626fffcdd53f2f7d682dc8cb66 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
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
        $this->loadTemplate("themes/rmodels/templates/page.html.twig", "themes/rmodels/templates/page.html.twig", 2, "1485184078")->display($context);
        // line 5
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 5)) {
            // line 6
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 16
        echo "<!--End Header -->
";
        // line 18
        $this->displayBlock('main', $context, $blocks);
        // line 84
        echo "
      <!--  footer -->
";
        // line 86
        $this->loadTemplate("themes/rmodels/templates/page.html.twig", "themes/rmodels/templates/page.html.twig", 86, "1736051611")->display($context);
        // line 89
        echo "      <!-- end footer -->";
    }

    // line 18
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 19, $this->source), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 31
        echo "
      ";
        // line 33
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 33)) {
            // line 34
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 39
            echo "      ";
        }
        // line 40
        echo "
      ";
        // line 42
        echo "      ";
        // line 43
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 44
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 44) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 44))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 45
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 45) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 45)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 46
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 46) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 46)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 47
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 47)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 47)))) ? ("col-sm-12") : (""))];
        // line 50
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
        echo ">

        ";
        // line 53
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 53)) {
            // line 54
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 57
            echo "        ";
        }
        // line 58
        echo "
        ";
        // line 60
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 60)) {
            // line 61
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 64
            echo "        ";
        }
        // line 65
        echo "
        ";
        // line 67
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "      </section>

      ";
        // line 74
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 74)) {
            // line 75
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 80
            echo "      ";
        }
        // line 81
        echo "    </div>
  </div>
";
    }

    // line 34
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 54
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 61
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 67
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "          <a id=\"main-content\"></a>
          ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 75
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    public function getTemplateName()
    {
        return "themes/rmodels/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 77,  222 => 76,  218 => 75,  212 => 69,  209 => 68,  205 => 67,  198 => 62,  194 => 61,  187 => 55,  183 => 54,  176 => 36,  173 => 35,  169 => 34,  163 => 81,  160 => 80,  157 => 75,  154 => 74,  150 => 71,  147 => 67,  144 => 65,  141 => 64,  138 => 61,  135 => 60,  132 => 58,  129 => 57,  126 => 54,  123 => 53,  117 => 50,  115 => 47,  114 => 46,  113 => 45,  112 => 44,  111 => 43,  109 => 42,  106 => 40,  103 => 39,  100 => 34,  97 => 33,  94 => 31,  87 => 19,  83 => 18,  79 => 89,  77 => 86,  73 => 84,  71 => 18,  68 => 16,  59 => 10,  53 => 6,  50 => 5,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header -->
{% embed 'region--header.html.twig' %}
  {% block content %}{% endblock %}
{% endembed %}
      {% if page.breadcrumb %}
    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            {{ page.breadcrumb }}
          </div>
        </div>
      </div>
    </div>
  {% endif %}
<!--End Header -->
{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {# Header 
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}
      #}

      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>

      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}

      <!--  footer -->
{% embed 'region--footer.html.twig' %}
  {% block content %}{% endblock %}
{% endembed %}
      <!-- end footer -->", "themes/rmodels/templates/page.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/rmodels/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 2, "if" => 5, "block" => 18, "set" => 43);
        static $filters = array("escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['embed', 'if', 'block', 'set'],
                ['escape'],
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


/* themes/rmodels/templates/page.html.twig */
class __TwigTemplate_ec9b73bd55e116d97241bef938c575b7dac390626fffcdd53f2f7d682dc8cb66___1485184078 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("region--header.html.twig", "themes/rmodels/templates/page.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "themes/rmodels/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 3,  391 => 2,  225 => 77,  222 => 76,  218 => 75,  212 => 69,  209 => 68,  205 => 67,  198 => 62,  194 => 61,  187 => 55,  183 => 54,  176 => 36,  173 => 35,  169 => 34,  163 => 81,  160 => 80,  157 => 75,  154 => 74,  150 => 71,  147 => 67,  144 => 65,  141 => 64,  138 => 61,  135 => 60,  132 => 58,  129 => 57,  126 => 54,  123 => 53,  117 => 50,  115 => 47,  114 => 46,  113 => 45,  112 => 44,  111 => 43,  109 => 42,  106 => 40,  103 => 39,  100 => 34,  97 => 33,  94 => 31,  87 => 19,  83 => 18,  79 => 89,  77 => 86,  73 => 84,  71 => 18,  68 => 16,  59 => 10,  53 => 6,  50 => 5,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header -->
{% embed 'region--header.html.twig' %}
  {% block content %}{% endblock %}
{% endembed %}
      {% if page.breadcrumb %}
    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            {{ page.breadcrumb }}
          </div>
        </div>
      </div>
    </div>
  {% endif %}
<!--End Header -->
{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {# Header 
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}
      #}

      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>

      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}

      <!--  footer -->
{% embed 'region--footer.html.twig' %}
  {% block content %}{% endblock %}
{% endembed %}
      <!-- end footer -->", "themes/rmodels/templates/page.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/rmodels/templates/page.html.twig");
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


/* themes/rmodels/templates/page.html.twig */
class __TwigTemplate_ec9b73bd55e116d97241bef938c575b7dac390626fffcdd53f2f7d682dc8cb66___1736051611 extends \Twig\Template
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
        // line 86
        return "region--footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("region--footer.html.twig", "themes/rmodels/templates/page.html.twig", 86);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 87
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "themes/rmodels/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 87,  567 => 86,  402 => 3,  391 => 2,  225 => 77,  222 => 76,  218 => 75,  212 => 69,  209 => 68,  205 => 67,  198 => 62,  194 => 61,  187 => 55,  183 => 54,  176 => 36,  173 => 35,  169 => 34,  163 => 81,  160 => 80,  157 => 75,  154 => 74,  150 => 71,  147 => 67,  144 => 65,  141 => 64,  138 => 61,  135 => 60,  132 => 58,  129 => 57,  126 => 54,  123 => 53,  117 => 50,  115 => 47,  114 => 46,  113 => 45,  112 => 44,  111 => 43,  109 => 42,  106 => 40,  103 => 39,  100 => 34,  97 => 33,  94 => 31,  87 => 19,  83 => 18,  79 => 89,  77 => 86,  73 => 84,  71 => 18,  68 => 16,  59 => 10,  53 => 6,  50 => 5,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header -->
{% embed 'region--header.html.twig' %}
  {% block content %}{% endblock %}
{% endembed %}
      {% if page.breadcrumb %}
    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            {{ page.breadcrumb }}
          </div>
        </div>
      </div>
    </div>
  {% endif %}
<!--End Header -->
{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {# Header 
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}
      #}

      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>

      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}

      <!--  footer -->
{% embed 'region--footer.html.twig' %}
  {% block content %}{% endblock %}
{% endembed %}
      <!-- end footer -->", "themes/rmodels/templates/page.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/rmodels/templates/page.html.twig");
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
