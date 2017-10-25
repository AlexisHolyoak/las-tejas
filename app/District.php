<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public $timestamps = false;
    protected $table = 'Districts';
    protected $primaryKey = "idDistrict";
    protected $fillable = [];
    protected $hidden = [];
    
    /*public function province(){
    	return $this->hasOne('lastejas\Province', 'id');
    }
    public function users(){
    	return $this->hasMany('lastejas\User');
    }*/
}
