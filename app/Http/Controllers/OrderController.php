<?php

namespace lastejas\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use lastejas\Dishes;
use lastejas\OrderDishes;
use lastejas\Orders;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $idRequest = $id;
        $idmesa=DB::table('Requests as r')        
        ->select('r.idTable as ID')
        ->where('idRequest',$id)->first();
        $orders = DB::table('Orders as o')->where('o.idRequest', '=', $idRequest)->get();
        return view('mozo.request.order.index', compact(['orders', 'idRequest','idmesa']));
    }

    public function create($id)
    {
        $dishes    = Dishes::all();
        $idRequest = $id;
        return view('mozo.request.order.create', compact(['dishes', 'idRequest']));
    }

    public function store()
    {
        $idRequest          = Input::get('id');
        $order              = new Orders();
        $order->statusOrder = '0';
        $order->idRequest   = $idRequest;
        $order->save();

        $orders                = Orders::orderBy('created_at', 'desc')->get();
        return response($orders->all());
    }
    public function storeDish()
    {
        $id                   = Input::get('id');
        $cantidad             = Input::get('cantidad');
        $order                = Orders::orderBy('created_at', 'desc')->first();
        $orderDish            = new OrderDishes();
        $orderDish->idOrder   = $order->idOrder;
        $orderDish->idDish    = $id;
        $orderDish->quantity  = $cantidad;
        $orderDish->statusOrderDish = '0';
        $orderDish->save();
        $orders                = Orders::orderBy('created_at', 'desc')->get();
        return response($orders->all());
    }
    public function showDishes(){
        $idorder = Input::get('id');
        $dishes = DB::table('Orders as o')
        ->join('OrderDishes as od','o.idOrder','od.idOrder')
        ->join('Dishes as d','od.idDish','d.idDish')
        ->select('d.nameDish as NOMBRE','d.priceDish as PRECIO','od.quantity as CANTIDAD')
        ->where('o.idOrder', '=', $idorder)->get();
        return response($dishes);
    }

}
