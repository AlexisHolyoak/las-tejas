<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public $timestamps = false;
    protected $table = "Provinces";
    protected $primaryKey = "idProvince";
    protected $fillable = [];
    protected $hidden = [];

    /*public function department(){
    	return $this->hasOne('lastejas\Department', 'id');
    }
    public function districts(){
    	return $this->hasMany('lastejas\District');
    }*/
}
