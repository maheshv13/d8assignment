<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/hashcoin/templates/page.html.twig */
class __TwigTemplate_20f64fda209a84399ee943f04f769eb1d5199ebf0e8bb3f6d25461ab67d63448 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 28];
        $filters = ["escape" => 6];
        $functions = ["path" => 9];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"page\">
  <header id=\"header\" class=\"header\">
    <div class=\"container-fluid\">
      <div class=\"header-top row align-items-center\">
        <div class=\"col-md-4\">
          ";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "headertop", [])), "html", null, true);
        echo "
        </div>
        <div class=\"logo col-md-4\">
          <a href=\"";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
        echo "\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo "\"> <img class=\"img-fluid\" src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null)), "html", null, true);
        echo "\" /> </a>
        </div>
        <div class=\"col-md-4 hc-search\">
          ";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "searchbox", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
    <div class=\"container\">
      <div class=\"header__region\">
        ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
      </div>
    </div>
  </header>
  <div class=\"banner\">
    <div> ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
        echo " </div>
  </div>
  <section id=\"main\">
    <div class=\"container-fluid\">
        <div class=\"row\">
                ";
        // line 28
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", [])) {
            // line 29
            echo "            <div id=\"content\" class=\"col-md-9 col-sm-9 col-xs-12\">
                ";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>
            <aside id=\"sidebar\" class=\"sidebar col-md-3 col-sm-3 col-xs-12\">
                 ";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar", [])), "html", null, true);
            echo "
            </aside>
                  ";
        } else {
            // line 36
            echo "            <div id=\"content\">
                  ";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>
                  ";
        }
        // line 40
        echo "        </div>
    </div>
  </section>
  ";
        // line 43
        if ((($this->getAttribute(($context["page"] ?? null), "footerblog", []) || $this->getAttribute(($context["page"] ?? null), "footeraddress", [])) || $this->getAttribute(($context["page"] ?? null), "footernewsletter", []))) {
            // line 44
            echo "    <footer id=\"footer\" class=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12 text-center\">
            <a href=\"";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
            echo "\" class=\"footer-logo\"> </a>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-4 text-center\">
            ";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footerblog", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-md-4 text-center\">
            ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footeraddress", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-md-4 text-center\">
            ";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footernewsletter", [])), "html", null, true);
            echo "
          </div>
        </div>
        
      </div>
    </footer>
  ";
        }
        // line 66
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/hashcoin/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 66,  164 => 59,  158 => 56,  152 => 53,  142 => 48,  136 => 44,  134 => 43,  129 => 40,  123 => 37,  120 => 36,  114 => 33,  108 => 30,  105 => 29,  103 => 28,  95 => 23,  87 => 18,  78 => 12,  68 => 9,  62 => 6,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hashcoin/templates/page.html.twig", "C:\\xampp\\htdocs\\hashcoin\\themes\\custom\\hashcoin\\templates\\page.html.twig");
    }
}
