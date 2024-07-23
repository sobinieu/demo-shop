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

/* so-sgame/template/extension/module/so_listing_tabs/default/default_items.twig */
class __TwigTemplate_6e24c27f1686fdfa9899321b4c33f0f96c11c8f1a6fa3af8ca1f9835cc434d22 extends \Twig\Template
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
        if ((($context["type_show"] ?? null) == "slider")) {
            // line 2
            echo "\t\t<div class=\"ltabs-items-inner owl2-carousel  ltabs-slider \">
";
        } else {
            // line 4
            echo "\t\t<div class=\"ltabs-items-inner ";
            echo (((($context["type_show"] ?? null) == "loadmore")) ? (((($context["class_ltabs"] ?? null) . " ") . ($context["effect"] ?? null))) : (" "));
            echo "\">
";
        }
        // line 6
        if ( !twig_test_empty(($context["child_items"] ?? null))) {
            // line 7
            echo "\t";
            $context["i"] = 0;
            // line 8
            echo "\t";
            $context["k"] = ((array_key_exists("rl_loaded", $context)) ? (($context["rl_loaded"] ?? null)) : (0));
            // line 9
            echo "\t";
            $context["count"] = twig_length_filter($this->env, ($context["child_items"] ?? null));
            // line 10
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["child_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 11
                echo "\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 12
                echo "\t\t\t";
                $context["k"] = (($context["k"] ?? null) + 1);
                // line 13
                echo "\t\t\t
\t\t\t";
                // line 14
                if (((($context["type_show"] ?? null) == "slider") && (((($context["i"] ?? null) % ($context["nb_rows"] ?? null)) == 1) || (($context["nb_rows"] ?? null) == 1)))) {
                    // line 15
                    echo "\t\t\t\t<div class=\"ltabs-item \">
\t\t\t";
                }
                // line 17
                echo "\t\t\t";
                if ((($context["type_show"] ?? null) == "loadmore")) {
                    // line 18
                    echo "\t\t\t\t<div class=\"ltabs-item new-ltabs-item\" >
\t\t\t";
                }
                // line 19
                echo "\t\t\t
\t\t\t<div class=\"product-layout transition product-grid\">

\t\t\t\t<div class=\"product-item-container\">
\t\t\t\t\t
                <div class=\"left-block\">
                ";
                // line 25
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productlabels", [], "any", false, false, false, 25))) {
                    // line 26
                    echo "                <div class=\"so_sticker\">
                    ";
                    // line 27
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "productlabels", [], "any", false, false, false, 27));
                    foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                        // line 28
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["label"], "type", [], "any", false, false, false, 28) == 1)) {
                            // line 29
                            echo "                            <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["label"], "thumb", [], "any", false, false, false, 29);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                            echo "\" class=\"ps-";
                            echo twig_get_attribute($this->env, $this->source, $context["label"], "position", [], "any", false, false, false, 29);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["label"], "custom_class", [], "any", false, false, false, 29);
                            echo "\" />
                        ";
                        } else {
                            // line 31
                            echo "                            <div class=\"label-text ps-";
                            echo twig_get_attribute($this->env, $this->source, $context["label"], "position", [], "any", false, false, false, 31);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["label"], "custom_class", [], "any", false, false, false, 31);
                            echo "\" style=\"color: ";
                            echo twig_get_attribute($this->env, $this->source, $context["label"], "color", [], "any", false, false, false, 31);
                            echo "; background-color: ";
                            echo twig_get_attribute($this->env, $this->source, $context["label"], "bgcolor", [], "any", false, false, false, 31);
                            echo "; font-size: ";
                            echo (((twig_get_attribute($this->env, $this->source, $context["label"], "fontsize", [], "any", false, false, false, 31) != "")) ? ((twig_get_attribute($this->env, $this->source, $context["label"], "fontsize", [], "any", false, false, false, 31) . "px")) : ("inherit"));
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["label"], "text", [], "any", false, false, false, 31);
                            echo "</div>
                        ";
                        }
                        // line 33
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "                </div>
                ";
                }
                // line 36
                echo "            \t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 37
                if (($context["product_image"] ?? null)) {
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"product-image-container ";
                    // line 38
                    if ((($context["product_image_num"] ?? null) == 2)) {
                        echo " ";
                        echo "second_img";
                        echo " ";
                    }
                    echo "\t\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 39
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 39);
                    echo "\" target=\"";
                    echo ($context["item_link_target"] ?? null);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name_maxlength", [], "any", false, false, false, 39);
                    echo "\"  >
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 41
                    if ((($context["product_image_num"] ?? null) == 2)) {
                        // line 42
                        echo "\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 42);
                        echo "\" class=\"img-1 lazyload\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name_maxlength", [], "any", false, false, false, 42);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        // line 43
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 43);
                        echo "\" class=\"img-2 lazyload\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name_maxlength", [], "any", false, false, false, 43);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 45
                        echo "\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 45);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name_maxlength", [], "any", false, false, false, 45);
                        echo "\" class=\"lazyload\">
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 46
                    echo "\t
\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 49
                echo "\t
\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
                // line 51
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 51) && ($context["display_sale"] ?? null))) {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">";
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 52);
                    echo " </span>
\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "productNew", [], "any", false, false, false, 54) && ($context["display_new"] ?? null))) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_new"], "method", false, false, false, 55);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"so-quickview\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 60);
                echo "' href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 60);
                echo "\" target=\"";
                echo ($context["item_link_target"] ?? null);
                echo "\" ></a>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"right-block\">

\t\t\t\t\t\t";
                // line 65
                if (($context["display_title"] ?? null)) {
                    // line 66
                    echo "\t\t\t\t\t\t\t<h4><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 66);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 66);
                    echo "\" target=\"";
                    echo ($context["item_link_target"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name_maxlength", [], "any", false, false, false, 66);
                    echo "</a></h4>
\t\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 69
                if (($context["display_rating"] ?? null)) {
                    // line 70
                    echo "\t\t\t\t\t\t\t<div class=\"rating\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t  \t";
                    // line 71
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 72
                        echo "\t\t\t\t\t\t\t  \t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 72) < $context["j"])) {
                            // line 73
                            echo "\t\t\t\t\t\t\t  \t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t  \t\t";
                        } else {
                            // line 75
                            echo "\t\t\t\t\t\t\t  \t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t  \t\t";
                        }
                        // line 77
                        echo "\t\t\t\t\t\t\t  \t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t
\t\t\t\t\t\t";
                // line 81
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 81) && ($context["display_price"] ?? null))) {
                    // line 82
                    echo "\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t  \t";
                    // line 83
                    if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 83))) {
                        // line 84
                        echo "\t\t\t\t\t\t\t  \t\t<span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 84);
                        echo "</span>
\t\t\t\t\t\t\t  \t";
                    } else {
                        // line 86
                        echo "\t\t\t\t\t\t\t  \t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 86);
                        echo "</span>
\t\t\t\t\t\t\t  \t\t<span class=\"price-old\">";
                        // line 87
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 87);
                        echo "</span>
\t\t\t\t\t\t\t  \t";
                    }
                    // line 89
                    echo "\t\t\t\t\t\t\t  \t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 91
                echo "\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 93
                if (((($context["display_wishlist"] ?? null) || ($context["display_compare"] ?? null)) || ($context["display_add_to_cart"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t<div class=\"button-group\">\t
\t\t\t\t\t\t\t\t";
                    // line 95
                    if (($context["display_add_to_cart"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addToCart btn-button\" title=\"";
                        // line 96
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 96);
                        echo "\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 96);
                        echo " ');\">
\t\t\t\t\t\t\t\t\t\t<svg width=\"18\" height=\"18\" class=\"icon-cart\"><use xlink:href=\"#icon-cart\"></use></svg><span>";
                        // line 97
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 97);
                        echo "</span>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 100
                    echo "\t\t\t\t\t\t\t\t";
                    if (($context["display_compare"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare btn-button\" title=\"";
                        // line 101
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_compare"], "method", false, false, false, 101);
                        echo " \" onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 101);
                        echo "');\"><i class=\"fa fa-bar-chart\"></i></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 102
                    echo " \t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    // line 103
                    if (($context["display_wishlist"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist btn-button\" title=\"";
                        // line 104
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_wishlist"], "method", false, false, false, 104);
                        echo "\" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 104);
                        echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 105
                    echo " \t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 107
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 109
                if (($context["display_description"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t<div class=\"item-des\">
\t\t\t\t\t\t\t\t";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description_maxlength", [], "any", false, false, false, 111);
                    echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                // line 119
                if (((($context["type_show"] ?? null) == "slider") && (((($context["i"] ?? null) % ($context["nb_rows"] ?? null)) == 0) || (($context["i"] ?? null) == ($context["count"] ?? null))))) {
                    // line 120
                    echo "\t\t\t</div>
\t\t\t";
                }
                // line 122
                echo "\t\t\t
\t\t\t";
                // line 123
                if ((($context["type_show"] ?? null) == "loadmore")) {
                    // line 124
                    echo "\t\t\t</div>
\t\t\t";
                }
                // line 126
                echo "
\t\t\t";
                // line 127
                if ((($context["type_show"] ?? null) == "loadmore")) {
                    // line 128
                    echo "\t\t\t\t";
                    $context["clear"] = "clr1";
                    // line 129
                    echo "\t\t\t\t";
                    if (((($context["k"] ?? null) % 2) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr2");
                        echo " ";
                    }
                    // line 130
                    echo "\t\t\t\t";
                    if (((($context["k"] ?? null) % 3) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr3");
                        echo " ";
                    }
                    // line 131
                    echo "\t\t\t\t";
                    if (((($context["k"] ?? null) % 4) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr4");
                        echo " ";
                    }
                    // line 132
                    echo "\t\t\t\t";
                    if (((($context["k"] ?? null) % 5) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr5");
                        echo " ";
                    }
                    // line 133
                    echo "\t\t\t\t";
                    if (((($context["k"] ?? null) % 6) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr6");
                        echo " ";
                    }
                    // line 134
                    echo "\t\t\t\t<div class=\"";
                    echo ($context["clear"] ?? null);
                    echo "\"></div>
\t\t\t";
                }
                // line 136
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "\t";
        }
        // line 138
        echo "</div>

";
        // line 140
        if ((($context["type_show"] ?? null) == "slider")) {
            // line 141
            echo "<script type=\"text/javascript\">
\tjQuery(document).ready(function(\$){
\t\tvar \$tag_id = \$('#";
            // line 143
            echo ($context["tag_id"] ?? null);
            echo "'), 
\t\tparent_active = \t\$('.items-category-";
            // line 144
            echo ($context["tab_id"] ?? null);
            echo "', \$tag_id),
\t\ttotal_product = parent_active.data('total'),
\t\ttab_active = \$('.ltabs-items-inner',parent_active),
\t\tnb_column0 = ";
            // line 147
            echo ($context["nb_column0"] ?? null);
            echo ",
\t\tnb_column1 = ";
            // line 148
            echo ($context["nb_column1"] ?? null);
            echo ",
\t\tnb_column2 = ";
            // line 149
            echo ($context["nb_column2"] ?? null);
            echo ",
\t\tnb_column3 = ";
            // line 150
            echo ($context["nb_column3"] ?? null);
            echo ",
\t\tnb_column4 = ";
            // line 151
            echo ($context["nb_column4"] ?? null);
            echo ";
\t\ttab_active.owlCarousel2({
\t\t\trtl: ";
            // line 153
            echo ($context["direction"] ?? null);
            echo ",
\t\t\tnav: ";
            // line 154
            echo ($context["display_nav"] ?? null);
            echo ",
\t\t\tdots: false,\t
\t\t\tmargin: 0,
\t\t\tloop:  ";
            // line 157
            echo ($context["display_loop"] ?? null);
            echo ",
\t\t\tautoplay: ";
            // line 158
            echo ($context["autoplay"] ?? null);
            echo ",
\t\t\tautoplayHoverPause: ";
            // line 159
            echo ($context["pausehover"] ?? null);
            echo ",
\t\t\tautoplayTimeout: ";
            // line 160
            echo ($context["autoplayTimeout"] ?? null);
            echo ",
\t\t\tautoplaySpeed: ";
            // line 161
            echo ($context["autoplaySpeed"] ?? null);
            echo ",
\t\t\tmouseDrag: ";
            // line 162
            echo ($context["mousedrag"] ?? null);
            echo ",
\t\t\ttouchDrag: ";
            // line 163
            echo ($context["touchdrag"] ?? null);
            echo ",
\t\t\tnavRewind: true,
\t\t\tnavText: [ '', '' ],
\t\t\tresponsive: {
\t\t\t\t0: {
\t\t\t\t\titems: nb_column4,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 169
            echo ($context["display_nav"] ?? null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t480: {
\t\t\t\t\titems: nb_column3,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 173
            echo ($context["display_nav"] ?? null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t768: {
\t\t\t\t\titems: nb_column2,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 177
            echo ($context["display_nav"] ?? null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t992: {
\t\t\t\t\titems: nb_column1,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 181
            echo ($context["display_nav"] ?? null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t1200: {
\t\t\t\t\titems: nb_column0,\t\t\t\t\t
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 185
            echo ($context["display_nav"] ?? null);
            echo ") ? true: false),
\t\t\t\t}
\t\t\t}
\t\t});
\t});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_listing_tabs/default/default_items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  580 => 185,  573 => 181,  566 => 177,  559 => 173,  552 => 169,  543 => 163,  539 => 162,  535 => 161,  531 => 160,  527 => 159,  523 => 158,  519 => 157,  513 => 154,  509 => 153,  504 => 151,  500 => 150,  496 => 149,  492 => 148,  488 => 147,  482 => 144,  478 => 143,  474 => 141,  472 => 140,  468 => 138,  465 => 137,  459 => 136,  453 => 134,  446 => 133,  439 => 132,  432 => 131,  425 => 130,  418 => 129,  415 => 128,  413 => 127,  410 => 126,  406 => 124,  404 => 123,  401 => 122,  397 => 120,  395 => 119,  387 => 113,  381 => 111,  376 => 109,  372 => 107,  367 => 105,  360 => 104,  356 => 103,  353 => 102,  346 => 101,  341 => 100,  335 => 97,  329 => 96,  325 => 95,  320 => 93,  316 => 91,  311 => 89,  306 => 87,  301 => 86,  295 => 84,  293 => 83,  290 => 82,  288 => 81,  285 => 80,  275 => 77,  271 => 75,  267 => 73,  264 => 72,  260 => 71,  257 => 70,  255 => 69,  252 => 68,  240 => 66,  238 => 65,  226 => 60,  221 => 57,  215 => 55,  212 => 54,  205 => 52,  203 => 51,  199 => 49,  193 => 46,  185 => 45,  178 => 43,  171 => 42,  169 => 41,  160 => 39,  152 => 38,  148 => 37,  145 => 36,  141 => 34,  135 => 33,  119 => 31,  107 => 29,  104 => 28,  100 => 27,  97 => 26,  95 => 25,  87 => 19,  83 => 18,  80 => 17,  76 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  60 => 10,  57 => 9,  54 => 8,  51 => 7,  49 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_listing_tabs/default/default_items.twig", "C:\\OSPanel\\domains\\gamer2\\storage\\modification\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_listing_tabs\\default\\default_items.twig");
    }
}
