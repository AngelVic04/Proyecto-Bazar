@extends('layouts.bienvenido')
@section('seccion')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<br>
	<h3>Listado de Areas <a href="area/create"><button class="btn btn-success">Nuevo</button></a></h3>
		<br>
		@include('area.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    <div class="table-responsive">
		   <br>
	    	<table class="table table-striped table-bordered table-condensed table-hover">
	    		<thead>
	    			<th>No</th>
	    			<th>Nombre</th>
	    			<th>Descripcion</th>
	    			<th>Estado</th>
	    			<th>Opciones</th>
	    		</thead>
               @foreach ($codigos as $perico)
	    		<tr>
	    			<td>{{ $perico->id}}</td>
	    			<td>{{ $perico->nombre}}</td>
	    			<td>{{ $perico->descripcion}}</td>
	    			<td>{{ $perico->estado}}</td>
	    			<td>
	    				<a href="{{URL::action('AreasController@edit',$perico->id)}}"><button class="btn btn-info">Editar</button></a>
						<form action="{{url('area')}}/{{ $perico->id}}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="DELETE">
                </form> 
	    			</td>
	    		</tr>
	    		@endforeach
	    	</table>
	    </div>
	    {{$codigos->render()}}
	</div>
</div> 
@endsection