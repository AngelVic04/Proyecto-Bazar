<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorHome extends Controller
{
  public function __construct()
  {

  }

  function home(){
    return view('encargado.home');
  }
}
