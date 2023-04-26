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

/* themes/contrib/himalaya/templates/node.html.twig */
class __TwigTemplate_bfe24d8f5d31d94bb47db62b6fd94c1e extends Template
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
        // line 66
        $context["classes"] = [0 => "node", 1 => "grayborder box_shadow margin_bottom border_radius padding", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "bundle", [], "any", false, false, true, 69), 69, $this->source))), 3 => ((twig_get_attribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 70)) ? ("node--promoted") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 71
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 71)) ? ("node--sticky") : ("")), 5 => (( !twig_get_attribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 72)) ? ("node--unpublished") : ("")), 6 => ((        // line 73
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 73, $this->source)))) : ("")), 7 => "clearfix"];
        // line 77
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 77), 77, $this->source), "html", null, true);
        echo ">
  <header>
    ";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 79, $this->source), "html", null, true);
        echo "
    ";
        // line 80
        if ( !($context["page"] ?? null)) {
            // line 81
            echo "      <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 81), 81, $this->source), "html", null, true);
            echo ">
        <a href=\"";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 82, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 82, $this->source), "html", null, true);
            echo "</a>
      </h2>
    ";
        }
        // line 85
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 85, $this->source), "html", null, true);
        echo "
    ";
        // line 86
        if (($context["display_submitted"] ?? null)) {
            // line 87
            echo "      <div class=\"submitted-by\">
      <div class=\"node__meta\">
        <div class=\"user-picture\">
         ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 90, $this->source), "html", null, true);
            echo "
       </div>
        <div class=\"submitted-by-innerwrap\">
        <span";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 93, $this->source), "html", null, true);
            echo ">
          <span class=\"calendar\"></span>";
            // line 94
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 95
            echo "        </span>
      </div>
        ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 97, $this->source), "html", null, true);
            echo "
      </div>
    </div>
    ";
        }
        // line 101
        echo "  </header>
  <div";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 102), 102, $this->source), "html", null, true);
        echo ">
    ";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 103, $this->source), "comment", "links"), "html", null, true);
        echo "
  </div>
  ";
        // line 105
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 105)) {
            // line 106
            echo "    <div class=\"node__links\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "</div>
  ";
        }
        // line 108
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/himalaya/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 108,  120 => 106,  118 => 105,  113 => 103,  109 => 102,  106 => 101,  99 => 97,  95 => 95,  93 => 94,  89 => 93,  83 => 90,  78 => 87,  76 => 86,  71 => 85,  63 => 82,  58 => 81,  56 => 80,  52 => 79,  46 => 77,  44 => 73,  43 => 72,  42 => 71,  41 => 70,  40 => 69,  39 => 66,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/himalaya/templates/node.html.twig", "/var/www/drupal_sites/project_1/web/themes/contrib/himalaya/templates/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 66, "if" => 80, "trans" => 94);
        static $filters = array("clean_class" => 69, "escape" => 77, "without" => 103);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape', 'without'],
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
