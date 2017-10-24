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
            $table->increments('id');
            $table->integer('request_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->dateTime('dateBill');
            $table->double('disccountBill',10,2)->nullable();
            $table->double('igvBill',10,2);
            $table->integer('statusBill')->unsigned();
            $table->foreign('request_id')->references('id')->on('Requests');
            $table->foreign('user_id')->references('id')->on('Users');
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
