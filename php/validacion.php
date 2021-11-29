<?php 
	include"config.php";

	session_start();

	$correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];

	// $sql = "SELECT * FROM cliente WHERE correo = '$correo' AND contrasena = '$contrasena' ";
	// $resultado = $conexion->query($sql);

	// $row = $resultado->fetch_assoc();

	$query = mysqli_query($conexion,"SELECT * FROM cliente WHERE correo = '$correo' AND contrasena = '$contrasena' ");
	$result = mysqli_num_rows($query);

	if($result > 0){
		$data = mysqli_fetch_array($query);
		$_SESSION['active'] = true;
		$_SESSION['primerNombre'] = $data['primerNombre'];
		$_SESSION['segundoNombre'] = $data['segundoNombre'];
		$_SESSION['primerApellido'] = $data['primerApellido'];
		$_SESSION['segundoApellido'] = $data['segundoApellido'];
		$_SESSION['direccion'] = $data['direccion'];
		$_SESSION['correo'] = $data['correo'];
		$_SESSION['telefono'] = $data['telefono'];
		$_SESSION['contrasena'] = $data['contrasena'];
		$_SESSION['admin'] = $data['admin'];
		if ($_SESSION['admin'] == 1)
		{
			header("Location: ./../admin/index.php");
		}else{
			header("Location: ./../index.php");
		}
	}
	else{
		// header("location: ingresar.php");
		echo 'El usuario no existe';
	}

	if($resultado->num_rows >0){
		echo 'Usuario Correcto';
	}else{
		echo 'El usuario no existe';
	}



 ?>