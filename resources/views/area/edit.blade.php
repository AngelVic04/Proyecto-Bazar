@extends('layouts.bienvenido')
@section('seccion')
<div class="row">
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<h3>Editar Cliente: {{ $codigo->nombre}}</h3>
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
      {!!Form::model($codigo,['method'=>'PATCH','route'=>['area.update',$codigo->id]])!!}
            {{Form::token()}}
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="nombre" required value="{{$codigo->nombre}}" class="form-control" placeholder="Nombre...">
                </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="apellido_paterno">Descripcion</label>
                <input type="text" name="descripcion" value="{{$codigo->descripcion}}" class="form-control" placeholder="Dirección...">
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