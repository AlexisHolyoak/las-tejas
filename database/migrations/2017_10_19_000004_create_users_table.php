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
            $table->increments('id');
            $table->string('nameUser');
            $table->string('firstSurNameUser');
            $table->string('secondSurNameUser');
            $table->string('genderUser');
            $table->string('dniUser');
            $table->string('rucUser')->nullable();
            $table->string('addressUser')->nullable();
            $table->string('phoneUser')->nullable();
            $table->string('cellPhoneUser')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('birthdayUser')->nullable();
            $table->string('statusUser');
            $table->string('nickNameUser')->nullable();
            $table->string('password')->nullable();
            $table->integer('district_id')->unsigned();
            $table->foreign('district_id')->references('id')->on('Districts');
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
