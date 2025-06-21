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
            
            <div class="col-4">
                <div class="card" style="width: 50rem; background-color: #e3f2fd;">
                        <form method="POST" action="../controlador/controlador_productos.php">
                            <div class="card-body">
                                <h3>Registro de productos</h3>
                                <div class="row p-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-3 p-2"><label class="h6">Nombre</label></div>
                                                <div class="col-9"><input class="form-control" name="nombre" type="text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-3 p-2"><label class="h6">Codigo producto</label></div>
                                                <div class="col-9"><input class="form-control" name="codigo_producto" type="text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row p-3">
                                        <div class="col-3 p-2"><label class="h6">Descripcion</label></div>
                                        <div class="col-9"><input class="form-control" name="descripcion" type="text"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row p-3">
                                        <div class="col-3 p-2"><label class="h6">Cantidad</label></div>
                                        <div class="col-9"><input class="form-control" name="cantidad" type="text"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row p-3">
                                        <div class="col-3 p-2"><label class="h6">Fecha de registro</label></div>
                                        <div class="col-9"><input class="form-control" name="fecha_registro" type="date"></div>
                                    </div>
                                </div>
                                
                                <div class="row p-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-3 p-2"><label class="h6">Costo</label></div>
                                                <div class="col-9"><input class="form-control" name="costo" type="text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-3 p-2"><label class="h6">Precio de venta</label></div>
                                                <div class="col-9"><input class="form-control" name="precio_venta" type="text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <div class="col-10"></div>
                                    <div class="col-2"><button class="btn btn-primary"  type="submit">Guardar</button></div>
                                </div>   
                        </form>
                </div>
            </div>
        </div>
    </div><!--Cierre de container-->
</body>
</html>


