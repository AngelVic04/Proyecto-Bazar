<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorCliente extends Controller
{
  public function __construct()
  {

  }

  function index(){
    return view('cliente.cliente');
  }
}
