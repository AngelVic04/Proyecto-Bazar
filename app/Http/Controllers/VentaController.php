<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\VentaFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Venta;
use App\User;
use App\Producto;
use DB;

use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request)
        {
            $query=trim($request->get('searchText'));
            $perritos=DB::table('ventas')
            ->where('fecha','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(7);
            return view('ventas.index',["perritos"=>$perritos,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pericos = Producto::all();
        $personas = User::all();
        return view('ventas.create', compact('pericos','personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VentaFormRequest $request)
    {
        $perrito = new Venta;
        $perrito->producto_id=$request->get('producto_id');
        $mytime = Carbon::now('America/Mexico_City');
        $perrito->fecha=$mytime->toDateTimeString();
        $perrito->quien_vendio=$request->get('quien_vendio');
        $perrito->precio_venta=$request->get('precio_venta');
        $perrito->comprador=Auth::user()->id;
        $perrito->estado='No comprado';
        $perrito->save();
        return Redirect::to('ventas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("ventas.show",["perrito"=>Venta::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("ventas.edit",["perrito"=>Venta::findOrFail($id)]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VentaFormRequest $request, $id)
    {
        $perrito=Venta::findOrFail($id);
        $perrito->producto_id=$request->get('producto_id');
        $mytime = Carbon::now('America/Mexico_City');
        $perrito->fecha=$mytime->toDateTimeString();
        $perrito->quien_vendio=$request->get('quien_vendio');
        $perrito->precio_venta=$request->get('precio_venta');
        $perrito->comprador=Auth::user()->id;
        $perrito->estado='No comprado';
        $perrito->update();
        return Redirect::to('ventas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perrito=Venta::findOrFail($id);
    	$perrito->estado='Comprado';
    	$perrito->update();
    	return Redirect::to('ventas');
    }
}
