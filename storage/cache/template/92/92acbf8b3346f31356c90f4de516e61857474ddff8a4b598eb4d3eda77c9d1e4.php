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

/* so-sgame/template/extension/module/so_page_builder/default.twig */
class __TwigTemplate_8ecd861594812360a9b69e81729a358ff1f1e55b26684f826d8ba9f8dea66b4e extends \Twig\Template
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
        echo "<div class=\"so-page-builder\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["font_ends"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 3
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["row"], "row_section", [], "any", false, false, false, 3)) {
                // line 4
                echo "\t\t\t<section id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["row"], "row_section_id", [], "any", false, false, false, 4);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["row"], "row_section_class", [], "any", false, false, false, 4);
                echo " ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "section_background_type", [], "any", false, false, false, 4) == 1)) {
                    echo " ";
                    echo "section-color";
                    echo " ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["row"], "section_background_type", [], "any", false, false, false, 4) == 1)) {
                    echo " ";
                    echo "section-image";
                    echo " ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["row"], "section_background_type", [], "any", false, false, false, 4) == 3)) {
                    echo " ";
                    echo "section-video";
                    echo " ";
                }
                echo "\">
\t\t\t\t";
                // line 5
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "section_background_type", [], "any", false, false, false, 5) == 3)) {
                    // line 6
                    echo "\t\t\t\t\t<div class=\"bg-content\">
\t\t\t\t";
                }
                // line 8
                echo "\t\t\t";
            }
            // line 9
            echo "\t\t\t<div class=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["row"], "row_container_fluid", [], "any", false, false, false, 9) == 1)) ? ("container-fluid") : ("container"));
            echo " page-builder-";
            echo ($context["direction"] ?? null);
            echo "\">
\t\t\t\t<div class=\"row ";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["row"], "text_class_id", [], "any", false, false, false, 10);
            echo " ";
            echo (((twig_get_attribute($this->env, $this->source, $context["row"], "text_class", [], "any", false, false, false, 10) != "")) ? ((" " . twig_get_attribute($this->env, $this->source, $context["row"], "text_class", [], "any", false, false, false, 10))) : (""));
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "background_type", [], "any", false, false, false, 10) == 1)) {
                echo " ";
                echo "row-color";
                echo " ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["row"], "background_type", [], "any", false, false, false, 10) == 2)) {
                echo " ";
                echo "row-image";
                echo " ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["row"], "background_type", [], "any", false, false, false, 10) == 3)) {
                echo " ";
                echo "row-video";
                echo " ";
            }
            echo "\">
\t\t\t\t\t";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "background_type", [], "any", false, false, false, 11) == 3)) {
                echo "\t\t\t
\t\t\t\t\t\t";
                // line 12
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "video_type", [], "any", false, false, false, 12) == 0)) {
                    // line 13
                    echo "\t\t\t\t\t\t\t<div class=\"bg-video\" id=\"";
                    echo ($context["id_row_video"] ?? null);
                    echo "\" data-id=\"";
                    echo ($context["id_row_video"] ?? null);
                    echo "\" data-loop=\"true\" data-muted=\"true\" data-autoplay=\"true\" data-ratio=\"1.77\" data-overlay=\"\" data-swfpath=\"\"  data-youtube=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "link_video", [], "any", false, false, false, 13);
                    echo "\"></div>
\t\t\t\t\t\t";
                } else {
                    // line 15
                    echo "\t\t\t\t\t\t\t<div class=\"bg-video\" id=\"";
                    echo ($context["id_row_video"] ?? null);
                    echo "\" data-id=\"";
                    echo ($context["id_row_video"] ?? null);
                    echo "\" data-loop=\"true\" data-muted=\"true\" data-autoplay=\"true\" data-ratio=\"1.77\" data-overlay=\"\" data-swfpath=\"\"  data-webm=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "link_video", [], "any", false, false, false, 15);
                    echo "\">
\t\t\t\t\t\t\t\t<div style=\"z-index: 0; position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; overflow: hidden;\">
\t\t\t\t\t\t\t\t\t<video autoplay=\"\" style=\"width:100%;height:100%;\" loop=\"\" onended=\"this.play()\"><source src=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "link_video", [], "any", false, false, false, 17);
                    echo "\" type=\"video/webm\"></video>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "cols", [], "any", false, false, false, 22));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 23
                echo "\t\t\t\t\t\t<div class=\"col-lg-";
                echo twig_get_attribute($this->env, $this->source, $context["col"], "lg_col", [], "any", false, false, false, 23);
                echo " col-md-";
                echo twig_get_attribute($this->env, $this->source, $context["col"], "md_col", [], "any", false, false, false, 23);
                echo " col-sm-";
                echo twig_get_attribute($this->env, $this->source, $context["col"], "sm_col", [], "any", false, false, false, 23);
                echo " col-xs-";
                echo twig_get_attribute($this->env, $this->source, $context["col"], "xs_col", [], "any", false, false, false, 23);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["col"], "text_class_id", [], "any", false, false, false, 23);
                echo " ";
                echo (((twig_get_attribute($this->env, $this->source, $context["col"], "text_class", [], "any", false, false, false, 23) != "")) ? ((" " . twig_get_attribute($this->env, $this->source, $context["col"], "text_class", [], "any", false, false, false, 23))) : (""));
                echo "\">
\t\t\t\t\t\t\t";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["col"], "widgets", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 25)) {
                        // line 26
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 26);
                        echo "
\t\t\t\t\t\t\t\t";
                    }
                    // line 28
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["col"], "rows", [], "any", false, false, false, 29) && twig_get_attribute($this->env, $this->source, $context["col"], "rows", [], "any", false, false, false, 29))) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t";
                    $context["rows_child"] = twig_get_attribute($this->env, $this->source, $context["col"], "rows", [], "any", false, false, false, 30);
                    // line 31
                    echo "\t\t\t\t\t\t\t\t";
                    $this->loadTemplate((($context["DIR_TEMPLATE"] ?? null) . ($context["template_row"] ?? null)), "so-sgame/template/extension/module/so_page_builder/default.twig", 31)->display($context);
                    // line 32
                    echo "\t\t\t\t\t\t\t";
                }
                // line 33
                echo "
\t\t\t\t\t\t\t";
                // line 34
                if ((twig_get_attribute($this->env, $this->source, $context["col"], "background_type", [], "any", false, false, false, 34) == 3)) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["col"], "col_video_type", [], "any", false, false, false, 35) == 0)) {
                        // line 36
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"bg-video\" id=\"";
                        echo ($context["id_col_video"] ?? null);
                        echo "\" data-id=\"";
                        echo ($context["id_col_video"] ?? null);
                        echo "\" data-loop=\"true\" data-muted=\"true\" data-autoplay=\"true\" data-ratio=\"1.77\" data-overlay=\"\" data-swfpath=\"\"  data-youtube=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["col"], "col_link_video", [], "any", false, false, false, 36);
                        echo "\"></div>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"bg-video\" id=\"";
                        echo ($context["id_col_video"] ?? null);
                        echo "\" data-id=\"";
                        echo ($context["id_col_video"] ?? null);
                        echo "\" data-loop=\"true\" data-muted=\"true\" data-autoplay=\"true\" data-ratio=\"1.77\" data-overlay=\"\" data-swfpath=\"\"  data-webm=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["col"], "col_link_video", [], "any", false, false, false, 38);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<div style=\"z-index: 0; position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; overflow: hidden;\">
\t\t\t\t\t\t\t\t\t\t\t<video autoplay=\"\" style=\"width:100%;height:100%;\" loop=\"\" onended=\"this.play()\"><source src=\"";
                        // line 40
                        echo twig_get_attribute($this->env, $this->source, $context["col"], "col_link_video", [], "any", false, false, false, 40);
                        echo "\" type=\"video/webm\"></video>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 44
                    echo "\t\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            // line 50
            if (twig_get_attribute($this->env, $this->source, $context["row"], "row_section", [], "any", false, false, false, 50)) {
                // line 51
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "section_background_type", [], "any", false, false, false, 51) == 3)) {
                    // line 52
                    echo "\t\t\t\t</div>
\t\t\t\t<div class=\"bg-overlay\"></div>
\t\t\t\t";
                    // line 54
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "section_video_type", [], "any", false, false, false, 54) == 0)) {
                        // line 55
                        echo "\t\t\t\t\t<div class=\"bg-video\" id=\"";
                        echo ($context["id_sec_video"] ?? null);
                        echo "\" data-id=\"";
                        echo ($context["id_sec_video"] ?? null);
                        echo "\" data-loop=\"true\" data-muted=\"true\" data-autoplay=\"true\" data-ratio=\"1.77\" data-overlay=\"\" data-swfpath=\"\"  data-youtube=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["row"], "section_link_video", [], "any", false, false, false, 55);
                        echo "\"></div>
\t\t\t\t";
                    } else {
                        // line 57
                        echo "\t\t\t\t\t<div class=\"bg-video\" id=\"";
                        echo ($context["id_sec_video"] ?? null);
                        echo "\" data-id=\"";
                        echo ($context["id_sec_video"] ?? null);
                        echo "\" data-loop=\"true\" data-muted=\"true\" data-autoplay=\"true\" data-ratio=\"1.77\" data-overlay=\"\" data-swfpath=\"\"  data-webm=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["row"], "section_link_video", [], "any", false, false, false, 57);
                        echo "\">
\t\t\t\t\t\t<div style=\"z-index: 0; position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; overflow: hidden;\">
\t\t\t\t\t\t\t<video autoplay=\"\" style=\"width:100%;height:100%;\" loop=\"\" onended=\"this.play()\"><source src=\"";
                        // line 59
                        echo twig_get_attribute($this->env, $this->source, $context["row"], "section_link_video", [], "any", false, false, false, 59);
                        echo "\" type=\"video/webm\"></video>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 63
                    echo "\t\t\t";
                }
                // line 64
                echo "\t\t</section>
\t\t";
            }
            // line 66
            echo "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_page_builder/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 67,  321 => 66,  317 => 64,  314 => 63,  307 => 59,  297 => 57,  287 => 55,  285 => 54,  281 => 52,  278 => 51,  276 => 50,  270 => 46,  255 => 45,  252 => 44,  245 => 40,  235 => 38,  225 => 36,  222 => 35,  220 => 34,  217 => 33,  214 => 32,  211 => 31,  208 => 30,  205 => 29,  199 => 28,  193 => 26,  190 => 25,  186 => 24,  171 => 23,  153 => 22,  150 => 21,  143 => 17,  133 => 15,  123 => 13,  121 => 12,  117 => 11,  97 => 10,  90 => 9,  87 => 8,  83 => 6,  81 => 5,  60 => 4,  57 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_page_builder/default.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_page_builder\\default.twig");
    }
}
