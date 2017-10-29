<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dishes', function (Blueprint $table) {
          $table->increments('idDish');
          $table->string('nameDish');
          $table->integer('statusDish')->unsigned();
          $table->integer('idSubCategory')->unsigned();
          $table->integer('idSubType')->unsigned();
          $table->foreign('idSubCategory')->references('idSubCategory')->on('SubCategories');
          $table->foreign('idSubType')->references('idSubType')->on('SubTypes');
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
        Schema::dropIfExists('Dishes');
    }
}
