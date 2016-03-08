<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usr_id')->unsigned();
            $table->string('usr_role');
            $table->string('title');
            $table->string('caption');
            $table->string('format');
            $table->integer('mb_size');
            $table->string('contID')->unique();
            $table->timestamps();


        });  //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drops('images');//
    }
}
