</div>
</div>
<?php $cart = \Config\Services::cart();
$cart->contents();
helper('form');
?>
<?php $validation = \Config\Services::validation(); ?>
<div class="container">
  <div class="row">
    <div class="col-12 mb-4 my-3">
      <h1 class="page-header text-primary text-center">Proceder a la compra</h1>
    </div>
  </div>
</div>
<?php echo form_open('verificar_compra'); ?>
<!-- Checkout Start -->
<div class="container-fluid pt-5">
  <div class="row px-xl-5">
    <div class="col-lg-8">
      <div class="mb-4">
        <h4 class="font-weight-semi-bold mb-4 text-primary">Direccion de facturacion</h4>
        <div class="row">
          <div class="col-md-6 form-group">
            <label for="nombre" class="control-label">Nombre<em>*</em></label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre" autofocus="autofocus" value="<?php echo set_value('nombre'); ?>">
            <?php if ($validation->getError('nombre')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('nombre'); ?>
              </div>
            <?php } ?>
          </div>
          <div class="col-md-6 form-group">
            <label for="apellido" class="control-label">Apellido<em>*</em></label>
            <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese su apellido" autofocus="autofocus" value="<?php echo set_value('apellido'); ?>">
            <?php if ($validation->getError('apellido')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('apellido'); ?>
              </div>
            <?php } ?>
          </div>
          <div class="col-md-6 form-group">
            <label for="email" class="control-label">E-mail <em>*</em></label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese su correo" autofocus="autofocus" value="<?php echo set_value('email'); ?>">
            <?php if ($validation->getError('email')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('email'); ?>
              </div>
            <?php } ?>
          </div>
          <div class="col-md-6 form-group">
            <label for="telefono" class="control-label">Teléfono</label>
            <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="Ingrese su teléfono" autofocus="autofocus" value="<?php echo set_value('telefono'); ?>">
            <?php if ($validation->getError('telefono')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('telefono'); ?>
              </div>
            <?php } ?>
          </div>
          <div class="col-md-6 form-group">
            <label for="direccion" class="control-label">Dirección <em>*</em></label>
            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese su direccion" autofocus="autofocus" value="<?php echo set_value('direccion'); ?>">
            <?php if ($validation->getError('direccion')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('direccion'); ?>
              </div>
            <?php } ?>
          </div>
          <div class="col-md-6 form-group">
            <label for="ciudad" class="control-label">Ciudad <em>*</em></label>
            <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="Ingrese su ciudad" autofocus="autofocus" value="<?php echo set_value('ciudad'); ?>">
            <?php if ($validation->getError('ciudad')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('ciiudad'); ?>
              </div>
            <?php } ?>
          </div>
          <div class="col-md-6 form-group">
            <label for="cod_postal" class="control-label">Código postal </label>
            <input type="text" name="cod_postal" id="cod_postal" class="form-control" placeholder="Ingrese su código postal" autofocus="autofocus" value="<?php echo set_value('cod_postal'); ?>">
            <?php if ($validation->getError('cod_postal')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('cod_postal'); ?>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card border-secondary mb-5">
        <div class="card-header bg-secondary border-0">
          <h4 class="font-weight-semi-bold m-0 text-primary">Total del pedido</h4>
        </div>
        <?php foreach ($cart->contents() as $items) {  ?>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <img heigth="90" width="90" src="<?php echo 'uploads/' . $items['imagen'] ?>" /></td>
              <td>
                <h6 class="font-weight-bold"><?php echo $items['name']; ?></h6>
              </td>
              <small class="text-muted">
                <td class="mob-hide"><?php echo number_format($items['price'], 2, ',', '.'); ?></td>
              </small>
            </div>
            <td><span><?php echo number_format($items['subtotal'], 2, ',', '.'); ?></span></td>
          </li>
        <?php } ?>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total</span>
          <strong>$ <?php echo number_format($cart->total(), 2, ',', '.'); ?></strong>
        </li>
        </ul>
          <div class="card border-secondary mb-5">
            <div class="card-header bg-secondary border-0">
              <h4 class="font-weight-semi-bold m-0 text-primary">Forma de pago</h4>
            </div>
            <div class="card-body">
              <div class="form-group">
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" name="payment" id="paypal">
                  <label class="custom-control-label" for="paypal">Paypal</label>
                </div>
              </div>
              <div class="form-group">
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                  <label class="custom-control-label" for="directcheck">Pago Directo</label>
                </div>
              </div>
              <div class="">
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                  <label class="custom-control-label" for="banktransfer">Transferencia</label>
                </div>
              </div>
            </div>
            <div class="">
              <?php echo form_submit('Comprar', 'Comprar', "class='btn btn-primary btn-block'"); ?>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Checkout End -->