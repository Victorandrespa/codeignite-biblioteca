<?php

namespace App\Controllers;
use App\Models\GradosModel;

class GradosController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $estudiantes = new GradosModel();
        $datos['datos'] = $estudiantes->findAll();
        return view('grados', $datos);
    }
     public function agregarGrado()
    {
        //crear un objeto de tipo empleado model
        $estudiante = new GradosModel();
        $datos = [
            'codigo_grado' => $this->request->getPost('txt_c_grado'),
            'nombre' => $this->request->getPost('txt_nombre'),          

        ];
        $estudiante->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $estudiante = new GradosModel();
        $estudiante->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verGrados'));
    }
    public function buscar($id)
    {
        $estudiante = new GradosModel();
        $datos['datos']= $estudiante->where(['codigo_grado' => $id])->first();
        return view('update_grado', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'codigo_grado' => $this->request->getPost('txt_c_grado'),
            'nombre' => $this->request->getPost('txt_nombre'),           
        ];
        //print_r($datos);
        $estudiante = new GradosModel();
        $estudiante->update($datos['codigo_grado'],$datos);
        return $this->index();
    }
}
