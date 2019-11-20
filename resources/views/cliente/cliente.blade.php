@extends('cliente.bienvenido')
@section('seccion')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <br>
		<h3>Cliente</h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    <div class="table-responsive">
	    	<table class="table table-striped table-bordered table-condensed table-hover">
	    		<thead>
	    			<th>Id</th>
	    			<th>Nombre</th>
	    			<th>Dirección</th>
	    			<th>Telefono</th>
	    			<th>Codigo Postal</th>
	    			<th>Ciudad</th>
	    		</thead>
	    		<tr>
	    			<td>1</td>
	    			<td>Pedro</td>
	    			<td>Benito Juarez</td>
	    			<td>9611683700</td>
	    			<td>29030</td>
            <td>Ciudad de México</td>
	    		</tr>
	    	</table>
	    </div>
	</div>
</div>
@endsection
