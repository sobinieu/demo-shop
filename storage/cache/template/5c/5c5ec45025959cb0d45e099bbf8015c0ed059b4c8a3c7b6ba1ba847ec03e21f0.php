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

/* so-sgame/template/soconfig/preloader.twig */
class __TwigTemplate_dc825f718d432c8d46e858fc0b9e031621091384b2437f02f834508e10abbf0d extends \Twig\Template
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
        // line 10
        echo "
";
        // line 11
        $context["preloader_no"] = (((($context["preloader"] ?? null) == "line")) ? ("no-pre-loader") : (""));
        // line 12
        $context["preloader_output"] = (("<div class=\"so-pre-loader " . ($context["preloader_no"] ?? null)) . "\">");
        // line 13
        echo "
";
        // line 14
        if ((($context["preloader"] ?? null) == "double-loop")) {
            // line 16
            echo "    ";
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"so-loader-center\"><div class=\"spinner-bounce\"><div class=\"double-bounce1\"></div><div class=\"double-bounce2\"></div></div></div>");
            // line 17
            echo "\t
";
        } elseif ((        // line 18
($context["preloader"] ?? null) == "cube-move")) {
            // line 20
            echo "\t";
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"so-loader-center\">");
            echo "  
\t";
            // line 21
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"spinner-cube\">");
            echo " 
\t\t";
            // line 22
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"cube1\"></div>");
            echo " 
\t\t";
            // line 23
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"cube2\"></div>");
            echo " 
\t";
            // line 24
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "</div>");
            echo "  
\t";
            // line 25
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "</div>");
            // line 26
            echo "\t
";
        } elseif ((        // line 27
($context["preloader"] ?? null) == "circle-bounce")) {
            // line 29
            echo "\t";
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"so-loader-center\">");
            echo "  
\t";
            // line 30
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"spinner-bounce2\">");
            echo " 
\t\t";
            // line 31
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"bounce1\"></div>");
            echo " 
\t\t";
            // line 32
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"bounce2\"></div>");
            echo " 
\t\t";
            // line 33
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"bounce3\"></div>");
            echo " 
\t";
            // line 34
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "</div>");
            echo "  
\t";
            // line 35
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "</div>");
            // line 36
            echo "

";
        } elseif ((        // line 38
($context["preloader"] ?? null) == "folding-cube")) {
            // line 40
            echo "\t";
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"so-loader-center\">");
            echo "  
\t";
            // line 41
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"spinner-folding-cube\">");
            echo " 
\t\t";
            // line 42
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"sk-cube1 sk-cube\"></div>");
            echo " 
\t\t";
            // line 43
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"sk-cube2 sk-cube\"></div>");
            echo " 
\t\t";
            // line 44
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"sk-cube4 sk-cube\"></div>");
            echo " 
\t\t";
            // line 45
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"sk-cube3 sk-cube\"></div>");
            echo " 
\t";
            // line 46
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "</div>");
            echo "  
\t";
            // line 47
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "</div>");
            // line 48
            echo "
";
        } else {
            // line 51
            echo "\t";
            // line 52
            echo "\t";
            $context["preloader_output"] = (($context["preloader_output"] ?? null) . "<div class=\"so-loader-line\" id=\"line-load\"></div>");
            echo " 
";
        }
        // line 54
        echo "
";
        // line 55
        $context["preloader_output"] = (($context["preloader_output"] ?? null) . "</div>");
        // line 56
        echo "
";
        // line 57
        echo ($context["preloader_output"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/soconfig/preloader.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 57,  166 => 56,  164 => 55,  161 => 54,  155 => 52,  153 => 51,  149 => 48,  147 => 47,  143 => 46,  139 => 45,  135 => 44,  131 => 43,  127 => 42,  123 => 41,  118 => 40,  116 => 38,  112 => 36,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  85 => 29,  83 => 27,  80 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  62 => 21,  57 => 20,  55 => 18,  52 => 17,  49 => 16,  47 => 14,  44 => 13,  42 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/soconfig/preloader.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\soconfig\\preloader.twig");
    }
}
