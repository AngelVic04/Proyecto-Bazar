<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorEditar extends Controller
{
  public function __construct()
  {

  }

  function hola(){
    return view('encargado.editar');
  }
}
