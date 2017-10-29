<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/*
modified by: Alexis Holyoak 19/10/17
*/
class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Branches', function (Blueprint $table) {
            $table->increments('idBranch');
            $table->string('nameBranch');
            $table->string('kindOfBussinessBranch')->nullable();
            $table->string('rucBranch');
            $table->date('addressBranch');                        
            $table->binary('logoBranch')->nullable();
            $table->string('kindOfExchangeBranch');
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
        Schema::dropIfExists('Branches');
    }
}
