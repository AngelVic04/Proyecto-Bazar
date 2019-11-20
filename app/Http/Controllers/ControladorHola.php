<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorHola extends Controller
{
  public function __construct()
  {

  }

  function home(){
    return view('cliente.home');
  }
}