<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ProductoFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Areas;
use App\Producto;
use DB;

class BienvenidoController extends Controller
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
            $pericos=DB::table('prodcutos')
            ->where('descripcion','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(7);
            return view('empezar.index',["pericos"=>$pericos,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$users = Auth::user()->name;
        $codigos = Areas::all();
        return view('empezar.create',compact('codigos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoFormRequest $request)
    {
        $perico=new Producto;
        $perico->descripcion=$request->get('descripcion');
        $perico->preciopropuesto=$request->get('preciopropuesto');
        $perico->disponibles=$request->get('disponibles');
        $perico->cliente_vende=Auth::user()->id;
        //$perico->area_id=$request->get('area_id');
        //$perico->cliente_vende = 5;
        if(Input::hasFile('imagen')){
    		$file=Input::file('imagen');
    		$file->move(public_path().'/imagenes/productos/',$file->getClientOriginalName());
    		$perico->imagen=$file->getClientOriginalName();
    	}

        $perico->save();
        return Redirect::to('empezar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("empezar.show",["perico"=>Producto::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("empezar.edit",["perico"=>Producto::findOrFail($id)]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoFormRequest $request, $id)
    {
        $perico=Producto::findOrFail($id);
        $perico->descripcion=$request->get('descripcion');
        $perico->preciopropuesto=$request->get('preciopropuesto');
        $perico->disponibles=$request->get('disponibles');
        $perico->cliente_vende=Auth::user()->id;
        //$perico->area_id=$request->get('area_id');
        if(Input::hasFile('imagen')){
    		$file=Input::file('imagen');
    		$file->move(public_path().'/imagenes/productos/',$file->getClientOriginalName());
    		$perico->imagen=$file->getClientOriginalName();
    	}
        $perico->update();
        return Redirect::to('empezar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perico=Producto::findOrFail($id);
    	$perico->delete();
    	return Redirect::to('empezar');
    }
}
