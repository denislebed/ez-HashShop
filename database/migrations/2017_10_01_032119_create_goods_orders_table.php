<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsOrdersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('goods_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_id')->unsigned();
            $table->integer('orders_id')->unsigned();
            $table->integer('amount')->unsigned();
            $table->timestamps();
        });
        Schema::table('goods_orders', function (Blueprint $table) {
            $table->foreign('goods_id')
                    ->references('id')->on('goods')->onDelete('cascade');
            $table->foreign('orders_id')
                    ->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('goods_orders');
    }

}
