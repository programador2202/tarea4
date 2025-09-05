<?= $header; ?>

<div class="container mt-2">
  <div class="my-2">
    <h4>Lista de Recursos</h4>
    <a href="<?= base_url("recursos/crear"); ?>" class="btn btn-primary">Registrar</a>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-hover table-bordered align-middle">
      <colgroup>
        <col width="5%">
        <col width="20%">
        <col width="15%">
        <col width="10%">
        <col width="10%">
        <col width="10%">
        <col width="10%">
        <col width="10%">
        <col width="10%">
      </colgroup>
      <thead class="table-dark text-center">
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>Subcategoría</th>
          <th>Editorial</th>
          <th>Tipo</th>
          <th>Año</th>
          <th>ISBN</th>
          <th>Páginas</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($recursos as $recurso): ?>
          <tr class="align-middle">
            <td><?= $recurso['idrecurso'] ?></td>
            <td><?= esc($recurso['titulo']) ?></td>
            <td><?= esc($recurso['subcategoria']) ?></td>
            <td><?= esc($recurso['editorial']) ?></td>
            <td><?= esc($recurso['tipo']) ?></td>
            <td><?= esc($recurso['apublicacion']) ?></td>
            <td><?= esc($recurso['isbn']) ?></td>
            <td><?= esc($recurso['numpaginas']) ?></td>
            <td class="text-center">
              <a href="<?= base_url('recursos/editar/' . $recurso['idrecurso']) ?>" class="btn btn-sm btn-info">Editar</a>
              <a href="<?= base_url('recursos/borrar/' . $recurso['idrecurso']) ?>" class="btn btn-sm btn-danger">Eliminar</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?= $footer; ?>
