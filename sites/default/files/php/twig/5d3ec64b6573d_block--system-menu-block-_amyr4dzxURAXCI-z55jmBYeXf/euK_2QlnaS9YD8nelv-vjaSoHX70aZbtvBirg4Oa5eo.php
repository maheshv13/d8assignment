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

/* themes/custom/hashcoin/templates/block/block--system-menu-block--main.html.twig */
class __TwigTemplate_3fa7ee7a987367b64e08a66400ce6fc95647776ae4a88fe1b1d79186459e557c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 36, "if" => 39, "block" => 43];
        $filters = ["clean_id" => 36, "escape" => 37, "without" => 37];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_id', 'escape', 'without'],
                []
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
        // line 36
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "id", [])) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 37
        echo "<nav class=\"navbar navbar-expand-md navbar-light\" role=\"navigation\" aria-labelledby=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
        echo "\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => "clearfix"], "method")), "role", "aria-labelledby"), "html", null, true);
        echo ">
  ";
        // line 39
        echo "  ";
        if ( !$this->getAttribute(($context["configuration"] ?? null), "label_display", [])) {
            // line 40
            echo "    ";
            $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "sr-only"], "method");
            // line 41
            echo "  ";
        }
        // line 42
        echo "
  ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "</nav>
";
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        // line 44
        echo "    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsibleNavbar\">
    \t<span class=\"navbar-toggler-icon\"></span>
  \t</button>
  \t<div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
    \t";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
\t</div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/hashcoin/templates/block/block--system-menu-block--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 48,  87 => 44,  84 => 43,  79 => 51,  77 => 43,  74 => 42,  71 => 41,  68 => 40,  65 => 39,  58 => 37,  56 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hashcoin/templates/block/block--system-menu-block--main.html.twig", "C:\\xampp\\htdocs\\hashcoin\\themes\\custom\\hashcoin\\templates\\block\\block--system-menu-block--main.html.twig");
    }
}
