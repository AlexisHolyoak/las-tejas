<?php

namespace lastejas\Http\Controllers;

use Illuminate\Http\Request;

class CocinerosController extends Controller
{
    //
  public function platillos()
  {
      return view('cocinero.platillos');
  }
}
