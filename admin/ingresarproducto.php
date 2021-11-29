<?php 
session_start();
include"php/config.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./../css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Panel de Administración</title>
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

		<form action="php/registroproducto.php" method="POST">
		<table class="tbl">
				<div class="container">
				<div class="card">
					<img id="img-preview">
					<!-- <div class="card-footer"></div> -->
						
						
					

				</div>
		</div>
		<input type="file" id="img-uploader" name="img-preview">
		<input type="text" value="" id="imagPr" name="imagPr">

		<hr>
		
		
		<tr><td>Ingrese Nombre producto:</td><td><input class="ib" type="text" name="nombrePr" placeholder="Nombre producto" required></td></tr>
		<tr><td>Ingrese una descripción:</td><td><input class="ib" type="text" name="descPr" placeholder="Descripción" required></td></tr>
		<tr><td>Ingrese el precio unitario:</td><td><input type="number" name="precioPr" placeholder="Precio" required></td></tr>
		<tr><td></td><td><input type="submit" value="Ingresar"></td></tr>
		</form>
		</table>
	</section>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script type="text/javascript">
		const imagePreview = document.getElementById('img-preview');
		const imageUploader = document.getElementById('img-uploader');
		const imageUrl = document.getElementById('imagPr');

		const CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/penpen/image/upload';
		const CLOUDINARY_UPLOAD_PRESET = 'rbd6ygnc';

		imageUploader.addEventListener('change', async (e) => {

		    const file = e.target.files[0];
		    const formData = new FormData();
		    formData.append('file', file);
		    formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);

			const res = await axios.post(CLOUDINARY_URL, formData, {
				headers: {
					'Content-Type': 'multipart/form-data'
				}
			})
			console.log(res);
		    imagePreview.src = res.data.secure_url;
		    imageUrl.value = res.data.secure_url;
		 


});
	</script>
</body>
</html>