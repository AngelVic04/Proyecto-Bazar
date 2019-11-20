<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorCrear extends Controller
{
  public function __construct()
  {

  }

  function inicio(){
    return view('encargado.crear');
  }
}
