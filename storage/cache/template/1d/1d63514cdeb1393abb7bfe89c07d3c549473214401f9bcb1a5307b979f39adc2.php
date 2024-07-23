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

/* so-sgame/template/extension/module/so_home_slider/default.twig */
class __TwigTemplate_93a75fb4300bdcb51b8e234873f03012f2033bdf26b04d34c73162f0ba12e37f extends \Twig\Template
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
        $context["count_item"] = twig_length_filter($this->env, ($context["list"] ?? null));
        // line 2
        echo "
<div class=\"module sohomepage-slider ";
        // line 3
        echo ($context["class_suffix"] ?? null);
        echo "\">
    ";
        // line 4
        if (($context["disp_title_module"] ?? null)) {
            // line 5
            echo "      <h3 class=\"modtitle\">";
            echo ($context["head_name"] ?? null);
            echo "</h3>
    ";
        }
        // line 7
        echo "
";
        // line 8
        if (($context["pre_text"] ?? null)) {
            // line 9
            echo "    ";
            echo ($context["pre_text"] ?? null);
            echo "
";
        }
        // line 11
        echo "

<div class=\"modcontent\">
    ";
        // line 14
        if (($context["list"] ?? null)) {
            echo " 
    <div id=\"sohomepage-slider";
            // line 15
            echo ($context["module"] ?? null);
            echo "\">
         <div class=\"so-homeslider sohomeslider-inner-";
            // line 16
            echo ($context["module"] ?? null);
            echo "\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "        
            <div class=\"item\">
              
                <a href=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 20);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 20);
                echo "\" target=\"";
                echo ($context["item_link_target"] ?? null);
                echo "\">
                    <img src=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 21);
                echo "\"  alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 21);
                echo "\" />
                </a>
                <div class=\"sohomeslider-description\">
                    ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, false, 24)) {
                    echo " <h2>";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, false, 24);
                    echo "</h2> ";
                }
                // line 25
                echo "                    ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 25);
                echo "              
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </div>

    <script type=\"text/javascript\">
      var total_item = ";
            // line 32
            echo ($context["count_item"] ?? null);
            echo " ;
      \$(\".sohomeslider-inner-";
            // line 33
            echo ($context["module"] ?? null);
            echo "\").owlCarousel2({
          margin: ";
            // line 34
            echo ($context["margin"] ?? null);
            echo ",
          animateOut: '";
            // line 35
            echo ($context["animateOut"] ?? null);
            echo "',
          animateIn: '";
            // line 36
            echo ($context["animateIn"] ?? null);
            echo "',
          autoplay: ";
            // line 37
            echo ($context["autoplay"] ?? null);
            echo ",
          autoplayTimeout: ";
            // line 38
            echo ($context["autoplayTimeout"] ?? null);
            echo ",
          autoplaySpeed:  ";
            // line 39
            echo ($context["autoplaySpeed"] ?? null);
            echo ",
          smartSpeed: 500,
          autoplayHoverPause: ";
            // line 41
            echo ($context["autoplayHoverPause"] ?? null);
            echo ",
          startPosition: ";
            // line 42
            echo ($context["startPosition"] ?? null);
            echo ",
          mouseDrag:  ";
            // line 43
            echo ($context["mouseDrag"] ?? null);
            echo ",
          touchDrag: ";
            // line 44
            echo ($context["touchDrag"] ?? null);
            echo ",
          dots: ";
            // line 45
            echo ($context["dots"] ?? null);
            echo ",
          autoWidth: false,
          autoHeight: false,
          dotClass: \"owl2-dot\",
          dotsClass: \"owl2-dots\",
          loop: ";
            // line 50
            echo ($context["loop"] ?? null);
            echo ",
          navText: [\"Next\", \"Prev\"],
          navClass: [\"owl2-prev\", \"owl2-next\"],
          responsive: {
          0:{ items: ";
            // line 54
            echo ($context["nb_column4"] ?? null);
            echo ",
            nav: total_item <= ";
            // line 55
            echo ($context["nb_column4"] ?? null);
            echo " ? false : ((";
            echo ($context["nav"] ?? null);
            echo " ) ? true: false),
          },
          480:{ items: ";
            // line 57
            echo ($context["nb_column3"] ?? null);
            echo ",
            nav: total_item <= ";
            // line 58
            echo ($context["nb_column3"] ?? null);
            echo " ? false : ((";
            echo ($context["nav"] ?? null);
            echo " ) ? true: false),
          },
          768:{ items: ";
            // line 60
            echo ($context["nb_column2"] ?? null);
            echo ",
            nav: total_item <= ";
            // line 61
            echo ($context["nb_column2"] ?? null);
            echo " ? false : ((";
            echo ($context["nav"] ?? null);
            echo " ) ? true: false),
          },
          992:{ items: ";
            // line 63
            echo ($context["nb_column1"] ?? null);
            echo ",
            nav: total_item <= ";
            // line 64
            echo ($context["nb_column1"] ?? null);
            echo " ? false : ((";
            echo ($context["nav"] ?? null);
            echo " ) ? true: false),
          },
          1200:{ items: ";
            // line 66
            echo ($context["nb_column0"] ?? null);
            echo ",
            nav: total_item <= ";
            // line 67
            echo ($context["nb_column0"] ?? null);
            echo " ? false : ((";
            echo ($context["nav"] ?? null);
            echo " ) ? true: false),
          }
        },
      });
    </script>
    </div>
    ";
        } else {
            // line 73
            echo "  
        ";
            // line 74
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_noitem"], "method", false, false, false, 74);
            echo "
    ";
        }
        // line 76
        echo "</div> <!--/.modcontent-->

";
        // line 78
        if (($context["post_text"] ?? null)) {
            // line 79
            echo "  <div class=\"form-group\">
    ";
            // line 80
            echo ($context["post_text"] ?? null);
            echo "
  </div>
";
        }
        // line 83
        echo "

</div> 
";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_home_slider/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 83,  269 => 80,  266 => 79,  264 => 78,  260 => 76,  255 => 74,  252 => 73,  240 => 67,  236 => 66,  229 => 64,  225 => 63,  218 => 61,  214 => 60,  207 => 58,  203 => 57,  196 => 55,  192 => 54,  185 => 50,  177 => 45,  173 => 44,  169 => 43,  165 => 42,  161 => 41,  156 => 39,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  123 => 29,  112 => 25,  106 => 24,  98 => 21,  90 => 20,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  65 => 11,  59 => 9,  57 => 8,  54 => 7,  48 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_home_slider/default.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_home_slider\\default.twig");
    }
}
