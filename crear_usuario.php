<?php
require_once('db.php');

$username=$_POST['username'];
$pasword=$_POST['pasword'];
$fk_rol=$_POST['fk_rol'];

$insert= "INSERT INTO user (ID,username,pasword,fk_rol) VALUES ('0','$username','$pasword','$fk_rol')";

mysqli_query($conexion,$insert);

echo '<script>
self.location.href = "crud_usuarios.php";
</script>';
?>