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

/* so-sgame/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig */
class __TwigTemplate_f80132dd413557eef519916a446500885d422ad1f2b843848c69964884a94a54 extends \Twig\Template
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
        $context["width_popup"] = ((($context["width"] ?? null)) ? (($context["width"] ?? null)) : ("50%"));
        // line 2
        if (($context["image_bg_display"] ?? null)) {
            // line 3
            echo "    ";
            $context["bg"] = (("background-image: url(image/" . ($context["image"] ?? null)) . ")");
        } else {
            // line 4
            echo " 
   ";
            // line 5
            $context["bg"] = (("background-color: #" . ($context["color_bg"] ?? null)) . "");
        }
        // line 7
        echo "

<div id=\"container-module-newletter\" class=\"hidden-md hidden-sm hidden-xs\">
\t<div class=\"so_newletter_custom_popup_bg\"></div>
\t<div class=\"custom-pop ";
        // line 11
        echo ($context["class_suffix"] ?? null);
        echo " so_newletter_custom_popup so_newletter_oca_popup\" id=\"so_newletter_custom_popup\">
\t    <div class=\"so-custom-popup so-custom-oca-popup\" style=\"width: ";
        // line 12
        echo ($context["width_popup"] ?? null);
        echo " ; ";
        echo ($context["bg"] ?? null);
        echo " ;  \">
\t\t\t
\t\t\t";
        // line 14
        if (($context["disp_title_module"] ?? null)) {
            echo " 
\t\t\t<div class=\"head-popup\">
\t\t\t\t<h3>";
            // line 16
            echo ($context["head_name"] ?? null);
            echo " </h3>
\t\t\t</div>
\t\t\t";
        }
        // line 18
        echo " 

\t\t\t
\t\t\t<div class=\"modcontent\">
\t\t\t\t<div class=\"oca_popup\" id=\"test-popup\">
\t\t\t\t\t<div class=\"popup-content\">
\t\t\t\t\t\t";
        // line 24
        if (($context["title_display"] ?? null)) {
            // line 25
            echo "\t\t\t\t\t\t<div class=\"popup-title\">
\t\t\t\t\t\t\t";
            // line 26
            echo ($context["title"] ?? null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t<p class=\"newsletter_promo font-ct\">";
        echo ($context["newsletter_promo"] ?? null);
        echo "</p>
\t\t\t\t\t\t
\t\t\t\t\t\t<form method=\"post\"  name=\"signup\" class=\"form-group signup send-mail-popup\">
\t\t\t\t\t\t\t<div class=\"input-control\">
\t\t\t\t\t\t\t\t<div class=\"email\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"";
        // line 34
        echo ($context["newsletter_placeholder"] ?? null);
        echo "\" value=\"\" class=\"form-control\" id=\"";
        echo ($context["txtemail_id"] ?? null);
        echo "\" name=\"txtemail\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-default\" type=\"submit\" onclick=\"return subscribe_newsletter_popup();\" name=\"submit\">
\t\t\t\t\t\t\t\t\t";
        // line 37
        echo ($context["newsletter_button"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<label class=\"hidden-popup\">
\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"1\" name=\"hidden-popup\">
\t\t\t\t\t\t\t<span class=\"inline\">&nbsp;&nbsp;";
        // line 44
        echo ($context["input_check"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 46
        if ((($context["pre_text"] ?? null) != "")) {
            // line 47
            echo "\t\t\t\t\t\t\t<div class=\"pre_text\">
\t\t\t\t\t\t\t\t";
            // line 48
            echo ($context["pre_text"] ?? null);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div> <!--/.modcontent-->
\t        <button title=\"Close\" type=\"button\" class=\"popup-close\"><i class=\"pe-7s-close\"></i></button>
\t\t\t";
        // line 57
        if ((($context["post_text"] ?? null) != "")) {
            // line 58
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 59
            echo ($context["post_text"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 62
        echo "\t\t\t
\t    </div>
\t</div>

<script type=\"text/javascript\">
    (function(\$) {
        \$(window).load(function () {
            \$('.common-home').addClass('hidden-scorll');
            \$('.so_newletter_custom_popup_bg').addClass('popup_bg');
            \$('input[name=\\'hidden-popup\\']').on('change', function(){
                if (\$(this).is(':checked')) {
                    checkCookie();
                } else {
                    unsetCookie(\"so_newletter_custom_popup\");
                }
            });
            function unsetCookie( name ) {
                document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            }
            \$('.popup-close').click(function(){
                var this_close = \$('.popup-close');
                this_close.parents().find('.common-home').removeClass('hidden-scorll');
                this_close.parents().find('#container-module-newletter').remove();
            });
        });
    })(jQuery);
\tfunction setCookie(cname, cvalue, exdays) {
\t\tvar d = new Date();
\t\td.setTime(d.getTime() + (exdays*24*60*60*1000));
\t\tvar expires = \"expires=\"+d.toUTCString();
\t\tdocument.cookie = cname + \"=\" + cvalue + \"; \" + expires;
\t}
\tfunction getCookie(cname) {
\t\tvar name = cname + \"=\";
\t\tvar ca = document.cookie.split(';');
\t\tfor(var i=0; i<ca.length; i++) {
\t\t\tvar c = ca[i];
\t\t\twhile (c.charAt(0)==' ') c = c.substring(1);
\t\t\tif (c.indexOf(name) == 0) return c.substring(name.length, c.length);
\t\t}
\t\treturn \"\";
\t}
\tfunction checkCookie() {
\t\tvar check_cookie = getCookie(\"so_newletter_custom_popup\");
\t\tif(check_cookie == \"\"){
\t\t\tsetCookie(\"so_newletter_custom_popup\", \"Newletter Popup\", ";
        // line 107
        echo ($context["expired"] ?? null);
        echo ");
\t\t}
\t}
    function subscribe_newsletter_popup()
    {
\t\t//alert(email);
        var emailpattern = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/;
        var email = \$(\"#";
        // line 114
        echo ($context["txtemail_id"] ?? null);
        echo "\").val();
\t\t
        var d = new Date();
        var createdate = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
        var status   = 0;
        var dataString = 'email='+email+'&createdate='+createdate+'&status='+status;
\t\t
        if(email != \"\")
        {

            if(!emailpattern.test(email))
            {
                \$('.alert').remove();
                \$('.send-mail-popup').after('<div class=\"alert alert-danger show-error\" role=\"alert\"><i class=\"fa fa-exclamation-circle\"></i>  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> Invalid Email </div>')
                return false;
            }
            else
            {
\t\t\t\t
                \$.ajax({
                    url: 'index.php?route=extension/module/so_newletter_custom_popup/newsletter',
                    type: 'post',
                    data: dataString,
                    dataType: 'json',

                    success: function(json) {
                        \$('.alert').remove();
                        if(json.error == false) {
\t\t\t\t\t\t\tcheckCookie();
                            \$('.send-mail-popup').after('<div class=\"alert alert-success show-error\" role=\"alert\"> <i class=\"fa fa-check-circle\"></i> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> ' + json.message + '</div>');
                            setTimeout(function () {
                                var this_close = \$('.popup-close');
                                this_close.parent().css('display', 'none');
                                this_close.parents().find('.common-home').removeClass('hidden-scorll');
                                this_close.parents().find('#container-module-newletter').remove();

                            }, 3000);

                        }else{
                             \$('.send-mail-popup').after('<div class=\"alert alert-danger\" role=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> ' + json.message + '</div>');
                        }
                        var x = document.getElementsByClassName('signup');
                        for (i = 0; i < x.length; i++) {
                            x[i].reset();
                        }
                    }
                });
                return false;
            }
        }
        else
        {
            alert(\"";
        // line 166
        echo ($context["text_email_required"] ?? null);
        echo "\");
            \$(email).focus();
            return false;
        }
    }
</script>


</div>";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 166,  217 => 114,  207 => 107,  160 => 62,  154 => 59,  151 => 58,  149 => 57,  141 => 51,  135 => 48,  132 => 47,  130 => 46,  125 => 44,  115 => 37,  107 => 34,  98 => 29,  92 => 26,  89 => 25,  87 => 24,  79 => 18,  73 => 16,  68 => 14,  61 => 12,  57 => 11,  51 => 7,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_newletter_custom_popup\\default_layout_popup.twig");
    }
}
