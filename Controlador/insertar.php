<?php 

	require_once ('../Modelo/classConexion.php');
	require_once ('../Modelo/classConsultas.php');

	$mensaje = null;

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	if (strlen($name) > 0 && strlen($email) > 0 && strlen($phone) > 0) {
		$consultas = new Consultas();
		$mensaje = $consultas->insertarusuario($name, $email, $phone);
		echo "<br><a href='../Vista/insertar.php'>Nuevo usuario</a><br>";
		echo "<br><a href='../Vista/ver.php'>Ver usuarios</a><br>";
	}else{
		echo "Porfavor completa todos los campos";
		echo "<br><a href='../Vista/insertar.php'>Nuevo usuario</a><br>";
	}
	echo $mensaje;

?>