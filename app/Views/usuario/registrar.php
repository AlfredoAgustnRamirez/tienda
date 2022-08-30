<div class="container mt-1 mb-0">
  <div class="card text-primary" style="width: 100%;">
    <div class="card-header text-center text-primary">
      <h2 clas="text-primary text-center">Agregar usuarios</h2>
    </div>

    <?php $validation = \Config\Services::validation(); ?>
    <form method="post" action="<?php echo base_url('/enviar-form') ?>">

      <div class="card-body" media="(max-width:768px)">
        <div class="mb-2">
          <input name="nombre" type="text" class="form-control" placeholder="Nombre">
          <!-- Error -->
          <?php if ($validation->getError('nombre')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('nombre'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="mb-3">
          <input type="text" name="apellido" class="form-control" placeholder="Apellido">
          <!-- Error -->
          <?php if ($validation->getError('apellido')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('apellido'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="mb-3">
          <input name="email" type="femail" class="form-control" placeholder="Correo@algo.com">
          <!-- Error -->
          <?php if ($validation->getError('email')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('email'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="mb-3">
          <input tyupe="text" name="usuario" class="form-control" placeholder="usuario">
          <!-- Error -->
          <?php if ($validation->getError('usuario')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('usuario'); ?>
            </div>
          <?php } ?>
        </div>

        <div class="mb-3 text">
          <input name="password" type="password" class="form-control" placeholder="password">
          <!-- Error -->
          <?php if ($validation->getError('pass')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('pass'); ?>
            </div>
          <?php } ?>
        </div>
        <div class="d-grid text-center">
          <input type="submit" value="guardar" class="btn btn-primary">
          <input type="reset" value="cancelar" class="btn btn-primary">
        </div>
      </div>
    </form>
  </div>
</div>