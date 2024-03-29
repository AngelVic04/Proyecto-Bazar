@extends ('layouts.home')
@section ('seccion')
    <div class="row">
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<h3>Nueva Venta</h3>
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
    		{!!Form::open(array('url'=>'ventas','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
    		{{Form::token()}}
            <div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                   <div class="form-group">
                       <label>Descripcion</label>
                       <select name="producto_id" class="form-control">
                       @foreach ($pericos as $bienvenido)
                              <option value="{{$bienvenido->id}}">{{$bienvenido->descripcion}}</option>
                           @endforeach
                       </select>
                   </div> 
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                   <div class="form-group">
                       <label>Quien vendio</label>
                       <select name="quien_vendio" class="form-control">
                       @foreach ($personas as $per)
                              <option value="{{$per->id}}">{{$per->name}}</option>
                           @endforeach
                       </select>
                   </div> 
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="precio_venta">Precio Venta</label>
                <input type="text" name="precio_venta" required value="{{old('precio_venta')}}" class="form-control">
                </div>
            </div>
           <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
               <button class="btn btn-primary" type="submit">Guardar</button>
               <button class="btn btn-danger" type="reset">Cancelar</button>
           </div> 
    	</div>
    </div>

    		{!!Form::close()!!}
            
@endsection