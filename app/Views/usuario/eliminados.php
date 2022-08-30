<?php if(session('perfil_id') == 2) {
echo view('front/header');
echo view('usuario/menu');
?>
<div class="container mt-4">
   <h1>Usuarios Eliminados</h1>
   <div class="mt-3">
     
      <table class="table table-bordered" id="users-list">
         <thead>
            <tr>
               <th>Usuario Id</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Email</th>
               <th>Perfil Id</th>
               <th>Estado</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
         <?php foreach ($usuarios as $usuario) : ?>
                <?php if ($usuarios && ($usuario['baja'] == 0)) : ?>
                  <tr>
                     <td><?php echo $usuario['id_usuario']; ?></td>
                     <td><?php echo $usuario['nombre']; ?></td>
                     <td><?php echo $usuario['apellido']; ?></td>
                     <td><?php echo $usuario['email']; ?></td>
                     <td><?php echo $usuario['perfil_id']; ?></td>
                     <td><?php echo $usuario['baja']; ?></td>
                     <td>
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
<?php echo view('front/footer')?>
<?php }?>