<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public $timestamp = true;
    protected $primaryKey = 'idBranch';
    protected $table = 'Branches';
    protected $fillable = [
        'nameBranch', 'kindOfBussinessBranch', 'rucBranch', 'addressBranch', 'logoBranch', 'kindOfExchangeBranch'
    ];

    protected $hidden = [];
}
