<?php

namespace lastejas\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use lastejas\Requests;
use Illuminate\Support\Facades\Input;

class RequestController extends Controller
{

    public function index($id)
    {
        $idmesa   = $id;
        $iduser= DB::table('Tables as t')
        ->select('t.idUser as USER')
        ->where('t.idTable',$idmesa)->first();        
        $requests = DB::table('Requests as r')
            ->select('r.idRequest as ID', 'r.statusRequest as ESTADO', 'r.statusOfAttentionRequest as ESTADOATENCION')
            ->where('r.idTable', $idmesa)->get();
        return view('mozo/request.index', compact(['requests', 'idmesa','iduser']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear($id)
    {
        

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $idmesa = Input::get('id');
        $user   = DB::table('Requests')->where('idTable', '=', $idmesa)->first();
        $req    = new Requests();
        $req->idTable                  = $idmesa;
        $req->statusRequest            = 'Pendiente';
        $req->statusOfAttentionRequest = '0';
        $req->idUser = $user->idUser;
        $req->save();

        $requests = DB::table('Requests as r')
            ->select('r.idRequest as ID', 'r.statusRequest as ESTADO', 'r.statusOfAttentionRequest as ESTADOATENCION')
            ->where('r.idTable', $idmesa)->get();
        return view('mozo/request.index', compact(['requests', 'idmesa']));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mesa   = $id;
        $orders = DB::table('Tables as t')
            ->join('Requests as r', 't.idTable', '=', 'r.idTable')
            ->join('orders as o', 'r.idRequest', '=', 'o.idRequest')
            ->join('orderDishes as od', 'o.idOrder', '=', 'od.idOrder')
            ->join('dishes as d', 'od.idDish', '=', 'd.idDish')
            ->select('d.nameDish as PLATO', 'o.idOrder as NUMERO')
            ->where('t.idTable', '=', $id);
        return view('mozo.showOrders', compact(['mesa', 'orders']));

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

    public function list($id) {
        $user   = DB::table('Users')->where('idUser', $id)->value('nameUser');
        $tables = DB::table('Tables as t')
            ->join('Branches as b', 't.idBranch', '=', 'b.idBranch')
            ->join('Users as u', 't.idUser', '=', 'u.idUser')
            ->select('t.idTable as CODIGO', 't.numberTable as NUMBER', 't.numberOfChairsTable as CHAIRS', 't.statusOfAttentionTable as STATUS', 'u.nameUser as USER', 'u.firstSurNameUser as FIRST', 'u.secondSurNameUser as SECOND')
            ->orderBy('t.numberTable', 'ASC')
            ->where([['t.statusTable', '1'], ['t.idUser', $id]])->paginate();
        return view('mozo.list', compact(['tables', 'user']));
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
