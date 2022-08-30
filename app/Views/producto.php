<?php
helper(['form', 'url', 'cart']);
$categoria = 0;
if (isset($_GET['id_categoria'])) {
    $categoria = $_GET['id_categoria'];
}
?>
<div class="container">
    <div class="container-fluid">
        <br>
        <h1 class="text-center text-primary">Nuestros Productos</h1>
    </div>
    <div class="container-fluid">
        <div class="row d-flex align-items-center my-8">
            <?php foreach ($productos as $producto) : ?>
                <?php if (($categoria == 0) && ($producto['stock'] > 0) &&  ($producto['estado'] == 1)) { ?>
                    <br></br>
                    <div class="col-md-4">
                        <div id="card" class="card" style="width: 20rem;">
                            <img src="<?php echo 'uploads/' . $producto['imagen']; ?>">
                            <h4 class="card-title text-left"><?php echo $producto['titulo']; ?></h4>
                            <p class="card-text"><b><?php echo $producto['descripcion']; ?></b></p>
                            <p class="card-text"><b><?php echo 'Stock ' . $producto['stock']; ?></b></p>
                            <span class="card-text"><b><?php echo '$' . $producto['precio']; ?></b></span>
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo1"> <i class="fas fa-shopping-cart text-secondary mr-1"></i>Agregar </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo1"> <i class="fas fa-eye text-secondary mr-1"></i>Detalles </button>
                    </div>
                <?php }; ?>
            <?php endforeach; ?>
            <div class="container-fluid">
                <div class="modal fade" id="dialogo1">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- cabecera del diálogo -->
                            <div class="modal-header">
                                <h4 class="modal-title">No te vas arrepentir!</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>

                            <!-- cuerpo del diálogo -->
                            <div class="modal-body">
                                Pero primero debes iniciar sesión <i class="far fa-hand-point-down"></i>
                            </div>

                            <!-- pie del diálogo -->
                            <div class="modal-footer">
                                <a href="<?php echo site_url('/login') ?>" class="btn btn-ultra-voilet">Loguearse <i class="fas fa-user-check"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="button" class="btn btn-orange-moon" data-dismiss="modal">Cerrar <i class="fas fa-power-off"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <div class="container-fluid">
        <div class="row d-flex align-items-center my-9">
            <?php foreach ($productos as $producto) : ?>
                <?php if (($producto['id_categoria'] == $categoria) && ($producto['stock'] > 0) &&  ($producto['estado'] == 1)) { ?>
                    <br></br>
                    <div class="col-md-4">
                        <div id="card" class="card" style="width: 20rem;">
                            <img src="<?php echo 'uploads/' . $producto['imagen']; ?>">
                            <h4 class="card-title text-left"><?php echo $producto['titulo']; ?></h4>
                            <p class="card-text"><b><?php echo $producto['descripcion']; ?></b></p>
                            <p class="card-text"><b><?php echo 'Stock ' . $producto['stock']; ?></b></p>
                            <span class="card-text"><b><?php echo '$' . $producto['precio']; ?></b></span>
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo1">Comprar! </button>
                    </div>
                <?php }; ?>
            <?php endforeach; ?>
            <div class="container-fluid">
                <div class="modal fade" id="dialogo1">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- cabecera del diálogo -->
                            <div class="modal-header">
                                <h4 class="modal-title">No te vas arrepentir!</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>

                            <!-- cuerpo del diálogo -->
                            <div class="modal-body">
                                Pero primero debes iniciar sesión <i class="far fa-hand-point-down"></i>
                            </div>

                            <!-- pie del diálogo -->
                            <div class="modal-footer">
                                <a href="<?php echo site_url('/login') ?>" class="btn btn-ultra-voilet">Loguearse <i class="fas fa-user-check"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="button" class="btn btn-orange-moon" data-dismiss="modal">Cerrar <i class="fas fa-power-off"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>