<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UserFormRequest;
use App\User;
use DB;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $personas=DB::table('users')
            ->where('name','LIKE','%'.$query.'%')
			->where('rol','=','Cliente')
			->orwhere('name','LIKE','%'.$query.'%')
			->where('rol','=','Cliente')
			->orderBy('id','desc')
            ->paginate(7);
            return view('password.index',["personas"=>$personas,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {
        $persona=new User;
        $persona->name=$request->get('name');
        $persona->apellido_materno=$request->get('apellido_materno');
        $persona->apellido_paterno=$request->get('apellido_paterno');
        $persona->password=$request->get('password');
        $persona->save();
        return Redirect::to('password');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('password.show',["persona"=>User::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("password.edit",["persona"=>User::findOrFail($id)]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserFormRequest $request,$id)
    {
        $persona=User::findOrFail($id);
        $persona->name=$request->get('name');
        $persona->apellido_materno=$request->get('apellido_materno');
        $persona->apellido_paterno=$request->get('apellido_paterno');
        $persona->password=$request->get('password');
        $persona->update();
        return Redirect::to('password');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
