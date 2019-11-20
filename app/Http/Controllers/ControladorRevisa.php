<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorRevisa extends Controller
{
  public function __construct()
  {

  }

  function paco(){
    return view('encargado.revisar');
  }
}
