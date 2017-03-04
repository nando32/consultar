<?php

include "conexion.php";
$Id=$_POST["ID"];
$sql="DELETE FROM desecahables  WHERE Id_Servicios=$Id";
$result=mysql_query($conn, $sql);

if($result){

echo "Eliminacion Correcta";
}else{
echo "Error al guardar los datos: ".mysql_error();
}
mysql_close($conn);
?>