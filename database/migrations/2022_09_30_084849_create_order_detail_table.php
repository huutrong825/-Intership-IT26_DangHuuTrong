<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {            
            $table->increments('detail_id');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('order_id')->on('order');
            $table->string('product_id',50);
            $table->integer('price_buy');
            $table->integer('quanity');
            $table->string('shop_id',50);
            $table->integer('receiver_id');
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
        Schema::dropIfExists('order_detail');
    }
};
