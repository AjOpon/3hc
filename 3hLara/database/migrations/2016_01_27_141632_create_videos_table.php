<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usr_id')->unsigned();
            $table->string('usr_role');
            $table->string('artist');
            $table->string('title');
            $table->text('description');
            $table->string('format');
            $table->integer('mb_size');
            $table->string('genre');
            $table->string('contID')->unique();//tv
            $table->integer('views');
            $table->dateTime('published_at');
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
        Schema::drop('videos');//
    }
}
