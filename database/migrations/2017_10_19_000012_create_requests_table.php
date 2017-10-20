<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/*
modified by: Alexis Holyoak 19/10/17
*/
class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Requests', function (Blueprint $table) {
            $table->increments('idRequest');
            $table->integer('idTable')->unsigned();
            $table->integer('idUser')->unsigned();
            $table->datetime('timeRequest');
            $table->string('statusRequest');
            $table->string('statusOfAttentionRequest');
            $table->foreign('idTable')->references('idTable')->on('Tables');
            $table->foreign('idUser')->references('idUser')->on('Users');
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
        Schema::dropIfExists('Requests');
    }
}
