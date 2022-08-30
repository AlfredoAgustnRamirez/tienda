<?php echo view('front/header'); ?>
<title>Agregar Producto</title>
<div class="container mt-1 mb-4">
  <div class="card" style="width: 769px">
    <div class="card-header text-center">
      <h2>Agregar Productos</h2>
    </div>

    <form action="<?php echo site_url('/enviar-product') ?>" method="post" enctype="multipart/form-data">
      <div class="card-body" media="(max-width:768px)">
        <div class="mb-2">
          <label for="exampleFormControlInput1" class="form-label">codigo</label>
          <input name="cod" type="text" class="form-control" placeholder="cod">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Titulo</label>
          <input type="text" name="titulo" class="form-control" placeholder="titulo">
        </div>
        <div class="mb-3">
          <label for="categoria" class="text-primary font-weight-bold">Seleccione la categoria del producto</label>
          <select class="form-control" name="id_categoria" id="id_categoria" value="<?php echo ('id_categoria'); ?>" aria-label="Default select">
            <option value="0" selected>Seleccione una categoria</option>
            <?php foreach ($categorias as $categoria) {; ?>
              <option value=<?php echo $categoria->id_categoria; ?>><?php echo $categoria->categoria_prod; ?></option>
            <?php }; ?>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Copete</label>
          <input tyupe="text" name="copete" class="form-control" placeholder="copete">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">descripcion</label>
          <input name="descripcion" type="text" class="form-control" placeholder="descripcion">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Marca</label>
          <input name="marca" type="text" class="form-control" placeholder="marca">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Precio</label>
          <input name="precio" type="int" class="form-control" placeholder="precio">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">stock</label>
          <input name="stock" type="int" class="form-control" placeholder="stock">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Imagen</label>
          <input name="imagen" type="file" accept="image/*" />
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Estado</label>
          <input name="estado" type="text" class="form-control" placeholder="estado" />
        </div>
        <input type="submit" value="guardar" class="btn btn-success">
        <input type="reset" value="cancelar" class="btn btn-danger">

      </div>
    </form>
  </div>
</div>