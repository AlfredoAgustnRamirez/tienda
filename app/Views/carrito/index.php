<?php echo view ('front/header');?>
<div class="container mt-4">
      <h1>Listado de productos</h1>
      <div class="d-flex justify-content-end">
      <a href="<?php echo site_url('/dashboard') ?>" class="btn btn-primary">Volver</a>
         <a href="<?php echo site_url('/addproducto') ?>" class="btn btn-danger">Agregar Producto</a>
      </div>
      <?php
      if (isset($_SESSION['msg'])) {
         echo $_SESSION['msg'];
      }
      ?>
      <div class="mt-3">
         <table class="table table-bordered" id="productos-list">
            <thead>
               <tr>
                  <th>Id</th>
                  <th>nombre</th>
                  <th>titulo</th>
                  <th>precio</th>
                  <th>imagen</th>
                  <th>quantity</th>
               </tr>
            </thead>
            <tbody>
               <?php if ($productos) : ?>
                  <?php foreach ($productos as $item) : ?>
                     <tr>
                        <td><?php echo $item['id_producto']; ?></td>
                        <td><?php echo $item['titulo']; ?></td>
                        <td><?php echo $item['precio']; ?></td>
                        <td><img style="width: 6rem" src="<?php echo 'uploads/' . $producto['imagen']; ?>"></td>
                        <td><?php echo $item['qty']; ?></td>
                        <td><?php echo $item['precio'] * $item['qty']; ?></td>
                        <td>
                        <div class="row">
                           <a href="<?php echo base_url('editproducto/' . $producto['id_producto']); ?>" class="btn btn-warning">Editar</a>
                           <?php if($producto['estado'] == 1){ ?>
                           <a class="btn btn-danger" href="<?php echo base_url('quitar/' . $producto['id_producto']); ?>" class="btn btn-danger">Quitar</a>
                           <?php }else{?>
                              <a class="btn btn-success" href="<?php echo base_url('colocar/' . $producto['id_producto']); ?>" class="btn btn-danger">Colocar</a>
                        </div>
                        </td>
                        <?php }?>
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