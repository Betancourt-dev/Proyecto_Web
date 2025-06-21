<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="p-3" style="width: 18rem; background-color: #e3f2fd;">
        <!--Lista de opciones-->
        <div id="list-example" class="list-group list-group-flush">
            <h5>OPCIONES</h5>
            <!--Ventas-->
            <p class="p-2">Ventas</p>
            <a class="list-group-item list-group-item-action p-2" style="background-color: #e3f2fd;" href="ventas.php">Catalogo de productos</a>
            <!--Administración-->
            <p class="p-2">Administración</p>
            <a class="list-group-item list-group-item-action p-2" style="background-color: #e3f2fd;" href="formulario_productos.php">Registro de productos</a>
            <a class="list-group-item list-group-item-action p-2" style="background-color: #e3f2fd;" href="inventario.php">Inventario de productos</a>
            <a class="list-group-item list-group-item-action p-2" style="background-color: #e3f2fd;" href="formulario_usuarios.php">Registro de usuarios</a>
        </div>
        <div class="row p-5">
            <div class="col-12">
                <button name="btn_carrito" id="btn_carrito" type="button" data-bs-toggle="modal" data-bs-target="#modal_carrito" class="btn btn-primary">
                    Carrito de compras
                </button>
            </div>
        </div>
    </div>
                
                
                    
</body>
</html>