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

/* so-sgame/template/extension/module/so_deals/default.twig */
class __TwigTemplate_cb0cb841f8776265ad3ffbb604e27282821d9aadc8b4b7026b5aded03e190371 extends \Twig\Template
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
        echo "<script>
//<![CDATA[
\tvar listdeal";
        // line 3
        echo ($context["module"] ?? null);
        echo " = [];
//]]>
</script>
<div class=\"module ";
        // line 6
        echo ($context["direction_class"] ?? null);
        echo " ";
        echo ($context["class_suffix"] ?? null);
        echo "\">
\t<h3 class=\"modtitle\">
\t\t";
        // line 8
        if (($context["disp_title_module"] ?? null)) {
            // line 9
            echo "\t\t\t";
            if ((($context["custom_url"] ?? null) != "")) {
                // line 10
                echo "\t\t\t\t<a href=\"";
                echo ($context["custom_url"] ?? null);
                echo "\"><span>";
                echo ($context["head_name"] ?? null);
                echo "</span></a>
\t\t\t";
            } else {
                // line 12
                echo "\t\t\t\t<span>";
                echo ($context["head_name"] ?? null);
                echo "</span>
\t\t\t";
            }
            // line 14
            echo "\t\t";
        }
        // line 15
        echo "
\t\t";
        // line 16
        if ((($context["pre_text"] ?? null) != "")) {
            echo "\t\t\t\t
\t\t\t";
            // line 17
            echo ($context["pre_text"] ?? null);
            echo "\t\t\t\t
\t\t";
        }
        // line 18
        echo "\t\t
\t</h3>

\t
\t<div class=\"modcontent\">
\t\t";
        // line 23
        if ((array_key_exists("list", $context) && ($context["list"] ?? null))) {
            // line 24
            echo "\t\t    ";
            $context["tag_id"] = (("so_deals_" . twig_random($this->env)) . twig_date_format_filter($this->env, "now", "mdYHis"));
            // line 25
            echo "\t\t    ";
            $context["class_respl"] = ((((((((("preset00-" . ($context["nb_column0"] ?? null)) . " preset01-") . ($context["nb_column1"] ?? null)) . " preset02-") . ($context["nb_column2"] ?? null)) . " preset03-") . ($context["nb_column3"] ?? null)) . " preset04-") . ($context["nb_column4"] ?? null));
            // line 26
            echo "\t\t    ";
            $context["i"] = 0;
            // line 27
            echo "\t\t    ";
            $context["count_item"] = twig_length_filter($this->env, ($context["list"] ?? null));
            // line 28
            echo "\t\t    ";
            if ((($context["include_js"] ?? null) == "owlCarousel")) {
                // line 29
                echo "\t\t    \t";
                $this->loadTemplate((((($context["config_theme"] ?? null) . "/template/extension/module/so_deals/") . ($context["store_layout"] ?? null)) . "_carousel.twig"), "so-sgame/template/extension/module/so_deals/default.twig", 29)->display($context);
                // line 30
                echo "\t\t    ";
            } elseif ((($context["include_js"] ?? null) == "slick")) {
                // line 31
                echo "\t\t    \t";
                echo twig_include($this->env, $context, (((($context["config_theme"] ?? null) . "/template/extension/module/so_deals/") . ($context["store_layout"] ?? null)) . "_slick.twig"));
                echo "
\t\t    ";
            } else {
                // line 33
                echo "\t\t    \t";
                echo "";
                echo "
\t\t    ";
            }
            // line 35
            echo "\t\t";
        } else {
            // line 36
            echo "\t    \t";
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_noitem"], "method", false, false, false, 36);
            echo "
\t    ";
        }
        // line 38
        echo "\t</div>
\t
\t";
        // line 40
        if ((($context["post_text"] ?? null) != "")) {
            // line 41
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 42
            echo ($context["post_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 45
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_deals/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 45,  148 => 42,  145 => 41,  143 => 40,  139 => 38,  133 => 36,  130 => 35,  124 => 33,  118 => 31,  115 => 30,  112 => 29,  109 => 28,  106 => 27,  103 => 26,  100 => 25,  97 => 24,  95 => 23,  88 => 18,  83 => 17,  79 => 16,  76 => 15,  73 => 14,  67 => 12,  59 => 10,  56 => 9,  54 => 8,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_deals/default.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_deals\\default.twig");
    }
}
