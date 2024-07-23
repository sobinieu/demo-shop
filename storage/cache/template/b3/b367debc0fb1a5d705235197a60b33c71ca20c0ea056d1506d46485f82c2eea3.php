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

/* so-sgame/template/extension/module/so_html_content/default.twig */
class __TwigTemplate_b8e64ce74f162574a5e933831287e9e58350c6913420710fa893b5b8245acdfa extends \Twig\Template
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
        echo "<div class=\"module ";
        echo ($context["class_suffix"] ?? null);
        echo " \">
  ";
        // line 2
        if (($context["heading_title"] ?? null)) {
            echo " 
    <h2>";
            // line 3
            echo ($context["heading_title"] ?? null);
            echo " </h2>
  ";
        }
        // line 4
        echo " 
  
  ";
        // line 6
        echo ($context["html"] ?? null);
        echo " 

  ";
        // line 8
        echo ($context["countdown"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_html_content/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  55 => 6,  51 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_html_content/default.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_html_content\\default.twig");
    }
}
