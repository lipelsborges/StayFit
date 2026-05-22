<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{

    public function aluno()
    {
        $alunos = Alunos::all();

        return view('alunos.index', compact('alunos'));
    }

    public function cadastrarAlunoView($dados = null)
    {
        return view('alunos.cadastrar');
    }

    public function cadastrarAluno(Request $request)
    {
        $dados = $request->all();
        $dados['email'] = 'felipe@gmail.com';

        Alunos::create($dados);

        return redirect()->route('alunos.index');
    }

    public function editarAluno()
    {
        return view('alunos.editar');
    }
}
