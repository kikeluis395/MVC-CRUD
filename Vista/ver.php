<?php 
	require_once ('../Modelo/classConexion.php');
	require_once ('../Modelo/classConsultas.php');
	require_once ('../Controlador/cargar.php');
?>
<!DOCTYPE html>
<html>
<head>
	 <!-- FONTAWESOME -->
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	 <!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/styles.css">
	<title></title>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<div class="container">
			<a href="./insertar.php" class="navbar-brand">MVC-CRUD</a>
		</div>
	</nav>
	<h1 class="titulo1">Usuarios registrados</h1>
	<div class="container p-4">
		<div class="row">
			<div class="container-buscar">
				<form method='get'>
					<input type='text' name="buscar" class="form" placeholder="Ingrese nombre">
					<input type='submit' value='Buscar' class="btn btn-success ">
				</form>
			</div>
			<?php 
				if (isset($_GET['buscar'])) {
					buscar($_GET['buscar']);
				}else{
					cargar();
				}
			?>
			</div>
		</div>
	<div class="boton">
		<a href="insertar.php">
			<button class="btn btn-primary" > Nuevo usuario</button>
			
		</a>
		<a href="ver.php">
			<button class="btn btn-primary" > Ver todos los usuarios</button>
		</a>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    

</body>
</html>