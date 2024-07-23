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

/* so-sgame/template/extension/module/so_newletter_custom_popup/default_layout_default.twig */
class __TwigTemplate_f14cf96cb2d98673e7df68c4e622acdcc3c974a32d035f9f75b75cea7b5c877f extends \Twig\Template
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
        echo "
";
        // line 3
        if (($context["image_bg_display"] ?? null)) {
            // line 4
            echo "    ";
            $context["bg"] = (("background: url(image/" . ($context["image"] ?? null)) . ")");
        } elseif (        // line 5
($context["color_bg"] ?? null)) {
            echo " 
   ";
            // line 6
            $context["bg"] = (("background-color: #" . ($context["color_bg"] ?? null)) . "");
        }
        // line 8
        echo "

<div class=\"module ";
        // line 10
        echo ($context["class_suffix"] ?? null);
        echo "\">
    <div class=\"newsletter\" style=\"width:";
        // line 11
        echo ($context["width_popup"] ?? null);
        echo "; ";
        echo ($context["bg"] ?? null);
        echo " ; \">
        ";
        // line 12
        if (($context["disp_title_module"] ?? null)) {
            echo " 
            <h3 class=\"modtitle\">";
            // line 13
            echo ($context["head_name"] ?? null);
            echo " </h3>
        ";
        }
        // line 14
        echo " 
        ";
        // line 15
        if (($context["title_display"] ?? null)) {
            // line 16
            echo "        <div class=\"title-block\">
            ";
            // line 17
            if (($context["title_display"] ?? null)) {
                // line 18
                echo "                <div class=\"page-heading font-title\">
                    ";
                // line 19
                echo ($context["title"] ?? null);
                echo "
                </div>
                <div class=\"promotext\">";
                // line 21
                echo ($context["newsletter_promo"] ?? null);
                echo "</div>
            ";
            }
            // line 23
            echo "            ";
            if ((($context["pre_text"] ?? null) != "")) {
                // line 24
                echo "                <div class=\"form-group\">
                    ";
                // line 25
                echo ($context["pre_text"] ?? null);
                echo "
                </div>
            ";
            }
            // line 27
            echo "        
        </div>
        ";
        }
        // line 29
        echo "   
        <div class=\"block_content\">
            <form method=\"post\" id=\"signup\" name=\"signup\" class=\"form-group form-inline signup send-mail\">
                <div class=\"form-group\">
                    <div class=\"input-box\">
                        <input type=\"email\" placeholder=\"";
        // line 34
        echo ($context["newsletter_placeholder"] ?? null);
        echo "\" value=\"\" class=\"form-control\" id=\"txtemail\" name=\"txtemail\" size=\"55\">
                    </div>
                    <div class=\"subcribe\">
                        <button class=\"btn btn-primary btn-default font-title\" type=\"submit\" onclick=\"return subscribe_newsletter();\" name=\"submit\">
                            <span>";
        // line 38
        echo ($context["newsletter_button"] ?? null);
        echo "</span>
                        </button>
                    </div>
                </div>
            </form>
            

        </div> <!--/.modcontent-->
        ";
        // line 46
        if ((($context["post_text"] ?? null) != "")) {
            // line 47
            echo "            <div class=\"form-group\">
                ";
            // line 48
            echo ($context["post_text"] ?? null);
            echo "
            </div>
        ";
        }
        // line 51
        echo "        
    </div>



<script type=\"text/javascript\">
    function subscribe_newsletter()
    {
        var emailpattern = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/;
        var email = \$('#txtemail').val();
        var d = new Date();
        var createdate = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
        var status   = 0;
        var dataString = 'email='+email+'&createdate='+createdate+'&status='+status;

        if(email != \"\"){

            if(!emailpattern.test(email))
            {

                \$('.alert').remove();
                \$('.send-mail').after('<div class=\"alert alert-danger \" role=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> Invalid Email </div>')
                return false;
            }
            else
            {
                \$.ajax({
                    url: 'index.php?route=extension/module/so_newletter_custom_popup/newsletter',
                    type: 'post',
                    data: dataString,
                    dataType: 'json',
                    success: function(json) {
                        \$('.alert').remove();
                        if(json.error == false) {
                            \$('.send-mail').after('<div class=\"alert alert-success\" role=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> ' + json.message + '</div>');
                            setTimeout(function () {
                                var this_close = \$('.popup-close');
                                this_close.parent().css('display', 'none');
                                this_close.parents().find('.so_newletter_custom_popup_bg').removeClass('popup_bg');
                            }, 3000);

                        }else{
                            \$('.send-mail').after('<div class=\"alert alert-danger\" role=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> ' + json.message + '</div>');
                        }
                        var x = document.getElementsByClassName('signup');
                            for (i = 0; i < x.length; i++) {
                            x[i].reset();
                        }
                    }
                });
                return false;
            }
        } else{
            alert(\"";
        // line 104
        echo ($context["text_email_required"] ?? null);
        echo "\");
            \$(email).focus();
            return false;
        }
    }
</script>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_newletter_custom_popup/default_layout_default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 104,  153 => 51,  147 => 48,  144 => 47,  142 => 46,  131 => 38,  124 => 34,  117 => 29,  112 => 27,  106 => 25,  103 => 24,  100 => 23,  95 => 21,  90 => 19,  87 => 18,  85 => 17,  82 => 16,  80 => 15,  77 => 14,  72 => 13,  68 => 12,  62 => 11,  58 => 10,  54 => 8,  51 => 6,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_newletter_custom_popup/default_layout_default.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_newletter_custom_popup\\default_layout_default.twig");
    }
}
