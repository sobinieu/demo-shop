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

/* so-sgame/template/common/header.twig */
class __TwigTemplate_5132ab57eeb9ccd96da13659fa27e3972506c368bc6ad8a4ee3b24ef5ced4af2 extends \Twig\Template
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
        // line 9
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 10
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 14
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 15
        echo ($context["base"] ?? null);
        echo "\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> 
";
        // line 17
        if (($context["description"] ?? null)) {
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />";
        }
        // line 18
        if (($context["keywords"] ?? null)) {
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />";
        }
        // line 19
        echo "<!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"><![endif]-->
";
        // line 21
        if ((($context["direction"] ?? null) == "ltr")) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/bootstrap/css/bootstrap.min.css"], "method", false, false, false, 21);
            echo "
";
        } elseif ((        // line 22
($context["direction"] ?? null) == "rtl")) {
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/soconfig/css/bootstrap/bootstrap.rtl.min.css"], "method", false, false, false, 22);
            echo " 
";
        } else {
            // line 23
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/bootstrap/css/bootstrap.min.css"], "method", false, false, false, 23);
            echo " ";
        }
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/font-awesome/css/font-awesome.min.css"], "method", false, false, false, 24);
        echo "
";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/soconfig/css/lib.css"], "method", false, false, false, 25);
        echo "

";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/soconfig/css/slick.css"], "method", false, false, false, 27);
        echo "

";
        // line 29
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => (("catalog/view/theme/" . ($context["theme_directory"] ?? null)) . "/css/ie9-and-up.css")], "method", false, false, false, 29);
        echo "
";
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => (("catalog/view/theme/" . ($context["theme_directory"] ?? null)) . "/css/custom.css")], "method", false, false, false, 30);
        echo "
";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/pe-icon-7-stroke/css/pe-icon-7-stroke.css"], "method", false, false, false, 31);
        echo "
";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/pe-icon-7-stroke/css/helper.css"], "method", false, false, false, 32);
        echo "
";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/icomoon/css/style.css"], "method", false, false, false, 33);
        echo "
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 34)], "method", false, false, false, 34);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/jquery/jquery-2.1.1.min.js"], "method", false, false, false, 36);
        echo "
";
        // line 37
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/bootstrap/js/bootstrap.min.js"], "method", false, false, false, 37);
        echo "
";
        // line 38
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/libs.js"], "method", false, false, false, 38);
        echo "
";
        // line 39
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/so.system.js"], "method", false, false, false, 39);
        echo "
";
        // line 40
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/jquery.sticky-kit.min.js"], "method", false, false, false, 40);
        echo "
";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/lazysizes/lazysizes.min.js"], "method", false, false, false, 41);
        echo "
";
        // line 42
        if ((($context["class"] ?? null) == "information-information")) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/typo/element.js"], "method", false, false, false, 42);
            echo " ";
        }
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "toppanel_status"], "method", false, false, false, 43)) {
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/toppanel.js"], "method", false, false, false, 43);
        }
        // line 44
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typelayout"], "method", false, false, false, 44) == "3")) {
            // line 45
            echo "\t";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/slick.js"], "method", false, false, false, 45);
            echo "
";
        }
        // line 47
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/slick.js"], "method", false, false, false, 47);
        echo "
";
        // line 48
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => (("catalog/view/theme/" . ($context["theme_directory"] ?? null)) . "/js/jquery.nav.js")], "method", false, false, false, 48);
        echo "
";
        // line 49
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => (("catalog/view/theme/" . ($context["theme_directory"] ?? null)) . "/js/common.js")], "method", false, false, false, 49);
        echo "
";
        // line 50
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => (("catalog/view/theme/" . ($context["theme_directory"] ?? null)) . "/js/so.custom.js")], "method", false, false, false, 50);
        echo "

";
        // line 52
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => (("catalog/view/theme/" . ($context["theme_directory"] ?? null)) . "/js/custom.js")], "method", false, false, false, 52);
        echo "

";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => $context["script"]], "method", false, false, false, 54);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "scss_compass", [], "any", false, false, false, 56);
        echo "
";
        // line 57
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "css_out", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "cssExclude"], "method", false, false, false, 57)], "method", false, false, false, 57);
        echo "
";
        // line 58
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "js_out", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "jsExclude"], "method", false, false, false, 58)], "method", false, false, false, 58);
        echo "
";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "cssinput_status"], "method", false, false, false, 60) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "cssinput_content"], "method", false, false, false, 60)))) {
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "cssinput_content"], "method", false, false, false, 60);
            echo " ";
        }
        echo " 
";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 62);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 62);
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            echo $context["analytic"];
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "layoutstyle"], "method", false, false, false, 65) == "boxed")) {
            echo " 
<style type=\"text/css\">
body {
    background-color:";
            // line 68
            echo ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "theme_bgcolor"], "method", false, false, false, 68)) ? (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "theme_bgcolor"], "method", false, false, false, 68)) : ("none"));
            echo " ;       
    ";
            // line 69
            if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "contentbg"], "method", false, false, false, 69) != "")) {
                // line 70
                echo "        background-image: url(\"image/";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "contentbg"], "method", false, false, false, 70);
                echo " \");
    ";
            }
            // line 72
            echo "    background-repeat:";
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "content_bg_mode"], "method", false, false, false, 72))) ? (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "content_bg_mode"], "method", false, false, false, 72)) : ("no-repeat"));
            echo " ;
    background-attachment:";
            // line 73
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "content_attachment"], "method", false, false, false, 73))) ? (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "content_attachment"], "method", false, false, false, 73)) : ("inherit"));
            echo " ;
    background-position:top center; 
}
</style>
";
        }
        // line 77
        echo " 
 
</head>
";
        // line 81
        $context["layoutbox"] = (( !twig_test_empty(($context["url_layoutbox"] ?? null))) ? (($context["url_layoutbox"] ?? null)) : (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "layoutstyle"], "method", false, false, false, 81)));
        // line 82
        $context["cls_body"] = (($context["class"] ?? null) . " ");
        // line 83
        $context["cls_body"] = (($context["cls_body"] ?? null) . ($context["direction"] ?? null));
        // line 84
        $context["cls_body"] = ((($context["cls_body"] ?? null) . " layout-") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typelayout"], "method", false, false, false, 84));
        // line 85
        $context["cls_wrapper"] = ("wrapper-" . ($context["layoutbox"] ?? null));
        // line 86
        $context["cls_wrapper"] = ((($context["cls_wrapper"] ?? null) . " banners-effect-") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "type_banner"], "method", false, false, false, 86));
        // line 87
        echo "\t
<body class=\"";
        // line 88
        echo ($context["cls_body"] ?? null);
        echo "\">
<div id=\"wrapper\" class=\"";
        // line 89
        echo ($context["cls_wrapper"] ?? null);
        echo "\">  
 
";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "preloader"], "method", false, false, false, 92)) {
            // line 93
            echo "\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/soconfig/preloader.twig"), "so-sgame/template/common/header.twig", 93)->display(twig_array_merge($context, ["preloader" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "preloader_animation"], "method", false, false, false, 93)]));
        }
        // line 95
        echo "
";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typeheader"], "method", false, false, false, 97)) {
            // line 98
            echo "\t";
            $this->loadTemplate((((($context["theme_directory"] ?? null) . "/template/header/header") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typeheader"], "method", false, false, false, 98)) . ".twig"), "so-sgame/template/common/header.twig", 98)->display(twig_array_merge($context, ["typeheader" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typeheader"], "method", false, false, false, 98)]));
            // line 99
            echo "
";
        } else {
            // line 100
            echo "\t
\t<style>
\t\t.alert-primary .alert-link {color: #002752;}
\t\t.alert-link {font-weight: 700;text-decoration: none;}
\t\t.alert-link:hover{text-decoration: underline;}
\t\t.alert {color: #004085;background-color: #cce5ff;padding: .75rem 1.25rem;margin-bottom: 1rem;border: 1px solid #b8daff;border-radius: .25rem;
\t\t}
\t</style>
\t<div class=\"alert alert-primary\">
\t\t\tGo to admin, find Extensions >>  <a class=\"alert-link\" href=\"admin/index.php?route=marketplace/modification\"  target=”_blank”> Modifications </a> and click 'Refresh' button. To apply the changes characterised by the uploaded modification file
\t</div>
";
        }
        // line 112
        echo "
<div id=\"socialLogin\"></div>

                ";
        // line 115
        if (((array_key_exists("setting", $context) && twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_enable", [], "any", false, false, false, 115)) && twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_popuplogin", [], "any", false, false, false, 115))) {
            // line 116
            echo "                    <div class=\"modal fade in\" id=\"so_sociallogin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                        <div class=\"modal-dialog block-popup-login\">
                            <a href=\"javascript:void(0)\" title=\"Close\" class=\"close close-login fa fa-times-circle\" data-dismiss=\"modal\"></a>
                            <div class=\"tt_popup_login\"><strong>";
            // line 119
            echo ($context["text_title_popuplogin"] ?? null);
            echo "</strong></div>
                            <div class=\"block-content\">
                                <div class=\" col-reg registered-account\">
                                    <div class=\"block-content\">
                                        <form class=\"form form-login\" action=\"";
            // line 123
            echo ($context["login"] ?? null);
            echo "\" method=\"post\" id=\"login-form\">
                                            <fieldset class=\"fieldset login\" data-hasrequired=\"* Required Fields\">
                                                <div class=\"field email required email-input\">
                                                    <div class=\"control\">
                                                        <input name=\"email\" value=\"\" autocomplete=\"off\" id=\"email\" type=\"email\" class=\"input-text\" title=\"Email\" placeholder=\"E-mail Address\" />
                                                    </div>
                                                </div>
                                                <div class=\"field password required pass-input\">
                                                    <div class=\"control\">
                                                        <input name=\"password\" type=\"password\" autocomplete=\"off\" class=\"input-text\" id=\"pass\" title=\"Password\" placeholder=\"Password\" />
                                                    </div>
                                                </div>
                                                ";
            // line 135
            if (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_enable", [], "any", false, false, false, 135)) {
                // line 136
                echo "                                                <div class=\" form-group\">
                                                    <label class=\"control-label\">";
                // line 137
                echo ($context["text_title_login_with_social"] ?? null);
                echo "</label>
                                                    <div>
                                                        ";
                // line 139
                if (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_googlestatus", [], "any", false, false, false, 139)) {
                    // line 140
                    echo "                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_button", [], "any", false, false, false, 140) == "icon")) {
                        // line 141
                        echo "                                                                <a href=\"";
                        echo ($context["googlelink"] ?? null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-google-plus\"><i class=\"fa fa-google fa-fw\" aria-hidden=\"true\"></i></a>
                                                            ";
                    } else {
                        // line 143
                        echo "                                                                <a class=\"social-icon\" href=\"";
                        echo ($context["googlelink"] ?? null);
                        echo "\">
                                                                    <img class=\"img-responsive\" src=\"";
                        // line 144
                        echo ($context["googleimage"] ?? null);
                        echo "\" 
                                                                        data-toggle=\"tooltip\" alt=\"";
                        // line 145
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_googletitle", [], "any", false, false, false, 145);
                        echo "\" 
                                                                        title=\"";
                        // line 146
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_googletitle", [], "any", false, false, false, 146);
                        echo "\" 
                                                                    />
                                                                </a>
                                                            ";
                    }
                    // line 150
                    echo "                                                        ";
                }
                // line 151
                echo "                                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_fbstatus", [], "any", false, false, false, 151)) {
                    // line 152
                    echo "                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_button", [], "any", false, false, false, 152) == "icon")) {
                        // line 153
                        echo "                                                                <a href=\"";
                        echo ($context["fblink"] ?? null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-facebook\"><i class=\"fa fa-facebook fa-fw\" aria-hidden=\"true\"></i></a>
                                                            ";
                    } else {
                        // line 155
                        echo "                                                                <a href=\"";
                        echo ($context["fblink"] ?? null);
                        echo "\" class=\"social-icon\">
                                                                    <img class=\"img-responsive\" src=\"";
                        // line 156
                        echo ($context["fbimage"] ?? null);
                        echo "\" 
                                                                        data-toggle=\"tooltip\" alt=\"";
                        // line 157
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_fbtitle", [], "any", false, false, false, 157);
                        echo "\" 
                                                                        title=\"";
                        // line 158
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_fbtitle", [], "any", false, false, false, 158);
                        echo "\"
                                                                    />
                                                                </a>
                                                            ";
                    }
                    // line 162
                    echo "                                                        ";
                }
                // line 163
                echo "                                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_twitstatus", [], "any", false, false, false, 163)) {
                    // line 164
                    echo "                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_button", [], "any", false, false, false, 164) == "icon")) {
                        // line 165
                        echo "                                                                <a href=\"";
                        echo ($context["twitlink"] ?? null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-twitter\"><i class=\"fa fa-twitter fa-fw\" aria-hidden=\"true\"></i></a>
                                                            ";
                    } else {
                        // line 167
                        echo "                                                                <a class=\"social-icon\"  href=\"";
                        echo ($context["twitlink"] ?? null);
                        echo "\">
                                                                    <img class=\"img-responsive\" src=\"";
                        // line 168
                        echo ($context["twitimage"] ?? null);
                        echo "\" 
                                                                        data-toggle=\"tooltip\" alt=\"";
                        // line 169
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_twittertitle", [], "any", false, false, false, 169);
                        echo "\" 
                                                                        title=\"";
                        // line 170
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_twittertitle", [], "any", false, false, false, 170);
                        echo "\"
                                                                    />
                                                                </a>
                                                            ";
                    }
                    // line 174
                    echo "                                                        ";
                }
                // line 175
                echo "                                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_linkstatus", [], "any", false, false, false, 175)) {
                    // line 176
                    echo "                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_button", [], "any", false, false, false, 176) == "icon")) {
                        // line 177
                        echo "                                                                <a href=\"";
                        echo ($context["linkdinlink"] ?? null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-linkdin\"><i class=\"fa fa-linkedin fa-fw\" aria-hidden=\"true\"></i></a>
                                                            ";
                    } else {
                        // line 179
                        echo "                                                                <a class=\"social-icon\"  href=\"";
                        echo ($context["linkdinlink"] ?? null);
                        echo "\">
                                                                    <img class=\"img-responsive\" src=\"";
                        // line 180
                        echo ($context["linkdinimage"] ?? null);
                        echo "\" 
                                                                        data-toggle=\"tooltip\" alt=\"";
                        // line 181
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_linkedintitle", [], "any", false, false, false, 181);
                        echo "\" 
                                                                        title=\"";
                        // line 182
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_linkedintitle", [], "any", false, false, false, 182);
                        echo "\"
                                                                    />
                                                                </a>
                                                            ";
                    }
                    // line 186
                    echo "                                                        ";
                }
                // line 187
                echo "                                                    </div>
                                                </div>
                                                ";
            }
            // line 190
            echo "                                                <div class=\"secondary ft-link-p\"><a class=\"action remind\" href=\"";
            echo ($context["link_forgot_password"] ?? null);
            echo "\"><span>";
            echo ($context["text_forgot_password"] ?? null);
            echo "</span></a></div>
                                                <div class=\"actions-toolbar\">
                                                    <div class=\"primary\"><button type=\"submit\" class=\"action login primary\" name=\"send\" id=\"send2\"><span>";
            // line 192
            echo ($context["text_login"] ?? null);
            echo "</span></button></div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>      
                                <div class=\"col-reg login-customer\">
                                    ";
            // line 199
            echo ($context["text_colregister"] ?? null);
            echo "
                                    <a class=\"btn-reg-popup\" title=\"";
            // line 200
            echo ($context["text_register"] ?? null);
            echo "\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_create_account"] ?? null);
            echo "</a>
                                </div>
                                <div style=\"clear:both;\"></div>
                            </div>
                        </div>
                    </div>
                    <script type=\"text/javascript\">
                        jQuery(document).ready(function(\$) {
                            var \$window = \$(window);
                            function checkWidth() {
                                var windowsize = \$window.width();
                                if (windowsize > 767) {
                                    \$('a[href*=\"account/login\"]').click(function (e) {
                                        e.preventDefault();
                                        \$(\"#so_sociallogin\").modal('show');
                                    });
                                }
                            }
                            checkWidth();
                            \$(window).resize(checkWidth);
                        });
                    </script>
                ";
        }
        // line 223
        echo "            
";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  583 => 223,  553 => 200,  549 => 199,  539 => 192,  531 => 190,  526 => 187,  523 => 186,  516 => 182,  512 => 181,  508 => 180,  503 => 179,  497 => 177,  494 => 176,  491 => 175,  488 => 174,  481 => 170,  477 => 169,  473 => 168,  468 => 167,  462 => 165,  459 => 164,  456 => 163,  453 => 162,  446 => 158,  442 => 157,  438 => 156,  433 => 155,  427 => 153,  424 => 152,  421 => 151,  418 => 150,  411 => 146,  407 => 145,  403 => 144,  398 => 143,  392 => 141,  389 => 140,  387 => 139,  382 => 137,  379 => 136,  377 => 135,  362 => 123,  355 => 119,  350 => 116,  348 => 115,  343 => 112,  329 => 100,  325 => 99,  322 => 98,  320 => 97,  317 => 95,  313 => 93,  311 => 92,  306 => 89,  302 => 88,  299 => 87,  297 => 86,  295 => 85,  293 => 84,  291 => 83,  289 => 82,  287 => 81,  282 => 77,  274 => 73,  269 => 72,  263 => 70,  261 => 69,  257 => 68,  251 => 65,  248 => 64,  239 => 63,  226 => 62,  219 => 60,  215 => 58,  211 => 57,  207 => 56,  196 => 54,  191 => 52,  186 => 50,  182 => 49,  178 => 48,  174 => 47,  168 => 45,  166 => 44,  162 => 43,  156 => 42,  152 => 41,  148 => 40,  144 => 39,  140 => 38,  136 => 37,  132 => 36,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  98 => 27,  93 => 25,  89 => 24,  85 => 23,  79 => 22,  73 => 21,  70 => 19,  64 => 18,  58 => 17,  53 => 15,  49 => 14,  40 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/common/header.twig", "C:\\OSPanel\\domains\\gamer2\\storage\\modification\\catalog\\view\\theme\\so-sgame\\template\\common\\header.twig");
    }
}
