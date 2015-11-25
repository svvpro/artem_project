<?php
Admin::model('App\Service')->title('Услуги')->display(function ()
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
        FormItem::ckeditor('description', 'Описани услуг')->required(),
    ]);
    return $form;
});