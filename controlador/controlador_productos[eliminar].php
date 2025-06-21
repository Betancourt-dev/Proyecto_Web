<?php
include('../modelo/modelo.php');

$id=$_REQUEST['ide'];

$query="DELETE FROM `productos` WHERE id_producto='$id'";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/inventario.php");
}else{

    echo"No se pudo eliminar";
}

?>