<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class Supplies extends Model
{
    public $timestamp = true;
    protected $primaryKey = 'idSupply';
    protected $table = 'Supplies';
    protected $fillable = ['idSupply','nameSupply','acquisitionDateSupply'];

    protected $hidden = [];

}
