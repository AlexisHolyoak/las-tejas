<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class SubType extends Model
{
    public $timestamp = true;
    protected $primaryKey = 'idSubType';
    protected $table = 'SubTypes';
    protected $fillable = [];
    protected $hidden = [];
}
