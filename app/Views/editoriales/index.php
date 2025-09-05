<?= $header; ?>

<div class="container mt-2">
  <div class="my-2">
    <h4>Lista de Editoriales</h4>
    <a href="<?= base_url("editoriales/crear"); ?>" class="btn btn-primary">Registrar</a>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-hover table-bordered align-middle">
      <colgroup>
        <col width="10%">
        <col width="45%">
        <col width="30%">
        <col width="15%">
      </colgroup>
      <thead class="table-dark text-center">
        <tr>
          <th>ID</th>
          <th>Empresa</th>
          <th>Nacionalidad</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($editoriales as $editorial): ?>
          <tr class="align-middle">
            <td><?= $editorial['ideditorial'] ?></td>
            <td><?= $editorial['empresa'] ?></td>
            <td><?= $editorial['nacionalidad'] ?></td>
            <td class="text-center">
              <a href="<?= base_url('editoriales/editar/' . $editorial['ideditorial']) ?>" class="btn btn-sm btn-info">Editar</a>
              <a href="<?= base_url('editoriales/borrar/' . $editorial['ideditorial']) ?>" class="btn btn-sm btn-danger">Eliminar</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?= $footer; ?>
