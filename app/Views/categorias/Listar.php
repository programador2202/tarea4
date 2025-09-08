<?= $header; ?>

<div class="container mt-2">
  <div class="my-2">
    <h4>Lista de Libros</h4>
    <a href="<?= base_url("categorias/crear");   ?> " class="btn btn-primary" enctype="multipart/form-data">Registrar</a>
  </div>

<div class="table-responsive">
  <table class="table table-striped table-hover table-bordered align-middle">
    <colgroup>
      <col width="10%">
      <col width="45%">
      <col width="45%">
    </colgroup>
    <thead class="table-dark text-center">
      <tr>
        <th>ID</th>
        <th>Nombre Categoría</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>

        <?php foreach($categorias as $categoria): ?>

        <tr class="align-middle">
          <td><?= $categoria['idcategoria'] ?></td>
          <td><?= $categoria['nombre'] ?></td>
          <td>
            <a href="<?= base_url('categorias/borrar/') ?><?= $categoria['idcategoria'] ?>" class="btn btn-sm btn-danger">Eliminar</a>
            <a href="<?= base_url('categorias/editar/') ?><?= $categoria['idcategoria'] ?>" class="btn btn-sm btn-info">Editar</a>
          </td>
        </tr>

        <?php endforeach; ?>

      </tbody>
    </table>
  </div>

</div>

<?= $footer; ?>