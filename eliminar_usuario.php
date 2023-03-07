
<?php
require_once ('db.php');
$ID=$_GET['ID'];
//echo $ID;
$sql="DELETE FROM user WHERE ID='$ID'";
mysqli_query( $conexion, $sql);
echo '<script>
       
        self.location.href = "crud_usuarios.php";
        </script>';
?>