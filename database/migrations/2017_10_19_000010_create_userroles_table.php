<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/*
modified by: Alexis Holyoak 19/10/17
*/
class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserRoles', function (Blueprint $table) {
            $table->increments('idUserRole');
            $table->integer('idUser')->unsigned();
            $table->integer('idRole')->unsigned();
            $table->integer('idBranch')->unsigned();
            $table->date('registrationDateUserRole');
            $table->date('updateDateUserRole');
            $table->integer('statusUserRole')->unsigned();
            $table->foreign('idUser')->references('idUser')->on('Users');
            $table->foreign('idRole')->references('idRole')->on('Roles');
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
        Schema::dropIfExists('UserRoles');
    }
}
