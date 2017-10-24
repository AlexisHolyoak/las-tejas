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
          $table->increments('id');
          $table->string('nameDish');
          $table->integer('statusDish')->unsigned();
          $table->integer('subcategory_id')->unsigned();
          $table->integer('subtype_id')->unsigned();
          $table->foreign('subcategory_id')->references('id')->on('SubCategories');
          $table->foreign('subtype_id')->references('id')->on('SubTypes');
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
