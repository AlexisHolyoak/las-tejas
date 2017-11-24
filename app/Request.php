<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table='requests';
    protected $primaryKey = 'idRequest';
    public $timestamps = true;
    protected $fillable =[
      'idTable',
      'idUser',
      'timeRequest',
      'statusOfAttentionRequest',           
    ];
}
