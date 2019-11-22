<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="{{asset('css/hola2.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/estilo.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('css/estilo2.css')}}">
    <title>Bazar</title>
  </head>
  <body>
    <div id="cabecera">
		<a>BIENVENDIO A TU BAZAR</a><br>
		<b>ENCUENTRE LOS PRODUCTOS DESEADOS</b>
	</div>
  <div id="menu">
    <ul>
      <li><a href="/empezar">Crear un producto</a></li>
      <li><a href="/ventas">Ventas en el bazar</a></li>
      <li><a href="/comprados">Los producto comprados</a></li>
      <li><a href="">Producto Vendido</a>
      <li><a href="">Producto Pagado</a>
        <li><a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
            {{ __('Cerrar Sesion') }}
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </a></li>
  </div>
  @yield('seccion')
  <script src="{{asset('js/jquery-3.4.1.js')}}"></script>
  <script src="{{asset('js/nuevo.js')}}" ></script>
  </body>
</html>
