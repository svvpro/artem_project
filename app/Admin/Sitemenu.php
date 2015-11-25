<?php
Admin::model('App\Sitemenu')->title('Menu')->display(function ()
{
    $display = AdminDisplay::table();
    $display->columns([
        Column::string('name')->label('name'),
        Column::string('url')->label('url'),
        Column::string('meta_key')->label('meta keys'),
        Column::string('meta_desc')->label('meta desc'),
        Column::string('weight')->label('weight'),
    ]);
    return $display;
})->createAndEdit(function ()
{
    $form = AdminForm::form();
    $form->items([
        FormItem::text('name', 'Name')->required(),
        FormItem::text('url', 'Url')->required(),
        FormItem::text('meta_key', 'Meta keys')->required(),
        FormItem::text('meta_desc', 'Meta desc')->required(),
        FormItem::text('weight', 'Weight')->required(),
        FormItem::checkbox('published', 'Active'),
    ]);
    return $form;
});