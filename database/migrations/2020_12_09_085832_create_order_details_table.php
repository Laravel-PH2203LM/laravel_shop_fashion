<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {

            $table->integer('order_id');
            $table->string('name');
            $table->integer('product_id')->unsigned();
            $table->integer('qty');
            $table->integer('color_id');
            $table->integer('size_id');
            $table->double('amount');
            $table->double('price_shipping');
            $table->double('total');
            $table->string('images');
            $table->integer('status');

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
        Schema::dropIfExists('order_details');
    }
}
