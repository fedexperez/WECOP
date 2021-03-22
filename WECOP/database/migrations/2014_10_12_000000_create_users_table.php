<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('user_name');
            $table->text('name');
            $table->text('credit_card')->nullable();
            $table->text('email');
            $table->text('password');
            $table->unsignedInteger('address_id')->references('id')->on('addresses');
            $table->unsignedInteger('order_id')->references('id')->on('orders');;
            $table->unsignedInteger('review_id')->references('id')->on('reviews');;
            $table->text('role');
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
        Schema::dropIfExists('users');
    }
}
