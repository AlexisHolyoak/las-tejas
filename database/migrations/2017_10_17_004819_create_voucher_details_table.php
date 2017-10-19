<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoucherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_details', function (Blueprint $table) {
            $table->increments('idVoucherDetails');
            $table->string('subtotal',45);
            $table->string('discount',45);
            $table->string('baksheesh',45);
            $table->string('total',45);
            $table->integer('idRequests')->unsigned();
            $table->integer('idVoucher')->unsigned();
            $table->foreign('idRequests')->references('idRequests')->on('Requests')->onDelete('cascade');
            $table->foreign('idVouchers')->references('idVouchers')->on('Vouchers')->onDelete('cascade');
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
        Schema::dropIfExists('voucher_details');
    }
}
