<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include "referencias.php"
    ?>
</head>
<body>
    <div class="container">
        <div class="row p-5">
            <div class="col-4"></div><!--espaciador-->
            <div class="col-4">
                <div class="card" style="width: 20rem;">
                        <form method="POST" action="../controlador/controlador_login.php">
                            <img src="img/hacker-logo.png" class="card-img-top"> <!--Imagen-->
                            <div class="card-body">
                            
                            <div class="form-group p-3">
                            <label for="">Usuario</label>
                                <input class="form-control" name="usuario" type="text" >
                            </div>
                            <div class="form-group p-3">
                                <label for="">Contraseña</label>
                                <input class="form-control" name="contraseña" type="password" >
                            </div>
                            <div class="form-group p-3">
                                    <button id="btn_ingreso" class="btn btn-primary"  type="submit" name="btn_ingreso">Iniciar sesion</button>
                            </div>
                            </div>
                        </form>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
        
            
        
</body>
</html>