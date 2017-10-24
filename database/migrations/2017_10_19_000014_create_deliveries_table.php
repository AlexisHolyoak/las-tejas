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
            $table->increments('id');
            $table->date('dateDelivery');
            $table->string('statusDelivery');
            $table->string('referenceDelivery');
            $table->integer('user_id')->unsigned();
            $table->integer('bill_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('Users');
            $table->foreign('bill_id')->references('id')->on('Bills');
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
