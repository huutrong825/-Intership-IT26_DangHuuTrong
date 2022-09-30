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
        Schema::create('order', function (Blueprint $table) {
            $table->increments('order_id')->unique();
            $table->string('order_shop',40);
            $table->integer('customer_id');
            $table->integer('total_price');
            $table->tinyInteger('payment_method');
            $table->integer('ship_change')->nullable();
            $table->integer('tax')->nullable();
            $table->dateTime('order_date');
            $table->dateTime('shipment_date')->nullable();
            $table->dateTime('cancel_date')->nullable();
            $table->tinyInteger('order_status');
            $table->string('note_customer',255)->nullable();
            $table->string('error_code_api',20)->nullable();
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
        Schema::dropIfExists('order');
    }
};
