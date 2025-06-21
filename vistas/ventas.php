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
                <!--catalogo-->
                <?php
                    include "catalogo.php"
                ?>
            </div>
        </div>
    </div><!--Cierre de container-->
</body>
</html>