<div class="container">
    <h1 class="text-center">Ventas realizadas</h1>
    <div>
    </div>
    <br>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Número</th>
                <th>Fecha</th>
                <th>Productos vendidos</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($detalles as $productos) { ?>
                <tr>
                    <td><?php echo $productos->id_ventas; ?></td>
                    <td><?php echo $productos->fecha ?></td>
                    <td>
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Código</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $total = 0;
                                $nroVenta = $productos->id_ventas;
                                foreach ($detalles as $productos) {;
                                    if ($nroVenta == $productos->id_ventas) {;  ?>
                                        <tr>
                                            <td class="mob-hide"><img heigth="150" width="150" src="<?php echo 'uploads/' . $productos->imagen ?>" /></td>
                                            <td><?php echo $productos->id_producto; ?></td>
                                            <td><?php echo $productos->titulo; ?></td>
                                            <td><?php echo  $productos->cantidad; ?></td>
                                            <td><?php echo '$' . $productos->precio * $productos->cantidad; ?></td>

                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="col-11 text-bold text-justify-right text-right"><strong>Total $: </strong><?php echo $total; ?></div>
</div>
<div><a href="<?php echo base_url('/dashboard'); ?>" class="btn btn-primary btn-block" title="volver">Volver</a></div>