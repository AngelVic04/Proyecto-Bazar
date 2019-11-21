@extends('layouts.bienvenido')
@section('seccion')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<br>
		@include('consignado.search')
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
					<th>Consignado</th>
					<th>Precio Vendido</th>
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
					<td>{{ $bienvenido->consignado }}
					<td>{{ $bienvenido->preciovendido }}
	    			<td>
	    				<a href="{{URL::action('ConsignadoController@edit',$bienvenido->id)}}"><button class="btn btn-info">Consignado</button></a>
	    			</td>
	    		</tr>
	    		@endforeach
	    	</table>
	    </div>
	    {{$pericos->render()}}
	</div>
</div> 
@endsection