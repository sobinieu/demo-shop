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

/* so-sgame/template/header/header3.twig */
class __TwigTemplate_cd9cc919b592267a02ee49d971061ac68e9042ac79df667e78ac0a2ac575edb0 extends \Twig\Template
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
        $context["hidden_headercenter"] = (((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "toppanel_type"], "method", false, false, false, 2) == "2")) ? ("hidden-compact") : (""));
        // line 3
        $context["hidden_headerbottom"] = (((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "toppanel_type"], "method", false, false, false, 3) == "1")) ? ("hidden-compact") : (""));
        // line 4
        echo "
<header id=\"header\" class=\" variant typeheader-";
        // line 5
        echo ((($context["typeheader"] ?? null)) ? (($context["typeheader"] ?? null)) : ("1"));
        echo "\">
\t";
        // line 6
        echo "  

\t
\t";
        // line 9
        echo " 
\t<div class=\"header-middle ";
        // line 10
        echo ($context["hidden_headercenter"] ?? null);
        echo "\">
\t\t<div class=\"container\">\t
\t\t\t<div class=\"row\">\t\t
\t\t\t\t<div class=\"navbar-logo col-lg-2 col-md-12 col-sm-3 col-xs-4\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t   \t\t";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_logo", [], "method", false, false, false, 15);
        echo "
\t\t\t\t   \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"middle2 col-lg-10 col-md-12 col-sm-9 col-xs-8\">\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"main-menu-w\">
\t\t\t\t\t\t";
        // line 20
        echo ($context["content_menu1"] ?? null);
        echo "\t
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"middle3\">
\t\t\t\t\t\t<div class=\"search-header-w\">
\t\t\t\t\t\t\t<div class=\"icon-search\"><i class=\"pe-7s-search\"></i></div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 25
        echo ($context["search_block"] ?? null);
        echo "
\t\t\t\t\t\t\t<div class=\"search-screen hidden-xs\">&nbsp;</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 29
        if (($context["logged"] ?? null)) {
            echo " 
\t\t\t\t\t\t\t<div class=\"log logout\"><a class=\"link-lg\" href=\"";
            // line 30
            echo ($context["logout"] ?? null);
            echo " \"><svg width=\"20\" height=\"20\" class=\"icon-user\"><use xlink:href=\"#icon-user\"></use></svg><span>";
            echo ($context["text_logout"] ?? null);
            echo "</span></a></div>
\t\t\t\t\t\t";
        } else {
            // line 31
            echo "   
\t\t\t\t\t\t\t<div class=\"log login\"><a class=\"link-lg\" href=\"";
            // line 32
            echo ($context["login"] ?? null);
            echo " \"><svg width=\"20\" height=\"20\" class=\"icon-user\"><use xlink:href=\"#icon-user\"></use></svg><span>";
            echo ($context["text_login"] ?? null);
            echo "</span></a></div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 33
        echo "\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"shopping_cart\">\t\t\t\t\t\t\t
\t\t\t\t\t\t \t";
        // line 36
        echo ($context["cart"] ?? null);
        echo "
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>\t
\t\t</div>
\t</div>

\t
\t\t
</header>";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/header/header3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  108 => 33,  101 => 32,  98 => 31,  91 => 30,  87 => 29,  80 => 25,  72 => 20,  64 => 15,  56 => 10,  53 => 9,  48 => 6,  44 => 5,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/header/header3.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\header\\header3.twig");
    }
}
