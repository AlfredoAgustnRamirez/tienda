<h1 class="text-center my-3">Editar categorias</h1>

<div class="form-group w-50 mx-auto my-5">
    <form method="post" action="<?php echo base_url("verificar_editar/$id_categoria"); ?>">
        <div class="form-group">
            <label for="categoria_prod">Categoria</label>
            <input type="text" name="categoria_prod" class="form-control" placeholder="Ingrese la categoria" autofocus="autofocus" value="<?php echo $categoria_prod; ?>">
        </div>
        <span class="text-danger"><?php if ($validation->getError('categoria_prod')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('categoria_prod'); ?>
                </div>
            <?php } ?>
        </span>
    </form>
    <div class="form-group my-3">
        <button type='submit' class='btn btn-success'>Modificar</button>
        <button type='Reset' class='btn btn-danger'>Cancelar</button>
    </div>
</div>