<?php echo view('front/header');
$session = session();
?>
<div class="container" style="height: 400px;">
    <div class="p-3 my-2 mb-2 alert alert-success text-center">
        <h4>Gracias, por su consulta, le responderemos a la brevedad.</h4>
    </div>
    <?php if(session('perfil_id') == 1){?>
    <div class="d-flex justify-content-end">
      <a href="<?php echo site_url('') ?>" class="btn btn-primary">Volver</a>
   </div>
   <?php }?>
   <?php if(session('perfil_id') != 1){?>
   <div class="d-flex justify-content-end">
      <a href="<?php echo site_url('') ?>" class="btn btn-primary">Volver</a>
   </div>
   <?php }?>
</div>