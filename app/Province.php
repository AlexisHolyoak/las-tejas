<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public $timestamp = true;
    protected $primaryKey = 'idProvince';
    protected $table = 'Provinces';
    protected $fillable = [];

    protected $hidden = [];
}
