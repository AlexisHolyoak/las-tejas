<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class OrderDishes extends Model
{
    public $timestamp = true;
    protected $primaryKey = 'idOrderDish';
    protected $table = 'OrderDishes';
    protected $fillable = ['idOrderDish','idDish','idOrder','quantity'];

    protected $hidden = [];

}
