<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/*
modified by: Alexis Holyoak 19/10/17
*/
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->increments('idUser');
            $table->string('nameUser');
            $table->string('firtSurNameUser');
            $table->string('secondSurNameUser');
            $table->string('genderUser');
            $table->string('dniUser');
            $table->string('rucUser')->nullable();
            $table->string('addressUser')->nullable();
            $table->string('phoneUser')->nullable();
            $table->string('cellPhoneUser')->nullable();
            $table->string('emailUser')->unique()->nullable();
            $table->string('birthdayUser')->nullable();
            $table->string('registrationDateUser');
            $table->string('statusUser');
            $table->string('updateDateUser');
            $table->string('nickNameUser');
            $table->string('passwordUser');
            $table->integer('idDistrict')->unsigned();
            $table->foreign('idDistrict')->references('idDistrict')->on('Districts');
            $table->rememberToken();
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
        Schema::dropIfExists('Users');
    }
}
