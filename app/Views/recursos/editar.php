<?= $header; ?>

<div class="container mt-3">
  <div class="my-2">
    <h4>Editar Recurso</h4>
    <a href="<?= base_url("recursos"); ?>" class="btn btn-secondary btn-sm">Volver</a>
  </div>

  <form method="POST" action="<?= base_url('recursos/actualizar/'.$recurso['idrecurso']) ?>">
    <div class="card">
      <div class="card-body row g-3">

        <div class="col-md-6">
          <label for="idSubcategoria" class="form-label">Subcategoría</label>
          <select class="form-select" name="idSubcategoria" id="idSubcategoria" required>
            <option value="">-- Seleccione --</option>
            <?php foreach($subcategorias as $sub): ?>
              <option value="<?= $sub['idsubcategoria'] ?>" <?= ($recurso['idsubcategoria'] == $sub['idsubcategoria']) ? 'selected' : '' ?>>
                <?= $sub['nombre'] ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="col-md-6">
          <label for="idEditorial" class="form-label">Editorial</label>
          <select class="form-select" name="idEditorial" id="idEditorial" required>
            <option value="">-- Seleccione --</option>
            <?php foreach($editoriales as $edi): ?>
              <option value="<?= $edi['ideditorial'] ?>" <?= ($recurso['ideditorial'] == $edi['ideditorial']) ? 'selected' : '' ?>>
                <?= $edi['empresa'] ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="col-md-6">
          <label for="tipo" class="form-label">Tipo</label>
          <input type="text" class="form-control" name="tipo" id="tipo" value="<?= $recurso['tipo'] ?>" required>
        </div>

        <div class="col-md-6">
          <label for="titulo" class="form-label">Título</label>
          <input type="text" class="form-control" name="titulo" id="titulo" value="<?= $recurso['titulo'] ?>" required>
        </div>

        <div class="col-md-4">
          <label for="apublicacion" class="form-label">Año de Publicación</label>
          <input type="number" class="form-control" name="apublicacion" id="apublicacion" value="<?= $recurso['apublicacion'] ?>" required>
        </div>

        <div class="col-md-4">
          <label for="isbn" class="form-label">ISBN</label>
          <input type="text" class="form-control" name="isbn" id="isbn" value="<?= $recurso['isbn'] ?>">
        </div>

        <div class="col-md-4">
          <label for="numpaginas" class="form-label">Número de Páginas</label>
          <input type="number" class="form-control" name="numpaginas" id="numpaginas" value="<?= $recurso['numpaginas'] ?>">
        </div>

        <div class="col-md-6">
          <label for="rutaportada" class="form-label">Ruta Portada</label>
          <input type="text" class="form-control" name="rutaportada" id="rutaportada" value="<?= $recurso['rutaportada'] ?>">
        </div>

        <div class="col-md-6">
          <label for="rutarecurso" class="form-label">Ruta Recurso</label>
          <input type="text" class="form-control" name="rutarecurso" id="rutarecurso" value="<?= $recurso['rutarecurso'] ?>">
        </div>

        <div class="col-md-6">
          <label for="estado" class="form-label">Estado</label>
          <select class="form-select" name="estado" id="estado" required>
            <option value="1" <?= ($recurso['estado'] == 1) ? 'selected' : '' ?>>Activo</option>
            <option value="0" <?= ($recurso['estado'] == 0) ? 'selected' : '' ?>>Inactivo</option>
          </select>
        </div>

      </div>
      <div class="card-footer text-end">
        <button type="reset" class="btn btn-outline-secondary btn-sm">Cancelar</button>
        <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
      </div>
    </div>
  </form>
</div>

<?= $footer; ?>
