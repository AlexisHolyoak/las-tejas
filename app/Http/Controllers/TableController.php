<?php

namespace lastejas\Http\Controllers;

use Illuminate\Http\Request;
/*
developed by: Alexis Peralta Holyoak
*/
class TableController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index(){
      return view('table.index');
    }

}
