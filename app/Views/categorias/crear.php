<?= $header; ?>

<div class="container mt-2">
  
  <div class="my-2">
    <h4>Registro de Categorías</h4>
    <a href="<?= base_url("categorias"); ?>" class="btn btn-primary" enctype="multipart/form-data">Volver</a>
  </div>

<form method="POST" action="<?= base_url('categorias/registrar') ?>" >
    <div class="mb-3">
        <label for="" class="form-label">Nombre de la categoría</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="<?= base_url('categorias') ?>" class="btn btn-secondary">Cancelar</a>
</form>



</div>

<?= $footer; ?>
