<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- BOOTSTRAP4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    
	<title></title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
    <a href="insertar.php" class="navbar-brand">MVC-CRUD</a>
    </div>
</nav>
<h1 class="titulo1">Agregar usuarios</h1>
    <div class="container">
        <div class="col-md-4 main-container">
            <div class="card card-body">
                <form method="POST" action="../Controlador/insertar.php">
                    <table>
                        <tr>
                            <td>Nombre:</td>
                            <td><input type="text" name="name" class="form-control" placeholder="Escribe un nombre" autofocus></td>	
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="email" name="email" class="form-control" placeholder="Escribe un email" autofocus></td>	
                        </tr>
                        <tr>
                            <td>Telefono:</td>
                            <td><input type="number" name="phone" class="form-control" placeholder="Escribe un #" autofocus></td>	
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" class="btn btn-success btn-block" value="Registar usuario"></td>	
                        </tr>
                    </table>
                </form>
            </div >
                <div class="boton">
                    <a href="./ver.php" class="btn btn-primary">Ver Usuarios</a>
                </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    	
</body>
</html>