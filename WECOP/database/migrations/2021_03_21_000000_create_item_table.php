<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('subtotal');
            $table->integer('quantity');
            $table->bigInteger('order')->unsigned();
            $table->foreign('order')->references('id')->on('orders');
            $table->bigInteger('eco_product')->unsigned();
            $table->foreign('eco_product')->references('id')->on('eco_products');
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
        Schema::dropIfExists('items');
    }
}