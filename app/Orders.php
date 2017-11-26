<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table='Orders';
    protected $primaryKey='idOrder';
    public $timestamps = true;

    protected $fillable =[
      'statusOrder',
      'statusOfPreparationOrder',
      'idRequest'      
    ];
}
