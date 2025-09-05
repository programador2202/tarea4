<?= $header; ?>

<div class="container mt-2">
  <div class="my-2">
    <h4>Registrar Editorial</h4>
    <a href="<?= base_url("editoriales"); ?>" class="btn btn-secondary btn-sm">Volver</a>
  </div>

  <form method="POST" action="<?= base_url('editoriales/registrar') ?>" enctype="multipart/form-data">
    <div class="card">
      <div class="card-body">

        <div class="mb-3">
          <label for="empresa" class="form-label">Empresa</label>
          <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Ej: Editorial Planeta" autofocus required>
        </div>

        <div class="mb-3">
          <label for="nacionalidad" class="form-label">Nacionalidad</label>
          <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" placeholder="Ej: Perú" required>
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
