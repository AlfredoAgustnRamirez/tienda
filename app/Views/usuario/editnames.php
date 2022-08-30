<title>Editar usuarios</title>
<?php $session = session();?>
<div class="container mt-5">
  <h1  class="text-center">Editar perfil de usuario</h1>
  <form method="post"  action="<?= site_url('/update') ?>">
    <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $session->get('id_usuario') ;?>">
    <div class="form-group">
      <label>Nombre</label>
      <input type="text" name="nombre" class="form-control" value="<?php echo $session->get('nombre') ;?>">
    </div>
    <div class="form-group">
      <label>Apellido</label>
      <input type="text" name="apellido" class="form-control" value="<?php echo $session->get('apellido') ;?>">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="<?php echo $session->get('email') ;?>">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="pass" name="password" class="form-control" value="<?php echo $session->get('password') ;?>">
    </div>
    <div class="form-group text-center">
      <button type="submit" class="btn btn-primary">Editar</button>
      <a href="<?php echo site_url('') ?>" class="btn btn-primary">Volver</a>
    </div>
  </form>
</div>

