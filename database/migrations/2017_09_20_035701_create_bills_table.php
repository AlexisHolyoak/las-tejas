<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bills', function (Blueprint $table) {
            $table->increments('idBill');
            $table->integer('idRequest')->unsigned();
            $table->integer('idUser')->unsigned();
            $table->dateTime('dateBill');
            $table->double('disccountBill',10,2)->nullable();
            $table->double('igvBill',10,2);
            $table->integer('statusBill')->unsigned();
            $table->foreign('idRequest')->references('idRequest')->on('Requests');
            $table->foreign('idUser')->references('idUser')->on('Users');
            $table->timestamps();
        });
    }

    /**s
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Bills');
    }
}
