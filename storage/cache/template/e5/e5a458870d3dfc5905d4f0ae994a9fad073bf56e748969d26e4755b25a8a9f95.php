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

/* so-sgame/template/extension/module/so_categories/default.twig */
class __TwigTemplate_b5f289dba914ccacfc929cf17f03ebc1077a27700128f1c21aa1a0c4b40da020 extends \Twig\Template
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
        if ((($context["theme"] ?? null) == "theme4")) {
            // line 2
            echo "\t<script type=\"text/javascript\">
\t\t//<![CDATA[
\t\tjQuery(document).ready(function (\$) {
\t\t\t;
\t\t\t(function (element) {
\t\t\t\tvar \$element = \$(element);
\t\t\t\t\$(window).load(function () {
\t\t\t\t\t\$element.imagesLoaded(function () {
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t\$element.imagesLoaded(function () {

\t\t\t\t\t\$element.so_accordion({
\t\t\t\t\t\titems: '.so-categories-inner',
\t\t\t\t\t\theading: '.so-categories-heading',
\t\t\t\t\t\tcontent: '.so-categories-content',
\t\t\t\t\t\tactive_class: 'selected',
\t\t\t\t\t\tevent: '";
            // line 19
            echo ($context["accmouseenter"] ?? null);
            echo "',
\t\t\t\t\t\tdelay: 300,
\t\t\t\t\t\tduration: 500,
\t\t\t\t\t\tactive: '1'
\t\t\t\t\t});

\t\t\t\t\tvar height_content = function () {
\t\t\t\t\t\t\$('.so-categories-inner', \$element).each(function () {
\t\t\t\t\t\t\tvar \$inner = \$('.so-categories-content', \$(this).filter('.selected'));
\t\t\t\t\t\t\t\$inner.css('height', 'auto');
\t\t\t\t\t\t\tif (\$inner.length) {
\t\t\t\t\t\t\t\tvar inner_height = \$inner.height();
\t\t\t\t\t\t\t\t\$inner.css('height', inner_height);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t\$(window).resize(function () {
\t\t\t\t\t\theight_content();
\t\t\t\t\t});
\t\t\t\t\t\$(window).load(function () {
\t\t\t\t\t\theight_content();
\t\t\t\t\t});
\t\t\t\t});
\t\t\t})('#";
            // line 42
            echo ($context["uniqued"] ?? null);
            echo "')

\t\t});
\t\t//]]>
\t</script>
";
        }
        // line 48
        echo "
<!--[if lt IE 9]>
<div id=\"";
        // line 50
        echo ($context["uniqued"] ?? null);
        echo "\" class=\"so-categories module ";
        echo ($context["theme"] ?? null);
        echo " ";
        echo ($context["deviceclass_sfx"] ?? null);
        echo " ";
        echo ($context["columnclass_sfx"] ?? null);
        echo " msie lt-ie9\"><![endif]-->
<!--[if IE 9]>
<div id=\"";
        // line 52
        echo ($context["uniqued"] ?? null);
        echo "\" class=\"so-categories module ";
        echo ($context["theme"] ?? null);
        echo " ";
        echo ($context["deviceclass_sfx"] ?? null);
        echo " ";
        echo ($context["columnclass_sfx"] ?? null);
        echo " msie\"><![endif]-->
<!--[if gt IE 9]><!-->
<div id=\"";
        // line 54
        echo ($context["uniqued"] ?? null);
        echo "\" class=\"so-categories module ";
        echo ($context["theme"] ?? null);
        echo " ";
        echo ($context["deviceclass_sfx"] ?? null);
        echo " ";
        echo ($context["columnclass_sfx"] ?? null);
        echo "\">
\t";
        // line 55
        if ((($context["pre_text"] ?? null) != "")) {
            // line 56
            echo "\t<div class=\"pre_text\">
\t\t";
            // line 57
            echo ($context["pre_text"] ?? null);
            echo "
\t</div>
\t";
        }
        // line 60
        echo "
\t";
        // line 61
        if (($context["disp_title_module"] ?? null)) {
            // line 62
            echo "\t<h3 class=\"modtitle\"><span>";
            echo ($context["head_name"] ?? null);
            echo "</span></h3>
\t";
        }
        // line 64
        echo "\t
\t<div class=\"modcontent\">
\t\t";
        // line 66
        if (( !twig_test_empty(($context["list"] ?? null)) && twig_length_filter($this->env, ($context["list"] ?? null)))) {
            // line 67
            echo "\t\t\t";
            echo twig_include($this->env, $context, (((($context["theme_config"] ?? null) . "/template/extension/module/so_categories/default_") . ($context["theme"] ?? null)) . ".twig"));
            echo "
\t\t";
        } else {
            // line 69
            echo "\t\t\t";
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_noitem"], "method", false, false, false, 69);
            echo "
\t\t";
        }
        // line 71
        echo "\t</div>

\t<!-- ";
        // line 73
        if ((($context["post_text"] ?? null) != "")) {
            // line 74
            echo "\t<div class=\"form-group\">
\t\t";
            // line 75
            echo ($context["post_text"] ?? null);
            echo "
\t</div>
\t";
        }
        // line 77
        echo " -->
</div>

";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_categories/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 77,  178 => 75,  175 => 74,  173 => 73,  169 => 71,  163 => 69,  157 => 67,  155 => 66,  151 => 64,  145 => 62,  143 => 61,  140 => 60,  134 => 57,  131 => 56,  129 => 55,  119 => 54,  108 => 52,  97 => 50,  93 => 48,  84 => 42,  58 => 19,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_categories/default.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_categories\\default.twig");
    }
}
