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
      $user= DB::table('User as u')
   	  ->select('u.UserName as Nombre')
      ->where('u.idUser','=',$id)
      ->first();
      $tables = DB::table('Tables as t')      
      ->join('Users as u','t.idUser','=','u.idUser')
      ->select('t.idTable as CODIGO','t.numberTable as NUMBER','t.numberOfChairsTable as CHAIRS','t.statusOfAttentionTable as STATUS','u.firstSurNameUser as FIRST','u.secondSurNameUser as SECOND')
      ->orderBy('t.numberTable','ASC')->where('t.statusTable','=','1')->paginate();
      return view('table.index',compact(['tables','user']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        
       $order=DB::table('Orders as o')
       ->join('orderRequests as or','o.idOrder','=','or.idOrder')
       ->join('Requests as r','or.idRequest','=','r.idRequest')
       ->join('Tables as t','r.idTable','=','t.idTable')
       ->join('orderDishes as od','o.idOrder','=','od.idOrder')
       ->join('Dishes as d','od.idOrderDish','=','d.idDish')
       ->select('d.nameDish')
       ->where('t.idTable','=',$id)
       ->first();
       return view('mozo.show',compact('order'));
     
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
