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

/* so-sgame/template/common/currency.twig */
class __TwigTemplate_4459a90f352ff3fd0ad436592424844fb16be586fb1c6deadec400c3fcec4128 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "<div class=\"pull-left\">
  <form action=\"";
            // line 3
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
    <div class=\"btn-group\">
      <button class=\"btn-link dropdown-toggle\" data-toggle=\"dropdown\">
\t  ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 7
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 7) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 7) == ($context["code"] ?? null)))) {
                    echo " 
\t\t\t\t";
                    // line 8
                    echo ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 8) . " ") . twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 8));
                    echo " 
\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 9
$context["currency"], "symbol_right", [], "any", false, false, false, 9) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 9) == ($context["code"] ?? null)))) {
                    echo " 
\t\t\t\t";
                    // line 10
                    echo ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 10) . " ") . twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 10));
                    echo " 
\t\t\t";
                }
                // line 11
                echo "  
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t&nbsp;<i class=\"fa fa-caret-down\"></i>\t  
\t</button>
      <ul class=\"dropdown-menu\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 17
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "        <li>
          <button class=\"currency-select btn-block\" type=\"button\" name=\"";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 19);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 19);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 19);
                    echo "</button>
        </li>
        ";
                } else {
                    // line 22
                    echo "        <li>
          <button class=\"currency-select btn-block\" type=\"button\" name=\"";
                    // line 23
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 23);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 23);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 23);
                    echo "</button>
        </li>
        ";
                }
                // line 26
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 30
            echo ($context["redirect"] ?? null);
            echo "\" />
  </form>
</div>
";
        }
        // line 33
        echo " ";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 33,  126 => 30,  121 => 27,  115 => 26,  105 => 23,  102 => 22,  92 => 19,  89 => 18,  86 => 17,  82 => 16,  77 => 13,  70 => 11,  65 => 10,  61 => 9,  57 => 8,  52 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/common/currency.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\common\\currency.twig");
    }
}
