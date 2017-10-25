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
}
