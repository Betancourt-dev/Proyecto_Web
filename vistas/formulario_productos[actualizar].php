<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BetaTess</title>
    <?php
        include "menu.php"
    ?>
</head>
<body>
<div class="container-fluid">
        <div class="row p-3">
            <div class="col-3">
                <?php
                    include "barra_lateral.php"
                ?>
            </div>
            <?php
                $id=$_REQUEST['ide'];
                include('../modelo/modelo.php');
                $query="SELECT  * FROM `productos` WHERE id_producto='$id'";
                $res=$conexion->query($query);
                $row= $res->fetch_assoc()
            ?>
            
            <div class="col-4">
                <div class="card" style="width: 50rem; background-color: #e3f2fd;">
                        <form method="POST" action="../controlador/controlador_productos[actualizar].php<?php echo $row ['id_producto'];  ?>" >
                            <div class="card-body">
                                <h3>Actualizar productos</h3>
                                <div class="row p-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-3 p-2"><label class="h6">Nombre</label></div>
                                                <div class="col-9"><input class="form-control" name="nombre" type="text" value="<?php echo $row['nombre']; ?>" required></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-3 p-2"><label class="h6">Codigo producto</label></div>
                                                <div class="col-9"><input class="form-control" name="codigo_producto" type="text" value="<?php echo $row['codigo_producto']; ?>" required></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row p-3">
                                        <div class="col-3 p-2"><label class="h6">Descripcion</label></div>
                                        <div class="col-9"><input class="form-control" name="descripcion" type="text" value="<?php echo $row['descripcion']; ?>" required></div>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-3 p-2"><label class="h6">Costo</label></div>
                                                <div class="col-9"><input class="form-control" name="costo" type="text" value="<?php echo $row['costo']; ?>" required></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-3 p-2"><label class="h6">Precio de venta</label></div>
                                                <div class="col-9"><input class="form-control" name="precio_venta" type="text" value="<?php echo $row['precio_venta']; ?>" required></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-10"></div>
                                    <div class="col-2"><button class="btn btn-primary" name="add_producto" >Actualizar Producto</button></div>
                                </div> 
                             
                        </form>
                </div>
            </div>
        </div>
    </div><!--Cierre de container-->
</body>
</html>