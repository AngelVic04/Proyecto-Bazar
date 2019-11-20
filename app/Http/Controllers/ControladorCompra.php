<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorCompra extends Controller
{
  public function __construct()
  {

  }

  function quien(){
    return view('encargado.comprar');
  }
}
