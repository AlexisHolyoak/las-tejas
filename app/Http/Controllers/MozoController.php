<?php

namespace lastejas\Http\Controllers;

use Illuminate\Http\Request;

class MozoController extends Controller
{
    public function index(){
      $tables = DB::table('Tables as t')
      ->join('Branches as b','t.idBranch','=','b.idBranch')
      ->join('Users as u','t.idUser','=','u.idUser')
      ->select('t.idTable as CODIGO','t.numberTable as NUMBER','t.numberOfChairsTable as CHAIRS','t.statusOfAttentionTable as STATUS','b.nameBranch as SUCURSAL','u.nameUser as USER','u.firstSurNameUser as FIRST','u.secondSurNameUser as SECOND')
      ->orderBy('t.numberTable','ASC')->where('t.statusTable','=','1')->paginate();
      return view('mozo.index',compact('tables'));
    }
}
