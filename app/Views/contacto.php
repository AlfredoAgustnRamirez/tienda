<!--Contacto-->
<section>
        <h2 class="text-uppercase text-center mt-3 font-weight-bold text-primary">Contactenos</h2><br>
        <?php $validation = \Config\Services::validation(); ?>
           <form method="post" action="<?php echo base_url('/verificar_contacto') ?>">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                <!-- Error -->
                <?php if ($validation->getError('nombre')) { ?>
                  <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('nombre'); ?>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                <!-- Error -->
                <?php if ($validation->getError('apellido')) { ?>
                  <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('apellido'); ?>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email">
                <!-- Error -->
                <?php if ($validation->getError('email')) { ?>
                  <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('email'); ?>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
              <label for="exampleFormControlTextarea1" class="form-label">telefono</label>
                <input type="text" name="telefono" class="form-control" placeholder="Telefono">
                <!-- Error -->
                <?php if ($validation->getError('telefono')) { ?>
                  <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('telefono'); ?>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
              <label for="exampleFormControlTextarea1" class="form-label">Consulta</label>
              <textarea class="form-control" name="consulta" placeholder="Escriba su consulta, duda, sugerencia..." rows="3"></textarea>
                <!-- Error -->
                <?php if ($validation->getError('consulta')) { ?>
                  <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('consulta'); ?>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
          </div>
        </form>
            </div>
        </div>
    </div>
</section>
  </div>