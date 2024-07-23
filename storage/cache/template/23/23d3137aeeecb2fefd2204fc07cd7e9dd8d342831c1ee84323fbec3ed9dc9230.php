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

/* so-sgame/template/extension/module/so_megamenu/default.twig */
class __TwigTemplate_ce90079a8c9c516605c94d0464a1fd2e80662f984b75e48605c29dc9f45a36cb extends \Twig\Template
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
        $context["suffix_id"] = ("so_megamenu_" . twig_random($this->env, 100));
        // line 2
        $context["show_verticalmenu_id"] = ("show-verticalmenu-" . twig_random($this->env, 100));
        // line 3
        $context["remove_verticalmenu_id"] = ("remove-verticalmenu-" . twig_random($this->env, 100));
        // line 4
        $context["show_megamenu_id"] = ("show-megamenu-" . twig_random($this->env, 100));
        // line 5
        $context["remove_megamenu_id"] = ("remove-megamenu-" . twig_random($this->env, 100));
        // line 6
        echo "

<div id=\"";
        // line 8
        echo ($context["suffix_id"] ?? null);
        echo "\" class=\"responsive megamenu-style-dev\">
\t";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 9) == 1)) {
            // line 10
            echo "\t<div class=\"so-vertical-menu no-gutter\">
\t";
        }
        // line 12
        echo "\t
\t";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "disp_title_module", [], "any", false, false, false, 13) && ($context["head_name"] ?? null))) {
            // line 14
            echo "\t\t<h3>";
            echo ($context["head_name"] ?? null);
            echo "</h3>
\t";
        }
        // line 16
        echo "\t<nav class=\"navbar-default\">
\t\t<div class=\" container-megamenu ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "full_width", [], "any", false, false, false, 17) != 1)) {
            echo " ";
            echo "container";
            echo " ";
        }
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 17) == 1)) {
            echo " ";
            echo "vertical ";
            echo " ";
        } else {
            echo " ";
            echo "horizontal";
            echo " ";
        }
        echo "\">
\t\t";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 18) == 1)) {
            // line 19
            echo "\t\t\t<div id=\"menuHeading\">
\t\t\t\t<div class=\"megamenuToogle-wrapper\">
\t\t\t\t\t<div class=\"megamenuToogle-pattern\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div><span></span><span></span><span></span></div>
\t\t\t\t\t\t\t<b>";
            // line 24
            echo ($context["navigation_text"] ?? null);
            echo "</b>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" id=\"";
            // line 30
            echo ($context["show_verticalmenu_id"] ?? null);
            echo "\" data-toggle=\"collapse\"  class=\"navbar-toggle\">
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>

\t\t\t\t</button>
\t\t\t</div>
\t\t";
        } else {
            // line 38
            echo "\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" id=\"";
            // line 39
            echo ($context["show_megamenu_id"] ?? null);
            echo "\" data-toggle=\"collapse\"  class=\"navbar-toggle\">
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t</div>
\t\t";
        }
        // line 46
        echo "
\t\t";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 47) == 1)) {
            // line 48
            echo "\t\t\t<div class=\"vertical-wrapper\">
\t\t";
        } else {
            // line 50
            echo "\t\t\t<div class=\"megamenu-wrapper\">
\t\t";
        }
        // line 52
        echo "
\t\t";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 53) == 1)) {
            // line 54
            echo "\t\t\t<span id=\"";
            echo ($context["remove_verticalmenu_id"] ?? null);
            echo "\" class=\"remove-verticalmenu pe-7s-close icon-close\"></span>
\t\t";
        } else {
            // line 56
            echo "\t\t\t<span id=\"";
            echo ($context["remove_megamenu_id"] ?? null);
            echo "\" class=\"pe-7s-close icon-close\"></span>
\t\t";
        }
        // line 58
        echo "
\t\t\t<div class=\"megamenu-pattern\">\t\t\t
\t\t\t\t<ul class=\"megamenu\"
\t\t\t\tdata-transition=\"";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "animation", [], "any", false, false, false, 61) != "")) {
            echo twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "animation", [], "any", false, false, false, 61);
        } else {
            echo "none";
        }
        echo "\" data-animationtime=\"";
        if (((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "animation_time", [], "any", false, false, false, 61) > 0) && (twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "animation_time", [], "any", false, false, false, 61) < 5000))) {
            echo twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "animation_time", [], "any", false, false, false, 61);
        } else {
            echo 500;
        }
        echo "\">
\t\t\t\t\t";
        // line 62
        if (((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "home_item", [], "any", false, false, false, 62) == "icon") || (twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "home_item", [], "any", false, false, false, 62) == "text"))) {
            // line 63
            echo "\t\t\t\t\t\t<li class=\"home\">
\t\t\t\t\t\t\t<a href=\"";
            // line 64
            echo ($context["home"] ?? null);
            echo "\">
\t\t\t\t\t\t\t";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "home_item", [], "any", false, false, false, 65) == "icon")) {
                // line 66
                echo "\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t";
            } else {
                // line 68
                echo "\t\t\t\t\t\t\t\t<span><strong>";
                echo ($context["home_text"] ?? null);
                echo "</strong></span>
\t\t\t\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 75
            echo "\t\t\t\t\t\t";
            $context["class"] = "";
            // line 76
            echo "\t\t\t\t\t\t";
            $context["icon_font"] = "";
            // line 77
            echo "\t\t\t\t\t\t";
            $context["class_link"] = "clearfix";
            // line 78
            echo "\t\t\t\t\t\t";
            $context["label_item"] = "";
            // line 79
            echo "\t\t\t\t\t\t";
            $context["title"] = false;
            // line 80
            echo "\t\t\t\t\t\t";
            $context["target"] = false;
            // line 81
            echo "
\t\t\t\t\t\t";
            // line 82
            if (twig_in_filter("no_image", twig_get_attribute($this->env, $this->source, $context["row"], "icon", [], "any", false, false, false, 82))) {
                // line 83
                echo "\t\t\t\t\t\t\t";
                $context["icon"] = "";
                // line 84
                echo "\t\t\t\t\t\t";
            } else {
                // line 85
                echo "\t\t\t\t\t\t\t";
                $context["icon"] = twig_get_attribute($this->env, $this->source, $context["row"], "icon", [], "any", false, false, false, 85);
                // line 86
                echo "\t\t\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 88
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 88) != "")) {
                // line 89
                echo "\t\t\t\t\t\t\t";
                $context["class_link"] = (($context["class_link"] ?? null) . " description");
                // line 90
                echo "\t\t\t\t\t\t";
            }
            // line 91
            echo "
\t\t\t\t\t\t";
            // line 92
            if ((((($context["route"] ?? null) && (($context["route"] ?? null) == twig_get_attribute($this->env, $this->source, $context["row"], "route", [], "any", false, false, false, 92))) && ($context["path"] ?? null)) && (($context["path"] ?? null) == twig_get_attribute($this->env, $this->source, $context["row"], "path", [], "any", false, false, false, 92)))) {
                // line 93
                echo "\t\t\t\t\t\t\t";
                $context["class"] = (($context["class"] ?? null) . " active_menu");
                // line 94
                echo "\t\t\t\t\t\t";
            }
            // line 95
            echo "
\t\t\t\t\t\t";
            // line 96
            if (twig_get_attribute($this->env, $this->source, $context["row"], "class_menu", [], "any", false, false, false, 96)) {
                // line 97
                echo "\t\t\t\t\t\t\t";
                $context["class"] = (($context["class"] ?? null) . twig_get_attribute($this->env, $this->source, $context["row"], "class_menu", [], "any", false, false, false, 97));
                // line 98
                echo "\t\t\t\t\t\t";
            }
            // line 99
            echo "
\t\t\t\t\t\t";
            // line 100
            if (twig_get_attribute($this->env, $this->source, $context["row"], "icon_font", [], "any", false, false, false, 100)) {
                // line 101
                echo "\t\t\t\t\t\t\t";
                $context["icon_font"] = (((($context["icon_font"] ?? null) . "<i class=\"") . twig_get_attribute($this->env, $this->source, $context["row"], "icon_font", [], "any", false, false, false, 101)) . "\"></i>");
                // line 102
                echo "\t\t\t\t\t\t";
            }
            // line 103
            echo "
\t\t\t\t\t\t";
            // line 104
            if (twig_get_attribute($this->env, $this->source, $context["row"], "label_item", [], "any", false, false, false, 104)) {
                // line 105
                echo "\t\t\t\t\t\t\t";
                $context["label_item"] = (((($context["label_item"] ?? null) . "<span class=\"label") . twig_get_attribute($this->env, $this->source, $context["row"], "label_item", [], "any", false, false, false, 105)) . "\"></span>");
                // line 106
                echo "\t\t\t\t\t\t";
            }
            // line 107
            echo "
\t\t\t\t\t\t";
            // line 108
            if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 108)) && twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 108))) {
                // line 109
                echo "\t\t\t\t\t\t\t";
                $context["class"] = (($context["class"] ?? null) . " with-sub-menu");
                // line 110
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "submenu_type", [], "any", false, false, false, 110) == 1)) {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t";
                    $context["class"] = (($context["class"] ?? null) . " click");
                    // line 112
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 113
                    echo "\t\t\t\t\t\t\t\t";
                    $context["class"] = (($context["class"] ?? null) . " hover");
                    // line 114
                    echo "\t\t\t\t\t\t\t";
                }
                // line 115
                echo "\t\t\t\t\t\t";
            }
            // line 116
            echo "
\t\t\t\t\t\t";
            // line 117
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "position", [], "any", false, false, false, 117) == 1)) {
                // line 118
                echo "\t\t\t\t\t\t\t";
                $context["class"] = (($context["class"] ?? null) . " pull-right");
                // line 119
                echo "\t\t\t\t\t\t";
            }
            // line 120
            echo "
\t\t\t\t\t\t";
            // line 121
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "submenu_type", [], "any", false, false, false, 121) == 2)) {
                // line 122
                echo "\t\t\t\t\t\t\t";
                $context["title"] = "title=\"hover-intent\"";
                // line 123
                echo "\t\t\t\t\t\t";
            }
            // line 124
            echo "
\t\t\t\t\t\t";
            // line 125
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "new_window", [], "any", false, false, false, 125) == 1)) {
                // line 126
                echo "\t\t\t\t\t\t\t";
                $context["target"] = "target=\"_blank\"";
                // line 127
                echo "\t\t\t\t\t\t";
            }
            // line 128
            echo "
\t\t\t\t\t\t";
            // line 129
            if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 129) == 1)) {
                // line 130
                echo "\t\t\t\t\t\t\t<li class=\"item-vertical ";
                echo ($context["class"] ?? null);
                echo "\" ";
                echo ($context["title"] ?? null);
                echo ">
\t\t\t\t\t\t\t\t<p class='close-menu'></p>
\t\t\t\t\t\t\t\t";
                // line 132
                if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 132)) && twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 132))) {
                    // line 133
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 133);
                    echo "\" class=\"";
                    echo ($context["class_link"] ?? null);
                    echo "\" ";
                    echo ($context["target"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 135
                    echo (((($context["icon_font"] ?? null) . ($context["icon"] ?? null)) . (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 135)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["lang_id"] ?? null)] ?? null) : null)) . twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 135));
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                    // line 137
                    echo ($context["label_item"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t<b class='fa fa-angle-right' ></b>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 141
                    echo "\t\t\t\t\t\t\t \t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 141);
                    echo "\" class=\"";
                    echo ($context["class_link"] ?? null);
                    echo "\" ";
                    echo ($context["target"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 143
                    echo (((($context["icon_font"] ?? null) . ($context["icon"] ?? null)) . (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 143)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["lang_id"] ?? null)] ?? null) : null)) . twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 143));
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                    // line 145
                    echo ($context["label_item"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 148
                echo "
\t\t\t\t\t\t\t\t";
                // line 149
                if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 149)) && twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 149))) {
                    // line 150
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_in_filter("%", twig_get_attribute($this->env, $this->source, $context["row"], "submenu_width", [], "any", false, false, false, 150))) {
                        // line 151
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" data-subwidth =\"";
                        echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["row"], "submenu_width", [], "any", false, false, false, 151), ["%" => ""]);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 153
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" style=\"width:";
                        echo twig_get_attribute($this->env, $this->source, $context["row"], "submenu_width", [], "any", false, false, false, 153);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 155
                    echo "
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 158
                    $context["row_fluid"] = 0;
                    // line 159
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 159));
                    foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (((($context["row_fluid"] ?? null) + twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 160)) > 12)) {
                            // line 161
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 161);
                            // line 162
                            echo "\t\t\t\t\t\t\t\t\t \t\t\t\t</div><div class=\"border\"></div><div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 164
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = (($context["row_fluid"] ?? null) + twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 164));
                            // line 165
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                        echo twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 166);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 167
                        if ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 167) == 0)) {
                            // line 168
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"html ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 168);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "html", [], "any", false, false, false, 168);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 169
$context["submenu"], "content_type", [], "any", false, false, false, 169) == 1)) {
                            // line 170
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 170))) {
                                // line 171
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 171);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                                // line 172
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 172), "link", [], "any", false, false, false, 172);
                                echo "\" onclick=\"window.location = '";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 172), "link", [], "any", false, false, false, 172);
                                echo "'\"><img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 172), "image", [], "any", false, false, false, 172);
                                echo "\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"";
                                // line 173
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 173), "link", [], "any", false, false, false, 173);
                                echo "\" onclick=\"window.location = '";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 173), "link", [], "any", false, false, false, 173);
                                echo "'\">";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 173), "name", [], "any", false, false, false, 173);
                                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 175
                                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 175), "special", [], "any", false, false, false, 175)) {
                                    // line 176
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 176), "price", [], "any", false, false, false, 176);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 178
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 178), "special", [], "any", false, false, false, 178);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 180
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 183
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 183) == 2)) {
                            // line 184
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"categories ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 184);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "categories", [], "any", false, false, false, 184);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 185
$context["submenu"], "content_type", [], "any", false, false, false, 185) == 3)) {
                            // line 186
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["submenu"], "manufactures", [], "any", false, false, false, 186))) {
                                // line 187
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"manufacturer ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 187);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 188
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["submenu"], "manufactures", [], "any", false, false, false, 188));
                                foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                                    // line 189
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "link", [], "any", false, false, false, 189);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 189);
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 191
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 193
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 193) == 4)) {
                            // line 194
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "images", [], "any", false, false, false, 194), "show_title", [], "any", false, false, false, 194) == 1)) {
                                // line 195
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["submenu"], "name", [], "any", false, false, false, 195)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["lang_id"] ?? null)] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 197
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 197);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 198
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "images", [], "any", false, false, false, 198), "link", [], "any", false, false, false, 198);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 200
$context["submenu"], "content_type", [], "any", false, false, false, 200) == 5)) {
                            // line 201
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 201), "categories", [], "any", false, false, false, 201)) {
                                // line 202
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subcategory ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 202);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 203
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 203), "categories", [], "any", false, false, false, 203));
                                foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
                                    // line 204
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 205
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 205), "show_title", [], "any", false, false, false, 205) == 1)) {
                                        // line 206
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "href", [], "any", false, false, false, 206);
                                        echo "\" class=\"title-submenu ";
                                        echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 206);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "name", [], "any", false, false, false, 206);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 208
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (twig_get_attribute($this->env, $this->source, $context["categories"], "categories", [], "any", false, false, false, 208)) {
                                        // line 209
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "categories", [], "any", false, false, false, 209);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 211
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 211), "show_image", [], "any", false, false, false, 211) == 1)) {
                                        // line 212
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "thumb", [], "any", false, false, false, 212);
                                        echo "\" alt=\"\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 214
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 216
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 218
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 218) == 6)) {
                            // line 219
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 219), "show_title", [], "any", false, false, false, 219) == 1)) {
                                // line 220
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["submenu"], "name", [], "any", false, false, false, 220)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["lang_id"] ?? null)] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 222
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 222), "products", [], "any", false, false, false, 222)) {
                                // line 223
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 223), "products", [], "any", false, false, false, 223));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 224
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["itempage"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 224), "col", [], "any", false, false, false, 224)) ? ((12 / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 224), "col", [], "any", false, false, false, 224))) : (4));
                                    // line 225
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-";
                                    echo ($context["itempage"] ?? null);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 225);
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 228
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 228);
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                    // line 229
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 229);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 229);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 229);
                                    echo "\"  />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 235
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                        // line 236
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 236) < $context["i"])) {
                                            // line 237
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        } else {
                                            // line 239
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 241
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 242
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                                    // line 243
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 243);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 243);
                                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"desc\">";
                                    // line 244
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 244);
                                    echo "</p>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 245
                                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 245)) {
                                        // line 246
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 247
                                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 247)) {
                                            // line 248
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 248);
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        } else {
                                            // line 250
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 250);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                            // line 251
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 251);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        }
                                        // line 253
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 257
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 262
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 263
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 266
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 270
                echo "\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            } else {
                // line 271
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"";
                // line 272
                echo ($context["class"] ?? null);
                echo "\" ";
                echo ($context["title"] ?? null);
                echo ">
\t\t\t\t\t\t\t\t<p class='close-menu'></p>
\t\t\t\t\t\t\t\t";
                // line 274
                if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 274)) && twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 274))) {
                    // line 275
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 275);
                    echo "\" class=\"";
                    echo ($context["class_link"] ?? null);
                    echo "\" ";
                    echo ($context["target"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 278
                    echo (((($context["icon_font"] ?? null) . ($context["icon"] ?? null)) . (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 278)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["lang_id"] ?? null)] ?? null) : null)) . twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 278));
                    echo "
\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t";
                    // line 280
                    echo ($context["label_item"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t<b class='caret'></b>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 284
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 284);
                    echo "\" class=\"";
                    echo ($context["class_link"] ?? null);
                    echo "\" ";
                    echo ($context["target"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 286
                    echo (((($context["icon_font"] ?? null) . ($context["icon"] ?? null)) . (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 286)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["lang_id"] ?? null)] ?? null) : null)) . twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 286));
                    echo "
\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t";
                    // line 288
                    echo ($context["label_item"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 291
                echo "
\t\t\t\t\t\t\t\t";
                // line 292
                if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 292)) && twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 292))) {
                    // line 293
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" style=\"width: ";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "submenu_width", [], "any", false, false, false, 293);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 296
                    $context["row_fluid"] = 0;
                    // line 297
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 297));
                    foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                        // line 298
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (((($context["row_fluid"] ?? null) + twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 298)) > 12)) {
                            // line 299
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 299);
                            // line 300
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><div class=\"border\"></div><div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 302
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = (($context["row_fluid"] ?? null) + twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 302));
                            // line 303
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 304
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                        echo twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 304);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 305
                        if ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 305) == 0)) {
                            // line 306
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"html ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 306);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 307
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "html", [], "any", false, false, false, 307);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 309
$context["submenu"], "content_type", [], "any", false, false, false, 309) == 1)) {
                            // line 310
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 310))) {
                                // line 311
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 311);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                                // line 312
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 312), "link", [], "any", false, false, false, 312);
                                echo "\" onclick=\"window.location = '";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 312), "link", [], "any", false, false, false, 312);
                                echo "'\"><img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 312), "image", [], "any", false, false, false, 312);
                                echo "\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"";
                                // line 313
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 313), "link", [], "any", false, false, false, 313);
                                echo "\" onclick=\"window.location = '";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 313), "link", [], "any", false, false, false, 313);
                                echo "'\">";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 313), "name", [], "any", false, false, false, 313);
                                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 315
                                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 315), "special", [], "any", false, false, false, 315)) {
                                    // line 316
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 316), "price", [], "any", false, false, false, 316);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 318
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 318), "special", [], "any", false, false, false, 318);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 320
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 323
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 323) == 2)) {
                            // line 324
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"categories ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 324);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 325
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "categories", [], "any", false, false, false, 325);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 327
$context["submenu"], "content_type", [], "any", false, false, false, 327) == 3)) {
                            // line 328
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["submenu"], "manufactures", [], "any", false, false, false, 328))) {
                                // line 329
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"manufacturer ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 329);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 330
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["submenu"], "manufactures", [], "any", false, false, false, 330));
                                foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                                    // line 331
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "link", [], "any", false, false, false, 331);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 331);
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 333
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 335
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 335) == 4)) {
                            // line 336
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "images", [], "any", false, false, false, 336), "show_title", [], "any", false, false, false, 336) == 1)) {
                                // line 337
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["submenu"], "name", [], "any", false, false, false, 337)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["lang_id"] ?? null)] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 339
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 339);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 340
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "images", [], "any", false, false, false, 340), "link", [], "any", false, false, false, 340);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 342
$context["submenu"], "content_type", [], "any", false, false, false, 342) == 5)) {
                            // line 343
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 343), "categories", [], "any", false, false, false, 343)) {
                                // line 344
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subcategory ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 344);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 345
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 345), "categories", [], "any", false, false, false, 345));
                                foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
                                    // line 346
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 347
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 347), "show_title", [], "any", false, false, false, 347) == 1)) {
                                        // line 348
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "href", [], "any", false, false, false, 348);
                                        echo "\" class=\"title-submenu ";
                                        echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 348);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "name", [], "any", false, false, false, 348);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 350
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (twig_get_attribute($this->env, $this->source, $context["categories"], "categories", [], "any", false, false, false, 350)) {
                                        // line 351
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "categories", [], "any", false, false, false, 351);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 353
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 353), "show_image", [], "any", false, false, false, 353) == 1)) {
                                        // line 354
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "thumb", [], "any", false, false, false, 354);
                                        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 356
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 358
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 360
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 360) == 6)) {
                            // line 361
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 361), "show_title", [], "any", false, false, false, 361) == 1)) {
                                // line 362
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["submenu"], "name", [], "any", false, false, false, 362)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["lang_id"] ?? null)] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 364
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 364), "products", [], "any", false, false, false, 364)) {
                                // line 365
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 365), "products", [], "any", false, false, false, 365));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 366
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["itempage"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 366), "col", [], "any", false, false, false, 366)) ? ((12 / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 366), "col", [], "any", false, false, false, 366))) : (4));
                                    // line 367
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                                    echo ($context["itempage"] ?? null);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 367);
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 370
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 370);
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                    // line 371
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 371);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 371);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 371);
                                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                                    // line 376
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 376);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 376);
                                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                                    // line 377
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 377);
                                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 378
                                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 378)) {
                                        // line 379
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 380
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                            // line 381
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 381) < $context["i"])) {
                                                // line 382
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 384
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 386
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 387
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 389
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 390
                                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 390)) {
                                        // line 391
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 392
                                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 392)) {
                                            // line 393
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 393);
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        } else {
                                            // line 395
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 395);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                            // line 396
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 396);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        }
                                        // line 398
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 402
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t \t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 407
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 408
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 409
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 411
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 415
                echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 417
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 418
        echo "\t\t\t\t</ul>\t\t
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</nav>
\t";
        // line 423
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 423) == 1)) {
            // line 424
            echo "\t\t</div>
\t";
        }
        // line 426
        echo "</div>

";
        // line 428
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 428) == 1)) {
            // line 429
            echo "<script type=\"text/javascript\">
\t\$(document).ready(function() {

\t\t(function (element) {
\t\t\tvar \$element = \$(element);
\t\t\tvar itemver =  ";
            // line 434
            echo twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "show_itemver", [], "any", false, false, false, 434);
            echo ";
\t\t\t
\t\t\t\$(\"ul.megamenu  li.item-vertical\", \$element ).addClass('demo');
\t\t\t
\t\t\tif(itemver <= \$( \".vertical ul.megamenu >li\", \$element ).length){
\t\t\t\t\$('.vertical ul.megamenu', \$element).append('<li class=\"loadmore\"><span class=\"more-view\">";
            // line 439
            echo ($context["text_more_category"] ?? null);
            echo "</span><i class=\"fa fa-angle-down\"></i></li>');
\t\t\t\t\$('.horizontal ul.megamenu li.loadmore', \$element).remove();
\t\t\t}
\t\t\t
\t\t\tvar show_itemver = itemver-1 ;
\t\t\t\$('ul.megamenu > li.item-vertical', \$element).each(function(i){
\t\t\t\tif(i>show_itemver){
\t\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t\t} 
\t\t\t});
\t\t\t
\t\t\t\$(\".megamenu .loadmore\", \$element).click(function(){
\t\t\t\tif(\$(this).hasClass('open')){
\t\t\t\t\t\$('ul.megamenu li.item-vertical', \$element).each(function(i){
\t\t\t\t\t\t\tif(i>show_itemver){
\t\t\t\t\t\t\t\t\t\$(this).slideUp(200);
\t\t\t\t\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t\$(this).removeClass('open');
\t\t\t\t\t\$('.loadmore', \$element).html('<span class=\"more-view\">";
            // line 460
            echo ($context["text_more_category"] ?? null);
            echo "</span><i class=\"fa fa-angle-down\"></i>');
\t\t\t\t}else{
\t\t\t\t\t\$('ul.megamenu li.item-vertical', \$element).each(function(i){
\t\t\t\t\t\t\tif(i>show_itemver){
\t\t\t\t\t\t\t\t\t\$(this).slideDown(200);
\t\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t\$(this).addClass('open');
\t\t\t\t\t\$('.loadmore', \$element).html('<span class=\"more-view\">";
            // line 468
            echo ($context["text_close_category"] ?? null);
            echo "</span><i class=\"fa fa-angle-up\"></i>');
\t\t\t\t}
\t\t\t});
\t\t})(\"#";
            // line 471
            echo ($context["suffix_id"] ?? null);
            echo "\");

\t    \$(\"#";
            // line 473
            echo ($context["show_verticalmenu_id"] ?? null);
            echo "\").click(function () {
\t\t\tif(\$('#";
            // line 474
            echo ($context["suffix_id"] ?? null);
            echo " .vertical-wrapper').hasClass('so-vertical-active'))
\t\t\t\t\$('#";
            // line 475
            echo ($context["suffix_id"] ?? null);
            echo " .vertical-wrapper').removeClass('so-vertical-active');
\t\t\telse
\t\t\t\t\$('#";
            // line 477
            echo ($context["suffix_id"] ?? null);
            echo " .vertical-wrapper').addClass('so-vertical-active');
\t\t}); 
\t\t
\t\t\$('#";
            // line 480
            echo ($context["remove_verticalmenu_id"] ?? null);
            echo "').click(function() {
\t        \$('#";
            // line 481
            echo ($context["suffix_id"] ?? null);
            echo " .vertical-wrapper').removeClass('so-vertical-active');
\t        return false;
\t    });\t
\t});
</script>
";
        } else {
            // line 487
            echo "<script>
\$(document).ready(function(){
\t\$(\"#";
            // line 489
            echo ($context["show_megamenu_id"] ?? null);
            echo "\").click(function () {
\t\tif(\$('#";
            // line 490
            echo ($context["suffix_id"] ?? null);
            echo " .megamenu-wrapper').hasClass('so-megamenu-active'))
\t\t\t\$('#";
            // line 491
            echo ($context["suffix_id"] ?? null);
            echo " .megamenu-wrapper').removeClass('so-megamenu-active');
\t\telse
\t\t\t\$('#";
            // line 493
            echo ($context["suffix_id"] ?? null);
            echo " .megamenu-wrapper').addClass('so-megamenu-active');
\t}); 
\t\$(\"#";
            // line 495
            echo ($context["remove_megamenu_id"] ?? null);
            echo "\").click(function() {
        \$('#";
            // line 496
            echo ($context["suffix_id"] ?? null);
            echo " .megamenu-wrapper').removeClass('so-megamenu-active');
        return false;
    });\t\t
\t
});
</script>

";
        }
        // line 504
        echo "<script>
\$(document).ready(function(){
\t\$('a[href=\"";
        // line 506
        echo ($context["actual_link"] ?? null);
        echo "\"]').each(function() {
\t\t\$(this).parents('.with-sub-menu').addClass('sub-active');
\t});  
});
</script>";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_megamenu/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1384 => 506,  1380 => 504,  1369 => 496,  1365 => 495,  1360 => 493,  1355 => 491,  1351 => 490,  1347 => 489,  1343 => 487,  1334 => 481,  1330 => 480,  1324 => 477,  1319 => 475,  1315 => 474,  1311 => 473,  1306 => 471,  1300 => 468,  1289 => 460,  1265 => 439,  1257 => 434,  1250 => 429,  1248 => 428,  1244 => 426,  1240 => 424,  1238 => 423,  1231 => 418,  1225 => 417,  1221 => 415,  1215 => 411,  1208 => 409,  1205 => 408,  1202 => 407,  1192 => 402,  1186 => 398,  1181 => 396,  1176 => 395,  1170 => 393,  1168 => 392,  1165 => 391,  1163 => 390,  1160 => 389,  1156 => 387,  1150 => 386,  1146 => 384,  1142 => 382,  1139 => 381,  1135 => 380,  1132 => 379,  1130 => 378,  1126 => 377,  1120 => 376,  1108 => 371,  1104 => 370,  1095 => 367,  1092 => 366,  1087 => 365,  1084 => 364,  1078 => 362,  1075 => 361,  1072 => 360,  1068 => 358,  1061 => 356,  1055 => 354,  1052 => 353,  1046 => 351,  1043 => 350,  1033 => 348,  1031 => 347,  1028 => 346,  1024 => 345,  1019 => 344,  1016 => 343,  1014 => 342,  1009 => 340,  1004 => 339,  998 => 337,  995 => 336,  992 => 335,  988 => 333,  977 => 331,  973 => 330,  968 => 329,  965 => 328,  963 => 327,  958 => 325,  953 => 324,  950 => 323,  945 => 320,  939 => 318,  933 => 316,  931 => 315,  922 => 313,  914 => 312,  909 => 311,  906 => 310,  904 => 309,  899 => 307,  894 => 306,  892 => 305,  887 => 304,  884 => 303,  881 => 302,  877 => 300,  874 => 299,  871 => 298,  866 => 297,  864 => 296,  857 => 293,  855 => 292,  852 => 291,  846 => 288,  841 => 286,  831 => 284,  824 => 280,  819 => 278,  808 => 275,  806 => 274,  799 => 272,  796 => 271,  792 => 270,  786 => 266,  776 => 263,  773 => 262,  763 => 257,  757 => 253,  752 => 251,  747 => 250,  741 => 248,  739 => 247,  736 => 246,  734 => 245,  730 => 244,  724 => 243,  721 => 242,  715 => 241,  711 => 239,  707 => 237,  704 => 236,  700 => 235,  687 => 229,  683 => 228,  674 => 225,  671 => 224,  666 => 223,  663 => 222,  657 => 220,  654 => 219,  651 => 218,  647 => 216,  640 => 214,  634 => 212,  631 => 211,  625 => 209,  622 => 208,  612 => 206,  610 => 205,  607 => 204,  603 => 203,  598 => 202,  595 => 201,  593 => 200,  588 => 198,  583 => 197,  577 => 195,  574 => 194,  571 => 193,  567 => 191,  556 => 189,  552 => 188,  547 => 187,  544 => 186,  542 => 185,  535 => 184,  532 => 183,  527 => 180,  521 => 178,  515 => 176,  513 => 175,  504 => 173,  496 => 172,  491 => 171,  488 => 170,  486 => 169,  479 => 168,  477 => 167,  472 => 166,  469 => 165,  466 => 164,  462 => 162,  459 => 161,  456 => 160,  451 => 159,  449 => 158,  444 => 155,  438 => 153,  432 => 151,  429 => 150,  427 => 149,  424 => 148,  418 => 145,  413 => 143,  403 => 141,  396 => 137,  391 => 135,  381 => 133,  379 => 132,  371 => 130,  369 => 129,  366 => 128,  363 => 127,  360 => 126,  358 => 125,  355 => 124,  352 => 123,  349 => 122,  347 => 121,  344 => 120,  341 => 119,  338 => 118,  336 => 117,  333 => 116,  330 => 115,  327 => 114,  324 => 113,  321 => 112,  318 => 111,  315 => 110,  312 => 109,  310 => 108,  307 => 107,  304 => 106,  301 => 105,  299 => 104,  296 => 103,  293 => 102,  290 => 101,  288 => 100,  285 => 99,  282 => 98,  279 => 97,  277 => 96,  274 => 95,  271 => 94,  268 => 93,  266 => 92,  263 => 91,  260 => 90,  257 => 89,  255 => 88,  252 => 87,  249 => 86,  246 => 85,  243 => 84,  240 => 83,  238 => 82,  235 => 81,  232 => 80,  229 => 79,  226 => 78,  223 => 77,  220 => 76,  217 => 75,  213 => 74,  210 => 73,  205 => 70,  199 => 68,  195 => 66,  193 => 65,  189 => 64,  186 => 63,  184 => 62,  170 => 61,  165 => 58,  159 => 56,  153 => 54,  151 => 53,  148 => 52,  144 => 50,  140 => 48,  138 => 47,  135 => 46,  125 => 39,  122 => 38,  111 => 30,  102 => 24,  95 => 19,  93 => 18,  75 => 17,  72 => 16,  66 => 14,  64 => 13,  61 => 12,  57 => 10,  55 => 9,  51 => 8,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_megamenu/default.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_megamenu\\default.twig");
    }
}
