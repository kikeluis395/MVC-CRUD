<?php 

	class Conexion {
		
	 	public function get_conexion()
	 	{
	 		$user = "root";
	 		$pass = "";
	 		$host = "localhost";
	 		$db   = "villareal";

	 		try{
			 $conexion = new PDO("mysql:host=$host;dbname=$db;",$user,$pass);
			 //Reporte de errores.//
	 		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 		return $conexion;
	 		}catch(PDOException $e){
    			echo "ERROR: " . $e->getMessage();
			}
	 		$conexion->close();
	 	}
	}
?>