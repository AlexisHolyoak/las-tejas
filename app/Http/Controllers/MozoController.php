<?php

namespace lastejas\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MozoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = DB::table('Users')->where('idUser', $id)->value('nameUser');
      $tables = DB::table('Tables as t')
      ->join('Branches as b','t.idBranch','=','b.idBranch')
      ->join('Users as u','t.idUser','=','u.idUser')
      ->select('t.idTable as CODIGO','t.numberTable as NUMBER','t.numberOfChairsTable as CHAIRS','t.statusOfAttentionTable as STATUS','u.nameUser as USER','u.firstSurNameUser as FIRST','u.secondSurNameUser as SECOND')
      ->orderBy('t.numberTable','ASC')
      ->where([['t.statusTable','1'],['t.idUser',$id],])->paginate();      
      return view('mozos.index',compact(['tables','user']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('mozo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idTable)
    {   
        $mesa = $idTable;
        $orders=DB::table('Tables as t')      
        ->join('Requests as r','t.idTable','=','r.idTable')
        ->join('orderRequests as or','r.idRequest','=','or.idRequests')
        ->join('orders as o','or.idOrder','=','o.idOrder')
        ->join('orderDishes as od','o.idOrder','=','od.idOrder')
        ->join('dishes as d','od.idDish','=','d.idDish')
        ->select('d.nameDish as PLATO', 'o.idOrder as NUMERO')
        ->where('t.idTable','=',$idTable);
        return view('mozo.show',compact(['mesa','orders']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
