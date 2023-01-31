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

/* themes/contrib/mediteran/templates/admin/update-last-check.html.twig */
class __TwigTemplate_81b6e176528e69f3b278764d38a797c010411df06b50e1f38b2169450603a197 extends \Twig\Template
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
        // line 14
        echo "<p>
  ";
        // line 15
        if (($context["last"] ?? null)) {
            // line 16
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last checked: @time ago", ["@time" => ($context["time"] ?? null)]));
            echo "
  ";
        } else {
            // line 18
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last checked: never"));
            echo "
  ";
        }
        // line 20
        echo "  (";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 20, $this->source), "html", null, true);
        echo ")
</p>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/mediteran/templates/admin/update-last-check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  50 => 18,  44 => 16,  42 => 15,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the last time update data was checked.
 *
 * Available variables:
 * - last: The timestamp that the site was last checked for updates.
 * - time: The formatted time since the site last checked for updates.
 * - link: A link to check for updates manually.
 *
 * @see template_preprocess_update_last_check()
 */
#}
<p>
  {% if last %}
    {{ 'Last checked: @time ago'|t({'@time': time}) }}
  {% else %}
    {{ 'Last checked: never'|t }}
  {% endif %}
  ({{ link }})
</p>
", "themes/contrib/mediteran/templates/admin/update-last-check.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/contrib/mediteran/templates/admin/update-last-check.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("t" => 16, "escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
