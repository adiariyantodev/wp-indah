<?php

use Breakdance\Lib\Vendor\Twig\Environment;
use Breakdance\Lib\Vendor\Twig\Error\LoaderError;
use Breakdance\Lib\Vendor\Twig\Error\RuntimeError;
use Breakdance\Lib\Vendor\Twig\Extension\SandboxExtension;
use Breakdance\Lib\Vendor\Twig\Markup;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedTagError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use Breakdance\Lib\Vendor\Twig\Source;
use Breakdance\Lib\Vendor\Twig\Template;

/* e9e5b9530024e5b1a2326a3be2fcfd8a19be231b */
class __TwigTemplate_107d45d31ba4bd5c70e1431971451839 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
          ";
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "e9e5b9530024e5b1a2326a3be2fcfd8a19be231b", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        $context["type"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "button", [], "any", false, true, false, 4), "type", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "button", [], "any", false, true, false, 4), "type", [], "any", false, false, false, 4), "progress")) : ("progress"));
        // line 5
        $context["show"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, true, false, 5), "show", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, true, false, 5), "show", [], "any", false, false, false, 5), "always")) : ("always"));
        // line 6
        $context["animation"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, true, false, 6), "animation", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, true, false, 6), "animation", [], "any", false, false, false, 6), "fade")) : ("fade"));
        // line 7
        $context["sticky"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 7), "sticky", [], "any", false, false, false, 7)) ? ("is-sticky") : (""));
        // line 8
        $context["autohide"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 8), "hide_at_the_top", [], "any", false, false, false, 8)) ? ("bde-back-to-top__button--autohide") : (""));
        // line 9
        echo "
";
        // line 10
        $context["cssClasses"] = twig_join_filter([0 => "bde-back-to-top__button", 1 => ("bde-back-to-top__button--" .         // line 12
($context["type"] ?? null)), 2 => ("bde-back-to-top__button--show-" .         // line 13
($context["show"] ?? null)), 3 => ("bde-back-to-top__button--animation-" .         // line 14
($context["animation"] ?? null)), 4 =>         // line 15
($context["sticky"] ?? null), 5 =>         // line 16
($context["autohide"] ?? null), 6 => "js-ee-back-to-top"], " ");
        // line 19
        echo "
<button aria-label=\"Back to top\" tabindex=\"0\" class=\"";
        // line 20
        echo ($context["cssClasses"] ?? null);
        echo "\">
  ";
        // line 21
        if ((($context["type"] ?? null) == "progress")) {
            // line 22
            echo "  \t<svg class=\"bde-back-to-top__progress-svg js-progress-svg\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
\t  <path class=\"background\" d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\"/>
      <path class=\"tracker\" d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\"/>
  \t</svg>
  ";
        }
        // line 27
        echo "   ";
        if (((($context["type"] ?? null) == "icon") || (($context["type"] ?? null) == "progress"))) {
            // line 28
            echo "    <div class=\"bde-back-to-top__icon-wrap\">
      ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "button", [], "any", false, false, false, 29), "icon", [], "any", false, false, false, 29), "svgCode", [], "any", false, false, false, 29)) {
                // line 30
                echo "          ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "button", [], "any", false, false, false, 30), "icon", [], "any", false, false, false, 30), "svgCode", [], "any", false, false, false, 30);
                echo "
      ";
            } else {
                // line 32
                echo "        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 384 512\"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d=\"M214.6 57.4L192 34.7 169.4 57.4l-144 144L2.7 224 48 269.2l22.6-22.6L160 157.2V448v32h64V448 157.2l89.4 89.4L336 269.2 381.3 224l-22.6-22.6-144-144z\"/></svg>
      ";
            }
            // line 34
            echo "    </div>
  ";
        }
        // line 36
        echo "  ";
        if ((($context["type"] ?? null) == "text")) {
            // line 37
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "button", [], "any", false, false, false, 37), "icon", [], "any", false, false, false, 37), "svgCode", [], "any", false, false, false, 37)) {
                // line 38
                echo "      <div class=\"bde-back-to-top__icon-wrap\">
        ";
                // line 39
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "button", [], "any", false, false, false, 39), "icon", [], "any", false, false, false, 39), "svgCode", [], "any", false, false, false, 39);
                echo "
      </div>
    ";
            }
            // line 42
            echo "  \t<span class=\"bde-back-to-top__text\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "button", [], "any", false, true, false, 42), "text", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "button", [], "any", false, true, false, 42), "text", [], "any", false, false, false, 42), "Top")) : ("Top"));
            echo "</span>
  ";
        }
        // line 44
        echo "</button>


         ";
    }

    public function getTemplateName()
    {
        return "e9e5b9530024e5b1a2326a3be2fcfd8a19be231b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  118 => 42,  112 => 39,  109 => 38,  106 => 37,  103 => 36,  99 => 34,  95 => 32,  89 => 30,  87 => 29,  84 => 28,  81 => 27,  74 => 22,  72 => 21,  68 => 20,  65 => 19,  63 => 16,  62 => 15,  61 => 14,  60 => 13,  59 => 12,  58 => 10,  55 => 9,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "e9e5b9530024e5b1a2326a3be2fcfd8a19be231b", "");
    }
}
