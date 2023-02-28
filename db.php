<?php
$conexion = mysqli_connect("localhost","root","") or die ("No se pudo conectar al servidor");
$db = mysqli_select_db($conexion,"noticias.com") or die ("No se pudo conectar a la base de datos");
?>