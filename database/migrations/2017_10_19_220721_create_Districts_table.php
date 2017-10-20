<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Districts', function (Blueprint $table) {
            $table->increments('idDistrict');
            $table->string('nameDistrict',90);
            $table->integer('idProvince')->unsigned();
            $table->foreign('idProvince')->references('idProvince')->on('Provinces')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Districts');
    }
}
