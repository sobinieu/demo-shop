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

/* so-sgame/template/extension/module/so_listing_tabs/default/default_js.twig */
class __TwigTemplate_0393ab1dec71a826927023458156913b710dbdb4aaa2183c70097ebee6dd83a2 extends \Twig\Template
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
//<![CDATA[
jQuery(document).ready(function (\$) {
\t;
\t(function (element) {
\t\tvar \$element = \$(element),
\t\t\t\$tab = \$('.ltabs-tab', \$element),
\t\t\t\$tab_label = \$('.ltabs-tab-label', \$tab),
\t\t\t\$tabs = \$('.ltabs-tabs', \$element),
\t\t\tajax_url = \$tabs.parents('.ltabs-tabs-container').attr('data-ajaxurl'),
\t\t\teffect = \$tabs.parents('.ltabs-tabs-container').attr('data-effect'),
\t\t\tdelay = \$tabs.parents('.ltabs-tabs-container').attr('data-delay'),
\t\t\tduration = \$tabs.parents('.ltabs-tabs-container').attr('data-duration'),
\t\t\ttype_source = \$tabs.parents('.ltabs-tabs-container').attr('data-type_source'),
\t\t\t\$items_content = \$('.ltabs-items', \$element),
\t\t\t\$items_inner = \$('.ltabs-items-inner', \$items_content),
\t\t\t\$items_first_active = \$('.ltabs-items-selected', \$element),
\t\t\t\$load_more = \$('.ltabs-loadmore', \$element),
\t\t\t\$btn_loadmore = \$('.ltabs-loadmore-btn', \$load_more),
\t\t\t\$select_box = \$('.ltabs-selectbox', \$element),
\t\t\t\$tab_label_select = \$('.ltabs-tab-selected', \$element),
\t\t\tsetting = '";
        // line 22
        echo ($context["setting"] ?? null);
        echo "',
\t\t\ttype_show = '";
        // line 23
        echo ($context["type_show"] ?? null);
        echo "';
\t\t\t
\t\tenableSelectBoxes();
\t\tfunction enableSelectBoxes() {
\t\t\t\$tab_wrap = \$('.ltabs-tabs-wrap', \$element),
\t\t\t\t\$tab_label_select.html(\$('.ltabs-tab', \$element).filter('.tab-sel').children('.ltabs-tab-label').html());
\t\t\tif (\$(window).innerWidth() <= 991) {
\t\t\t\t\$tab_wrap.addClass('ltabs-selectbox');
\t\t\t} else {
\t\t\t\t\$tab_wrap.removeClass('ltabs-selectbox');
\t\t\t}
\t\t}

\t\t\$('span.ltabs-tab-selected, span.ltabs-tab-arrow', \$element).click(function () {
\t\t\tif (\$('.ltabs-tabs', \$element).hasClass('ltabs-open')) {
\t\t\t\t\$('.ltabs-tabs', \$element).removeClass('ltabs-open');
\t\t\t} else {
\t\t\t\t\$('.ltabs-tabs', \$element).addClass('ltabs-open');
\t\t\t}
\t\t});

\t\t\$(window).resize(function () {
\t\t\tif (\$(window).innerWidth() <= 991) {
\t\t\t\t\$('.ltabs-tabs-wrap', \$element).addClass('ltabs-selectbox');
\t\t\t} else {
\t\t\t\t\$('.ltabs-tabs-wrap', \$element).removeClass('ltabs-selectbox');
\t\t\t}
\t\t});

\t\tfunction showAnimateItems(el) {
\t\t\tvar \$_items = \$('.new-ltabs-item', el), nub = 0;
\t\t\t\$('.ltabs-loadmore-btn', el).fadeOut('fast');
\t\t\t\$_items.each(function (i) {
\t\t\t\tnub++;
\t\t\t\tswitch(effect) {
\t\t\t\t\tcase 'none' : \$(this).css({'opacity':'1','filter':'alpha(opacity = 100)'}); break;
\t\t\t\t\tdefault: animatesItems(\$(this),nub*delay,i,el);
\t\t\t\t}
\t\t\t\tif (i == \$_items.length - 1) {
\t\t\t\t\t\$('.ltabs-loadmore-btn', el).fadeIn(3000);
\t\t\t\t}
\t\t\t\t\$(this).removeClass('new-ltabs-item');
\t\t\t});
\t\t}

\t\tfunction animatesItems(\$this,fdelay,i,el) {
\t\t\tvar \$_items = \$('.ltabs-item', el);
\t\t\t\$this.stop(true, true).attr(\"style\",
\t\t\t\t\"-webkit-animation:\" + effect +\" \"+ duration +\"ms;\"
\t\t\t\t+ \"-moz-animation:\" + effect +\" \"+ duration +\"ms;\"
\t\t\t\t+ \"-o-animation:\" + effect +\" \"+ duration +\"ms;\"
\t\t\t\t+ \"-moz-animation-delay:\" + fdelay + \"ms;\"
\t\t\t\t+ \"-webkit-animation-delay:\" + fdelay + \"ms;\"
\t\t\t\t+ \"-o-animation-delay:\" + fdelay + \"ms;\"
\t\t\t\t+ \"animation-delay:\" + fdelay + \"ms;\").delay(fdelay).animate({
\t\t\t\t\topacity: 1,
\t\t\t\t\tfilter: 'alpha(opacity = 100)'
\t\t\t\t}, {
\t\t\t\t\tdelay: 1000
\t\t\t\t});
\t\t\tif (i == (\$_items.length - 1)) {
\t\t\t\t\$(\".ltabs-items-inner\").addClass(\"play\");
\t\t\t}
\t\t}
\t\tif (type_show == 'loadmore') {
\t\t\tshowAnimateItems(\$items_first_active);
\t\t}
\t\t\$tab.on('click.ltabs-tab', function () {
\t\t\tvar \$this = \$(this);
\t\t\tif (\$this.hasClass('tab-sel')) return false;
\t\t\tif (\$this.parents('.ltabs-tabs').hasClass('ltabs-open')) {
\t\t\t\t\$this.parents('.ltabs-tabs').removeClass('ltabs-open');
\t\t\t}
\t\t\t\$tab.removeClass('tab-sel');
\t\t\t\$this.addClass('tab-sel');
\t\t\tvar items_active = \$this.attr('data-active-content-l');
\t\t\tvar _items_active = \$(items_active,\$element);
\t\t\t\$items_content.removeClass('ltabs-items-selected');
\t\t\t_items_active.addClass('ltabs-items-selected');
\t\t\t\$tab_label_select.html(\$tab.filter('.tab-sel').children('.ltabs-tab-label').html());
\t\t\tvar \$loading = \$('.ltabs-loading', _items_active);
\t\t\tvar loaded = _items_active.hasClass('ltabs-items-loaded');
\t\t\ttype_show =\$tabs.parents('.ltabs-tabs-container').attr('data-type_show');
\t\t\tif (!loaded && !_items_active.hasClass('ltabs-process')) {
\t\t\t\t_items_active.addClass('ltabs-process');
\t\t\t\tvar category_id \t\t= \$this.attr('data-category-id');
\t\t\t\t\$loading.show();
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: 'POST',
\t\t\t\t\turl: ajax_url,
\t\t\t\t\tdata: {
\t\t\t\t\t\tis_ajax_listing_tabs: 1,
\t\t\t\t\t\tajax_reslisting_start: 0,
\t\t\t\t\t\tcategoryid: category_id,
\t\t\t\t\t\tsetting : setting,
\t\t\t\t\t\tlbmoduleid: ";
        // line 118
        echo ($context["moduleid"] ?? null);
        echo "
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (data) {
\t\t\t\t\t\tif (data.items_markup != '') {
\t\t\t\t\t\t\t\$('.ltabs-loading', _items_active).replaceWith(data.items_markup);
\t\t\t\t\t\t\t_items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
\t\t\t\t\t\t\t\$loading.remove();
\t\t\t\t\t\t\tif (type_show != 'slider') {
\t\t\t\t\t\t\t\tshowAnimateItems(_items_active);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tupdateStatus(_items_active);
\t\t\t\t\t\t}
\t\t\t\t\t\tif(typeof(_SoQuickView) != 'undefined'){
\t\t\t\t\t\t\t_SoQuickView();
\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t},
\t\t\t\t\tdataType: 'json'
\t\t\t\t});

\t\t\t} else {
\t\t\t\tif (type_show == 'loadmore') {
\t\t\t\t\t\$('.ltabs-item', \$items_content).removeAttr('style').addClass('new-ltabs-item');
\t\t\t\t\tshowAnimateItems(_items_active);
\t\t\t\t}else{
\t\t\t\t\t var owl = \$('.owl2-carousel' , _items_active);
\t\t\t\t\t owl = owl.data('owlCarousel2');
\t\t\t\t\t if (typeof owl !== 'undefined') {
\t\t\t\t\t\towl.onResize();
\t\t\t\t\t }
\t\t\t\t}
\t\t\t}
\t\t});

\t\tfunction updateStatus(\$el) {
\t\t\t\$('.ltabs-loadmore-btn', \$el).removeClass('loading');
\t\t\tvar countitem = \$('.ltabs-item', \$el).length;
\t\t\t\$('.ltabs-image-loading', \$el).css({display: 'none'});
\t\t\t\$('.ltabs-loadmore-btn', \$el).parent().attr('data-rl_start', countitem);
\t\t\tvar rl_total = \$('.ltabs-loadmore-btn', \$el).parent().attr('data-rl_total');
\t\t\tvar rl_load = \$('.ltabs-loadmore-btn', \$el).parent().attr('data-rl_load');
\t\t\tvar rl_allready = \$('.ltabs-loadmore-btn', \$el).parent().attr('data-rl_allready');

\t\t\tif (countitem >= rl_total) {
\t\t\t\t\$('.ltabs-loadmore-btn', \$el).addClass('loaded');
\t\t\t\t\$('.ltabs-image-loading', \$el).css({display: 'none'});
\t\t\t\t\$('.ltabs-loadmore-btn', \$el).attr('data-label', rl_allready);
\t\t\t\t\$('.ltabs-loadmore-btn', \$el).removeClass('loading');
\t\t\t}
\t\t}

\t\t\$btn_loadmore.on('click.loadmore', function () {
\t\t\tvar \$this = \$(this);
\t\t\tif (\$this.hasClass('loaded') || \$this.hasClass('loading')) {
\t\t\t\treturn false;
\t\t\t} else {
\t\t\t\t\$this.addClass('loading');
\t\t\t\t\$('.ltabs-image-loading', \$this).css({display: 'inline-block'});
\t\t\t\tvar rl_start \t\t\t\t= \$this.parent().attr('data-rl_start'),
\t\t\t\t\trl_ajaxurl \t\t\t\t= \$this.parent().attr('data-ajaxurl'),
\t\t\t\t\teffect \t\t\t\t\t= \$this.parent().attr('data-effect'),
\t\t\t\t\tcategory_id \t\t\t= \$this.parent().attr('data-categoryid'),
\t\t\t\t\titems_active \t\t\t= \$this.parent().attr('data-active-content');
\t\t\t\t\t
\t\t\t\tvar _items_active = \$(items_active,\$element);
\t\t\t\t
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: 'POST',
\t\t\t\t\turl: rl_ajaxurl,
\t\t\t\t\tdata: {
\t\t\t\t\t\tis_ajax_listing_tabs: 1,
\t\t\t\t\t\tajax_reslisting_start: rl_start,
\t\t\t\t\t\tcategoryid: category_id,
\t\t\t\t\t\tsetting: setting,
\t\t\t\t\t\tlbmoduleid: ";
        // line 192
        echo ($context["moduleid"] ?? null);
        echo "
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (data) {
\t\t\t\t\t\tif (data.items_markup != '') {
\t\t\t\t\t\t\t\$(\$(data.items_markup).html()).insertAfter(\$('.ltabs-item', _items_active).nextAll().last());
\t\t\t\t\t\t\t\$('.ltabs-image-loading', \$this).css({display: 'none'});
\t\t\t\t\t\t\tshowAnimateItems(_items_active);
\t\t\t\t\t\t\tupdateStatus(_items_active);
\t\t\t\t\t\t}
\t\t\t\t\t\tif(typeof(_SoQuickView) != 'undefined'){
\t\t\t\t\t\t\t_SoQuickView();
\t\t\t\t\t\t}
\t\t\t\t\t}, dataType: 'json'
\t\t\t\t});
\t\t\t}
\t\t\treturn false;
\t\t});
\t})('#";
        // line 209
        echo ($context["tag_id"] ?? null);
        echo "');
});
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "so-sgame/template/extension/module/so_listing_tabs/default/default_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 209,  239 => 192,  162 => 118,  64 => 23,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-sgame/template/extension/module/so_listing_tabs/default/default_js.twig", "C:\\OSPanel\\domains\\gamer2\\catalog\\view\\theme\\so-sgame\\template\\extension\\module\\so_listing_tabs\\default\\default_js.twig");
    }
}
