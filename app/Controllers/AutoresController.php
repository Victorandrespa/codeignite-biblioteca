<?php

namespace App\Controllers;
use App\Models\AutoresModel;

class AutoresController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $estudiante = new AutoresModel();
        $datos['datos'] = $estudiante->findAll();
        return view('autores', $datos);
    }

    public function agregarAutor()
    {
        //crear un objeto de tipo empleado model
        $estudiante = new AutoresModel();
        $datos = [
            'codigo_autor' => $this->request->getPost('txt_c_autor'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'nacionalidad' => $this->request->getPost('txt_nacionalidad'),

        ];
        $estudiante->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $estudiante = new AutoresModel();
        $estudiante->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verAutores'));
    }
    public function buscar($id)
    {
        $estudiante = new AutoresModel();
        $datos['datos']= $estudiante->where(['codigo_autor' => $id])->first();
        return view('update_autor', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'codigo_autor' => $this->request->getPost('txt_c_autor'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'nacionalidad' => $this->request->getPost('txt_nacionalidad'),           
        ];
        //print_r($datos);
        $estudiante = new AutoresModel();
        $estudiante->update($datos['codigo_autor'],$datos);
        return $this->index();
    }

}