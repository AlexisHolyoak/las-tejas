<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class OrderDish extends Model
{
	protected $table='orderDishes';
    protected $primaryKey='idOrderDish';
    public $timestamps = true;
    protected $fillable =[
      'idOrder',
      'idDish',      
    ];
}
