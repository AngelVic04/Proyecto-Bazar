<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorUsuario extends Controller
{
  public function __construct()
  {

  }

  function index(){
    return view('cliente.usuario');
  }
}
