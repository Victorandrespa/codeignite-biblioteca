<?php

namespace App\Controllers;
use App\Models\EstudiantesModel;

class EstudiantesController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto de tipo estudianteModel
        $estudiantes = new EstudiantesModel();
        $datos['datos'] = $estudiantes->findAll();
        return view('estudiantes', $datos);
    }

    public function agregarEstudiante()
    {
        //crear un objeto de tipo empleado model
        $estudiante = new EstudiantesModel();
        $datos = [
            'carne_alumno' => $this->request->getPost('txt_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'direccion' => $this->request->getPost('txt_direccion'),
            'telefono' => $this->request->getPost('txt_telefono'),
            'email' => $this->request->getPost('txt_email'),
            'fechanacimiento' => $this->request->getPost('txt_f_nacimiento'),
            'codigo_grado' => $this->request->getPost('txt_c_grado'),

        ];
        $estudiante->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $estudiante = new EstudiantesModel();
        $estudiante->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verEstudiantes'));
    }
    public function buscar($id)
    {
        $estudiante = new EstudiantesModel();
        $datos['datos']= $estudiante->where(['carne_alumno' => $id])->first();
        return view('update_estudiante', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'carne_alumno' => $this->request->getPost('txt_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'direccion' => $this->request->getPost('txt_direccion'),
            'telefono' => $this->request->getPost('txt_telefono'),
            'email' => $this->request->getPost('txt_email'),
            'fechanacimiento' => $this->request->getPost('txt_f_nacimiento'),
            'codigo_grado' => $this->request->getPost('txt_c_grado'),
      
        ];
        //print_r($datos);
        $estudiante = new EstudiantesModel();
        $estudiante->update($datos['carne_alumno'],$datos);
        return $this->index();
    }
}
