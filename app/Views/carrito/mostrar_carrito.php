<?php $cart = \Config\Services::cart();
$cart->contents();
if (empty($cart->contents())) { ?>
   <br>
   <div class="container" id="carrito">
      <div class="card">
         <div class="col-12">
            <br>
            <h1 class="text-center">Carrito de compras</h1>
         </div>
         <div class="col-12 alert alert-primary" role="alert">
            <h4>Su carrito se encuentra vacío. Puedes volver y comenzar a añadir productos. </h4>
            <p class="text-center"><a href="<?php echo base_url('/mostrar_productos'); ?>" class=" btn btn-info" title="← continuar comprando">← Volver y seguir comprando</a></p>
            <div class="text-center">
               <img src="assets/img/carrito.png " height="300px" width="320px" href=" <?php echo base_url(); ?>" alt="Carrito Vacio">
            </div>
         </div>
      </div>
   </div>
<?php }; ?>
<?php if ($cart->contents()) { ?>
   <?php echo form_open('actualizar_carrito'); ?>
   <!-- Cart Start -->
   <div class="container-fluid pt-5">
      <div class="row px-xl-5">
         <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
               <thead class="bg-secondary text-dark">
                  <tr>
                     <th>Productos</th>
                     <th>Precio</th>
                     <th>Cantidad</th>
                     <th>Total</th>
                     <th>Remover</th>
                  </tr>
               </thead>
               <?php $gran_total = 0;
               $i = 1;
               foreach ($cart->contents() as $items) :
                  echo form_hidden($i . '[rowid]', $items['rowid']);
                  echo form_hidden('cart[' . $items['id'] . '][id]', $items['id']);
                  echo form_hidden('cart[' . $items['id'] . '][name]', $items['name']);
                  echo form_hidden('cart[' . $items['id'] . '][price]', $items['price']);
                  echo form_hidden('cart[' . $items['id'] . '][rowid]', $items['rowid']);
                  echo form_hidden('cart[' . $items['id'] . '][qty]', $items['qty']);
                  echo form_hidden('cart[' . $items['id'] . '][imagen]', $items['imagen']);
               ?>
                  <tbody class="align-middle">
                     <tr>
                        <td class="align-middle"><img src="<?php echo 'uploads/' . $items['imagen'] ?>" alt="" style="width: 50px;"> <?php echo $items['name']; ?></td>
                        <td class="align-middle"><?php echo '$' . ($items['price']); ?></td>
                        <td class="align-middle"><?php echo form_input(array('pattern' => '\d+', 'id' => 'cantidad', 'name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                        <td class="align-middle"> <?php echo '$' . ($items['price'] * $items['qty']); ?></td>
                        <td><a class="btn btn-primary" href="<?php echo base_url('quitar_carrito/' . $items['rowid']); ?>"><i class="fas fa-trash"></i></td>
                     </tr>
                     <?php $i++; ?>
                  <?php endforeach ?>
                  <table class="float-right">
                     <tr>
                        <td><?php echo form_submit('Actualizar Carrito', 'Actualizar Carrito', 'class="btn btn-primary delete"'); ?></td>
                        <td><a class="btn btn-primary delete" href="<?php echo base_url('borrar'); ?>">Vaciar carrito</a></td>
                     </tr>
                  </table>
            </table>
            <?php echo form_close(); ?>
            </tbody>
            </table>
         </div>
         <div class="col-lg-4">
            <form class="mb-5" action="">
               <div class="input-group">
                  <input type="text" class="form-control p-4" placeholder="Coupon Code">
                  <div class="input-group-append">
                     <button class="btn btn-primary">Aplicar cupon</button>
                  </div>
               </div>
            </form>
            <div class="card border-secondary mb-5">
               <div class="card-header bg-secondary border-0">
                  <h4 class="font-weight-semi-bold m-0">Resumen del Carrito</h4>
               </div>
               <div class="card-footer border-secondary bg-transparent">
                  <div class="d-flex justify-content-between mt-2">
                     <h5 class="font-weight-bold">Total</h5>
                     <h5 class="font-weight-bold"><?php echo '$' . ($cart->total()); ?></h5>
                  </div>
                  <a href="<?php echo base_url('/finalizar_compra'); ?>" class="btn btn-primary btn-block" title="comprar">Comprar</a>
                  <a href="<?php echo base_url('/mostrar_productos'); ?>" class="btn btn-link btn-block" title="← continuar comprando">← Continuar comprando</a>
               </div>
            </div>
         </div>
         <!-- Cart End -->
      <?php }; ?>