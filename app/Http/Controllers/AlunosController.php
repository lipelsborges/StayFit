<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Plano;
use Illuminate\Http\Request;

class AlunosController extends Controller
{

    public function aluno()
    {
        $alunos = Aluno::all();

        return view('alunos.index', compact('alunos'));
    }

    public function cadastrarAlunoView($dados = null)
    {
        $planos = Plano::all();

        return view('alunos.cadastrar', compact('planos'));
    }

    public function cadastrarAluno(Request $request)
    {
        $dados = $request->all();
        Aluno::create($dados);

        return redirect()->route('alunos.index');
    }

    public function editarAluno($id)
    {
        $aluno = Aluno::findOrFail($id);
        $planos = Plano::all();
        return view('alunos.editar', compact('aluno', 'planos'));
    }

    public function update(Request $request, $id)
    {
        
        $aluno = Aluno::findOrFail($id);


        
        $aluno->update([
            'nome'     => $request->nome,
            'cpf'      => $request->cpf,
            'datanasc' => $request->datanasc, 
            'plano_id' => $request->plano_id, 
        ]);

       
        return redirect()->route('alunos.index')->with('success', 'Aluno atualizado com sucesso!');
    }
}
