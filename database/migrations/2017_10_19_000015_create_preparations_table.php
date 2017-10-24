<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreparationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Preparations', function (Blueprint $table) {
            $table->increments('id');
            $table->double('estimatedTimePreparation');
            $table->integer('supply_id')->unsigned();
            $table->foreign('supply_id')->references('id')->on('Supplies');
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
