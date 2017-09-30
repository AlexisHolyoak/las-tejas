<?php

namespace lastejas\Http\Controllers;

use Illuminate\Http\Request;

class CocineroController extends Controller
{
    //
  public function platillos()
  {
      return view('cocinero.platillos');
  }
}
