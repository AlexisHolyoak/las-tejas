<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Providers', function (Blueprint $table) {
          $table->increments('idProvider');
          $table->string('nameProvider',45);
          $table->string('rucProvider',45);
          $table->string('dniProvider',45);
          $table->string('addressProvider',45);
          $table->string('phoneProvider',45);
          $table->string('accountProvider',45);
          $table->string('observationProvider',45);
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
        Schema::dropIfExists('Providers');
    }
}
