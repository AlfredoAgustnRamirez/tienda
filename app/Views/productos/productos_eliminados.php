<div class="container mt-4">
   <h1>Usuarios Eliminados</h1>
   <div class="mt-3">
      <table class="table table-bordered" id="users-list">
         <thead>
            <tr>
               <th>Id</th>
               <th>cod</th>
               <th>titulo</th>
               <th>id_categoria</th>
               <th>copete</th>
               <th>descripcion</th>
               <th>marca</th>
               <th>precio</th>
               <th>stock</th>
               <th>imagen</th>
               <th>estado</th>
            </tr>
         </thead>
         <tbody>
         <?php foreach ($productos as $productos) : ?>
                <?php if ($productos && ($productos['estado'] == 0)) : ?>
                  <tr>
                     <td><?php echo $productos['id_producto']; ?></td>
                     <td><?php echo $productos['cod']; ?></td>
                     <td><?php echo $productos['titulo']; ?></td>
                     <td><?php echo $productos['id_categoria']; ?></td>
                     <td><?php echo $productos['copete']; ?></td>
                     <td><?php echo $productos['descripcion']; ?></td>
                     <td><?php echo $productos['marca']; ?></td>
                     <td><?php echo $productos['precio']; ?></td>
                     <td><?php echo $productos['stock']; ?></td>
                     <td><img style="width: 6rem" src="<?php echo 'uploads/' . $productos['imagen']; ?>"></td>
                     <td><?php echo $productos['estado']; ?></td>
                     </td>
                  </tr>
            <?php endif; ?>
        <?php endforeach; ?>
         </tbody>
      </table>
 </div>
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
