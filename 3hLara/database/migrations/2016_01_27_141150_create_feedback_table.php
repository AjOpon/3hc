<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usr_id')->unsigned();
            $table->integer('val');
            $table->string('type');//comment ,response, rating
            $table->string('contID');//any article ,video,track
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
       Schema::drop('feedback'); //
    }
}
