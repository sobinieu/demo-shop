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

/* so-sgame/template/extension/module/so_extra_slider/default.twig */
class __TwigTemplate_05b5f36173a46afc2e761f8d7bf07a1a505a60defd9b2df5873a5493eebe61da extends \Twig\Template
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
        echo "<!-- default Grid  -->
<div class=\"module ";
        // line 2
        echo ($context["direction_class"] ?? null);
        echo " ";
        echo ($context["class_suffix"] ?? null);
        echo "\">
\t
\t";
        // line 4
        if (($context["disp_title_module"] ?? null)) {
            // line 5
            echo "\t\t";
            if ((($context["custom_url"] ?? null) != "")) {
                // line 6
                echo "\t\t\t<h3 class=\"modtitle\"><a href=\"";
                echo ($context["custom_url"] ?? null);
                echo "\"><span>";
                echo ($context["head_name"] ?? null);
                echo "</span></a></h3>
\t\t";
            } else {
                // line 8
                echo "\t\t\t<h3 class=\"modtitle\"><span>";
                echo ($context["head_name"] ?? null);
                echo "</span></h3>
\t\t";
            }
            // line 10
            echo "\t";
        }
        // line 11
        echo "\t<div class=\"modcontent\">
\t\t";
        // line 12
        if ( !twig_test_empty(twig_trim_filter(($context["pre_text"] ?? null)))) {
            echo " 
\t\t\t<div class=\"form-group\">
\t\t\t\t";
            // line 14
            echo ($context["pre_text"] ?? null);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 17
        echo "\t\t";
        if (twig_test_empty(($context["products"] ?? null))) {
            // line 18
            echo "\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> 
\t\t\t\t";
            // line 19
            echo ($context["text_noproduct"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t</div>

\t\t";
        } else {
            // line 24
            echo "\t\t\t";
            $context["count_item"] = twig_length_filter($this->env, ($context["products"] ?? null));
            echo "\t
\t\t\t";
            // line 25
            $context["cls_btn_page"] = (((($context["button_page"] ?? null) == "top")) ? ("buttom-type1") : ("button-type2"));
            echo "\t
\t\t\t";
            // line 26
            $context["btn_type"] = (((($context["button_page"] ?? null) == "top")) ? ("button-type1") : ("button-type2"));
            // line 27
            echo "\t\t\t
\t\t\t";
            // line 28
            $context["tag_id"] = ("so_extra_slider_" . ($context["suffix"] ?? null));
            // line 29
            echo "\t\t\t";
            $context["class_respl"] = ((((((((("preset00-" . ($context["nb_column0"] ?? null)) . " preset01-") . ($context["nb_column1"] ?? null)) . " preset02-") . ($context["nb_column2"] ?? null)) . " preset03-") . ($context["nb_column3"] ?? null)) . " preset04-") . ($context["nb_column4"] ?? null));
            // line 30
            echo "\t\t\t";
            $context["btn_prev"] = (((($context["button_page"] ?? null) == "top")) ? ("&#171") : ("&#139"));
            // line 31
            echo "\t\t\t";
            $context["btn_next"] = (((($context["button_page"] ?? null) == "top")) ? ("&#187") : ("&#155"));
            // line 32
            echo "\t\t\t";
            $context["i"] = 0;
            // line 33
            echo "
\t\t\t<div id=\"";
            // line 34
            echo ($context["tag_id"] ?? null);
            echo "\" class=\"so-extraslider ";
            echo ($context["cls_btn_page"] ?? null);
            echo " ";
            echo ($context["class_respl"] ?? null);
            echo " ";
            echo ($context["btn_type"] ?? null);
            echo "\">
\t\t\t\t<!-- Begin extraslider-inner -->
\t\t\t\t<div class=\"extraslider-inner products-list \" data-effect=\"";
            // line 36
            echo ($context["effect"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["product"]) {
                // line 38
                echo "\t\t\t\t\t\t";
                $context["i"] = ($context["i"] + 1);
                // line 39
                echo "\t\t\t\t\t\t";
                if (((($context["i"] % ($context["nb_rows"] ?? null)) == 1) || (($context["nb_rows"] ?? null) == 1))) {
                    echo " 
\t\t\t\t\t\t<div class=\"item \">
\t\t\t\t\t\t";
                }
                // line 41
                echo " 

\t\t\t\t\t\t\t<div class=\"product-layout product-grid ";
                // line 43
                echo ($context["products_style"] ?? null);
                echo " \">
\t\t\t\t\t\t\t\t<div class=\"product-item-container\">
\t\t\t\t\t\t\t\t\t<div class=\"left-block\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-container ";
                // line 46
                if ((($context["product_image_num"] ?? null) == 2)) {
                    echo " ";
                    echo "second_img";
                    echo " ";
                }
                echo "\t\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 47);
                echo "\" target=\"";
                echo ($context["item_link_target"] ?? null);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 47);
                echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 48
                if ((($context["product_image_num"] ?? null) == 2)) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 49);
                    echo "\" class=\"img-1\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 49);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 50);
                    echo "\" class=\"img-2\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 50);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 52);
                    echo "\" class=\"img-1\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 52);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-color-swatch\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 58
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 58) && ($context["display_sale"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">";
                    // line 59
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 59);
                    echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 60
                echo " 

\t\t\t\t\t\t\t\t\t\t\t";
                // line 62
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "productNew", [], "any", false, false, false, 62) && ($context["display_new"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_new"], "method", false, false, false, 63);
                    echo " </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 64
                echo " \t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"so-quickview\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 67);
                echo "' href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 67);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"right-block\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t";
                // line 73
                if (($context["display_title"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
                    echo "\" target=\"";
                    echo ($context["item_link_target"] ?? null);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 75);
                    echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 76);
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 79
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 81
                if (($context["display_rating"] ?? null)) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 82)) {
                        // line 83
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 84
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                            // line 85
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 86
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 86) < $context["k"])) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            } else {
                                // line 88
                                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 90
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 91
                            $context["k"] = ($context["k"] + 1);
                            // line 92
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 94
                        echo "  
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 96
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                            // line 97
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 99
                            $context["j"] = ($context["j"] + 1);
                            // line 100
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " \t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 102
                    echo "\t
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 103
                echo "\t

\t\t\t\t\t\t\t\t\t\t";
                // line 105
                if (($context["display_price"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t<div  class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 107
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 107)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 109
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 109);
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 111
                        echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        // line 112
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 112);
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        // line 113
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 113);
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 114
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 117
                echo " 
\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 119
                if (($context["display_addtocart"] ?? null)) {
                    echo " \t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addToCart btn-button\" title=\"";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 120);
                    echo "\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 120);
                    echo "');\"><svg width=\"18\" height=\"18\" class=\"icon-cart\"><use xlink:href=\"#icon-cart\"></use></svg><span>";
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 120);
                    echo "</span></button>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 121
                echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 122
                if (($context["display_compare"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare btn-button\" title=\"";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_compare"], "method", false, false, false, 123);
                    echo "\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123);
                    echo "');\"><i class=\"fa fa-bar-chart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 124
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 126
                if (($context["display_wishlist"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist btn-button\" title=\"";
                    // line 127
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_wishlist"], "method", false, false, false, 127);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 127);
                    echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 128
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 130
                if (($context["display_description"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-des\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 132);
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 134
                echo " 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End item-wrap-inner -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End item-wrap -->

\t\t\t\t\t\t";
                // line 142
                if (((($context["i"] % ($context["nb_rows"] ?? null)) == 0) || ($context["i"] == ($context["count_item"] ?? null)))) {
                    echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 144
                echo " 

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "\t 
\t\t\t\t</div>
\t\t\t\t<!--End extraslider-inner -->

\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t//<![CDATA[
\t\t\t\tjQuery(document).ready(function (\$) {
\t\t\t\t\t(function (element) {
\t\t\t\t\t\tvar \$element = \$(element),
\t\t\t\t\t\t\t\t\$extraslider = \$(\".extraslider-inner\", \$element),
\t\t\t\t\t\t\t\t_delay = ";
            // line 156
            echo ($context["delay"] ?? null);
            echo " ,
\t\t\t\t\t\t\t\t_duration = ";
            // line 157
            echo ($context["duration"] ?? null);
            echo " ,
\t\t\t\t\t\t\t\t_effect = '";
            // line 158
            echo ($context["effect"] ?? null);
            echo " ';

\t\t\t\t\t\t\$extraslider.on(\"initialized.owl.carousel2\", function () {
\t\t\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tvar \$item = \$(\".owl2-item\", \$element);
\t\t\t\t\t\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            // line 169
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 176
            echo "
\t\t\t\t\t\t\t";
            // line 177
            if ((($context["button_page"] ?? null) == "top")) {
                echo " 
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-dots\", \$element).insertAfter(\$(\".owl2-prev\", \$element));
\t\t\t\t\t\t\t";
            } else {
                // line 180
                echo "  
\t\t\t\t\t\t\t\t\$(\".owl2-nav\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertAfter(\$extraslider);
\t\t\t\t\t\t\t";
            }
            // line 184
            echo "
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.owlCarousel2({
\t\t\t\t\t\t\trtl: ";
            // line 188
            echo ($context["direction"] ?? null);
            echo ",
\t\t\t\t\t\t\tmargin: ";
            // line 189
            echo ($context["margin"] ?? null);
            echo ",
\t\t\t\t\t\t\tslideBy: ";
            // line 190
            echo ($context["slideBy"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplay: ";
            // line 191
            echo ($context["autoplay"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayHoverPause: ";
            // line 192
            echo ($context["autoplayHoverPause"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayTimeout: ";
            // line 193
            echo ($context["autoplayTimeout"] ?? null);
            echo " ,
\t\t\t\t\t\t\tautoplaySpeed: ";
            // line 194
            echo ($context["autoplaySpeed"] ?? null);
            echo " ,
\t\t\t\t\t\t\tstartPosition: ";
            // line 195
            echo ($context["startPosition"] ?? null);
            echo " ,
\t\t\t\t\t\t\tmouseDrag: ";
            // line 196
            echo ($context["mouseDrag"] ?? null);
            echo ",
\t\t\t\t\t\t\ttouchDrag: ";
            // line 197
            echo ($context["touchDrag"] ?? null);
            echo " ,
\t\t\t\t\t\t\tautoWidth: false,
\t\t\t\t\t\t\tautoHeight: false,
\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t0: \t{ items: ";
            // line 201
            echo ($context["nb_column4"] ?? null);
            echo " } ,
\t\t\t\t\t\t\t\t480: { items: ";
            // line 202
            echo ($context["nb_column3"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t768: { items: ";
            // line 203
            echo ($context["nb_column2"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t992: { items: ";
            // line 204
            echo ($context["nb_column1"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t1200: {items: ";
            // line 205
            echo ($context["nb_column0"] ?? null);
            echo "}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tdotClass: \"owl2-dot\",
\t\t\t\t\t\t\tdotsClass: \"owl2-dots\",
\t\t\t\t\t\t\tdots: ";
            // line 209
            echo ($context["dots"] ?? null);
            echo " ,
\t\t\t\t\t\t\tdotsSpeed:";
            // line 210
            echo ($context["dotsSpeed"] ?? null);
            echo " ,
\t\t\t\t\t\t\tnav: ";
            // line 211
            echo ($context["nav"] ?? null);
            echo " ,
\t\t\t\t\t\t\tloop: ";
            // line 212
            echo ($context["loop"] ?? null);
            echo " ,
\t\t\t\t\t\t\tnavSpeed: ";
            // line 213
            echo ($context["navSpeed"] ?? null);
            echo " ,
\t\t\t\t\t\t\tnavText: [\"";
            // line 214
            echo ($context["btn_prev"] ?? null);
            echo " \", \"";
            echo ($context["btn_next"] ?? null);
            echo " \"],
\t\t\t\t\t\t\tnavClass: [\"owl2-prev\", \"owl2-next\"]

\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translate.owl.carousel2\", function (e) {
\t\t\t\t        \t";
            // line 220
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t        \tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t        \t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t}
\t\t\t\t        \t";
            }
            // line 226
            echo " 
\t\t\t\t        \tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t        \t_UngetAnimate(\$item_active);
\t\t\t\t        \t_getAnimate(\$item_active);
\t\t\t\t        });
\t\t\t\t        \$extraslider.on(\"translated.owl.carousel2\", function (e) {
\t\t\t\t        \t";
            // line 232
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t        \tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t        \t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t}
\t\t\t\t        \t";
            }
            // line 238
            echo " 
\t\t\t\t        \tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t        \tvar \$item = \$(\".owl2-item\", \$element);
\t\t\t\t        \t_UngetAnimate(\$item);
\t\t\t\t        \tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t        \t\t_getAnimate(\$item_active);
\t\t\t\t        \t} else {
\t\t\t\t        \t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t        \t}
\t\t\t\t        });
\t\t\t\t        function _getAnimate(\$el) {
\t\t\t\t        \tif (_effect == \"none\") return;
\t\t\t\t        \t//if (\$.browser.msie && parseInt(\$.browser.version, 10) <= 9) return;
\t\t\t\t        \t\$extraslider.removeClass(\"extra-animate\");
\t\t\t\t        \t\$el.each(function (i) {
\t\t\t\t        \t\tvar \$_el = \$(this);
\t\t\t\t        \t\tvar i= i + 1;
\t\t\t\t        \t\t\$(this).css({
\t\t\t\t        \t\t\t\"-webkit-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"-moz-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"-o-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"-webkit-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t\"-moz-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t\"-o-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t\"animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t
\t\t\t\t        \t\t}).animate({
\t\t\t\t        \t\t\t
\t\t\t\t        \t\t});
\t\t\t\t        \t\tif (i == \$el.size() - 1) {
\t\t\t\t        \t\t\t\$extraslider.addClass(\"extra-animate\");
\t\t\t\t        \t\t}
\t\t\t\t        \t});
\t\t\t\t        }
\t\t\t\t        function _UngetAnimate(\$el) {
\t\t\t\t        \t\$el.each(function (i) {
\t\t\t\t        \t\t\$(this).css({
\t\t\t\t        \t\t\t\"animation\": \"\",
\t\t\t\t        \t\t\t\"-webkit-animation\": \"\",
\t\t\t\t        \t\t\t\"-moz-animation\": \"\",
\t\t\t\t        \t\t\t\"-o-animation\": \"\",
\t\t\t\t        \t\t});
\t\t\t\t        \t});
\t\t\t\t        } 
\t\t\t\t\t})(\"#";
            // line 283
            echo ($context["tag_id"] ?? null);
            echo " \");
\t\t\t\t});
\t\t\t\t//]]>
\t\t\t</script>

\t\t\t</div>
\t\t";
        }
        // line 290
        echo "\t
\t</div> 
\t";
        // line 292
        if ( !twig_test_empty(twig_trim_filter(($context["post_text"] ?? null)))) {
            echo " 
\t\t<div class=\"form-group\">
\t\t\t";
            // line 294
            echo ($context["post_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 297
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_extra_slider/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  731 => 297,  725 => 294,  720 => 292,  716 => 290,  706 => 283,  659 => 238,  649 => 232,  641 => 226,  631 => 220,  620 => 214,  616 => 213,  612 => 212,  608 => 211,  604 => 210,  600 => 209,  593 => 205,  589 => 204,  585 => 203,  581 => 202,  577 => 201,  570 => 197,  566 => 196,  562 => 195,  558 => 194,  554 => 193,  550 => 192,  546 => 191,  542 => 190,  538 => 189,  534 => 188,  528 => 184,  522 => 180,  515 => 177,  512 => 176,  502 => 169,  488 => 158,  484 => 157,  480 => 156,  468 => 146,  460 => 144,  454 => 142,  444 => 134,  438 => 132,  433 => 130,  429 => 128,  422 => 127,  418 => 126,  414 => 124,  407 => 123,  403 => 122,  400 => 121,  391 => 120,  387 => 119,  383 => 117,  377 => 114,  372 => 113,  368 => 112,  365 => 111,  359 => 109,  354 => 107,  349 => 105,  345 => 103,  341 => 102,  331 => 100,  329 => 99,  325 => 97,  321 => 96,  317 => 94,  307 => 92,  305 => 91,  302 => 90,  297 => 88,  291 => 86,  288 => 85,  284 => 84,  281 => 83,  278 => 82,  276 => 81,  272 => 79,  265 => 76,  257 => 75,  252 => 73,  241 => 67,  236 => 64,  231 => 63,  227 => 62,  223 => 60,  217 => 59,  213 => 58,  207 => 54,  199 => 52,  192 => 50,  185 => 49,  183 => 48,  175 => 47,  167 => 46,  161 => 43,  157 => 41,  150 => 39,  147 => 38,  143 => 37,  139 => 36,  128 => 34,  125 => 33,  122 => 32,  119 => 31,  116 => 30,  113 => 29,  111 => 28,  108 => 27,  106 => 26,  102 => 25,  97 => 24,  89 => 19,  86 => 18,  83 => 17,  77 => 14,  72 => 12,  69 => 11,  66 => 10,  60 => 8,  52 => 6,  49 => 5,  47 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_extra_slider/default.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_extra_slider\\default.twig");
    }
}
