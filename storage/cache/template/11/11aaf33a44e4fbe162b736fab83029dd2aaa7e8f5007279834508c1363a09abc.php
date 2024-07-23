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

/* extension/module/modification_manager/list.twig */
class __TwigTemplate_c7cf56b98d85a72edcaf8c3ba90aa85358458516298d8715e4bd9b826be26591 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["refresh"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-refresh\"></i></a>
      \t<a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
      \t<a href=\"";
        // line 7
        echo ($context["clear"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_clear"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-eraser\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-modification').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
       ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo ($context["text_refresh"] ?? null);
        echo "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 32
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-log\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_log"] ?? null);
        echo "</a></li>
          ";
        // line 38
        if (($context["modified_files"] ?? null)) {
            echo "<li><a href=\"#tab-files\" data-toggle=\"tab\">";
            echo ($context["tab_files"] ?? null);
            echo "</a></li>";
        }
        // line 39
        echo "          ";
        if (($context["error_log"] ?? null)) {
            echo "<li><a href=\"#tab-error\" data-toggle=\"tab\">";
            echo ($context["tab_error"] ?? null);
            echo "</a></li>";
        }
        // line 40
        echo "        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-general\">
            <form id=\"form-filter\" method=\"get\" class=\"well\">
\t\t      <div class=\"row\">
\t\t        <div class=\"col-sm-4\">
\t\t          <div class=\"form-group\">
\t\t            <label class=\"control-label\" for=\"input-name\">";
        // line 47
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t                <input type=\"text\" name=\"filter_name\" value=\"";
        // line 48
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t              </div>
\t            </div>
\t            <div class=\"col-sm-4\">
\t              <div class=\"form-group\">
\t                <label class=\"control-label\" for=\"input-author\">";
        // line 53
        echo ($context["entry_author"] ?? null);
        echo "</label>
\t                <input type=\"text\" name=\"filter_author\" value=\"";
        // line 54
        echo ($context["filter_author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\" />
\t              </div>
\t            </div>
\t            <div class=\"col-sm-4\">
\t              <div class=\"form-group\">
\t                <label class=\"control-label\" for=\"input-xml\">";
        // line 59
        echo ($context["entry_xml"] ?? null);
        echo "</label>
\t                <input type=\"text\" name=\"filter_xml\" value=\"";
        // line 60
        echo ($context["filter_xml"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_xml"] ?? null);
        echo "\" id=\"input-xml\" class=\"form-control\" />
\t              </div>
\t            </div>
\t            <div class=\"col-sm-12\">
\t              <div class=\"btn-group pull-right\">
\t\t            <button type=\"submit\" id=\"button-filter\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
        // line 65
        echo ($context["button_filter"] ?? null);
        echo "\"><i class=\"fa fa-search\"></i></button>
\t\t            ";
        // line 66
        if ((( !twig_test_empty(($context["filter_name"] ?? null)) ||  !twig_test_empty(($context["filter_author"] ?? null))) ||  !twig_test_empty(($context["filter_xml"] ?? null)))) {
            echo "<a href=\"";
            echo ($context["reset_url"] ?? null);
            echo "\" id=\"button-filter\" class=\"btn btn-danger\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_reset"] ?? null);
            echo "\"><i class=\"fa fa-times\"></i></a>";
        }
        // line 67
        echo "\t\t          </div>
\t            </div>
\t          </div>
\t        </form>
            <form action=\"";
        // line 71
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-modification\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></th>
                      <th class=\"text-left\"><a href=\"";
        // line 77
        echo ($context["sort_name"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_name"] ?? null);
        echo "</a></th>
                      <th class=\"text-left\"><a href=\"";
        // line 78
        echo ($context["sort_author"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "author")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_author"] ?? null);
        echo "</a></th>
                      <th class=\"text-center\"><a href=\"";
        // line 79
        echo ($context["sort_version"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "version")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_version"] ?? null);
        echo "</a></th>
                      <th class=\"text-center\"><a href=\"";
        // line 80
        echo ($context["sort_status"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "status")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_status"] ?? null);
        echo "</a></th>
                      <th class=\"text-center\"><a href=\"";
        // line 81
        echo ($context["sort_date_added"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "date_added")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_added"] ?? null);
        echo "</a></th>
                      <th class=\"text-center\"><a href=\"";
        // line 82
        echo ($context["sort_date_modified"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "date_modified")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_modified"] ?? null);
        echo "</a></th>
                      <th class=\"text-right\">";
        // line 83
        echo ($context["column_action"] ?? null);
        echo "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 87
        if (($context["modifications"] ?? null)) {
            // line 88
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modifications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modification"]) {
                // line 89
                echo "                    <tr>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 90);
                echo "\"";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["modification"], "modification_id", [], "any", false, false, false, 90), ($context["selected"] ?? null))) {
                    echo " checked=\"checked\" ";
                }
                echo " /></td>
                      <td class=\"text-left\">";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "name", [], "any", false, false, false, 91);
                echo "</td>
                      <td class=\"text-left\">";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "author", [], "any", false, false, false, 92);
                echo "</td>
                      <td class=\"text-center\">";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "version", [], "any", false, false, false, 93);
                echo "</td>
                      <td class=\"text-center\"><i class=\"fa fa-";
                // line 94
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "enabled", [], "any", false, false, false, 94)) {
                    echo "check-circle text-success";
                } else {
                    echo "times-circle text-warning";
                }
                echo " fa-2x\"></i></td>
                      <td class=\"text-center\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "date_added", [], "any", false, false, false, 95);
                echo "</td>
                      <td class=\"text-center\">";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["modification"], "date_modified", [], "any", false, false, false, 96);
                echo "</td>
                      <td class=\"text-right\">
                      ";
                // line 98
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "edit", [], "any", false, false, false, 98)) {
                    // line 99
                    echo "        \t            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "edit", [], "any", false, false, false, 99);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                      ";
                } else {
                    // line 101
                    echo "\t\t\t            <button type=\"button\" class=\"btn btn-info\" disabled=\"disabled\"><i class=\"fa fa-link\"></i></button>
\t\t              ";
                }
                // line 103
                echo "
      \t              ";
                // line 104
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 104)) {
                    // line 105
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "link", [], "any", false, false, false, 105);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_link"] ?? null);
                    echo "\" class=\"btn btn-info\" target=\"_blank\"><i class=\"fa fa-link\"></i></a>
                      ";
                } else {
                    // line 107
                    echo "                        <button type=\"button\" class=\"btn btn-info\" disabled=\"disabled\"><i class=\"fa fa-link\"></i></button>
                      ";
                }
                // line 109
                echo "\t\t\t\t\t   
\t\t\t\t\t   ";
                // line 110
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "download", [], "any", false, false, false, 110)) {
                    // line 111
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "download", [], "any", false, false, false, 111);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_download"] ?? null);
                    echo "\" class=\"btn btn-info\" target=\"_blank\"><i class=\"fa fa-cloud-download\"></i></a>
                      ";
                } else {
                    // line 113
                    echo "                        <button type=\"button\" class=\"btn btn-info\" disabled=\"disabled\"><i class=\"fa fa-cloud-download\"></i></button>
                      ";
                }
                // line 115
                echo "\t\t\t\t\t  
                      ";
                // line 116
                if (twig_get_attribute($this->env, $this->source, $context["modification"], "enabled", [], "any", false, false, false, 116)) {
                    // line 117
                    echo "                          <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "disable", [], "any", false, false, false, 117);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_disable"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                      ";
                } else {
                    // line 119
                    echo "                          <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["modification"], "enable", [], "any", false, false, false, 119);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_enable"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
                      ";
                }
                // line 120
                echo "</td>
\t\t\t\t\t  
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                    ";
        } else {
            // line 125
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"7\">";
            // line 126
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 129
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 134
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 135
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
          ";
        // line 138
        if (($context["error_log"] ?? null)) {
            // line 139
            echo "          <div class=\"tab-pane\" id=\"tab-error\">
            <p>
              <textarea wrap=\"off\" rows=\"15\" class=\"form-control\">";
            // line 141
            echo ($context["error_log"] ?? null);
            echo "</textarea>
            </p>
            <div class=\"text-right\"><a href=\"";
            // line 143
            echo ($context["clear_log"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</a></div>
          </div>
          ";
        }
        // line 146
        echo "          ";
        if (($context["modified_files"] ?? null)) {
            // line 147
            echo "          <div class=\"tab-pane\" id=\"tab-files\">
          \t<div class=\"table-responsive\">
            <table class=\"table table-bordered table-condensed\">
            \t<thead><tr>
            \t\t<th class=\"text-center\">File</th>
            \t\t<th class=\"text-center\">Modified By</th>
            \t</tr></thead>
            \t<tbody>
            \t";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modified_files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modified_file"]) {
                // line 156
                echo "            \t<tr>
            \t\t<td style=\"vertical-align:top\">";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["modified_file"], "file", [], "any", false, false, false, 157);
                echo "</td>
            \t\t<td>";
                // line 158
                if (twig_get_attribute($this->env, $this->source, $context["modified_file"], "modifications", [], "any", false, false, false, 158)) {
                    // line 159
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["modified_file"], "modifications", [], "any", false, false, false, 159));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["modified_file_modification"]) {
                        // line 160
                        echo "            \t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 160) > 1)) {
                            echo "<br />";
                        }
                        // line 161
                        echo "            \t\t\t\t<b>";
                        echo twig_get_attribute($this->env, $this->source, $context["modified_file_modification"], "name", [], "any", false, false, false, 161);
                        echo "</b> by: ";
                        echo twig_get_attribute($this->env, $this->source, $context["modified_file_modification"], "author", [], "any", false, false, false, 161);
                        echo "
                        ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modified_file_modification'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 163
                    echo "            \t\t";
                }
                echo "</td>
            \t</tr>
            \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modified_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "            \t</tbody>
            </table>
            </div>
            <div class=\"text-right\"><a href=\"";
            // line 169
            echo ($context["clear_log"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</a></div>
          </div>
          ";
        }
        // line 172
        echo "          <div class=\"tab-pane\" id=\"tab-log\">
            <p>
              <textarea wrap=\"off\" rows=\"15\" class=\"form-control\">";
        // line 174
        echo ($context["log"] ?? null);
        echo "</textarea>
            </p>
            <div class=\"text-right\"><a href=\"";
        // line 176
        echo ($context["clear_log"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-filter').on('submit', function() {
\tvar url = 'index.php?route=marketplace/modification&user_token=";
        // line 185
        echo ($context["user_token"] ?? null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();
\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_xml = \$('input[name=\\'filter_xml\\']').val();
\tif (filter_xml) {
\t\turl += '&filter_xml=' + encodeURIComponent(filter_xml);
\t}

\tvar filter_author = \$('input[name=\\'filter_author\\']').val();
\tif (filter_author) {
\t\turl += '&filter_author=' + encodeURIComponent(filter_author);
\t}

\tlocation = url;

\treturn false;
});
//--></script>
";
        // line 207
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/modification_manager/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  621 => 207,  596 => 185,  582 => 176,  577 => 174,  573 => 172,  565 => 169,  560 => 166,  550 => 163,  531 => 161,  526 => 160,  508 => 159,  506 => 158,  502 => 157,  499 => 156,  495 => 155,  485 => 147,  482 => 146,  474 => 143,  469 => 141,  465 => 139,  463 => 138,  457 => 135,  453 => 134,  446 => 129,  440 => 126,  437 => 125,  434 => 124,  425 => 120,  417 => 119,  409 => 117,  407 => 116,  404 => 115,  400 => 113,  392 => 111,  390 => 110,  387 => 109,  383 => 107,  375 => 105,  373 => 104,  370 => 103,  366 => 101,  358 => 99,  356 => 98,  351 => 96,  347 => 95,  339 => 94,  335 => 93,  331 => 92,  327 => 91,  319 => 90,  316 => 89,  311 => 88,  309 => 87,  302 => 83,  290 => 82,  278 => 81,  266 => 80,  254 => 79,  242 => 78,  230 => 77,  221 => 71,  215 => 67,  207 => 66,  203 => 65,  193 => 60,  189 => 59,  179 => 54,  175 => 53,  165 => 48,  161 => 47,  152 => 40,  145 => 39,  139 => 38,  135 => 37,  131 => 36,  124 => 32,  117 => 29,  109 => 25,  106 => 24,  98 => 20,  96 => 19,  90 => 15,  79 => 13,  75 => 12,  70 => 10,  63 => 8,  57 => 7,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/modification_manager/list.twig", "C:\\OSPanel\\domains\\gamer2\\admin\\view\\template\\extension\\module\\modification_manager\\list.twig");
    }
}
