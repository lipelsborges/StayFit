<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\ExerciciosController;
use App\Http\Controllers\PlanosController;
use App\Http\Controllers\FuncionariosController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

//layout
Route::get('/', [SiteController::class, 'layout'])->name('index_page');

// Rota para a página de alunos
Route::get('/aluno', [AlunosController::class, 'aluno'])->name('alunos.index');
Route::get('/aluno/cadastrar', [AlunosController::class, 'cadastrarAlunoView'])->name('alunos.cadastrar');
Route::post('/aluno/cadastrarAluno', [AlunosController::class, 'cadastrarAluno'])->name('alunos.cadastrarAluno');
Route::get('/aluno/editar', [AlunosController::class, 'editarAluno'])->name('alunos.editar');


//Avaliação
Route::get('/avaliacao', [AvaliacaoController::class, 'index'])->name('avaliacao.index');

//Exercicios
Route::get('/exercicios', [ExerciciosController::class, 'index'])->name('exercicios.index');
Route::get('/exercicios/cadastrar', [ExerciciosController::class, 'cadastrar'])->name('exercicios.cadastrar');
Route::get('/exercicios/editar', [ExerciciosController::class, 'editar'])->name('exercicios.editar');

//Planos
Route::get('/planos', [PlanosController::class, 'index'])->name('planos.index');
Route::get('/planos/cadastrar', [PlanosController::class, 'cadastrar'])->name('planos.cadastrar');
Route::get('/planos/editar', [PlanosController::class, 'editar'])->name('planos.editar');

//Funcionários
Route::get('/funcionarios', [FuncionariosController::class, 'index'])->name('funcionarios.index');


// Route::get('/users', [UserController::class, 'index']);