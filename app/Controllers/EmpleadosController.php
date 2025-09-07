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
}
