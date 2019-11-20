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
	    			<th>Forma de pago</th>
	    		</thead>
	    		<tr>
	    			<td>1</td>
	    			<td>Hp</td>
	    			<td>23455</td>
	    			<td>Laptop</td>
	    			<td>
              <select name="combo">
   <!-- Opciones de la lista -->
                <option value="1">Tarjeta</option>
                <option value="2">Efectivo</option> <!-- Opción por defecto -->
                <option value="3">Cheque</option>
             </select>
	    			</td>
	    		</tr>
	    	</table>
	    </div>
	</div>
</div>
@endsection
