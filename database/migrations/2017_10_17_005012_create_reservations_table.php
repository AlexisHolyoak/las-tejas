<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reservations', function (Blueprint $table) {
            $table->increments('idReservation');
            $table->dateTime('reservationDate');
            $table->integer('idPerson')->unsigned();
            $table->foreign('idPerson')->references("idPerson")->on('People')->onDelete('cascade');
            $table->integer('idTable')->unsigned();
            $table->foreign('idTable')->references("idTable")->on('Tables')->onDelete('cascade');
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
        Schema::dropIfExists('Reservations');
    }
}
