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

/* themes/contrib/himalaya/templates/page.html.twig */
class __TwigTemplate_61085a6e04142ae962e1bb86c5ca6976 extends Template
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
        // line 8
        echo "<div id=\"page-wrapper\" class=\"section with-arrow\">
  <div id=\"page\">
    <header id=\"header\" role=\"banner\" aria-label=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      <nav id=\"navigation\" class=\"margin_bottom\">
        <div class=\"container mean-container\">
          ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 13)) {
            // line 14
            echo "            <div class=\"logo\">
              ";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 18
        echo "          <div class=\"mean-bar\">
            ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 19)) {
            // line 20
            echo "              <a href=\"#nav\" class=\"meanmenu-reveal\">
                <span></span>
                <span></span>
                <span></span>
              </a>
              <nav class=\"mean-nav submenu\">
                ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "  
              </nav>
            ";
        }
        // line 28
        echo "  
          </div>
        ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 30)) {
            // line 31
            echo "            <div id=\"main-menu\">
              ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "
            </div>
         ";
        }
        // line 35
        echo "        </div>
      </nav>
    </header>
    ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 38)) {
            // line 39
            echo "      <div class=\"container\">
        <div class=\"header-region col-100 float_left\">
          ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 45
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 45)) {
            echo " 
      <div class=\"container\">
        <div class=\"help-wrapper float_left col-100\">
          ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 51
        echo " 
    <div id=\"main-wrapper\" class=\"clearfix paddingt\">
      <div id=\"main\" class=\"clearfix container\">
        ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 54)) {
            // line 55
            echo "          <div class=\"breadcrumb col-100 float_left\">
            ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 59
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 59)) {
            // line 60
            echo "            <div id=\"sidebar\" class=\"column sidebar float_left\">
              <aside class=\"section\" role=\"complementary\">
                ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
              </aside>
            </div>
            <main id=\"content\" class=\"two-column float_left with-left-sidebar\" role=\"main\">
              <section class=\"section\">
                <a id=\"main-content\" tabindex=\"-1\"></a>
                ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 68, $this->source), "html", null, true);
            echo "
                ";
            // line 69
            if (($context["title"] ?? null)) {
                // line 70
                echo "                  <h1 class=\"title\" id=\"page-title\">
                    ";
                // line 71
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 71, $this->source), "html", null, true);
                echo "
                  </h1>
                ";
            }
            // line 74
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 74, $this->source), "html", null, true);
            echo "
                ";
            // line 75
            if (($context["action_links"] ?? null)) {
                // line 76
                echo "                  <ul class=\"action-links\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 76, $this->source), "html", null, true);
                echo "</ul>
                ";
            }
            // line 78
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "
              </section>
            </main>
            ";
        } else {
            // line 82
            echo "            <main id=\"content\" class=\"col-100 float_left no-left-sidebar\" role=\"main\">
              <section class=\"section\">
                <a id=\"main-content\" tabindex=\"-1\"></a>
                ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 85, $this->source), "html", null, true);
            echo "
                ";
            // line 86
            if (($context["title"] ?? null)) {
                // line 87
                echo "                  <h1 class=\"title\" id=\"page-title\">
                    ";
                // line 88
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 88, $this->source), "html", null, true);
                echo "
                  </h1>
                ";
            }
            // line 91
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 91, $this->source), "html", null, true);
            echo "
                ";
            // line 92
            if (($context["action_links"] ?? null)) {
                // line 93
                echo "                  <ul class=\"action-links\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 93, $this->source), "html", null, true);
                echo "</ul>
                ";
            }
            // line 95
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "
              </section>
            </main>
          ";
        }
        // line 99
        echo "      </div>
    </div>
  </div>
  <div id=\"footer-section container\">
    <div class=\"col-100 float_left footer-inner-section\">
      ";
        // line 104
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 104) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 104)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 104)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 104))) {
            // line 105
            echo "        <div id=\"footer-columns\" class=\"clearfix col-100 float_left\">
          <div class=\"footer-col footer_first_wrapper column-3  float_left\">";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "</div>
          <div class=\"footer-col footer_second_wrapper column-3 float_left\">";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "</div>
          <div class=\"footer-col footer_third_wrapper column-3 float_left\">";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "</div>
          <div class=\"footer-col footer_fourth_wrapper column-3 float_left\">";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 112
        echo "    </div>
  </div>
</div>
<div id=\"footer\">
  ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 116)) {
            // line 117
            echo "    <div class=\"section section-full-colored\">
      <div class=\"section-content center\">
        ";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 123
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/himalaya/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 123,  277 => 119,  273 => 117,  271 => 116,  265 => 112,  259 => 109,  255 => 108,  251 => 107,  247 => 106,  244 => 105,  242 => 104,  235 => 99,  227 => 95,  221 => 93,  219 => 92,  214 => 91,  208 => 88,  205 => 87,  203 => 86,  199 => 85,  194 => 82,  186 => 78,  180 => 76,  178 => 75,  173 => 74,  167 => 71,  164 => 70,  162 => 69,  158 => 68,  149 => 62,  145 => 60,  142 => 59,  136 => 56,  133 => 55,  131 => 54,  126 => 51,  119 => 48,  112 => 45,  105 => 41,  101 => 39,  99 => 38,  94 => 35,  88 => 32,  85 => 31,  83 => 30,  79 => 28,  73 => 26,  65 => 20,  63 => 19,  60 => 18,  54 => 15,  51 => 14,  49 => 13,  43 => 10,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/himalaya/templates/page.html.twig", "/var/www/drupal_sites/project_1/web/themes/contrib/himalaya/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array("t" => 10, "escape" => 15);
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
