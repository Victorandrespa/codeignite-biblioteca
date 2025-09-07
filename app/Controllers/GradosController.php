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
}
