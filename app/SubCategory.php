<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public $timestamp = true;
    protected $primaryKey = 'idSubCategory';
    protected $table = 'SubCategories';
    protected $fillable = [];

    protected $hidden = [];
 
}
