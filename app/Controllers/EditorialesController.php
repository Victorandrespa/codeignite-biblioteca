<?php

namespace App\Controllers;
use App\Models\EditorialesModel;

class EditorialesController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $estudiantes = new EditorialesModel();
        $datos['datos'] = $estudiantes->findAll();
        return view('editoriales', $datos);
    }
    public function agregarEditorial()
    {
        //crear un objeto de tipo empleado model
        $estudiante = new EditoresModel();
        $datos = [
            'codigo_editorial' => $this->request->getPost('txt_c_editorial'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'direccion' => $this->request->getPost('txt_direccion'),
            'telefono' => $this->request->getPost('txt_telefono'),
            'email' => $this->request->getPost('txt_email'),

        ];
        $estudiante->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $estudiante = new EditorialesModel();
        $estudiante->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verEditoriales'));
    }
    public function buscar($id)
    {
        $estudiante = new EditorialesModel();
        $datos['datos']= $estudiante->where(['codigo_editorial' => $id])->first();
        return view('update_editorial', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'codigo_editorial' => $this->request->getPost('txt_c_editorial'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'direccion' => $this->request->getPost('txt_direccion'),
            'telefono' => $this->request->getPost('txt_telefono'),
            'email' => $this->request->getPost('txt_email'),        
        ];
        //print_r($datos);
        $estudiante = new EditorialesModel();
        $estudiante->update($datos['codigo_editorial'],$datos);
        return $this->index();
    }
}

