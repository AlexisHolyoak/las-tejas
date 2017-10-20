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
            $table->increments('idTable');
            $table->integer('numberTable')->unsigned();
            $table->integer('numberOfChairsTable')->unsigned();
            $table->integer('statusTable')->unsigned();
            $table->string('statusOfAttentionTable');
            $table->integer('idBranch')->unsigned();
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('idUser')->on('Users');
            $table->foreign('idBranch')->references('idBranch')->on('Branches');
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
