<link rel="stylesheet" type="text/css" href="./../css/style.css">
<div class="registerbox">
	<h1>Registrar nuevo cliente</h1>
	
		<table class="tbl">

		<form action="./../php/registrar.php" method="POST">
		<tr><td>Ingrese Nombre:</td><td><input class="ib" type="text" name="primerNombre" placeholder="Ingrese su nombre" required></td></tr>
		<tr><td>Ingrese Segundo Nombre:</td><td><input class="ib" type="text" name="segundoNombre" placeholder="Ingrese su segundo nombre" required></td></tr>
		<tr><td>Ingrese Apellido:</td><td><input type="text" name="primerApellido" placeholder="Ingrese su apellido" required></td></tr>
		<tr><td>Ingrese Segundo Apellido:</td><td><input type="text" name="segundoApellido" placeholder="Ingrese su apellido" required></td></tr>
		<tr><td>Ingrese dirección:</td><td><input type="text" name="direccion" placeholder="Ingrese su direccion" required></td></tr>
		<tr><td>Ingrese su Correo:</td><td><input type="text" name="correo" placeholder="Ingrese su Email" required></td></tr>
		<tr><td>Ingrese su Telefono:</td><td><input type="text" name="telefono" placeholder="Ingrese su telefono" required></td></tr>
		<tr><td>Ingrese su Contraseña:</td><td><input type="password" name="contrasena" placeholder="Ingrese su contraseña" required></td></tr>
		<tr><td></td><td><input type="submit" value="Registrar"></td></tr>
		</form>
		</table>
		
</div>
<div></div>
<div class="registerboxb2">
	<h2>¿Ya tienes una cuenta?</h2>
	<form action="./../php/validacion.php" method="POST">
	<h2>Iniciar Sesion</h2>
	<p>Correo de usuario</p>
	<input type="text" name="correo" required>
	<p>Password: <br>
	    <input type="password" name="contrasena" required></p>
	<p class="center"><input type="submit" value="Iniciar Sesion"></p>
</form>
	<form action="./../ingresar.php">
		<input type="submit" value="Volver Atras">
	</form>
</div>