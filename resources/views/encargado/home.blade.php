<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="css/hola2.css">
     <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Bazar</title>
  </head>
  <body>
    <div id="cabecera">
		<a>BIENVENDIO A TU BAZAR</a><br>
		<b>ENCUENTRE LOS PRODUCTOS DESEADOS</b>
	</div>
  <div id="menu">
    <ul>
      <li><a href="/crear">Crear un producto</a></li>
      <li><a href="/listar">Listar de los productos</a></li>
      <li><a href="/revisar">Revisar el catalago</a></li>
      <li><a href="/gusto">Proponerse para comprar un producto</a></li>
      <li><a href="/comprar">Los producto comprados</a></li>
        <li><a href="#">Cerra Sesion</a></li>
  </div>
  @yield('seccion')
  <script src="js/jquery-3.4.1.js"></script>
  <script src="js/nuevo.js" ></script>
  </body>
</html>
