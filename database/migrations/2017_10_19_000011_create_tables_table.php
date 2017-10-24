<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numberTable')->unsigned();
            $table->integer('numberOfChairsTable')->unsigned();
            $table->integer('statusTable')->unsigned();
            $table->string('statusOfAttentionTable');
            $table->integer('branch_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('Users');
            $table->foreign('branch_id')->references('id')->on('Branches');
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
        Schema::dropIfExists('Tables');
    }
}
