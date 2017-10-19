<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrderDetails', function (Blueprint $table) {
            $table->increments('idOrderDetail');
            $table->integer('idDish')->unsigned();
            $table->foreign('idDish')->references("idDish")->on('Dishes')->onDelete('cascade');
            $table->integer('numberDishes',11);
            $table->float('amount');
            $table->integer('idOrder')->unsigned();
            $table->foreign('idOrder')->references("idOrder")->on('Orders')->onDelete('cascade');
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
        Schema::dropIfExists('OrderDetails');
    }
}
