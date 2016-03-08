<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages',function(Blueprint $table ){
            $table->increments('id');
            $table->integer('usr_id')->unsigned();
            $table->integer('sender')->unsigned();
            $table->string('title');
            $table->integer('type');
            $table->integer('status');
            $table->longtext('message');
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
        Schema::drop('messages');//
    }
}
