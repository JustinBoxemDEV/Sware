<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userID')->unsigned();
            $table->integer('packageID')->unsigned();
            $table->integer('service1ID')->unsigned()->nullable();
            $table->integer('service2ID')->unsigned()->nullable();
            $table->integer('service3ID')->unsigned()->nullable();
            $table->boolean('paid')->default(0);
            $table->timestamps();
        });
        
        Schema::table('orders', function (Blueprint $table)
        {
            $table->foreign('userID')->references('id')->on('users');   
            $table->foreign('packageID')->references('id')->on('packages');
            $table->foreign('service1ID')->references('id')->on('services');
            $table->foreign('service2ID')->references('id')->on('services');
            $table->foreign('service3ID')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
