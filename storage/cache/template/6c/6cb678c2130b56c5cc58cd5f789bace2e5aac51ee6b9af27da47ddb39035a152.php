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

/* so-sgame/template/extension/module/so_latest_blog/default.twig */
class __TwigTemplate_7925f124b0d2a9eca1e4100183f4888cf063d4839468f5a0c28920baaf88f71a extends \Twig\Template
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
<div class=\"module so-latest-blog ";
        // line 2
        echo ($context["class_suffix"] ?? null);
        echo " preset01-";
        echo ($context["nb_column0"] ?? null);
        echo " preset02-";
        echo ($context["nb_column1"] ?? null);
        echo " preset03-";
        echo ($context["nb_column2"] ?? null);
        echo " preset04-";
        echo ($context["nb_column3"] ?? null);
        echo " preset05-";
        echo ($context["nb_column4"] ?? null);
        echo "\">
\t
\t";
        // line 4
        if (($context["disp_title_module"] ?? null)) {
            // line 5
            echo "\t\t<h3 class=\"modtitle\"><span>";
            echo ($context["head_name"] ?? null);
            echo "</span></h3>
\t";
        }
        // line 7
        echo "\t";
        if ((($context["pre_text"] ?? null) != "")) {
            // line 8
            echo "\t\t<div class=\"form-group\">";
            echo ($context["pre_text"] ?? null);
            echo "</div>
\t";
        }
        // line 10
        echo "\t
\t<div class=\"modcontent clearfix\">
\t\t";
        // line 12
        if ((( !twig_test_empty(($context["blogs"] ?? null)) && array_key_exists("error_no_database", $context)) && (($context["error_no_database"] ?? null) == ""))) {
            echo "\t
\t\t\t";
            // line 13
            $context["count_item"] = twig_length_filter($this->env, ($context["blogs"] ?? null));
            // line 14
            echo "\t\t\t";
            $context["cls_btn_page"] = (((($context["button_page"] ?? null) == "top")) ? ("buttom-type1") : ("button-type2"));
            // line 15
            echo "\t\t\t";
            $context["btn_type"] = (((($context["button_page"] ?? null) == "top")) ? ("button-type1") : ("button-type2"));
            // line 16
            echo "\t\t\t";
            $context["btn_prev"] = (((($context["button_page"] ?? null) == "top")) ? ("&#171;") : ("&#139;"));
            // line 17
            echo "\t\t\t";
            $context["btn_next"] = (((($context["button_page"] ?? null) == "top")) ? ("&#187;") : ("&#155;"));
            // line 18
            echo "\t\t\t";
            $context["i"] = 0;
            // line 19
            echo "\t\t\t<div id=\"";
            echo ($context["tag_id"] ?? null);
            echo "\" class=\"so-blog-external ";
            echo ($context["cls_btn_page"] ?? null);
            echo " ";
            echo ($context["btn_type"] ?? null);
            echo "\">
\t\t\t\t";
            // line 20
            if ((($context["type_show"] ?? null) == "simple")) {
                // line 21
                echo "\t\t\t\t\t<div class=\"blog-external-simple\">
\t\t\t\t\t\t";
                // line 22
                $context["k"] = 0;
                // line 23
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
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
                foreach ($context['_seq'] as $context["key"] => $context["blog"]) {
                    // line 24
                    echo "\t\t\t\t\t\t\t";
                    $context["k"] = (($context["k"] ?? null) + 1);
                    // line 25
                    echo "\t\t\t\t\t\t\t<!-- <div class=\"cat-wrap\">
\t\t\t\t\t\t\t\t<div class=\"media\"> -->
\t\t\t\t\t\t\t\t\t";
                    // line 27
                    echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_latest_blog/default_items.twig"));
                    echo "
\t\t\t\t\t\t\t\t<!-- </div>
\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t";
                    // line 30
                    $context["clear"] = "clr1";
                    // line 31
                    echo "\t\t\t\t\t\t\t";
                    if (((($context["k"] ?? null) % 2) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr2");
                    }
                    // line 32
                    echo "\t\t\t\t\t\t\t";
                    if (((($context["k"] ?? null) % 3) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr3");
                    }
                    // line 33
                    echo "\t\t\t\t\t\t\t";
                    if (((($context["k"] ?? null) % 4) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr4");
                    }
                    // line 34
                    echo "\t\t\t\t\t\t\t";
                    if (((($context["k"] ?? null) % 5) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr5");
                    }
                    // line 35
                    echo "\t\t\t\t\t\t\t";
                    if (((($context["k"] ?? null) % 6) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr6");
                    }
                    // line 36
                    echo "\t\t\t\t\t\t\t<!-- <div class=\"";
                    echo ($context["clear"] ?? null);
                    echo "\"></div> -->
\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['blog'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 40
                echo "\t\t\t\t\t<div class=\"blog-external\" data-effect=\"";
                echo ($context["effect"] ?? null);
                echo "\">\t\t\t
\t\t\t\t\t\t";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
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
                foreach ($context['_seq'] as $context["key"] => $context["blog"]) {
                    // line 42
                    echo "\t\t\t\t\t\t\t";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 43
                    echo "\t\t\t\t\t\t\t";
                    if ((((($context["i"] ?? null) % ($context["nb_rows"] ?? null)) == 1) || (($context["nb_rows"] ?? null) == 1))) {
                        // line 44
                        echo "\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t";
                    }
                    // line 46
                    echo "
\t\t\t\t\t\t\t";
                    // line 47
                    echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_latest_blog/default_items.twig"));
                    echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 49
                    if ((((($context["i"] ?? null) % ($context["nb_rows"] ?? null)) == 0) || (($context["i"] ?? null) == ($context["count_item"] ?? null)))) {
                        // line 50
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 51
                    echo "\t\t\t\t
\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['blog'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 55
            echo "\t\t\t</div>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t//<![CDATA[
\t\t\t\tjQuery(document).ready(function (\$) {
\t\t\t\t\t;(function (element) {
\t\t\t\t\t\tvar \$element = \$(element),
\t\t\t\t\t\t\t\t\$extraslider = \$(\".blog-external\", \$element),
\t\t\t\t\t\t\t\t_delay = ";
            // line 62
            echo ($context["delay"] ?? null);
            echo ",
\t\t\t\t\t\t_duration = ";
            // line 63
            echo ($context["duration"] ?? null);
            echo ",
\t\t\t\t\t\t_effect = '";
            // line 64
            echo ($context["effect"] ?? null);
            echo "';

\t\t\t\t\t\tthis_item = \$extraslider.find('div.media');
\t\t\t\t\t\tthis_item.find('div.item:eq(0)').addClass('head-button');
\t\t\t\t\t\tthis_item.find('div.item:eq(0) .media-heading').addClass('head-item');
\t\t\t\t\t\tthis_item.find('div.item:eq(0) .media-left').addClass('so-block');
\t\t\t\t\t\tthis_item.find('div.item:eq(0) .media-content').addClass('so-block');
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
            // line 80
            if ((($context["dots"] ?? null) == "true")) {
                // line 81
                echo "\t\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 87
            echo "
\t\t\t\t\t\t\t";
            // line 88
            if ((($context["button_page"] ?? null) == "top")) {
                // line 89
                echo "\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-dots\", \$element).insertAfter(\$(\".owl2-prev\", \$element));
\t\t\t\t\t\t\t";
            } else {
                // line 92
                echo "\t\t\t\t\t\t\t\t\$(\".owl2-nav\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertAfter(\$extraslider);
\t\t\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.owlCarousel2({
\t\t\t\t\t\t\tmargin: ";
            // line 98
            echo ($context["margin"] ?? null);
            echo ",
\t\t\t\t\t\t\tslideBy: ";
            // line 99
            echo ($context["slideBy"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplay: ";
            // line 100
            echo ($context["autoplay"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayHoverPause: ";
            // line 101
            echo ($context["pausehover"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayTimeout: ";
            // line 102
            echo ($context["autoplay_timeout"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplaySpeed: ";
            // line 103
            echo ($context["autoplaySpeed"] ?? null);
            echo ",
\t\t\t\t\t\t\tstartPosition: ";
            // line 104
            echo ($context["startPosition"] ?? null);
            echo ",
\t\t\t\t\t\t\tmouseDrag: ";
            // line 105
            echo ($context["mouseDrag"] ?? null);
            echo ",
\t\t\t\t\t\t\ttouchDrag: ";
            // line 106
            echo ($context["touchDrag"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoWidth: false,
\t\t\t\t\t\t\trtl: ";
            // line 108
            echo (((($context["direction"] ?? null) == "ltr")) ? ("false") : ("true"));
            echo ",
\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t0: \t{ items: ";
            // line 110
            echo ($context["nb_column4"] ?? null);
            echo " } ,
\t\t\t\t\t\t\t\t480: { items: ";
            // line 111
            echo ($context["nb_column3"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t768: { items: ";
            // line 112
            echo ($context["nb_column2"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t992: { items: ";
            // line 113
            echo ($context["nb_column1"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t1200: {items: ";
            // line 114
            echo ($context["nb_column0"] ?? null);
            echo "},
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tdotClass: \"owl2-dot\",
\t\t\t\t\t\t\tdotsClass: \"owl2-dots\",
\t\t\t\t\t\t\tdots: ";
            // line 118
            echo ($context["dots"] ?? null);
            echo ",
\t\t\t\t\t\t\tdotsSpeed:";
            // line 119
            echo ($context["dotsSpeed"] ?? null);
            echo ",
\t\t\t\t\t\t\tnav: ";
            // line 120
            echo ($context["nav"] ?? null);
            echo ",
\t\t\t\t\t\t\tloop: ";
            // line 121
            echo ($context["loop"] ?? null);
            echo ",
\t\t\t\t\t\t\tnavSpeed: ";
            // line 122
            echo ($context["navSpeed"] ?? null);
            echo ",
\t\t\t\t\t\t\tnavText: [\"";
            // line 123
            echo ($context["btn_prev"] ?? null);
            echo "\", \"";
            echo ($context["btn_next"] ?? null);
            echo "\"],
\t\t\t\t\t\t\tnavClass: [\"owl2-prev\", \"owl2-next\"]
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translate.owl.carousel2\", function (e) {
\t\t\t\t\t\t\t";
            // line 128
            if ((($context["dots"] ?? null) == "true")) {
                // line 129
                echo "\t\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 135
            echo "
\t\t\t\t\t\t\t//var \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\t//_UngetAnimate(\$item_active);
\t\t\t\t\t\t\t//_getAnimate(\$item_active);
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translated.owl.carousel2\", function (e) {
\t\t\t\t\t\t\t";
            // line 142
            if ((($context["dots"] ?? null) == "true")) {
                // line 143
                echo "\t\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 149
            echo "
\t\t\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\tvar \$item = \$(\".owl2-item\", \$element);

\t\t\t\t\t\t\t_UngetAnimate(\$item);

\t\t\t\t\t\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});

\t\t\t\t\t\tfunction _getAnimate(\$el) {
\t\t\t\t\t\t\tif (_effect == \"none\") return;
\t\t\t\t\t\t\t//if (\$.browser.msie && parseInt(\$.browser.version, 10) <= 9) return;
\t\t\t\t\t\t\t\$extraslider.removeClass(\"extra-animate\");
\t\t\t\t\t\t\t\$el.each(function (i) {
\t\t\t\t\t\t\t\tvar \$_el = \$(this);
\t\t\t\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\t\t\t\"-webkit-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"-moz-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"-o-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"-webkit-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"-moz-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"-o-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t\t\t\t}).animate({
\t\t\t\t\t\t\t\t\topacity: 1
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\tif (i == \$el.size() - 1) {
\t\t\t\t\t\t\t\t\t\$extraslider.addClass(\"extra-animate\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction _UngetAnimate(\$el) {
\t\t\t\t\t\t\t\$el.each(function (i) {
\t\t\t\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\t\t\t\"animation\": \"\",
\t\t\t\t\t\t\t\t\t\"-webkit-animation\": \"\",
\t\t\t\t\t\t\t\t\t\"-moz-animation\": \"\",
\t\t\t\t\t\t\t\t\t\"-o-animation\": \"\",
\t\t\t\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t})(\"#";
            // line 199
            echo ($context["tag_id"] ?? null);
            echo "\");
\t\t\t\t});
\t\t\t\t//]]>
\t\t\t</script>
\t\t";
        } elseif ((        // line 203
array_key_exists("error_no_database", $context) && (($context["error_no_database"] ?? null) != ""))) {
            // line 204
            echo "\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo ($context["error_no_database"] ?? null);
            echo "</div>
\t\t";
        } else {
            // line 206
            echo "    \t\t";
            echo ($context["NoItem"] ?? null);
            echo "
\t\t";
        }
        // line 208
        echo "\t</div>
\t
\t";
        // line 210
        if ((($context["post_text"] ?? null) != "")) {
            // line 211
            echo "\t\t<div class=\"post-text\">
\t\t\t";
            // line 212
            echo ($context["post_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 215
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_latest_blog/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 215,  534 => 212,  531 => 211,  529 => 210,  525 => 208,  519 => 206,  513 => 204,  511 => 203,  504 => 199,  452 => 149,  444 => 143,  442 => 142,  433 => 135,  425 => 129,  423 => 128,  413 => 123,  409 => 122,  405 => 121,  401 => 120,  397 => 119,  393 => 118,  386 => 114,  382 => 113,  378 => 112,  374 => 111,  370 => 110,  365 => 108,  360 => 106,  356 => 105,  352 => 104,  348 => 103,  344 => 102,  340 => 101,  336 => 100,  332 => 99,  328 => 98,  323 => 95,  318 => 92,  313 => 89,  311 => 88,  308 => 87,  300 => 81,  298 => 80,  279 => 64,  275 => 63,  271 => 62,  262 => 55,  258 => 53,  243 => 51,  239 => 50,  237 => 49,  232 => 47,  229 => 46,  225 => 44,  222 => 43,  219 => 42,  202 => 41,  197 => 40,  193 => 38,  176 => 36,  170 => 35,  164 => 34,  158 => 33,  152 => 32,  146 => 31,  144 => 30,  138 => 27,  134 => 25,  131 => 24,  113 => 23,  111 => 22,  108 => 21,  106 => 20,  97 => 19,  94 => 18,  91 => 17,  88 => 16,  85 => 15,  82 => 14,  80 => 13,  76 => 12,  72 => 10,  66 => 8,  63 => 7,  57 => 5,  55 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_latest_blog/default.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_latest_blog\\default.twig");
    }
}
