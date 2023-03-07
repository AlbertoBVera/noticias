<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuarios</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/all.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/sticky-footer-navbar.css" rel="stylesheet">
</head>
<body>
<main role="main" class="flex-shrink-0">
<div class="container">
<div class="form-control">
     <!-- Example row of columns -->
     <div class="row">
       <div class="col-lg-12">

    <h1>Tabla de Usuarios</h1>
        <div class="row">
        <div class="col-lg-1">
        <a class="btn btn-danger" href='album.html'>Regresar<a>
        </div>
        <div class="col-lg-1">
        <a class="btn btn-success" href='form_usuarios.php'>Crear Usuario<a>
        </div>
        <br><br>
        <br>
    </div>
    <?php 
        include_once("db.php");
        $resultado1 = mysqli_query($conexion,"SELECT * FROM user");

        echo"
        <table width=\"400\" class=\"table\">
        <thead>
            <tr>
                <td><b>ID</b></td>
                <td><b>Nombre de Usuario</b></td>
                <td><b>Contraseña</b></td>
                <td><b>Rol ID</b></td>
                <td><b><center>Editar</center></b></td>
                <td><b><center>Eliminar</center></b></td>
            </tr>
            <tr>";
        while($consulta1 = mysqli_fetch_array($resultado1))
        {
            echo 
            "
                <td>".$consulta1['ID']."</center></td>
                <td>".$consulta1['username']."</center></td>
                <td>".$consulta1['pasword']."</center></td>
                <td>".$consulta1['fk_rol']."</center></td>
                <td><center><a class=\"btn btn-success\" href=\"\">Editar</center></td>
                <td><center><a class=\"btn btn-danger\" href=\"eliminar_usuario.php?ID=".$consulta1['ID']."\">Eliminar</center></td>
            </tr>
        <thead>
            ";
        }
    ?>
    
        </div>
    </div> <!-- Conteiner -->
</main>






</body>
</html>