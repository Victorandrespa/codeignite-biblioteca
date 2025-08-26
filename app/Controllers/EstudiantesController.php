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
}
