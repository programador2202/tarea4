<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Categorias;

class CategoriaController extends BaseController
{
    // Listar categorías
    public function index(): string
    {
        $categoria = new Categorias();

        $datos['categorias'] = $categoria->orderBy('idcategoria', 'ASC')->findAll();

        // Cargar layout
        $datos['header'] = view('Layouts/header');
        $datos['footer'] = view('Layouts/footer');

        return view('categorias/listar', $datos);
    }

    // Formulario para crear
    public function crear(): string
    {
        $datos['header'] = view('Layouts/header');
        $datos['footer'] = view('Layouts/footer');

        return view('categorias/crear', $datos);
    }
// Guardar nueva categoría
public function registrar()
{
        $categoria = new Categorias();

        $nombre =$this->request->getVar('nombre');

        $registro = [
            'nombre' => $nombre
        ];

        $categoria->insert($registro);
        return $this->response->redirect(base_url ('categorias'));
        }




   public function borrar($id = null)
{
    $categoria = new Categorias();

    if ($categoria->find($id)) {
        $categoria->delete($id);
        return redirect()->to(base_url('categorias'))
                         ->with('success', 'Categoría eliminada correctamente');
    }

    return redirect()->to(base_url('categorias'))
                     ->with('error', 'La categoría no existe');
}


    // Formulario para editar
    public function editar($id = null): string
    {
        $categoria = new Categorias();

        $datos['categoria'] = $categoria->find($id);
        $datos['header'] = view('Layouts/header');
        $datos['footer'] = view('Layouts/footer');

        return view('categorias/editar', $datos);
    }

    // Actualizar categoría
public function actualizar()
{

    $categoria= new Categorias();

    $datos =[
        'nombre' => $this->request->getVar('nombre')
    ];

    $id=$this->request->getVar('idcategoria');

    $categoria->update($id,$datos); 
    
    return $this->response->redirect(base_url('categorias'));  


    }

}
