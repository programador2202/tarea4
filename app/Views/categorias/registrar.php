<?= $header; ?>

<div class="container mt-2">
  <div class="my-2">
    <h4>Registro de Categorías</h4>
    <a href="<?= base_url("categorias"); ?>" class="btn btn-primary">Volver</a>
  </div>

<form method="POST" action="<?= base_url('categorias/guardar') ?>">
    <div class="card">
      <div class="card-body">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre de la categoría</label>
          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ejemplo: Matemáticas" autofocus required>
        </div>
      </div>
      <div class="card-footer text-end">
        <button type="reset" class="btn btn-sm btn-outline-secondary">Cancelar</button>
        <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
      </div>
    </div>
  </form>

</div>

<?= $footer; ?>
