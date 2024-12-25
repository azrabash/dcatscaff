<?php

use Dcat\Admin\Admin;
use Dcat\Admin\Grid;
use Dcat\Admin\Form;
use Dcat\Admin\Grid\Filter;
use Dcat\Admin\Grid\Tools;
use Dcat\Admin\Show;
use Dcat\Admin\Layout\Menu;
use App\Models\User;
use App\Support\Site;
use Dcat\Admin\Layout\Navbar;

/**
 * Dcat-admin - admin builder based on Laravel.
 * @author jqh <https://github.com/jqhph>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 *
 * extend custom field:
 * Dcat\Admin\Form::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Column::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Filter::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

Filter::resolving(function (Filter $filter) {
    $filter->panel(false);
    $filter->expand(false);
});

$script = <<<'JS'
        $("#grid-table > tbody > tr").on("dblclick",function(event) {
           var obj = $(this).find(".feather.icon-edit");

           if (obj.attr('unique') == "true") {
               return
           }
           if (obj.length == 1) {
               obj.trigger("click")
               obj.attr('unique',true);
           }
        })
JS;
Admin::script($script);

