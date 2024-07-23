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

/* so-sgame/template/extension/module/so_newletter_custom_popup/default.twig */
class __TwigTemplate_ea01f9030a2ac688c6326cd4d614e34799a9b91466191b820cb238e3433126f3 extends \Twig\Template
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
        if ((($context["layout"] ?? null) == "layout_default")) {
            // line 2
            echo "\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/extension/module/so_newletter_custom_popup/default_layout_default.twig"), "so-sgame/template/extension/module/so_newletter_custom_popup/default.twig", 2)->display($context);
        } else {
            // line 4
            echo "\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig"), "so-sgame/template/extension/module/so_newletter_custom_popup/default.twig", 4)->display($context);
        }
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_newletter_custom_popup/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_newletter_custom_popup/default.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_newletter_custom_popup\\default.twig");
    }
}
