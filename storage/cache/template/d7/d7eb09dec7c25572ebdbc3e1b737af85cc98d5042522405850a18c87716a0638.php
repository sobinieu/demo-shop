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

/* so-sgame/template/common/footer.twig */
class __TwigTemplate_ca0d9399f0a0d6ef3f6d01fc8c5457d36712cbdb8e3fe0a94e0611fe14c86905 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typefooter"], "method", false, false, false, 3)) {
            // line 4
            echo "\t";
            $this->loadTemplate((((($context["theme_directory"] ?? null) . "/template/footer/footer") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typefooter"], "method", false, false, false, 4)) . ".twig"), "so-sgame/template/common/footer.twig", 4)->display(twig_array_merge($context, ["typefooter" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typefooter"], "method", false, false, false, 4)]));
        }
        // line 6
        echo "
";
        // line 7
        $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/soconfig/icon-defs.twig"), "so-sgame/template/common/footer.twig", 7)->display($context);
        // line 8
        echo "
";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "jsinput_status"], "method", false, false, false, 9) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "jsinput_content"], "method", false, false, false, 9)))) {
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "jsinput_content"], "method", false, false, false, 9);
            echo " ";
        }
        echo " 

<div id=\"previewModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t<h4 class=\"modal-title\"> ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_alertaddtocart"], "method", false, false, false, 16);
        echo "</h4>
\t\t</div>
\t\t<div class=\"modal-body\"></div>
    </div>
  </div>
</div>\t
";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "backtop"], "method", false, false, false, 23)) {
            // line 24
            echo "<div class=\"back-to-top\"><i class=\"fa fa-angle-up\"></i></div>
";
        }
        // line 26
        echo "

";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "social_sidebar"], "method", false, false, false, 28)) {
            // line 29
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "social_sidebar"], "method", false, false, false, 29) == 1)) {
                // line 30
                echo "\t\t";
                $context["social_sidebar"] = "socialwidgets-left";
                // line 31
                echo "\t";
            } else {
                // line 32
                echo "\t\t";
                $context["social_sidebar"] = "socialwidgets-right";
                // line 33
                echo "\t";
            }
            // line 34
            echo "\t<section class=\"social-widgets visible-lg ";
            echo ($context["social_sidebar"] ?? null);
            echo " \">
\t\t<ul class=\"items\">
\t\t\t";
            // line 36
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "social_fb_status"], "method", false, false, false, 36)) {
                echo " 
\t\t\t<li class=\"item item-01 facebook\">
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 38
                echo ($context["theme_directory"] ?? null);
                echo "/template/social/facebook.php?account_fb=";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "facebook"], "method", false, false, false, 38);
                echo " \" class=\"tab-icon\"><span class=\"fa fa-facebook\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>FACEBOOK</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"catalog/view/theme/";
                // line 42
                echo ($context["theme_directory"] ?? null);
                echo "/images/ajax-loader.gif\" class=\"ajaxloader\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 46
            echo " 

\t\t\t";
            // line 48
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "social_twitter_status"], "method", false, false, false, 48)) {
                echo " 
\t\t\t<li class=\"item  twitter\">
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 50
                echo ($context["theme_directory"] ?? null);
                echo "/template/social/twitter.php?account_twitter=";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "twitter"], "method", false, false, false, 50);
                echo " \" class=\"tab-icon\"><span class=\"fa fa-twitter\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>TWITTER FEEDS</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"catalog/view/theme/";
                // line 54
                echo ($context["theme_directory"] ?? null);
                echo "/images/ajax-loader.gif\" class=\"ajaxloader\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 58
            echo " 

\t\t\t";
            // line 60
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "social_custom_status"], "method", false, false, false, 60)) {
                echo " 
\t\t\t<li class=\"item  youtube\">
\t\t\t\t<div class=\"tab-icon\"><span class=\"fa fa-youtube\"></span></div>
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 63
                echo ($context["theme_directory"] ?? null);
                echo "/template/social/youtubevideo.php?account_video=";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "video_code"], "method", false, false, false, 63);
                echo "\" class=\"tab-icon\"><span class=\"fa fa-youtube\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>Youtube</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"catalog/view/theme/";
                // line 67
                echo ($context["theme_directory"] ?? null);
                echo "/images/ajax-loader.gif\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 71
            echo " 
\t\t\t
\t\t\t";
            // line 73
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "social_instagram_status"], "method", false, false, false, 73)) {
                echo " 
\t\t\t<li class=\"item  instagram\">
\t\t\t\t<div class=\"tab-icon\"><span class=\"fa fa-instagram\"></span></div>
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 76
                echo ($context["theme_directory"] ?? null);
                echo "/template/social/instagram.php?instagram_user=";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "instagram_user"], "method", false, false, false, 76);
                echo "&instagram_token=";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "instagram_token"], "method", false, false, false, 76);
                echo "\" class=\"tab-icon\"><span class=\"fa fa-instagram\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>Instagram</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"catalog/view/theme/";
                // line 80
                echo ($context["theme_directory"] ?? null);
                echo "/images/ajax-loader.gif\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 84
            echo " 
\t\t</ul>
\t</section>
\t
";
        }
        // line 88
        echo " 

</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 88,  213 => 84,  205 => 80,  194 => 76,  188 => 73,  184 => 71,  176 => 67,  167 => 63,  161 => 60,  157 => 58,  149 => 54,  140 => 50,  135 => 48,  131 => 46,  123 => 42,  114 => 38,  109 => 36,  103 => 34,  100 => 33,  97 => 32,  94 => 31,  91 => 30,  88 => 29,  86 => 28,  82 => 26,  78 => 24,  76 => 23,  67 => 16,  54 => 9,  51 => 8,  49 => 7,  46 => 6,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/common/footer.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\common\\footer.twig");
    }
}
