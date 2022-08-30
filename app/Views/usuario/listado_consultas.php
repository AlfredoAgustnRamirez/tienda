<div class="col-lg-10 mb-4">
  <h1 class="text-center py-3">Listado de consultas de usuarios registrados</h1>
  <table class="table table-striped">
    <thead class="thead">
      <tr>

        <th class="text-center">Id Consulta</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Apellido</th>
        <th class="text-center">email</th>
        <th class="text-center">Teléfono</th>
        <th class="text-center">Consulta</th>
        <th class="text-center">Estado de consulta</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($consultas as $row) { ?>
        <?php if ($row['registrado'] == "SI") { ?>
          <tr>
            <td class="text-center"><?php echo $row['id_consultas']; ?></td>
            <td class="text-center"><?php echo $row['nombre']; ?></td>
            <td class="text-center"><?php echo $row['apellido']; ?></td>
            <td class="text-center"><?php echo $row['email']; ?></td>
            <td class="text-center"><?php echo $row['telefono']; ?></td>
            <td class="text-justify"><?php echo $row['consulta']; ?></td>
            <td class="text-center"><?php echo $row['estado_consulta']; ?></td>
          </tr>
        <?php }; ?>
      <?php }; ?>
    </tbody>
  </table>
</div>
</div>
</div>
