<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSitemenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitemenus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('url', 100);
            $table->boolean('published')->default(0);
            $table->integer('weight')->unsigned();
            $table->string('meta_key');
            $table->string('meta_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sitemenus');
    }
}
