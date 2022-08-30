<div class="container mt-4">
   <h1 class="text-center text-primary">Listado de productos</h1>
   <div class="mt-3">
      <table class="table table-bordered" id="productos-list">
         <thead>
            <tr>
               <th>cod</th>
               <th>titulo</th>
               <th>categoria</th>
               <th>descripcion</th>
               <th>marca</th>
               <th>precio</th>
               <th>stock</th>
               <th>imagen</th>
               <th>estado</th>
               <th>accion</th>
            </tr>
         </thead>
         <tbody>
            <?php if ($productos) : ?>
               <?php foreach ($productos as $producto) : ?>
                  <tr>
                     <td><?php echo $producto['cod']; ?></td>
                     <td><?php echo $producto['titulo']; ?></td>
                     <td><?php echo $producto['id_categoria']; ?></td>
                     <td><?php echo $producto['descripcion']; ?></td>
                     <td><?php echo $producto['marca']; ?></td>
                     <td><?php echo $producto['precio']; ?></td>
                     <td><?php echo $producto['stock']; ?></td>
                     <td><img style="width: 6rem" src="<?php echo 'uploads/' . $producto['imagen']; ?>"></td>
                     <td><?php echo $producto['estado']; ?></td>
                     <td>
                        <div class="container">
                           <a href="<?php echo base_url('editproducto/' . $producto['id_producto']); ?>" class="btn btn-primary">Editar</a>
                           <?php if ($producto['estado'] == 1) { ?>
                              <a class="btn btn-primary" href="<?php echo base_url('quitar/' . $producto['id_producto']); ?>" class="btn btn-danger">Desactivar</a>
                           <?php } else { ?>
                              <a class="btn btn-success" href="<?php echo base_url('colocar/' . $producto['id_producto']); ?>" class="btn btn-danger">Activar</a>
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

</html>
