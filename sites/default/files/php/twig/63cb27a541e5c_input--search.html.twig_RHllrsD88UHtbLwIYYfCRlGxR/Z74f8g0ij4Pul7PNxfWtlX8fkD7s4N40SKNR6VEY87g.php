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

/* themes/rmodels/templates/form/input--search.html.twig */
class __TwigTemplate_7a25c74a3608cfcfe1b5add660f9086dc795c5c079b7acced52009ccacb469ca extends \Twig\Template
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
        // line 15
        echo "<style type=\"text/css\">
.js-form-item.form-item.js-form-type-search.form-item-keys.js-form-item-keys.form-no-label {
    width: 100%;
}

</style>
<input title=\"Enter the terms you wish to search for.\" placeholder=\"find models and agencies\" data-drupal-selector=\"edit-keys\" class=\" form_sea form-search form-element form-element--type-search form-element--api-search\" data-key=\"search_block\" type=\"search\" id=\"edit-keys\" name=\"keys\" value=\"\" maxlength=\"128\">
                              <button type=\"submit\" class=\"seach_icon\"><i class=\"fa fa-search\"></i></button>
";
    }

    public function getTemplateName()
    {
        return "themes/rmodels/templates/form/input--search.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for an 'input' #type form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 *
 * @see template_preprocess_input()
 *
 * @ingroup themeable
 */
#}
<style type=\"text/css\">
.js-form-item.form-item.js-form-type-search.form-item-keys.js-form-item-keys.form-no-label {
    width: 100%;
}

</style>
<input title=\"Enter the terms you wish to search for.\" placeholder=\"find models and agencies\" data-drupal-selector=\"edit-keys\" class=\" form_sea form-search form-element form-element--type-search form-element--api-search\" data-key=\"search_block\" type=\"search\" id=\"edit-keys\" name=\"keys\" value=\"\" maxlength=\"128\">
                              <button type=\"submit\" class=\"seach_icon\"><i class=\"fa fa-search\"></i></button>
", "themes/rmodels/templates/form/input--search.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/rmodels/templates/form/input--search.html.twig");
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
