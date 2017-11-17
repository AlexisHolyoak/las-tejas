<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

use DB;

class Dishes extends Model
{
    public $timestamp = true;
    protected $primaryKey = 'idDish';
    protected $table = 'Dishes';
    protected $fillable = [];

    protected $hidden = [];

    public function scopeGetDataDish($query, $filterCategory=null){
        
        return $query->select('idDish', 'nameDish', 'priceDish', 'imageDish', 'nameSubCategory', 'Dishes.idSubCategory')
                                       ->join('SubCategories as sc', 'Dishes.idSubCategory', 'sc.idSubCategory')
                                       ->where('statusDish', 1)
                                       ->where('statusSubCategory', 1)
                                       ->FilterByCategory($filterCategory)
                                       ->orderby('idDish')
                                       ->get();
    }

    public function scopeFilterByCategory($query, $filterCategory=null){
        if(!is_null($filterCategory)){
            return $query->where('sc.idSubCategory', $filterCategory);
        }
    }
}
