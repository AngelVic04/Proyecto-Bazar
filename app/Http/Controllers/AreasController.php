<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AreaFormRequest;
use App\Areas;
use DB;

class AreasController extends Controller
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
            $codigos=DB::table('areas')
            ->where('nombre','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(7);
            return view('area.index',["codigos"=>$codigos,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("area.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaFormRequest $request)
    {
        $codigo=new Areas;
        $codigo->nombre=$request->get('nombre');
        $codigo->descripcion=$request->get('descripcion');
        $codigo->estado='Activo';
        $codigo->save();
        return Redirect::to('area');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("area.show",["codigo"=>Areas::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("area.edit",["codigo"=>Areas::findOrFail($id)]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AreaFormRequest $request, $id)
    {
        $codigo=Areas::findOrFail($id);
        $codigo->nombre=$request->get('nombre');
        $codigo->descripcion=$request->get('descripcion');
        $codigo->estado='Activo';
        $codigo->update();
        return Redirect::to('area');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $codigo=Areas::findOrFail($id);
    	$codigo->estado='Inactivo';
    	$codigo->update();
    	return Redirect::to('area');
    }
}
