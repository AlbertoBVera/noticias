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
<body>
<main role="main" class="flex-shrink-0">
<div class="container">
      <div class="form-control">
        
    <h1>Formulario de Usuarios</h1><br>

    <form action="form_usuarios.php" method="post">
        
        <div class="form-group">
            <label class="col-md-12 control-label">Nombre de Usuario: </label>
            <div class="col-md-12"> 
            <input type="text" name="username" id="usuario" class="form-control"></input>         
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12 control-label">Contraseña: </label>
            <div class="col-md-12"> 
            <input type="password" name="pasword" id="pasword" class="form-control"></input>
            </div>
        </div>    
        
        <div class="form-group">
            <label class="col-md-12 control-label">Rol ID: </label>
            <div class="col-md-12"> 
            <input type="number" name="fk_rol" id="fk_rol" class="form-control"></input>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" value="Crear" name="crear" class="btn btn-success"></input> 
            <a class="btn btn-danger" href='crud_usuarios.php'>Cancelar<a>
                
        </div>  
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
</main>
</body>
</html>