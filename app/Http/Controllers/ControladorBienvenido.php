<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorBienvenido extends Controller
{
  public function __construct()
  {

  }

  function bienvenido(){
    return view('cliente.bienvenido');
  }
}
