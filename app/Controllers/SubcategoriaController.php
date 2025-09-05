<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Subcategoria;
use App\Models\Categorias;

class SubcategoriaController extends BaseController
{
    // Listar subcategorías con su categoría
    public function index(): string
    {
        $subcategoria = new Subcategoria();

        $datos['subcategorias'] = $subcategoria
            ->select('subcategorias.idsubcategoria, subcategorias.nombre as subcategoria, categorias.nombre as categoria')
            ->join('categorias', 'categorias.idcategoria = subcategorias.idcategoria')
            ->orderBy('subcategorias.idsubcategoria', 'ASC')
            ->findAll();

        $datos['header'] = view('Layouts/header');
        $datos['footer'] = view('Layouts/footer');

        return view('subcategorias/listar', $datos);
    }

    // Mostrar formulario para crear
    public function crear(): string
    {
        $categoria = new Categorias();
        $datos['categorias'] = $categoria->findAll(); 

        $datos['header'] = view('Layouts/header');
        $datos['footer'] = view('Layouts/footer');

        return view('subcategorias/registrar', $datos);
    }

    // Registrar subcategoría
    public function registrar()
    {
        if ($this->request->getMethod() === 'post') {
            $subcategoria = new Subcategoria();
            $data = [
                'idcategoria' => $this->request->getPost('idcategoria'),
                'nombre'      => $this->request->getPost('nombre')
            ];
            $subcategoria->insert($data);
            return redirect()->to(base_url('subcategorias'));
        }
    }

    // Eliminar subcategoría
    public function borrar($id = null)
    {
        $subcategoria = new Subcategoria();
        $subcategoria->delete($id);
        return redirect()->to(base_url('subcategorias'));
    }

    // Editar subcategoría
    public function editar($id = null): string
    {
        $subcategoria = new Subcategoria();
        $categoria = new Categorias();

        $datos['subcategoria'] = $subcategoria->find($id);
        $datos['categorias']   = $categoria->findAll(); 

        $datos['header'] = view('Layouts/header');
        $datos['footer'] = view('Layouts/footer');

        return view('subcategorias/editar', $datos);
    }

    // Actualizar subcategoría
    public function actualizar($id = null)
    {
        if ($this->request->getMethod() === 'post') {
            $subcategoria = new Subcategoria();
            $data = [
                'idcategoria' => $this->request->getPost('idcategoria'),
                'nombre'      => $this->request->getPost('nombre')
            ];
            $subcategoria->update($id, $data);
            return redirect()->to(base_url('subcategorias'));
        }
    }
}
