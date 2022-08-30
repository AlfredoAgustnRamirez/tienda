<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="card" style= "width: 100%;">
            <div class="card rounded p-2">
                <h1 class="text-center text-primary">Inicio de Sesión</h1>
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?php echo base_url('/enviar-login') ?>">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="E-mail" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Contraseña" class="form-control">
                    </div>
                    <div class="d-grid text-center">
                        <button type="submit" class="btn btn-primary">Iniciar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
