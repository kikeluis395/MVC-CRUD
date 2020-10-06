<?php 

	class Consultas {

	 	public function insertarusuario($arg_name, $arg_email, $arg_phone)
	 	{
	 		//Creamos un objeto de (Conexion) que se va guardar en la variable $modelo
	 		$modelo = new Conexion(); 
	 		//Creamos una variable ($conexion) para guardar a la variable $modelo y traer la función get_conexion de la (Clase Conexion)
	 		$conexion = $modelo->get_conexion(); 
	 		//Creamos una variable ($sql) para hacer la consulta (Query) a la base de datos
	 		$sql = "INSERT INTO users (name, email, phone) VALUES (:name, :email, :phone)";
	 		//Creamos una variable ($statement) para llamar a la conexion ($conexion) para preparar la consulta con el método (prepare) y pasar la variable ($sql) donde esta la instrucción sql para ejecutar a la base de datos
	 		$statement = $conexion->prepare($sql);
	 		//Invocar a la variable ($statement) para traer a la funcion (bindParam) para llamar a los argumentos de mi función
	 		$statement->bindParam(":name", $arg_name);
	 		$statement->bindParam(":email", $arg_email);
	 		$statement->bindParam(":phone", $arg_phone);

	 		//Hacemos una validación si la variable $statement no tiene ningún dato
	 		if (!$statement) {
	 		//Retornamos un mensaje de error
	 			return "Error al crear el Registro";	
	 		}else { //Si la variable $statement tiene datos correctos
	 		//Ejecutará la consulta con el método (execute)
	 			$statement->execute();
	 		//Retornamos un mensaje de éxito
	 			return "Usuario registrado correctamente";		
	 		}
	 		//Cerramos la conexión con el método (close)
	 		$statement->close();
	 	}

	 	public function cargarusuarios(){
	 		//Creamos una variable ($rows) que va ser un arreglo con valor nulo (null)
	 		$rows = null;
	 		//Creamos un objeto de (Conexion) que se va guardar en la variable $modelo
	 		$modelo = new Conexion();
	 		//Creamos una variable ($conexion) para guardar a la variable $modelo y traer la función get_conexion de la (Clase Conexion)
	 		$conexion = $modelo->get_conexion();
	 		//Creamos una variable ($sql) para hacer la consulta (Query) a la base de datos
	 		$sql = "SELECT * FROM users";
	 		//Creamos una variable ($statement) para llamar a la conexion ($conexion) para preparar la consulta con el método (prepare) y pasar la variable ($sql) donde esta la instrucción sql para ejecutar a la base de datos
	 		$statement = $conexion->prepare($sql);
	 		//Ejecutará la consulta con el método (execute)
	 		$statement->execute();

	 		//Vamos a recorrer el resultado de la consulta, creamos una variable ($resultado) que va ser igual a la variable ($statement) y llamar al método (fetch)
	 		while ($resultado = $statement->fetch()) {
	 		//La variable ($rows) lo convertimos en un arreglo ([]) va ser igual a la variable ($resultado) para guardar el resultado
	 			$rows[] = $resultado;	
	 		}
	 		//Retornamos la variable ($rows)
	 		return $rows;
	 		//Cerramos la conexión con el método (close)
	 		$statement->close();		 	
	 	}

	 	public function eliminarusuario($arg_id){
	 		//Creamos un objeto de (Conexion) que se va guardar en la variable $modelo
	 		$modelo = new Conexion();
	 		//Creamos una variable ($conexion) para guardar a la variable $modelo y traer la función get_conexion de la (Clase Conexion)
	 		$conexion = $modelo->get_conexion();
	 		//Creamos una variable ($sql) para hacer la consulta (Query) a la base de datos
	 		$sql = "DELETE FROM users WHERE id = :id";
	 		//Creamos una variable ($statement) para llamar a la conexion ($conexion) para preparar la consulta con el método (prepare) y pasar la variable ($sql) donde esta la instrucción sql para ejecutar a la base de datos
	 		$statement = $conexion->prepare($sql);
	 		//Invocar a la variable ($statement) para traer a la funcion (bindParam) para llamar a los argumentos de mi función
	 		$statement->bindParam(":id", $arg_id);

	 		//Hacemos una validación si la variable $statement no tiene ningún dato
	 		if (!$statement) {
	 			//Retornamos un mensaje de error
            	return "Error al eliminar usuario";
         	}else{
         		//Ejecutará la consulta con el método (execute)
         		$statement->execute();
         		//Retornamos un mensaje de éxito
                return "usuario eliminado correctamente";
         	}
         	//Cerramos la conexión con el método (close)
         	$statement->close();
	 	}

	 	public function buscar($arg_name){
	 		//Creamos una variable ($rows) que va ser un arreglo con valor nulo (null)
	 		$rows = null;
	 		//Creamos un objeto de (Conexion) que se va guardar en la variable $modelo
	 		$modelo = new Conexion();
	 		//Creamos una variable ($conexion) para guardar a la variable $modelo y traer la función get_conexion de la (Clase Conexion)
	 		$conexion = $modelo->get_conexion();
	 		//Creamos una variable ($name) para guardar la variable ($arg_name) concatenado el (%) para buscar mediante la consulta ($sql)
	 		$name = "%".$arg_name."%";
	 		//Creamos una variable ($sql) para hacer la consulta (Query) a la base de datos
	 		$sql = "SELECT * FROM users WHERE name like :name";
	 		//Creamos una variable ($statement) para llamar a la conexion ($conexion) para preparar la consulta con el método (prepare) y pasar la variable ($sql) donde esta la instrucción sql para ejecutar a la base de datos
	 		$statement = $conexion->prepare($sql);
	 		//Invocar a la variable ($statement) para traer a la funcion (bindParam) para llamar a la variable ($name) concatenado el (%) para hacer la consulta
	 		$statement->bindParam(":name", $name);
	 		//Ejecutará la consulta con el método (execute)
	 		$statement->execute();

	 		//Vamos a recorrer el resultado de la consulta, creamos una variable ($resultado) que va ser igual a la variable ($statement) y llamar al método (fetch)
	 		while ($resultado = $statement->fetch()) {
	 		//La variable ($rows) lo convertimos en un arreglo ([]) va ser igual a la variable ($resultado) para guardar el resultado
	 			$rows[] = $resultado;	
	 		}
	 		//Retornamos la variable ($rows)
	 		return $rows;
	 		//Cerramos la conexión con el método (close)
	 		$statement->close();	
	 	}

	 	public function cargar($arg_id){
	 		//Creamos una variable ($rows) que va ser un arreglo con valor nulo (null)
	 		$rows = null;
	 		//Creamos un objeto de (Conexion) que se va guardar en la variable $modelo
	 		$modelo = new Conexion();
	 		//Creamos una variable ($conexion) para guardar a la variable $modelo y traer la función get_conexion de la (Clase Conexion)
	 		$conexion = $modelo->get_conexion();
	 		//Creamos una variable ($sql) para hacer la consulta (Query) a la base de datos
	 		$sql = "SELECT * FROM users WHERE id = :id";
	 		//Creamos una variable ($statement) para llamar a la conexion ($conexion) para preparar la consulta con el método (prepare) y pasar la variable ($sql) donde esta la instrucción sql para ejecutar a la base de datos
	 		$statement = $conexion->prepare($sql);
	 		//Invocar a la variable ($statement) para traer a la funcion (bindParam) para llamar a los argumentos de mi función
	 		$statement->bindParam(":id", $arg_id);
	 		//Ejecutará la consulta con el método (execute)
	 		$statement->execute();

	 		//Vamos a recorrer el resultado de la consulta, creamos una variable ($resultado) que va ser igual a la variable ($statement) y llamar al método (fetch)
	 		while ($resultado = $statement->fetch()) {
	 		//La variable ($rows) lo convertimos en un arreglo ([]) va ser igual a la variable ($resultado) para guardar el resultado
	 			$rows[] = $resultado;	
	 		}
	 		//Retornamos la variable ($rows)
	 		return $rows;
	 		//Cerramos la conexión con el método (close)
	 		$statement->close();		
	 	}

	 	public function modificarusuario($arg_campo, $arg_valor, $arg_id){
	 		//Creamos un objeto de (Conexion) que se va guardar en la variable $modelo
	 		$modelo = new Conexion();
	 		//Creamos una variable ($conexion) para guardar a la variable $modelo y traer la función get_conexion de la (Clase Conexion)
	 		$conexion = $modelo->get_conexion();
	 		//Creamos una variable ($sql) para hacer la consulta (Query) a la base de datos
	 		$sql = "UPDATE users SET $arg_campo = :valor WHERE id = :id";
	 		//Creamos una variable ($statement) para llamar a la conexion ($conexion) para preparar la consulta con el método (prepare) y pasar la variable ($sql) donde esta la instrucción sql para ejecutar a la base de datos
	 		$statement = $conexion->prepare($sql);
	 		//Invocar a la variable ($statement) para traer a la funcion (bindParam) para llamar a los argumentos de mi función
	 		$statement->bindParam(":valor", $arg_valor);
	 		$statement->bindParam(":id",  $arg_id);

	 		//Hacemos una validación si la variable $statement no tiene ningún dato
	 		 if (!$statement) {
	 			//Retornamos un mensaje de error
            	return "Error al modificar el producto";
         	}else{
         		//Ejecutará la consulta con el método (execute)
         		$statement->execute();
         		//Retornamos un mensaje de éxito
                return "Usuario modificado exitosamente";
         	} 
         	//Cerramos la conexión con el método (close)
         	$statement->close(); 
	 	}
	}
?>