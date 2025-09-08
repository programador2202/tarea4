<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Editoriales;

class EditorialController extends BaseController
{
 
    public function index(): string
    {
        $editorial = new Editoriales();

        $datos['editoriales'] = $editorial->orderBy('ideditorial', 'ASC')->findAll();

        $datos['header'] = view('Layouts/header');
        $datos['footer'] = view('Layouts/footer');

        return view('editoriales/index', $datos);
    }
    public function crear(): string
    {
        $datos['header'] = view('Layouts/header');
        $datos['footer'] = view('Layouts/footer');

        return view('editoriales/crear', $datos);
    }

    public function registrar()
    {
        if ($this->request->getMethod() === 'post') {
            $editorial = new Editoriales();
            $data = [
                'empresa'      => $this->request->getPost('empresa'),
                'nacionalidad' => $this->request->getPost('nacionalidad')
            ];
            $editorial->insert($data);
            return redirect()->to(base_url('editoriales'));
        }
    }

   
    public function borrar($id = null)
    {
        $editorial = new Editoriales();
        $editorial->delete($id);
        return redirect()->to(base_url('editoriales'));
    }

  
    public function editar($id = null): string
    {
        $editorial = new Editoriales();
        $datos['ideditorial'] = $editorial->find($id);

        $datos['header'] = view('Layouts/header');
        $datos['footer'] = view('Layouts/footer');

        return view('editoriales/editar', $datos);
    }

    public function actualizar($id = null)
    {
        if ($this->request->getMethod() === 'post') {
            $editorial = new Editoriales();
            $data = [
                'empresa'      => $this->request->getPost('empresa'),
                'nacionalidad' => $this->request->getPost('nacionalidad')
            ];
            $editorial->update($id, $data);
            return redirect()->to(base_url('editoriales'));
        }
    }
}
