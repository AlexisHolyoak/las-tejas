<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolepersmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RolePermissions', function (Blueprint $table) {
            $table->increments('idRolePermission');
            $table->integer('roles_idRoles')->unsigned();
            $table->integer('permission_idPermission')->unsigned();
            $table->foreign('roles_idRoles')->references('idRoles')->on('Roles');
            $table->foreign('permission_idPermission')->references('idPermission')->on('Permissions');
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
        Schema::dropIfExists('RolePermissions');
    }
}
