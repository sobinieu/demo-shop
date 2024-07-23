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

/* so-sgame/template/extension/module/so_listing_tabs/default/default_tabs.twig */
class __TwigTemplate_b475e7b86b67596b9a6c07e80da03446f81c08f9e196015c4c84b1e93420e0be extends \Twig\Template
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
        echo "<div class=\"ltabs-tabs-wrap\">
\t<span class='ltabs-tab-selected'></span>
\t<span class=\"ltabs-tab-arrow\">▼</span>
\t<ul class=\"ltabs-tabs cf list-sub-cat font-title\">

\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 7
            echo "\t\t\t";
            if ((($context["type_source"] ?? null) == "0")) {
                // line 8
                echo "\t\t\t\t<li class=\"ltabs-tab ";
                echo ((twig_get_attribute($this->env, $this->source, $context["tab"], "sel", [], "any", true, true, false, 8)) ? ("  tab-sel tab-loaded") : (""));
                echo " ";
                echo (((twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 8) == "*")) ? (" tab-all") : (""));
                echo "\"
\t\t\t\t\tdata-category-id=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 9);
                echo "\"
\t\t\t\t\tdata-active-content-l=\".items-category-";
                // line 10
                echo (((twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 10) == "*")) ? ("all") : (twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 10)));
                echo "\"  
\t\t\t\t\t>
\t\t\t\t";
                // line 12
                if ((($context["tab_icon_display"] ?? null) == "1")) {
                    // line 13
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 13) != "*")) {
                        // line 14
                        echo "\t\t\t\t\t\t<div class=\"ltabs-tab-img\">
\t\t\t\t\t\t\t<img src=\"";
                        // line 15
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "icon_image", [], "any", false, false, false, 15);
                        echo "\"
\t\t\t\t\t\t\t\t title=\"";
                        // line 16
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 16);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 16);
                        echo "\"
\t\t\t\t\t\t\t\t style=\"width: ";
                        // line 17
                        echo ($context["imgcfgcat_width"] ?? null);
                        echo "px; height:";
                        echo ($context["imgcfgcat_height"] ?? null);
                        echo "px;background:#fff\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    } else {
                        // line 20
                        echo "\t\t\t\t\t\t<div class=\"ltabs-tab-img\">
\t\t\t\t\t\t\t<img src=\"catalog/view/javascript/so_listing_tabs/images/icon-catall.png\"
\t\t\t\t\t\t\t\t title=\"";
                        // line 22
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 22);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 22);
                        echo "\"
\t\t\t\t\t\t\t\t style=\"width: 30px; height:74px; background:#fff\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 26
                    echo "\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t<span class=\"ltabs-tab-label font-title\">
\t\t\t\t\t\t";
                // line 28
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 28)) > ($context["tab_max_characters"] ?? null)) && (($context["tab_max_characters"] ?? null) != "0"))) {
                    // line 29
                    echo "\t\t\t\t\t\t\t";
                    echo (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 29)), 0, ($context["tab_max_characters"] ?? null)) . "..");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 31
                    echo "\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 31);
                    echo "
\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t</span>
\t\t\t\t</li>
\t\t\t";
            } else {
                // line 36
                echo "\t\t\t\t<li class=\"ltabs-tab ";
                echo ((twig_get_attribute($this->env, $this->source, $context["tab"], "sel", [], "any", true, true, false, 36)) ? ("  tab-sel tab-loaded") : (""));
                echo " ";
                echo (((twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 36) == "*")) ? (" tab-all") : (""));
                echo "\"
\t\t\t\t\tdata-category-id=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 37);
                echo "\"
\t\t\t\t\tdata-active-content-l=\".items-category-";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 38);
                echo "\">
\t\t\t\t\t<span class=\"ltabs-tab-label\">
\t\t\t\t\t\t";
                // line 40
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 40)) > ($context["tab_max_characters"] ?? null)) && (($context["tab_max_characters"] ?? null) != "0"))) {
                    // line 41
                    echo "\t\t\t\t\t\t\t";
                    echo (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 41)), 0, ($context["tab_max_characters"] ?? null)) . "..");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 43
                    echo "\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 43);
                    echo "
\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t</span>
\t\t\t\t</li>
\t\t\t";
            }
            // line 48
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_listing_tabs/default/default_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 49,  166 => 48,  161 => 45,  155 => 43,  149 => 41,  147 => 40,  142 => 38,  138 => 37,  131 => 36,  126 => 33,  120 => 31,  114 => 29,  112 => 28,  109 => 27,  106 => 26,  97 => 22,  93 => 20,  85 => 17,  79 => 16,  75 => 15,  72 => 14,  69 => 13,  67 => 12,  62 => 10,  58 => 9,  51 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_listing_tabs/default/default_tabs.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_listing_tabs\\default\\default_tabs.twig");
    }
}
