<?php helper(['form', 'url', 'cart']);
$session = session();
$cart = \Config\Services::cart();
$cart->contents(); ?>
    <div class="col-md-12 py-2">
            <div class="alert alert-success">Su orden ha sido procesada con éxito.</div>
    </div>
    <!-- Order status & shipping info -->
    <div class="bg-light px-5 py-5">
        <?php foreach ($detalles as $productos);?> 
                
        <div class="py-3"><h2>¡Gracias por su compra!</h2></div>
        <div class="py-3"><h3>Detalles de su orden</h3></div>

        <div><strong>Número de orden:#</strong> <?php echo $productos->id_ventas; ?></div>
        <div><strong>Total:</strong> <?php echo '$'. number_format($productos->total_ventas,2); ?></div>
        <div><strong>Fecha:</strong> <?php echo $productos->fecha; ?></div>
        <div><strong>Nombre y apellido:</strong> <?php echo $productos->nombre.' '.$productos->apellido; ?></div>
        <div><strong>Email:</strong> <?php echo $productos->email; ?></div>
        <div><strong>Teléfono:</strong> <?php echo $productos->telefono; ?></div>
        
    </div>
    <div><a href="<?php echo base_url();?>" class="btn btn-primary btn-block" title="volver">Volver al inicio</a></div>
    <!-- Order items -->
    <br><div class="row col-lg-12">
        <table class="align-middle">
            <thead>
                <tr>
                    <th class="align-middle text-center">Producto</th>
                    <th class="align-middle text-center">Compra </th>
                    <th class="align-middle text-center">Nombre </th>
                    <th class="align-middle text-center">Precio </th>
                    <th class="align-middle text-center">Cantidad </th>
                    <th class="align-middle text-center">Fecha </th>
                    <th class="align-middle text-center">SubTotal </th>
                </tr>
            </thead>
            <tbody>
            <?php $total = 0; $nroVenta = $productos->id_ventas;
            foreach ($detalles as $productos){;
             if ($nroVenta == $productos->id_ventas) { ?> 
                <tr>
                    
                    <td class="align-middle text-center"><img  heigth="80" width="80" src="<?php echo 'uploads/'. $productos->imagen ?>" /></td>
                    <td class="align-middle text-center"><?php echo $productos->id_ventas;?></td>
                    <td class="align-middle text-center"><?php echo $productos->titulo;?></td>
                    <td class="align-middle text-center"><?php echo '$'.$productos->precio; ?></td>
                    <td class="align-middle text-center"><?php echo $productos->cantidad; ?></td>
                    <td class="align-middle text-center"><?php echo $productos->fecha; ?></td>
                    <td class="align-middle text-center"><?php echo '$'.$productos->precio * $productos->cantidad; ?></td>
                    <?php $total += $productos->precio * $productos->cantidad;?>
                </tr>
                <?php } ?>
                <?php } ?>
            </tbody>
        </table>
        <div class="col-11 text-bold text-justify-right text-right"><strong>Total $: </strong><?php echo $total;?></div>
    </div>