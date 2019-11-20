<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorLogin extends Controller
{

  function iniciar()
  {
    return view('inicio.login');
  }
}
