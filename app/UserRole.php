<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    public $timestamp = true;
    protected $primaryKey = 'idUserRole';
    protected $table = 'UserRoles';
    protected $fillable = [
    	'idUser', 'idRole', 'idBranch', 'statusUserRole'
    ];

    protected $hidden = [];
}
