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
    
    <table width="100%" cellspacing="0" class="table">
    <tr>
                <td><b>ID</b></td>
                <td><b>Nombre de Usuario</b></td>
                <td><b>Contraseña</b></td>
                <td><b>Rol ID</b></td>
                <td><b>Eliminar</b></td>
                <td><b>Editar</b></td>
            </tr>
            
        <?php  
        include_once("db.php");
        $select = "SELECT * FROM user";
        $consulta1 = mysqli_query($conexion,$select);
        
            foreach ($consulta1 as $fila)
            {
                $datos=$fila['ID']."||".
                $datos=$fila['username']."||".
                $datos=$fila['pasword']."||".
                $fila['fk_rol'];
                $datos=array();
                ?>
                <th> <?php echo ($fila['ID'])?></th>
                <th> <?php echo ($fila['username'])?></th>
                <th> <?php echo ($fila['pasword'])?></th>
                <th> <?php echo ($fila['fk_rol'])?></th>

            <td><a class="btn btn-danger" href="eliminar_usuario.php?ID=<?php echo $fila['ID']?>"> Eliminar</td>
            <td><a class="btn btn-success" href="editar_usuario.php?ID=<?php echo $fila['ID']?>">Editar</td>
            <!--d><a class="btn btn-danger" href="">Eliminar</td-->
            <?php
            echo "</tr>";
            }
        ?>
    </table>
</main>

</body>
</html>