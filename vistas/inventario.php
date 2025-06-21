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

            <div class="col-8 p-3">
                <table class = "table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>
                            <th>Cantidad</th>
                            <th>Costo</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include('../modelo/modelo.php');

                            $query="SELECT `id_producto`, `nombre`, `descripcion`, `fecha_registro`, `cantidad`, `costo`, `precio_venta`, `codigo_producto` FROM `productos`";
                            $res=$conexion->query($query);
                            while($row=$res->fetch_assoc())
                        { ?>
                                <tr>
                                <td><?php echo $row['id_producto']; ?></td>
                                <td><?php echo $row['codigo_producto']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['descripcion'];?></td>
                                <td><?php echo $row['fecha_registro']; ?></td>
                                <td><?php echo $row['cantidad']; ?></td>
                                <td><?php echo $row['costo']; ?></td>
                                <td><?php echo $row['precio_venta']; ?></td>
                                <td class="text-center"> 
                                    <a  class="btn btn-danger" href="../controlador/controlador_productos[eliminar].php?ide=<?php echo $row['id_producto'];?>" 
                                        class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
                                        <span class="fas fa-trash"> Eliminar</span>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-success" href="../vistas/formulario_productos[actualizar].php?ide=<?php echo $row['id_producto'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Actualizar">
                                        <span class="fas fa-trash">Actualizar</span>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-success" href="?ide=<?php echo $row['id_producto'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="">
                                        <span class="fas fa-trash">Agregar stock</span>
                                    </a>
                                </td>
                            </tr><?php
                            }
                        ?>    
                    </tbody>  
                </table>
            </div>
        </div>
    </div><!--Cierre de container-->
</body>
</html>