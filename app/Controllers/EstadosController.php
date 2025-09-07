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
}
