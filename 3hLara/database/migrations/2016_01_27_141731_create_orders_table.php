<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->dateTime('ord_time');
            $table->dateTime('due_ord_time');
            $table->double('item_price',12,2);
            $table->integer('item_quantity');
            $table->char('ord_status',4);
            $table->char('ord_urgency',3);
            $table->string('ord_payment');
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
        Schema::drop('orders');//
    }
}
