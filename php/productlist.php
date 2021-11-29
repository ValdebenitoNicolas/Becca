<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" type="text/css" href="./../css/style.css">
</body>
</html>
<?php include"php/config.php" ?>
<?php
	$consulta=" SELECT * FROM productos";
	$resultado=mysqli_query($conexion,$consulta)or die("Error al consultar los registros");
	
		echo "
		<table class='tbl'>";	
		while ($fila=mysqli_fetch_array($resultado)){
			if(!empty($_SESSION['active']))
			{
				echo 
				"<tr>
				<div id='product'>
					<div id='img-product'> <img class='zoom' src='".$fila['imagPr']."'> </div>
					<div id='txt-product'>
						<h3>".$fila['nombrePr']."</h3>
						<p>".$fila['descPr']."</p>
						<p>Precio: ".$fila['precioPr']."</p>
						<p>Cantidad: <input class='precio' type='number' value='1' id='cantidad-prod-".$fila['idProducto']."'></p>
						<p><input class='sub' type='submit' name='' value='Más Información'><input class='sub' type='submit' name='' 
							onclick='agregarCarro(`".$fila['idProducto']."`,`".$fila['nombrePr']."`,`".$fila['precioPr']."`)' 
							value='Añadir al carro'></p>
					</div>
					</div>
				</tr><br>";
			}else{
			echo "<tr>
					<div id='product'>
						<div id='img-product'> <img class='zoom' src='".$fila['imagPr']."'> </div>
						<div id='txt-product'>
						<h3>".$fila['nombrePr']."</h3>
						<p>".$fila['descPr']."</p>
						<p>Precio: ".$fila['precioPr']."</p>
						<p>Cantidad: <input class='precio' type='number' value='1' id='cantidad-prod-".$fila['idProducto']."'></p>
						<p><input class='sub' type='submit' name='' value='Más Información'></p>
					</div>
					</div>
				</tr><br>";}
		}
		echo "<br>";
		mysqli_close($conexion);
 ?>

 <script type="text/javascript">
 	class Carrito{
 		constructor() {
		    this.productos = [];
		    this.total = 0;
		}
 		agregar(producto){
 			this.productos.push(producto);
 			this.total += parseInt(producto.subTotal);
 			
 		}
 		eliminar(idProducto){
 			var nuevoarray = [];
	 		this.productos.forEach((producto, indice) => {
	 			//producto.idProducto
	 			//if(id == id)
	 			//array[indice] = algo
	 			//ir agregando nuevoarray.push(producto) a nuevoarray item que no tengan id == id
	 		});
	 		this.productos = nuevoarray;
	 		this.total=0;

	 		//array.slice(indexOf(1), 1)
 			//funcion eliminar item de array
 		}

 		actualizar(){
 			//refresca la vista con los productos que quedan en el carro
 		}

 		obtener(){
 			return {
 				productos: this.productos,
 				total: this.total
 			};
 		}
 	}

	var carro = new Carrito();

 	function agregarCarro(idProducto, nombrePr, precioPr){
  		carro.agregar({
  			idProducto: idProducto, 
  			nombrePr: nombrePr,
  			precioPr: precioPr,
  			cantidad: document.getElementById('cantidad-prod-' + idProducto).value,
  			subTotal: precioPr * document.getElementById('cantidad-prod-' + idProducto).value
  		});
  		mostrarCarro();
  	}

 	function eliminarProducto(idProducto){
 		carro.eliminar(idProducto);
 		mostrarCarro();
 	}

 	function mostrarCarro(){
 		var divCarrito = document.getElementById('carrito');
 		divCarrito.innerHTML = '';
 		var productos = carro.obtener().productos;

 		productos.forEach(producto => {
	 		var nuevoDiv = document.createElement("div");
	  		nuevoDiv.innerHTML ='<h4>' + producto.nombrePr + ' Precio: ' + producto.precioPr + ' | Cantidad: '+ producto.cantidad +' | subTotal: '+ producto.subTotal;

	  		divCarrito.append(nuevoDiv);
 		});

 		divCarrito.innerHTML += '<h5>TOTAL:'+ carro.obtener().total +'</h5>' + '<br>' + '<a id="butta" href="compra.php">Comprar</a></div>' + '<a id="butta" onclick="eliminarProducto()">Vaciar Carro</a></div>';
 	}
 </script>	<!-- <form class=´boxform´ action=´./../compra.php´><input type=submit´ value=Comprar></form> -->