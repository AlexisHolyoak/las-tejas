<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Inputs', function (Blueprint $table) {
            $table->increments('idInput');
            $table->string('name',45);
            $table->string('quantity',45);
            $table->string('price',45);
            $table->string('description',45);
            $table->integer('idProvider')->unsigned();
            $table->foreign('idProvider')->references("idProvider")->on('Providers')->onDelete('cascade');
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
        Schema::dropIfExists('Inputs');
    }
}
