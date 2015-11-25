<?php
Admin::model('App\About')->title('About')->display(function ()
{
    $display = AdminDisplay::table();
    $display->columns([
        Column::string('meta_key')->label('meta keys'),
        Column::string('meta_desc')->label('meta desc'),
        Column::string('description')->label('description'),
    ]);
    return $display;
})->createAndEdit(function ()
{
    $form = AdminForm::form();
    $form->items([
        FormItem::text('meta_key', 'Meta keys')->required(),
        FormItem::text('meta_desc', 'Meta desc')->required(),
        FormItem::ckeditor('description', 'Description')->required(),
    ]);
    return $form;
});