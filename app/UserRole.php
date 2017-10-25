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

    /*public function user(){
        return $this->hasOne('lastejas\User', 'id');
    }
    
    public function role(){
        return $this->hasOne('lastejas\Role', 'id');
    }

    public function branch(){
        return $this->hasOne('lastejas\Branch', 'id');
    }*/
}
