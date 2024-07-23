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

/* so-sgame/template/extension/module/so_listing_tabs/default2.twig */
class __TwigTemplate_65cfef86f68f723572b86a7e462e665b2038b7c5b6a704445e1f7b9afc4b3bb0 extends \Twig\Template
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
        echo "<div class=\"module ";
        echo ($context["direction_class"] ?? null);
        echo " ";
        echo ($context["class_suffix"] ?? null);
        echo "\">
\t";
        // line 2
        if (($context["disp_title_module"] ?? null)) {
            // line 3
            echo "\t\t";
            if ((($context["custom_url"] ?? null) != "")) {
                // line 4
                echo "\t\t\t<h3 class=\"modtitle\"><a href=\"";
                echo ($context["custom_url"] ?? null);
                echo "\"><span>";
                echo ($context["head_name"] ?? null);
                echo "</span></a></h3>
\t\t";
            } else {
                // line 6
                echo "\t\t\t<h3 class=\"modtitle\"><span>";
                echo ($context["head_name"] ?? null);
                echo "</span></h3>
\t\t";
            }
            // line 8
            echo "\t";
        }
        // line 9
        echo "\t";
        if ((($context["pre_text"] ?? null) != "")) {
            // line 10
            echo "\t\t<div class=\"pre_content\">
\t\t\t";
            // line 11
            echo ($context["pre_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 14
        echo "\t<div class=\"modcontent\">
\t\t<!--[if lt IE 9]>
\t\t<div id=\"";
        // line 16
        echo ($context["tag_id"] ?? null);
        echo "\" class=\"so-listing-tabs msie lt-ie9 first-load module\"><![endif]-->
\t\t<!--[if IE 9]>
\t\t<div id=\"";
        // line 18
        echo ($context["tag_id"] ?? null);
        echo "\" class=\"so-listing-tabs msie first-load module\"><![endif]-->
\t\t<!--[if gt IE 9]><!-->
\t\t<div id=\"";
        // line 20
        echo ($context["tag_id"] ?? null);
        echo "\" class=\"so-listing-tabs first-load module\"><!--<![endif]-->
\t\t\t";
        // line 21
        if ( !twig_test_empty(($context["list"] ?? null))) {
            // line 22
            echo "\t\t\t\t<div class=\"ltabs-wrap \">
\t\t\t\t\t<div class=\"ltabs-tabs-container\" data-delay=\"";
            // line 23
            echo ($context["delay"] ?? null);
            echo "\"
\t\t\t\t\t \tdata-duration=\"";
            // line 24
            echo ($context["duration"] ?? null);
            echo "\"
\t\t\t\t\t \tdata-effect=\"";
            // line 25
            echo ($context["effect"] ?? null);
            echo "\"
\t\t\t\t\t \tdata-ajaxurl=\"";
            // line 26
            echo ($context["ajaxurl"] ?? null);
            echo "\" data-type_source=\"";
            echo ($context["type_source"] ?? null);
            echo "\"
\t\t\t\t\t \tdata-type_show=\"";
            // line 27
            echo ($context["type_show"] ?? null);
            echo "\" >
\t\t\t\t\t\t 
\t\t\t\t\t\t";
            // line 29
            echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_listing_tabs/default2/default_tabs.twig"));
            echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wap-listing-tabs products-list grid\">\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 33
            if ((($context["display_banner_image"] ?? null) == 1)) {
                // line 34
                echo "\t\t\t\t\t\t\t<div class=\"item-cat-image\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 35
                echo ($context["banner_image_url"] ?? null);
                echo "\" title=\"\" target=\"";
                echo ($context["item_link_target"] ?? null);
                echo "\" >
\t\t\t\t\t\t\t\t\t<img class=\"categories-loadimage\" title=\"\" alt=\"\" src=\"";
                // line 36
                echo ($context["banner_image"] ?? null);
                echo "\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t
\t\t\t\t\t\t<div class=\"ltabs-items-container\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["items"]) {
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 43
                $context["child_items"] = ((twig_get_attribute($this->env, $this->source, $context["items"], "child", [], "any", true, true, false, 43)) ? (twig_get_attribute($this->env, $this->source, $context["items"], "child", [], "any", false, false, false, 43)) : (""));
                // line 44
                echo "\t\t\t\t\t\t\t\t";
                $context["cls"] = (((twig_get_attribute($this->env, $this->source, $context["items"], "sel", [], "any", true, true, false, 44) && (twig_get_attribute($this->env, $this->source, $context["items"], "sel", [], "any", false, false, false, 44) == "sel"))) ? (" ltabs-items-selected ltabs-items-loaded") : (""));
                // line 45
                echo "\t\t\t\t\t\t\t\t";
                $context["cls"] = (($context["cls"] ?? null) . (((twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 45) == "*")) ? (" items-category-all") : ((" items-category-" . twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 45)))));
                // line 46
                echo "\t\t\t\t\t\t\t\t";
                $context["tab_id"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), $context["key"], [], "array", false, true, false, 46), "sel", [], "array", true, true, false, 46)) ? (twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 46)) : (""));
                // line 47
                echo "\t\t\t\t\t\t\t\t";
                $context["tab_id"] = (((($context["tab_id"] ?? null) == "*")) ? ("all") : (($context["tab_id"] ?? null)));
                // line 48
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"products-list ltabs-items ";
                // line 49
                echo ($context["cls"] ?? null);
                echo " \" data-total=\"";
                echo twig_get_attribute($this->env, $this->source, $context["items"], "count", [], "any", false, false, false, 49);
                echo "\" >
\t\t\t\t\t\t\t\t\t";
                // line 53
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["child_items"] ?? null)) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_listing_tabs/default2/default_items.twig"));
                    echo "
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 56
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ltabs-loading\"></div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t\t\t\t\t\t";
                $context["classloaded"] = ((((($context["source_limit"] ?? null) >= twig_get_attribute($this->env, $this->source, $context["items"], "count", [], "any", false, false, false, 58)) || (($context["source_limit"] ?? null) == 0))) ? ("loaded") : (""));
                // line 59
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 60
                if ((($context["type_show"] ?? null) == "loadmore")) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ltabs-loadmore\"
\t\t\t\t\t\t\t\t\t\t\t data-active-content=\".items-category-";
                    // line 62
                    echo (((twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 62) == "*")) ? ("all") : (twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 62)));
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-categoryid\t=\"";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 63);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_start\t\t=\"";
                    // line 64
                    echo ($context["source_limit"] ?? null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_total\t\t=\"";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, $context["items"], "count", [], "any", false, false, false, 65);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_allready\t=\"All ready\"
\t\t\t\t\t\t\t\t\t\t\t data-ajaxurl\t\t=\"";
                    // line 67
                    echo ($context["ajaxurl"] ?? null);
                    echo "\" 
\t\t\t\t\t\t\t\t\t\t\t data-rl_load\t\t=\"";
                    // line 68
                    echo ($context["source_limit"] ?? null);
                    echo "\" 
\t\t\t\t\t\t\t\t\t\t\t data-moduleid\t\t='";
                    // line 69
                    echo ($context["moduleid"] ?? null);
                    echo "'
\t\t\t\t\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ltabs-loadmore-btn ";
                    // line 71
                    echo ($context["classloaded"] ?? null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t data-label=\"";
                    // line 72
                    echo ((($context["classloaded"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "all_ready"], "method", false, false, false, 72)) : (twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "load_more"], "method", false, false, false, 72)));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ltabs-image-loading\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 78
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 83
            echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_listing_tabs/default2/default_js.twig"));
            echo "
\t\t\t";
        } else {
            // line 85
            echo "\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_noproduct"], "method", false, false, false, 85);
            echo "
\t\t\t";
        }
        // line 87
        echo "\t\t</div>
\t</div> <!-- /.modcontent-->
\t
\t";
        // line 90
        if ((($context["post_text"] ?? null) != "")) {
            // line 91
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 92
            echo ($context["post_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 95
        echo "</div>\t";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_listing_tabs/default2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 95,  304 => 92,  301 => 91,  299 => 90,  294 => 87,  288 => 85,  283 => 83,  278 => 80,  263 => 78,  254 => 72,  250 => 71,  245 => 69,  241 => 68,  237 => 67,  232 => 65,  228 => 64,  224 => 63,  220 => 62,  217 => 61,  215 => 60,  212 => 59,  209 => 58,  205 => 56,  199 => 54,  196 => 53,  190 => 49,  187 => 48,  184 => 47,  181 => 46,  178 => 45,  175 => 44,  173 => 43,  154 => 42,  149 => 39,  142 => 36,  136 => 35,  133 => 34,  131 => 33,  124 => 29,  119 => 27,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  98 => 22,  96 => 21,  92 => 20,  87 => 18,  82 => 16,  78 => 14,  72 => 11,  69 => 10,  66 => 9,  63 => 8,  57 => 6,  49 => 4,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_listing_tabs/default2.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_listing_tabs\\default2.twig");
    }
}
