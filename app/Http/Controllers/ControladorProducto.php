<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorProducto extends Controller
{
  public function __construct()
  {

  }

  function index(){
    return view('cliente.producto');
  }
}
