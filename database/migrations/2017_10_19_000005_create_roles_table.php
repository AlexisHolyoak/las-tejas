<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/*
modified by: Alexis Holyoak 19/10/17
*/
class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Roles', function (Blueprint $table) {
            $table->increments('idRole');
            $table->string('nameRole');          
            $table->integer('statusRole')->unsigned();
            $table->double('salaryRole');
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
        Schema::dropIfExists('Roles');
    }
}
