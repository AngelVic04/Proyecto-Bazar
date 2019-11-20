@extends('layouts.bienvenido')
@section('seccion')
<div class="row">
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<h3>Editar Cliente: {{ $persona->name}}</h3>
    		@if (count($errors)>0)
    		<div class="alert alert-danger">
    			<ul>
    			@foreach ($errors->all() as $error)	
    				<li>{{$error}}</li>
    			@endforeach	
    			</ul>
    		</div>
    		@endif
        </div>
      </div>    
      {!!Form::model($persona,['method'=>'PATCH','route'=>['encargado.update',$persona->id]])!!}
            {{Form::token()}}
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" required value="{{$persona->name}}" class="form-control" placeholder="Nombre...">
                </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="apellido_paterno">Apellido Paterno</label>
                <input type="text" name="apellido_paterno" value="{{$persona->apellido_paterno}}" class="form-control" placeholder="Dirección...">
                </div>
                </div>
                
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="apellido_materno">Apellido Materno</label>
                <input type="text" name="apellido_materno" value="{{$persona->apellido_materno}}" class="form-control" placeholder="Número de documento...">
                </div>  
                </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="descripcion">Email</label>
                <input type="email" name="email" value="{{$persona->email}}" class="form-control" placeholder="Email...">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="descripcion">Contraseña</label>
                <input type="email" name="password" value="{{$persona->password}}" class="form-control" placeholder="Email...">
                </div>
            </div>
           <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
               <button class="btn btn-primary" type="submit">Guardar</button>
           </div> 
      </div>
    </div>

    		{!!Form::close()!!}
@endsection