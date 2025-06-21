<?php
include('../modelo/modelo.php');

$nom= $_POST['nombre'];
$des= $_POST['descripcion'];
$fecha= $_POST['fecha_registro'];
$cant= $_POST['cantidad'];
$cost= $_POST['costo'];
$venta= $_POST['precio_venta'];
$cod=$_POST['codigo_producto'];

$query="INSERT INTO `productos`(`nombre`, `descripcion`, `fecha_registro`, `cantidad`, `costo`, `precio_venta`,`codigo_producto`)
VALUES ('$nom','$des','$fecha','$cant','$cost','$venta','$cod')";

$res=$conexion->query($query);
if($res){
    header("location:../vistas/inventario.php"); 
}else{

    echo"no se guardo";
}

?>