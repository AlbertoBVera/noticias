<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuarios</title>
</head>
<body>
    <h1>Tabla de Usuarios</h1>
    <a href="form_usuarios.php"><button>Crear Usuario</button></a><br><br>

    <?php 
        include_once("db.php");
        $resultado1 = mysqli_query($conexion,"SELECT * FROM user");

        echo"
        <table width=\"400\" border=\"1\">
        <thead>
            <tr>
                <td><b><center>ID</center></b></td>
                <td><b><center>Nombre de Usuario</center></b></td>
                <td><b><center>Contraseña</center></b></td>
                <td><b><center>Rol ID</center></b></td>
                <td><b><center>Editar</center></b></td>
                <td><b><center>Eliminar</center></b></td>
            </tr>
            <tr>";
        while($consulta1 = mysqli_fetch_array($resultado1))
        {
            echo 
            "
                <td>".$consulta1['ID']."</td>
                <td>".$consulta1['username']."</td>
                <td>".$consulta1['pasword']."</td>
                <td>".$consulta1['fk_rol']."</td>
                <td><a href=\"\"><button type=\"button\">Editar</td>
                <td><a href=\"\"><button type=\"button\">Eliminar</td>
            </tr>
        <thead>
            
            ";
        }
    ?>
</table>
</body>
</html>