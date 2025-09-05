<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Categorias;

class CategoriaController extends BaseController
{

    public function index(): string
    {
        $categoria = new Categorias();

        $datos['categorias'] = $categoria->orderBy('idcategoria', 'ASC')->findAll();

        //Solicitar las secciones: HEADER+FOOTER
        $datos['header'] = view('Layouts/header');
        $datos['footer'] = view('Layouts/footer');

        return view('categorias/listar', $datos);
    }

    public function crear(): string
    {
        $datos['header'] = view('Layouts/header');
        $datos['footer'] = view('Layouts/footer');

        return view('categorias/registrar', $datos);
    }

   public function registrar()
{
    if ($this->request->getMethod() === 'post') {
        $categoria = new Categorias();
        $data = [
            'nombre' => $this->request->getPost('nombre')
        ];
        $categoria->insert($data);
        return redirect()->to(site_url('categorias'));
    }
}

    public function borrar($id = null)
    {
        $categoria = new Categorias();
        $categoria->delete($id);
        return redirect()->to(base_url('categorias'));
    }
    

    public function editar($id = null): string
    {
        $categoria = new Categorias();
        $datos['categoria'] = $categoria->find($id);

        $datos['header'] = view('Layouts/header');
        $datos['footer'] = view('Layouts/footer');

        return view('categorias/editar', $datos);
    }


    public function actualizar($id = null)
    {
        if ($this->request->getMethod() === 'post') {
            $categoria = new Categorias();
            $data = [
                'nombre' => $this->request->getPost('nombre')
            ];
            $categoria->update($id, $data);
            return redirect()->to(base_url('categorias'));
        }
    }
}
