<?php

namespace App\Controllers;
use App\Models\EditorialesModel;

class EditorialesController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $estudiantes = new EditorialesModel();
        $datos['datos'] = $estudiantes->findAll();
        return view('editoriales', $datos);
    }
}

