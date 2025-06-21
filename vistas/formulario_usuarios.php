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

            <div class="col-8">
                <div class="card" style="width: 40rem; background-color: #e3f2fd;">
                        
                    <form  method="POST" action="../controlador/controlador_usuarios.php">
                        <div class="card-body">
                            <div class="p-3"><h2>Registro de usuarios</h2></div>
                            
                            <div class="form-group p-3">
                                <div class="row">
                                    <div class="col-2"><label for="">Nombre</label></div>
                                    <div class="col-10"><input class="form-control" name="nombre" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group p-3">
                                <div class="row">
                                    <div class="col-2"><label for="">Apellido</label></div>
                                    <div class="col-10"><input class="form-control" name="apellido" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group p-3">
                                <div class="row">
                                    <div class="col-2"><label for="">Usuario</label></div>
                                    <div class="col-10"><input class="form-control" name="usuario" type="text" id="usuario"></div>
                                </div> 
                            </div>
                            <div class="form-group p-3">
                                <div class="row">
                                    <div class="col-2"><label for="">Contraseña</label></div>
                                    <div class="col-10"><input class="form-control" name="contraseña" type="text" id="contraseña"></div>
                                </div>
                            </div>
                            
                            <div class="row p-3">
                                    <div class="col-10"></div>
                                    <div class="col-2"><button class="btn btn-primary"  type="submit">Guardar</button></div>
                            </div>  
                        </div>
                    </form>
                </div>
                
                    
            </div>
        </div>
    </div><!--Cierre de container-->
</body>
</html>
