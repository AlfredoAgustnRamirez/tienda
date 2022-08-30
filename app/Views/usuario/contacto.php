<?php $session = session();?>
<!--Contacto-->
<section>
        <h2 class="text-uppercase text-center mt-3 font-weight-bold text-primary">Contactenos</h2><br>
            <?php $validation = \Config\Services::validation(); ?>
            <form method="post" action="<?php echo base_url('/verificar_consulta') ?>">
                    <?php if ($session->get('perfil_id') == 1) { ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                <label>Nombre</label>
                                    <input name="nombre" type="text" class="form-control" value="<?php echo $session->get('nombre'); ?>">
                                    <!-- Error -->
                                    <?php if ($validation->getError('nombre')) { ?>
                                        <div class='alert alert-danger mt-2'>
                                            <?= $error = $validation->getError('nombre'); ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="mb-3">
                            <label>Apellido</label>
                                <input type="text" name="apellido" class="form-control" value="<?php echo $session->get('apellido'); ?>">
                                <!-- Error -->
                                <?php if ($validation->getError('apellido')) { ?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError('apellido'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" name="email" class="form-control mt-2" value="<?php echo $session->get('email'); ?>">
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
                                    <label>Teléfono</label>
                                    <input type="tel" name="telefono" class="form-control mt-2" placeholder="telefono">
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
                                    <label>Ingrese su texto</label>
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
                <?php } ?>
            </div>
        </div>
    </div>
</section>