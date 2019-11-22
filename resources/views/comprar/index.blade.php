@extends('layouts.bienvenido')
@section('seccion')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	   <br>	
		@include('ventas.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    <div class="table-responsive">
		   <br>
	    	<table class="table table-striped table-bordered table-condensed table-hover">
	    		<thead>
	    			<th>No.</th>
	    			<th>descripcion</th>
					<th>fecha</th>
	    			<th>Quien Vendio</th>
					<th>Precio Venta</th>
					<th>Comprador</th>
					<th>Estado</th>
	    		</thead>
               @foreach ($perritos as $bienvenido)
	    		<tr>
	    			<td>{{ $bienvenido->id}}</td>
	    			<td>{{ $bienvenido->producto_id}}</td>
	    			<td>{{ $bienvenido->fecha}}</td>
	    			<td>{{ $bienvenido->quien_vendio}}</td>
					<td>{{ $bienvenido->precio_venta }}
					<td>{{ $bienvenido->comprador }}</td>
					<td>{{ $bienvenido->estado }}</td>
	    		</tr>
	    		@endforeach
	    	</table>
	    </div>
	    {{$perritos->render()}}
	</div>
</div> 
@endsection