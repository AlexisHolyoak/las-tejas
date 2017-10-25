<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public $timestamp = true;
    protected $table = 'Branches';
    protected $primaryKey = 'idBranch';

    protected $fillable = [
    	'nameBranch',
    	'kindOfBussinessBranch',
    	'addressBranch',
    	'rucBranch',
    	'logoBranch',
    	'kindOfExchangeBranch'
    ];
    
    protected $hidden = [];
}
