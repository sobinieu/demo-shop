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

/* so-sgame/template/header/header1.twig */
class __TwigTemplate_0107ed4c74c533681b936ac83fded2229377c709795365d9408bf9a8e44b4479 extends \Twig\Template
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

                ";
        // line 6
        echo ($context["so_topbar"] ?? null);
        echo "
            
<header id=\"header\" class=\" variant typeheader-";
        // line 8
        echo ((($context["typeheader"] ?? null)) ? (($context["typeheader"] ?? null)) : ("1"));
        echo "\">
\t";
        // line 9
        echo "  
\t<div class=\"header-top hidden-compact\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"header-top-left col-lg-4 col-md-4 col-sm-4 hidden-xs\">\t\t\t\t\t
\t\t\t\t\t";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "welcome_message_status"], "method", false, false, false, 14)) {
            // line 15
            echo "\t\t\t\t\t\t<div class=\"hidden-md hidden-sm hidden-xs welcome-msg\">
\t\t\t\t\t\t\t";
            // line 16
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "welcome_message"], "method", false, false, false, 16))) {
                // line 17
                echo "\t                            ";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "welcome_message"], "method", false, false, false, 17);
                echo "
\t                        ";
            }
            // line 18
            echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "phone_status"], "method", false, false, false, 21)) {
            // line 22
            echo "\t\t\t\t\t<div class=\"telephone hidden-md hidden-sm hidden-xs\" >
\t\t\t\t\t\t";
            // line 23
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "contact_number"], "method", false, false, false, 23);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"header-top-right collapsed-block col-lg-8 col-md-8 col-sm-8 col-xs-12\">
\t\t\t\t\t<ul class=\"top-link list-inline lang-curr\">
\t\t\t\t\t\t";
        // line 29
        if (($context["language"] ?? null)) {
            echo " <li class=\"language\">";
            echo ($context["language"] ?? null);
            echo " </li>\t";
        }
        echo "\t\t
\t\t\t\t\t\t";
        // line 30
        if (($context["currency"] ?? null)) {
            echo " <li class=\"currency\"> ";
            echo ($context["currency"] ?? null);
            echo "  </li> ";
        }
        echo "\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"top-link list-inline\">\t
\t\t\t\t\t\t<li class=\"account\" id=\"my_account\"><a href=\"";
        // line 33
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"btn-xs dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i><span>";
        echo ($context["text_account"] ?? null);
        echo "</span> <span class=\"fa fa-caret-down\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu \">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 35
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 36
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 37
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 38
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 41
        if (($context["logged"] ?? null)) {
            echo " 
\t\t\t\t\t\t\t<li class=\"log logout\"><i class=\"fa fa-unlock\"></i> <a class=\"link-lg\" href=\"";
            // line 42
            echo ($context["logout"] ?? null);
            echo " \"> ";
            echo ($context["text_logout"] ?? null);
            echo " </a></li>
\t\t\t\t\t\t";
        } else {
            // line 43
            echo "   
\t\t\t\t\t\t\t<li class=\"log login\"><i class=\"fa fa-lock\"></i> <a class=\"link-lg\" href=\"";
            // line 44
            echo ($context["login"] ?? null);
            echo " \">";
            echo ($context["text_login"] ?? null);
            echo " </a></li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "checkout_status"], "method", false, false, false, 46)) {
            // line 47
            echo "\t\t\t\t\t\t\t<li class=\"checkout hidden-xs\"><a href=\"";
            echo ($context["checkout"] ?? null);
            echo " \" class=\"btn-link\" title=\"";
            echo ($context["text_checkout"] ?? null);
            echo " \"><span >";
            echo ($context["text_checkout"] ?? null);
            echo " </span></a></li>
\t\t\t\t\t\t";
        }
        // line 48
        echo " \t\t\t\t\t\t\t\t          
\t\t\t\t\t</ul>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t";
        // line 55
        echo " 
\t<div class=\"header-middle ";
        // line 56
        echo ($context["hidden_headercenter"] ?? null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">\t\t\t
\t\t\t\t<div class=\"navbar-logo col-lg-3 col-md-2 col-sm-3 col-xs-6\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t   \t\t";
        // line 61
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_logo", [], "method", false, false, false, 61);
        echo "
\t\t\t\t   \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"middle2 col-lg-7 col-md-9 col-sm-7 col-xs-4\">\t\t\t\t\t
\t\t\t\t\t<div class=\"search-header-w\">
\t\t\t\t\t\t<div class=\"icon-search\"><i class=\"fa fa-search\"></i></div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 67
        echo ($context["search_block"] ?? null);
        echo "
\t\t\t\t\t\t<div class=\"search-screen hidden-xs\">&nbsp;</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"main-menu-w\">
\t\t\t\t\t\t";
        // line 71
        echo ($context["content_menu1"] ?? null);
        echo "\t
\t\t\t\t\t</div>\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"middle3 col-lg-2 col-md-1 col-sm-2 col-xs-2\">
\t\t\t\t\t<div class=\"shopping_cart\">\t\t\t\t\t\t\t
\t\t\t\t\t \t";
        // line 76
        echo ($context["cart"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

</header>";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/header/header1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 76,  221 => 71,  214 => 67,  205 => 61,  197 => 56,  194 => 55,  185 => 48,  175 => 47,  173 => 46,  170 => 45,  163 => 44,  160 => 43,  153 => 42,  149 => 41,  141 => 38,  135 => 37,  129 => 36,  123 => 35,  114 => 33,  104 => 30,  96 => 29,  91 => 26,  85 => 23,  82 => 22,  79 => 21,  74 => 18,  68 => 17,  66 => 16,  63 => 15,  61 => 14,  54 => 9,  50 => 8,  45 => 6,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/header/header1.twig", "C:\\OSPanel\\domains\\gamer2\\storage\\modification\\catalog\\view\\theme\\so-sgame\\template\\header\\header1.twig");
    }
}
