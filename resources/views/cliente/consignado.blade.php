@extends('cliente.bienvenido')
@section('seccion')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <br>
		<h3>Consignado del Producto</h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    <div class="table-responsive">
	    	<table class="table table-striped table-bordered table-condensed table-hover">
	    		<thead>
	    			<th>Id</th>
	    			<th>Nombre</th>
	    			<th>Código</th>
	    			<th>Categoría</th>
	    			<th>Stock</th>
	    			<th>Operaciones</th>
	    		</thead>
	    		<tr>
	    			<td>1</td>
	    			<td>Hp</td>
	    			<td>23455</td>
	    			<td>Laptop</td>
	    			<td>10</td>
	    			<td>
	    				<a href="/editar"><button class="btn btn-info">consignado</button></a>
	    				<a href="#" data-target="" data-toggle="modal"><button class="btn btn-danger">Cancelar</button></a>
	    			</td>
	    		</tr>
	    	</table>
	    </div>
	</div>
</div>
@endsection
