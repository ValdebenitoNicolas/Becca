<?php include"config.php" ?>
<?php 
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