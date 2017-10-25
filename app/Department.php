<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $timestamps = false;
    protected $table = "Departments";
    protected $primaryKey = "idDepartment";
    protected $fillable = [];
    protected $hidden = [];
}
