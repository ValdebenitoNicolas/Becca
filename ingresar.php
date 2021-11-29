	<?php  
			include"php/config.php";
			session_start();
			if(!empty($_SESSION['active']))
					{
						include"vistas/logout.php";

					}else{
						include"vistas/ingresar.php";
					}

	?>
<!DOCTYPE html>
<html>
<head>
	
<!-- 	<script src="js/main.js"></script> -->
	
<!-- 	<link rel="stylesheet" type="text/css" href="css/style_movil.css" media="screen and (max-width:480px) and (min-width:1px)">
	<link rel="stylesheet" type="text/css" href="css/style_tablet.css" media="screen and (max-width:700px) and (min-width:481px)">
	<link rel="stylesheet" type="text/css" href="css/style_pc.css" media="screen and (max-width:1200px) and (min-width:701px)"> -->
<!-- 	<link rel="stylesheet" type="text/css" href="css/style_pchd.css" media="screen and (max-width:3600px) and (min-width:1201px)"> -->
	<title>Tienda - Ingresar</title>
</head>
<body>
	<meta charset="utf-8">
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<div class="navcont">
			<div class="logo">
				<img src="img/logo.png">
			</div>
			<div id="slogan"><h1>Tienda de Productos</h1></div>
			<div id="nav">
				<ul class="tabs">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="productos.php">Productos</a></li>
					<li><a class="active" href="ingresar.php">Ingresar</a></li>
					<li><a href="quienesSomos.php">Quienes Somos</a></li>
				</ul>
			</div>
	</div>
	<div id="contenedor">
		<article>
				<!-- <a class="link_add" href="vistas/login.php">Iniciar Sesion</a> -->

				<?php  
					if(!empty($_SESSION['active']))
					{
						echo $_SESSION['primerNombre'];
					if ($_SESSION['admin']==1) {
						echo"
						<form action='admin/index.php'>
							<input type='submit' value='Ir al panel de admin'>
						</form>";
					}
					}else{
						include "vistas/login.php";
						echo "
							<form action='vistas/registro.php'>
								<input type='submit' value='Registrar nuevo usuario'>
							</form>";
					}

				?>
					
		</article>
		<aside>Infromación secundaria</aside>
	</div>
	<div id="footbox">
	<footer><br>Nicolas Valdebenito-Nicolas Roldan-Bastian Mellado<br>Estudiantes Informaticas</footer></div>
	

</body>
</html>