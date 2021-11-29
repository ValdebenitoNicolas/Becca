<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./../css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Sisteme Ventas</title>
</head>
<body>
	<header>
		<div class="header">
			
			<h1>Sistema Admin</h1>
			<div class="optionsBar">
				<p></p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['primerNombre']; echo" "; echo  $_SESSION['primerApellido']; ?></span>
				<img class="photouser" src="img/user.png" alt="Usuario">
				<a href="./../php/salir.php"><img class="salir" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
		<nav>
			<ul>
				<li><a href="./../index.php">Inicio</a></li>
				<li class="principal">
					<a href="#">Usuarios</a>
					<ul>
						<li><a href="#">Nuevo Usuario</a></li>
						<li><a href="#">Lista de Usuarios</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="#">Productos</a>
					<ul>
						<li><a href="#">Nuevo Producto</a></li>
						<li><a href="#">Lista de Productos</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
	<section id="container">
		<h1>Ingresar nuevo producto</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
		<?php  
			include "./../php/config.php";
				$primerNombre=$_POST["primerNombre"];
				$segundoNombre=$_POST["segundoNombre"];
				$primerApellido=$_POST["primerApellido"];
				$segundoApellido=$_POST["segundoApellido"];
				$direccion=$_POST["direccion"];
				$correo=$_POST["correo"];
				$telefono=$_POST["telefono"];
				$contrasena=$_POST["contrasena"];

				$insertar="INSERT INTO cliente(
				primerNombre,
				segundoNombre,
				primerApellido,
				segundoApellido,
				direccion,
				correo,
				telefono,
				contrasena,
				admin)
				values(
				'$primerNombre',
				'$segundoNombre',
				'$primerApellido',
				'$segundoApellido',
				'$direccion',
				'$correo',
				'$telefono',
				'$contrasena',
				'0'
				)";
				$resultado=mysqli_query($conexion,$insertar)or die("Error al ingresar los registros");

		?>
	</section>
</body>
</html>