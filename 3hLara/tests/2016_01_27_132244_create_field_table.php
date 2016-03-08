<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usr_id')->unsigned;
            $table->string('usr_fname');
            $table->string('usr_lname');
            $table->string('usr_role');
            $table->char('usr_level');
            $table->string('type');
            $table->string('name');
            $table->string('desc');
            $table->timestamps();

            $table->foreign('usr_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('usr_fname')->references('fname')->on('users')->onDelete('cascade');
            $table->foreign('usr_lname')->references('lname')->on('users')->onDelete('cascade');
            $table->foreign('usr_role')->references('role')->on('users')->onDelete('cascade');
            $table->foreign('usr_level')->references('level')->on('users')->onDelete('cascade');

        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');//
    }
}
