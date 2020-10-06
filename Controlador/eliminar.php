<?php 

	require_once ('../Modelo/classConexion.php');
	require_once ('../Modelo/classConsultas.php');

	if (isset($_POST['id'])){
		$id = $_POST['id'];
		$consultas = new Consultas();
		$mensaje = $consultas->eliminarusuario($id);
		echo $mensaje;
		echo "<div><a href='../Vista/ver.php'>Volver a la lista de usuarios</a></div>";
	}else{
		echo "No ha llegado el id del usuario a eliminar.php";
	}
?>