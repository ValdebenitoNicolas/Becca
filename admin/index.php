<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
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
				
				<a href="./../php/salir.php"><img class="salir" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
		<nav>
			<ul>
				<li><a href="./../index.php">Inicio</a></li>
				<li class="principal">
					<a href="#">Usuarios</a>
					<ul>
						<li><a href="#">Crear Usuario</a></li>
						<li><a href="#">Lista de Usuarios</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="#">Productos</a>
					<ul>
						<li><a href="ingresarproducto.php">Ingresar Producto</a></li>
						<li><a href="#">Lista de Productos</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
	<section id="container">
		<h1>Bienvenido al sistema</h1>
	</section>
</body>
</html>