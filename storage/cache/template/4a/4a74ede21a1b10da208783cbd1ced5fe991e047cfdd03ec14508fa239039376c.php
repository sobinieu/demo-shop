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

/* so-sgame/template/footer/footer3.twig */
class __TwigTemplate_c23660e3d3d1b04b682033e6a22e9fd2cced240b3664a9862bdc71a49df7bf1e extends \Twig\Template
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
        echo "<footer class=\"footer-container typefooter-";
        echo ((($context["typefooter"] ?? null)) ? (($context["typefooter"] ?? null)) : ("1"));
        echo "\">
\t";
        // line 2
        echo "  
\t";
        // line 3
        if ( !twig_test_empty(($context["footer_block3"] ?? null))) {
            // line 4
            echo "\t<div class=\"footer-main collapse description-has-toggle\" id=\"collapse-footer\">\t
\t\t";
            // line 5
            echo ($context["footer_block3"] ?? null);
            echo "\t\t\t
\t</div>
\t<div class=\"description-toggle hidden-lg hidden-md\">
         <a class=\"showmore\" data-toggle=\"collapse\" href=\"#collapse-footer\" aria-expanded=\"false\" aria-controls=\"collapse-footer\">
            <span class=\"toggle-more\">";
            // line 9
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "show_more"], "method", false, false, false, 9);
            echo " <i class=\"fa fa-angle-down\"></i></span> 
            <span class=\"toggle-less\">";
            // line 10
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "show_less"], "method", false, false, false, 10);
            echo " <i class=\"fa fa-angle-up\"></i></span>           
\t\t</a>        
\t</div>
\t";
        }
        // line 14
        echo "\t
\t
\t";
        // line 16
        echo " 
\t<div class=\"footer-bottom\">\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">\t
\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 copyright-w\">\t
\t\t\t\t\t";
        // line 21
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "copyright"], "method", false, false, false, 21))) {
            // line 22
            echo "\t\t\t\t\t\t";
            echo ($context["powered"] ?? null);
            echo "
\t\t\t\t\t";
        } else {
            // line 24
            echo "\t\t\t\t\t\t";
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "copyright"], "method", false, false, false, 24), ["{year}" => twig_date_format_filter($this->env, "now", "Y")]);
            echo "
\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "imgpayment_status"], "method", false, false, false, 27)) {
            echo " 
\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 payment-w\">
\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"image/";
            // line 29
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "imgpayment"], "method", false, false, false, 29);
            echo "\"  alt=\"imgpayment\">
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t
\t\t\t</div>
\t\t</div>\t\t
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/footer/footer3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  101 => 29,  96 => 27,  93 => 26,  87 => 24,  81 => 22,  79 => 21,  72 => 16,  68 => 14,  61 => 10,  57 => 9,  50 => 5,  47 => 4,  45 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/footer/footer3.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\footer\\footer3.twig");
    }
}
