<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
    <link href="/css/all.min.css">
</head>
<body class="conteiner">

    <h1>Formulario de Usuarios</h1>

    <form action="form_usuarios.php" method="post">
        <label>Nombre de Usuario: </label>
        <input type="text" name="username" id="usuario"></input><br>
        <label>Contraseña: </label>
        <input type="password" name="pasword" id="pasword"></input><br>
        <label>Rol ID: </label>
        <input type="number" name="fk_rol" id="fk_rol"></input><br>      
        <br>
        <input type="submit" value="Crear" name="crear"></input>      

<?php
    if(isset($_POST['crear'])){

        require_once('db.php');

        $username=$_POST['username'];
        $pasword=$_POST['pasword'];
        $fk_rol=$_POST['fk_rol'];

        $insert= "INSERT INTO user (username,pasword,fk_rol) VALUES ('$username','$pasword','$fk_rol')";

        mysqli_query($conexion,$insert);
        echo '<script>
        self.location.href = "crud_usuarios.php";
        </script>';
    }
?>
</body>
</html>