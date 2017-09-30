<?php

namespace lastejas\Http\Controllers;

use Illuminate\Http\Request;

class PlatillosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      /*uncomment this when we have login workin :)
        $this->middleware('auth');
      */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cocinero.platillos');
    }
}
