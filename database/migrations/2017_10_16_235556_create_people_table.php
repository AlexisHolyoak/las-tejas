<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('People', function (Blueprint $table) {
            $table->increments('idPerson');
            $table->string('personName',100);
            $table->string('address');
            $table->string('telephone',12);
            $table->integer('idPosition')->unsigned();
            $table->string('personType');
            $table->integer('userType_idUserType')->unsigned();
            $table->string('observations');
            $table->string('state');
            $table->string('registerDate');
            $table->integer('branch_idBranch')->unsigned();
            $table->integer('login_idLogin')->unsigned();
            $table->foreign('branch_idBranch')->references('idBranch')->on('Branches');
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
        Schema::dropIfExists('People');
    }
}
