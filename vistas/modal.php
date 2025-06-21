<!-- Modal -->
    <div class="modal fade" id="modal_carrito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-xl">
            <div class="modal-content" >
                
                <div class="modal-body">
                    <div class="row" >
                        <div class="col-8"><!--items añadidos al carrito-->
                            <h5 class="p-2">CARRITO DE COMPRAS</h5>
                            <table class = "table">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Cantidad</th>
                                        <th>- +</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>
                               <tbody>
                        <?php
                            $Cantidad_selecionada = 1;
                            include('../modelo/modelo.php');

                            $query="SELECT  `nombre`,`precio_venta` FROM `productos`";
                            $res=$conexion->query($query);
                            while($row=$res->fetch_assoc())
                        { 
                        ?>
                                <tr>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $Cantidad_selecionada; ?></td>  
                                <td>
                                    <button class="btn btn-primary"  name="btn_restar1">-</button>
                                    <button class="btn btn-primary"  name="btn_sumar1">+</button>
                                </td>                                 
                                <td><?php echo $row['precio_venta']; ?></td>
                                </tr>
                        <?php    
                            }
                            
                        ?>    
                    </tbody>   
                            </table>

                        </div>
                        <div class="col-4 p-3" style="background-color: #e3f2fd;"><!--Formulario de venta-->
                            <form  method="POST" action=""> 
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-12">
                                            <select class="form-control" name="" id="">
                                                <option value="">Seleccione una forma de pago</option>
                                                <option value="">Efectivo</option>
                                                <option value="">QR</option>
                                                <option value="">Tarjeta</option>
                                            </select>
                                            <div class="form-group">
                                                <div class="row p-3">
                                                    <div class="col-3 p-2"><label class="h6">Bs</label></div>
                                                    <div class="col-9"><input class="form-control" name="dinero_ingresado" type="text"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row p-2">
                                                    <div class="col-6 p-2"><label class="h6">Bs Total</label></div>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row p-2">
                                                    <div class="col-6 p-2"><label class="h6">Bs cambio</label></div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-6"></div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <button class="btn btn-danger">Cancelar</button>
                                                        </div>
                                                        <div class="col-6">
                                                            <button class="btn btn-primary" type="submit">Facturar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                                  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>