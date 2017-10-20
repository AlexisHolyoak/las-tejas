<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/*
modified by: Alexis Holyoak 19/10/17
*/
class CreateOrderDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrderDishes', function (Blueprint $table) {
            $table->increments('idOrderDish');
            $table->integer('idDish')->unsigned();
            $table->integer('idOrder')->unsigned();
            $table->string('statusOrderDish');
            $table->foreign('idDish')->references("idDish")->on('Dishes');
            $table->foreign('idOrder')->references("idOrder")->on('Orders');
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
        Schema::dropIfExists('OrderDishes');
    }
}
