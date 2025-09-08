<?php

namespace App\Controllers;
use App\Models\PrestamosModel;

class PrestamosController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $estudiantes = new PrestamosModel();
        $datos['datos'] = $estudiantes->findAll();
        return view('prestamos', $datos);
    }

    public function agregarPrestamo()
    {
        //crear un objeto de tipo empleado model
        $estudiante = new PrestamosModel();
        $datos = [
            'numero_prestamo' => $this->request->getPost('txt_n_prestamo'),
            'codigo_libro' => $this->request->getPost('txt_c_libro'),
            'carne_alumno' => $this->request->getPost('txt_c_alumno'),
            'fecha_prestamo' => $this->request->getPost('txt_f_prestamo'),
            'fecha_devolucion' => $this->request->getPost('txt_f_devolucion'),
            'codigo_empleado' => $this->request->getPost('txt_c_empleado'),           

        ];
        $estudiante->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $estudiante = new PrestamosModel();
        $estudiante->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verPrestamos'));
    }
    public function buscar($id)
    {
        $estudiante = new PrestamosModel();
        $datos['datos']= $estudiante->where(['numero_prestamo' => $id])->first();
        return view('update_prestamo', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'numero_prestamo' => $this->request->getPost('txt_n_prestamo'),
            'codigo_libro' => $this->request->getPost('txt_c_libro'),
            'carne_alumno' => $this->request->getPost('txt_c_alumno'),
            'fecha_prestamo' => $this->request->getPost('txt_f_prestamo'),
            'fecha_devolucion' => $this->request->getPost('txt_f_devolucion'),
            'codigo_empleado' => $this->request->getPost('txt_c_empleado'),            
        ];
        //print_r($datos);
        $estudiante = new PrestamosModel();
        $estudiante->update($datos['numero_prestamo'],$datos);
        return $this->index();
    }
}
