<?php

namespace App\Controllers;
use App\Models\LibrosModel;

class LibrosController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $estudiantes = new LibrosModel();
        $datos['datos'] = $estudiantes->findAll();
        return view('libros', $datos);
    }

     public function agregarLibro()
    {
        //crear un objeto de tipo empleado model
        $estudiante = new LibrosModel();
        $datos = [
            'codigo_libro' => $this->request->getPost('txt_id'),
            'codigo_autor' => $this->request->getPost('txt_c_autor'),
            'codigo_editorial' => $this->request->getPost('txt_c_editorial'),
            'titulo' => $this->request->getPost('txt_titulo'),
            'numero_paginas' => $this->request->getPost('txt_numero'),
            'tamanio' => $this->request->getPost('txt_tamanio'),
            'precio' => $this->request->getPost('txt_precio'),
            'estado' => $this->request->getPost('txt_estado'),
            'edicion' => $this->request->getPost('txt_edicion'),

        ];
        $estudiante->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $estudiante = new LibrosModel();
        $estudiante->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verLibros'));
    }
    public function buscar($id)
    {
        $estudiante = new LibrosModel();
        $datos['datos']= $estudiante->where(['codigo_libro' => $id])->first();
        return view('update_libro', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'codigo_libro' => $this->request->getPost('txt_c_libro'),
            'codigo_autor' => $this->request->getPost('txt_c_autor'),
            'codigo_editorial' => $this->request->getPost('txt_c_editorial'),
            'titulo' => $this->request->getPost('txt_titulo'),
            'numero_paginas' => $this->request->getPost('txt_numero'),
            'tamanio' => $this->request->getPost('txt_tamanio'),
            'precio' => $this->request->getPost('txt_precio'),
            'estado' => $this->request->getPost('txt_estado'),
            'edicion' => $this->request->getPost('txt_edicion'),
      
        ];
        //print_r($datos);
        $estudiante = new LibrosModel();
        $estudiante->update($datos['codigo_libro'],$datos);
        return $this->index();
    }
}
