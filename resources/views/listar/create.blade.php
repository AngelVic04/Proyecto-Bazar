@extends ('layouts.home')
@section ('seccion')
    <div class="row">
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<h3>Nuevo Producto</h3>
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
    		{!!Form::open(array('url'=>'empezar','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
    		{{Form::token()}}
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="nombre">Descripcion</label>
                <input type="text" name="descripcion" required value="{{old('descripcion')}}" class="form-control" placeholder="Nombre...">
                </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="codigo">Disponibles</label>
                <input type="text" name="disponibles" required value="{{old('disponibles')}}" class="form-control" placeholder="Disponibles del producto...">
                </div>  
                </div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                   <div class="form-group">
                       <label>Area</label>
                       <select name="area_id" class="form-control">
                       @foreach ($codigos as $perico)
                              <option value="{{$perico->id}}">{{$perico->nombre}}</option>
                           @endforeach
                       </select>
                   </div> 
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="stock">Precio Propuesto</label>
                <input type="text" name="preciopropuesto" required value="{{old('preciopropuesto')}}" class="form-control" placeholder="Precio Propuesto del producto...">
                </div>
            </div>
             <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" class="form-control">
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