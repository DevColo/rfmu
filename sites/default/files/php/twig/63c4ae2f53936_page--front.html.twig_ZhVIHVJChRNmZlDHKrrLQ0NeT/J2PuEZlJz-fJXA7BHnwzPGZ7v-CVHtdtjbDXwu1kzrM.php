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

/* themes/contrib/showcase_lite/templates/page--front.html.twig */
class __TwigTemplate_4742ef4fc6d742f97fec3a255ddbcb556fa1949f1db58a59b67b54c35dca6200 extends \Twig\Template
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
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 75)) {
            // line 76
            echo "  ";
            // line 77
            echo "  <div class=\"clearfix slideout ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideout_background_color"] ?? null), 77, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
    ";
            // line 79
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 85
            echo "  </div>
  ";
            // line 87
            echo "
  ";
            // line 89
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-align-justify\"></i></button>
  ";
        }
        // line 92
        echo "
";
        // line 94
        echo "<div class=\"page-container\">

  ";
        // line 96
        if (((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 96) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 96)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 96)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 96)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 96)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 96)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 96))) {
            // line 97
            echo "    ";
            // line 98
            echo "    <div class=\"header-container\">

      ";
            // line 100
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 100) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 100))) {
                // line 101
                echo "        ";
                // line 102
                echo "        <div class=\"clearfix header-top-highlighted ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null), 102, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 103
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null), 103, $this->source), "html", null, true);
                echo "\">
            ";
                // line 105
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
              ";
                // line 106
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 107
                    echo "                data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null), 107, $this->source), "html", null, true);
                    echo "\"
              ";
                }
                // line 108
                echo ">
              <div class=\"row\">
                ";
                // line 110
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 110)) {
                    // line 111
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null), 111, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 113
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 114
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 117
                    echo "                  </div>
                ";
                }
                // line 119
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 119)) {
                    // line 120
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null), 120, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 122
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 123
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 126
                    echo "                  </div>
                ";
                }
                // line 128
                echo "              </div>
            </div>
            ";
                // line 131
                echo "          </div>
        </div>
        ";
                // line 134
                echo "      ";
            }
            // line 135
            echo "
      ";
            // line 136
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 136) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 136))) {
                // line 137
                echo "        ";
                // line 138
                echo "        <div class=\"clearfix header-top ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null), 138, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 139
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null), 139, $this->source), "html", null, true);
                echo "\">
            ";
                // line 141
                echo "            <div class=\"clearfix header-top__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
              ";
                // line 142
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 143
                    echo "                data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null), 143, $this->source), "html", null, true);
                    echo "\"
              ";
                }
                // line 144
                echo ">
              <div class=\"row\">
                ";
                // line 146
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 146)) {
                    // line 147
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null), 147, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 149
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 150
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 153
                    echo "                  </div>
                ";
                }
                // line 155
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 155)) {
                    // line 156
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null), 156, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 158
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 159
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 162
                    echo "                  </div>
                ";
                }
                // line 164
                echo "              </div>
            </div>
            ";
                // line 167
                echo "          </div>
        </div>
        ";
                // line 170
                echo "      ";
            }
            // line 171
            echo "
      ";
            // line 172
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 172) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 172)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 172))) {
                // line 173
                echo "        ";
                // line 174
                echo "        <header role=\"banner\" class=\"clearfix header ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null), 174, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null), 174, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null), 174, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 175
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null), 175, $this->source), "html", null, true);
                echo "\">
            ";
                // line 177
                echo "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                // line 179
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 179)) {
                    // line 180
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null), 180, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 182
                    echo "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 183
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 186
                    echo "                  </div>
                ";
                }
                // line 188
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 188)) {
                    // line 189
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null), 189, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 191
                    echo "                    <div class=\"clearfix header__section header-first\">
                      ";
                    // line 192
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 195
                    echo "                  </div>
                ";
                }
                // line 197
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 197)) {
                    // line 198
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null), 198, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 200
                    echo "                    <div class=\"clearfix header__section header-second\">
                      ";
                    // line 201
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 204
                    echo "                  </div>
                ";
                }
                // line 206
                echo "              </div>
            </div>
            ";
                // line 209
                echo "          </div>
          ";
                // line 210
                if ((($context["post_progress_status"] ?? null) == "enabled")) {
                    // line 211
                    echo "            ";
                    // line 212
                    echo "            <div class=\"post-progress\">
              <div class=\"post-progress__bar\"></div>
            </div>
            ";
                    // line 216
                    echo "          ";
                }
                // line 217
                echo "        </header>
        ";
                // line 219
                echo "      ";
            }
            // line 220
            echo "
    </div>
    ";
            // line 223
            echo "  ";
        }
        // line 224
        echo "
  ";
        // line 225
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 225)) {
            // line 226
            echo "    ";
            // line 227
            echo "    <div class=\"clearfix banner ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null), 227, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 228
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null), 228, $this->source), "html", null, true);
            echo "\">
        ";
            // line 230
            echo "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"banner__section\">
                ";
            // line 234
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 234), 234, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 240
            echo "      </div>
    </div>
    ";
            // line 243
            echo "  ";
        }
        // line 244
        echo "
  ";
        // line 246
        echo "  <div id=\"page-start\" class=\"clearfix page-start\"></div>

  ";
        // line 248
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 248)) {
            // line 249
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 253
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 253), 253, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 259
        echo "
  ";
        // line 260
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 260)) {
            // line 261
            echo "    ";
            // line 262
            echo "    <div class=\"clearfix content-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null), 262, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 263
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null), 263, $this->source), "html", null, true);
            echo "\">
        ";
            // line 265
            echo "        <div class=\"clearfix content-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 266
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 267
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null), 267, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 268
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top__section\">
                ";
            // line 272
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 278
            echo "      </div>
    </div>
    ";
            // line 281
            echo "  ";
        }
        // line 282
        echo "
  ";
        // line 283
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 283)) {
            // line 284
            echo "    ";
            // line 285
            echo "    <div class=\"clearfix content-top-highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null), 285, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_separator"] ?? null), 285, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 286
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null), 286, $this->source), "html", null, true);
            echo "\">
        ";
            // line 288
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 289
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 290
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null), 290, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 291
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 295
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 295), 295, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 301
            echo "      </div>
    </div>
    ";
            // line 304
            echo "  ";
        }
        // line 305
        echo "
  ";
        // line 306
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "media_background_first", [], "any", false, false, true, 306) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "media_background_second", [], "any", false, false, true, 306))) {
            // line 307
            echo "    ";
            // line 308
            echo "    <div class=\"clearfix media-background ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_background_color"] ?? null), 308, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_separator"] ?? null), 308, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["media_background_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["media_background_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      ";
            // line 310
            echo "      <div class=\"media-background-transparent-bg\"></div>
      ";
            // line 312
            echo "      <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_layout_container"] ?? null), 312, $this->source), "html", null, true);
            echo "\">
        ";
            // line 314
            echo "        <div class=\"clearfix media-background__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["media_background_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 315
            if ((($context["media_background_animations"] ?? null) == "enabled")) {
                // line 316
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_animation_effect"] ?? null), 316, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 317
            echo ">
          <div class=\"row\">
            ";
            // line 319
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "media_background_first", [], "any", false, false, true, 319)) {
                // line 320
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_first_grid_class"] ?? null), 320, $this->source), "html", null, true);
                echo "\">
                ";
                // line 322
                echo "                <div class=\"clearfix media-background__section media-background-first\">
                  ";
                // line 323
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "media_background_first", [], "any", false, false, true, 323), 323, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 326
                echo "              </div>
            ";
            }
            // line 328
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "media_background_second", [], "any", false, false, true, 328)) {
                // line 329
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_second_grid_class"] ?? null), 329, $this->source), "html", null, true);
                echo "\">
                ";
                // line 331
                echo "                <div class=\"clearfix media-background__section media-background-second\">
                  ";
                // line 332
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "media_background_second", [], "any", false, false, true, 332), 332, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 335
                echo "              </div>
            ";
            }
            // line 337
            echo "          </div>
        </div>
        ";
            // line 340
            echo "      </div>
    </div>
    ";
            // line 343
            echo "  ";
        }
        // line 344
        echo "
  ";
        // line 346
        echo "  <div class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null), 346, $this->source), "html", null, true);
        echo "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 350
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null), 350, $this->source), "html", null, true);
        echo "\">
            ";
        // line 352
        echo "            <div class=\"clearfix main-content__section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
              ";
        // line 353
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 354
            echo "                data-animate-effect=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null), 354, $this->source), "html", null, true);
            echo "\"
              ";
        }
        // line 355
        echo ">
              ";
        // line 356
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 356)) {
            // line 357
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 357), 357, $this->source), "html", null, true);
            echo "
              ";
        }
        // line 359
        echo "            </div>
            ";
        // line 361
        echo "          </section>
          ";
        // line 362
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 362)) {
            // line 363
            echo "            <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null), 363, $this->source), "html", null, true);
            echo "\">
              ";
            // line 365
            echo "              <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 366
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 367
                echo "                  data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null), 367, $this->source), "html", null, true);
                echo "\"
                ";
            }
            // line 368
            echo ">
                ";
            // line 369
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 369), 369, $this->source), "html", null, true);
            echo "
              </section>
              ";
            // line 372
            echo "            </aside>
          ";
        }
        // line 374
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 374)) {
            // line 375
            echo "            <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null), 375, $this->source), "html", null, true);
            echo "\">
              ";
            // line 377
            echo "              <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 378
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 379
                echo "                  data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null), 379, $this->source), "html", null, true);
                echo "\"
                ";
            }
            // line 380
            echo ">
                ";
            // line 381
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 381), 381, $this->source), "html", null, true);
            echo "
              </section>
              ";
            // line 384
            echo "            </aside>
          ";
        }
        // line 386
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 391
        echo "
  ";
        // line 392
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 392) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 392))) {
            // line 393
            echo "    ";
            // line 394
            echo "    <div class=\"clearfix content-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null), 394, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null), 394, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 395
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null), 395, $this->source), "html", null, true);
            echo "\">
        ";
            // line 397
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 398
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 399
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null), 399, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 400
            echo ">
          <div class=\"row\">
            ";
            // line 402
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 402)) {
                // line 403
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null), 403, $this->source), "html", null, true);
                echo "\">
                ";
                // line 405
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 406
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 406), 406, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 409
                echo "              </div>
            ";
            }
            // line 411
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 411)) {
                // line 412
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null), 412, $this->source), "html", null, true);
                echo "\">
                ";
                // line 414
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 415
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 415), 415, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 418
                echo "              </div>
            ";
            }
            // line 420
            echo "          </div>
        </div>
        ";
            // line 423
            echo "      </div>
    </div>
    ";
            // line 426
            echo "  ";
        }
        // line 427
        echo "
  ";
        // line 428
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 428)) {
            // line 429
            echo "    ";
            // line 430
            echo "    <div class=\"clearfix featured-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null), 430, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null), 430, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 431
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null), 431, $this->source), "html", null, true);
            echo "\">
        ";
            // line 433
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 434
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 435
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null), 435, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 436
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 440
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 440), 440, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 446
            echo "      </div>
    </div>
    ";
            // line 449
            echo "  ";
        }
        // line 450
        echo "
  ";
        // line 451
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 451)) {
            // line 452
            echo "    ";
            // line 453
            echo "    <div class=\"clearfix featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null), 453, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null), 453, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 454
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null), 454, $this->source), "html", null, true);
            echo "\">
        ";
            // line 456
            echo "        <div class=\"clearfix featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 457
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 458
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null), 458, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 459
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 463
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 463), 463, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 469
            echo "      </div>
    </div>
    ";
            // line 472
            echo "  ";
        }
        // line 473
        echo "
  ";
        // line 474
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 474)) {
            // line 475
            echo "    ";
            // line 476
            echo "    <div class=\"clearfix featured-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null), 476, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null), 476, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 477
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null), 477, $this->source), "html", null, true);
            echo "\">
        ";
            // line 479
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 480
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 481
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null), 481, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 482
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 486
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 486), 486, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 492
            echo "      </div>
    </div>
    ";
            // line 495
            echo "  ";
        }
        // line 496
        echo "
  ";
        // line 497
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 497)) {
            // line 498
            echo "    ";
            // line 499
            echo "    <div class=\"clearfix sub-featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null), 499, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null), 499, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 500
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null), 500, $this->source), "html", null, true);
            echo "\">
        ";
            // line 502
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 503
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 504
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null), 504, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 505
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 509
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 509), 509, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 515
            echo "      </div>
    </div>
    ";
            // line 518
            echo "  ";
        }
        // line 519
        echo "
  ";
        // line 520
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 520)) {
            // line 521
            echo "    ";
            // line 522
            echo "    <div class=\"clearfix highlighted-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null), 522, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null), 522, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 523
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null), 523, $this->source), "html", null, true);
            echo "\">
        ";
            // line 525
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 526
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 527
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null), 527, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 528
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 532
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 532), 532, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 538
            echo "      </div>
    </div>
    ";
            // line 541
            echo "  ";
        }
        // line 542
        echo "
  ";
        // line 543
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 543)) {
            // line 544
            echo "    ";
            // line 545
            echo "    <div class=\"clearfix highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null), 545, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null), 545, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 546
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null), 546, $this->source), "html", null, true);
            echo "\">
        ";
            // line 548
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 549
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 550
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null), 550, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 551
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 555
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 555), 555, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 561
            echo "      </div>
    </div>
    ";
            // line 564
            echo "  ";
        }
        // line 565
        echo "
  ";
        // line 566
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 566) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 566))) {
            // line 567
            echo "    ";
            // line 568
            echo "    <div class=\"clearfix footer-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null), 568, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null), 568, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null), 568, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 569
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null), 569, $this->source), "html", null, true);
            echo "\">
        ";
            // line 571
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 572
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 573
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null), 573, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 574
            echo ">
          <div class=\"row\">
            ";
            // line 576
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 576)) {
                // line 577
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null), 577, $this->source), "html", null, true);
                echo "\">
                ";
                // line 579
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 580
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 580), 580, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 583
                echo "              </div>
            ";
            }
            // line 585
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 585)) {
                // line 586
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null), 586, $this->source), "html", null, true);
                echo "\">
                ";
                // line 588
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 589
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 589), 589, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 592
                echo "              </div>
            ";
            }
            // line 594
            echo "          </div>
        </div>
        ";
            // line 597
            echo "      </div>
    </div>
    ";
            // line 600
            echo "  ";
        }
        // line 601
        echo "
  ";
        // line 602
        if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 602) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 602)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 602)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 602)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 602))) {
            // line 603
            echo "    ";
            // line 604
            echo "    <footer class=\"clearfix footer ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null), 604, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null), 604, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_region"] ?? null), 604, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
     <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://preview.colorlib.com/theme/bft/bootstrap-footer-09/css/style.css\">
<footer class=\"footer-16371\">
<!-- <div class=\"container\"> -->
<!-- <div class=\"row justify-content-center\"> -->
<div class=\"text-center\">
<div class=\"footer-site-logo mb-4\">
<a href=\"#\" style=\"color:#fff;\">Rwanda Fashion Models Union</a>
</div>
<ul class=\"list-unstyled nav-links mb-5\">
<li><a href=\"";
            // line 615
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 615, $this->source), "html", null, true);
            echo "\"style=\"color:#fff;\">Home</a></li>
<li><a href=\"";
            // line 616
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 616, $this->source), "html", null, true);
            echo "/blog-landing-page\"style=\"color:#fff;\">News</a></li>
<li><a href=\"";
            // line 617
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 617, $this->source), "html", null, true);
            echo "/our-agencies\"style=\"color:#fff;\">Agencies</a></li>
<li><a href=\"#\"style=\"color:#fff;\">Partners</a></li>
<li><a href=\"#\"style=\"color:#fff;\">Our Team</a></li>
<li><a href=\"";
            // line 620
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 620, $this->source), "html", null, true);
            echo "/about-us\"style=\"color:#fff;\">About Us</a></li>
<!-- <li><a href=\"#\">Contact Us</a></li> -->
</ul>
<div class=\"social mb-4\">
<h3>Stay in touch</h3>
<ul class=\"list-unstyled\">
<li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
</ul>
</div>
<div class=\"copyright\">
<p class=\"mb-0\"><small>© 2023 All Rights Reserved.</small></p>
</div>
</div>
<!-- </div> -->
<!-- </div> -->
</footer>
    </footer>
    ";
            // line 640
            echo "  ";
        }
        // line 641
        echo "
  ";
        // line 642
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 642)) {
            // line 643
            echo "    ";
            // line 644
            echo "    <div class=\"clearfix footer-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null), 644, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null), 644, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_region"] ?? null), 644, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      ";
            // line 645
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-bottom-to-top-enabled"))) {
                // line 646
                echo "        <div class=\"to-top\"><i class=\"fa ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null), 646, $this->source), "html", null, true);
                echo "\"></i></div>
      ";
            }
            // line 648
            echo "      <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null), 648, $this->source), "html", null, true);
            echo "\">
        ";
            // line 650
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 654
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 654), 654, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 660
            echo "      </div>
    </div>
    ";
            // line 663
            echo "  ";
        }
        // line 664
        echo "
  ";
        // line 665
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 665) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 665))) {
            // line 666
            echo "    ";
            // line 667
            echo "    <div class=\"clearfix subfooter ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null), 667, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null), 667, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_region"] ?? null), 667, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      ";
            // line 668
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "subfooter-to-top-enabled"))) {
                // line 669
                echo "        <div class=\"to-top\"><i class=\"fa ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null), 669, $this->source), "html", null, true);
                echo "\"></i></div>
      ";
            }
            // line 671
            echo "      <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null), 671, $this->source), "html", null, true);
            echo "\">
        ";
            // line 673
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 675
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 675)) {
                // line 676
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null), 676, $this->source), "html", null, true);
                echo "\">
                ";
                // line 678
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 679
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 679), 679, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 682
                echo "              </div>
            ";
            }
            // line 684
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 684)) {
                // line 685
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null), 685, $this->source), "html", null, true);
                echo "\">
                ";
                // line 687
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 688
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 688), 688, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 691
                echo "              </div>
            ";
            }
            // line 693
            echo "          </div>
        </div>
        ";
            // line 696
            echo "      </div>
    </div>
    ";
            // line 699
            echo "  ";
        }
        // line 700
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/showcase_lite/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1455 => 700,  1452 => 699,  1448 => 696,  1444 => 693,  1440 => 691,  1435 => 688,  1432 => 687,  1427 => 685,  1424 => 684,  1420 => 682,  1415 => 679,  1412 => 678,  1407 => 676,  1405 => 675,  1401 => 673,  1396 => 671,  1390 => 669,  1388 => 668,  1377 => 667,  1375 => 666,  1373 => 665,  1370 => 664,  1367 => 663,  1363 => 660,  1355 => 654,  1349 => 650,  1344 => 648,  1338 => 646,  1336 => 645,  1325 => 644,  1323 => 643,  1321 => 642,  1318 => 641,  1315 => 640,  1293 => 620,  1287 => 617,  1283 => 616,  1279 => 615,  1258 => 604,  1256 => 603,  1254 => 602,  1251 => 601,  1248 => 600,  1244 => 597,  1240 => 594,  1236 => 592,  1231 => 589,  1228 => 588,  1223 => 586,  1220 => 585,  1216 => 583,  1211 => 580,  1208 => 579,  1203 => 577,  1201 => 576,  1197 => 574,  1191 => 573,  1189 => 572,  1184 => 571,  1180 => 569,  1169 => 568,  1167 => 567,  1165 => 566,  1162 => 565,  1159 => 564,  1155 => 561,  1147 => 555,  1141 => 551,  1135 => 550,  1133 => 549,  1128 => 548,  1124 => 546,  1115 => 545,  1113 => 544,  1111 => 543,  1108 => 542,  1105 => 541,  1101 => 538,  1093 => 532,  1087 => 528,  1081 => 527,  1079 => 526,  1074 => 525,  1070 => 523,  1061 => 522,  1059 => 521,  1057 => 520,  1054 => 519,  1051 => 518,  1047 => 515,  1039 => 509,  1033 => 505,  1027 => 504,  1025 => 503,  1020 => 502,  1016 => 500,  1007 => 499,  1005 => 498,  1003 => 497,  1000 => 496,  997 => 495,  993 => 492,  985 => 486,  979 => 482,  973 => 481,  971 => 480,  966 => 479,  962 => 477,  953 => 476,  951 => 475,  949 => 474,  946 => 473,  943 => 472,  939 => 469,  931 => 463,  925 => 459,  919 => 458,  917 => 457,  912 => 456,  908 => 454,  899 => 453,  897 => 452,  895 => 451,  892 => 450,  889 => 449,  885 => 446,  877 => 440,  871 => 436,  865 => 435,  863 => 434,  858 => 433,  854 => 431,  845 => 430,  843 => 429,  841 => 428,  838 => 427,  835 => 426,  831 => 423,  827 => 420,  823 => 418,  818 => 415,  815 => 414,  810 => 412,  807 => 411,  803 => 409,  798 => 406,  795 => 405,  790 => 403,  788 => 402,  784 => 400,  778 => 399,  776 => 398,  771 => 397,  767 => 395,  758 => 394,  756 => 393,  754 => 392,  751 => 391,  745 => 386,  741 => 384,  736 => 381,  733 => 380,  727 => 379,  725 => 378,  718 => 377,  713 => 375,  710 => 374,  706 => 372,  701 => 369,  698 => 368,  692 => 367,  690 => 366,  683 => 365,  678 => 363,  676 => 362,  673 => 361,  670 => 359,  664 => 357,  662 => 356,  659 => 355,  653 => 354,  651 => 353,  644 => 352,  640 => 350,  632 => 346,  629 => 344,  626 => 343,  622 => 340,  618 => 337,  614 => 335,  609 => 332,  606 => 331,  601 => 329,  598 => 328,  594 => 326,  589 => 323,  586 => 322,  581 => 320,  579 => 319,  575 => 317,  569 => 316,  567 => 315,  562 => 314,  557 => 312,  554 => 310,  545 => 308,  543 => 307,  541 => 306,  538 => 305,  535 => 304,  531 => 301,  523 => 295,  517 => 291,  511 => 290,  509 => 289,  504 => 288,  500 => 286,  491 => 285,  489 => 284,  487 => 283,  484 => 282,  481 => 281,  477 => 278,  469 => 272,  463 => 268,  457 => 267,  455 => 266,  450 => 265,  446 => 263,  439 => 262,  437 => 261,  435 => 260,  432 => 259,  423 => 253,  417 => 249,  415 => 248,  411 => 246,  408 => 244,  405 => 243,  401 => 240,  393 => 234,  387 => 230,  383 => 228,  376 => 227,  374 => 226,  372 => 225,  369 => 224,  366 => 223,  362 => 220,  359 => 219,  356 => 217,  353 => 216,  348 => 212,  346 => 211,  344 => 210,  341 => 209,  337 => 206,  333 => 204,  328 => 201,  325 => 200,  320 => 198,  317 => 197,  313 => 195,  308 => 192,  305 => 191,  300 => 189,  297 => 188,  293 => 186,  288 => 183,  285 => 182,  280 => 180,  278 => 179,  274 => 177,  270 => 175,  259 => 174,  257 => 173,  255 => 172,  252 => 171,  249 => 170,  245 => 167,  241 => 164,  237 => 162,  232 => 159,  229 => 158,  224 => 156,  221 => 155,  217 => 153,  212 => 150,  209 => 149,  204 => 147,  202 => 146,  198 => 144,  192 => 143,  190 => 142,  185 => 141,  181 => 139,  174 => 138,  172 => 137,  170 => 136,  167 => 135,  164 => 134,  160 => 131,  156 => 128,  152 => 126,  147 => 123,  144 => 122,  139 => 120,  136 => 119,  132 => 117,  127 => 114,  124 => 113,  119 => 111,  117 => 110,  113 => 108,  107 => 107,  105 => 106,  100 => 105,  96 => 103,  89 => 102,  87 => 101,  85 => 100,  81 => 98,  79 => 97,  77 => 96,  73 => 94,  70 => 92,  66 => 89,  63 => 87,  60 => 85,  54 => 81,  50 => 79,  43 => 77,  41 => 76,  39 => 75,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Showcase Lite's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.slideout: Items for the Slideout region.
 * - page.header_top_highlighted_first: Items for the Header Top Highlighted First region.
 * - page.header_top_highlighted_second: Items for the Header Top Highlighted Second region.
 * - page.header_top_first: Items for the Header Top First region.
 * - page.header_top_second: Items for the Header Top Second region.
 * - page.header_first: Items for the Header First region.
 * - page.header: Items for the Header Second region.
 * - page.header_third: Items for the Header Third region.
 * - page.banner: Items for the Banner region.
 * - page.content_top: Items for the Content Top region.
 * - page.content_top_highlighted: Items for the Content Top Highlighted region.
 * - page.content: Items for the Content region.
 * - page.sidebar_first: Items for the First Sidebar region.
 * - page.sidebar_second: Items for the Second Sidebar region.
 * - page.content_bottom_first: Items for the Content Bottom First region.
 * - page.content_bottom_second: Items for the Content Bottom Second region.
 * - page.featured_top: Items for the Featured Top region.
 * - page.featured: Items for the Featured region.
 * - page.featured_bottom: Items for the Featured Bottom region.
 * - page.sub_featured: Items for the Sub Featured region.
 * - page.breadcrumb: Items for the Breadcrumb region.
 * - page.highlighted: Items for the Highlighted region.
 * - page.media_background_first: Items for the Highlighted Bottom First region.
 * - page.media_background_second: Items for the Highlighted Bottom Second region.
 * - page.footer_top_first: Items for the Footer Top First region.
 * - page.footer_top_second: Items for the Footer Top Second region.
 * - page.footer_first: Items for the Footer First region.
 * - page.footer_second: Items for the Footer Second region.
 * - page.footer_third: Items for the Footer Third region.
 * - page.footer_fourth: Items for the Footer Fourth region.
 * - page.footer_fifth: Items for the Footer Fifth region.
 * - page.footer_bottom: Items for the Footer Bottom region.
 * - page.sub_footer_first: Items for the Subfooter First region.
 * - page.footer: Items for the Subfooter Second region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% if page.slideout %}
  {# slideout #}
  <div class=\"clearfix slideout {{ slideout_background_color }}{{ (slideout_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (slideout_region_paddings) ? ' region--no-paddings' : '' }}\">
    {# slideout__container #}
    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        {{ page.slideout }}
      </div>
    </div>
    {# EOF:slideout__container #}
  </div>
  {# EOF: slideout #}

  {# EOF: slideout-toggle #}
  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-align-justify\"></i></button>
  {# EOF: slideout-toggle #}
{% endif %}

{# page-container #}
<div class=\"page-container\">

  {% if page.header_top_first or page.header_top_second or page.header_first or page.header or page.header_third or page.header_top_highlighted_first or page.header_top_highlighted_second %}
    {# header-container #}
    <div class=\"header-container\">

      {% if page.header_top_highlighted_first or page.header_top_highlighted_second %}
        {# header_top_highlighted #}
        <div class=\"clearfix header-top-highlighted {{ header_top_highlighted_background_color }}{{ (header_top_highlighted_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (header_top_highlighted_region_paddings) ? ' region--no-paddings' : '' }}\">
          <div class=\"{{ header_top_highlighted_layout_container }}\">
            {# header_top_highlighted__container #}
            <div class=\"clearfix header-top-highlighted__container{{ (header_top_highlighted_animations == \"enabled\") ? ' fade' : '' }}\"
              {% if header_top_highlighted_animations == \"enabled\" %}
                data-animate-effect=\"{{ header_top_highlighted_animation_effect }}\"
              {% endif %}>
              <div class=\"row\">
                {% if page.header_top_highlighted_first %}
                  <div class=\"{{ header_top_highlighted_first_grid_class }}\">
                    {# header-top-highlighted-first #}
                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      {{ page.header_top_highlighted_first }}
                    </div>
                    {# EOF:header-top-highlighted-first #}
                  </div>
                {% endif %}
                {% if page.header_top_highlighted_second %}
                  <div class=\"{{ header_top_highlighted_second_grid_class }}\">
                    {# header-top-highlighted-second #}
                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      {{ page.header_top_highlighted_second }}
                    </div>
                    {# EOF:header-top-highlighted-second #}
                  </div>
                {% endif %}
              </div>
            </div>
            {# EOF:header-top-highlighted__container #}
          </div>
        </div>
        {# EOF: header-top-highlighted #}
      {% endif %}

      {% if page.header_top_first or page.header_top_second %}
        {# header-top #}
        <div class=\"clearfix header-top {{ header_top_background_color }}{{ (header_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (header_top_region_paddings) ? ' region--no-paddings' : '' }}\">
          <div class=\"{{ header_top_layout_container }}\">
            {# header-top__container #}
            <div class=\"clearfix header-top__container{{ (header_top_animations == \"enabled\") ? ' fade' : '' }}\"
              {% if header_top_animations == \"enabled\" %}
                data-animate-effect=\"{{ header_top_animation_effect }}\"
              {% endif %}>
              <div class=\"row\">
                {% if page.header_top_first %}
                  <div class=\"{{ header_top_first_grid_class }}\">
                    {# header-top-first #}
                    <div class=\"clearfix header-top__section header-top-first\">
                      {{ page.header_top_first }}
                    </div>
                    {# EOF:header-top-first #}
                  </div>
                {% endif %}
                {% if page.header_top_second %}
                  <div class=\"{{ header_top_second_grid_class }}\">
                    {# header-top-second #}
                    <div class=\"clearfix header-top__section header-top-second\">
                      {{ page.header_top_second }}
                    </div>
                    {# EOF:header-top-second #}
                  </div>
                {% endif %}
              </div>
            </div>
            {# EOF: header-top__container #}
          </div>
        </div>
        {# EOF: header-top #}
      {% endif %}

      {% if page.header_first or page.header or page.header_third %}
        {# header #}
        <header role=\"banner\" class=\"clearfix header {{ header_background_color }} {{ header_layout_container_class }} {{ header_layout_columns_class }}{{ (header_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (header_region_paddings) ? ' region--no-paddings' : '' }}\">
          <div class=\"{{ header_layout_container }}\">
            {# header__container #}
            <div class=\"clearfix header__container\">
              <div class=\"row\">
                {% if page.header_third %}
                  <div class=\"{{ header_third_grid_class }}\">
                    {# header-third #}
                    <div class=\"clearfix header__section header-third\">
                      {{ page.header_third }}
                    </div>
                    {# EOF:header-third #}
                  </div>
                {% endif %}
                {% if page.header_first %}
                  <div class=\"{{ header_first_grid_class }}\">
                    {# header-first #}
                    <div class=\"clearfix header__section header-first\">
                      {{ page.header_first }}
                    </div>
                    {# EOF:header-first #}
                  </div>
                {% endif %}
                {% if page.header %}
                  <div class=\"{{ header_second_grid_class }}\">
                    {# header-second #}
                    <div class=\"clearfix header__section header-second\">
                      {{ page.header }}
                    </div>
                    {# EOF:header-second #}
                  </div>
                {% endif %}
              </div>
            </div>
            {# EOF: header__container #}
          </div>
          {% if post_progress_status == \"enabled\" %}
            {# post-progress #}
            <div class=\"post-progress\">
              <div class=\"post-progress__bar\"></div>
            </div>
            {# EOF: post-progress #}
          {% endif %}
        </header>
        {# EOF: header #}
      {% endif %}

    </div>
    {# EOF: header-container #}
  {% endif %}

  {% if page.banner %}
    {# banner #}
    <div class=\"clearfix banner {{ banner_background_color }}{{ (banner_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (banner_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ banner_layout_container }}\">
        {# banner__container #}
        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"banner__section\">
                {{ page.banner }}
              </div>
            </div>
          </div>
        </div>
        {# EOF: banner__container #}
      </div>
    </div>
    {# EOF:banner #}
  {% endif %}

  {# page-start #}
  <div id=\"page-start\" class=\"clearfix page-start\"></div>

  {% if page.system_messages %}
    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            {{ page.system_messages }}
          </div>
        </div>
      </div>
    </div>
  {% endif %}

  {% if page.content_top %}
    {# content-top #}
    <div class=\"clearfix content-top {{ content_top_background_color }}{{ (content_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (content_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ content_top_layout_container }}\">
        {# content-top__container #}
        <div class=\"clearfix content-top__container{{ (content_top_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if content_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ content_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top__section\">
                {{ page.content_top }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:content-top__container #}
      </div>
    </div>
    {# EOF: content-top #}
  {% endif %}

  {% if page.content_top_highlighted %}
    {# content-top-highlighted #}
    <div class=\"clearfix content-top-highlighted {{ content_top_highlighted_background_color }} {{ content_top_highlighted_separator }}{{ (content_top_highlighted_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (content_top_highlighted_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ content_top_highlighted_layout_container }}\">
        {# content-top-highlighted__container #}
        <div class=\"clearfix content-top-highlighted__container{{ (content_top_highlighted_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if content_top_highlighted_animations == \"enabled\" %}
            data-animate-effect=\"{{ content_top_highlighted_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top-highlighted__section\">
                {{ page.content_top_highlighted }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:content-top-highlighted__container #}
      </div>
    </div>
    {# EOF: content-top-highlighted #}
  {% endif %}

  {% if page.media_background_first or page.media_background_second %}
    {# media-background #}
    <div class=\"clearfix media-background {{ media_background_background_color }} {{ media_background_separator }}{{ (media_background_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (media_background_region_paddings) ? ' region--no-paddings' : '' }}\">
      {# media-background-transparent-bg #}
      <div class=\"media-background-transparent-bg\"></div>
      {# EOF:media-background-transparent-bg #}
      <div class=\"{{ media_background_layout_container }}\">
        {# media-background__container #}
        <div class=\"clearfix media-background__container{{ (media_background_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if media_background_animations == \"enabled\" %}
            data-animate-effect=\"{{ media_background_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            {% if page.media_background_first %}
              <div class=\"{{ media_background_first_grid_class }}\">
                {# media-background-first #}
                <div class=\"clearfix media-background__section media-background-first\">
                  {{ page.media_background_first }}
                </div>
                {# EOF:media-background-first #}
              </div>
            {% endif %}
            {% if page.media_background_second %}
              <div class=\"{{ media_background_second_grid_class }}\">
                {# media-background-second #}
                <div class=\"clearfix media-background__section media-background-second\">
                  {{ page.media_background_second }}
                </div>
                {# EOF:media-background-second #}
              </div>
            {% endif %}
          </div>
        </div>
        {# EOF:media-background__container #}
      </div>
    </div>
    {# EOF: media-background #}
  {% endif %}

  {# main-content #}
  <div class=\"clearfix main-content region--dark-typography region--white-background  {{ main_content_separator }}\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"{{ main_grid_class }}\">
            {# main #}
            <div class=\"clearfix main-content__section{{ (main_content_animations == \"enabled\") ? ' fade' : '' }}{{ (main_content_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (main_content_region_paddings) ? ' region--no-paddings' : '' }}\"
              {% if main_content_animations == \"enabled\" %}
                data-animate-effect=\"{{ main_content_animation_effect }}\"
              {% endif %}>
              {% if page.content %}
                {{ page.content }}
              {% endif %}
            </div>
            {# EOF:main #}
          </section>
          {% if page.sidebar_first %}
            <aside class=\"{{ sidebar_first_grid_class }}\">
              {# sidebar-first #}
              <section class=\"sidebar__section sidebar-first clearfix{{ (sidebar_first_animations == \"enabled\") ? ' fade' : '' }}{{ (sidebar_first_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (sidebar_first_region_paddings) ? ' region--no-paddings' : '' }}\"
                {% if sidebar_first_animations == \"enabled\" %}
                  data-animate-effect=\"{{ sidebar_first_animation_effect }}\"
                {% endif %}>
                {{ page.sidebar_first }}
              </section>
              {# EOF:sidebar-first #}
            </aside>
          {% endif %}
          {% if page.sidebar_second %}
            <aside class=\"{{ sidebar_second_grid_class }}\">
              {# sidebar-second #}
              <section class=\"sidebar__section sidebar-second clearfix{{ (sidebar_second_animations == \"enabled\") ? ' fade' : '' }}{{ (sidebar_second_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (sidebar_second_region_paddings) ? ' region--no-paddings' : '' }}\"
                {% if sidebar_second_animations == \"enabled\" %}
                  data-animate-effect=\"{{ sidebar_second_animation_effect }}\"
                {% endif %}>
                {{ page.sidebar_second }}
              </section>
              {# EOF:sidebar-second #}
            </aside>
          {% endif %}
        </div>
      </div>
    </div>
  </div>
  {# EOF:main-content #}

  {% if page.content_bottom_first or page.content_bottom_second %}
    {# content-bottom #}
    <div class=\"clearfix content-bottom {{ content_bottom_background_color }} {{ content_bottom_separator }}{{ (content_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (content_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ content_bottom_layout_container }}\">
        {# content-bottom__container #}
        <div class=\"clearfix content-bottom__container{{ (content_bottom_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if content_bottom_animations == \"enabled\" %}
            data-animate-effect=\"{{ content_bottom_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            {% if page.content_bottom_first %}
              <div class=\"{{ content_bottom_first_grid_class }}\">
                {# content-bottom-first #}
                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  {{ page.content_bottom_first }}
                </div>
                {# EOF:content-bottom-first #}
              </div>
            {% endif %}
            {% if page.content_bottom_second %}
              <div class=\"{{ content_bottom_second_grid_class }}\">
                {# content-bottom-second #}
                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  {{ page.content_bottom_second }}
                </div>
                {# EOF:content-bottom-second #}
              </div>
            {% endif %}
          </div>
        </div>
        {# EOF:content-bottom__container #}
      </div>
    </div>
    {# EOF: content-bottom #}
  {% endif %}

  {% if page.featured_top %}
    {# featured-top #}
    <div class=\"clearfix featured-top {{ featured_top_background_color }} {{ featured_top_separator }}{{ (featured_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (featured_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ featured_top_layout_container }}\">
        {# featured-top__container #}
        <div class=\"clearfix featured-top__container{{ (featured_top_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if featured_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ featured_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">
                {{ page.featured_top }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:featured-top__container #}
      </div>
    </div>
    {# EOF: featured-top #}
  {% endif %}

  {% if page.featured %}
    {# featured #}
    <div class=\"clearfix featured {{ featured_background_color }} {{ featured_separator }}{{ (featured_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (featured_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ featured_layout_container }}\">
        {# featured__container #}
        <div class=\"clearfix featured__container{{ (featured_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if featured_animations == \"enabled\" %}
            data-animate-effect=\"{{ featured_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">
                {{ page.featured }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:featured__container #}
      </div>
    </div>
    {# EOF: featured #}
  {% endif %}

  {% if page.featured_bottom %}
    {# featured-bottom #}
    <div class=\"clearfix featured-bottom {{ featured_bottom_background_color }} {{ featured_bottom_separator }}{{ (featured_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (featured_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ featured_bottom_layout_container }}\">
        {# featured-bottom__container #}
        <div class=\"clearfix featured-bottom__container{{ (featured_bottom_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if featured_bottom_animations == \"enabled\" %}
            data-animate-effect=\"{{ featured_bottom_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">
                {{ page.featured_bottom }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:featured-bottom__container #}
      </div>
    </div>
    {# EOF: featured-bottom #}
  {% endif %}

  {% if page.sub_featured %}
    {# sub_featured #}
    <div class=\"clearfix sub-featured {{ sub_featured_background_color }} {{ sub_featured_separator }}{{ (sub_featured_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (sub_featured_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ sub_featured_layout_container }}\">
        {# sub_featured__container #}
        <div class=\"clearfix sub-featured__container{{ (sub_featured_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if sub_featured_animations == \"enabled\" %}
            data-animate-effect=\"{{ sub_featured_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">
                {{ page.sub_featured }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:sub_featured__container #}
      </div>
    </div>
    {# EOF: sub_featured #}
  {% endif %}

  {% if page.highlighted_top %}
    {# highlighted-top #}
    <div class=\"clearfix highlighted-top {{ highlighted_top_background_color }} {{ highlighted_top_separator }}{{ (highlighted_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (highlighted_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ highlighted_top_layout_container }}\">
        {# highlighted-top__container #}
        <div class=\"clearfix highlighted-top__container{{ (highlighted_top_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if highlighted_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ highlighted_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">
                {{ page.highlighted_top }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:highlighted-top__container #}
      </div>
    </div>
    {# EOF: highlighted-top #}
  {% endif %}

  {% if page.highlighted %}
    {# highlighted #}
    <div class=\"clearfix highlighted {{ highlighted_background_color }} {{ highlighted_separator }}{{ (highlighted_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (highlighted_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ highlighted_layout_container }}\">
        {# highlighted__container #}
        <div class=\"clearfix highlighted__container{{ (highlighted_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if highlighted_animations == \"enabled\" %}
            data-animate-effect=\"{{ highlighted_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted__section\">
                {{ page.highlighted }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:highlighted__container #}
      </div>
    </div>
    {# EOF: highlighted #}
  {% endif %}

  {% if page.footer_top_first or page.footer_top_second %}
    {# footer-top #}
    <div class=\"clearfix footer-top {{ footer_top_regions }} {{ footer_top_background_color }} {{ footer_top_separator }}{{ (footer_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (footer_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ footer_top_layout_container }}\">
        {# footer-top__container #}
        <div class=\"clearfix footer-top__container{{ (footer_top_animations == \"enabled\") ? ' fade' : '' }}\"
          {% if footer_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ footer_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            {% if page.footer_top_first %}
              <div class=\"{{ footer_top_first_grid_class }}\">
                {# footer-top-first #}
                <div class=\"clearfix footer-top__section footer-top-first\">
                  {{ page.footer_top_first }}
                </div>
                {# EOF:footer-top-first #}
              </div>
            {% endif %}
            {% if page.footer_top_second %}
              <div class=\"{{ footer_top_second_grid_class }}\">
                {# footer-top-second #}
                <div class=\"clearfix footer-top__section footer-top-second\">
                  {{ page.footer_top_second }}
                </div>
                {# EOF:footer-top-second #}
              </div>
            {% endif %}
          </div>
        </div>
        {# EOF: footer-top__container #}
      </div>
    </div>
    {# EOF: footer-top #}
  {% endif %}

  {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth or page.footer_fifth %}
    {# footer #}
    <footer class=\"clearfix footer {{ footer_background_color }} {{ footer_separator }} {{ scroll_to_top_region }}{{ (footer_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (footer_region_paddings) ? ' region--no-paddings' : '' }}\">
     <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://preview.colorlib.com/theme/bft/bootstrap-footer-09/css/style.css\">
<footer class=\"footer-16371\">
<!-- <div class=\"container\"> -->
<!-- <div class=\"row justify-content-center\"> -->
<div class=\"text-center\">
<div class=\"footer-site-logo mb-4\">
<a href=\"#\" style=\"color:#fff;\">Rwanda Fashion Models Union</a>
</div>
<ul class=\"list-unstyled nav-links mb-5\">
<li><a href=\"{{base_path}}\"style=\"color:#fff;\">Home</a></li>
<li><a href=\"{{base_path}}/blog-landing-page\"style=\"color:#fff;\">News</a></li>
<li><a href=\"{{base_path}}/our-agencies\"style=\"color:#fff;\">Agencies</a></li>
<li><a href=\"#\"style=\"color:#fff;\">Partners</a></li>
<li><a href=\"#\"style=\"color:#fff;\">Our Team</a></li>
<li><a href=\"{{base_path}}/about-us\"style=\"color:#fff;\">About Us</a></li>
<!-- <li><a href=\"#\">Contact Us</a></li> -->
</ul>
<div class=\"social mb-4\">
<h3>Stay in touch</h3>
<ul class=\"list-unstyled\">
<li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
</ul>
</div>
<div class=\"copyright\">
<p class=\"mb-0\"><small>© 2023 All Rights Reserved.</small></p>
</div>
</div>
<!-- </div> -->
<!-- </div> -->
</footer>
    </footer>
    {# EOF footer #}
  {% endif %}

  {% if page.footer_bottom %}
    {# footer-bottom #}
    <div class=\"clearfix footer-bottom {{ footer_bottom_background_color }} {{ footer_bottom_separator }} {{ scroll_to_top_region }}{{ (footer_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (footer_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      {% if scroll_to_top_display and scroll_to_top_region == \"footer-bottom-to-top-enabled\" %}
        <div class=\"to-top\"><i class=\"fa {{ scroll_to_top_icon }}\"></i></div>
      {% endif %}
      <div class=\"{{ footer_bottom_layout_container }}\">
        {# footer-bottom__container #}
        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix footer-bottom__section\">
                {{ page.footer_bottom }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:footer-bottom__container #}
      </div>
    </div>
    {# EOF: footer-bottom #}
  {% endif %}

  {% if page.sub_footer_first or page.footer %}
    {# subfooter #}
    <div class=\"clearfix subfooter {{ subfooter_background_color }} {{ subfooter_separator }} {{ scroll_to_top_region }}{{ (subfooter_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (subfooter_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      {% if scroll_to_top_display and scroll_to_top_region == \"subfooter-to-top-enabled\" %}
        <div class=\"to-top\"><i class=\"fa {{ scroll_to_top_icon }}\"></i></div>
      {% endif %}
      <div class=\"{{ subfooter_layout_container }}\">
        {# subfooter__container #}
        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            {% if page.sub_footer_first %}
              <div class=\"{{ subfooter_first_grid_class }}\">
                {# subfooter-first #}
                <div class=\"clearfix subfooter__section subfooter-first\">
                  {{ page.sub_footer_first }}
                </div>
                {# EOF: subfooter-first #}
              </div>
            {% endif %}
            {% if page.footer %}
              <div class=\"{{ subfooter_second_grid_class }}\">
                {# subfooter-second #}
                <div class=\"clearfix subfooter__section subfooter-second\">
                  {{ page.footer }}
                </div>
                {# EOF: subfooter-second #}
              </div>
            {% endif %}
          </div>
        </div>
        {# EOF: subfooter__container #}
      </div>
    </div>
    {# EOF:subfooter #}
  {% endif %}

</div>
{# EOF: page-container #}
", "themes/contrib/showcase_lite/templates/page--front.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/rfmu/themes/contrib/showcase_lite/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 75);
        static $filters = array("escape" => 77);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
