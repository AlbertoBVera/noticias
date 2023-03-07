<?php require_once ('db.php');
$results= "SELECT * FROM user"; //mandamos a llamar todos los registros de latabla usuario(user)
$resultado= mysqli_query( $conexion, $results);
?>
<h1>Usuarios</h1>
<a href="form-user.php">
                <button>Nuevo usuario</button>
                </a> 
    <table>
        <thead>
        <tr>
        <th>ID</th>
        <th>Nombre de usuario</th>
        <th>Contraseña</th>
        <th>Rol</th>
        <th>Editar</th>
        <th>Eliminar</th>
</tr>
<tr>
    <?php 
    while ($row= mysqli_fetch_array( $resultado ))
    {
        echo "<td>" . $row['ID'] . "</td><td>" . $row['use_username'] . "</td><td>" . $row['use_password'] . "</td><td>"
        . $row['use_fkRol'] . "</td>";
    
    ?>
<td><a href=""><button type="button"> Editar </button> 
<td><a href=""><button type="button"> Eliminar </button> 
</tr>
<?php } ?>
    </thead>
    <table>
        <thead>
        <tr>
        <th>ID</th>
        <th>Nombre de usuario</th>
        <th>Contraseña</th>
        <th>Rol</th>
        <th>Editar</th>
        <th>Eliminar</th>
</tr>
<tr>
    <?php
    foreach($resultado as $row){
                                    
    $datos=$row['ID']."||".
    $datos=$row['username']."||".
    $datos=$row['pasword']."||".
    $row['fk_rol'];
            //var_dump($datos);
    ?>
    
    </tr>
    </thead>

    <tr>
    <th> <?php echo ($row['ID'])?></th>
    <th> <?php echo ($row['username'])?></th>
    <th> <?php echo ($row['pasword'])?></th>
    <th> <?php echo ($row['fk_rol'])?></th>
    <td><a href="edit-form-com.php?ID=<?php echo $row['ID']?>"><button type="button" class="btn btn-primary">Editar</button></a>

    <!--form action="editar.php" method="post">
        <input type="hidden" name="ID" >
        <th> <input type="submit" name="ID" class="btn btn-primary" value="editar"> </th>
        </form-->
    <td><a href="eliminar_usuario.php?ID=<?php echo $row['ID']?>"><button type="button" class="btn btn-danger">Eliminar</button></a>

    </tr>
    </th>


<?php } ?>
</table>


</table>