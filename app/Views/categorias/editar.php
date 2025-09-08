<?= $header; ?>

<div class="container mt-2">
  <div class="my-2 d-flex justify-content-between align-items-center">
    <h4>Editar Categoría</h4>
    <a href="<?= base_url("categorias"); ?>" class="btn btn-secondary btn-sm">Volver</a>
  </div>

  <form method="POST" action="<?= base_url('categorias/actualizar') ?>">

    <!-- Esta caja actua como contenedor para la PK -->
    <input type="hidden" name="idcategoria" value="<?= $categoria['idcategoria'] ?>">

    <?= csrf_field(); ?>
    <div class="card">
      <div class="card-body">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre de la Categoría</label>
          <input 
            type="text" 
            class="form-control" 
            name="nombre" 
            id="nombre" 
            value="<?= esc($categoria['nombre']) ?>" 
            required
          >
        </div>
      </div>
      <div class="card-footer text-end">
        <a href="<?= base_url('categorias') ?>" class="btn btn-sm btn-outline-secondary">Cancelar</a>
        <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
      </div>
    </div>
  </form>
</div>

<?= $footer; ?>
