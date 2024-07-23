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

/* default/template/extension/module/so_page_builder/default_row.twig */
class __TwigTemplate_62cba6f468993ce93cad0da03c6efe4f0fb950f94bdcc60c34c141f81e32eeb8 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows_child"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row_child"]) {
            // line 2
            echo "<div class=\"row ";
            echo twig_get_attribute($this->env, $this->source, $context["row_child"], "text_class_id", [], "any", false, false, false, 2);
            echo " ";
            echo (((twig_get_attribute($this->env, $this->source, $context["row_child"], "text_class", [], "any", false, false, false, 2) != "")) ? ((" " . twig_get_attribute($this->env, $this->source, $context["row_child"], "text_class", [], "any", false, false, false, 2))) : (""));
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["row_child"], "background_type", [], "any", false, false, false, 2) == 1)) {
                echo " ";
                echo "row-color";
                echo " ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["row_child"], "background_type", [], "any", false, false, false, 2) == 2)) {
                echo " ";
                echo "row-image";
                echo " ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["row_child"], "background_type", [], "any", false, false, false, 2) == 3)) {
                echo " ";
                echo "row-video";
                echo " ";
            }
            echo "\">
\t";
            // line 3
            if ((twig_get_attribute($this->env, $this->source, $context["row_child"], "background_type", [], "any", false, false, false, 3) == 3)) {
                // line 4
                echo "\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["row_child"], "video_type", [], "any", false, false, false, 4) == 0)) {
                    // line 5
                    echo "\t\t\t<div class=\"bg-video\" id=\"";
                    echo ($context["id_row_video"] ?? null);
                    echo "\" data-id=\"";
                    echo ($context["id_row_video"] ?? null);
                    echo "\" data-loop=\"true\" data-muted=\"true\" data-autoplay=\"true\" data-ratio=\"1.77\" data-overlay=\"\" data-swfpath=\"\"  data-youtube=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row_child"], "link_video", [], "any", false, false, false, 5);
                    echo "\"></div>
\t\t";
                } else {
                    // line 7
                    echo "\t\t\t<div class=\"bg-video\" id=\"";
                    echo ($context["id_row_video"] ?? null);
                    echo "\" data-id=\"";
                    echo ($context["id_row_video"] ?? null);
                    echo "\" data-loop=\"true\" data-muted=\"true\" data-autoplay=\"true\" data-ratio=\"1.77\" data-overlay=\"\" data-swfpath=\"\"  data-webm=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row_child"], "link_video", [], "any", false, false, false, 7);
                    echo "\">
\t\t\t\t<div style=\"z-index: 0; position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; overflow: hidden;\">
\t\t\t\t\t<video autoplay=\"\" style=\"width:100%;height:100%;\" loop=\"\" onended=\"this.play()\"><source src=\"";
                    // line 9
                    echo twig_get_attribute($this->env, $this->source, $context["row_child"], "link_video", [], "any", false, false, false, 9);
                    echo "\" type=\"video/webm\"></video>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
                }
                // line 13
                echo "\t";
            }
            // line 14
            echo "
\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row_child"], "cols", [], "any", false, false, false, 15));
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
                // line 16
                echo "\t\t<div class=\"col-lg-";
                echo twig_get_attribute($this->env, $this->source, $context["col"], "lg_col", [], "any", false, false, false, 16);
                echo " col-md-";
                echo twig_get_attribute($this->env, $this->source, $context["col"], "md_col", [], "any", false, false, false, 16);
                echo " col-sm-";
                echo twig_get_attribute($this->env, $this->source, $context["col"], "sm_col", [], "any", false, false, false, 16);
                echo " col-xs-";
                echo twig_get_attribute($this->env, $this->source, $context["col"], "xs_col", [], "any", false, false, false, 16);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["col"], "text_class_id", [], "any", false, false, false, 16);
                echo (((twig_get_attribute($this->env, $this->source, $context["col"], "text_class", [], "any", false, false, false, 16) != "")) ? ((" " . twig_get_attribute($this->env, $this->source, $context["col"], "text_class", [], "any", false, false, false, 16))) : (""));
                echo "\">
\t\t\t";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["col"], "widgets", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                    // line 18
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 18)) {
                        // line 19
                        echo "\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 19);
                        echo "
\t\t\t\t";
                    }
                    // line 21
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t\t
\t\t\t";
                // line 23
                if ((twig_get_attribute($this->env, $this->source, $context["col"], "rows", [], "any", false, false, false, 23) && twig_get_attribute($this->env, $this->source, $context["col"], "rows", [], "any", false, false, false, 23))) {
                    // line 24
                    echo "\t\t\t\t";
                    $context["rows_child"] = twig_get_attribute($this->env, $this->source, $context["col"], "rows", [], "any", false, false, false, 24);
                    // line 25
                    echo "\t\t\t\t";
                    $this->loadTemplate((($context["DIR_TEMPLATE"] ?? null) . ($context["template_row"] ?? null)), "default/template/extension/module/so_page_builder/default_row.twig", 25)->display($context);
                    // line 26
                    echo "\t\t\t";
                }
                // line 27
                echo "
\t\t\t";
                // line 28
                if ((twig_get_attribute($this->env, $this->source, $context["col"], "background_type", [], "any", false, false, false, 28) == 3)) {
                    // line 29
                    echo "\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["col"], "col_video_type", [], "any", false, false, false, 29) == 0)) {
                        // line 30
                        echo "\t\t\t\t\t<div class=\"bg-video\" id=\"";
                        echo ($context["id_col_video"] ?? null);
                        echo "\" data-id=\"";
                        echo ($context["id_col_video"] ?? null);
                        echo "\" data-loop=\"true\" data-muted=\"true\" data-autoplay=\"true\" data-ratio=\"1.77\" data-overlay=\"\" data-swfpath=\"\"  data-youtube=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["col"], "col_link_video", [], "any", false, false, false, 30);
                        echo "\"></div>
\t\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t\t\t<div class=\"bg-video\" id=\"";
                        echo ($context["id_col_video"] ?? null);
                        echo "\" data-id=\"";
                        echo ($context["id_col_video"] ?? null);
                        echo "\" data-loop=\"true\" data-muted=\"true\" data-autoplay=\"true\" data-ratio=\"1.77\" data-overlay=\"\" data-swfpath=\"\"  data-webm=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["col"], "col_link_video", [], "any", false, false, false, 32);
                        echo "\">
\t\t\t\t\t\t<div style=\"z-index: 0; position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; overflow: hidden;\">
\t\t\t\t\t\t\t<video autoplay=\"\" style=\"width:100%;height:100%;\" loop=\"\" onended=\"this.play()\"><source src=\"";
                        // line 34
                        echo twig_get_attribute($this->env, $this->source, $context["col"], "col_link_video", [], "any", false, false, false, 34);
                        echo "\" type=\"video/webm\"></video>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 38
                    echo "\t\t\t";
                }
                // line 39
                echo "\t\t</div>
\t";
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
            // line 41
            echo "</div>
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row_child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/so_page_builder/default_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 41,  215 => 39,  212 => 38,  205 => 34,  195 => 32,  185 => 30,  182 => 29,  180 => 28,  177 => 27,  174 => 26,  171 => 25,  168 => 24,  166 => 23,  163 => 22,  157 => 21,  151 => 19,  148 => 18,  144 => 17,  130 => 16,  113 => 15,  110 => 14,  107 => 13,  100 => 9,  90 => 7,  80 => 5,  77 => 4,  75 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/so_page_builder/default_row.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\default\\template\\extension\\module\\so_page_builder\\default_row.twig");
    }
}
