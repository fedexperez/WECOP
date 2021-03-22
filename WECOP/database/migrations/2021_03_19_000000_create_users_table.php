<?php

/** 
 * @author Shiroke-013
 * PHP version: 8.0.2
 * */

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
            $table->text('credit_card');
            $table->text('email');
            $table->text('password');
            $table->unsignedInteger('address_id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('review_id');
            $table->text('role');
            $table->timestamps()->useCurrent();;
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