<?php

namespace App\Controllers;
use App\Models\EmpleadosModel;

class EmpleadosController extends BaseController
{
     public function index(): string
    {
        //Crea un objeto 
        $estudiantes = new EmpleadosModel();
        $datos['datos'] = $estudiantes->findAll();
        return view('empleados', $datos);
    }

    public function login()
    {
        //iniciar la clase = crear un objeto
        $empleado = new EmpleadosModel();
        $usuario = $this->request->getPost('txt_usuario');
        $pass = $this->request->getPost('txt_password');

        $datos= $empleado->where('codigo_empleado', $usuario)->where('password', $pass)->first();
        
        if ($datos) {
            echo ("tipo de usuario de: ".$datos['tipo_usuario']);
            if ($datos['tipo_usuario']==1) {
                $ubicacion="menu_admin";
            }elseif ($datos['tipo_usuario']==2) {
                $ubicacion="menu_maestro";
            }elseif ($datos['tipo_usuario']==3) {
                $ubicacion="menu_biblio";
            }else {
                //return redirect()->to('/');
                return redirect()->back()->withInput()->with('errors', 'Usuariuos sin acceso');
            }
        }else {
            echo("datos incorrectos");
            //return redirect()->to('/');
            return redirect()->back()->withInput()->with('errors', 'Datos incorrectos');
        }
        return view($ubicacion);
        //print_r($datos);
    }

    public function agregarEmpleado()
    {
        //crear un objeto de tipo empleado model
        $estudiante = new EmpleadosModel();
        $datos = [
            'codigo_empleado' => $this->request->getPost('txt_c_empleado'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'direccion' => $this->request->getPost('txt_direccion'),
            'email' => $this->request->getPost('txt_email'),

        ];
        $estudiante->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $estudiante = new EmpleadosModel();
        $estudiante->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verEmpleados'));
    }
    public function buscar($id)
    {
        $estudiante = new EmpleadosModel();
        $datos['datos']= $estudiante->where(['codigo_empleado' => $id])->first();
        return view('update_empleado', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'codigo_empleado' => $this->request->getPost('txt_c_empleado'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'direccion' => $this->request->getPost('txt_direccion'),
            'email' => $this->request->getPost('txt_email'),       
        ];
        //print_r($datos);
        $estudiante = new EmpleadosModel();
        $estudiante->update($datos['codigo_empleado'],$datos);
        return $this->index();
    }

}
