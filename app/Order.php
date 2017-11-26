<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='Orders';
    protected $primaryKey='idOrder';
    public $timestamps = true;

    protected $fillable =[
      'statusOrder',
      'timeOrder',
      'updateTimeOrder',
      'statusOfPreparationOrder'      
    ];
}
