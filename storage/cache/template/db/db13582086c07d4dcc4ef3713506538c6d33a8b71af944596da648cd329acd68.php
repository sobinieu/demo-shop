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

/* so-sgame/template/extension/module/so_quickview/default.twig */
class __TwigTemplate_1607d3b77be83426e94861da1aac02d987695f9be20c1df4a8a9aa3f4784945e extends \Twig\Template
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
        echo "<script type=\"text/javascript\">
\t
\tfunction _SoQuickView(){
\t\tvar windowWidth = window.innerWidth || document.documentElement.clientWidth;
\t\tif (windowWidth > 1200 ) {
\t\t\tvar \$item_class = \$('";
        // line 6
        echo ($context["class_suffix"] ?? null);
        echo "');
\t\t\tif (\$item_class.length > 0) {
\t\t\t\tfor (var i = 0; i < \$item_class.length; i++) {
\t\t\t\t\tif(\$(\$item_class[i]).find('.quickview_handler').length <= 0){
\t\t\t\t\t\tvar \$product_id = \$(\$item_class[i]).find('a', \$(this)).attr('data-product');
\t\t\t\t\t\tif(\$.isNumeric(\$product_id) ){
\t\t\t\t\t\t\tvar _quickviewbutton = \"<a class='visible-lg btn-button quickview quickview_handler' href='";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["our_url"] ?? null), "link", [0 => "extension/soconfig/quickview", 1 => "product_id="], "method", false, false, false, 12);
        echo "\"+\$product_id+\"' title=\\\"";
        echo ($context["label_text"] ?? null);
        echo "\\\" data-title =\\\"";
        echo ($context["label_text"] ?? null);
        echo "\\\" data-fancybox-type=\\\"iframe\\\" ><i class=\\\"fa fa-search\\\"></i><span>";
        echo ($context["label_text"] ?? null);
        echo "</span></a>\";
\t\t\t\t\t\t\t\$(\$item_class[i]).append(_quickviewbutton);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\t
\t}

\tjQuery(document).ready(function (\$) {
\t\t_SoQuickView();
\t\t// Hide tooltip when clicking on it
\t\tvar hasTooltip = \$(\"[data-toggle='tooltip']\").tooltip({container: 'body'});
\t\thasTooltip.on('click', function () {
\t\t\t\t\$(this).tooltip('hide')
\t\t});
\t});

\t
</script>";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_quickview/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_quickview/default.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_quickview\\default.twig");
    }
}
