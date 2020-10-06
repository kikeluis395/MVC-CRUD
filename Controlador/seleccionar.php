<?php 
    
	function seleccionar(){
		if (isset($_POST['id'])) {
			$consultas = new Consultas();
			$id = $_POST['id'];
			$filas = $consultas->cargar($id);

			foreach ($filas as $fila) {
                echo '
                    <div class="col-md-8">
                        <form action="../Controlador/modificar.php" method="POST">
                            <table>
                                <tr>
                                    <td>Nombre:</td>
                                    <td><input type="text" class="form-control" name="name" value="'.$fila['name'].'"></td>	
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><input type="email" class="form-control" name="email" value="'.$fila['email'].'"></td>	
                                </tr>
                                <tr>
                                    <td>Telefono:</td>
                                    <td><input type="number" class="form-control" name="phone" value="'.$fila['phone'].'"></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><input type="hidden" name="id" value="'.$id.'"></td>	
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><input type="submit" class="btn btn-success btn-block" value="Modificar usuario"></td>	
                                </tr>
                            </table>
                        </form>
                    </div>
				';	
			}
		}	
	}
?>