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

/* so-sgame/template/common/cart.twig */
class __TwigTemplate_7a81cba7849ba7cb75b97f79a90d924758f461e84115fdc31c5bcf6048b66a1d extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"btn-shopping-cart\">
  
  <a data-loading-text=\"";
        // line 3
        echo ($context["text_loading"] ?? null);
        echo " \" class=\"btn-group top_cart dropdown-toggle\" data-toggle=\"dropdown\">
    <div class=\"shopcart\">
      <span class=\"icon-c\">
\t 
        ";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "iconcart"], "method", false, false, false, 7) == "cart-1")) {
            echo " <svg width=\"20\" height=\"20\" class=\"icon-shopbag\"><use xlink:href=\"#icon-shopbag\"></use></svg>
\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 8
($context["soconfig"] ?? null), "get_settings", [0 => "iconcart"], "method", false, false, false, 8) == "cart-2")) {
            echo " <svg width=\"22\" height=\"19\" class=\"icon-shopping-basket\"><use xlink:href=\"#icon-shopping-basket\"></use></svg>
\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 9
($context["soconfig"] ?? null), "get_settings", [0 => "iconcart"], "method", false, false, false, 9) == "cart-3")) {
            echo " <svg width=\"20\" height=\"20\" class=\"icon-shopping-handbag\"><use xlink:href=\"#icon-shopping-handbag\"></use></svg>
\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 10
($context["soconfig"] ?? null), "get_settings", [0 => "iconcart"], "method", false, false, false, 10) == "cart-4")) {
            echo " <svg width=\"20\" height=\"20\" class=\"icon-shopping-briefcase\"><use xlink:href=\"#icon-shopping-briefcase\"></use></svg>
\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 11
($context["soconfig"] ?? null), "get_settings", [0 => "iconcart"], "method", false, false, false, 11) == "cart-5")) {
            echo " <svg width=\"18\" height=\"18\" class=\"icon-cart\"><use xlink:href=\"#icon-cart\"></use></svg>
\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 12
($context["soconfig"] ?? null), "get_settings", [0 => "iconcart"], "method", false, false, false, 12) == "cart-6")) {
            echo " <svg width=\"18\" height=\"18\" class=\"icon-shopping-basket\"><use xlink:href=\"#icon-shopping-basket2\"></use></svg>
\t\t";
        }
        // line 14
        echo "      </span>
      <div class=\"shopcart-inner\">
        <p class=\"text-shopping-cart\">
         ";
        // line 17
        echo ($context["text_shop_cart"] ?? null);
        echo "
        </p>
   
        <span class=\"total-shopping-cart cart-total-full\">
           ";
        // line 21
        echo ($context["text_items"] ?? null);
        echo "
        </span>
      </div>
    </div>
  </a>
  
  <ul class=\"dropdown-menu pull-right shoppingcart-box\">
    ";
        // line 28
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 29
            echo "    <li class=\"content-item\">
      <table class=\"table table-striped\" style=\"margin-bottom:10px;\">
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 32
                echo "        <tr>
          <td class=\"text-center size-img-cart\">";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 33)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 33);
                    echo "\"><img class=\"img-thumbnail lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 33);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                    echo "\"  /></a> ";
                }
                echo "</td>
          <td class=\"text-left\"><a href=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 34);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 35));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 36
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 36);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 36);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "            ";
                }
                // line 38
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 38)) {
                    echo " <br />
            - <small>";
                    // line 39
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 39);
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 40);
                echo "</td>
          <td class=\"text-right\">";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 41);
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 42);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 46
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 48);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 50);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 51);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "      </table>
    </li>
  
\t<li>
\t\t<div class=\"checkout clearfix\">
\t\t<a href=\"";
            // line 59
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn btn-view-cart inverse\"> ";
            echo ($context["text_cart"] ?? null);
            echo "</a>
\t\t<a href=\"";
            // line 60
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn btn-checkout pull-right\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
\t\t</div>
\t</li>
    ";
        } else {
            // line 64
            echo "    <li>
      <p class=\"text-center empty\">";
            // line 65
            echo ($context["text_empty_cart"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 68
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 68,  233 => 65,  230 => 64,  221 => 60,  215 => 59,  208 => 54,  197 => 51,  193 => 50,  188 => 48,  184 => 46,  179 => 45,  168 => 42,  164 => 41,  160 => 40,  152 => 39,  147 => 38,  144 => 37,  135 => 36,  128 => 35,  122 => 34,  108 => 33,  105 => 32,  101 => 31,  97 => 29,  95 => 28,  85 => 21,  78 => 17,  73 => 14,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/common/cart.twig", "C:\\OSPanel\\domains\\gamer2\\storage\\modification\\catalog\\view\\theme\\so-sgame\\template\\common\\cart.twig");
    }
}
