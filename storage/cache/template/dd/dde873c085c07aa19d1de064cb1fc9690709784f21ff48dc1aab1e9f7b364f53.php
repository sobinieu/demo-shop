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

/* so-sgame/template/extension/module/so_categories/default_theme3.twig */
class __TwigTemplate_396a352c5a03064b66e0c329a96e189c39ccf11675542002732acd78fa5053c9 extends \Twig\Template
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
        echo "<div class=\"cat-wrap theme3\">
\t";
        // line 2
        $context["j"] = 0;
        // line 3
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 4
            echo "\t\t";
            $context["j"] = (($context["j"] ?? null) + 1);
            // line 5
            echo "\t\t<div class=\"content-box box-";
            echo ($context["j"] ?? null);
            echo "\">
\t\t\t<div class=\"inner\">
\t\t\t\t";
            // line 7
            if (((twig_get_attribute($this->env, $this->source, $context["items"], "image", [], "any", false, false, false, 7) && (twig_get_attribute($this->env, $this->source, $context["items"], "image", [], "any", false, false, false, 7) != "")) && (twig_get_attribute($this->env, $this->source, $context["items"], "product_image", [], "any", false, false, false, 7) == 1))) {
                // line 8
                echo "\t\t\t\t\t<div class=\"image-cat\">
\t\t\t\t\t\t<a href=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["items"], "link", [], "any", false, false, false, 9);
                echo "\"
\t\t\t\t\t\t   title=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["items"], "title", [], "any", false, false, false, 10);
                echo "\" target=\"";
                echo ($context["item_link_target"] ?? null);
                echo "\" >
\t\t\t\t\t\t\t<img src=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["items"], "image", [], "any", false, false, false, 11);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["items"], "title", [], "any", false, false, false, 11);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["items"], "title", [], "any", false, false, false, 11);
                echo "\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t<div class=\"cat-content\">
\t\t\t\t\t";
            // line 16
            if (($context["cat_title_display"] ?? null)) {
                // line 17
                echo "\t\t\t\t\t\t<div class=\"cat-title\">
\t\t\t\t\t\t\t<a href=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["items"], "link", [], "any", false, false, false, 18);
                echo "\"
\t\t\t\t\t\t\t   title=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["items"], "title", [], "any", false, false, false, 19);
                echo " \" target=\"";
                echo ($context["item_link_target"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["items"], "title_maxlength", [], "any", false, false, false, 20);
                echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 25
            if (($context["cat_all_product"] ?? null)) {
                // line 26
                echo "\t\t\t\t\t<p>";
                echo twig_get_attribute($this->env, $this->source, $context["items"], "all_product", [], "any", false, false, false, 26);
                echo " ";
                echo ($context["text_items"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["items"], "link", [], "any", false, false, false, 28);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["items"], "title", [], "any", false, false, false, 28);
            echo "\" target=\"";
            echo ($context["item_link_target"] ?? null);
            echo "\" class=\"viewmore\"> ";
            echo ($context["text_viewmore"] ?? null);
            echo "<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i> </a>
\t\t\t\t</div>
\t\t\t\t";
            // line 30
            if (($context["cat_sub_title_display"] ?? null)) {
                // line 31
                echo "\t\t\t\t\t<div class=\"child-cat\">
\t\t\t\t\t\t";
                // line 32
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["items"], "child_cat", [], "any", false, false, false, 32))) {
                    // line 33
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["items"], "child_cat", [], "any", false, false, false, 33));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 34
                        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"child-cat-title\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 36
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 36);
                        echo "\" target=\"";
                        echo ($context["item_link_target"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 37
                        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 37)) > ($context["cat_sub_title_maxcharacs"] ?? null)) && (($context["cat_sub_title_maxcharacs"] ?? null) != 0))) {
                            // line 38
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 38)), 0, ($context["cat_sub_title_maxcharacs"] ?? null));
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 39
                            echo "\t
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 40
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 40);
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 42
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 43
                        if (($context["cat_all_product"] ?? null)) {
                            // line 44
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            echo (("(" . twig_get_attribute($this->env, $this->source, $context["item"], "all_product", [], "any", false, false, false, 44)) . "), ");
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 46
                        echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 50
                    echo "\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_noitem"], "method", false, false, false, 51);
                    echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t";
            // line 59
            $context["clear"] = "clr1";
            // line 60
            echo "\t\t";
            if (((($context["j"] ?? null) % 2) == 0)) {
                echo " ";
                $context["clear"] = (($context["clear"] ?? null) . " clr2");
                echo " ";
            }
            // line 61
            echo "\t\t";
            if (((($context["j"] ?? null) % 3) == 0)) {
                echo " ";
                $context["clear"] = (($context["clear"] ?? null) . " clr3");
                echo " ";
            }
            // line 62
            echo "\t\t";
            if (((($context["j"] ?? null) % 4) == 0)) {
                echo " ";
                $context["clear"] = (($context["clear"] ?? null) . " clr4");
                echo " ";
            }
            // line 63
            echo "\t\t";
            if (((($context["j"] ?? null) % 5) == 0)) {
                echo " ";
                $context["clear"] = (($context["clear"] ?? null) . " clr5");
                echo " ";
            }
            // line 64
            echo "\t\t";
            if (((($context["j"] ?? null) % 6) == 0)) {
                echo " ";
                $context["clear"] = (($context["clear"] ?? null) . " clr6");
                echo " ";
            }
            // line 65
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t";
        if ((($context["post_text"] ?? null) != "")) {
            // line 68
            echo "
\t\t";
            // line 69
            echo ($context["post_text"] ?? null);
            echo "

\t";
        }
        // line 72
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_categories/default_theme3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 72,  261 => 69,  258 => 68,  255 => 67,  248 => 65,  241 => 64,  234 => 63,  227 => 62,  220 => 61,  213 => 60,  211 => 59,  206 => 56,  202 => 54,  196 => 51,  193 => 50,  190 => 49,  182 => 46,  176 => 44,  174 => 43,  171 => 42,  166 => 40,  163 => 39,  157 => 38,  155 => 37,  149 => 36,  145 => 34,  140 => 33,  138 => 32,  135 => 31,  133 => 30,  121 => 28,  113 => 26,  111 => 25,  108 => 24,  100 => 20,  94 => 19,  90 => 18,  87 => 17,  85 => 16,  82 => 15,  71 => 11,  65 => 10,  61 => 9,  58 => 8,  56 => 7,  50 => 5,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_categories/default_theme3.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_categories\\default_theme3.twig");
    }
}
