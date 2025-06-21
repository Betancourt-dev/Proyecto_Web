<?php
include('../modelo/modelo.php');

$nom= $_POST['nombre'];
$ape= $_POST['apellido'];
$usu= $_POST['usuario'];
$contra= $_POST['contraseña'];


$query="INSERT INTO usuarios(nombre,apellido,usuario,contraseña) 
VALUES ('$nom','$ape','$usu','$contra')";

$res=$conexion->query($query);
if($res){

    echo"guardado correctamente";
}else{

    echo"no se guardo";
}

?>