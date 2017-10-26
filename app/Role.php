<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamp = true;
    protected $primaryKey = 'idRole';
    protected $table = 'Roles';
    protected $fillable = [
    	'nameRole', 'statusRole', 'salaryRole'
    ];

    protected $hidden = [];
}
