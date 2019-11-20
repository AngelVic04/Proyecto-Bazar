@extends('layouts.home')
@section('seccion')
<div class="row">
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<h3>Editar Producto: {{ $perico->descripcion }}</h3>
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
      {!!Form::model($perico,['method'=>'PATCH','route'=>['empezar.update',$perico->id],'files'=>'true'])!!}
            {{Form::token()}}
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" required value="{{$perico->descripcion}}" class="form-control">
                </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="preciopropuesto">Precio Propuesto</label>
                <input type="text" name="preciopropuesto" required value="{{$perico->preciopropuesto}}" class="form-control" >
                </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="disponibles">Disponibles</label>
                <input type="text" name="disponibles" required value="{{$perico->disponibles}}" class="form-control">
                </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" class="form-control">
                @if (($perico->imagen)!="")
                  <img src="{{asset('imagenes/productos/'.$perico->imagen)}}" height="300px" width="300px">
                @endif
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