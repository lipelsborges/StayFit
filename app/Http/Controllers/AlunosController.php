<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function cadastrarAluno()
    {
        return view('alunos.cadastrar');
    }

    public function editarAluno()
    {
        return view('alunos.editar');
    }
}
