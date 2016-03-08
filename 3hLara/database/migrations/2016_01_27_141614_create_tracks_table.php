<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usr_id')->unsigned();
            $table->string('usr_role');
            $table->string('artist');
            $table->string('title');
            $table->text('contr_artists');
            $table->string('project');//album,mixtape or mixtape
            $table->date('release_on');
            $table->string('org');//label
            $table->string('genre');
            $table->string('producer');
            $table->string('contID')->unique();//tr
            $table->mediumText('body');
            $table->integer('views');
            $table->dateTime('published_at');
            $table->timestamps();


        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tracks');//
    }
}
