@extends('layouts.bienvenido')
@section('seccion')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<br>
		@include('password.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    <div class="table-responsive">
		<br>
	    	<table class="table table-striped table-bordered table-condensed table-hover">
	    		<thead>
	    			<th>No.</th>
	    			<th>Nombre</th>
	    			<th>Apellido Paterno</th>
	    			<th>Apellido Materno</th>
	    			<th>Password</th>
	    			<th>Opciones</th>
	    		</thead>
               @foreach ($personas as $per)
	    		<tr>
	    			<td>{{ $per->id}}</td>
	    			<td>{{ $per->name}}</td>
	    			<td>{{ $per->apellido_paterno}}</td>
	    			<td>{{ $per->apellido_materno}}</td>
					<td>{{$per->password}}
	    			<td>
	    				<a href="{{URL::action('PasswordController@edit',$per->id)}}"><button class="btn btn-info">Editar</button></a>
	    			</td>
	    		</tr>
	    		@include('password.modal')
	    		@endforeach
	    	</table>
	    </div>
	    {{$personas->render()}}
	</div>
</div> 
@endsection