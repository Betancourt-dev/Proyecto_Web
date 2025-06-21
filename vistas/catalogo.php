<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include "modal.php"
    ?>
</head>
<body>
    <div class="row"><!--Catalogo-->
    <?php
    include('../modelo/modelo.php');

    $query="SELECT nombre,precio_venta FROM productos";
    $res=$conexion->query($query);
        
                    while($row=$res->fetch_assoc())
                   { ?>
                        <div class="col-3 "><!--Tarjeta de referencia-->
                            <div class="card" style="width: 15rem;">
                                <img src="img/img_1.png" class="card-img-top"> <!--Imagen-->
                                    <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
                                        <div class="row">
                                            <div class="col-6"><p><?php echo $row['precio_venta']; ?> bs</p></div><!--precio-->
                                            <div class="col-6">
                                                <button type="button" class="btn btn-primary">Agregar</button>
                                            </div><!--Boton de compra-->   
                                        </div>
                                    </div>  
                            </div>
                        </div><!--cierre de tarjeta de referencia-->

                    <?php
                    }
                    ?>
    </div><!--cierre de catalogo-->
</body>
</html>