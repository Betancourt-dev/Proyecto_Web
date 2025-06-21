<?php
include('../modelo/modelo.php');

$id=$_REQUEST['id'];

$nom= $_POST['nombre'];
$des= $_POST['descripcion'];
$cost= $_POST['costo'];
$venta= $_POST['precio_venta'];
$cod=$_POST['codigo_producto'];


$query="UPDATE `productos` SET nombre`='$nom',`descripcion`='$des',`costo`='$cost',`precio_venta`='$venta',`codigo_producto`='$cod' WHERE 1";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
    header("location:../vistas/inventario.php");
}else{

    echo"no se guardo";
}

?>