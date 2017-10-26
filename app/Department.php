<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $timestamp = true;
    protected $primaryKey = 'idDepartment';
    protected $table = 'Departments';
    protected $fillable = [];

    protected $hidden = [];
}
