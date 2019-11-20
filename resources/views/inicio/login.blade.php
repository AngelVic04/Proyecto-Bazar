<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bazar | Login</title>
    <link rel="stylesheet" type="text/css" href="css/diseño.css">
  </head>
  <body>
    <div class="contenedor">
	<h1>Bienvenido</h1>
	<img src="img/administrador.jpg" alt="">
	<form method="" action="">
    @csrf
		<div class="cajadetexto">
			<span class="icon-user"></span>
             <input type="text" name="nombre" placeholder="Nombre de usuario" required="">
		</div>
		<div class="cajadetexto">
			<span class="icon-key"></span>
			<input type="password" name="password" placeholder="Contraseña" required>
		</div>
		<input type="submit" value="Enviar" class="botonlogin">
</form>
</div>
  </body>
</html>
