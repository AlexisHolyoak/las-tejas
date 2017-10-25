<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/*
modified by: Alexis Holyoak 19/10/17
*/
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
            $table->date('dateDelivery');
            $table->string('statusDelivery');
            $table->string('referenceDelivery');
            $table->integer('idUser')->unsigned();
            $table->integer('idBill')->unsigned();
            $table->foreign('idUser')->references('idUser')->on('Users');
            $table->foreign('idBill')->references('idBill')->on('Bills');
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
