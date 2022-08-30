<div class="container mt-5 mb-4">

    <h1>Editar productos</h1>

    <form method="post" id="update_producto" name="update_producto" enctype="multipart/form-data" action="<?= site_url('/update_producto') ?>">
      <input type="hidden" name="id_producto" id="id_producto" value="<?php echo $produc_obj['id_producto']; ?>">

      <div class="form-group">
        <label>Codigo</label>
        <input type="text" name="cod" class="form-control" value="<?php echo $produc_obj['cod']; ?>">
      </div>
      <div class="form-group">
        <label>titulo</label>
        <input type="text" name="titulo" class="form-control" value="<?php echo $produc_obj['titulo']; ?>">
      </div>
      <div class="form-group">
        <label>Id Categoria</label>
        <input type="text" name="id_categoria" class="form-control" value="<?php echo $produc_obj['id_categoria']; ?>">
      </div>
      <div class="form-group">
        <label>Copete</label>
        <input type="text" name="copete" class="form-control" value="<?php echo $produc_obj['copete']; ?>">
      </div>
      <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="descripcion" class="form-control" value="<?php echo $produc_obj['descripcion']; ?>">
      </div>
      <div class="form-group">
        <label>Marca</label>
        <input type="text" name="marca" class="form-control" value="<?php echo $produc_obj['marca']; ?>">
      </div>
      <div class="form-group">
        <label>Precio</label>
        <input type="text" name="precio" class="form-control" value="<?php echo $produc_obj['precio']; ?>">
      </div>
      <div class="form-group">
        <label>Stock</label>
        <input type="text" name="stock" class="form-control" value="<?php echo $produc_obj['stock']; ?>">
      </div>
      <div class="form-group">
        <label>Imagen</label>
        <input type="file" name="imagen" class="form-control" value="<?php echo $produc_obj['imagen']; ?>">
      </div>
      <div class="form-group">
      <div class="form-group">
        <label>Estado</label>
        <input type="text" name="estado" class="form-control" value="<?php echo $produc_obj['estado']; ?>">
      </div>
        <button type="submit" class="btn btn-primary">Editar</button>
        <a href="<?php echo site_url('/listado_producto') ?>" class="btn btn-primary">Volver</a>
      </div>
    </form>
  </div>
