<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vouchers', function (Blueprint $table) {
            $table->increments('idVoucher');
            $table->integer('idOrders')->unsigned();
            $table->dateTime('dateVoucher');
            $table->float('amount', 8, 2);
            $table->float('discount', 8, 2);
            $table->foreign('idOrders')->references('idOrders')->on('Orders')->onDelete('cascade');            
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
        Schema::dropIfExists('Vouchers');
    }
}
