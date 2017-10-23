<?php

namespace lastejas;

use Illuminate\Database\Eloquent\Model;
/*
Developed by: Alexis Peralta Holyoak 22/10/2017
*/
class Table extends Model
{
    //
    protected $table='Table';
    protected $primaryKey='idTable';
    public $timestamps = true;

    protected $fillable =[
      'numberTable',
      'numberOfChairsTable',
      'statusTable',
      'statusOfAttentionTable',
      'idBranch',
      'idUser'      
    ]
}
