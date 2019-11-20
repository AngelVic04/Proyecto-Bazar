<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorGusto extends Controller
{
  public function __construct()
  {

  }

  function index(){
    return view('encargado.gusto');
  }
}
