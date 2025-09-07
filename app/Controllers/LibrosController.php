<?php

namespace App\Controllers;
use App\Models\LibrosModel;

class LibrosController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $estudiantes = new LibrosModel();
        $datos['datos'] = $estudiantes->findAll();
        return view('libros', $datos);
    }
}
