<!--Controlador de ingreso de usuarios-->
<?php
    include('../modelo/modelo.php');

    $usuarioL= $_POST['usuario'];
    $contraL= $_POST['contraseña'];

    $query="SELECT `usuario`, `contraseña` FROM `usuarios`";
    $res=$conexion->query($query);
    while($row=$res->fetch_assoc()){
        if(isset($_POST['btn_ingreso']) && $_POST['btn_ingreso'] != 1)
        {
            if (($usuarioL != null)&&($contraL != null)) {
                if (($usuarioL == $row['usuario'])&&($contraL == $row['contraseña'])) {
                    header("location:../vistas/index.php"); 
                }else {
                    echo"ACCESO DENEGADO";
                }
            } else {
                echo"Los campos estan vacios";
            }
        }
        else {
            echo"ERROR 404";
        }
        
    }
        
    
        
?>