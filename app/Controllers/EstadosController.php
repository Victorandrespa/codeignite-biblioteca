<?php

namespace App\Controllers;
use App\Models\EstadosModel;

class EstadosController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $estudiantes = new EstadosModel();
        $datos['datos'] = $estudiantes->findAll();
        return view('estados', $datos);
    }

    public function agregarEstado()
    {
        //crear un objeto de tipo empleado model
        $estudiante = new EstadosModel();
        $datos = [
            'codigo_estado' => $this->request->getPost('txt_c_estado'),
            'nombre' => $this->request->getPost('txt_nombre'),
           
        ];
        $estudiante->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $estudiante = new EstadosModel();
        $estudiante->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verEstados'));
    }
    public function buscar($id)
    {
        $estudiante = new EstadosModel();
        $datos['datos']= $estudiante->where(['codigo_estado' => $id])->first();
        return view('update_estado', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'codigo_estado' => $this->request->getPost('txt_c_estado'),
            'nombre' => $this->request->getPost('txt_nombre'),
        ];
        //print_r($datos);
        $estudiante = new EstadosModel();
        $estudiante->update($datos['codigo_estado'],$datos);
        return $this->index();
    }

}
