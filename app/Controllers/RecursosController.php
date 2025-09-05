<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Recursos;
use App\Models\Subcategoria;
use App\Models\Editoriales;

class RecursosController extends BaseController
{
    public function index(): string
    {
        $recursos = new Recursos();

        $datos['recursos'] = $recursos
            ->select('recursos.*, subcategorias.nombre as subcategoria, editoriales.empresa as editorial')
            ->join('subcategorias', 'subcategorias.idsubcategoria = recursos.idsubcategoria')
            ->join('editoriales', 'editoriales.ideditorial = recursos.ideditorial')
            ->orderBy('idrecurso', 'ASC')
            ->findAll();

        $datos['header'] = view('Layouts/header');
        $datos['footer'] = view('Layouts/footer');

        return view('recursos/listar', $datos);
    }

    public function crear(): string
    {
        $subcategoria = new Subcategoria();
        $editorial = new Editoriales();

        $datos['subcategorias'] = $subcategoria->findAll();
        $datos['editoriales'] = $editorial->findAll();

        $datos['header'] = view('Layouts/header');
        $datos['footer'] = view('Layouts/footer');

        return view('recursos/crear', $datos);
    }

    public function registrar()
    {
        if ($this->request->getMethod() === 'post') {
            $recurso = new Recursos();

            $data = [
                'idSubcategoria' => $this->request->getPost('idSubcategoria'),
                'idEditorial'    => $this->request->getPost('idEditorial'),
                'tipo'           => $this->request->getPost('tipo'),
                'titulo'         => $this->request->getPost('titulo'),
                'apublicacion'   => $this->request->getPost('apublicacion'),
                'isbn'           => $this->request->getPost('isbn'),
                'numpaginas'     => $this->request->getPost('numpaginas'),
                'rutaportada'    => $this->request->getPost('rutaportada'),
                'rutarecurso'    => $this->request->getPost('rutarecurso'),
                'estado'         => $this->request->getPost('estado'),
            ];

            $recurso->insert($data);
            return redirect()->to(base_url('recursos'));
        }
    }

    public function editar($id = null): string
    {
        $recurso = new Recursos();
        $subcategoria = new Subcategoria();
        $editorial = new Editoriales();

        $datos['recurso'] = $recurso->find($id);
        $datos['subcategorias'] = $subcategoria->findAll();
        $datos['editoriales'] = $editorial->findAll();

        $datos['header'] = view('Layouts/header');
        $datos['footer'] = view('Layouts/footer');

        return view('recursos/editar', $datos);
    }

    public function actualizar($id = null)
    {
        $recurso = new Recursos();

        $data = [
            'idSubcategoria' => $this->request->getPost('idSubcategoria'),
            'idEditorial'    => $this->request->getPost('idEditorial'),
            'tipo'           => $this->request->getPost('tipo'),
            'titulo'         => $this->request->getPost('titulo'),
            'apublicacion'   => $this->request->getPost('apublicacion'),
            'isbn'           => $this->request->getPost('isbn'),
            'numpaginas'     => $this->request->getPost('numpaginas'),
            'rutaportada'    => $this->request->getPost('rutaportada'),
            'rutarecurso'    => $this->request->getPost('rutarecurso'),
            'estado'         => $this->request->getPost('estado'),
        ];

        $recurso->update($id, $data);
        return redirect()->to(base_url('recursos'));
    }

    public function borrar($id = null)
    {
        $recurso = new Recursos();
        $recurso->delete($id);
        return redirect()->to(base_url('recursos'));
    }
}
