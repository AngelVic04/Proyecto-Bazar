<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorConsignado extends Controller
{
  public function __construct()
  {

  }

  function index(){
    return view('cliente.consignado');
  }
}
