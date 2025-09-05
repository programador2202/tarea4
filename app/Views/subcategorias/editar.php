<?= $header; ?>

<div class="container mt-2">
  <div class="my-2">
    <h4>Editar Subcategoría</h4>
    <a href="<?= base_url("subcategorias"); ?>" class="btn btn-secondary btn-sm">Volver</a>
  </div>

  <form method="POST" action="<?= base_url('subcategorias/actualizar/' . $subcategoria['idsubcategoria']) ?>" enctype="multipart/form-data">
    <div class="card">
      <div class="card-body">
        
        <div class="mb-3">
          <label for="idcategoria" class="form-label">Categoría</label>
          <select name="idcategoria" id="idcategoria" class="form-select" required>
            <option value="">Seleccione una categoría</option>
            <?php foreach($categorias as $categoria): ?>
              <option value="<?= $categoria['idcategoria'] ?>" 
                <?= ($categoria['idcategoria'] == $subcategoria['idcategoria']) ? 'selected' : '' ?>>
                <?= $categoria['nombre'] ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre de la Subcategoría</label>
          <input type="text" class="form-control" name="nombre" id="nombre" 
                 value="<?= $subcategoria['nombre'] ?>" required>
        </div>

      </div>
      <div class="card-footer text-end">
        <button type="reset" class="btn btn-sm btn-outline-secondary">Cancelar</button>
        <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
      </div>
    </div>
  </form>
</div>

<?= $footer; ?>
