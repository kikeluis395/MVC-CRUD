<?php 
	
	require_once ('../Modelo/classConexion.php');
	require_once ('../Modelo/classConsultas.php');

	$mensaje = null;
	$mensaje1 = null;
	$mensaje2 = null;
	$mensaje3 = null;
	$mensaje4 = null;

	$consultas = new Consultas();
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$id = $_POST['id'];
	
	if (strlen($name) > 0 && strlen($email) > 0 && strlen($phone) > 0){
		$mensaje = $consultas->modificarusuario("name", $name, $id);
		$mensaje = $consultas->modificarusuario("email", $email, $id);
		$mensaje = $consultas->modificarusuario("phone", $phone, $id);
		$mensaje = $consultas->modificarusuario("id", $id, $id);

		echo '"'.$mensaje.'"<br><br>';	

		echo 'El Nombre del usuario es: "'. $name .'"<br>';
		echo 'El email del usuario es: "'. $email .'"<br>';
		echo 'El telefono del usuario es: "'. $phone .'"<br>';
		echo 'El id del usuario es: "'. $id .'"<br><br>';
	
		echo "<div><a href='../Vista/ver.php'>Ver usuarios</a></div>";
	}else{
		echo "Por favor rellene todos los campos, todos son requeridos";
	}

?>