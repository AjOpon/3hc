<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usr_id')->unsigned();
            $table->integer('art_id')->unsigned();
            $table->integer('vid_id')->unsigned();
            $table->integer('track_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->integer('image_id')->unsigned();
            $table->integer('events_id')->unsigned();
            $table->string('contID')->unique();
            $table->timestamps();


        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('content'); //
    }
}
