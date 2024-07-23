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

/* extension/soconfig/options_stores.twig */
class __TwigTemplate_5f591662b76eb80d56e3e477e13dff31011fb4c12e2c912c29fd40d4071e49e1 extends \Twig\Template
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
        // line 2
        echo "
";
        // line 3
        $context["param_columns"] = ["1" => "1 column", "2" => "2 columns", "3" => "3 columns", "4" => "4 columns", "5" => "5 columns", "6" => "6 columns", "7" => "7 columns", "8" => "8 columns", "9" => "9 columns"];
        // line 14
        echo "
";
        // line 15
        $context["param_cardGallery"] = ["1" => "Align Left", "2" => "Align Right", "3" => "Align Bottom"];
        // line 20
        echo "
";
        // line 21
        $context["param_refineSearch"] = ["0" => "Disable ", "1" => "Image only", "2" => "Text and image", "3" => "Block light"];
        // line 27
        echo "

";
        // line 29
        $context["param_scssFormat"] = ["Expanded" => "Expanded", "Nested" => "Nested (default)", "Compressed" => "Compressed", "Compact" => "Compact", "Crunched" => "Crunched"];
        // line 36
        echo "
";
        // line 37
        $context["param_layoutStyle"] = ["full" => "Default", "fluid" => "Layout fluid", "boxed" => "Layout boxed"];
        // line 42
        echo "
";
        // line 43
        $context["param_contentbgMode"] = ["repeat" => "Repeat", "no-repeat" => "No-Repeat"];
        // line 47
        echo "
";
        // line 48
        $context["param_contentAttachment"] = ["scroll" => "Scroll", "fixed" => "Fixed"];
        // line 52
        echo "


";
        // line 55
        $context["param_productGallery"] = ["bottom" => "Gallery Bottom", "left" => "Gallery Left", "grid" => "Gallery Grid", "list" => "Gallery List", "slider" => "Gallery Slider"];
        // line 62
        echo "


";
        // line 65
        $context["param_tabsPosition"] = ["1" => "Bottom vertical", "2" => "Bottom horizontal"];
        // line 69
        echo "
";
        // line 70
        $context["param_toppanel"] = ["1" => "Show Header Center", "2" => "Show Header Bottom", "3" => "Show All"];
        // line 75
        echo "
";
        // line 76
        $context["param_catalogMode"] = ["grid-list" => "List Column", "grid-table" => "Table Column", "grid-2" => "2 Columns", "grid-3" => "3 Columns", "grid-4" => "4 Columns", "grid-5" => "5 Columns"];
        // line 84
        echo "

";
        // line 86
        $context["param_totalBanner"] = ["1" => "Hover effect 1", "2" => "Hover effect 2", "3" => "Hover effect 3", "4" => "Hover effect 4", "5" => "Hover effect 5", "6" => "Hover effect 6", "7" => "Hover effect 7", "8" => "Hover effect 8", "9" => "Hover effect 9", "10" => "Hover effect 10", "11" => "Hover effect 11", "12" => "Hover effect 12"];
        // line 100
        echo "
";
        // line 101
        $context["param_carticon"] = ["cart-1" => "Cart Icon 1", "cart-2" => "Cart Icon 2", "cart-3" => "Cart Icon 3", "cart-4" => "Cart Icon 4", "cart-5" => "Cart Icon 5", "cart-6" => "Cart Icon 6"];
        // line 109
        echo "
";
        // line 110
        $context["param_preloaderAnimation"] = ["line" => "Default line", "double-loop" => "Double Bounce", "cube-move" => "Cube Move", "circle-bounce" => "Circle Bounce", "folding-cube" => "Cube Folding"];
        // line 117
        echo "
";
        // line 118
        $context["param_blogColumn"] = ["blog-grid" => "1 Column", "blog-2" => "2 Columns", "blog-3" => "3 Columns", "blog-4" => "4 Columns", "blog-list" => "List Column"];
        // line 125
        echo "
";
        // line 126
        $context["param_articlesStyle"] = ["default" => "Default", "style1" => "Style1", "style2" => "Style2", "style3" => "Style3", "style4" => "Style4", "style5" => "Style5"];
        // line 134
        echo "
";
        // line 135
        $context["customSelectorsDesc"] = "Add custom CSS selectors separated by a comma.";
        // line 136
        $context["desc_Sidebar"] = "If sidebar has no content. Then click Design → Layouts add content for sidebar";
        // line 137
        $context["desc_NoSidebar"] = "If no sidebar has not working.";
        // line 138
        $context["desc_newcolor"] = "New Color showing in box select color.";
        // line 139
        $context["desc_notnewcolor"] = " <b>Create New Color working : </b> </br> Tab Advanced → SCSS Compile = Off, Developer Compile Muti Color = Off";
        // line 140
        $context["customCssDesc"] = "You can use custom CSS use the custom.css file";
        // line 141
        $context["customJSDesc"] = "You can add custom JavaScript code. It loads your custom Javascript file after all other JavaScript files (except special hardcoded occasions), allowing you to be the last one who will affect your website.";
        // line 142
        $context["desc_contact"] = "<a href=\"https://developers.google.com/maps/documentation/javascript/get-api-key\" target=\"_blank\" style=\"display: block;float: left;width: auto;margin-top: 7px\">Find your API Key »</a>";
        // line 143
        echo "
";
        // line 145
        echo "
    ";
        // line 147
        echo "    <div class=\"so-ultimate-fieldset so-ultimate-fieldset-basic clearfix\">
\t\t";
        // line 148
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_general"], "method", false, false, false, 148), 1 => "icon-home"], "method", false, false, false, 148);
        echo " 
\t\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 151
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_general"], "method", false, false, false, 151), 1 => "sub-header", 2 => true], "method", false, false, false, 151);
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t";
        // line 155
        echo "\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-Style\">
\t\t\t\t";
        // line 156
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_tab_Styles"], "method", false, false, false, 156)], "method", false, false, false, 156);
        echo " 
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-field-list field-list--scheme ";
        // line 158
        if ( !($context["validate"] ?? null)) {
            echo " disable-applyHome ";
        }
        echo "\">
\t\t\t\t\t";
        // line 159
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "homepageSelect", [0 => "soconfig_general_store", 1 => "typelayout", 2 => ($context["homeStyle"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_homestyle"], "method", false, false, false, 159)], "method", false, false, false, 159);
        echo " 
\t\t\t\t\t";
        // line 160
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_general_store", 1 => "themecolor", 2 => ($context["totalLayoutColor"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_colorstyles"], "method", false, false, false, 160), 4 => "field--listcolor"], "method", false, false, false, 160);
        echo " 
\t\t\t\t\t
\t\t\t\t\t";
        // line 162
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_advanced_store", 1 => "newcolor_status", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_newcolor"], "method", false, false, false, 162), 3 => "parent newcolor"], "method", false, false, false, 162);
        echo " 
\t\t\t\t\t";
        // line 163
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "text", [0 => "soconfig_advanced_store", 1 => "name_color", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_namecolor"], "method", false, false, false, 163), 3 => "child newcolor newcolor_1"], "method", false, false, false, 163);
        echo " 
\t\t\t\t\t";
        // line 164
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_colors", [0 => "soconfig_advanced_store", 1 => "theme_color", 2 => " ", 3 => "child newcolor newcolor_1"], "method", false, false, false, 164);
        echo " 
\t\t\t\t\t
\t\t\t\t\t<div class=\"control-group control-group-advanced\">
\t\t\t\t\t\t<div class=\"control-group-inner child newcolor newcolor_1\">
\t\t\t\t\t\t\t<button onclick=\"buttonApplyColor();\" class=\"btn btn-info\" type=\"button\"  ";
        // line 168
        if (($context["scsscompile"] ?? null)) {
            echo " ";
            echo "disabled='disabled'";
            echo " ";
        }
        echo "><i class=\"fa fa-magic\" aria-hidden=\"true\"></i> New Color</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group control-group-advanced\"> <div class=\"control-help control-group-inner child newcolor newcolor_1\">
\t\t\t\t\t\t";
        // line 172
        if (($context["scsscompile"] ?? null)) {
            // line 173
            echo "\t\t\t\t\t\t\t";
            echo ($context["desc_notnewcolor"] ?? null);
            echo "
\t\t\t\t\t\t";
        } else {
            // line 175
            echo "\t\t\t\t\t\t\t";
            echo ($context["desc_newcolor"] ?? null);
            echo " 
\t\t\t\t\t\t";
        }
        // line 177
        echo "\t\t\t\t\t</div></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-general\">
\t\t\t\t";
        // line 182
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_tab_general"], "method", false, false, false, 182)], "method", false, false, false, 182);
        echo " 
\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t";
        // line 184
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "effectBanner", [0 => "soconfig_general_store", 1 => "type_banner", 2 => ($context["param_totalBanner"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_effectBanner"], "method", false, false, false, 184)], "method", false, false, false, 184);
        echo " 
\t\t\t\t\t";
        // line 185
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_general_store", 1 => "backtop", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_back_top"], "method", false, false, false, 185)], "method", false, false, false, 185);
        echo " 
\t\t\t\t\t";
        // line 186
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_general_store", 1 => "preloader", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_preloader"], "method", false, false, false, 186), 3 => "parent preloader"], "method", false, false, false, 186);
        echo " 
\t\t\t\t\t";
        // line 187
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_general_store", 1 => "preloader_animation", 2 => ($context["param_preloaderAnimation"] ?? null), 3 => "Preloader Styles", 4 => "child preloader preloader_1 "], "method", false, false, false, 187);
        echo " 
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t   
\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-comingsoon\">
\t\t\t\t";
        // line 193
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => ($context["pages_comingsoon"] ?? null)], "method", false, false, false, 193);
        echo " 
\t\t\t\t
\t\t\t   <div class=\"so-ultimate-field-list\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 197
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_addimage", [0 => "soconfig_pages_store", 1 => "comingsoon_imglogo", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "pages_comingsoonLogo"], "method", false, false, false, 197)], "method", false, false, false, 197);
        echo " 
\t\t\t\t\t";
        // line 198
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "langTextarea", [0 => ($context["languages"] ?? null), 1 => "soconfig_pages_store", 2 => "comingsoon_title", 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "pages_comingsoonTitle"], "method", false, false, false, 198)], "method", false, false, false, 198);
        echo "
\t\t\t\t\t";
        // line 199
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_date", [0 => "soconfig_pages_store", 1 => "comingsoon_date", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "pages_comingsoonDate"], "method", false, false, false, 199)], "method", false, false, false, 199);
        echo "
\t\t\t\t\t";
        // line 200
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "langTextarea", [0 => ($context["languages"] ?? null), 1 => "soconfig_pages_store", 2 => "comingsoon_content", 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "pages_comingsoonContent"], "method", false, false, false, 200)], "method", false, false, false, 200);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-contactus\">
\t\t\t\t";
        // line 207
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => ($context["pages_contactus"] ?? null)], "method", false, false, false, 207);
        echo " 
\t\t\t\t
\t\t\t   <div class=\"so-ultimate-field-list\">
\t\t\t\t\t";
        // line 210
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "text", [0 => "soconfig_pages_store", 1 => "mapaddress", 2 => "Address Text"], "method", false, false, false, 210);
        echo " 
\t\t\t\t\t";
        // line 211
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "text", [0 => "soconfig_pages_store", 1 => "mapgeocode", 2 => "Maps Geocode"], "method", false, false, false, 211);
        echo " 
\t\t\t\t\t";
        // line 212
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "text", [0 => "soconfig_pages_store", 1 => "mapkeys", 2 => "API Key Text", 3 => "", 4 => ($context["desc_contact"] ?? null)], "method", false, false, false, 212);
        echo " 
\t\t\t\t\t";
        // line 213
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "text", [0 => "soconfig_pages_store", 1 => "mapzoom", 2 => "Maps Zoom"], "method", false, false, false, 213);
        echo " 
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t</div>
    </div>
\t";
        // line 224
        echo "\t
\t";
        // line 226
        echo "\t<div class=\"so-ultimate-fieldset so-ultimate-fieldset-headerFooter\" >
\t\t";
        // line 227
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_headerfoter"], "method", false, false, false, 227), 1 => "icon-header"], "method", false, false, false, 227);
        echo " 
\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 230
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_headerfoter"], "method", false, false, false, 230), 1 => "sub-header", 2 => true], "method", false, false, false, 230);
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-header\">
\t\t\t\t\t";
        // line 234
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_tab_header"], "method", false, false, false, 234)], "method", false, false, false, 234);
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 236
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "headerStyle", [0 => "soconfig_general_store", 1 => "typeheader", 2 => ($context["homeStyle"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_styleheader"], "method", false, false, false, 236), 4 => ""], "method", false, false, false, 236);
        echo " 
\t\t\t\t\t\t";
        // line 237
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "goLink", [0 => "Configure to Megamenu", 1 => "index.php?route=extension/module/so_megamenu"], "method", false, false, false, 237);
        echo " 
\t\t\t\t\t\t";
        // line 238
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_general_store", 1 => "toppanel_status", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_stickyheader"], "method", false, false, false, 238), 3 => "parent stickyheader"], "method", false, false, false, 238);
        echo " 
\t\t\t\t\t\t";
        // line 239
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_general_store", 1 => "toppanel_type", 2 => ($context["param_toppanel"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_positionheader"], "method", false, false, false, 239), 4 => "child stickyheader stickyheader_1"], "method", false, false, false, 239);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 241
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_general_store", 1 => "iconWishlist_status", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "design_iconWishlist"], "method", false, false, false, 241)], "method", false, false, false, 241);
        echo " 
\t\t\t\t\t\t";
        // line 242
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_general_store", 1 => "iconCompare_status", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "design_iconCompare"], "method", false, false, false, 242)], "method", false, false, false, 242);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 244
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_general_store", 1 => "phone_status", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_primaryMessage"], "method", false, false, false, 244), 3 => "parent primaryMessage"], "method", false, false, false, 244);
        echo " 
\t\t\t\t\t\t";
        // line 245
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "langTextarea", [0 => ($context["languages"] ?? null), 1 => "soconfig_general_store", 2 => "contact_number", 3 => " ", 4 => "child primaryMessage primaryMessage_1"], "method", false, false, false, 245);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 247
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_general_store", 1 => "welcome_message_status", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_secondaryMessage"], "method", false, false, false, 247), 3 => "parent secondaryMessage"], "method", false, false, false, 247);
        echo " 
\t\t\t\t\t\t";
        // line 248
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "langTextarea", [0 => ($context["languages"] ?? null), 1 => "soconfig_general_store", 2 => "welcome_message", 3 => " ", 4 => "child secondaryMessage secondaryMessage_1"], "method", false, false, false, 248);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-footer\">
\t\t\t\t\t";
        // line 255
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_tab_footer"], "method", false, false, false, 255)], "method", false, false, false, 255);
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 257
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "headerStyle", [0 => "soconfig_general_store", 1 => "typefooter", 2 => ($context["homeStyle"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_stylefooter"], "method", false, false, false, 257), 4 => ""], "method", false, false, false, 257);
        echo " 
\t\t\t\t\t\t";
        // line 258
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "goLink", [0 => "Configure Module Footer", 1 => "index.php?route=extension/module/so_page_builder"], "method", false, false, false, 258);
        echo " 
\t\t\t\t\t\t";
        // line 259
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_general_store", 1 => "imgpayment_status", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_statusPayment"], "method", false, false, false, 259), 3 => "parent statusPayment"], "method", false, false, false, 259);
        echo " 
\t\t\t\t\t\t";
        // line 260
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_addimage", [0 => "soconfig_general_store", 1 => "imgpayment", 2 => " ", 3 => "child statusPayment statusPayment_1"], "method", false, false, false, 260);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 262
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "langTextarea", [0 => ($context["languages"] ?? null), 1 => "soconfig_general_store", 2 => "copyright", 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "general_copyright"], "method", false, false, false, 262)], "method", false, false, false, 262);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t
\t\t</div>
    </div>
\t";
        // line 272
        echo "\t
    ";
        // line 274
        echo "    <div class=\"so-ultimate-fieldset so-ultimate-fieldset-designcolor\" >
\t\t";
        // line 275
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_layout"], "method", false, false, false, 275), 1 => "icon-colors"], "method", false, false, false, 275);
        echo " 
\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 278
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_layout"], "method", false, false, false, 278), 1 => "sub-header", 2 => true], "method", false, false, false, 278);
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 282
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "design_tabLayout"], "method", false, false, false, 282)], "method", false, false, false, 282);
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 284
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_layout_store", 1 => "layoutstyle", 2 => ($context["param_layoutStyle"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "design_layoutStyle"], "method", false, false, false, 284)], "method", false, false, false, 284);
        echo " 
\t\t\t\t\t\t";
        // line 285
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "shoppingIcon", [0 => "soconfig_layout_store", 1 => "iconcart", 2 => ($context["param_carticon"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "design_shoppingIcon"], "method", false, false, false, 285)], "method", false, false, false, 285);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 291
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "designtab_bodybackground"], "method", false, false, false, 291)], "method", false, false, false, 291);
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 294
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_colors", [0 => "soconfig_layout_store", 1 => "theme_bgcolor", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "design_backgroundColor"], "method", false, false, false, 294)], "method", false, false, false, 294);
        echo "  
\t\t\t\t\t\t";
        // line 295
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_addimage", [0 => "soconfig_layout_store", 1 => "contentbg", 2 => " ", 3 => " ", 4 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "desc_bodybackground"], "method", false, false, false, 295)], "method", false, false, false, 295);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 297
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_layout_store", 1 => "content_bg_mode", 2 => ($context["param_contentbgMode"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "design_backgroundSize"], "method", false, false, false, 297)], "method", false, false, false, 297);
        echo " 
\t\t\t\t\t\t";
        // line 298
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_layout_store", 1 => "content_attachment", 2 => ($context["param_contentAttachment"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "design_backgroundAttachment"], "method", false, false, false, 298)], "method", false, false, false, 298);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 303
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "designtab_headerbackground"], "method", false, false, false, 303)], "method", false, false, false, 303);
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list field-list--liveColors\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 306
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_layout_store", 1 => "headercolor_status", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "design_headerColor"], "method", false, false, false, 306), 3 => "parent headerColor"], "method", false, false, false, 306);
        echo " 
\t\t\t\t\t\t";
        // line 307
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "liveColors", [0 => "soconfig_layout_store", 1 => "headerparent", 2 => "Header Parent ", 3 => "child headerColor headerColor_1 "], "method", false, false, false, 307);
        echo "  
\t\t\t\t\t\t";
        // line 308
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "liveColors", [0 => "soconfig_layout_store", 1 => "headertop", 2 => "Header Top", 3 => "child headerColor headerColor_1 "], "method", false, false, false, 308);
        echo "  
\t\t\t\t\t\t";
        // line 309
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "liveColors", [0 => "soconfig_layout_store", 1 => "headercenter", 2 => "Header Middle", 3 => "child headerColor headerColor_1 "], "method", false, false, false, 309);
        echo "  
\t\t\t\t\t\t";
        // line 310
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "liveColors", [0 => "soconfig_layout_store", 1 => "headerbottom", 2 => "Header Bottom", 3 => "child headerColor headerColor_1 "], "method", false, false, false, 310);
        echo "  
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t
\t\t</div>
    </div>
\t";
        // line 320
        echo "\t
\t
\t";
        // line 323
        echo "    <div class=\"so-ultimate-fieldset so-ultimate-fieldset-fonts\">
\t\t";
        // line 324
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_fonts"], "method", false, false, false, 324), 1 => "icon-font"], "method", false, false, false, 324);
        echo " 
\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 327
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_fonts"], "method", false, false, false, 327), 1 => "sub-header", 2 => true], "method", false, false, false, 327);
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 331
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => "Body"], "method", false, false, false, 331);
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 333
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_fonts_store", 1 => "body_status", 2 => "Enable", 3 => "parent fontBody"], "method", false, false, false, 333);
        echo "
\t\t\t\t\t\t";
        // line 334
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "gfonts", [0 => "soconfig_fonts_store", 1 => "body_font", 2 => "child fontBody fontBody_1"], "method", false, false, false, 334);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 339
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => "Headings "], "method", false, false, false, 339);
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 341
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_fonts_store", 1 => "h1_font_status", 2 => "Headings 1", 3 => "parent h1font"], "method", false, false, false, 341);
        echo "
\t\t\t\t\t\t";
        // line 342
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "gfonts", [0 => "soconfig_fonts_store", 1 => "h1_font", 2 => "child fontheading h1font h1font_1"], "method", false, false, false, 342);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 344
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_fonts_store", 1 => "h2_font_status", 2 => "Headings 2", 3 => "parent h2font"], "method", false, false, false, 344);
        echo "
\t\t\t\t\t\t";
        // line 345
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "gfonts", [0 => "soconfig_fonts_store", 1 => "h2_font", 2 => "child h2font h2font_1"], "method", false, false, false, 345);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 347
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_fonts_store", 1 => "h3_font_status", 2 => "Headings 3", 3 => "parent h3font"], "method", false, false, false, 347);
        echo "
\t\t\t\t\t\t";
        // line 348
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "gfonts", [0 => "soconfig_fonts_store", 1 => "h3_font", 2 => "child h3font h3font_1"], "method", false, false, false, 348);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 350
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_fonts_store", 1 => "h4_font_status", 2 => "Headings 4", 3 => "parent h4font"], "method", false, false, false, 350);
        echo "
\t\t\t\t\t\t";
        // line 351
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "gfonts", [0 => "soconfig_fonts_store", 1 => "h4_font", 2 => "child h4font h4font_1"], "method", false, false, false, 351);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 358
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => "Main navigation"], "method", false, false, false, 358);
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 360
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_fonts_store", 1 => "navigation_font_status", 2 => "Enable", 3 => "parent naviFont"], "method", false, false, false, 360);
        echo "
\t\t\t\t\t\t";
        // line 361
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "gfonts", [0 => "soconfig_fonts_store", 1 => "navigation_font", 2 => "child naviFont naviFont_1"], "method", false, false, false, 361);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 366
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => "Store"], "method", false, false, false, 366);
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 368
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_fonts_store", 1 => "moduleTitle_font_status", 2 => "Widgets Titles / Module title", 3 => "parent moduleTitleFont"], "method", false, false, false, 368);
        echo "
\t\t\t\t\t\t";
        // line 369
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "gfonts", [0 => "soconfig_fonts_store", 1 => "moduleTitle_font", 2 => "child moduleTitleFont moduleTitleFont_1"], "method", false, false, false, 369);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 371
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_fonts_store", 1 => "productTitle_font_status", 2 => "Product title", 3 => "parent productTitleFont"], "method", false, false, false, 371);
        echo "
\t\t\t\t\t\t";
        // line 372
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "gfonts", [0 => "soconfig_fonts_store", 1 => "productTitle_font", 2 => "child productTitleFont productTitleFont_1"], "method", false, false, false, 372);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 374
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_fonts_store", 1 => "productPrice_font_status", 2 => "Product price", 3 => "parent productPriceFont"], "method", false, false, false, 374);
        echo "
\t\t\t\t\t\t";
        // line 375
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "gfonts", [0 => "soconfig_fonts_store", 1 => "productPrice_font", 2 => "child productPriceFont productPriceFont_1"], "method", false, false, false, 375);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 380
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => "Custom Selectors"], "method", false, false, false, 380);
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 382
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_fonts_store", 1 => "custom_font_status", 2 => "Enable", 3 => "parent fontcustom"], "method", false, false, false, 382);
        echo "
\t\t\t\t\t\t";
        // line 383
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "gfonts", [0 => "soconfig_fonts_store", 1 => "custom_font", 2 => "child fontcustom fontcustom_1"], "method", false, false, false, 383);
        echo "
\t\t\t\t\t\t";
        // line 384
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "textarea", [0 => "soconfig_fonts_store", 1 => "customFont_content", 2 => "Custom Selectors", 3 => ($context["customSelectorsDesc"] ?? null), 4 => "child fontcustom fontcustom_1"], "method", false, false, false, 384);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 389
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => "Update Font List"], "method", false, false, false, 389);
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t<div class=\"control-group group-style-update_font\">
\t\t\t\t\t\t\t<div class=\"control-group-inner\">
\t\t\t\t\t\t\t\t<div class=\"controls\"><a id=\"update_fonts\" class=\"btn btn-primary btn-update-so-ultimate-fonts\" href=\"#\" target=\"_self\">One Click update</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"control-help\">Click this button to refresh the list of Google fonts.</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>\t\t\t\t
   
\t\t</div>
   </div>
\t";
        // line 404
        echo "\t
\t
\t";
        // line 407
        echo "    <div class=\"so-ultimate-fieldset so-ultimate-fieldset-store\" >
\t\t";
        // line 408
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_products"], "method", false, false, false, 408), 1 => "icon-shop"], "method", false, false, false, 408);
        echo " 
\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 411
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_products"], "method", false, false, false, 411), 1 => "sub-header", 2 => true], "method", false, false, false, 411);
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 415
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => ($context["pages_common"] ?? null)], "method", false, false, false, 415);
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 417
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_pages_store", 1 => "catalog_display_sidebar", 2 => ["disable" => "No Sidebar", "left" => "Sidebar Left", "right" => "Sidebar Right", "all" => "Sidebar All"], 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_sidebar_display"], "method", false, false, false, 417), 4 => "", 5 => ($context["desc_Sidebar"] ?? null)], "method", false, false, false, 417);
        echo " 
\t\t\t\t\t\t";
        // line 418
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_pages_store", 1 => "catalog_col_position", 2 => ["outside" => "Outside content", "inside" => "Inside content"], 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_col_position"], "method", false, false, false, 418), 4 => "", 5 => ($context["desc_NoSidebar"] ?? null)], "method", false, false, false, 418);
        echo " 
\t\t\t\t\t\t";
        // line 419
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_pages_store", 1 => "catalog_col_type", 2 => ["default" => "Default", "off_canvas" => "Column Off Canvas"], 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_col_type"], "method", false, false, false, 419), 4 => "", 5 => ($context["desc_NoSidebar"] ?? null)], "method", false, false, false, 419);
        echo " 
\t\t\t\t\t\t";
        // line 420
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_pages_store", 1 => "catalog_sidebar_sticky", 2 => ["disable" => "Disable", "left" => "Sidebar Left", "right" => "Sidebar Right", "all" => "Sidebar All"], 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_sidebar_sticky"], "method", false, false, false, 420), 4 => "", 5 => ($context["desc_NoSidebar"] ?? null)], "method", false, false, false, 420);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 426
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => ($context["pages_subcategory"] ?? null)], "method", false, false, false, 426);
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 428
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_pages_store", 1 => "featured_cate_status", 2 => "Display Category Featured"], "method", false, false, false, 428);
        echo " 
\t\t\t\t\t\t";
        // line 429
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_pages_store", 1 => "lstimg_cate_status", 2 => [0 => "Disable", 1 => "Show Description", 2 => "Show all"], 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_show"], "method", false, false, false, 429)], "method", false, false, false, 429);
        echo " 
\t\t\t\t\t\t";
        // line 430
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_pages_store", 1 => "product_catalog_refine", 2 => ($context["param_refineSearch"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_refine"], "method", false, false, false, 430)], "method", false, false, false, 430);
        echo " 
\t\t\t\t\t\t";
        // line 431
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_pages_store", 1 => "catalog_refine_number", 2 => ($context["param_columns"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_refine_col"], "method", false, false, false, 431)], "method", false, false, false, 431);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 436
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => ($context["pages_pro_listings"] ?? null)], "method", false, false, false, 436);
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 438
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_pages_store", 1 => "product_catalog_mode", 2 => ($context["param_catalogMode"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_mode"], "method", false, false, false, 438)], "method", false, false, false, 438);
        echo " 
\t\t\t\t\t\t";
        // line 439
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_pages_store", 1 => "card_gallery", 2 => ($context["param_cardGallery"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_gallery"], "method", false, false, false, 439)], "method", false, false, false, 439);
        echo " 
\t\t\t\t\t\t";
        // line 440
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_pages_store", 1 => "desktop_addcart_position", 2 => ["left" => "Align Left", "right" => "Align Right", "center" => "Align Center", "bottom" => "Align Bottom"], 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_cartinfo"], "method", false, false, false, 440)], "method", false, false, false, 440);
        echo " 
\t\t\t\t\t\t";
        // line 441
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_pages_store", 1 => "placeholder_status", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_placeholder"], "method", false, false, false, 441), 3 => "parent placeholder"], "method", false, false, false, 441);
        echo " 
\t\t\t\t\t\t";
        // line 442
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_addimage", [0 => "soconfig_pages_store", 1 => "placeholder_img", 2 => " ", 3 => "child placeholder placeholder_1"], "method", false, false, false, 442);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"control-group control-group-element\">
\t\t\t\t\t\t\t<div class=\"control-group-inner \">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Element visibility</label>
\t\t\t\t\t\t\t\t<div class=\"controls \">
\t\t\t\t\t\t\t\t\t<table class=\"table\" cellspacing=\"0\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open\">
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"260\">Element</th><th  class=\"align_center\">Default</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep tbProductElementVisibilityCartButton\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>Add to cart button</td><td>";
        // line 456
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "checkbox", [0 => "soconfig_pages_store", 1 => "listing_cart_status"], "method", false, false, false, 456);
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep tbProductElementVisibilityCompareButton\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>Compare button</td><td>";
        // line 459
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "checkbox", [0 => "soconfig_pages_store", 1 => "listing_compare_status"], "method", false, false, false, 459);
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep tbProductElementVisibilityWishlistButton\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>Wishlist button</td><td>";
        // line 462
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "checkbox", [0 => "soconfig_pages_store", 1 => "listing_wishlist_status"], "method", false, false, false, 462);
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep tbProductElementVisibilityWishlistButton\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>QuickView button</td><td>";
        // line 465
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "checkbox", [0 => "soconfig_pages_store", 1 => "listing_quickview_status"], "method", false, false, false, 465);
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>Rating</td><td>";
        // line 468
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "checkbox", [0 => "soconfig_pages_store", 1 => "listing_rating_status"], "method", false, false, false, 468);
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>Discount label</td><td>";
        // line 471
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "checkbox", [0 => "soconfig_pages_store", 1 => "listing_discount_status"], "method", false, false, false, 471);
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>Countdown </td><td>";
        // line 475
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "checkbox", [0 => "soconfig_pages_store", 1 => "listing_countdown_status"], "method", false, false, false, 475);
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>Image gallery</td><td>";
        // line 478
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "checkbox", [0 => "soconfig_pages_store", 1 => "listing_gallery_status"], "method", false, false, false, 478);
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 489
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => ($context["pages_pro_detail"] ?? null)], "method", false, false, false, 489);
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 491
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_pages_store", 1 => "thumbnails_position", 2 => ($context["param_productGallery"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_productgallery"], "method", false, false, false, 491)], "method", false, false, false, 491);
        echo " 
\t\t\t\t\t\t";
        // line 492
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_pages_store", 1 => "radio_style", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_checkradio"], "method", false, false, false, 492)], "method", false, false, false, 492);
        echo " 
\t\t\t\t\t\t";
        // line 493
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_pages_store", 1 => "product_enablezoom", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_zoomimage"], "method", false, false, false, 493)], "method", false, false, false, 493);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 495
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_pages_store", 1 => "product_sold", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_productsold"], "method", false, false, false, 495)], "method", false, false, false, 495);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 497
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_pages_store", 1 => "product_enablesizechart", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_sizechart"], "method", false, false, false, 497), 3 => "parent sizechart"], "method", false, false, false, 497);
        echo " 
\t\t\t\t\t\t";
        // line 498
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_addimage", [0 => "soconfig_general_store", 1 => "img_sizechart", 2 => " ", 3 => "child sizechart sizechart_1"], "method", false, false, false, 498);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 500
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_pages_store", 1 => "tabs_position", 2 => ($context["param_tabsPosition"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_tabs"], "method", false, false, false, 500)], "method", false, false, false, 500);
        echo " 
\t\t\t\t\t\t";
        // line 501
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_pages_store", 1 => "product_enableshowmore", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_showmore"], "method", false, false, false, 501)], "method", false, false, false, 501);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 503
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_pages_store", 1 => "product_enableshipping", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_shipping"], "method", false, false, false, 503), 3 => "parent content_shipping"], "method", false, false, false, 503);
        echo " 
\t\t\t\t\t\t";
        // line 504
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "langTextarea", [0 => ($context["languages"] ?? null), 1 => "soconfig_pages_store", 2 => "product_contentshipping", 3 => " ", 4 => "child content_shipping content_shipping_1"], "method", false, false, false, 504);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 506
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_pages_store", 1 => "product_page_button", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_shared"], "method", false, false, false, 506), 3 => "parent content_social"], "method", false, false, false, 506);
        echo " 
\t\t\t\t\t\t";
        // line 507
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "langTextarea", [0 => ($context["languages"] ?? null), 1 => "soconfig_pages_store", 2 => "product_socialshare", 3 => " ", 4 => "child content_social content_social_1"], "method", false, false, false, 507);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 509
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_pages_store", 1 => "related_status", 2 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "product_catalog_related"], "method", false, false, false, 509), 3 => "parent relatedProduct"], "method", false, false, false, 509);
        echo " 
\t\t\t\t\t\t";
        // line 510
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "devices", [0 => "soconfig_pages_store", 1 => "product_related_column_", 2 => "Related products per row", 3 => "child relatedProduct relatedProduct_1"], "method", false, false, false, 510);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t
\t\t\t</div>
       
\t\t</div>
    </div>
\t";
        // line 519
        echo "\t
\t";
        // line 521
        echo "\t<div class=\"so-ultimate-fieldset so-ultimate-fieldset-social\">
\t\t";
        // line 522
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_blog"], "method", false, false, false, 522), 1 => "icon-blog"], "method", false, false, false, 522);
        echo " 
\t\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 525
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => ($context["maintabs_blog"] ?? null)], "method", false, false, false, 525), 1 => "sub-header", 2 => true], "method", false, false, false, 525);
        echo " 
\t\t\t
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-social\">
\t\t\t\t\t";
        // line 530
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => "Blog Category"], "method", false, false, false, 530);
        echo " 
\t\t\t\t\t
\t\t\t\t   <div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 533
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "text", [0 => "soconfig_social_store", 1 => "blogImgSize", 2 => "Category Images Size", 3 => " ", 4 => "E.g. Images Size: 600x340"], "method", false, false, false, 533);
        echo " 
\t\t\t\t\t\t";
        // line 534
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_social_store", 1 => "blogColumn", 2 => ($context["param_blogColumn"] ?? null), 3 => "Blog Grid View"], "method", false, false, false, 534);
        echo " 
\t\t\t\t\t\t";
        // line 535
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_social_store", 1 => "blogDateTime", 2 => "Show Date Timer"], "method", false, false, false, 535);
        echo "
\t\t\t\t\t\t";
        // line 536
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_social_store", 1 => "blogAuthor", 2 => "Show Post Author"], "method", false, false, false, 536);
        echo "
\t\t\t\t\t\t";
        // line 537
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_social_store", 1 => "blogReadmore", 2 => "Show Readmore"], "method", false, false, false, 537);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-social\">
\t\t\t\t\t";
        // line 543
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => "Blog Articles"], "method", false, false, false, 543);
        echo " 
\t\t\t\t   <div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 545
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_social_store", 1 => "blogSocial", 2 => "Social Share"], "method", false, false, false, 545);
        echo "
\t\t\t\t\t\t";
        // line 546
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "blogArticle", [0 => "soconfig_social_store", 1 => "blogArticles", 2 => ($context["param_articlesStyle"] ?? null), 3 => "Blog Articles Style"], "method", false, false, false, 546);
        echo " 
\t\t\t\t\t
\t\t\t\t\t</div>\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 555
        echo "   
\t";
        // line 557
        echo "\t<div class=\"so-ultimate-fieldset so-ultimate-fieldset-social\">
\t\t";
        // line 558
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_social"], "method", false, false, false, 558), 1 => "icon-social"], "method", false, false, false, 558);
        echo " 
\t\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 561
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_social"], "method", false, false, false, 561), 1 => "sub-header", 2 => true], "method", false, false, false, 561);
        echo " 
\t\t\t
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-social\">
\t\t\t\t\t";
        // line 566
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => "Sidebar social"], "method", false, false, false, 566);
        echo " 
\t\t\t\t\t
\t\t\t\t   <div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 569
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_social_store", 1 => "social_sidebar", 2 => [0 => "Disable", 1 => "Sidebar Left", 2 => "Sidebar Right"], 3 => "Enable Social Sidebar"], "method", false, false, false, 569);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 571
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_social_store", 1 => "social_fb_status", 2 => "Show Facebook", 3 => "parent social_fb"], "method", false, false, false, 571);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 573
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "text", [0 => "soconfig_social_store", 1 => "facebook", 2 => "Facebook Username", 3 => "child social_fb social_fb_1"], "method", false, false, false, 573);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 575
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_social_store", 1 => "social_twitter_status", 2 => "Show Twitter", 3 => "parent social_tt"], "method", false, false, false, 575);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 577
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "text", [0 => "soconfig_social_store", 1 => "twitter", 2 => "Twitter username", 3 => "child social_tt social_tt_1"], "method", false, false, false, 577);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 579
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_social_store", 1 => "social_custom_status", 2 => "Show Youtube", 3 => "parent social_custom"], "method", false, false, false, 579);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 581
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "text", [0 => "soconfig_social_store", 1 => "video_code", 2 => "Video Youtube", 3 => "child social_custom social_custom_1", 4 => "E.g. https://www.youtube.com/watch?v=Wdtw_A5FDGs"], "method", false, false, false, 581);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 583
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_social_store", 1 => "social_instagram_status", 2 => "Show Instagram", 3 => "parent social_instagram"], "method", false, false, false, 583);
        echo " 
\t\t\t\t\t\t";
        // line 584
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "text", [0 => "soconfig_social_store", 1 => "instagram_user", 2 => "Instagram Users ID", 3 => "child social_instagram social_instagram_1"], "method", false, false, false, 584);
        echo " 
\t\t\t\t\t\t";
        // line 585
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "text", [0 => "soconfig_social_store", 1 => "instagram_token", 2 => "Access Token", 3 => "child social_instagram social_instagram_1"], "method", false, false, false, 585);
        echo " 
\t\t\t\t\t</div>\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 593
        echo "\t";
        // line 594
        echo "\t<div class=\"so-ultimate-fieldset so-ultimate-fieldset-custom\">
\t\t";
        // line 595
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_custom"], "method", false, false, false, 595), 1 => "icon-custom"], "method", false, false, false, 595);
        echo " 
\t\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 598
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_custom"], "method", false, false, false, 598), 1 => "sub-header", 2 => true], "method", false, false, false, 598);
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-customcode\">
\t\t\t\t";
        // line 602
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_custom"], "method", false, false, false, 602)], "method", false, false, false, 602);
        echo " 
\t\t\t\t
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 605
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_custom_store", 1 => "cssinput_status", 2 => "Location Header on page ", 3 => "parent customcss"], "method", false, false, false, 605);
        echo " 
\t\t\t\t\t\t";
        // line 606
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "textarea", [0 => "soconfig_custom_store", 1 => "cssinput_content", 2 => "Script contents", 3 => ($context["customCssDesc"] ?? null), 4 => "child customcss customcss_1"], "method", false, false, false, 606);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 608
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_custom_store", 1 => "jsinput_status", 2 => "Location Footer on page ", 3 => "parent customjs"], "method", false, false, false, 608);
        echo "
\t\t\t\t\t\t";
        // line 609
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "textarea", [0 => "soconfig_custom_store", 1 => "jsinput_content", 2 => "Script contents", 3 => "", 4 => "child customjs customjs_1"], "method", false, false, false, 609);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t";
        // line 619
        echo "\t
\t";
        // line 621
        echo "\t<div class=\"so-ultimate-fieldset so-ultimate-fieldset-advanced\">
\t\t";
        // line 622
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_advanced"], "method", false, false, false, 622), 1 => "icon-wrench", 2 => ""], "method", false, false, false, 622);
        echo " 
\t\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 625
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_advanced"], "method", false, false, false, 625), 1 => "sub-header", 2 => true], "method", false, false, false, 625);
        echo " 
\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-advanced\">
\t\t\t\t\t";
        // line 629
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => "SCSS Compile"], "method", false, false, false, 629);
        echo " 
\t\t\t\t\t
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 632
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_advanced_store", 1 => "scsscompile", 2 => "SCSS Compile"], "method", false, false, false, 632);
        echo " 
\t\t\t\t\t\t";
        // line 633
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "select", [0 => "soconfig_advanced_store", 1 => "scssformat", 2 => ($context["param_scssFormat"] ?? null), 3 => "CSS Format"], "method", false, false, false, 633);
        echo " 
\t\t\t\t\t\t";
        // line 634
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_advanced_store", 1 => "compileMutiColor", 2 => "Developer Compile Muti Color"], "method", false, false, false, 634);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-performance\">
\t\t\t\t\t";
        // line 639
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => "Performance"], "method", false, false, false, 639);
        echo " 
\t\t\t\t\t
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 643
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_advanced_store", 1 => "cssminify", 2 => "Show CSS Minify", 3 => "parent cssminify"], "method", false, false, false, 643);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"control-group control-group-advanced \">
\t\t\t\t\t\t\t<!-- cssminify -->
\t\t\t\t\t\t\t<div id=\"tab-field-cssminify\" class=\"control-group-inner child cssminify cssminify_1\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group2\">
\t\t\t\t\t\t\t\t\t<a onclick=\"add_cssExclude();\" class=\"btn btn-default btn-sm\"> <i class=\"fa fa-file-o\" ></i> Add file css</a>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<table class=\"table table-hover\" id=\"listgroup-cssminify\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"first\">Exclude file css</td>
\t\t\t\t\t\t\t\t\t\t\t<td >Delete</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody >
\t\t\t\t\t\t\t\t\t";
        // line 660
        $context["listcss_row"] = 0;
        // line 661
        echo "\t\t\t\t\t\t\t\t\t";
        if ((($context["cssExcludes"] ?? null) && (($context["cssExcludes"] ?? null) != ""))) {
            // line 662
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 663
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cssExcludes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cssExclude"]) {
                // line 664
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["cssExclude"], "namecss", [], "any", false, false, false, 664))) {
                    // line 665
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"listcssExclude";
                    // line 666
                    echo ($context["listcss_row"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" class=\"form-control\" value=\"";
                    // line 668
                    echo twig_get_attribute($this->env, $this->source, $context["cssExclude"], "namecss", [], "any", false, false, false, 668);
                    echo "\" name=\"soconfig_advanced_store[cssExclude][";
                    echo ($context["listcss_row"] ?? null);
                    echo "][namecss]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#listcssExclude";
                    // line 671
                    echo ($context["listcss_row"] ?? null);
                    echo "').remove();\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-close\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 675
                    $context["listcss_row"] = (($context["listcss_row"] ?? null) + 1);
                    // line 676
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 677
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssExclude'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 679
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot></tfoot>
\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\tvar listcss_row = ";
        // line 685
        echo ($context["listcss_row"] ?? null);
        echo " ;
\t\t\t\t\t\t\t\tvar languages = ";
        // line 686
        echo json_encode(($context["languages"] ?? null));
        echo " ;
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tfunction add_cssExclude() {

\t\t\t\t\t\t\t\t\thtml  = '<tbody id=\"listcssExclude' + listcss_row + '\">';
\t\t\t\t\t\t\t\t\thtml += '  <tr>';
\t\t\t\t\t\t\t\t\thtml += '    <td>';
\t\t\t\t\t\t\t\t\thtml += '\t\t<input class=\"form-control\" type=\"text\" value=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" name=\"soconfig_advanced_store[cssExclude][' + listcss_row + '][namecss]\">';
\t\t\t\t\t\t\t\t\thtml += '    </td>';
\t\t\t\t\t\t\t\t\thtml += '    <td><a onclick=\"\$(\\'#listcssExclude' + listcss_row + '\\').remove();\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-close\"></i></a></td>';
\t\t\t\t\t\t\t\t\thtml += '  </tr>';
\t\t\t\t\t\t\t\t\thtml += '</tbody>';
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$('#listgroup-cssminify tfoot').before(html);
\t\t\t\t\t\t\t\t\tlistcss_row++;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t</script> 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--  END cssminify -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 710
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "onOff", [0 => "soconfig_advanced_store", 1 => "jsminify", 2 => "Show JS Minify", 3 => "parent jsminify"], "method", false, false, false, 710);
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"control-group control-group-advanced\">
\t\t\t\t\t\t\t<!-- jsminify -->
\t\t\t\t\t\t\t<div id=\"tab-field-jsminify\" class=\"form-group child jsminify jsminify_1\">
\t\t\t\t\t\t\t\t<div class=\"form-group2\">
\t\t\t\t\t\t\t\t\t<a onclick=\"add_jsExclude();\" class=\"add-item-payment btn btn-default btn-sm\"> <i class=\"fa fa-file-o\" ></i> Add file JS</a>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<table class=\"table table-hover\" id=\"listgroup-jsminify\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"first\" >Exclude file Javascript</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Delete</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody >
\t\t\t\t\t\t\t\t\t";
        // line 726
        $context["listjs_row"] = 0;
        // line 727
        echo "\t\t\t\t\t\t\t\t\t";
        if ((($context["jsExcludes"] ?? null) && (($context["jsExcludes"] ?? null) != ""))) {
            // line 728
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 729
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["jsExcludes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["jsExclude"]) {
                // line 730
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["jsExclude"], "namecss", [], "any", false, false, false, 730))) {
                    // line 731
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"listjsExclude";
                    // line 732
                    echo ($context["listjs_row"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" class=\"form-control\" value=\"";
                    // line 734
                    echo twig_get_attribute($this->env, $this->source, $context["jsExclude"], "namecss", [], "any", false, false, false, 734);
                    echo "\" name=\"soconfig_advanced_store[jsExclude][";
                    echo ($context["listjs_row"] ?? null);
                    echo "][namecss]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#listjsExclude";
                    // line 738
                    echo ($context["listjs_row"] ?? null);
                    echo "').remove();\" class=\"btn btn-danger  btn-sm\"><i class=\"fa fa-close\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 742
                    $context["listjs_row"] = (($context["listjs_row"] ?? null) + 1);
                    // line 743
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 744
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jsExclude'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 746
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot></tfoot>
\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\tvar listjs_row = ";
        // line 752
        echo ($context["listjs_row"] ?? null);
        echo " ;
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tfunction add_jsExclude() {

\t\t\t\t\t\t\t\t\thtml  = '<tbody id=\"listjsExclude' + listjs_row + '\">';
\t\t\t\t\t\t\t\t\thtml += '  <tr>';
\t\t\t\t\t\t\t\t\thtml += '    <td>';
\t\t\t\t\t\t\t\t\thtml += '\t\t<input class=\"form-control\" type=\"text\" value=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" name=\"soconfig_advanced_store[jsExclude][' + listjs_row + '][namecss]\">';
\t\t\t\t\t\t\t\t\thtml += '    </td>';
\t\t\t\t\t\t\t\t\thtml += '    <td><a onclick=\"\$(\\'#listjsExclude' + listjs_row + '\\').remove();\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-close\"></i></a></td>';
\t\t\t\t\t\t\t\t\thtml += '  </tr>';
\t\t\t\t\t\t\t\t\thtml += '</tbody>';
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$('#listgroup-jsminify tfoot').before(html);
\t\t\t\t\t\t\t\t\tlistjs_row++;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t</script> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--  END jsminify -->
\t\t\t\t\t\t\t<div class=\"control-group-inner\" >
\t\t\t\t\t\t\t\t<a href=\"";
        // line 772
        echo ($context["clear_cache"] ?? null);
        echo "\"><button class=\"btn btn-warning btn-sm\" type=\"button\"><i class=\"fa fa-eraser\"></i> Clear Minify</button></a>
\t\t\t\t\t\t\t\t<p class=\"control-help\">Delete all of the theme css, js file path: catalog/view/theme/so-emarket/css/minify</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 786
        echo "\t
\t";
        // line 788
        echo "\t<div class=\"so-ultimate-fieldset so-ultimate-fieldset-custom\">
\t\t";
        // line 789
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_support"], "method", false, false, false, 789), 1 => "next-account"], "method", false, false, false, 789);
        echo " 
\t\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 792
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "fieldsetHeader", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_support"], "method", false, false, false, 792), 1 => "sub-header", 2 => true], "method", false, false, false, 792);
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-customcode\">
\t\t\t\t";
        // line 796
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "groupHeaderBox", [0 => twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_support"], "method", false, false, false, 796)], "method", false, false, false, 796);
        echo " 
\t\t\t\t
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t<div class=\"control-group control-group-advanced\">
\t\t\t\t\t\t\t<div class=\"control-group-inner \">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t<svg class=\"next-icon\" style=\"    margin: 20px auto 10px;display: block;width: 30px;height: 30px;\"><use xlink:href=\"#icon-blog\"></use></svg>
\t\t\t\t\t\t\t\t<div class=\"caption\" style=\"text-align:center;padding-top:0px;\"><h3>Tickets</h3><p>Want to communicate one-to-one with our tech people? Then open a support ticket.</p><p style=\"padding-top: 5px;\"><a href=\"http://support.opencartworks.com/\" target=\"_blank\" class=\"btn btn-md btn-default\">Open a Ticket</a></p></div></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"control-group control-group-advanced\">
\t\t\t\t\t\t\t<div class=\"control-group-inner \">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t<svg class=\"next-icon\" style=\"    margin: 20px auto 10px;display: block;width: 30px;height: 30px;\"><use xlink:href=\"#next-account\"></use></svg>
\t\t\t\t\t\t\t\t<div class=\"caption\" style=\"text-align:center;padding-top:0px;\"><h3>Pre-Sale</h3><p>Have a brilliant idea for your OpenCart? Our team of developers can make it real.</p><p style=\"padding-top: 5px;\"><a href=\"http://support.opencartworks.com/\" target=\"_blank\" class=\"btn btn-md btn-default\">Drive More Sales</a></p></div></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"control-group control-group-advanced\">
\t\t\t\t\t\t\t<div class=\"control-group-inner \">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t<svg class=\"next-icon\" style=\"    margin: 20px auto 10px;display: block;width: 30px;height: 30px;\"><use xlink:href=\"#icon-colors\"></use></svg>
\t\t\t\t\t\t\t\t<div class=\"caption\" style=\"text-align:center;padding-top:0px;\"><h3>Document</h3><p>This documentation  describes the installation, configuration and setting</p><p style=\"padding-top: 5px;\"><a href=\"https://smartaddons.s3.amazonaws.com/userguides/so-document/index.html\" target=\"_blank\" class=\"btn btn-md btn-default\">Read more</a></p></div></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "extension/soconfig/options_stores.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1433 => 796,  1426 => 792,  1420 => 789,  1417 => 788,  1414 => 786,  1398 => 772,  1375 => 752,  1367 => 746,  1358 => 744,  1355 => 743,  1353 => 742,  1346 => 738,  1337 => 734,  1332 => 732,  1329 => 731,  1326 => 730,  1322 => 729,  1319 => 728,  1316 => 727,  1314 => 726,  1295 => 710,  1268 => 686,  1264 => 685,  1256 => 679,  1247 => 677,  1244 => 676,  1242 => 675,  1235 => 671,  1227 => 668,  1222 => 666,  1219 => 665,  1216 => 664,  1212 => 663,  1209 => 662,  1206 => 661,  1204 => 660,  1184 => 643,  1177 => 639,  1169 => 634,  1165 => 633,  1161 => 632,  1155 => 629,  1148 => 625,  1142 => 622,  1139 => 621,  1136 => 619,  1124 => 609,  1120 => 608,  1115 => 606,  1111 => 605,  1105 => 602,  1098 => 598,  1092 => 595,  1089 => 594,  1087 => 593,  1077 => 585,  1073 => 584,  1069 => 583,  1064 => 581,  1059 => 579,  1054 => 577,  1049 => 575,  1044 => 573,  1039 => 571,  1034 => 569,  1028 => 566,  1020 => 561,  1014 => 558,  1011 => 557,  1008 => 555,  997 => 546,  993 => 545,  988 => 543,  979 => 537,  975 => 536,  971 => 535,  967 => 534,  963 => 533,  957 => 530,  949 => 525,  943 => 522,  940 => 521,  937 => 519,  926 => 510,  922 => 509,  917 => 507,  913 => 506,  908 => 504,  904 => 503,  899 => 501,  895 => 500,  890 => 498,  886 => 497,  881 => 495,  876 => 493,  872 => 492,  868 => 491,  863 => 489,  849 => 478,  843 => 475,  836 => 471,  830 => 468,  824 => 465,  818 => 462,  812 => 459,  806 => 456,  789 => 442,  785 => 441,  781 => 440,  777 => 439,  773 => 438,  768 => 436,  760 => 431,  756 => 430,  752 => 429,  748 => 428,  743 => 426,  734 => 420,  730 => 419,  726 => 418,  722 => 417,  717 => 415,  710 => 411,  704 => 408,  701 => 407,  697 => 404,  680 => 389,  672 => 384,  668 => 383,  664 => 382,  659 => 380,  651 => 375,  647 => 374,  642 => 372,  638 => 371,  633 => 369,  629 => 368,  624 => 366,  616 => 361,  612 => 360,  607 => 358,  597 => 351,  593 => 350,  588 => 348,  584 => 347,  579 => 345,  575 => 344,  570 => 342,  566 => 341,  561 => 339,  553 => 334,  549 => 333,  544 => 331,  537 => 327,  531 => 324,  528 => 323,  524 => 320,  512 => 310,  508 => 309,  504 => 308,  500 => 307,  496 => 306,  490 => 303,  482 => 298,  478 => 297,  473 => 295,  469 => 294,  463 => 291,  454 => 285,  450 => 284,  445 => 282,  438 => 278,  432 => 275,  429 => 274,  426 => 272,  414 => 262,  409 => 260,  405 => 259,  401 => 258,  397 => 257,  392 => 255,  382 => 248,  378 => 247,  373 => 245,  369 => 244,  364 => 242,  360 => 241,  355 => 239,  351 => 238,  347 => 237,  343 => 236,  338 => 234,  331 => 230,  325 => 227,  322 => 226,  319 => 224,  306 => 213,  302 => 212,  298 => 211,  294 => 210,  288 => 207,  278 => 200,  274 => 199,  270 => 198,  266 => 197,  259 => 193,  250 => 187,  246 => 186,  242 => 185,  238 => 184,  233 => 182,  226 => 177,  220 => 175,  214 => 173,  212 => 172,  201 => 168,  194 => 164,  190 => 163,  186 => 162,  181 => 160,  177 => 159,  171 => 158,  166 => 156,  163 => 155,  157 => 151,  151 => 148,  148 => 147,  145 => 145,  142 => 143,  140 => 142,  138 => 141,  136 => 140,  134 => 139,  132 => 138,  130 => 137,  128 => 136,  126 => 135,  123 => 134,  121 => 126,  118 => 125,  116 => 118,  113 => 117,  111 => 110,  108 => 109,  106 => 101,  103 => 100,  101 => 86,  97 => 84,  95 => 76,  92 => 75,  90 => 70,  87 => 69,  85 => 65,  80 => 62,  78 => 55,  73 => 52,  71 => 48,  68 => 47,  66 => 43,  63 => 42,  61 => 37,  58 => 36,  56 => 29,  52 => 27,  50 => 21,  47 => 20,  45 => 15,  42 => 14,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/soconfig/options_stores.twig", "C:\\OSPanel\\domains\\gamer2\\admin\\view\\template\\extension\\soconfig\\options_stores.twig");
    }
}
