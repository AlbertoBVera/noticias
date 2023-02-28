<?php
$usuario=$_POST['username'];
$contraseña=$_POST['pasword'];
session_start();
$_SESSION['root']=$usuario;

$conexion=mysqli_connect("localhost","root","","noticias.com");

$consulta="SELECT*FROM user where username='$usuario' and pasword='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:album.html");

}else{
    ?>
    <?php
    include("index.html");
    ?>
    <h2 class="text-center">Error de inicio de sesion</form>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
