<?php $session = session('islogedIn');
 $cart = \Config\Services::cart();
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
<div class="container">
    <div class="row d-flex align-items-center my-4">
        
            <?php foreach ($productos as $producto) : ?>
                <?php if (($categoria == 0) && ($producto['stock'] > 0) &&  ($producto['estado'] == 1)) { ?>
                <br></br>
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <img src="<?php echo 'uploads/' . $producto['imagen']; ?>">
                        <h4 class="card-title text-left"><?php echo $producto['titulo']; ?></h4>
                        <p class="card-text"><b><?php echo $producto['descripcion']; ?></b></p>
                        <p class="card-text"><b><?php echo 'Stock ' . $producto['stock']; ?></b></p>
                        <p class="card-text"><b><?php echo '$' . $producto['precio']; ?></b></p>
                    </div>
                    <?php
                    echo form_open('carrito_agrega');
                    echo form_hidden('id_producto', $producto['id_producto']);
                    echo form_hidden('precio', $producto['precio']);
                    echo form_hidden('titulo', $producto['titulo']);
                    echo form_hidden('imagen', $producto['imagen']);
                    ?>
                    <?php
                    $btn = array(
                        'class' => 'btn btn-primary ',
                        'value' => 'Agregar',
                        'name' => 'action'
                    );
                    echo form_submit($btn);
                    echo form_close();
                    ?>
                </div>
                <?php }; ?>
            <?php endforeach; ?>
        
    </div>
</div>
<div class="container">
    <div class="row d-flex align-items-center my-4">
        <?php foreach ($productos as $producto) : ?>
            <?php if (($producto['id_categoria'] == $categoria) && ($producto['stock'] > 0) &&  ($producto['estado'] == 1)) { ?>
                <br></br>
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <img src="<?php echo 'uploads/' . $producto['imagen']; ?>">
                        <h4 class="card-title text-left"><?php echo $producto['titulo']; ?></h4>
                        <p class="card-text"><b><?php echo $producto['descripcion']; ?></b></p>
                        <p class="card-text"><b><?php echo 'Stock ' . $producto['stock']; ?></b></p>
                        <p class="card-text"><b><?php echo '$' . $producto['precio']; ?></b></p>
                    </div>
                    <?php
                    echo form_open('carrito_agrega');
                    echo form_hidden('id_producto', $producto['id_producto']);
                    echo form_hidden('precio', $producto['precio']);
                    echo form_hidden('titulo', $producto['titulo']);
                    echo form_hidden('imagen', $producto['imagen']);
                    ?>
                    <?php
                    $btn = array(
                        'class' => 'btn btn-primary',
                        'value' => 'Agregar ',
                        'name' => 'action'
                    );
                    echo form_submit($btn);
                    echo form_close();
                    ?>

                </div>
            <?php }; ?>
        <?php endforeach; ?>
    </div>
</div>
</div>