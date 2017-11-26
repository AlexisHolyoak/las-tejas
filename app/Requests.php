<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $table='Requests';
    protected $primaryKey='idRequest';
    public $timestamps = true;

    protected $fillable =[
      'idTable',
      'idUser',
      'timeRequest',
      'statusRequest',
      'statusOfAttentionRequest'
      
    ];
}
