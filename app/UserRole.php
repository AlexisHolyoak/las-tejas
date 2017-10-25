<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    public $timestamp = true;
    protected $table = 'UserRoles';
    protected $primaryKey = 'idUserRole';

    protected $fillable = [
    	'idUser',
    	'idRole',
    	'idBranch'
    ];

    protected $hidden = [

    ];
}
