<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public $timestamp = true;
    protected $primaryKey = 'idDistrict';
    protected $table = 'Districts';
    protected $fillable = [];

    protected $hidden = [];
}
