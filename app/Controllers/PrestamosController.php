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
}
