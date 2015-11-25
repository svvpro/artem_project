<?php
Admin::model('App\About')->title('About')->display(function ()
{
    $display = AdminDisplay::table();
    $display->columns([
        Column::string('description')->label('description'),
    ]);
    return $display;
})->createAndEdit(function ()
{
    $form = AdminForm::form();
    $form->items([
        FormItem::ckeditor('description', 'Description')->required(),
    ]);
    return $form;
});