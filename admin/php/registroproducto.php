<?php include "config.php"; ?>
<?php  
				$nombrePr=$_POST["nombrePr"];
				$descPr=$_POST["descPr"];
				$precioPr=$_POST["precioPr"];
				$imagPr=$_POST["imagPr"];
				$insertar="INSERT INTO productos(
				nombrePr,
				descPr,
				precioPr,
				imagPr
				)
				values(
				'$nombrePr',
				'$descPr',
				'$precioPr',
				'$imagPr'
				)";
				$resultado=mysqli_query($conexion,$insertar)or die("Error al ingresar los registros");
		?>
		<?php  ?>