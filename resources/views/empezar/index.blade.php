@extends('layouts.home')
@section('seccion')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<h3>Listado de Producto <a href="empezar/create"><button class="btn btn-success">Nuevo</button></a></h3>	
		@include('empezar.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    <div class="table-responsive">
		   <br>
	    	<table class="table table-striped table-bordered table-condensed table-hover">
	    		<thead>
	    			<th>No.</th>
	    			<th>Descripcion</th>
					<th>Disponibles</th>
	    			<th>Precio Propuesto</th>
					<th>Imagen</th>
	    			<th>Opciones</th>
	    		</thead>
               @foreach ($pericos as $bienvenido)
	    		<tr>
	    			<td>{{ $bienvenido->id}}</td>
	    			<td>{{ $bienvenido->descripcion}}</td>
	    			<td>{{ $bienvenido->disponibles}}</td>
	    			<td>{{ $bienvenido->preciopropuesto}}</td>
					<td>
	    				<img src="{{asset('Imagenes/productos/'.$bienvenido->imagen)}}" alt="{{ '' }}" height="100px" width="100px" class="img-thumbnail">
	    			</td>
	    			<td>
	    				<a href="{{URL::action('BienvenidoController@edit',$bienvenido->id)}}"><button class="btn btn-info">Editar</button></a>
						<form action="{{url('empezar')}}/{{ $bienvenido->id}}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="DELETE">
                </form> 
	    			</td>
	    		</tr>
	    		@endforeach
	    	</table>
	    </div>
	    {{$pericos->render()}}
	</div>
</div> 
@endsection