<?php $cart = \Config\Services::cart();
$cart->contents(); ?>
<!-- Topbar Start -->
<div class="container-fluid">
  <div class="row bg-secondary py-2 px-xl-5">
    <div class="col-lg-6 d-none d-lg-block">
      <div class="d-inline-flex align-items-center">
        <a class="text-dark" href="">Preguntas</a>
        <span class="text-muted px-2">|</span>
        <a class="text-dark" href="">Ayuda</a>
        <span class="text-muted px-2">|</span>
        <a class="text-dark" href="">Soporte</a>
      </div>
    </div>
    <div class="col-lg-6 text-center text-lg-right">
      <div class="d-inline-flex align-items-center">
        <a class="text-dark px-2" href="">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a class="text-dark px-2" href="">
          <i class="fab fa-twitter"></i>
        </a>
        <a class="text-dark px-2" href="">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a class="text-dark px-2" href="">
          <i class="fab fa-instagram"></i>
        </a>
        <a class="text-dark pl-2" href="">
          <i class="fab fa-youtube"></i>
        </a>
      </div>
    </div>
  </div>
  <div class="row align-items-center py-3 px-xl-5">
    <div class="col-lg-3 d-none d-lg-block">
      <a href="<?php echo base_url(''); ?>" class="text-decoration-none">
        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Feria</span>Zag</h1>
      </a>
    </div>
    <div class="col-lg-6 col-6 text-left">
      <form action="">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="buscar por productos">
          <div class="input-group-append">
            <span class="input-group-text bg-transparent text-primary">
              <i class="fa fa-search"></i>
            </span>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Topbar End -->
<!-- Navbar Start -->
<div class="container-fluid mb-5">
  <div class="row border-top px-xl-5">
    <div class="col-lg-3 d-none d-lg-block">
      <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
        <h6 class="m-0">Categorias</h6>
        <i class="fa fa-angle-down text-dark"></i>
      </a>
      <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
        <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
          <div class="nav-item dropdown">
            <?php foreach ($categorias as $categoria) {; ?>
              <a class="navbar navbar-expand-lg " href="producto?id_categoria=<?php echo $categoria->id_categoria; ?>"><?php echo $categoria->categoria_prod ?></a>
            <?php }; ?>
            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
            </div>
            <a class="navbar navbar-expand-lg " href="mostrar_productos">Todos</a>
          </div>
        </div>
      </nav>
    </div>
    <div class="col-lg-9">
      <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
        <a href="" class="text-decoration-none d-block d-lg-none">
          <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Feria</span>Zag</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <div class="navbar-nav mr-auto py-0">
            <a href="<?= site_url(''); ?>" class="nav-item nav-link active text-primary">Inicio</a>
            <a href="<?= site_url('nosotros'); ?>" class="nav-item nav-link text-primary">Nosotros</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle text-primary" data-toggle="dropdown">Categorias</a>
              <div class="dropdown-menu">
                <?php foreach ($categorias as $categoria) {; ?>
                  <a class="navbar navbar-expand-lg text-primary" href="mostrar_productos?id_categoria=<?php echo $categoria->id_categoria; ?>"><?php echo $categoria->categoria_prod ?></a>
                <?php }; ?>
                <a class="navbar navbar-expand-lg text-primary" href="mostrar_productos">Todos</a>
              </div>
            </div>
            <a href="<?= site_url('comercializacion'); ?>" class="nav-item nav-link text-primary">Comercialización</a>
            <a href="<?= site_url('terminos'); ?>" class="nav-item nav-link text-primary">Terminos</a>
            <a href="<?= site_url('contacto'); ?>" class="nav-item nav-link text-primary">Contacto</a>
          </div>
          <div class="navbar-nav ml-auto py-0">
            <a href="<?= site_url('/login'); ?>" class="nav-item nav-link text-primary">Iniciar</a>
            <a href="<?php echo base_url('/registrar'); ?>" class="nav-item nav-link text-primary">Registrar</a>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->