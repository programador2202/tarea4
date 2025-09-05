<?= $header; ?>

<div class="container mt-2">
  <div class="my-2">
    <h4>Lista de Subcategorías</h4>
    <a href="<?= base_url("subcategorias/crear"); ?>" class="btn btn-primary">Registrar</a>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-hover table-bordered align-middle">
      <colgroup>
        <col width="10%">
        <col width="30%">
        <col width="30%">
        <col width="30%">
      </colgroup>
      <thead class="table-dark text-center">
        <tr>
          <th>ID</th>
          <th>Nombre Subcategoría</th>
          <th>Categoría</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($subcategorias)): ?>
          <?php foreach($subcategorias as $subcategoria): ?>
            <tr class="align-middle">
              <td><?= $subcategoria['idsubcategoria'] ?></td>
              <td><?= $subcategoria['subcategoria'] ?></td>
              <td><?= $subcategoria['categoria'] ?></td>
              <td>
                <a href="<?= base_url('subcategorias/borrar/' . $subcategoria['idsubcategoria']) ?>" class="btn btn-sm btn-danger">Eliminar</a>
                <a href="<?= base_url('subcategorias/editar/' . $subcategoria['idsubcategoria']) ?>" class="btn btn-sm btn-info">Editar</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="4" class="text-center">No hay subcategorías registradas</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<?= $footer; ?>
