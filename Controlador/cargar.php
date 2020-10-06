<?php 

	function cargar(){
		//nos conectamos con el modelo//
		$consulta = new Consultas();
		$filas = $consulta->cargarusuarios();

        echo '<table class="table table-bordered">
				<tr>
					<th>id</th>
					<th>Nombre</th>
                    <th>email</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
				</tr>';

		foreach ($filas	 as $fila) {
			echo "<tr>";
			echo "<td>".$fila['id']."</td>";
			echo "<td>".$fila['name']."</td>";
			echo "<td>".$fila['email']."</td>";
			echo "<td>".$fila['phone']."</td>";
            echo "<td>
                    <div class='acciones'>
					  <form action='../Controlador/eliminar.php' method='post' >
					  <button type='hidden' name='id' class='btn btn-danger' value='".$fila['id']."'> <i class='far fa-trash-alt'></i></button>
					  </form>
					  <form action='./modificar.php' method='post' >
					  <button type='hidden' name='id' class='btn btn-secondary' value='".$fila['id']."'> <i class='fas fa-marker'></i></button>
                      </form>
                    </div>
				  </td>";
			echo "</tr>";
		}

		echo "</table>";
	}

	function buscar($name){
		$consulta = new Consultas();
		$filas = $consulta->buscar($name);

		echo "<table class='table table-bordered'>
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>email</th>
                    <th>telefono</th>
                    <th>Acciones</th>
				</tr>";

		if (isset($filas)) {
			foreach ($filas as $fila) {
			echo "<tr>";
			echo "<td>".$fila['id']."</td>";
			echo "<td>".$fila['name']."</td>";
			echo "<td>".$fila['email']."</td>";
			echo "<td>".$fila['phone']."</td>";
			echo "<td>
                    <div class='acciones'>
                        <form action='../Controlador/eliminar.php' method='post' >
                        <button type='hidden' name='id' class='btn btn-secondary' value='".$fila['id']."'> <i class='far fa-trash-alt'></i></button>
                        </form>
                        <form action='./modificar.php' method='post' >
                        <button type='hidden' name='id' class='btn btn-danger' value='".$fila['id']."'> <i class='fas fa-marker'></i></button>
                        </form>
                    </div>
				  </td>";
			echo "</tr>";
		}

		echo "</table>";	
		}		
	}	
?>