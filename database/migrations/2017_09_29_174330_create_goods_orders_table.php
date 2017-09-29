<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_orders', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('goods_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->integer('amount')->unsigned();
            $table->foreign('goods_id')
                    ->references('id')->on('goods');
            $table->foreign('order_id')
                    ->references('id')->on('order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods_orders');
    }
}
