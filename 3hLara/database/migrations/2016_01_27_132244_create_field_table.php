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
            $table->integer('usr_id')->unsigned();
            $table->string('usr_fname');
            $table->string('usr_lname');
            $table->string('usr_role');
            $table->char('usr_level');
            $table->string('type');
            $table->string('name');
            $table->string('desc');
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
        Schema::drop('fields');//
    }
}
