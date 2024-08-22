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

/* 4585b4faa8b75fc402696076ccdb1e2e1f368332 */
class __TwigTemplate_e65b2c3424503aeead4532761f469bdb extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "4585b4faa8b75fc402696076ccdb1e2e1f368332", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  
  --bde-back-to-top-width: ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 6), "size", [], "any", false, false, false, 6), "style", [], "any", false, false, false, 6);
        echo ";
  --bde-back-to-top-height: ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 7), "size", [], "any", false, false, false, 7), "style", [], "any", false, false, false, 7);
        echo ";
  --bde-back-to-top-animation-duration: ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 8), "duration", [], "any", false, false, false, 8), "style", [], "any", false, false, false, 8);
        echo ";
    
    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 10), "sticky", [], "any", false, false, false, 10)) {
            // line 11
            echo "  
      ";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 12), "vertical_align", [], "any", false, false, false, 12) == "top")) {
                // line 13
                echo "        top: 0;
        bottom: auto;
      ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 15
($context["design"] ?? null), "container", [], "any", false, false, false, 15), "vertical_align", [], "any", false, false, false, 15) == "center")) {
                // line 16
                echo "        top: 50%;
        transform: translateY(-50%);
      ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 18
($context["design"] ?? null), "container", [], "any", false, false, false, 18), "vertical_align", [], "any", false, false, false, 18) == "bottom")) {
                // line 19
                echo "        bottom: 0;
        top: auto;
      ";
            }
            // line 22
            echo "
      ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 23), "horizontal_align", [], "any", false, false, false, 23) == "left")) {
                // line 24
                echo "        left: 0;
        right: auto;
      ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 26
($context["design"] ?? null), "container", [], "any", false, false, false, 26), "horizontal_align", [], "any", false, false, false, 26) == "center")) {
                // line 27
                echo "        left: 50%;
        transform: translateX(-50%);
      ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 29
($context["design"] ?? null), "container", [], "any", false, false, false, 29), "horizontal_align", [], "any", false, false, false, 29) == "right")) {
                // line 30
                echo "        right: 0;
        left: auto;
      ";
            }
            // line 33
            echo "
      ";
            // line 34
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 34), "horizontal_align", [], "any", false, false, false, 34) == "center") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "container", [], "any", false, false, false, 34), "vertical_align", [], "any", false, false, false, 34) == "center"))) {
                // line 35
                echo "          transform: translateX(-50%) translateY(-50%);
      ";
            }
            // line 37
            echo "
   ";
        }
        // line 39
        echo "  
  ";
        // line 40
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_all", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 40)], 40, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-back-to-top__button {
  background-color: ";
        // line 44
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 44), "background", [], "any", false, false, false, 44);
        echo ";
} 

%%SELECTOR%%.bde-back-to-top--icon .bde-back-to-top__button,
%%SELECTOR%%.bde-back-to-top--text .bde-back-to-top__button {
   ";
        // line 49
        echo twig_call_macro($macros["macros"], "macro_borders", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 49), "borders", [], "any", false, false, false, 49)], 49, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%%.bde-back-to-top--text .bde-back-to-top__button {
  gap: ";
        // line 53
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 53), "icon", [], "any", false, false, false, 53), "space_after", [], "any", false, false, false, 53), "style", [], "any", false, false, false, 53);
        echo ";
}

%%SELECTOR%% .bde-back-to-top__button:hover {
 background-color: ";
        // line 57
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 57), "background_hover", [], "any", false, false, false, 57);
        echo "
}

%%SELECTOR%% .bde-back-to-top__icon-wrap {
  color: ";
        // line 61
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 61), "icon", [], "any", false, false, false, 61), "color", [], "any", false, false, false, 61);
        echo ";
  font-size: ";
        // line 62
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 62), "icon", [], "any", false, false, false, 62), "size", [], "any", false, false, false, 62), "style", [], "any", false, false, false, 62);
        echo ";
}

%%SELECTOR%% .bde-back-to-top__button:hover .bde-back-to-top__icon-wrap {
  color: ";
        // line 66
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 66), "icon", [], "any", false, false, false, 66), "color_hover", [], "any", false, false, false, 66);
        echo ";
  font-size: ";
        // line 67
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 67), "icon", [], "any", false, false, false, 67), "size_hover", [], "any", false, false, false, 67), "style", [], "any", false, false, false, 67);
        echo ";
}

%%SELECTOR%%.bde-back-to-top--text .bde-back-to-top__text {
  ";
        // line 71
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 71), "button_styles", [], "any", false, false, false, 71), "typography", [], "any", false, false, false, 71), ($context["globalSettings"] ?? null)], 71, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%%.bde-back-to-top--text .bde-back-to-top__button {
   ";
        // line 75
        echo twig_call_macro($macros["macros"], "macro_spacing_padding_all", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 75), "button_styles", [], "any", false, false, false, 75), "padding", [], "any", false, false, false, 75)], 75, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% .bde-back-to-top__progress-svg {
   padding: ";
        // line 79
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 79), "progress", [], "any", false, false, false, 79), "padding", [], "any", false, false, false, 79), "style", [], "any", false, false, false, 79);
        echo ";
}

%%SELECTOR%% .bde-back-to-top__progress-svg path {
\tstroke-width: ";
        // line 83
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 83), "progress", [], "any", false, false, false, 83), "width", [], "any", false, false, false, 83);
        echo ";
}

%%SELECTOR%% .bde-back-to-top__progress-svg path.tracker {
 \tstroke: ";
        // line 87
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 87), "progress", [], "any", false, false, false, 87), "tracker", [], "any", false, false, false, 87);
        echo ";
}

%%SELECTOR%% .bde-back-to-top__progress-svg path.background {
 \tstroke: ";
        // line 91
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "button", [], "any", false, false, false, 91), "progress", [], "any", false, false, false, 91), "background", [], "any", false, false, false, 91);
        echo ";
}







";
        // line 101
        echo "

    %%SELECTOR%% {
        ";
        // line 104
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 105
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 105), "wrapper", [], "any", false, false, false, 105), "background", [], "any", false, false, false, 105), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 106
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 106), "wrapper", [], "any", false, false, false, 106), "layout", [], "any", false, false, false, 106), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 107
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 107), "wrapper", [], "any", false, false, false, 107), "size", [], "any", false, false, false, 107), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 108
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 108), "wrapper", [], "any", false, false, false, 108), "typography", [], "any", false, false, false, 108),         // line 109
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 110
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 110), "wrapper", [], "any", false, false, false, 110), "spacing", [], "any", false, false, false, 110), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 111
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 111), "wrapper", [], "any", false, false, false, 111), "borders", [], "any", false, false, false, 111), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 112
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 112), "wrapper", [], "any", false, false, false, 112), "effects", [], "any", false, false, false, 112)], 104, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 116
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 117
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 117), "wrapper_hover", [], "any", false, false, false, 117), "background", [], "any", false, false, false, 117), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 118
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 118), "wrapper_hover", [], "any", false, false, false, 118), "layout", [], "any", false, false, false, 118), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 119
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 119), "wrapper_hover", [], "any", false, false, false, 119), "size", [], "any", false, false, false, 119), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 120
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 120), "wrapper_hover", [], "any", false, false, false, 120), "typography", [], "any", false, false, false, 120),         // line 121
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 122
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 122), "wrapper_hover", [], "any", false, false, false, 122), "spacing", [], "any", false, false, false, 122), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 123
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 123), "wrapper_hover", [], "any", false, false, false, 123), "borders", [], "any", false, false, false, 123), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 124
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 124), "wrapper_hover", [], "any", false, false, false, 124), "effects", [], "any", false, false, false, 124)], 116, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 128
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 128), "css", [], "any", false, false, false, 128);
        echo "


";
        // line 131
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 131), "hide", [], "any", false, false, false, 131)))) {
            // line 132
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 133
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 133), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 133), "hide", [], "any", false, false, false, 133))) {
                    // line 134
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 136
                    if (($context["isBuilder"] ?? null)) {
                        // line 137
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 140
                        echo "                        display: none;
                    ";
                    }
                    // line 142
                    echo "                }
            }
        ";
                }
                // line 145
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 147
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "4585b4faa8b75fc402696076ccdb1e2e1f368332";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 147,  300 => 145,  295 => 142,  291 => 140,  286 => 137,  284 => 136,  278 => 134,  275 => 133,  270 => 132,  268 => 131,  262 => 128,  255 => 124,  254 => 123,  253 => 122,  252 => 121,  251 => 120,  250 => 119,  249 => 118,  248 => 117,  247 => 116,  240 => 112,  239 => 111,  238 => 110,  237 => 109,  236 => 108,  235 => 107,  234 => 106,  233 => 105,  232 => 104,  227 => 101,  215 => 91,  208 => 87,  201 => 83,  194 => 79,  187 => 75,  180 => 71,  173 => 67,  169 => 66,  162 => 62,  158 => 61,  151 => 57,  144 => 53,  137 => 49,  129 => 44,  122 => 40,  119 => 39,  115 => 37,  111 => 35,  109 => 34,  106 => 33,  101 => 30,  99 => 29,  95 => 27,  93 => 26,  89 => 24,  87 => 23,  84 => 22,  79 => 19,  77 => 18,  73 => 16,  71 => 15,  67 => 13,  65 => 12,  62 => 11,  60 => 10,  55 => 8,  51 => 7,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "4585b4faa8b75fc402696076ccdb1e2e1f368332", "");
    }
}
