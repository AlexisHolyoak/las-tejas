<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreparationsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Preparations', function (Blueprint $table) {
            $table->increments('idPreparation');
            $table->double('estimatedTimePreparation');
            $table->integer('idSupply')->unsigned();
            $table->foreign('idSupply')->references('idSupply')->on('Supply');
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
        Schema::dropIfExists('Preparations');
    }
}
