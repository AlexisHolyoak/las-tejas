<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('idRequests');
            $table->integer('idTables')->unsigned();
            $table->integer('idOrders')->unsigned();
            $table->foreign('idTables')->references('idTables')->on('Tables')->onDelete('cascade');
            $table->foreign('idOrders')->references('idOrders')->on('Orders')->onDelete('cascade');
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
        Schema::dropIfExists('requests');
    }
}
