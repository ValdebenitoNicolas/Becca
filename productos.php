<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/fontawesome.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900">
	<script src="js/all.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
<!-- 	<link rel="stylesheet" type="text/css" href="css/style_movil.css" media="screen and (max-width:480px) and (min-width:1px)">
	<link rel="stylesheet" type="text/css" href="css/style_tablet.css" media="screen and (max-width:700px) and (min-width:481px)">
	<link rel="stylesheet" type="text/css" href="css/style_pc.css" media="screen and (max-width:1200px) and (min-width:701px)"> -->
<!-- 	<link rel="stylesheet" type="text/css" href="css/style_pchd.css" media="screen and (max-width:3600px) and (min-width:1201px)"> -->
	<title>Tienda - Productos</title>
</head>

<body>
	<div class="navfloat">
		
			<div class="socialt">
				<p><span class="fas fa-mobile-alt"></span>+56900000 - <i class="fas fa-envelope"></i> beccas.pastry@gmail.com</p>
			</div>
			<div class="imgsmb">
				<a href=""><img src="img/wsp.png" class="sm"></a>
			</div>
			<div class="imgsmb">
				<a href="https://www.instagram.com/beccas_pastry/"><img src="img/insta.png" class="sm"></a>
			</div>
		
	</div>
	<div class="sep"></div>
	<div class="navcont">
		<div class="slogan">
			<img src="img/banner.png" class="banner">
		</div>
		<div class="nav">
			<ul class="tabnav">
				<li><a href="index.php">Inicio</a></li>
				<li><a class="active" href="productos.php">Productos</a></li>
				<li><a href="ingresar.php">Contacto</a></li>
				<li><a href="quienessomos.php">Quienes Somos</a></li>
			</ul>
		</div>

	</div>
	<hr class="bodyhr">
	<script type="text/javascript">
		function ppto(){
			var p = document.getElementById('persxt').value;
			var b = document.getElementById('persxb').value;
			var d = document.getElementById('persxd').value;

			if (p==15){
				valor = 20000;
			}
			else if (p==20){
				valor = 25000;
			}
			else if (p==30){
				valor = 30000;
			}

			if (b==1){
				valor = valor+5000;
			}
			else if (b==2){
				valor = valor+10000;
			}
			else if (b==3){
				valor = valor+15000;
			}

			if (d==1){
				valor = valor+5000;
			}
			else if (d==2){
				valor = valor+10000;
			}
			else if (d==3){
				valor = valor+15000;
			}

			document.getElementById('valor').value = valor;
		}
		ppto();
	</script>
	
	<div id="contenedor">
		<div id="prod">
			<div class="sec1">
				<div class="wrap">
					<ul class="tabs">
						<li><a href="#tab1"><span class="fas fa-birthday-cake"></span><span class="tab-text"> Tortas</span></a></li>
						<li><a href="#tab2"><span class="fas fa-cookie-bite"></span><span class="tab-text"> Galletas</span></a></li>
						<li><a href="#tab3"><span class="fas fa-stroopwafel"></span><span class="tab-text"> Pan de pascua</span></a></li>
						<li><a href="#tab4"><span class="fas fa-cheese"></span><span class="tab-text"> Queques</span></a></li>
						<li><a href="#tab5"><span class="fas fa-candy-cane"></span><span class="tab-text"> Otros</span></a></li>
					</ul>
					<div class="sections">
						<article id="tab1">
							<h1><span class="fas fa-cat black"></span> Tortas y Pasteles</h1>
							<hr width="1000px">
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit rem eligendi tempore cum ipsa quas, temporibus animi accusantium a tempora quisquam quibusdam voluptas. Hic corrupti nobis sunt similique quae fuga!:<br>
								<br>
								
							</p>
							<div class="cake">
								<div class="selectionc">
									<h4>Personaliza tu torta!</h4>
									<table class="tablemenu">
										<tr>
											<td>
											<p>
											Cantidad de personas:</p>	
											</td>
											<td>
												<div class="content-select">
												<select id="persxt" onchange="ppto()">
													<option value="">Elija una opción</option>
													<option value="15">15 Personas</option>
													<option value="20">20 Personas</option>
													<option value="30">30 Personas</option>
												</select>
												<i></i>
												</div>
											</td>
										</tr>
										
										<tr>
											<td>
												<p>Tipo de base:</p>
											</td>
											<td>
											<div class="content-select">
											<select id="persxb" onchange="ppto()">
													<option value="">Elija una opción</option>
													<option value="1">bizcocho clasico</option>
													<option value="2">Panqueque</option>
													<option value="3">Hojarazca</option>
												</select>
												<i></i>
												</div>
											</td>
										</tr>

										<tr>
											<td>
											<p>	Tipo de decoración:</p>
											</td>
											<td>
											<div class="content-select">
											<select id="persxd" onchange="ppto()">
													<option value="">Elija una opción</option>
													<option value="1">Decoración en Crema</option>
													<option value="2">Decoración en Fondant</option>
													<option value="3">Decoración en pastillaje 3D</option>
												</select>
												<i></i>
												</div>
											</td>
										</tr>
										<tr>
											<td>
											<p>	Total cotización:</p>
											</td>
											<td>
												
												<input type="text" id="valor">
												
											</td>
										</tr>
									
									</table>
								</div>
								<div class="imgexample">
									<img src="img/img5.png" class="showm">
								</div>
							</div>
						</article>
                    </div>
                </div>
			</div>
			<div class="selectionc2">
				<div class="sct">
				<h1>Hola</h1>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum quaerat dolor quibusdam temporibus magnam provident blanditiis eveniet in cumque inventore iure nostrum, laudantium fuga. Quia iste ipsum neque autem mollitia.</p>
				</div>

				<div class="sci">
					<img src="img/img7.png" class="showm">
				</div>

				<div class="sci">
				<img src="img/img6.png" class="showm">
				</div>

				<div class="sct">
					<h1>Hola</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo neque cupiditate possimus aspernatur laboriosam numquam accusantium exercitationem. Ab aperiam adipisci enim eaque ut natus, dicta, debitis ipsam maiores, corporis vitae.</p>
				</div>


				<div class="sct">
					<h1>Hola</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla debitis, delectus, minima, quis adipisci laborum non velit optio eum ab doloribus soluta sequi illum placeat alias. Dignissimos sint odit magnam.</p>
				</div>

				<div class="sci">
				<img src="img/img8.png" class="showm">
				</div>
			</div>
			<div class="sec2">
				
			</div>
	</div>
	<div id="footbox">
		<footer><br>Nicolas Valdebenito</footer>
	</div>
</body>
</html>