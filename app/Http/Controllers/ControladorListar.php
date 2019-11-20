<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorListar extends Controller
{
  public function __construct()
  {

  }

  function nueva(){
    return view('encargado.lista');
  }
}
