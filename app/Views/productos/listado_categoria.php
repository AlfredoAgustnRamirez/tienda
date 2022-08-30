<div class="container mt-4">
 <div class="mt-3">
      <table class="table table-bordered" id="productos-list">
         <thead>
            <tr>
               <th>Id Categoria</th>
               <th>Categoria Producto</th>
               <th>Estado Categoria</th>
               <th>Acción</th>
            </tr>
         </thead>
         <tbody>
            <?php if ($categorias) : ?>
               <?php foreach ($categorias as $producto) : ?>
                  <tr>
                     <td><?php echo $producto['id_categoria']; ?></td>
                     <td><?php echo $producto['categoria_prod']; ?></td>
                     <td><?php echo $producto['estado_categoria']; ?></td>
                     <td>
                        <div class="row-4">
                         <a class="btn btn-warning" href="<?php echo base_url('editar_categoria/' . $producto['id_categoria']); ?>">Editar</a> 
                           <?php if ($producto['estado_categoria'] == 1) { ?>
                              <a class="btn btn-danger"  href="<?php echo base_url('eliminar_categoria/' . $producto['id_categoria']); ?>">Desactivar</a>
                           <?php } else { ?>
                              <a class="btn btn-success" href="<?php echo base_url('activar_categoria/' . $producto['id_categoria']); ?>">Activar</a>
                        </div>
                     </td>
                  <?php } ?>
                  </tr>
               <?php endforeach; ?>
            <?php endif; ?>
         </tbody>
      </table>
   </div>
</div>

<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.min.css">
<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function() {
      $('#users-list').DataTable();
   });
</script>
</body>
