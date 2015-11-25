<?php

/*
 * This is a simple example of the main features.
 * For full list see documentation.
 */

Admin::model('App\User')->title('Users')->display(function ()
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