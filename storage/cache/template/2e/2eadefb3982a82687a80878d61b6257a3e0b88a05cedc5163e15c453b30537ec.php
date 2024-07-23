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

/* extension/soconfig/soconfig.twig */
class __TwigTemplate_7c6aa048f015c38bc5f1a7a3939adb989b511b245bf2ddce226384a7a4cda9d8 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo " 
<div id=\"content\">
\t
    <div id=\"frontend-themes\">
        <div class=\"so-ultimate-sidebar\">
\t\t\t
\t\t\t";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "warning", [], "any", false, false, false, 7)) {
            // line 8
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "warning", [], "any", false, false, false, 8);
            echo " 
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t</div>
\t\t\t";
        }
        // line 11
        echo " 
\t\t\t
\t\t\t";
        // line 13
        if ((($context["success"] ?? null) && ($context["success"] ?? null))) {
            echo " 
\t\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 14
            echo ($context["success"] ?? null);
            echo " 
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t</div>
\t\t\t";
        }
        // line 17
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-logo\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "  
\t\t\t\t\t\t";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 22) == ($context["active_store"] ?? null))) {
                // line 23
                echo "\t\t\t\t\t\t\t<a class=\"btn  dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 23);
                echo " <span class=\"fa fa-angle-down\"></span></a>
\t\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu store_dropdown\">
\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "  
\t\t\t\t\t\t\t";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["store"], "status", [], "any", false, false, false, 29)) {
                // line 30
                echo "\t\t\t\t\t\t\t";
                $context["store_active"] = (((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 30) == ($context["active_store"] ?? null))) ? ("active") : (""));
                // line 31
                echo "\t\t\t\t\t\t\t<li class=\"";
                echo ($context["store_active"] ?? null);
                echo "\" ><a href=\"";
                echo ($context["base_href"] ?? null);
                echo "&store_id=";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 31);
                echo "\" >";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 31);
                echo " </a></li>
\t\t\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group-info clearfix\">
\t\t\t\t\t<span class=\"label label-primary pull-left\">";
        // line 38
        echo ($context["theme_version"] ?? null);
        echo "</span>
\t\t\t\t\t";
        // line 39
        if (($context["status_product_option"] ?? null)) {
            // line 40
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo ($context["href_product"] ?? null);
            echo "\" class=\"btn btn-link  pull-right\" target=\"_blank\" ><i class=\"fa fa-file-text\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "lang_product_feature"], "method", false, false, false, 40);
            echo "</a>
\t\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t\t<a href=\"";
            echo ($context["add_db_product"] ?? null);
            echo "\" class=\"btn btn-link pull-right\" target=\"_blank\" ><i class=\"fa fa-wrench\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "lang_create_feature"], "method", false, false, false, 42);
            echo "</a>
\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<a href=\"";
        // line 46
        echo ($context["cancel"] ?? null);
        echo "\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo " \" class=\"btn btn-link action-ultimate-exit\"><i class=\"fa fa-close fa-2x\"></i></a>
\t\t\t</div>
          
\t\t\t<div class=\"so-ultimate-wrap\">
\t\t\t\t<div id=\"so-ultimate-options\">
\t\t\t\t<form name=\"settingsform\" action=\"";
        // line 51
        echo ($context["action"] ?? null);
        echo " \" method=\"post\" enctype=\"multipart/form-data\" id=\"form-optimus\" class=\"form-vertical\">
\t\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "  
\t\t\t\t\t\t";
            // line 53
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 53) == ($context["active_store"] ?? null))) {
                // line 54
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate("extension/soconfig/options_stores.twig", "extension/soconfig/soconfig.twig", 54)->display(twig_array_merge($context, ["store" => $context["store"], "user_token" => ($context["user_token"] ?? null)]));
                // line 55
                echo "\t\t\t\t\t\t\t<input name=\"storeUrl\" type=\"hidden\"  value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "url", [], "any", false, false, false, 55);
                echo "\" />
\t\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t\t\t\t\t<input name=\"buttonForm\" type=\"hidden\"  value=\"\" />
\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"so-ultimate-footer clearfix\">
\t\t\t\t<div class=\"copyright-info pull-left\">
\t\t\t\t\tSO Framework 3.1  by <br> <a href=\"http://www.opencartworks.com\" target=\"_blank\">Opencartworks</a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t";
        // line 69
        if ( !($context["validate"] ?? null)) {
            echo " 
\t\t\t\t\t\t<a  href=\"";
            // line 70
            echo ($context["href_preview"] ?? null);
            echo "\" target=\"_blank\" class=\"btn btn-success \" ><i class=\"fa fa-external-link\"></i> Preview </a>
\t\t\t\t\t";
        } else {
            // line 72
            echo "\t\t\t\t\t\t<a  class=\"btn btn-success action-save-template \" ><i class=\"fa fa-save\"></i> Save </a>
\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>

        </div>

    </div>

</div>

";
        // line 85
        $this->loadTemplate("extension/soconfig/class/icon-defs.twig", "extension/soconfig/soconfig.twig", 85)->display($context);
        // line 86
        echo "<script type=\"text/javascript\"><!--
function buttonApplyColor() {document.settingsform.buttonForm.value='color'; \$('#form-optimus').submit(); }
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/soconfig/soconfig.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 86,  259 => 85,  246 => 74,  242 => 72,  237 => 70,  233 => 69,  206 => 57,  200 => 55,  197 => 54,  195 => 53,  176 => 52,  172 => 51,  162 => 46,  158 => 44,  150 => 42,  142 => 40,  140 => 39,  136 => 38,  124 => 33,  112 => 31,  109 => 30,  107 => 29,  101 => 28,  91 => 25,  85 => 23,  83 => 22,  77 => 21,  71 => 17,  64 => 14,  60 => 13,  56 => 11,  48 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/soconfig/soconfig.twig", "C:\\OSPanel\\domains\\gamer2\\admin\\view\\template\\extension\\soconfig\\soconfig.twig");
    }
}
