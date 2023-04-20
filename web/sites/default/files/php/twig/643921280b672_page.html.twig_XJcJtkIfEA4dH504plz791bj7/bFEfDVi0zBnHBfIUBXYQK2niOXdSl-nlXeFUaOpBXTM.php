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

/* themes/contrib/january_theme/templates/layout/page.html.twig */
class __TwigTemplate_008b217d77f6971415c96e57df6eef44 extends Template
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
        // line 48
        echo "

";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 50) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 50))) {
            // line 51
            echo "\t";
            // line 52
            echo "\t<div class=\"topbar\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<p>";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t<a href=\"tel:+";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 57, $this->source), "html", null, true);
            echo "\">+";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 57, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<ul class=\"social-links\">
\t\t\t\t\t\t<li class='facebook'>
\t\t\t\t\t\t\t<a href=\"";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_facebook"] ?? null), 63, $this->source), "html", null, true);
            echo "\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class='twitter'>
\t\t\t\t\t\t\t<a href=\"";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_twitter"] ?? null), 68, $this->source), "html", null, true);
            echo "\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class='insta'>
\t\t\t\t\t\t\t<a href=\"";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_instagram"] ?? null), 73, $this->source), "html", null, true);
            echo "\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class='youtube'>
\t\t\t\t\t\t\t<a href=\"";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_youtube"] ?? null), 78, $this->source), "html", null, true);
            echo "\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<header id=\"header\" class=\"site-header sticky-top\" data-drupal-selector=\"site-header\">
\t\t";
            // line 90
            echo "\t\t<nav class=\"navbar\">
\t\t\t<div class=\"container\">
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarScroll\" aria-controls=\"navbarScroll\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<svg class=\"open-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"28\" viewbox=\"0 0 48 28\">
\t\t\t\t\t\t<g transform=\"translate(-205 -94)\">
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(205 94)\" fill=\"#284544\"/>
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(205 106)\" fill=\"#284544\"/>
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(205 118)\" fill=\"#284544\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t</svg>

\t\t\t\t\t<svg class=\"close-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"38.348\" height=\"35.091\" viewbox=\"0 0 38.348 35.091\">
\t\t\t\t\t\t<g transform=\"translate(-209.826 -73.455)\">
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(212.503 73.455) rotate(42)\" fill=\"#284544\"/>
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(248.174 76.427) rotate(138)\" fill=\"#284544\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t</svg>

\t\t\t\t</button>
\t\t\t\t";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarScroll\">
\t\t\t\t\t";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["management_message"] ?? null), 112, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t<a href=\"mailto:";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_email"] ?? null), 113, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_email"] ?? null), 113, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t\t<a href=\"tel:+";
            // line 114
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 114, $this->source), "html", null, true);
            echo "\">+";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 114, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>
";
        }
        // line 121
        echo "
";
        // line 122
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 122) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 122))) {
            // line 123
            echo "<div class='page-highlighted'>
\t";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "
\t";
            // line 125
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page", [], "any", false, false, true, 125), "secondary_menu", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "
</div>
";
        }
        // line 128
        echo "
";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 129)) {
            // line 130
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "
";
        }
        // line 132
        echo "
";
        // line 133
        if ( !($context["is_front"] ?? null)) {
            // line 134
            echo "<div class=\"small-banner\">
  <div class=\"page-title\">
    <div class=\"container\">
      <div class=\"col wow fadeInUpBig\">
        <div class=\"inner-right\">
          <h1>";
            // line 139
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["page"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null), 139, $this->source), "html", null, true);
            echo "</h1>
          ";
            // line 140
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 140)) {
                // line 141
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 143
            echo "        </div>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 149
        echo "<main role=\"main\">
\t";
        // line 150
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 150) &&  !($context["is_front"] ?? null))) {
            echo "\t
\t\t<div class=\"page-with-sidebar section-spacing inner-page\">
\t\t\t<div class=\"container\">
\t\t        <div class=\"row\">
\t\t\t\t\t<div class='col-md-8 col-lg-9'>
\t";
        } elseif ( !        // line 155
($context["is_front"] ?? null)) {
            // line 156
            echo "\t\t<div class=\"page-without-sidebar section-spacing inner-page\">
\t\t\t<div class='container'>
\t";
        } else {
            // line 159
            echo "\t\t<div class=\"page-without-sidebar section-spacing\">
\t";
        }
        // line 161
        echo "\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
        echo "
\t\t\t";
        // line 162
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
        echo "
\t\t\t";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
        echo "
\t";
        // line 164
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 164) &&  !($context["is_front"] ?? null))) {
            echo "\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-lg-3 right-sidebar\">
\t\t\t\t\t\t";
            // line 167
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        } elseif ( !        // line 172
($context["is_front"] ?? null)) {
            // line 173
            echo "\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 176
            echo "\t\t</div>
\t";
        }
        // line 178
        echo "</main>

";
        // line 180
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 180) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 180)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 180)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 180))) {
            // line 181
            echo " <footer class=\"site-footer wow fadeInUp\">
\t";
            // line 182
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 182) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 182)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 182))) {
                // line 183
                echo "\t<div class='footer-top'>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t<div class='footer-contact'>
\t\t\t\t\t\t<div class=\"footer-logo\">
\t\t\t\t\t\t\t";
                // line 189
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icon-row\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-location-dot\"></i>
\t\t\t\t\t\t\t<p>";
                // line 193
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_address"] ?? null), 193, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>      
\t\t\t\t\t\t<div class=\"icon-row\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-phone\"></i>
\t\t\t\t\t\t\t<a href=\"tel:+";
                // line 197
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 197, $this->source), "html", null, true);
                echo "\">+";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 197, $this->source), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icon-row\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-envelope-open\"></i>
\t\t\t\t\t\t\t<a href=\"mailto:";
                // line 201
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_email"] ?? null), 201, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_email"] ?? null), 201, $this->source), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-6\">
\t\t\t\t\t<div class ='footer-quick-link'>
\t\t\t\t\t\t";
                // line 207
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-3\">
\t\t\t\t\t<div class='footer-subscribe-us'>
\t\t\t\t\t\t";
                // line 212
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t<ul class=\"social-links list-inline d-flex align-items-center m-0\">
\t\t\t\t\t\t\t<li class='facebook'>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 215
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_facebook"] ?? null), 215, $this->source), "html", null, true);
                echo "\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class='twitter'>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 220
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_twitter"] ?? null), 220, $this->source), "html", null, true);
                echo "\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class='insta'>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 225
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_instagram"] ?? null), 225, $this->source), "html", null, true);
                echo "\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class='youtube'>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 230
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_youtube"] ?? null), 230, $this->source), "html", null, true);
                echo "\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            }
            // line 241
            echo "\t<div class=\"copyright-sec\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">\t\t
\t\t\t\t";
            // line 244
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 244)) {
                // line 245
                echo "\t\t\t\t\t<div class=\"col-md-6 text-center text-lg-start\">
\t\t\t\t\t\tAll Rights Reserved by @2023
\t\t\t\t\t</div>
\t\t\t\t\t <div class=\"col-md-6 text-center text-lg-end designerdby\">
\t\t\t\t\t \t<a href=\"https://www.dotsquares.com/lp/drupal\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" id=\"Layer_1\" x=\"0px\" y=\"0px\" width=\"16px\" height=\"16px\" viewBox=\"0 0 16 16\" enable-background=\"new 0 0 16 16\" xml:space=\"preserve\">  <image id=\"image0\" width=\"16\" height=\"16\" x=\"0\" y=\"0\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAABGdBTUEAALGPC/xhBQAAACBjSFJN AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAw1BMVEX0gSj0gyzzdhb6yaP9 6dnzehz0gir96Nj5tYHzdxf0fiP1kEL0hS/zeRr6yqX96dr0fCD0hC35toPzeRv0hjD0gCf2kkXy awL6xZv859bwbgnxdxnwbgr85tT4r3bybAPzcxD1hzL/9u7/yZn/zaD/ypr/9u3838n6xZz6yKH7 0K7y9/7J1+3M2u7y9/3/8+j859f97N4aLmklOnPJ1uv/tHXwbwv1ijgwRX0lOnTM2ez/uX7xeBr0 hS70fyX1kUT///9NSq1tAAAAAWJLR0RA/tlc2AAAAAd0SU1FB+cBDQURDSM87bEAAACNSURBVBjT hY9XFoIwFERfSBM1EKxArBA7WIgF+/535QLeh7/3nJm5AwDEo4wLwWXDJ80WIEBIWwWhjiItO91e fwCep4ZxkhozGk+majYHSoNYZrm1i+VqHWy2wFiYZLuiLIv94RjKE3Cu07yonKvOl6v2byBEZGzp 6vr+eL7eny8GKIJK0SwSQ+p/3/4AUrgXcZWWOC8AAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDEt MTNUMDU6MTc6MTMrMDA6MDCPV1nyAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTAxLTEzVDA1OjE3 OjEzKzAwOjAw/grhTgAAACh0RVh0ZGF0ZTp0aW1lc3RhbXAAMjAyMy0wMS0xM1QwNToxNzoxMysw MDowMKkfwJEAAAAASUVORK5CYII=\"/></svg>
\t\t\t\t\t\t\tDotsquares
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 255
                echo "\t\t\t\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 255), 255, $this->source), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 257
            echo "\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<a href=\"#top\" id=\"top\"><span class=\"topbutton\"><i class=\"fa-solid fa-angle-up\"></i></span></a>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/january_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 257,  403 => 255,  391 => 245,  389 => 244,  384 => 241,  370 => 230,  362 => 225,  354 => 220,  346 => 215,  340 => 212,  332 => 207,  321 => 201,  312 => 197,  305 => 193,  298 => 189,  290 => 183,  288 => 182,  285 => 181,  283 => 180,  279 => 178,  275 => 176,  270 => 173,  268 => 172,  260 => 167,  254 => 164,  250 => 163,  246 => 162,  241 => 161,  237 => 159,  232 => 156,  230 => 155,  222 => 150,  219 => 149,  211 => 143,  205 => 141,  203 => 140,  199 => 139,  192 => 134,  190 => 133,  187 => 132,  181 => 130,  179 => 129,  176 => 128,  170 => 125,  166 => 124,  163 => 123,  161 => 122,  158 => 121,  146 => 114,  140 => 113,  136 => 112,  132 => 111,  127 => 109,  106 => 90,  92 => 78,  84 => 73,  76 => 68,  68 => 63,  57 => 57,  53 => 56,  47 => 52,  45 => 51,  43 => 50,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/january_theme/templates/layout/page.html.twig", "/var/www/drupal_sites/project_1/web/themes/contrib/january_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 50);
        static $filters = array("escape" => 56);
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
