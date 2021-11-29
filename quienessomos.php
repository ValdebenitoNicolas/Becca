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
					<li><a href="ingresar.php">Ingresar</a></li>
					<li><a class="active" href="quienessomos.php">Quienes Somos</a></li>
				</ul>
			</div>
	</div>
	<div id="contenedor">
		<article>
		
		<br>
	   	<h2> Nicolas Valdebenito: 19.014.777-0</h2>
	    <br>
		<h2>Bastian Mellado: 19.327.202-9</h2>
		<br>
		<h2>Nicolas Roldan: 20.172.766-9</h2> 
		</article>
		<aside>Infromación secundaria</aside>
	</div>
	<div id="footbox">
	<footer><br>Nicolas Valdebenito-Nicolas Roldan-Bastian Mellado<br>Estudiantes Informaticas</footer></div>
	

</body>
</html>