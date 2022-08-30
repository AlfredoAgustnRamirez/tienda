<div class="col-lg-8 mb-4">
    <h1 class="text-center py-3">Registro de categorias</h1>
    <div class="form-group w-50 mx-auto my-5">
        <form method="post" action="<?php echo base_url('/registrar_categoria') ?>">
            <div class="form-group">
                <label for="categoria_prod">Categoria</label>
                <input type="text" name="categoria_prod" class="form-control" placeholder="Ingrese la categoria" autofocus="autofocus" value="">
            </div>

            <div class="form-group my-3">
                <button type='submit' class='btn btn-success'>Agregar</button>
                <button type='Reset' class='btn btn-danger'>Cancelar</button>
            </div>
        </form>

    </div>
</div>
