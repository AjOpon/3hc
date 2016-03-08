<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items',function(Blueprint $table ){
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->double('discount',3, 2);
            $table->double('price',15, 8);
            $table->integer('stock');
            $table->string('category');
            $table->string('contID');//it
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
        Schema::drop('items');//
    }
}
