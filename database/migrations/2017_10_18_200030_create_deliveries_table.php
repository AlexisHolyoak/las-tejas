<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Deliveries', function (Blueprint $table) {
            $table->increments('idDelivery');
            $table->date('estimatedTime');
            $table->integer('idPerson');
            $table->integer('idVoucher');
            $table->foreign('idPerson')->references('idPerson')->on('Perons');
            $table->foreign('idVoucher')->references('idVoucher')->on('Vouchers');
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
        Schema::dropIfExists('Deliveries');
    }
}
