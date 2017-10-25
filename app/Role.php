<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamp = true;
    protected $table = 'Roles';
    protected $primaryKey = 'idRole';

    protected $fillable = [
    	'nameRole',
    	'statusRole',
    	'salaryRole'
    ];
    
    protected $hidden = [];
}
