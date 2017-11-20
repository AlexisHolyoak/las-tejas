<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class OrderRequest extends Model
{
    protected $table='orderRequests';
    protected $primaryKey = 'idOrderRequests';
    public $timestamps = true;
    protected $fillable =[
      'idOrder',
      'idRequest',      
    ];
}
